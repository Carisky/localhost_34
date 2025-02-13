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
                'text' => 'Główna', // Польский для "Главная"
                'href' => $this->url->link('common/home')
            ],
            [
                'text' => 'Sklep', // Польский для текущей страницы
                'href' => $this->url->link('common/shop')
            ]
        ];


		$this->response->setOutput($this->load->view('common/shop', $data));

    }
}