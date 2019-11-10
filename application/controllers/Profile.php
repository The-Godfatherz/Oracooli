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
        $this->load->model('follow_model');
        $this->load->model('chat_model');
        $this->load->helper('image_helper');
    }
    
	public function index($id)
	{
		if($id){
		$profileData['profile'] = $this->profile_model->profileData($id);
    $profileData['selfprofile'] = $this->profile_model->profileData($this->session->userid);
		$profileData['friends'] = $this->Checkfriend($id);
		$profileData['follow'] = $this->Checkfollow($id);
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

	public function Checkfriend($id){
		return $this->profile_model->checkfriend($id);
	}

	public function Checkfollow($id){
		return $this->follow_model->CheckFollow($id);
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
				$url = str_replace("index.php/","",base_url());
				//echo '<a>'.$profileData->first_name.' '.$profileData->last_name.'</a><br/>';
        if(isset($profileData->user_reg_id)){
          echo '<li class="nav-item  " style="width:4rem">
                <a class="nav-link text-center "  id="v-pills-home-tab" data-toggle="pill" href="#" onclick="startChat('.$profileData->user_reg_id.')" role="tab" aria-controls="v-pills-home" aria-selected="true" style="width:">
                <img src="'.get_imagepath($profileData->profile_image).'" style="width:25px;height:25px" class=" rounded-circle " alt="..."> <br>
                  <span class="text-dark">'.$profileData->first_name.' '.$profileData->last_name.'</span>
                

                </a>
              </li>';
        }
                  
			}
			exit;
		}else{
			echo '<li class="nav-item  " style="width:4rem">
                
                  <span style="font-size:9.5px;color:black">
                       No Friends
                  </span>
                

                </a>
              </li>';
			exit;
		}
	}

    public function getFriendList1(){
    $friendlist = $this->chat_model->getFriendList();
    $friendsData = array();
    if($friendlist->num_rows() > 0){
      foreach ($friendlist->result() as $row) {
        if($this->session->userid == $row->user_id_1){
          $profileData = $this->chat_model->profileData($row->user_id_2);
        }elseif($this->session->userid == $row->user_id_2){
          $profileData = $this->chat_model->profileData($row->user_id_1);
        }
        $friendsData[] = $profileData;
        $url = str_replace("index.php/","",base_url());
      }
      return $friendsData;
    }
    return false;
  }

	public function startChat(){
		$frienduserId = $this->input->post('frienduserId');
		$profileData = $this->profile_model->profileData($frienduserId);
    $chatMessages = $this->profile_model->getChatMessages($this->session->userid,$frienduserId);
    $this->chat_model->changeChatStatus($this->session->userid,$frienduserId);
		        exit;

	}

  public function sendChatMessage(){
    
      $frienduserId = $this->input->post('frienduserId');
      $chatText = $this->input->post('chatText');
      if(!empty($chatText)){
        if($this->profile_model->sendChatMessage($this->session->userid,$frienduserId,$chatText)){
        echo '<div class="d-flex justify-content-start  border-right-0 border-left-0 border-dark  ">
                <div class="msg_cotainer shadow-lg ">
                  '.$chatText.'
                  <span class="msg_time ">8:40 AM, Today</span>
                </div>
              </div>';
      }
      }else{
        echo "";
      }
      exit;
  }

  public function checkChatStatusWindow(){
    $friends = array();
    $friendlist = $this->chat_model->getFriendList();

    if($friendlist->num_rows() > 0){
      foreach ($friendlist->result() as $row) {
        if(($this->session->userid == $row->user_id_1) && ($row->user1_chat_status == 1)){
          echo $row->user_id_2;
        }elseif(($this->session->userid == $row->user_id_2) && ($row->user2_chat_status == "1")){
          echo $row->user_id_1;
        }
        //echo '<a>'.$profileData->first_name.' '.$profileData->last_name.'</a><br/>';
      }
      exit;
    }
    echo "false";
    exit;
    
  }

  public function openChatHeader(){
    $frienduserId = $this->input->post('frienduserId');
    $profileData = $this->profile_model->profileData($frienduserId);
    
  if($profileData){
    echo '<a class="btn btn-link text-left chatHeading" style="font-size:11px;" id="chatheader_'.$frienduserId.'">
                    <img src="'.get_imagepath($profileData->profile_image).'" style="width:25px;height:25px"  class=" rounded-circle ml-1 mr-2" alt="...">
                    <span class="">'.$profileData->first_name.' '.$profileData->last_name.'</span>
                  </a>
                  <div class="video_cam">
                  <span><i class="fas fa-video"></i></span>
                  <span><i class="fas fa-phone"></i></span>
                   <span class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class=" fas fa-ellipsis-v"    ></i>
                      <div class="dropdown-menu more border-bottom border-left-0 border-right-0 border-top-0" >
                          <a href="#" class="dropdown-item" ><i class="fas fa-user-circle"></i> View profile</a>
                          <a href="#" class="dropdown-item " ><i class="fas fa-users"></i> Add to close friends</a>
                          <a href="#" class="dropdown-item "><i class="fas fa-plus"></i> Add to groupt</a>
                          <a href="#" class="dropdown-item "><i class="fas fa-ban"></i> Block</a>

                      </div>
                </span>
     
          </div>';
  }

  exit;   
  }

  function openChatContent(){
    $frienduserId = $this->input->post('frienduserId');
    $profileData = $this->profile_model->profileData($frienduserId);
    $chatMessages = $this->profile_model->getChatMessages($this->session->userid,$frienduserId);
    
      if($profileData){
        foreach ($chatMessages->result() as $value) {
                # code...
              if($value->user_id1 == $this->session->userid){
                echo ' <div class="d-flex justify-content-start  border-right-0 border-left-0 border-bottom-0 mt-3 mb-3   " style="position:relative">
                    <div class="msg_cotainer  text-success mr-2">
                  '.$value->message.'
                  <span class="msg_time  ">8:40 AM, Today</span>
                </div>
              </div>';
              }else{
                echo '<div class="d-flex justify-content-end mt-2 mb-2 ml-2   ">
                    <div class="msg_cotainer_send text-primary"> 
                  '.$value->message.'
                  <span class="msg_time_send ">8:55 AM, Today</span>
                </div>
              </div>';
              }
              
              
               }
               

            ;
         echo '<div class="card-footer   p-0 border-right border-top-0 border-bottom-0 border-left-0" style="position:absolute;bottom:0;left:0;right:0" >
              <div class="input-group " >
                <div class="input-group-append">
                  <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                </div>
                <textarea name="" class="form-control type_msg" placeholder="Type your message..." id="chatText"></textarea>
                <div class="input-group-append">
                  <span class="input-group-text send_btn"><i class="fas fa-location-arrow" onclick=sendChatMessage('.$profileData->user_reg_id.')></i></span>
                </div>
              </div>
            </div>';
      }        
            
              
  exit;
  }

  public function closeChat(){
    $frienduserId = $this->input->post('frienduserId');
    $result = $this->chat_model->closeChat($frienduserId);

  }

  public function searchFriendList(){
    $searchkey = $this->input->post('searchkey');
    $result = $this->chat_model->searchFriendList($searchkey);
    if($result){
      foreach ($result as $key => $value) {
        # code...
        echo '<li class="nav-item">
                <a class="nav-link  " id="v-pills-home-tab" data-toggle="pill" href="#" onclick="startChat('.$value['user_reg_id'].')" role="tab" aria-controls="v-pills-home" aria-selected="true" style="">
                  <img src="'.get_imagepath($value['profile_image']).'" style="width:30px;height:30px" class=" rounded-circle ml-1 mr-2" alt="...">
                  <span class="">'.$value['first_name'].' '.$value['last_name'].'</span>
                </a>
              </li>';
      }
      exit;
    }
  }

  public function updateCurrentUserChat(){
    $result = $this->profile_model->updateCurrentUserChat();
    if($result){
      foreach ($result->result() as $value) {
              
                echo '<div class="d-flex justify-content-end border-right-0 border-left-0 border-dark  ">
                    <div class="msg_cotainer_send text-primary ">
                  
                  '.$value->message.'
                  <span class="msg_time_send">8:55 AM, Today</span>
                </div>
              </div>';
               }
    }else{
      echo "";
    }
    exit;
  }

  public function updateChatNotification(){
    $result = $this->profile_model->updateChatNotification();
    if($result){
      echo json_encode($result->result());
    }else{
      echo "";
    }
    exit;
  }

  public function getMentorList(){
    $mentorlist = $this->profile_model->getMentorList();
    if($mentorlist->num_rows() > 0){
      foreach ($mentorlist->result() as $row) {
        $profileData = $this->profile_model->profileData($row->user_id2);
        
        $url = str_replace("index.php/","",base_url());
        //echo '<a>'.$profileData->first_name.' '.$profileData->last_name.'</a><br/>';
        if(isset($profileData->user_reg_id)){
          echo '<li class="nav-item"  style="width:4rem">
                <a class="nav-link  " id="v-pills-home-tab" data-toggle="pill" href="#" onclick="#" role="tab" aria-controls="v-pills-home" aria-selected="true" style="">
                  
                  <img src="'.get_imagepath($profileData->profile_image).'" style="width:30px;height:30px" class=" rounded-circle ml-1 " alt="...">
                 				  <br>
                  <span class="text-dark">'.$profileData->first_name.' '.$profileData->last_name.'</span>
                </a>
              </li>';
        }
                  
      }
      exit;
    }else{
      echo '<li class="nav-item"  style="width:4rem">
                       <br>
                  <span class="text-dark">No mentors </span>
                </a>
              </li>
      ';
      exit;
    }
  }
}