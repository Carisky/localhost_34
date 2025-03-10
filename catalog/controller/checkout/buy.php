<?php

class ControllerCheckoutBuy extends Controller {

	public function index() {

		$this->load->language('checkout/buy');

		if ((!$this->cart->hasProducts() and empty($this->session->data['vouchers'])) or (!$this->cart->hasStock() and !$this->config->get('config_stock_checkout'))) {

			$this->session->data['error'] = $this->language->get('text_empty');

			$this->response->redirect($this->url->link('common/home'));

		}

		

		//unset($this->session->data['shipping_methods']); unset($this->session->data['shipping_method']);

		

		$data['cart'] = $this->load->controller('common/nr_cart/checkout_cart');

		$data['address'] = $this->address();

		$data['shipping'] = $this->shipping();

		$data['payment'] = $this->payment();

		$totals = $this->calculateTotals();

		$data['coupon'] = $this->coupon();

		$data['reward'] = $this->reward();

		$data['totals'] = $this->getTotals($totals);

		

		if (isset($this->session->data['agree'])) {

			$data['agree'] = $this->session->data['agree'];

		} else {

			$data['agree'] = '';

		}

		

		$data['column_left'] = $this->load->controller('common/column_left');

		$data['column_right'] = $this->load->controller('common/column_right');

		$data['content_top'] = $this->load->controller('common/content_top');

		$data['content_bottom'] = $this->load->controller('common/content_bottom');

		$data['footer'] = $this->load->controller('common/footer');

		$data['header'] = $this->load->controller('common/header');

		

		if(!empty($this->config->get('shipping_inpost_status')))  $data['map_key'] = $this->config->get('shipping_inpost_google_api_key');



		//print_r($this->session->data['shipping_methods']);

						
		$data['products'] = $this->cart->getProducts();
		$this->response->setOutput($this->load->view('checkout/buy', $data));

	}

	

	public function address($address_id = 0)

	{

		//unset($this->session->data['shipping_address']); //////

		$this->load->language('checkout/buy');

		$this->load->model('account/address');

		$this->load->model('localisation/zone');

				

		$data['logged'] = $this->customer->isLogged();

		$data['error'] = isset($this->session->data['errors']) ? $this->session->data['errors'] : [];

				

		if($data['logged']) {

			$data['addresses'] = $this->model_account_address->getAddresses();

			$customer_group_id = $this->customer->getGroupId();

			$custom_fields = $this->customer->getCustomFields();

		} else {

			$data['addresses'] = array();

			$customer_group_id = $this->config->get('config_customer_group_id');

		}

		

		if($address_id) {

			$data['address_id'] = $address_id;

			unset($this->session->data['shipping_address']);

		} elseif (!empty($this->session->data['shipping_address']['address_id'])) {

			$data['address_id'] = $this->session->data['shipping_address']['address_id'];

		} elseif($data['logged']) {

			$data['address_id'] = $this->customer->getAddressId();

		}



		if (isset($this->session->data['shipping_address'])) {

			$data['shipping_address'] = $this->session->data['shipping_address'];

		} else {

			if(!empty($data['address_id'])) {

				$data['shipping_address'] = $this->model_account_address->getAddress($data['address_id']);

				$data['shipping_address']['telephone'] = empty($data['shipping_address']['custom_field'][4]) ? '' : $data['shipping_address']['custom_field'][4];

			} else {

				$data['shipping_address'] = [

					'country_id' => $this->config->get('config_country_id'),

					'zone_id' => '',

					'address_id' => 0,

					'postcode' => '',

					'city' => ''

				];

			}

			if($data['logged']) {

				if(empty($data['shipping_address']['telephone'])) $data['shipping_address']['telephone'] = $this->customer->getTelephone();

				if(empty($data['shipping_address']['email'])) $data['shipping_address']['email'] = $this->customer->getEmail();

				if(empty($data['shipping_address']['company']) and !empty($custom_fields[1])) $data['shipping_address']['company'] = $custom_fields[1];

			}

		}

		

		$this->session->data['shipping_address'] = $data['shipping_address'];

		if (isset($this->session->data['comment'])) $data['comment'] = $this->session->data['comment'];

		$data['zones'] = $this->model_localisation_zone->getZonesByCountryId($this->config->get('config_country_id'));

		

		return $this->load->view('checkout/address', $data);

	}

	

