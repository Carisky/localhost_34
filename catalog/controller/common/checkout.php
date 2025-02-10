<?php
class ControllerCommonCheckout extends Controller {
	/**
	 * @return void
	 */
	public function index(): void {

        $data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		$data['payment_methods'] = $this->load->controller('checkout/payment_method');
	

        $data['breadcrumbs'] = [
            [
                'text' => 'Główna', // Польский для "Главная"
                'href' => $this->url->link('common/home')
            ],
            [
                'text' => 'Kasa', // Польский для текущей страницы
                'href' => $this->url->link('common/checkout')
            ]
        ];


		$this->response->setOutput($this->load->view('common/checkout', $data));

    }
}