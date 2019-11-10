<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postdata extends CI_Controller {

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
        $this->load->model('publish_model');
        $this->load->library('session');
    }
    
	public function index()
	{
		
		if($this->session->userid){
		$profileData = $this->mentor_model->profileData($this->session->userid);
		$this->load->view('user/mentor',$profileData);
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

	public function publishPost(){
		$profileData = $this->publish_model->publishPost($this->session->userid);
	}

	public function displayPost(){
		if($this->input->post('userid')){
			$friendsArr = $this->publish_model->getUserFriends($this->input->post('userid'));
			if (in_array($this->session->userid, $friendsArr)){
			$profileData = $this->publish_model->displayFeeds($this->input->post('userid'),1,1);				
			}else{
			$profileData = $this->publish_model->displayFeeds($this->input->post('userid'),1);				
			}
		}else{
			$profileData = $this->publish_model->displayFeeds($this->session->userid);

		}
	}

	public function displayFriendsFeeds(){
		$profileData = $this->publish_model->displayFriendsFeeds($this->session->userid);
	}
	public function displayGlobalFeeds(){
		$profileData = $this->publish_model->displayGlobalFeeds($this->session->userid);
	}
	public function displayMentorsFeeds(){
		$profileData = $this->publish_model->displayMentorsFeeds($this->session->userid);
	}
}