	public function payment()

	{

		$data['payment_methods'] = $this->updatePaymentMethods();

		$data['code'] = $this->session->data['payment_method']['code'];

		$data['error'] = isset($this->session->data['errors']) ? $this->session->data['errors'] : [];

		$data['payment_form'] = $this->load->controller('extension/payment/'.$this->session->data['payment_method']['code']);

		

		return $this->load->view('checkout/payment_method', $data);

	}

	

	public function shipping()

	{

		$data['shipping_methods'] = $this->updateShippingMethods();

		$data['code'] = $this->session->data['shipping_method']['code'];

		$data['error'] = isset($this->session->data['errors']) ? $this->session->data['errors'] : [];

	

		return $this->load->view('checkout/shipping_method', $data);

	}

	

	public function coupon()

	{

		if (!$this->config->get('total_coupon_status')) return;

		if (isset($this->session->data['coupon'])) {

			$data['coupon'] = $this->session->data['coupon'];

		} else {

			$data['coupon'] = '';

		}

		return $this->load->view('checkout/coupon', $data);

	}

		

	public function reward()

	{

		if(!$this->customer->isLogged()) return;

		$data['points'] = (int)$this->customer->getRewardPoints();

		if (isset($this->session->data['reward'])) {

			$data['reward'] = $this->session->data['reward'];

		} else {

			$data['reward'] = 0;

		}



		return $this->load->view('checkout/reward', $data);

	}

	

	public function refresh_cart()

	{

		$json = array();

		$this->load->language('checkout/buy');

		

		if ((!$this->cart->hasProducts() and empty($this->session->data['vouchers'])) or (!$this->config->get('config_stock_checkout') and !$this->cart->hasStock())) {

			unset($this->session->data['shipping_method']);

            unset($this->session->data['shipping_methods']);

            unset($this->session->data['payment_method']);

            unset($this->session->data['payment_methods']);

			unset($this->session->data['reward']);

			$this->session->data['error'] = $this->language->get('text_empty');

			$json['redirect'] = $this->url->link('common/home');

		} else {

			$json['cart'] = $this->load->controller('common/nr_cart/checkout_cart');

			$this->updateShippingMethods();

			$total_data = $this->calculateTotals();

			$json['shipping'] = $this->shipping();

			$json['payment'] = $this->payment();

			$json['totals'] =  $this->getTotals($total_data);

		}

		

		$this->response->addHeader('Content-Type: application/json');

		$this->response->setOutput(json_encode($json));

	}

	

	public function save_coupon()

	{

		$this->load->language('checkout/buy');

		$json = array();



		$this->load->model('extension/total/coupon');



		if (empty($this->request->post['coupon'])) {

			$json['error'] = $this->language->get('error_empty_coupon');

			unset($this->session->data['coupon']);

		} else {

			$coupon = $this->request->post['coupon'];

			$coupon_info = $this->model_extension_total_coupon->getCoupon($coupon);

			if ($coupon_info) {

				$this->session->data['coupon'] = $coupon;

				$json['success'] = $this->language->get('text_success_coupon');

			} else {

				$json['error'] = $this->language->get('error_coupon');

			}

		}

		

		$this->response->addHeader('Content-Type: application/json');

		$this->response->setOutput(json_encode($json));

	}

	

	public function save_reward()

	{

		$this->load->language('checkout/buy');

		$json = array();



		$points = $this->customer->getRewardPoints();



		if (!isset($this->request->post['reward']) || !is_numeric($this->request->post['reward']) || ($this->request->post['reward'] <= 0)) {

			$json['error'] = $this->language->get('error_reward');

		}



		if ($this->request->post['reward'] > $points) {

			$json['error'] = sprintf($this->language->get('error_points'), $this->request->post['reward']);

		}

		

		if (!$json) {

			$this->session->data['reward'] = abs($this->request->post['reward']);

			$json['success'] = $this->language->get('text_success_reward');

			$json['reward'] = $points - $this->session->data['reward'];

		}



		$this->response->addHeader('Content-Type: application/json');

		$this->response->setOutput(json_encode($json));

	}

	

