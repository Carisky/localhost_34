<?php

class ControllerCommonWholesale extends Controller
{
	public function index()
	{
		// Проверяем, авторизован ли пользователь
		if (!$this->customer->isLogged()) {
			$this->response->redirect($this->url->link('account/register'));
			return;
		}

		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$data['action_login'] = $this->url->link('account/login');
		$data['action_register'] = $this->url->link('account/register');

		// Загрузка моделей товаров и категорий
		$this->load->model('catalog/product');
		$this->load->model('catalog/category');

		// Получение всех категорий
		$categories = $this->model_catalog_category->getCategories();

		// Подготовка массива для хранения товаров по категориям
		$data['category_products'] = [];


		foreach ($categories as $category) {
			// Получаем товары для этой категории
			$filter_data = [
				'filter_category_id' => $category['category_id'],
				'start' => 0,
				'limit' => 0 // Не ограничиваем количество товаров
			];
			// Получаем товары для текущей категории


			$products = $this->model_catalog_product->getProducts($filter_data);
			$data['product_currency'] = $this->currency->getSymbolLeft($this->config->get('config_currency')) ?: $this->currency->getSymbolRight($this->config->get('config_currency'));
			// Если есть товары в категории, добавляем их в массив
			if ($products) {
				$data['category_products'][] = [
					'category_name' => $category['name'],
					'products'      => $this->prepareProductData($products)
				];
			}
		}



		$data['breadcrumbs'] = [
			[
				'text' => 'Główna', // Польский для "Главная"
				'href' => $this->url->link('common/home')
			],
			[
				'text' => 'Hurtownia', // Польский для текущей страницы
				'href' => $this->url->link('common/workwithus')
			]
		];
		// Отправляем данные в представление
		$this->response->setOutput($this->load->view('common/wholesale', $data));
	}

	/**
	 * Подготовить данные о товарах
	 *
	 * @param array $products
	 * @return array
	 */
	private function prepareProductData($products)
	{
		$product_data = [];
		foreach ($products as $product) {
			// Получаем атрибуты товара
			$attributes = $this->model_catalog_product->getProductAttributes($product['product_id']);

			// Инициализируем переменные для атрибутов
			$quantity_per_pack = '';

			// Перебираем группы атрибутов
			foreach ($attributes as $attribute_group) {
				// Перебираем атрибуты в группе
				foreach ($attribute_group['attribute'] as $attribute) {
					if ($attribute['name'] == 'quantity_per_pack') {
						$quantity_per_pack = $attribute['text'];
					}
				}
			}

			if ($quantity_per_pack) {
				// Получаем налоговый класс товара
				$tax_class_id = $product['tax_class_id'];
				// ✅ Расчет цены с учетом налога
				$price_with_tax = $this->tax->calculate($product['price'], $tax_class_id, $this->config->get('config_tax'));
				// ✅ Определение процентной ставки налога
				$tax_rates = $this->tax->getRates($product['price'], $tax_class_id);
				$tax_percentage = 0;
				foreach ($tax_rates as $tax) {
					if ($tax['type'] === 'P') { // Проверяем, что налог процентный
						$tax_percentage = $tax['rate'];
						break;
					}
				}
				// Формируем данные о товаре
				$product_data[] = [
					'currency_symbol' 	=> $this->currency->getSymbolLeft($this->config->get('config_currency')) ?: $this->currency->getSymbolRight($this->config->get('config_currency')),
					'product_id'            => $product['product_id'],
					'name'                  => $product['name'],
					'image'                 => $this->model_tool_image->resize($product['image'], 100, 100), // Размер изображения
					'quantity_per_pack'     => $quantity_per_pack, // Количество штук в упаковке
					'pack_quantity'         => (int)$product['quantity'] / (int)$quantity_per_pack, // Количество упаковок
					'price' 		=> number_format($product['price'], 2, '.', ''), // Цена без налога
					'price_with_tax'        => number_format($price_with_tax, 2, '.', ''), // Цена с налогом
					'price_per_pack' 	=> number_format((int)$quantity_per_pack * $price_with_tax, 2, '.', ''), // Цена упаковки с налогом
					'tax_rate'              => number_format($tax_percentage, 1, '.', ''), // Процентная ставка налога
					'status'                => $product['status'] ? 'Active' : 'Inactive', // Статус товара
					'href'                  => $this->url->link('product/product', 'product_id=' . $product['product_id'])
				];
			}
		}
		return $product_data;
	}
}
