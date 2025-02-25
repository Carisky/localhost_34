<?php
class ControllerExtensionModuleNrWholesale extends Controller {
    public function index() {
        $this->load->language('checkout/buy');
        
        if (false) {
            $data['redirect'] = $this->url->link('common/home', '', true);
        } else {
            $this->load->model('catalog/category');
            $this->load->model('catalog/product');
            $this->load->model('tool/image');
            $this->load->model('account/address');
            
            // Получаем все корневые категории
            $categories = $this->model_catalog_category->getCategories(0);
            foreach ($categories as &$category) {
                $products = $this->model_catalog_product->getProducts([
                    'filter_category_id' => $category['category_id'],
                    'sort'               => 'pd.name',
                ]);
                
                foreach ($products as &$product) {
                    $price = $product['price'] * (1 - floatval($this->config->get('module_nr_wholesale_discount')) / 100);
                    $image = $product['image'] ? $product['image'] : 'placeholder.png';
                    $product['in_pack'] = trim($product['jan']) ? (int)$product['jan'] : 6;
                    if ($product['minimum'] > $product['in_pack']) {
                        $product['minimum'] = ceil($product['minimum'] / $product['in_pack']) - 1;
                    } else {
                        $product['minimum'] = 0;
                    }
                    $product['thumb'] = $this->model_tool_image->resize($image, $this->config->get('theme_default_image_cart_width'), $this->config->get('theme_default_image_cart_height'));
                    $product['price_abs'] = $price;
                    $product['price1'] = $this->currency->format($price, $this->session->data['currency']);
                    $product['href'] = $this->url->link('product/product', '&product_id=' . $product['product_id'], true);
                }
                unset($product);
                
                $category['products'] = $products;
            }
            unset($category);
            $data['categories'] = $categories;
            
            // Получаем адреса пользователя
            $data['addresses'] = $this->model_account_address->getAddresses();
            $data['address_id'] = $this->customer->getAddressId();
            
            // Автозаполнение формы данными пользователя (если он залогинен)
            if (!empty($this->customer->getId())) {
                $data['address'] = [
                    'email'      => $this->customer->getEmail(),
                    'telephone'  => $this->customer->getTelephone(),
                    'firstname'  => $this->customer->getFirstName(),
                    'lastname'   => $this->customer->getLastName(),
                    'address_1'  => '', // Если необходимо, можно дополнять данными из адресов
                    'address_id' => $this->customer->getAddressId() ? $this->customer->getAddressId() : 0,
                    'comment'    => ''
                ];
            } else {
                $data['address'] = [
                    'email'      => '',
                    'telephone'  => '',
                    'firstname'  => '',
                    'lastname'   => '',
                    'address_1'  => '',
                    'address_id' => 0,
                    'comment'    => ''
                ];
            }
            // Сохраняем адрес в сессию, если еще не установлен
            if (empty($this->session->data['wholesale_address'])) {
                $this->session->data['wholesale_address'] = $data['address'];
            }
            
            $data['cart_products'] = empty($this->session->data['wholesale_products']) ? [] : $this->session->data['wholesale_products'];
            $data['totals'] = $this->calculate(false);
        }
        
        return $this->load->view('extension/module/nr_wholesale', $data);
    }
    
