<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
    }

    public function index() {
        $q = $this->input->get('q');
        $min_price = $this->input->get('min_price');
        $max_price = $this->input->get('max_price');

        $data['products'] = $this->Product_model->search($q, $min_price, $max_price);
        $data['q'] = $q;
        $data['min_price'] = $min_price;
        $data['max_price'] = $max_price;

        $this->load->view('products/list', $data);
    }
}
