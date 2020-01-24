<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_user extends CI_Model {

    function login($post = array()) {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('email', $post['email']);
        $this->db->where('password', base64_encode($post['password']));
        $this->db->limit(1);
        $query = $this->db->get();
        //echo $this->db->last_query();
        //exit;
        if ($query->num_rows() == 1) {
            $userdata = $query->row_array();
            $this->session->set_userdata(array(
                'admin_id' => $userdata['admin_id'],
                'admin_type' => $userdata['admin_type'],
                'name' => $userdata['name'],
                'email' => $userdata['email'],
                'admin_logged_in' => true
            ));
            return true;
        } else {
            return false;
        }
    }

    function check_session($index = '') {
        if ($index == 1) {
            if ($this->session->userdata('admin_logged_in')) {
                redirect(base_url('dashboard'));
            }
        } else {
            if (!$this->session->userdata('admin_logged_in')) {
                redirect(base_url());
            }
        }
    }

    function change_password($post = array()) {
        $user = $this->session->userdata('admin_id');
        $this->db->set('password', base64_encode($post['confirm_password']));
        $this->db->where('admin_id', $user);
        if ($this->db->update('admin')) {
            return true;
        } else {
            return false;
        }
    }

    function check_password($post = array()) {
        $user = $this->session->userdata('admin_id');
        $this->db->select('count(*) as cnt');
        $this->db->from('admin');
        $this->db->where('password', base64_encode($post['old_password']));
        $this->db->where('admin_id', $user);
        $query = $this->db->get()->row_array();
        if ($query['cnt'] == 1) {
            return true;
        } else {
            return false;
        }
    }

    function get_admin_name_by_admin_id($admin_id) {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('admin_id', $admin_id);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            $userdata = $query->row_array();
            // return $userdata['name'];
            return $userdata['name'];
        } else {
            return "";
        }
    }

    function get_admin_by_email($email) {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('email', $email);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            $userdata = $query->row_array();
            return $userdata;
        } else {
            return false;
        }
    }

    public function generate_random_password($admin_id, $password) {
        $this->db->where(array(
            'admin_id' => $admin_id,
        ));
        $this->db->set('password', base64_encode($password));
        if ($this->db->update('admin')) {
            return true;
        } else {
            return false;
        }
    }

    function get_admin_details_by_admin_id($admin_id) {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('admin_id', $admin_id);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            $userdata = $query->row_array();
            // return $userdata['name'];
            return $userdata;
        } else {
            return array();
        }
    }

    function update_admin_details($data) {
        $admin_id = $this->session->userdata('admin_id');
        $this->db->where('admin_id', $admin_id);
        if ($this->db->update('admin', $data)) {
            return true;
        } else {
            return false;
        }
    }

}
