<?php

class user_login extends CI_Controller
{
     function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        
        $this->load->model('m_user_login');
        $general_setting = $this->m_user_login->get_general_settings();
        if ($general_setting)
        {
            $data['data'] = $general_setting;
        }        
        $this->load->view('user_login_view',$data);
        
         
       // $this->load->view('user_login_view');
    }
    
    public function homeimg()
    {
        
         $this->load->model('m_user_login');
        $general_setting = $this->m_user_login->get_general_settings();
        if ($general_setting)
        {
            $data['data'] = $general_setting;
        }        
        $this->load->view('user_login_view',$data);
    }
    
    public function email()
    {
        if(isset($_POST['query']))
        {
            
            $data = array(
                    'name' => $_POST['Name'],
                    'email' => $_POST['Email'],
                    'msg' =>($_POST['Message']),
                    'subject' => $_POST['Subject']
                         );

                     $this->db->insert('contact', $data);
                     $this->session->set_flashdata("success", "email has been recieved");
            
            
            
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
                $name= $this->input->post('Name');
                $msg= $this->input->post('Message');
                $subject= $this->input->post('Subject');
               
                $this->load->library('email', $config);

                $this->email->from($from_email,$name);
                $this->email->to($to_email);
                $this->email->subject($subject);
               $this->email->message($msg);
               
                if ($this->email->send())
                    {     
                    redirect('user_login/index');
                    $this->session->set_flashdata("email_sent", "Thank you for sending email.");
                    } 
                else
                    {
                    $this->session->set_flashdata("email_sent", "Error in sending Email.");
                    }         
              
       }
    }
    
    public function updatedp()
    {
        //echo "welcome to change dp";
        $this->load->model('m_user_login');
        $data["row"]=$this->m_user_login->fetch_front();
        $this->load->view('update_dp_view',$data);
    }
    
    
     public function change_dp($id)    
        {
         
                 $this->load->model('m_user_login');
		$data["row"] = $this->m_user_login->getfrontId($id);
                $this->load->view('change_dp',$data);
                    
	}

        
         public function change()    
        {
         
		$this->load->model('m_user_login');
                $result = $this->m_user_login->change_dp();
		if($result)
                {
			$this->session->set_flashdata('success1', 'Record updated successfully');
		}
                else
                {
			$this->session->set_flashdata('success1', 'Faill to update record');
		}
		redirect(base_url('user_login/updatedp'));
                    
	}
        
         public function delete($id)
        {
             $this->db->where('id', $id);
             $this->db->delete(front);
             redirect('user_login/updatedp');
        
        }
        
         public function user_complain()
    {
        if(isset($_POST['user_complain']))
        {
            
            $data = array(
                            'name' => $_POST['Name'],
                            'email' => $_POST['Email'],
                            'msg' =>($_POST['Message'])
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
                $name= $this->input->post('Name');
                $msg= $this->input->post('Message');
                
               
                $this->load->library('email', $config);

                $this->email->from($from_email,$name);
                $this->email->to($to_email);
                
               $this->email->message($msg);
               
                if ($this->email->send())
                    {     
                    $this->load->view('userpanelview');
                    $this->session->set_flashdata("email_sent", "Thank you for sending email.");
                    } 
                else
                    {
                    $this->session->set_flashdata("email_sent", "Error in sending Email.");
                    }         
              
       }
    }
    
    
    public function homeimage()
    {
       
     /* $this->db->select('*');
        $this->db->from('front');
        $this->db->where('image', $key );
        $query = $this->db->get();
        
        $data["fetch_data"]=$query;*/
        $this->load->view('include/header');
        $this->load->view('include/navbar');
        $this->load->view('settings/homeimage');
        $this->load->view('include/footer');
        
    }
    
    public function change_homeimage($key)
    {
      
        $img= $_POST['img'];
       // echo $key;
        $this->db->set('image',$img);
        $this->db->where('key',$key);
        $query=$this->db->update('front');
        
        if($query)
        {
        redirect('user_login/homeimage');
        }
        else
        {
            echo "error";
        }
       
    }
    
    public function aboutimage()
    {
       
     /* $this->db->select('*');
        $this->db->from('front');
        $this->db->where('image', $key );
        $query = $this->db->get();
        
        $data["fetch_data"]=$query;*/
        $this->load->view('include/header');
        $this->load->view('include/navbar');
        $this->load->view('settings/aboutimage');
        $this->load->view('include/footer');
        
    }
    
    public function change_aboutimage($key)
    {
      
        $img= $_POST['img'];
       // echo $key;
        $this->db->set('image',$img);
        $this->db->where('key',$key);
        $query=$this->db->update('front');
        
        if($query)
        {
        redirect('user_login/aboutimage');
        }
        else
        {
            echo "error";
        }
       
    }
    
    public function shivimage()
    {
       
     /* $this->db->select('*');
        $this->db->from('front');
        $this->db->where('image', $key );
        $query = $this->db->get();
        
        $data["fetch_data"]=$query;*/
        $this->load->view('include/header');
        $this->load->view('include/navbar');
        $this->load->view('settings/aboutimage');
        $this->load->view('include/footer');
        
    }
    
    public function change_shivimage($key)
    {
      
        $img= $_POST['img'];
       // echo $key;
        $this->db->set('image',$img);
        $this->db->where('key',$key);
        $query=$this->db->update('front');
        
        if($query)
        {
        redirect('user_login/aboutimage');
        }
        else
        {
            echo "error";
        }
       
    }
        
    
   
    
    
}