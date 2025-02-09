<?php
class ControllerProductAll extends Controller {
    public function index(){
        $this->load->model('catalog/product');
        $this->load->model('catalog/category'); // Загрузка модели категорий

        // Получение всех товаров
        $filter_data = [
            'start' => 0,
            'limit' => 0, // 0 - получить все товары
        ];
        $products = $this->model_catalog_product->getProducts($filter_data);

        // Формирование ответа
        $product_data = [];
        foreach ($products as $product) {
            // Получаем категории товара
            $categories = $this->model_catalog_product->getCategories($product['product_id']);
            $category_names = [];
            foreach ($categories as $category) {
                $category_info = $this->model_catalog_category->getCategory($category['category_id']);
                if ($category_info) {
                    $category_names[] = $category_info['name'];
                }
            }

            // ✅ Налоговый класс товара
            $tax_class_id = $product['tax_class_id'];
            
            // ✅ Расчет цены с учетом налога
            $price_with_tax = $this->tax->calculate($product['price'], $tax_class_id, $this->config->get('config_tax'));
            $formatted_price = $this->currency->format($price_with_tax, $this->session->data['currency']);

            // ✅ Определение процентной ставки налога
            $tax_rates = $this->tax->getRates($product['price'], $tax_class_id);
            $tax_percentage = 0;
            foreach ($tax_rates as $tax) {
                if ($tax['type'] === 'P') { // Проверяем, что налог процентный
                    $tax_percentage = $tax['rate'];
                    break;
                }
            }

            $product_data[] = [
                'product_id'  => $product['product_id'],
                'name'        => $product['name'],
                'price'       => $formatted_price,  // Цена с налогом
                'image_url'   => $product['image'],
                'rating'      => (int)$product['rating'],
                'categories'  => $category_names, // Категории
                'tax_rate'    => $tax_percentage // Процент налога
            ];
        }

        // Ответ в формате JSON
        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode([
            'products' => $product_data,
        ]));
    }
}
