<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Logout extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->m_user->check_session();
        //$this->output->enable_profiler(TRUE);
    }

    public function index() {
        $this->session->sess_destroy();
        $this->session->set_flashdata('success_msg', 'Logout Successful');
        redirect(base_url('login'));
    }

}