    public function change_address() {
        $address_id = $this->request->post['address']['address_id'];
        $this->load->model('account/address');
        $info = $this->model_account_address->getAddress($address_id);
        $address = $info['zone_id'] ? $this->model_account_address->getZone($info['zone_id']) : '';
        $address .= ($address ? ', ' : '') . $info['city'];
        $address .= $info['postcode'] ? ', ' . $info['postcode'] : (isset($this->session->data['wholesale_address']['postcode']) ? $this->session->data['wholesale_address']['postcode'] : '');
        $address .= ', ' . $info['address_1'];
        $phone = !empty($info['custom_field'][4]) ? $info['custom_field'][4] : '';
        if (!$phone && !empty($this->session->data['wholesale_address']['telephone'])) {
            $phone = $this->session->data['wholesale_address']['telephone'];
        }
        if (!$phone) {
            $phone = $this->customer->getTelephone();
        }
        
        $data_address = [
            'email'      => $this->customer->getEmail(),
            'telephone'  => $phone,
            'firstname'  => $info['firstname'],
            'lastname'   => $info['lastname'],
            'address_1'  => $address,
            'address_id' => $address_id,
            'comment'    => $this->request->post['address']['comment']
        ];
        foreach ($data_address as $key => $value) {
            if ($value) {
                $this->session->data['wholesale_address'][$key] = $value;
            }
        }
        exit();
    }
    
    public function calculate($json = true) {
        if ($json) {
            $cart_products = $this->request->post['product'];
            $this->session->data['wholesale_products'] = $cart_products;
            $this->session->data['wholesale_address'] = $this->request->post['address'];
        } else {
            $cart_products = isset($this->session->data['wholesale_products']) ? $this->session->data['wholesale_products'] : [];
        }
        
        if (empty($cart_products)) {
            $amount = $this->currency->format(0, $this->session->data['currency']);
            $data = [
                'subtotal' => $amount,
                'discount' => $amount,
                'total'    => $amount
            ];
            
            if ($json) {
                $this->sendJSON($data);
            }
            return $data;
        }
        
        $amount = 0;
        foreach ($cart_products as &$product) {
            if (!$product['quantity']) continue;
            $amount += (float)$product['price'] * $product['quantity'];
        }
        
        if ($amount >= $this->config->get('module_nr_wholesale_sum3')) {
            $discount = $this->config->get('module_nr_wholesale_discount3');
        } elseif ($amount >= $this->config->get('module_nr_wholesale_sum2')) {
            $discount = $this->config->get('module_nr_wholesale_discount2');
        } elseif ($amount >= $this->config->get('module_nr_wholesale_sum1')) {
            $discount = $this->config->get('module_nr_wholesale_discount1');
        } else {
            $discount = 0;
        }
        
        $subtotal = round($amount * (1 - $this->config->get('module_nr_wholesale_discount') / 100), 2);
        if ($discount > 0) {
            $total = round($amount * (1 - ($discount + $this->config->get('module_nr_wholesale_discount')) / 100), 2);
            $discount = $total - $subtotal;
        } else {
            $total = $subtotal;
        }
        
        $data = [
            'subtotal' => $this->currency->format($subtotal, $this->session->data['currency']),
            'discount' => $this->currency->format($discount, $this->session->data['currency']),
            'total'    => $this->currency->format($total, $this->session->data['currency'])
        ];
        if ($json) {
            $this->sendJSON($data);
        }
        return $data;
    }
    
