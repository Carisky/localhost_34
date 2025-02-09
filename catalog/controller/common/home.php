<?php
class ControllerCommonHome extends Controller {
	public function index() {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));
	
		$this->load->model('catalog/product');
		$this->load->model('tool/image');
	
		$data['carousel'] = $this->load->view('common/carousel');
		$data['promotion'] = $this->load->view('common/promotion');
		$data['categories_carousel'] = $this->load->view('common/categories_carousel');
		$data['product'] = $this->load->view('product/product');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
	
		$this->response->setOutput($this->load->view('common/home', $data));
	}
}
