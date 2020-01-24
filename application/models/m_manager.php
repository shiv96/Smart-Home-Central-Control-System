<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_manager extends CI_Model {

    function get_all_manager() {
        $this->db->select('*');
        $this->db->from('manager');
        $this->db->order_by('created_at', 'desc');
        $query = $this->db->get();
        $list = $query->result_array();
        return $list;
    }

    function active_manager($manager_id) {
        $data = array(
            'status' => 1,
        );
        $this->db->where('manager_id', $manager_id);
        $this->db->update('manager', $data);
    }

    function inactive_manager($manager_id) {
        $data = array(
            'status' => 0,
        );
        $this->db->where('manager_id', $manager_id);
        $this->db->update('manager', $data);
    }

    function delete_manager($manager_id) {
        $this->db->where('manager_id', $manager_id);
        $this->db->delete('manager');
    }

    function get_manager_by_staff_no($staff_no, $manager_id = '') {
        if (!empty($manager_id)) {
            $manager = $this->db
                            ->where('staff_no', $staff_no)
                            ->where('manager_id != ', $manager_id)
                            ->get('manager')->row_array();
        } else {
            $manager = $this->db
                            ->where('staff_no', $staff_no)
                            ->get('manager')->row_array();
        }
        return $manager;
    }

    function get_manager_by_login_id($login_id, $manager_id = '') {
        if (!empty($manager_id)) {
            $manager = $this->db
                            ->where('login_id', $login_id)
                            ->where('manager_id != ', $manager_id)
                            ->get('manager')->row_array();
        } else {
            $manager = $this->db
                            ->where('login_id', $login_id)
                            ->get('manager')->row_array();
        }
        return $manager;
    }

    function add_manager($data) {
        $data['created_at'] = date('Y-m-d H:i:s');
        if ($this->db->insert('manager', $data)) {
            $id = $this->db->insert_id();
            return $id;
        } else {
            return false;
        }
    }

    function get_manager_data($manager_id) {
        $this->db->where('manager_id', $manager_id);
        $this->db->select('*');
        $this->db->from('manager');
        $query = $this->db->get();
        $list = $query->row_array();
        return $list;
    }

    function update_manager($data = array(), $manager_id) {
        $this->db->where('manager_id', $manager_id);
        $this->db->update('manager', $data);
        return true;
    }
}