	public function save_order()

	{

		$this->load->language('checkout/buy');

		$json = array();

		

		if ((!$this->cart->hasProducts() and empty($this->session->data['vouchers'])) or (!$this->cart->hasStock() and !$this->config->get('config_stock_checkout'))) {

			$this->session->data['error'] = $this->language->get('text_empty');

			$json['redirect'] = $this->url->link('common/home');

		} else {

			if(!empty($errors = $this->validateForm())) $json['error'] = $errors;

		}

		

		$this->session->data['shipping_address'] = $this->request->post['address'];

		$this->session->data['payment_method'] = $this->session->data['payment_methods'][$this->request->post['payment_method']];

		$shipping = explode('.', $this->request->post['shipping_method']);

		$this->session->data['shipping_method'] = $this->session->data['shipping_methods'][$shipping[0]]['quote'][$shipping[1]];

		$this->session->data['comment'] = strip_tags($this->request->post['comment']);

		

		if(empty($json)) {

			$this->session->data['agree'] = $this->request->post['agree'];

			$json['payment'] = $this->saveOrder($this->request->post);

		}

		

		$this->response->addHeader('Content-Type: application/json');

		$this->response->setOutput(json_encode($json));

	}

	

	protected function calculateTotals()

	{

		$this->load->model('setting/extension');

		

		$totals = array();

		$taxes = $this->cart->getTaxes();

		$total = 0;

		$total_data = array(

			'totals' => &$totals,

			'taxes'  => &$taxes,

			'total'  => &$total

		);

		$sort_order = array();



		$results = $this->model_setting_extension->getExtensions('total');

		foreach ($results as $key => $value) {

			$sort_order[$key] = $this->config->get('total_' . $value['code'] . '_sort_order');

		}

		array_multisort($sort_order, SORT_ASC, $results);

		foreach ($results as $result) {

			if ($this->config->get('total_' . $result['code'] . '_status')) {

				$this->load->model('extension/total/' . $result['code']);

				$this->{'model_extension_total_' . $result['code']}->getTotal($total_data);

			}

		}

		$data_totals = array();

		foreach($total_data['totals'] as $row){

			$data_totals[$row['code']] = $row;

		}

		$total_data['totals'] = $data_totals;

		

		return $total_data;

	}

	

	protected function getTotals($total_data)

	{

		$data['totals'] = $total_data['totals'];

		foreach($data['totals'] as $key => &$total) {

			if(!$total['value']) {

				unset($data['totals'][$key]);

			}

			$total['value'] = $this->currency->format($total['value'], $this->session->data['currency']);

		}

		return $this->load->view('checkout/checkout_totals', $data);

	}

	

	protected function updateShippingMethods()

	{

		$method_data = array();

		$this->load->model('setting/extension');



		$results = $this->model_setting_extension->getExtensions('shipping');

		foreach ($results as $result) {

			if ($this->config->get('shipping_' . $result['code'] . '_status')) {

				$this->load->model('extension/shipping/' . $result['code']);

				$quote = $this->{'model_extension_shipping_' . $result['code']}->getQuote($this->session->data['shipping_address']);

				if ($quote) $method_data[$result['code']] = $quote;

			}

		}

		

		$sort_order = array();

		foreach ($method_data as $key => $value) {

			$sort_order[$key] = $value['sort_order'];

		}

		array_multisort($sort_order, SORT_ASC, $method_data);



		$this->session->data['shipping_methods'] = $method_data;

		//print_r($method_data);

		

		if (!empty($this->session->data['shipping_method'])) {

			$shipping = explode('.', $this->session->data['shipping_method']['code']);

			if (empty($this->session->data['shipping_methods'][$shipping[0]]['quote'][$shipping[1]])) unset($this->session->data['shipping_method']);

		}

		

		if (empty($this->session->data['shipping_method'])) {

			$result = '';

			foreach($method_data as $method) {

				if(empty($method['quote'])) continue;

				foreach($method['quote'] as $quote) {

					if(!empty($quote['code'])) {

						$result = $quote;

						break;

					}

				}

				if($result) break;

			}

			$this->session->data['shipping_method'] = $result;

		}

		

		return $method_data;

	}

	

