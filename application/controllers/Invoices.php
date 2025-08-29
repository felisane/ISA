<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoices extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        if (!$this->session->userdata('admin_logged')) {
            redirect('admin/login');
        }
    }

    public function index() {
        $this->load->view('invoices/index');
    }
}
