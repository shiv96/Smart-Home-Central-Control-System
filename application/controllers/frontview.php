<?php

class frontview extends CI_Controller
{
    function __construct() 
    {
         parent::__construct();
    }
    
    public function frontpage()
    {
        $this->load->view('frontpage');
    }
       
}
