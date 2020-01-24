<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_user_login extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
     function insert_data($data)
    {
        $this->db->insert("contact");    
    }
    
    function fetch_user()
    {
           $query= $this->db->get("contact");
           return $query;     
    }
    function fetch_front()
    {
           $query= $this->db->get("front");
           return $query;     
    }
    
    function fetch_home()
    {
        $this->db->where_in('id',1);
        $this->db->select('image');
        $this->db->from('front');
        
    }
    
    public function delete($id)
        {
		$this->db->where('cid', $id);
		$this->db->delete('contact');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
        
    public function getId($id)
        {
		$this->db->where('cid', $id);
		$query = $this->db->get('contact');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
        
      public function getfrontId($id)
        {
		$this->db->where('id', $id);
		$query = $this->db->get('front');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}    
        
      public function change_dp()
        {
		$id = $this->input->post('txt_hidden');
		$field = array(
			'image'=>$this->input->post('image')
			);
                $this->db->set($field);
		$this->db->where('id', $id);
		$this->db->update('front');
		
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
                
           //$this->load->view('change_dp');  
	}
        
        
       function get_general_settings() {
        $this->db->where_in('key', array('home', 'about', 'shiv',
            'saloni', 'security','expertsys','drone','smartdev','smarthomes','dl','ml', 'robot'));
        $this->db->select('*');
        $this->db->from('front');
        $query = $this->db->get();
        $data = $query->result_array();
        //print_r($data);exit;
        $return_data['home'] = $data[0]['image']; 
        $return_data['about'] = $data[1]['image'];
        $return_data['shiv'] = $data[2]['image'];
        $return_data['saloni'] = $data[3]['image'];
        $return_data['security'] = $data[4]['image'];
        $return_data['expertsys'] = $data[5]['image'];
        $return_data['drone'] = $data[6]['image'];
        $return_data['smartdev'] = $data[7]['image'];
        $return_data['smarthomes'] = $data[8]['image'];
        $return_data['dl'] = $data[9]['image'];
        $return_data['ml'] = $data[10]['image'];
        $return_data['robot'] = $data[11]['image'];
        //print_r($return_data);exit;
        return $return_data;
    }  
    
    function fetch_data($query)
 {
        if($query=="sagar" || $query=="user")
        {
                $this->db->select("*");
                $this->db->from('userlog');
                if($query != '')
                {
                 $this->db->like('name','sagar');
                // $this->db->or_like('var1', $query);
                // $this->db->or_like('var2', $query);
                 /*$this->db->or_like('PostalCode', $query);
                 $this->db->or_like('Country', $query);*/
                }
                //$this->db->order_by('id', 'DESC');
                return $this->db->get();
        }
    else
      {
     echo "error";
      }
 }

}