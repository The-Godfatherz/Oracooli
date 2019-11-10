<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	
	function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('profile_model');
    }
    
	public function index($id)
	{
		if($id){
		$profileData = $this->profile_model->profileData($id);
		$this->load->view('user/Profileshow',$profileData);
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

	/*public function saveProfile(){
		$profileData = $this->mentor_model->updateProfileData($this->session->userid);
	}*/

	public function Addfriend(){
		$profileData = $this->profile_model->addFriend();
	}

	public function Checkfriend(){
		$profileData = $this->profile_model->checkfriend();
	}

	public function AcceptFriend($id){
		$profileData = $this->profile_model->Acceptfriend($id);	
		redirect('../mentor');
	}

	public function getFriendList(){
		$friendlist = $this->profile_model->getFriendList();
		if($friendlist->num_rows() > 0){
			foreach ($friendlist->result() as $row) {
				if($this->session->userid == $row->user_id_1){
					$profileData = $this->profile_model->profileData($row->user_id_2);
				}elseif($this->session->userid == $row->user_id_2){
					$profileData = $this->profile_model->profileData($row->user_id_1);
				}
				echo '<a>'.$profileData->first_name.' '.$profileData->last_name.'</a><br/>';
			}
			exit;
		}else{
			echo 'no friends';
			exit;
		}
	}
}
