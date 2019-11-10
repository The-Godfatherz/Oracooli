<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mentor extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('mentor_model');
        $this->load->helper('profile_helper');
        $this->load->helper('image_helper');
    }
    
	public function index()
	{
			
		if($this->session->userid){
		$profileData = $this->mentor_model->profileData($this->session->userid);
		if($this->uri->segment('4')){
			$profileData->message = 'Login Successfull';
		}
		
		$this->load->view('user/mentor',$profileData);
		}else{
			redirect(base_url());
		}
		//$this->load->view('user/login');
	}

	/*public function login(){
		$this->load->model('user_model');
		$result = $this->user_model->validate();
		if($result){
			
			redirect('mentor');
		}
	}*/

	public function saveProfile(){
		$profileData = $this->mentor_model->updateProfileData($this->session->userid);
	}
}
