<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Changepassword extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->m_user->check_session();
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
            if ($_POST['new_password'] != $_POST['confirm_password']) {
                $this->session->set_flashdata('error_msg', 'New password does not match with confirm password.');
                redirect(base_url('changepassword'));
            } else {
                $change_password = $this->m_user->check_password($_POST);
                if (!$change_password) {
                    $this->session->set_flashdata('error_msg', 'Invalid old password');
                    redirect(base_url('changepassword'));
                } else {
                    $change_password = $this->m_user->change_password($_POST);
                    if ($change_password) {
                        $this->session->set_flashdata('success_msg', 'Successfully updated.');
                        redirect(base_url('changepassword'));
                    } else {
                        $this->session->set_flashdata('error_msg', 'Error Please Try Again');
                        redirect(base_url('changepassword'));
                    }
                }
            }
        }
        $this->load->view('include/header', $data);
        $this->load->view('include/navbar');
        $this->load->view('changepassword');
        $this->load->view('include/footer');
    }

}
