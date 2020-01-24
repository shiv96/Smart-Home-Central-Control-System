<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_settings extends CI_Model {

    public function update_general_settings($data) {
        foreach ($data as $k => $item) {
            $upd = array('value' => $item);
            $this->db->where('key', $k);
            $this->db->update('site_setting', $upd);
        }
        return true;
    }

    function get_general_settings() {
        $this->db->where_in('key', array('logo', 'favicon', 'website_title',
            'copyright_text', 'email_receiver', 'email_sender'));
        $this->db->select('*');
        $this->db->from('site_setting');
        $query = $this->db->get();
        $data = $query->result_array();
        $return_data['logo'] = $data[0]['value'];
        $return_data['favicon'] = $data[1]['value'];
        $return_data['website_title'] = $data[2]['value'];
        $return_data['copyright_text'] = $data[3]['value'];
        $return_data['email_receiver'] = $data[4]['value'];
        $return_data['email_sender'] = $data[5]['value'];
        return $return_data;
    }
}