	protected function updatePaymentMethods()

	{

		$method_data = array();

		$total = $this->cart->getSubTotal();

		$this->load->model('setting/extension');

		$recurring = $this->cart->hasRecurringProducts();

		

		$results = $this->model_setting_extension->getExtensions('payment');

		foreach ($results as $result) {

			if ($this->config->get('payment_' . $result['code'] . '_status')) {

				$this->load->model('extension/payment/' . $result['code']);

				$method = $this->{'model_extension_payment_' . $result['code']}->getMethod($this->session->data['shipping_address'], $total);

				if ($method) {

					if ($recurring) {

						if (property_exists($this->{'model_extension_payment_' . $result['code']}, 'recurringPayments') and $this->{'model_extension_payment_' . $result['code']}->recurringPayments()) {

							$method_data[$result['code']] = $method;

						}

					} else {

						$method_data[$result['code']] = $method;

					}

				}

			}

		}

		

		$sort_order = array();

		foreach ($method_data as $key => $value) {

			$sort_order[$key] = $value['sort_order'];

		}

		array_multisort($sort_order, SORT_ASC, $method_data);



		$this->session->data['payment_methods'] = $method_data;

		

		if (!empty($this->session->data['payment_method']) and !isset($method_data[$this->session->data['payment_method']['code']])) unset($this->session->data['payment_method']);

			

		if (empty($this->session->data['payment_method'])) {

			foreach($method_data as $method) {

				if(!empty($method['code'])) {

					$this->session->data['payment_method'] = $method;

					break;

				}

			}

		}

		

		return $method_data;

	}

	

	protected function validateForm()

	{

		$error = array();

		$this->load->language('checkout/buy');

		$group_id = $this->customer->getGroupId();

		$post = $this->request->post['address'];

		

		if ((utf8_strlen(trim($post['firstname'])) < 1) || (utf8_strlen(trim($post['firstname'])) > 32)) $error['firstname'] = $this->language->get('error_firstname');

		if ((utf8_strlen(trim($post['lastname'])) < 1) || (utf8_strlen(trim($post['lastname'])) > 32)) $error['lastname'] = $this->language->get('error_lastname');

		if ((utf8_strlen(trim($post['address_1'])) < 3) || (utf8_strlen(trim($post['address_1'])) > 128)) $error['address_1'] = $this->language->get('error_address_1');

		if ((utf8_strlen(trim($post['city'])) < 2) || (utf8_strlen(trim($post['city'])) > 128)) $error['city'] = $this->language->get('error_city');

		if ((utf8_strlen($post['email']) > 96) || !filter_var($post['email'], FILTER_VALIDATE_EMAIL)) $error['email'] = $this->language->get('error_email');



		$this->load->model('localisation/country');

		$country_info = $this->model_localisation_country->getCountry($post['country_id']);

		if ($country_info and $country_info['postcode_required'] and (utf8_strlen(trim($post['postcode'])) < 2 or utf8_strlen(trim($post['postcode'])) > 10)) {

			$error['postcode'] = $this->language->get('error_postcode');

		}

		if (empty($post['country_id'])) $error['country'] = $this->language->get('error_country');

		//if (empty($post['zone_id'])) $error['zone'] = $this->language->get('error_zone');

		if (empty($post['telephone'])) $error['telephone'] = $this->language->get('error_agree'); ////////////////

		if(empty($this->request->post['agree'])) $error['agree'] = $this->language->get('error_agree1');

		

		if(empty($this->request->post['shipping_method'])) {

			$error['warning'] = $this->language->get('error_shipping');

		} else {

			$shipping = explode('.', $this->request->post['shipping_method']);

			if (empty($this->session->data['shipping_methods'][$shipping[0]]['quote'][$shipping[1]])) $error['warning'] = $this->language->get('error_shipping');

		}

		

		if (empty($this->request->post['payment_method'])) {

			$error['warning'] = $this->language->get('error_payment');

		} elseif (!isset($this->session->data['payment_methods'][$this->request->post['payment_method']])) {

			$error['warning'] = $this->language->get('error_payment');

		}

				

		return $error;

	}

	

