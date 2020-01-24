<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class user_message extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() 
    {
        
        $this->load->model('m_user_login');
        $data["fetch_data"]=$this->m_user_login->fetch_user();
        $this->load->view('include/header', $data);
        $this->load->view('include/navbar');
        $this->load->view("user_message_view",$data);
        $this->load->view('include/footer');
        
    }
    
    public function getId($id)
    {
            $this->load->model('m_user_login');
            $data["row"] = $this->m_user_login->getId($id);
            redirect('user_message/index');
           
    }
    
   public function delete_complain($id)
        {
                $this->load->model('m_user_login');
		$result = $this->m_user_login->delete($id);
		if($result)
                {
			$this->session->set_flashdata('success_msg', 'Record solved successfully');
		}
                else
                {
			$this->session->set_flashdata('error_msg', 'Faill to solve record');
		}
		redirect('user_message/index');
	}
        
    public function deleteAll()
    {
        $this->load->database();
        $data['row'] = $this->db->get("contact")->result();
        $ids = $this->input->post('ids');
        $this->db->where_in('cid', explode(",", $ids));
        $this->db->delete('contact');
        echo json_encode(['success'=>"Item Deleted successfully."]);
        redirect('user_message/index');
        
    }    
    
}
