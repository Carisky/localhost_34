<?php
class ControllerCommonShop extends Controller {
    /**
     * @return void
     */
    public function index(): void {
        $data['footer'] = $this->load->controller('common/footer');
        $data['header'] = $this->load->controller('common/header');

        $data['breadcrumbs'] = [
            [
                'text' => 'Główna',
                'href' => $this->url->link('common/home')
            ],
            [
                'text' => 'Sklep',
                'href' => $this->url->link('common/shop')
            ]
        ];

        // Загружаем модель категорий
        $this->load->model('catalog/category');
        $shop_categories = array();

        // Получаем все категории верхнего уровня (parent_id = 0)
        $categories = $this->model_catalog_category->getCategories(0);

        foreach ($categories as $category) {
            // При необходимости можно добавить фильтрацию по статусу или другим критериям
            // Например, если в массиве есть поле 'status' и нужно показывать только активные:
            // if ($category['status']) { ... }
            $shop_categories[] = [
                'name' => $category['name'],
                // Формируем ссылку по типу index.php?route=common/shop&category=НазваниеКатегории
                'href' => $this->url->link('common/shop', 'category=' . urlencode($category['name']))
            ];
        }

        $data['shop_categories'] = $shop_categories;

        $this->response->setOutput($this->load->view('common/shop', $data));
    }
}