	protected function saveOrder($post)

	{

		$this->load->language('checkout/buy');

		$this->load->model('localisation/country');

		$this->load->model('localisation/zone');

		$this->load->model('checkout/order');

		$this->load->model('catalog/product');

		

		if (empty($this->session->data['shipping_address'])) {

			$this->session->data['error'] = $this->language->get('text_empty');

			$this->response->addHeader('Content-Type: application/json');

			$this->response->setOutput(json_encode(['redirect' => $this->url->link('common/home')]));

		} else {

			$post = $this->request->post;

			

			$country_info = $this->model_localisation_country->getCountry($post['address']['country_id']);

			//$zone_info = $this->model_localisation_zone->getZone($post['address']['zone_id']);

			

			$order_data = array();

			$order_data['invoice_prefix'] = $this->config->get('config_invoice_prefix');

			$order_data['store_id'] = $this->config->get('config_store_id');

			$order_data['store_name'] = $this->config->get('config_name');

			if ($order_data['store_id']) {

				$order_data['store_url'] = $this->config->get('config_url');

			} else {

				if ($this->request->server['HTTPS']) {

					$order_data['store_url'] = HTTPS_SERVER;

				} else {

					$order_data['store_url'] = HTTP_SERVER;

				}

			}

			

			if ($this->customer->isLogged()) {

				$order_data['customer_id'] = $this->customer->getId();

				$order_data['customer_group_id'] = $this->customer->getGroupId();

				if($order_data['customer_group_id'] == 2) {

					$order_data['custom_field'] = $this->customer->getCustomFields();

					$company = $order_data['custom_field'][1];

				}

			} else {

				$order_data['customer_id'] = 0;

				$order_data['customer_group_id'] = $this->config->get('config_customer_group_id');

				$company = $post['address']['company'];

				$order_data['custom_field'] = [

					2 => $post['address']['nip']

				];

			}

			if(!isset($order_data['custom_field'])) $order_data['custom_field'] = array();

				

			$order_data['firstname'] = $post['address']['firstname'];

			$order_data['lastname'] = $post['address']['lastname'];

			$order_data['email'] = $post['address']['email'];

			$order_data['telephone'] = $post['address']['telephone'];

			$order_data['comment'] = $post['comment'];

			

			$order_data['payment_firstname'] = $order_data['firstname'];

			$order_data['payment_lastname'] = $order_data['lastname'];

			$order_data['payment_company'] =  isset($company) ? $company : '';

			$order_data['payment_address_1'] = $post['address']['address_1'];

			$order_data['payment_address_2'] = '';

			$order_data['payment_city'] = $post['address']['city'];

			$order_data['payment_postcode'] = $post['address']['postcode'];

			//$order_data['payment_zone'] = $zone_info['name'];

			$order_data['payment_zone'] = '';

			$order_data['payment_zone_id'] = $post['address']['zone_id'];

			$order_data['payment_country'] = $country_info['name'];

			$order_data['payment_country_id'] = $post['address']['country_id'];

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

			

			if (isset($this->session->data['shipping_method']['title'])) {

				$order_data['shipping_method'] = $this->session->data['shipping_method']['title'];

				if(isset($this->session->data['shipping_method']['point_name'])) $order_data['shipping_method'] .= ' ('.$this->session->data['shipping_method']['point_name'].')'; 

			} else {

				$order_data['shipping_method'] = '';

			}

			if (isset($this->session->data['shipping_method']['code'])) {

				$order_data['shipping_code'] = $this->session->data['shipping_method']['code'];

			} else {

				$order_data['shipping_code'] = '';

			}

			

			if (isset($this->session->data['payment_method']['title'])) {

				$order_data['payment_method'] = $this->session->data['payment_method']['title'];

			} else {

				$order_data['payment_method'] = '';

			}

			if (isset($this->session->data['payment_method']['code'])) {

				$order_data['payment_code'] = $this->session->data['payment_method']['code'];

			} else {

				$order_data['payment_code'] = '';

			}

			

			if (isset($this->request->cookie['tracking'])) {

				$order_data['tracking'] = $this->request->cookie['tracking'];



				$subtotal = $this->cart->getSubTotal();



				$affiliate_info = $this->model_account_customer->getAffiliateByTracking($this->request->cookie['tracking']);

				if ($affiliate_info) {

					$order_data['affiliate_id'] = $affiliate_info['customer_id'];

					$order_data['commission'] = ($subtotal / 100) * $affiliate_info['commission'];

				} else {

					$order_data['affiliate_id'] = 0;

					$order_data['commission'] = 0;

				}



				$this->load->model('checkout/marketing');

				$marketing_info = $this->model_checkout_marketing->getMarketingByCode($this->request->cookie['tracking']);



				if ($marketing_info) {

					$order_data['marketing_id'] = $marketing_info['marketing_id'];

				} else {

					$order_data['marketing_id'] = 0;

				}

			} else {

				$order_data['affiliate_id'] = 0;

				$order_data['commission'] = 0;

				$order_data['marketing_id'] = 0;

				$order_data['tracking'] = '';

			}

			

			$order_data['products'] = array();

			foreach ($this->cart->getProducts() as $product) {

				

				$product_info = $this->model_catalog_product->getProduct($product['product_id']);

				$option_data = array();

				foreach ($product['option'] as $option) {

					$option_data[] = array(

						'product_option_id'       => $option['product_option_id'],

						'product_option_value_id' => $option['product_option_value_id'],

						'option_id'               => $option['option_id'],

						'option_value_id'         => $option['option_value_id'],

						'name'                    => $option['name'],

						'value'                   => $option['value'],

						'thumb' 				  =>$this->model_tool_image->resize($option['image'], $this->config->get('theme_default_image_cart_width'), $this->config->get('theme_default_image_cart_height')),

						'type'                    => $option['type']

					);

				}



				$order_data['products'][] = array(

					'product_id' => $product['product_id'],

					'name'       => $product['name'],

					'model'      => $product['model'],

					'option'     => $option_data,

					'download'   => $product['download'],

					'quantity'   => $product['quantity'],

					'subtract'   => $product['subtract'],

					'price'      => $product['price'],

					'total'      => $product['total'],

					'tax'        => $this->tax->getTax($product['price'], $product['tax_class_id']),

					'reward'     => $product['reward'],

					'image' 	  => $this->model_tool_image->resize($product['image'], $this->config->get('theme_default_image_cart_width'), $this->config->get('theme_default_image_cart_height')),

					'sku'		 =>	$product_info['sku'],

					'weight'	 => $product_info['weight'],

				);

			}

			

			$order_data['vouchers'] = array();

			if (!empty($this->session->data['vouchers'])) {

				foreach ($this->session->data['vouchers'] as $voucher) {

					$order_data['vouchers'][] = array(

						'description'      => $voucher['description'],

						'code'             => token(10),

						'to_name'          => $voucher['to_name'],

						'to_email'         => $voucher['to_email'],

						'from_name'        => $voucher['from_name'],

						'from_email'       => $voucher['from_email'],

						'voucher_theme_id' => $voucher['voucher_theme_id'],

						'message'          => $voucher['message'],

						'amount'           => $voucher['amount']

					);

				}

			}

			

			$total_data = $this->calculateTotals();

			$order_data['totals'] = $total_data['totals'];

			$order_data['total'] = $total_data['totals']['total']['value'];

			

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

		

			if (isset($this->request->server['HTTP_USER_AGENT'])) {

				$order_data['user_agent'] = $this->request->server['HTTP_USER_AGENT'];

			} else {

				$order_data['user_agent'] = '';

			}

			

			if (isset($this->request->server['HTTP_ACCEPT_LANGUAGE'])) {

				$order_data['accept_language'] = $this->request->server['HTTP_ACCEPT_LANGUAGE'];

			} else {

				$order_data['accept_language'] = '';

			}

			

			$order_id = $this->model_checkout_order->addOrder($order_data);

			$this->session->data['order_id'] = $order_id;

			

			if($order_data['payment_code']) {

				$status = $this->config->get('payment_'.$order_data['payment_code'].'_order_status_id');

			} else {

				$status = $this->config->get('config_order_status_id');

			}

			$this->model_checkout_order->addOrderHistory($order_id, $status);

			

			

			return $this->load->controller('extension/payment/'.$this->session->data['payment_method']['code']); 

			

		}

	}

	

