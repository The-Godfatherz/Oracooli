<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox extends CI_Controller {

	
	function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('user_inbox');    
        $this->load->model('mentor_model');    
    }

	public function index()
	{

        if($this->session->userid){

            $data['inbox_data'] = $this->user_inbox->fetchInbox(); 
             
            if($this->session->userid){
			$profileData = $this->mentor_model->profileData($this->session->userid);
			$this->load->view('user/header',$profileData);
			$this->load->view('user/inbox',$data);
		}
       }
	}
}