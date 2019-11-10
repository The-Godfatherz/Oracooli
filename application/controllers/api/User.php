<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	
	function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('user_model');
        $this->load->library('email');
        
    }

	public function index()
	{
		//$this->load->view('user/login');
	}

	public function login(){
		$result = $this->user_model->validate();
		//$profileData = $this->user_model->profileData($this->session->userid);
		if($result){
			/*$this->load->view('user/mentor');*/
			redirect('../mentee/');
		}else{
			redirect(base_url().'welcome/index/0');
		}
	}

	public function register(){
		// grab user input
		
        $username = $this->security->xss_clean($this->input->post('username'));
        $email = $this->security->xss_clean($this->input->post('email_registration'));
        $password = $this->security->xss_clean($this->input->post('registration_password'));
        
		$result = $this->user_model->register();
		$config = $this->config->item('smtp_email_config');
		if($result){
			$this->email->initialize($config);
			$this->email->from('datarshaunak@gmail.com');
			$this->email->to($email);
			$this->email->subject("Activation");
			$emailData = array('activationlink' => base_url().'user/accountactivation/code/'.$result['code']);
			$data = $this->load->view('email/email_confirmation', $emailData, TRUE);
			$this->email->message($data);
			if ($this->email->send()) {
       		redirect(base_url());
    } else {
        show_error($this->email->print_debugger());
    }
    
		}
		
	}
	
	public function Logout()
	{
		if($this->user_model->logout()){
			redirect(base_url());
		}
	}

	public function GoogleLogin(){
		/* Google App Client Id */
		
		/* Google App Client Id */
		define('CLIENT_ID', '325224881481-mulslpp5kpe0dfvgr84p5bakfmicvsh6.apps.googleusercontent.com');

		/* Google App Client Secret */
		define('CLIENT_SECRET', 'MfMmHK2jFdICS2JqnUjeJmZD');

		/* Google App Redirect Url */
		define('CLIENT_REDIRECT_URL', base_url().'user/googlelogin');

		$this->load->library('googleloginapi');
		$data = $this->googleloginapi->GetAccessToken(CLIENT_ID, CLIENT_REDIRECT_URL, CLIENT_SECRET, $_GET['code']);
		$userData = $this->googleloginapi->GetUserProfileInfo($data['access_token']);

		$email = $userData['emails'][0]['value'];
		$result = $this->user_model->googleLogin($email,$userData);

		if($result){
			/*$this->load->view('user/mentor');*/
			redirect('../mentee');
		}else{
			redirect(base_url());
		}
		
	}

	public function forgetPasswordLink(){
		$result = $this->user_model->sendForgetPasswordEmail();
	}

	public function passwordChangePage($userid){
			$email = $this->uri->segment('6');
			$id = $this->uri->segment('4');
			$data = array('id' => $id , 'email' => $email);
			$this->load->view('user/newpassword',$data);
	}

	public function changePasswordPost(){
			$result = $this->user_model->changePassword();
			if($result){
				$data = array('message' => 'Password changed successfully.Please Login with new password','type' => 'success');
			}else{
				$data = array('message' => 'Error in changing password.Please contact support','type' => 'fail');
			}
			$this->load->view('user/login',$data);			
	}

	public function AccountActivation(){
		$uniquecode = $this->uri->segment('4');
		if($uniquecode){
			$result = $this->user_model->AccountActivation($uniquecode);
			if($result){
				redirect(base_url());
			}			
		}
	}
	//http://127.0.0.1/CodeIgniter/index.php/user/passwordChange/userid/1/email/datarshaunak@gmail.com
}