<?php

class userpanel extends CI_Controller {

    function __construct() {
        parent::__construct();
        //$this->m_user->check_session(1);
        $this->output->set_header('Last-Modified:' . gmdate('D, d M Y H:i:s') . 'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0', false);
        $this->output->set_header('Pragma: no-cache');
        ob_start();
    }

    function login() {
        $data['title'] = 'CodeIgniter Simple Login Form With Sessions';
        $this->load->view("userpanel_login", $data);
    }

    function login_validation() {
        $logged_in = $this->session->userdata('logged_in');
        if ($logged_in != TRUE || empty($logged_in)) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->form_validation->run()) {
                //true  
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                //model function  
                $this->load->model('main_model');
                if ($this->main_model->can_login($username, $password)) {
                    $session_data = array(
                        'username' => $username
                    );
                    $this->session->set_userdata($session_data);
                    redirect(base_url() . 'userpanel/user_view/' . $username);
                } else {
                    $this->session->set_flashdata('error', 'Invalid Username and Password');
                    redirect(base_url() . 'userpanel/login');
                }
            } else {
                //false  
                $this->login();
            }
        } else {
            $session_data = array(
                'username' => $username
            );

            $this->load->view("login_session", $session_data);
        }
    }

    function logout() {
        // $this->m_user->check_session(0);
        $this->load->driver('cache');
        // $this->session->sess_destroy();
        $this->cache->clean();
        ob_clean();
        $this->clearCache();
        $this->load->library('session');
        $this->load->helper('url');
        $this->session->sess_destroy();
        //  $this->session->unset_userdata('username');
        redirect(base_url() . 'userpanel/login');
    }

    protected function clearCache() {
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    }

    public function user_view($uname) {

        if ($this->session->userdata('username') != '') {

            $newdata = array(
                'username' => $uname,
            );

            $this->session->set_userdata($newdata);


            $this->db->select('*');
            $this->db->from('userlog');
            $this->db->where('name', $uname);
            $query = $this->db->get();
            $data["fetch_data"] = $query;


            $this->db->select('*');
            $this->db->from('user_msg');
            $this->db->where('name', $uname);
            $query1 = $this->db->get();
            $data["fetch_msg"] = $query1;

            $this->load->view('user_info', $data);
        } else {
            redirect(base_url() . 'userpanel/login');
        }
    }

    public function chatbox($name) {
        $data = array(
            'name' => $name,
            'msg' => $_POST['msg']
        );

        $this->db->insert('user_msg', $data);
       redirect('userpanel/user_view/' . $name,'auto');
        
        //$this->load->view('user_info',$data);
    }
    
    public function loadchat($name){
            $this->db->select('*');
            $this->db->from('user_msg');
            $this->db->where('name', $uname);
            $query1 = $this->db->get();
    }

    public function user_devices_view($uname) {
        $this->db->select('*');
        $this->db->from('userlog');
        $this->db->where('name', $uname);
        $query = $this->db->get();
        $data["fetch_data"] = $query;
        // print_r($data)
        $this->load->view('user_devices', $data);
    }

    public function user_devices_control($name) {

        //echo $name;
        $this->db->select('*');
        $this->db->from('userlog');
        $this->db->where('name', $name);


        $query = $this->db->get();



        if ($query->num_rows() > 0) {
            $data = array(
                'var1' => $_POST['led'],
                'var2' => $_POST['led']
            );
            $this->db->insert('test_arduino', $data);

            $log = array(
                'name' => $name,
                'var1' => $_POST['led'],
                'var2' => $_POST['led']
            );
            $this->db->insert($name, $log);

            $status = $_POST['led'];
            if ($status == "BULB ON" || $status == "BULB OFF") {
                $this->db->set('status1', $status);
                $this->db->where('name', $name);
                $query = $this->db->update('userlog');
            }

            if ($status == "FAN ON" || $status == "FAN OFF") {
                $this->db->set('status2', $status);
                $this->db->where('name', $name);
                $query = $this->db->update('userlog');
            }


            //$row = $query->row_array();
            //return $row;

            redirect('userpanel/user_devices_view/' . $name);
        } else {
            echo "error";
        }
    }

    public function user_complain_view($name) {
        $this->db->select('*');
        $this->db->from('userlog');
        $this->db->where('name', $name);
        $query = $this->db->get();
        $data["fetch_data"] = $query;
        $this->load->view('user_complain', $data);
    }

    public function user_complain($name) {
        if (isset($_POST['user_complain'])) {

            $data = array(
                'name' => $_POST['Name'],
                'email' => $_POST['Email'],
                'msg' => ($_POST['Message'])
            );

            $this->db->insert('usercomp', $data);
            $this->session->set_flashdata("success1", "email has been recieved");



            $config = array
                (
                'protocol' => 'smtp',
                'smtp_host' => 'smtp.gmail.com',
                'smtp_port' => 465,
                'smtp_user' => 'shivhansoti18@gmail.com',
                'smtp_pass' => '9998975419',
                'mailtype' => 'html',
                'charset' => 'utf-8'
            );

            $this->email->initialize($config);
            $this->email->set_mailtype("html");
            $this->email->set_newline("\r\n");


            $to_email = "shivhansoti18@gmail.com";
            $from_email = $this->input->post('Email');
            // $name= $this->input->post('Name');
            $msg = $this->input->post('Message');


            $this->load->library('email', $config);

            $this->email->from($from_email);
            $this->email->to($to_email);

            $this->email->message($msg);

            $this->email->send();

            redirect('userpanel/user_complain_view/' . $name);
            //$this->session->set_flashdata("email_sent", "Thank you for sending email.");
            // $this->session->set_flashdata("email_sent", "Error in sending Email.");
        }
    }

    public function user_notification_view($name) {
        $this->db->select('*');
        $this->db->from('userlog');
        $this->db->where('name', $name);
        $query = $this->db->get();
        $data["fetch_data"] = $query;
        $this->load->view('user_notification', $data);
    }

    public function user_notification($name) {
        $this->db->select('*');
        $this->db->from('userlog');
        $this->db->where('name', $name);
        $query = $this->db->get();
    }

    public function user_current_plan_view($name) {
        $this->db->select('*');
        $this->db->from('userlog');
        $this->db->where('name', $name);
        $query = $this->db->get();
        $data["fetch_data"] = $query;
        $this->load->view('user_current_plan', $data);
    }

    public function deactivate_plan($name) {
        $off = 0;
        $device = 0;
        $device1_on = "bulboff.jpg";
        $device2_on = "fanoff1.PNG";
        $duration = 0;
        $date = date();
        $this->db->set('on', $off);
        $this->db->set('device', $device);
        $this->db->set('device1_on', $device1_on);
        $this->db->set('device2_on', $device2_on);
        $this->db->set('duration', $duration);
        $this->db->set('date', $date);
        $this->db->where('name', $name);
        $this->db->update('userlog');

        redirect('userpanel/user_view/' . $name);
    }

    public function request_reactivate_plan($name) {

        redirect('userpanel/user_view/' . $name);
    }

    public function reactivate_previous_plan($name) {
        echo $name;
        $on = 1;
        $device = 4;
        $device1_on = "bulbon.gif";
        $device2_on = "fanon1.gif";
        $duration = 4;
        $date = date();
        $this->db->set('on', $on);
        $this->db->set('device', $device);
        $this->db->set('device1_on', $device1_on);
        $this->db->set('device2_on', $device2_on);
        $this->db->set('duration', $duration);
        $this->db->set('date', $date);
        $this->db->where('name', $name);
        $this->db->update('userlog');

        redirect('worker/manage_worker');
    }

    public function user_setting_view($name) {
        $this->db->select('*');
        $this->db->from('userlog');
        $this->db->where('name', $name);
        $query = $this->db->get();
        $data["fetch_data"] = $query;
        $this->load->view('settings', $data);
    }

    public function update($id, $name) {
        // echo $id;
        $dp = $_POST['dp'];
        $this->db->set('dp', $dp);
        $this->db->where('id', $id);
        $query = $this->db->update('userlog');

        if ($query) {
            redirect('userpanel/user_setting_view/' . $name);
        } else {
            echo "error";
        }
    }

    public function update_password($id, $name) {
        $password = $_POST['password'];
        $this->db->set('password', $password);
        $this->db->where('id', $id);
        $query = $this->db->update('users');

        if ($query) {
            redirect('userpanel/user_setting_view/' . $name);
        } else {
            echo "error";
        }
    }

    function search() {
        $this->load->view('searchpg');
    }

    function fetch() {
        $output = '';
        $query = '';
        $this->load->model('m_user_login');
        if ($this->input->post('query')) {
            //$table= $this->input->post('table');   
            $query = $this->input->post('query');
        }
        $data = $this->m_user_login->fetch_data($query);
        $output .= '
  <div class="table-responsive">
     <table class="table table-bordered table-striped">
      <tr>
       <th>Customer Name</th>
       <th>Var 1</th>
       
      </tr>
  ';
        if ($data->num_rows() >= 0) {
            foreach ($data->result() as $row) {
                $output .= '
      <tr>
       <td>' . $row->name . '</td>
        
      </tr>
    ';
            }
        } else {
            $output .= '<tr>
       <td colspan="5">No Data Found</td>
      </tr>';
        }
        $output .= '</table>';
        echo $output;
    }

    public function uname($name) {
        $this->db->select('*');
        $this->db->from('userlog');
        $this->db->where('name', $name);
        $query = $this->db->get();
        $data["row"] = $query;

        $this->load->view('include/header');
        $this->load->view('include/navbar');
        $this->load->view('devicecontrol', $data);
        $this->load->view('include/footer');
    }

    public function udev($name) {
        $this->db->select('*');
        $this->db->from('userlog');
        $this->db->where('name', $name);
        $query = $this->db->get();
        $data["row"] = $query;

        // $this->load->view('include/header');
        // $this->load->view('include/navbar');
        $this->load->view('devicecontrol', $data);
        // $this->load->view('include/footer');
    }

    public function devicecontrol($name) {

        if (isset($_POST['led'])) {

            // echo $name;
            $this->db->select('*');
            $this->db->from('userlog');
            $this->db->where('name', $name);


            $query = $this->db->get();



            if ($query->num_rows() > 0) {
                $data = array(
                    'var1' => $_POST['led'],
                    'var2' => $_POST['led']
                );
                $this->db->insert('test_arduino', $data);

                $log = array(
                    'name' => $name,
                    'var1' => $_POST['led'],
                    'var2' => $_POST['led']
                );
                $this->db->insert($name, $log);

                   $status = $_POST['led'];
            if ($status == "BULB ON" || $status == "BULB OFF") {
                $this->db->set('status1', $status);
                $this->db->where('name', $name);
                $query = $this->db->update('userlog');
            }

            if ($status == "FAN ON" || $status == "FAN OFF") {
                $this->db->set('status2', $status);
                $this->db->where('name', $name);
                $query = $this->db->update('userlog');
            }


                //$row = $query->row_array();
                //return $row;

                redirect('userpanel/uname/' . $name);
            } else {
                echo "error";
            }
        }
    }

    public function deactivate($name) {
        $off = 0;
        $this->db->set('on', $off);
        $this->db->where('name', $name);
        $query = $this->db->update('userlog');

        if ($query) {
            redirect('worker/index');
        } else {
            echo "error";
        }
    }

    public function activate($name) {
        $on = 1;
        $this->db->set('on', $on);
        $this->db->where('name', $name);
        $query = $this->db->update('userlog');

        if ($query) {
            redirect('worker/index');
        } else {
            echo "error";
        }
    }

    public function insert() {
        $DB_host = "localhost";
        $DB_user = "root";
        $DB_pass = "";
        $DB_name = "logit";
        try {
            $DBcon = new PDO("mysql:host={$DB_host};dbname={$DB_name}", $DB_user, $DB_pass);
            $DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "ERROR : " . $e->getMessage();
        }

        $student_name = $this->input->post('student_name');
        $student_roll_no = $this->input->post('student_roll_no');
        $student_class = $this->input->post('student_class');
        echo $student_name;

        $stmt = $DBcon->prepare("INSERT INTO student(student_name,student_roll_no,student_class) VALUES(:student_name, :student_roll_no,:student_class)");

        $stmt->bindparam(':student_name', $student_name);
        $stmt->bindparam(':student_roll_no', $student_roll_no);
        $stmt->bindparam(':student_class', $student_class);
        if ($stmt->execute()) {
            $res = "Data Inserted Successfully:";
            echo json_encode($res);
        } else {
            $error = "Not Inserted,Some Probelm occur.";
            echo json_encode($error);
        }

        $this->load->view('dynamic_insert_test');
    }

    public function payment_view() {
        //$this->load->view('payment');
        redirect('http://localhost/instamojo/index.php', 'refresh');
        //redirect('','');
    }
    
    public function deactivate_temporary($name)
    {
        $deactivate_button = "disabled";
        $this->db->set('disable_button', $deactivate_button);
        $this->db->where('name', $name);
        $query = $this->db->update('userlog');
        redirect('userpanel/uname/' . $name);
    }
    
     public function reactivate_temporary($name)
    {
        $reactivate_button = "";
        $this->db->set('disable_button', $reactivate_button);
        $this->db->where('name', $name);
        $query = $this->db->update('userlog');
        redirect('userpanel/uname/' . $name);
    }

    
   
}
