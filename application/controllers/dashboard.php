<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_dashboard');
        $this->m_user->check_session();
        //$this->output->enable_profiler(TRUE);
    }

    public function index() {
        $data = array();
        $this->load->view('include/header', $data);
        $this->load->view('include/navbar');
        $this->load->view('dashboard');
        $this->load->view('include/footer');
    }
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */