<?php

class M_tools extends CI_Model {

    public function send_mail($from, $to, $subject, $msg) {
        $ci = get_instance();
        $config = array();
        $config_data = $this->db->where_in('key', array('email', 'password', 'host', 'port'))->get('smtp_email_setting')->result_array();
        $config['smtp_user'] = $config_data[0]['value'];
        $config['smtp_pass'] = $config_data[1]['value'];
        $config['smtp_host'] = $config_data[2]['value'];
        $config['smtp_port'] = $config_data[3]['value'];
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        $ci->email->initialize($config);
        $ci->email->from($from, WEBSITE_NAME);
        $ci->email->to($to);
        $this->email->reply_to($config['smtp_user'], WEBSITE_NAME);
        $ci->email->subject($subject);
//create message with header and footer
        $ci->email->message($msg);
        return $ci->email->send();
        //echo $this->email->print_debugger();
    }

    function test_input($data) {
        $data = trim($data);
        $data = ucfirst($data);
        //$data = stripslashes($data);
        //$data = htmlspecialchars($data);
        return $data;
    }

}
