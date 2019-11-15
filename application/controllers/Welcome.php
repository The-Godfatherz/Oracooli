<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

	function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

	public function index($message = null)
	{
		$userId = $this->session->userdata('userid');
		if(!empty($userId)){
			redirect('../mentor/');
		}else{
			$data = array();
			 if($message != null && $message == 0){
                $data['loginmessage']= "Email or Password is incorrect ";
                $data['logintype'] = "danger";

			 } 
			 if($message != null && $message == 1){
                $data['registermessage']= "Email already use ";
                $data['registertype'] = "danger";
			}
			 if($message != null && $message == 2){
                $data['loginmessage']= "Account Created Successfully ";
                $data['logintype'] = "success";
			}
			//$data = array('message' => $message,'type' => 'warning');
			$this->load->view('user/login',$data);
		}
	}
}
