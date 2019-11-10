<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mentee extends CI_Controller {

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
		$this->load->model('Publish_model');
		
    }
    
	public function index($message = null)
	{
		
		if($this->session->userid){
		$profileData = $this->mentor_model->profileData($this->session->userid);
	    $followData = $this->Publish_model->getUserFollowing($this->session->userid);             	
		 $arr = array();
		 
		 foreach ($followData as $row){
			$feeds = array(); 
			
			  $mentorquery = $this->db->query("select * from user_post inner join user_uploads on user_post.post_id  = user_uploads.post_id where user_post.user_id  = '".$row."' AND user_post.as_mentor =1 AND global=1 ORDER BY user_post.post_id DESC limit 3 ");
			foreach($mentorquery->result() as $value){
			$feeds[] = array("content_type" => isset($value -> content_type) ? $value -> content_type : "default","content_link" => isset($value -> content_link) ? $value -> content_link : "default","post_description" => isset($value ->post_description) ? $value ->post_description : "default","post_title" => isset($value ->post_title) ? $value ->post_title : "default" );
             		 
				  
			}
			  $mentorprofiledata = $this->mentor_model->profileData($row);
			  
              $arr[$row] = array('mentorimage' => get_imagepath($mentorprofiledata->profile_image),'first_name' => $mentorprofiledata->first_name,'last_name' => $mentorprofiledata->last_name,'user_id' => $row,'mentorfeeds'=> $feeds,'profileurl' => base_url().'profile/index/'.$row);			 
			 
		 };
		 $profileData->{"mentordata"}=$arr;
		 
		
		 
		if($message != null && $message == 0){
			   $profileData->{"message"} = "Welcome to Oracooli ";
               $profileData->{"type"} = "success";
			}
		 /*$arr [user_id2] = array('content_link','ORDER BY user_post.post_id DESC limit 1');
		 print_r($arr); 
		  print_r($arr);
		 exit;
		   print_r($mentorquery->result());
			  exit;
		 */
		
		 
		
		$this->load->view('user/mentee',$profileData);
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
