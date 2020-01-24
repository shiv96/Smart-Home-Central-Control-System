<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_worker extends CI_Model {

    function get_all_worker() {
        $this->db->select('w.*, m.name as manager');
        $this->db->from('worker as w');
        $this->db->order_by('w.created_at', 'desc');
        $this->db->join('manager as m', 'm.manager_id = w.manager_id');
        $query = $this->db->get();
        $list = $query->result_array();
        return $list;
    }

    function active_worker($worker_id) {
        $data = array(
            'status' => 1,
        );
        $this->db->where('worker_id', $worker_id);
        $this->db->update('worker', $data);
    }

    function inactive_worker($worker_id) {
        $data = array(
            'status' => 0,
        );
        $this->db->where('worker_id', $worker_id);
        $this->db->update('worker', $data);
    }

    function delete_worker($worker_id) {
        $this->db->where('worker_id', $worker_id);
        $this->db->delete('worker');
    }

    function get_worker_by_staff_no($staff_no, $worker_id = '') {
        if (!empty($worker_id)) {
            $worker = $this->db
                            ->where('staff_no', $staff_no)
                            ->where('worker_id != ', $worker_id)
                            ->get('worker')->row_array();
        } else {
            $worker = $this->db
                            ->where('staff_no', $staff_no)
                            ->get('worker')->row_array();
        }
        return $worker;
    }

    function get_worker_by_login_id($login_id, $worker_id = '') {
        if (!empty($worker_id)) {
            $worker = $this->db
                            ->where('login_id', $login_id)
                            ->where('worker_id != ', $worker_id)
                            ->get('worker')->row_array();
        } else {
            $worker = $this->db
                            ->where('login_id', $login_id)
                            ->get('worker')->row_array();
        }
        return $worker;
    }

    function get_all_managers(){
        $this->db->select('*');
        $this->db->from('manager');
        $this->db->where('status', 1);
        $query = $this->db->get();
        $data = $query->result_array();
        return $data;
    }

    function add_worker($data) {
        $data['created_at'] = date('Y-m-d H:i:s');
        if ($this->db->insert('worker', $data)) {
            $id = $this->db->insert_id();
            return $id;
        } else {
            return false;
        }
    }

    function get_worker_data($worker_id) {
        $this->db->where('worker_id', $worker_id);
        $this->db->select('*');
        $this->db->from('worker');
        $query = $this->db->get();
        $list = $query->row_array();
        return $list;
    }

    function update_worker($data = array(), $worker_id) {
        $this->db->where('worker_id', $worker_id);
        $this->db->update('worker', $data);
        return true;
    }
}