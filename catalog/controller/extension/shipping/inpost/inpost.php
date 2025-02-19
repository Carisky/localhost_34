<?php
/**
 *  Avatec Inpost Integration
 *  Copyright (c) 2020 Grzegorz Miskiewicz
 *  All Rights Reserved
 */


class ControllerExtensionShippingInpostInpost extends Controller {

    public function index()
    {
        $this->load->model('extension/shipping/inpost');
        $data = $this->model_extension_shipping_inpost->getJson([
            'postcode' => (!empty( $this->request->get['postcode'] ) ? $this->request->get['postcode'] : null),
            'id' => (!empty( $this->request->get['id'] ) ? $this->request->get['id'] : null)
        ]);

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode([
            'success' => true,
            'data' => $data
        ]));
    }

    public function setData()
    {
		$this->load->language('extension/shipping/inpost');
        $this->load->model('extension/shipping/inpost');
		if(empty($this->request->post['id'])) exit('no id');
				
        $point = $this->model_extension_shipping_inpost->getPoint($this->request->post['id']);
		if(empty($point)) exit();
		
		$quote = $this->model_extension_shipping_inpost->buildQuote($point);
		
		$this->session->data['shipping_methods']['inpost']['quote']['point'] = $quote;
		$this->session->data['shipping_method'] = $quote;

        //print_r($point); //AG
        //print_r($quote); //AG
        exit('1');
    }
}
