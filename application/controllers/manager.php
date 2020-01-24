<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Manager extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_manager');
        $this->m_user->check_session();
    }

    public function index() {
        $this->manage_manager();
    }

    public function manage_manager() {
        $data = array();
        if ($this->session->flashdata('error_msg')) {
            $data['error_msg'] = $this->session->flashdata('error_msg');
        }
        if ($this->session->flashdata('success_msg')) {
            $data['success_msg'] = $this->session->flashdata('success_msg');
        }
        $data['data'] = $this->m_manager->get_all_manager();
        $this->load->view('include/header', $data);
        $this->load->view('include/navbar');
        $this->load->view('manager/manage_manager');
        $this->load->view('include/footer');
    }

    public function delete_manager($ids) {
        $ids = explode(",", $ids);
        foreach ($ids as $id) {
            $this->m_manager->delete_manager($id);
        }
    }

    public function active_manager($ids) {
        $ids = explode(",", $ids);
        foreach ($ids as $id) {
            $this->m_manager->active_manager($id);
        }
    }

    public function inactive_manager($ids) {
        $ids = explode(",", $ids);
        foreach ($ids as $id) {
            $this->m_manager->inactive_manager($id);
        }
    }

    public function add_manager() {
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
            if (!isset($_POST['name']) || $_POST['name'] == '') {
                $data['error_msg'] = 'Name required!!';
            } else if (!isset($_POST['surname']) || $_POST['surname'] == '') {
                $data['error_msg'] = 'Surname required!!';
            } else if (!isset($_POST['staff_no']) || $_POST['staff_no'] == '') {
                $data['error_msg'] = 'Staff number required!!';
            } else if (!isset($_POST['login_id']) || $_POST['login_id'] == '') {
                $data['error_msg'] = 'Login Id required!!';
            } else if (!isset($_POST['password']) || $_POST['password'] == '') {
                $data['error_msg'] = 'Password required!!';
            } else {

                $get_manager_by_staff_no = $this->m_manager->get_manager_by_staff_no($_POST['staff_no']);
                $get_manager_by_login_id = $this->m_manager->get_manager_by_login_id($_POST['login_id']);
                if ($get_manager_by_staff_no == true) {
                    $data['error_msg'] = 'An account with this staff no already exists!!';
                } else if($get_manager_by_login_id == true) {
                    $data['error_msg'] = 'An account with this login id already exists!!';
                } else {
                // START Upload manager image code
                    $image_upload_flag = 0;
                    if (isset($_FILES['profile_pic']) || $_FILES['profile_pic']['name'] != '') {
                        $ext = '.' . pathinfo($_FILES['profile_pic']['name'], PATHINFO_EXTENSION);
                        $filename = substr(md5(rand()), 1, 6) . date('dmyhis') . $ext;
                        $config = array(
                            'upload_path' => '../upload/manager_profile_pic/',
                            'file_name' => $filename,
                            'allowed_types' => 'gif|jpg|png|jpeg',
                            'max_size' => '0'
                        );
                        $this->upload->initialize($config);
                        if ($this->upload->do_upload('profile_pic')) {
                            $profile_pic = $filename;
                            $image_upload_flag = 1;
                        } else {
                            $profile_pic = "";
                            $data['error_msg'] = 'Problem while uploading profile pic, Only .jpg, .png, .gif and .jpeg file allowed!!';
                        }
                    } else {
                        $profile_pic = "";
                    }

                    if (isset($_FILES['identity_proof']) || $_FILES['identity_proof']['name'] != '') {
                        $ext = '.' . pathinfo($_FILES['identity_proof']['name'], PATHINFO_EXTENSION);
                        $filename = substr(md5(rand()), 1, 6) . date('dmyhis') . $ext;
                        $config = array(
                            'upload_path' => '../upload/manager_identity_proof/',
                            'file_name' => $filename,
                            'allowed_types' => 'gif|jpg|png|jpeg',
                            'max_size' => '0'
                        );
                        $this->upload->initialize($config);
                        if ($this->upload->do_upload('identity_proof')) {
                            $identity_proof = $filename;
                            $image_upload_flag = 1;
                        } else {
                            $identity_proof = "";
                            $data['error_msg'] = 'Problem while uploading identity proof, Only .jpg, .png, .gif and .jpeg file allowed!!';
                        }
                    } else {
                        $identity_proof = "";
                    }

                    $password = base64_encode($_POST['password']);
                    $insert_manager = array(
                        'name' => $_POST['name'],
                        'surname' => $_POST['surname'],
                        'staff_no' => $_POST['staff_no'],
                        'login_id' => $_POST['login_id'],
                        'password' => $password,
                        'email' => $_POST['email'],
                        'status' => $_POST['status']
                    );

                    if ($profile_pic != "" && $image_upload_flag == 1) {
                        $insert_manager['profile_pic'] = $profile_pic;
                    }

                    if ($identity_proof != "" && $image_upload_flag == 1) {
                        $insert_manager['identity_proof'] = $identity_proof;
                    }
                    
                    $manager_id = $this->m_manager->add_manager($insert_manager);
                    if ($manager_id) {
                        $this->session->set_flashdata('success_msg', 'Successfully added.');
                        redirect(base_url('manager/'));
                    } else {
                        $this->session->set_flashdata('error_msg', 'System error!');
                        redirect(base_url('manager/add_manager'));
                    }
                }
            }
        }
        $this->load->view('include/header', $data);
        $this->load->view('include/navbar');
        $this->load->view('manager/add_manager');
        $this->load->view('include/footer');
    }

    public function edit_manager($id) {
        $data = array();
        if ($this->session->flashdata('error_msg')) {
            $data['error_msg'] = $this->session->flashdata('error_msg');
        }
        if ($this->session->flashdata('success_msg')) {
            $data['success_msg'] = $this->session->flashdata('success_msg');
        }
        $get_manager_data = $this->m_manager->get_manager_data($id);
        if ($get_manager_data) {
            $data = $get_manager_data;
        }
        if (isset($_POST['submit'])) {
            unset($_POST['submit']);
            $_POST = array_map('trim', $_POST);
            if (!isset($_POST['name']) || $_POST['name'] == '') {
                $data['error_msg'] = 'Name required!!';
            } else if (!isset($_POST['surname']) || $_POST['surname'] == '') {
                $data['error_msg'] = 'Surname required!!';
            } else if (!isset($_POST['staff_no']) || $_POST['staff_no'] == '') {
                $data['error_msg'] = 'Staff number required!!';
            } else if (!isset($_POST['login_id']) || $_POST['login_id'] == '') {
                $data['error_msg'] = 'Login Id required!!';
            } else if (!isset($_POST['password']) || $_POST['password'] == '') {
                $data['error_msg'] = 'Password required!!';
            } else {

                $get_manager_by_staff_no = $this->m_manager->get_manager_by_staff_no($_POST['staff_no'], $id);
                $get_manager_by_login_id = $this->m_manager->get_manager_by_login_id($_POST['login_id'], $id);
                if ($get_manager_by_staff_no == true) {
                    $data['error_msg'] = 'An account with this staff no already exists!!';
                } else if($get_manager_by_login_id == true) {
                    $data['error_msg'] = 'An account with this login id already exists!!';
                } else {

                    // START Upload manager image code
                    $image_upload_flag = 0;
                    if (isset($_FILES['profile_pic']) || $_FILES['profile_pic']['name'] != '') {
                        $ext = '.' . pathinfo($_FILES['profile_pic']['name'], PATHINFO_EXTENSION);
                        $filename = substr(md5(rand()), 1, 6) . date('dmyhis') . $ext;
                        $config = array(
                            'upload_path' => '../upload/manager_profile_pic/',
                            'file_name' => $filename,
                            'allowed_types' => 'gif|jpg|png|jpeg',
                            'max_size' => '0'
                        );
                        $this->upload->initialize($config);
                        if ($this->upload->do_upload('profile_pic')) {
                            $profile_pic = $filename;
                            $image_upload_flag = 1;
                        } else {
                            $profile_pic = "";
                            $data['error_msg'] = 'Problem while uploading profile pic, Only .jpg, .png, .gif and .jpeg file allowed!!';
                        }
                    } else {
                        $profile_pic = "";
                    }

                    if (isset($_FILES['identity_proof']) || $_FILES['identity_proof']['name'] != '') {
                        $ext = '.' . pathinfo($_FILES['identity_proof']['name'], PATHINFO_EXTENSION);
                        $filename = substr(md5(rand()), 1, 6) . date('dmyhis') . $ext;
                        $config = array(
                            'upload_path' => '../upload/manager_identity_proof/',
                            'file_name' => $filename,
                            'allowed_types' => 'gif|jpg|png|jpeg',
                            'max_size' => '0'
                        );
                        $this->upload->initialize($config);
                        if ($this->upload->do_upload('identity_proof')) {
                            $identity_proof = $filename;
                            $image_upload_flag = 1;
                        } else {
                            $identity_proof = "";
                            $data['error_msg'] = 'Problem while uploading identity proof, Only .jpg, .png, .gif and .jpeg file allowed!!';
                        }
                    } else {
                        $identity_proof = "";
                    }

                    $password = base64_encode($_POST['password']);
                    $update_manager = array(
                        'name' => $_POST['name'],
                        'surname' => $_POST['surname'],
                        'staff_no' => $_POST['staff_no'],
                        'login_id' => $_POST['login_id'],
                        'password' => $password,
                        'email' => $_POST['email'],
                        'status' => $_POST['status']
                    );

                    if ($profile_pic != "" && $image_upload_flag == 1) {
                        $update_manager['profile_pic'] = $profile_pic;
                    }

                    if ($identity_proof != "" && $image_upload_flag == 1) {
                        $update_manager['identity_proof'] = $identity_proof;
                    }
                    
                    $this->m_manager->update_manager($update_manager, $id);
                    $this->session->set_flashdata('success_msg', 'Successfully updated.');
                    redirect(base_url('manager/'));
                }
            }
        }
        $this->load->view('include/header', $data);
        $this->load->view('include/navbar');
        $this->load->view('manager/edit_manager');
        $this->load->view('include/footer');
    }

    public function remove_profile_pic($id){
        $data = array();
        if ($this->session->flashdata('error_msg')) {
            $data['error_msg'] = $this->session->flashdata('error_msg');
        }
        if ($this->session->flashdata('success_msg')) {
            $data['success_msg'] = $this->session->flashdata('success_msg');
        }
        $profile = array(
            'profile_pic' => ''
        );
        
        $this->m_manager->update_manager($profile, $id);
        $this->session->set_flashdata('success_msg', 'Successfully removed.');
        redirect(base_url('manager/edit_manager/'.$id));
    }

    public function remove_identity_proof($id){
        $data = array();
        if ($this->session->flashdata('error_msg')) {
            $data['error_msg'] = $this->session->flashdata('error_msg');
        }
        if ($this->session->flashdata('success_msg')) {
            $data['success_msg'] = $this->session->flashdata('success_msg');
        }
        $profile = array(
            'identity_proof' => ''
        );
        
        $this->m_manager->update_manager($profile, $id);
        $this->session->set_flashdata('success_msg', 'Successfully removed.');
        redirect(base_url('manager/edit_manager/'.$id));
    }
}