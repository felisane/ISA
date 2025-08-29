<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
    }

    public function home() {
        $data['products'] = $this->Product_model->get_all();
        $this->load->view('shop/home', $data);
    }

    public function sale() {
        $data['products'] = $this->Product_model->get_on_sale();
        $this->load->view('shop/sale', $data);
    }

    public function product($id) {
        $product = $this->Product_model->get($id);
        if (!$product) {
            show_404();
            return;
        }
        $this->load->view('shop/product', ['product' => $product]);
    }
}
