<?php
class ControllerAccountRegister extends Controller {
    public function index() {
        if ($this->customer->isLogged()) {
            $this->response->redirect($this->url->link('common/home'));
        }

        $this->load->language('account/register');
        $this->document->setTitle($this->language->get('heading_title'));

        $data['breadcrumbs'] = [];
        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/home')
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_account'),
            'href' => $this->url->link('account/account')
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_register'),
            'href' => $this->url->link('account/register')
        ];

        $data['text_account_already'] = sprintf($this->language->get('text_account_already'), $this->url->link('account/login'));
        $data['customer_groups'] = [];

        $this->load->model('account/customer_group');
        $customer_groups = $this->model_account_customer_group->getCustomerGroups();
        foreach ($customer_groups as $customer_group) {
            $data['customer_groups'][] = $customer_group;
        }

        $data['customer_group_id'] = $this->config->get('config_customer_group_id');
        $data['register'] = $this->url->link('account/register/register');

        $data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

        $this->response->setOutput($this->load->view('account/register', $data));
    }

    public function register() {
        $this->load->language('account/register');
        $json = [];

        $fields = ['firstname', 'lastname', 'email', 'telephone', 'password', 'customer_group_id'];
        foreach ($fields as $field) {
            if (!isset($this->request->post[$field])) {
                $this->request->post[$field] = '';
            }
        }

        if ((utf8_strlen($this->request->post['firstname']) < 1) || (utf8_strlen($this->request->post['firstname']) > 32)) {
            $json['error']['firstname'] = $this->language->get('error_firstname');
        }

        if ((utf8_strlen($this->request->post['lastname']) < 1) || (utf8_strlen($this->request->post['lastname']) > 32)) {
            $json['error']['lastname'] = $this->language->get('error_lastname');
        }

        if (!filter_var($this->request->post['email'], FILTER_VALIDATE_EMAIL)) {
            $json['error']['email'] = $this->language->get('error_email');
        }

        $this->load->model('account/customer');
        if ($this->model_account_customer->getTotalCustomersByEmail($this->request->post['email'])) {
            $json['error']['warning'] = $this->language->get('error_exists');
        }

        if ((utf8_strlen($this->request->post['password']) < 4) || (utf8_strlen($this->request->post['password']) > 40)) {
            $json['error']['password'] = $this->language->get('error_password');
        }

        if (!$json) {
            $customer_id = $this->model_account_customer->addCustomer($this->request->post);
            $this->customer->login($this->request->post['email'], $this->request->post['password']);
            $this->session->data['customer_id'] = $customer_id;
            $json['redirect'] = $this->url->link('common/home');
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }
}
