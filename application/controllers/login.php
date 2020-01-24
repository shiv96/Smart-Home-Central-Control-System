<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_user');
        $this->m_user->check_session(1);
        //$this->output->enable_profiler(TRUE);
    }

    public function index() {
        $data = array();
        if ($this->session->flashdata('error_msg')) {
            $data['error_msg'] = $this->session->flashdata('error_msg');
        }
        if ($this->session->flashdata('success_msg')) {
            $data['success_msg'] = $this->session->flashdata('success_msg');
        }
        if (isset($_POST['submit'])) {
            unset($_POST['submit']);
            $_POST = array_map('trim', $_POST);
            $login = $this->m_user->login($_POST);
            if ($login) {
                //session  
                redirect(base_url('dashboard'));
            } else {
                $data['error_msg'] = "Invalid email or password!";
            }
        }
        $this->load->view('login', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */