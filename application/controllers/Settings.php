<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	
	function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('settings_model');
    }

    public function checkChatMinimizeSettings(){
        $result = $this->settings_model->checkChatMinimizeSettings($this->session->userid);
        
    }

}