	public function change_zone()

	{

		$this->load->language('checkout/buy');

		$json = array();

		if (!$this->cart->hasProducts() and empty($this->session->data['vouchers'])) {

			$this->session->data['error'] = $this->language->get('text_empty');

			$json['redirect'] = $this->url->link('common/home');

		} elseif(!empty($this->request->get['zone_id'])) {

			$this->session->data['shipping_address']['zone_id'] = (int)$this->request->get['zone_id'];

			$this->session->data['shipping_address']['city'] = '';

			$this->session->data['shipping_address']['address_1'] = '';

			$this->session->data['shipping_address']['postcode'] = '';

			

			$total_data = $this->calculateTotals();

			$json['shipping'] = $this->shipping();

			$json['payment'] = $this->payment();

			$json['totals'] =  $this->getTotals($total_data);

		}

		$this->response->addHeader('Content-Type: application/json');

		$this->response->setOutput(json_encode($json));

	}

	

	public function change_address()

	{

		$this->load->language('checkout/buy');

		$json = array();

		if (!$this->cart->hasProducts() and empty($this->session->data['vouchers'])) {

			$this->session->data['error'] = $this->language->get('text_empty');

			$json['redirect'] = $this->url->link('common/home');

		} elseif(isset($this->request->get['address_id'])) {

			$json['address'] = $this->address((int)$this->request->get['address_id']);

			$total_data = $this->calculateTotals();

			$json['shipping'] = $this->shipping();

			$json['payment'] = $this->payment();

			$json['totals'] =  $this->getTotals($total_data);

		}

		$this->response->addHeader('Content-Type: application/json');

		$this->response->setOutput(json_encode($json));

	}

	

