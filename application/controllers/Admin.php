<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper(['url', 'form']);
    }

    public function login() {
        if ($this->input->method() === 'post') {
            $user = $this->input->post('username');
            $pass = $this->input->post('password');
            if ($user === 'admin' && $pass === 'admin') {
                $this->session->set_userdata('admin_logged', TRUE);
                redirect('admin/dashboard');
            } else {
                $data['error'] = 'Credenciais inválidas';
            }
        }
        $this->load->view('admin/login', isset($data) ? $data : NULL);
    }

    public function dashboard() {
        if (!$this->session->userdata('admin_logged')) {
            redirect('admin/login');
        }
        $this->load->view('admin/dashboard');
    }

    public function logout() {
        $this->session->unset_userdata('admin_logged');
        redirect('admin/login');
    }
}
