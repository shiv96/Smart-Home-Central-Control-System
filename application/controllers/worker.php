<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Worker extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('m_worker');
        $this->m_user->check_session();
    }

    public function index() {
        $this->manage_worker();
    }

    public function manage_worker() {
        $data = array();
        if ($this->session->flashdata('error_msg')) {
            $data['error_msg'] = $this->session->flashdata('error_msg');
        }
        if ($this->session->flashdata('success_msg')) {
            $data['success_msg'] = $this->session->flashdata('success_msg');
        }
        $data['data'] = $this->m_worker->get_all_worker();
        $this->load->view('include/header', $data);
        $this->load->view('include/navbar');
        $this->load->view('worker/manage_worker');
        $this->load->view('include/footer');
    }

    public function delete_worker($ids) {
        $ids = explode(",", $ids);
        foreach ($ids as $id) {
            $this->m_worker->delete_worker($id);
        }
    }

    public function active_worker($ids) {
        $ids = explode(",", $ids);
        foreach ($ids as $id) {
            $this->m_worker->active_worker($id);
        }
    }

    public function inactive_worker($ids) {
        $ids = explode(",", $ids);
        foreach ($ids as $id) {
            $this->m_worker->inactive_worker($id);
        }
    }

    public function add_worker() {
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
            if (!isset($_POST['manager_id']) || $_POST['manager_id'] == '') {
                $data['error_msg'] = 'Manager required!!';
            } else if (!isset($_POST['name']) || $_POST['name'] == '') {
                $data['error_msg'] = 'Name required!!';
            } else if (!isset($_POST['surname']) || $_POST['surname'] == '') {
                $data['error_msg'] = 'Surname required!!';
            } else if (!isset($_POST['staff_no']) || $_POST['staff_no'] == '') {
                $data['error_msg'] = 'Staff number required!!';
            } else if (!isset($_POST['login_id']) || $_POST['login_id'] == '') {
                $data['error_msg'] = 'Login Id required!!';
            } else {

                $get_worker_by_staff_no = $this->m_worker->get_worker_by_staff_no($_POST['staff_no']);
                $get_worker_by_login_id = $this->m_worker->get_worker_by_login_id($_POST['login_id']);
                if ($get_worker_by_staff_no == true) {
                    $data['error_msg'] = 'An account with this staff no already exists!!';
                } else if($get_worker_by_login_id == true) {
                    $data['error_msg'] = 'An account with this login id already exists!!';
                } else {
                // START Upload worker image code
                    $image_upload_flag = 0;
                    if (isset($_FILES['profile_pic']) || $_FILES['profile_pic']['name'] != '') {
                        $ext = '.' . pathinfo($_FILES['profile_pic']['name'], PATHINFO_EXTENSION);
                        $filename = substr(md5(rand()), 1, 6) . date('dmyhis') . $ext;
                        $config = array(
                            'upload_path' => '../upload/worker_profile_pic/',
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
                            'upload_path' => '../upload/worker_identity_proof/',
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

                    $insert_worker = array(
                        'manager_id' => $_POST['manager_id'],
                        'name' => $_POST['name'],
                        'surname' => $_POST['surname'],
                        'staff_no' => $_POST['staff_no'],
                        'login_id' => $_POST['login_id'],
                        'email' => $_POST['email'],
                        'status' => $_POST['status']
                    );

                    if ($profile_pic != "" && $image_upload_flag == 1) {
                        $insert_worker['profile_pic'] = $profile_pic;
                    }

                    if ($identity_proof != "" && $image_upload_flag == 1) {
                        $insert_worker['identity_proof'] = $identity_proof;
                    }
                    
                    $worker_id = $this->m_worker->add_worker($insert_worker);
                    if ($worker_id) {
                        $this->session->set_flashdata('success_msg', 'Successfully added.');
                        redirect(base_url('worker/'));
                    } else {
                        $this->session->set_flashdata('error_msg', 'System error!');
                        redirect(base_url('worker/add_worker'));
                    }
                }
            }
        }

        $data['managers'] = $this->m_worker->get_all_managers();

        $this->load->view('include/header', $data);
        $this->load->view('include/navbar');
        $this->load->view('worker/add_worker');
        $this->load->view('include/footer');
    }

    public function edit_worker($id) {
        $data = array();
        if ($this->session->flashdata('error_msg')) {
            $data['error_msg'] = $this->session->flashdata('error_msg');
        }
        if ($this->session->flashdata('success_msg')) {
            $data['success_msg'] = $this->session->flashdata('success_msg');
        }
        $get_worker_data = $this->m_worker->get_worker_data($id);
        if ($get_worker_data) {
            $data = $get_worker_data;
        }
        if (isset($_POST['submit'])) {
            unset($_POST['submit']);
            $_POST = array_map('trim', $_POST);
            if (!isset($_POST['manager_id']) || $_POST['manager_id'] == '') {
                $data['error_msg'] = 'Manager required!!';
            } else if (!isset($_POST['name']) || $_POST['name'] == '') {
                $data['error_msg'] = 'Name required!!';
            } else if (!isset($_POST['surname']) || $_POST['surname'] == '') {
                $data['error_msg'] = 'Surname required!!';
            } else if (!isset($_POST['staff_no']) || $_POST['staff_no'] == '') {
                $data['error_msg'] = 'Staff number required!!';
            } else if (!isset($_POST['login_id']) || $_POST['login_id'] == '') {
                $data['error_msg'] = 'Login Id required!!';
            } else {
                $get_worker_by_staff_no = $this->m_worker->get_worker_by_staff_no($_POST['staff_no'], $id);
                $get_worker_by_login_id = $this->m_worker->get_worker_by_login_id($_POST['login_id'], $id);
                if ($get_worker_by_staff_no == true) {
                    $data['error_msg'] = 'An account with this staff no already exists!!';
                } else if($get_worker_by_login_id == true) {
                    $data['error_msg'] = 'An account with this login id already exists!!';
                } else {
                    // START Upload worker image code
                    $image_upload_flag = 0;
                    if (isset($_FILES['profile_pic']) || $_FILES['profile_pic']['name'] != '') {
                        $ext = '.' . pathinfo($_FILES['profile_pic']['name'], PATHINFO_EXTENSION);
                        $filename = substr(md5(rand()), 1, 6) . date('dmyhis') . $ext;
                        $config = array(
                            'upload_path' => '../upload/worker_profile_pic/',
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
                            'upload_path' => '../upload/worker_identity_proof/',
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

                    $update_worker = array(
                        'manager_id' => $_POST['manager_id'],
                        'name' => $_POST['name'],
                        'surname' => $_POST['surname'],
                        'staff_no' => $_POST['staff_no'],
                        'login_id' => $_POST['login_id'],
                        'email' => $_POST['email'],
                        'status' => $_POST['status']
                    );

                    if ($profile_pic != "" && $image_upload_flag == 1) {
                        $update_worker['profile_pic'] = $profile_pic;
                    }

                    if ($identity_proof != "" && $image_upload_flag == 1) {
                        $update_worker['identity_proof'] = $identity_proof;
                    }
                    
                    $this->m_worker->update_worker($update_worker, $id);
                    $this->session->set_flashdata('success_msg', 'Successfully updated.');
                    redirect(base_url('worker/'));
                }
            }
        }

        $data['managers'] = $this->m_worker->get_all_managers();

        $this->load->view('include/header', $data);
        $this->load->view('include/navbar');
        $this->load->view('worker/edit_worker');
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
        
        $this->m_worker->update_worker($profile, $id);
        $this->session->set_flashdata('success_msg', 'Successfully removed.');
        redirect(base_url('worker/edit_worker/'.$id));
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
        
        $this->m_worker->update_worker($profile, $id);
        $this->session->set_flashdata('success_msg', 'Successfully removed.');
        redirect(base_url('worker/edit_worker/'.$id));
    }
}