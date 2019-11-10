<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification extends CI_Controller {

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
        $this->load->model('notification_model');
        $this->load->library('session');
    }
    
	public function index($id)
	{
		if($id){
		$profileData = $this->profile_model->profileData($id);
		$this->load->view('user/Profileshow',$profileData);
		}
		//$this->load->view('user/login');
	}


	public function getNotifications(){

		$userNotificationData = $this->notification_model->getUserNotification();
		if($userNotificationData){
			foreach ($userNotificationData as $row) {
				# code...
				echo '<div class="dropdown-divider"></div>
      		<a href="#" class="dropdown-item" ><i class="fas fa-envelope" ></i>'.$row->notification_text.'</a>';
			}
		}
		$notificationData = $this->notification_model->getNotifications($this->session->userid);
		if($notificationData){
			foreach ($notificationData as $row) {
				echo '<div class="form-inline" >
				<a  href="" class="dropdown-item" ><i class="fas fa-user "></i>'.$row->first_name." ".$row->last_name.' <p style="font-size:9px;">Friend Request</p> </a>
				<a href="'.base_url().'/profile/acceptfriend/'.$row->relation_id.'" class="btn btn-success ml-2" style="font-size:10px;">Accept </a> 
				<a href="" class="btn btn-success ml-2" style="font-size:10px;">Decline</a> 
				</div>
                    <div class="dropdown-divider"></div>  
                    <a href="#" class="dropdown-item" ><i class="fas fa-user "></i>Message Notifications </a>';
			}
			exit;
		}
	}
}