<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stock extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        if (!$this->session->userdata('admin_logged')) {
            redirect('admin/login');
        }
        $this->load->model('Product_model');
    }

    public function index() {
        $data['products'] = $this->Product_model->get_all();
        $this->load->view('stock/index', $data);
    }
}