	public function change_shipping()

	{

		$this->load->language('checkout/buy');

		$json = array();

		if (!$this->cart->hasProducts() and empty($this->session->data['vouchers'])) {

			$this->session->data['error'] = $this->language->get('text_empty');

			$json['redirect'] = $this->url->link('common/home');

		} elseif(isset($this->request->get['code'])) {

			$shipping = explode('.', $this->request->get['code']);

			$this->session->data['shipping_method'] = $this->session->data['shipping_methods'][$shipping[0]]['quote'][$shipping[1]];

			$total_data = $this->calculateTotals();

			$json['payment'] = $this->payment();

			$json['totals'] =  $this->getTotals($total_data);

		}

		$this->response->addHeader('Content-Type: application/json');

		$this->response->setOutput(json_encode($json));

	}

	

	public function change_payment()

	{

		$this->load->language('checkout/buy');

		if ((!$this->cart->hasProducts() and empty($this->session->data['vouchers'])) or (!$this->cart->hasStock() and !$this->config->get('config_stock_checkout'))) {

			$this->session->data['error'] = $this->language->get('text_empty');

			$json['redirect'] = $this->url->link('common/home');

		} elseif(isset($this->request->get['code'])) {

			$this->session->data['payment_method'] = $this->session->data['payment_methods'][$this->request->get['code']];

		}

		exit();

	}

	

}