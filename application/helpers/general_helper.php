<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('get_site_settings')) {
    //get main CodeIgniter object
    $ci = & get_instance();

    //load databse library
    $ci->load->database();

    //get data from database
    $query = $ci->db->get_where('site_setting');
    if ($query->num_rows() > 0) {
        $sitedata = $query->result_array();
        //print_r($sitedata);exit();
        if (!empty($sitedata)) {
            foreach ($sitedata as $sitedata_key => $sitedata_value) {
                //define(strtoupper($sitedata_value['key']), $sitedata_value['value']);
                switch ($sitedata_value['key']) {
                    case 'logo':
                        define('WEBSITE_LOGO_IMAGE', str_replace('admin/', '', BASE_URL . '/upload/') . $sitedata_value['value']);
                        break;
                    case 'favicon':
                        define('WEBSITE_FAVICON_IMAGE', str_replace('admin/', '', BASE_URL . '/upload/') . $sitedata_value['value']);
                        break;
                    case 'website_title':
                        define('WEBSITE_NAME', $sitedata_value['value']);
                        break;
                    case 'copyright_text':
                        define('WEBSITE_COPYRIGHT_TEXT', $sitedata_value['value']);
                        break;
                    case 'email_receiver':
                        define('EMAIL_RECEIVER', $sitedata_value['value']);
                        break;
                    case 'email_sender':
                        define('EMAIL_SENDER', $sitedata_value['value']);
                        break;
                }
            }
        }
        //echo '<pre>';print_r($sitedata);exit();
        return $sitedata;
    } else {
        return false;
    }
}