    public function order() {
        $address = $this->request->post['address'];
        $products = $this->request->post['product'];
        $this->session->data['wholesale_address'] = $address;
        $error = $this->validateAddress($address, $products);
        if ($error) {
            $this->sendJSON(['error' => $error]);
        }
        
        $this->load->language('checkout/buy');
        $this->load->model('localisation/country');
        $this->load->model('checkout/order');
        $this->load->model('catalog/product');
        
        $custom_fields = [];
        
        $country_info = $this->model_localisation_country->getCountry($this->config->get('config_country_id'));
                
        $order_data = [];
        $order_data['invoice_prefix'] = $this->config->get('config_invoice_prefix');
        $order_data['store_id'] = $this->config->get('config_store_id');
        $order_data['store_name'] = $this->config->get('config_name');
        if ($order_data['store_id']) {
            $order_data['store_url'] = $this->config->get('config_url');
        } else {
            $order_data['store_url'] = ($this->request->server['HTTPS']) ? HTTPS_SERVER : HTTP_SERVER;
        }
        $order_data['customer_id'] = $this->customer->getId();
        $order_data['customer_group_id'] = $this->customer->getGroupId();
        $order_data['firstname'] = $address['firstname'];
        $order_data['lastname'] = $address['lastname'];
        $order_data['email'] = $address['email'];
        $order_data['telephone'] = $address['telephone'];
        $order_data['comment'] = $address['comment'];
        $order_data['custom_field'] = [
            5 => isset($custom_fields[5]) ? $custom_fields[5] : '',
            2 => isset($custom_fields[2]) ? $custom_fields[2] : ''
        ];
        
        $order_data['payment_company'] = isset($custom_fields[1]) ? $custom_fields[1] : '';
        $order_data['payment_firstname'] = $order_data['firstname'];
        $order_data['payment_lastname'] = $order_data['lastname'];
        $order_data['payment_address_1'] = $address['address_1'];
        $order_data['payment_address_2'] = '';
        $order_data['payment_city'] = '';
        $order_data['payment_postcode'] = '';
        $order_data['payment_zone'] = '';
        $order_data['payment_zone_id'] = 0;
        $order_data['payment_country'] = $country_info['name'];
        $order_data['payment_country_id'] = $this->config->get('config_country_id');
        $order_data['payment_address_format'] = '';
        $order_data['payment_custom_field'] = [];
        
        $order_data['shipping_firstname'] = $order_data['payment_firstname'];
        $order_data['shipping_lastname'] = $order_data['payment_lastname'];
        $order_data['shipping_company'] = $order_data['payment_company'];
        $order_data['shipping_address_1'] = $order_data['payment_address_1'];
        $order_data['shipping_address_2'] = $order_data['payment_address_2'];
        $order_data['shipping_city'] = $order_data['payment_city'];
        $order_data['shipping_postcode'] = $order_data['payment_postcode'];
        $order_data['shipping_zone'] = $order_data['payment_zone'];
        $order_data['shipping_zone_id'] = $order_data['payment_zone_id'];
        $order_data['shipping_country'] = $order_data['payment_country'];
        $order_data['shipping_country_id'] = $order_data['payment_country_id'];
        $order_data['shipping_address_format'] = $order_data['payment_address_format'];
        $order_data['shipping_custom_field'] = $order_data['payment_custom_field'];
        
        $order_data['shipping_method'] = '';
        $order_data['shipping_code'] = '';
        $order_data['payment_method'] = '';
        $order_data['payment_code'] = '';
        
        $order_data['products'] = [];
        $amount = 0;
        foreach ($products as $product) {
            if (!$product['quantity']) continue;
            $product_info = $this->model_catalog_product->getProduct($product['product_id']);
            $amount += $product_info['price'] * $product['quantity'];
            $price = $product_info['price'] * (1 - $this->config->get('module_nr_wholesale_discount') / 100);
            $order_data['products'][] = [
                'product_id' => $product['product_id'],
                'name'       => $product_info['name'],
                'model'      => $product_info['model'],
                'option'     => [],
                'download'   => [],
                'quantity'   => $product['quantity'],
                'subtract'   => $product_info['subtract'],
                'price'      => $price,
                'total'      => $price * $product['quantity'],
                'tax'        => $this->tax->getTax($product_info['price'], $product_info['tax_class_id']),
                'reward'     => 0,
                'image'      => ($product_info['image'] ? $product_info['image'] : ''),
                'sku'        => $product_info['sku'],
                'weight'     => $product_info['weight'],
            ];
        }
        
        if ($amount >= floatval($this->config->get('module_nr_wholesale_sum3'))) {
            $discount = floatval($this->config->get('module_nr_wholesale_discount3'));
        } elseif ($amount >= floatval($this->config->get('module_nr_wholesale_sum2'))) {
            $discount = floatval($this->config->get('module_nr_wholesale_discount2'));
        } elseif ($amount >= floatval($this->config->get('module_nr_wholesale_sum1'))) {
            $discount = floatval($this->config->get('module_nr_wholesale_discount1'));
        } else {
            $discount = 0;
        }
        $discount1 = floatval($this->config->get('module_nr_wholesale_discount'));
        $total = round($amount * (1 - $discount1 / 100), 2);
        
        $order_data['totals'] = [
            [
                'code'       => 'sub_total',
                'title'      => $this->language->get('column_total'),
                'value'      => $amount,
                'sort_order' => 1
            ],
            [
                'code'       => 'nr_wholesale',
                'title'      => $this->language->get('text_discount') . ' ' . $discount . '%',
                'value'      => ($amount - $total),
                'sort_order' => 2
            ],
            [
                'code'       => 'total',
                'title'      => $this->language->get('text_total'),
                'value'      => $total,
                'sort_order' => 3
            ],
        ];
        $order_data['total'] = $total;
        
        $order_data['affiliate_id'] = 0;
        $order_data['commission'] = 0;
        $order_data['marketing_id'] = 0;
        $order_data['tracking'] = '';
        
        $order_data['language_id'] = $this->config->get('config_language_id');
        $order_data['currency_id'] = $this->currency->getId($this->session->data['currency']);
        $order_data['currency_code'] = $this->session->data['currency'];
        $order_data['currency_value'] = $this->currency->getValue($this->session->data['currency']);
        
        $order_data['ip'] = $this->request->server['REMOTE_ADDR'];
        if (!empty($this->request->server['HTTP_X_FORWARDED_FOR'])) {
            $order_data['forwarded_ip'] = $this->request->server['HTTP_X_FORWARDED_FOR'];
        } elseif (!empty($this->request->server['HTTP_CLIENT_IP'])) {
            $order_data['forwarded_ip'] = $this->request->server['HTTP_CLIENT_IP'];
        } else {
            $order_data['forwarded_ip'] = '';
        }
        $order_data['user_agent'] = isset($this->request->server['HTTP_USER_AGENT']) ? $this->request->server['HTTP_USER_AGENT'] : '';
        $order_data['accept_language'] = isset($this->request->server['HTTP_ACCEPT_LANGUAGE']) ? $this->request->server['HTTP_ACCEPT_LANGUAGE'] : '';
        
        $order_id = $this->model_checkout_order->addOrder($order_data);
        $this->model_checkout_order->addOrderHistory($order_id, $this->config->get('config_order_status_id'));
        
        unset($this->session->data['wholesale_products']);
        
        $this->load->controller('crm/crm/order', $order_id, $order_data);
        
        $this->sendJSON(['order_id' => $order_id]);
    }
    
    protected function sendJSON($data) {
        header("Content-type: application/json");
        header('Content-Type: charset=utf-8');
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
        exit();
    }
    
    protected function validateAddress($address, $products) {
        $error = array();
        $this->load->language('checkout/buy');
        if (empty($products)) {
            $error['warning'] = $this->language->get('error_email');
            return $error;
        }
        
        if ((utf8_strlen(trim($address['firstname'])) < 1) || (utf8_strlen(trim($address['firstname'])) > 32))
            $error['firstname'] = $this->language->get('error_firstname');
        if ((utf8_strlen(trim($address['lastname'])) < 1) || (utf8_strlen(trim($address['lastname'])) > 32))
            $error['lastname'] = $this->language->get('error_lastname');
        if ((utf8_strlen($address['email']) > 96) || !filter_var($address['email'], FILTER_VALIDATE_EMAIL))
            $error['email'] = $this->language->get('error_email');
        if ((utf8_strlen($address['telephone']) < 7) || (utf8_strlen($address['telephone']) > 20))
            $error['telephone'] = $this->language->get('error_telephone');
        if (!trim($address['address_1']))
            $error['address_1'] = $this->language->get('error_shipping_data');
        
        return $error;
    }
}
