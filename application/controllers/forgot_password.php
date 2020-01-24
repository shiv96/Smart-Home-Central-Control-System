<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Forgot_password extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->m_user->check_session(1);
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
            if ($_POST['email'] == '') {
                $data['error_msg'] = 'Email required';
            } else if (!filter_var(strtolower($_POST['email']), FILTER_VALIDATE_EMAIL)) {
                $data['error_msg'] = 'Invalid email';
            } else {
                $get_admin_by_email = $this->m_user->get_admin_by_email($_POST['email']);
                if ($get_admin_by_email) {
                    $new_password = substr(md5(rand()), 1, 8);
                    if ($this->m_user->generate_random_password($get_admin_by_email['admin_id'], $new_password)) {
                        $email_data = array(
                            'name' => $get_admin_by_email['name'],
                            'email' => $get_admin_by_email['email'],
                            'password' => $new_password,
                        );
                        $from = EMAIL_SENDER;
                        $to = $_POST['email'];
                        $subject = 'Reset your Logit Password';
                        $msg = $this->load->view('mail_tmp/forgot_password', $email_data, true);
                        $this->m_tools->send_mail($from, $to, $subject, $msg);
                        $this->session->set_flashdata('success_msg', "We've send an email to " . $to . ", Please check you email for new password.");
                        redirect('/login');
                    } else {
                        $this->session->set_flashdata('error_msg', "System error, Please try later.");
                        redirect('/forgot_password');
                    }
                } else {
                    $this->session->set_flashdata('error_msg', "No account matches " . $_POST['email']);
                    redirect('/forgot_password');
                }
            }
        }
        $this->load->view('forgot_password', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */