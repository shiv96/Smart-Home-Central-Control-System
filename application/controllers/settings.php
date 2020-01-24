<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Settings extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_settings');
        $this->m_user->check_session();
        //$this->output->enable_profiler(TRUE);
    }

    public function general_settings() {
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
            if (!isset($_POST['website_title']) || $_POST['website_title'] == "") {
                $this->session->set_flashdata('error_msg', 'Site name required');
                redirect(base_url('settings/general_settings/'));
            } else if (!isset($_POST['copyright_text']) || $_POST['copyright_text'] == "") {
                $this->session->set_flashdata('error_msg', 'Copyright text required');
                redirect(base_url('settings/general_settings/'));
            } else if (!isset($_POST['email_receiver']) || $_POST['email_receiver'] == "") {
                $this->session->set_flashdata('error_msg', 'Email receiver required');
                redirect(base_url('settings/general_settings/'));
            } else if (!filter_var(strtolower($_POST['email_receiver']), FILTER_VALIDATE_EMAIL)) {
                $this->session->set_flashdata('error_msg', 'Invalid email receiver');
                redirect(base_url('settings/general_settings/'));
            } else if (!isset($_POST['email_sender']) || $_POST['email_sender'] == "") {
                $this->session->set_flashdata('error_msg', 'Email sender required');
                redirect(base_url('settings/general_settings/'));
            } else if (!filter_var(strtolower($_POST['email_sender']), FILTER_VALIDATE_EMAIL)) {
                $this->session->set_flashdata('error_msg', 'Invalid email sender');
                redirect(base_url('settings/general_settings/'));
            } else {
                // start Upload logo file code
                if (isset($_FILES['logo']) || $_FILES['logo']['name'] != '') {
                    $logoExt = '.' . pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);
                    $logoFilename = 'logo' . $logoExt;
                    $config = array(
                        'upload_path' => '../upload/',
                        'file_name' => $logoFilename,
                        'allowed_types' => 'gif|jpg|png|jpeg',
                        'max_size' => '0',
                        'overwrite' => TRUE
                    );
                    $this->upload->initialize($config);
                    if ($this->upload->do_upload('logo')) {
                        $logo = $logoFilename;
                    } else {
                        //echo '<pre>';print_r($this->upload->display_errors());exit();
                        $logo = "";
                        $data['error_msg'] = 'Problem while uploading logo file!!';
                    }
                } else {
                    $logo = "";
                }
                // END Upload logo file code
                // Start Upload favicon file code
                if (isset($_FILES['favicon']) || $_FILES['favicon']['name'] != '') {
                    $faviconExt = '.' . pathinfo($_FILES['favicon']['name'], PATHINFO_EXTENSION);
                    //$faviconFilename = substr(md5(rand()), 1, 6) . date('dmyhis') . $faviconExt;
                    $faviconFilename = 'favicon' . $faviconExt;
                    $config = array(
                        'upload_path' => '../upload/',
                        'file_name' => $faviconFilename,
                        'allowed_types' => 'gif|jpg|png|jpeg',
                        'max_size' => '0',
                        'overwrite' => TRUE
                    );
                    $this->upload->initialize($config);
                    if ($this->upload->do_upload('favicon')) {
                        $favicon = $faviconFilename;
                    } else {
                        $favicon = "";
                        $data['error_msg'] = 'Problem while uploading favicon file!!';
                    }
                } else {
                    $favicon = "";
                }
                // END Upload favicon file code


                $general_setting = array(
                    'website_title' => $_POST['website_title'],
                    'copyright_text' => $_POST['copyright_text'],
                    'email_receiver' => $_POST['email_receiver'],
                    'email_sender' => $_POST['email_sender'],
                );
                if (isset($logo) && $logo != "") {
                    $general_setting['logo'] = $logo;
                }
                if (isset($favicon) && $favicon != "") {
                    $general_setting['favicon'] = $favicon;
                }
                $update_setting = $this->m_settings->update_general_settings($general_setting);
                if ($update_setting) {
                    $this->session->set_flashdata('success_msg', 'Successfully updated.');
                    redirect(base_url('settings/general_settings/'));
                } else {
                    $this->session->set_flashdata('error_msg', 'System error, Try later.');
                    redirect(base_url('settings/general_settings/'));
                }
            }
        }
        $admin_id = $this->session->userdata('admin_id');
        $admin_details = $this->m_user->get_admin_details_by_admin_id($admin_id);
        if (!empty($admin_details)) {
            $data['admin_details'] = $admin_details;
        }
        $general_setting = $this->m_settings->get_general_settings();
        if ($general_setting) {
            $data['data'] = $general_setting;
        }
        $this->load->view('include/header', $data);
        $this->load->view('include/navbar');
        $this->load->view('settings/general_settings');
        $this->load->view('include/footer');
    }
}