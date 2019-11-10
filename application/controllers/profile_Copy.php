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
    }
    
	public function index($id)
	{
		if($id){
		$profileData['profile'] = $this->profile_model->profileData($id);
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
				echo '<div class=" "style="overflow-y:scroll;height:20rem;font-size:10px;">
                     
                     <ul class="list-group list-group-flush"style="  ">
                        <li class="list-group-item d-flex justify-content-between align-items-center" style="">     
                          <button data-toggle="collapse" data-target="#session" role="button" aria-expanded="false" aria-controls="collapseExample"  type="button" class=" btn btn-link" onclick="startChat('.$profileData->user_reg_id.')">
                           <img src="$url.images/1.jpg" style="width:30px;height:30px" class=" rounded-circle "" alt="..."> <br>
                           '.$profileData->first_name.' '.$profileData->last_name.'
                           <span class="badge badge1 float-right">9</span>
                           <span class="float-right"></span>
                           <span class="sr-only">unread messages</span>
                           </button>
                         
                        </li>
                     </ul>    
                  </div><br/>';
				//echo '<a>'.$profileData->first_name.' '.$profileData->last_name.'</a><br/>';
			}
			exit;
		}else{
			echo 'no friends';
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
		echo '<div class="card-header " style="background-color:#2AA1AF;color:#FFFFFF">
           <a   class="btn btn-link " >
            <i class="fas fa-arrow-circle-left float-left"></i>
            
             <span class="sr-only"></span>
          </a>
          <a   class="btn btn-link " >
            <img src="images/ajay.jpg" style="width:30px;height:30px" class=" rounded-circle ml-1 mr-2" alt="..."> 
             '.$profileData->first_name.' '.$profileData->last_name.' 
            
             <span class="sr-only"></span>
          </a>
           <div class="video_cam">
                  <span><i class="fas fa-video"></i></span>
                  <span><i class="fas fa-phone"></i></span>
                   <span class=""> <i class=" fas fa-ellipsis-v" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"  ></i>
                      <div class="dropdown-menu more border-bottom border-left-0 border-right-0 border-top-0" >
                          <a href="#" class="dropdown-item" ><i class="fas fa-user-circle"></i> View profile</a>
                          <a href="#" class="dropdown-item " ><i class="fas fa-users"></i> Add to close friends</a>
                          <a href="#" class="dropdown-item "><i class="fas fa-plus"></i> Add to groupt</a>
                          <a href="#" class="dropdown-item "><i class="fas fa-ban"></i> Block</a>

                      </div>
          </span>
     
          </div>
     
        </div>
        <div class="card-body msg_card_body custom_chat_message_body" style="overflow-y:scroll">';
              foreach ($chatMessages->result() as $value) {
                # code...
              if($value->user_id1 == $this->session->userid){
                echo '<div class="d-flex justify-content-start mb-4 border-right-0 border-left-0 border-dark  ">
                <div class="msg_cotainer shadow-lg ">
                  '.$value->message.'
                  <span class="msg_time ">8:40 AM, Today</span>
                </div>
              </div>';
              }else{
                echo '<div class="d-flex justify-content-end  ">
                <div class="msg_cotainer_send shadow-lg">
                  '.$value->message.'
                  <span class="msg_time_send">8:55 AM, Today</span>
                </div>
              </div>';
              }
              
              
               }

            echo '</div>
         <div class="card-footer">
              <div class="input-group">
                <div class="input-group-append">
                  <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                </div>
                <textarea name="" class="form-control type_msg" placeholder="Type your message..." id="chatText"></textarea>
                <div class="input-group-append">
                  <span class="input-group-text send_btn"><i class="fas fa-location-arrow" onclick="sendChatMessage('.$frienduserId.')"></i></span>
                </div>
              </div>
            </div> ';
            exit;

	}

  public function sendChatMessage(){
    
      $frienduserId = $this->input->post('frienduserId');
      $chatText = $this->input->post('chatText');
      if($this->profile_model->sendChatMessage($this->session->userid,$frienduserId,$chatText)){
        echo '<div class="d-flex justify-content-start mb-4 border-right-0 border-left-0 border-dark  ">
                <div class="msg_cotainer shadow-lg ">
                  '.$chatText.'
                  <span class="msg_time ">8:40 AM, Today</span>
                </div>
              </div>';
      }
  }

  public function checkChatStatusWindow(){
    $friendlist = $this->chat_model->getActiveChatFriendList();
    if($friendlist){


    if($friendlist->num_rows() > 0){
      foreach ($friendlist->result() as $row) {
        if($this->session->userid == $row->user_id_1){
          $profileData = $this->profile_model->profileData($row->user_id_2);
        }elseif($this->session->userid == $row->user_id_2){
          $profileData = $this->profile_model->profileData($row->user_id_1);
        }
        $url = str_replace("index.php/","",base_url());
        $chatMessages = $this->profile_model->getChatMessages($this->session->userid,$profileData->user_reg_id);
        echo '<div class="card-header " style="background-color:#2AA1AF;color:#FFFFFF">
           <a   class="btn btn-link " >
            <i class="fas fa-arrow-circle-left float-left"></i>
            
             <span class="sr-only"></span>
          </a>
          <a   class="btn btn-link " >
            <img src="images/ajay.jpg" style="width:30px;height:30px" class=" rounded-circle ml-1 mr-2" alt="..."> 
             '.$profileData->first_name.' <br>'.$profileData->last_name.' 
            
             <span class="sr-only"></span>
          </a>
           <div class="video_cam">
                  <span><i class="fas fa-video"></i></span>
                  <span><i class="fas fa-phone"></i></span>
                   <span class=""> <i class=" fas fa-ellipsis-v" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"  ></i>
                      <div class="dropdown-menu more border-bottom border-left-0 border-right-0 border-top-0" >
                          <a href="#" class="dropdown-item" ><i class="fas fa-user-circle"></i> View profile</a>
                          <a href="#" class="dropdown-item " ><i class="fas fa-users"></i> Add to close friends</a>
                          <a href="#" class="dropdown-item "><i class="fas fa-plus"></i> Add to groupt</a>
                          <a href="#" class="dropdown-item "><i class="fas fa-ban"></i> Block</a>

                      </div>
          </span>
     
          </div>
     
        </div>
        <div class="card-body msg_card_body custom_chat_message_body" style="overflow-y:scroll">';
              foreach ($chatMessages->result() as $value) {
                # code...
              if($value->user_id1 == $this->session->userid){
                echo '<div class="d-flex justify-content-start mb-4 border-right-0 border-left-0 border-dark  ">
                <div class="msg_cotainer shadow-lg ">
                  '.$value->message.'
                  <span class="msg_time ">8:40 AM, Today</span>
                </div>
              </div>';
              }else{
                echo '<div class="d-flex justify-content-end  ">
                <div class="msg_cotainer_send shadow-lg">
                  '.$value->message.'
                  <span class="msg_time_send">8:55 AM, Today</span>
                </div>
              </div>';
              }
              
              
               }

            echo '</div>
         <div class="card-footer">
              <div class="input-group">
                <div class="input-group-append">
                  <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                </div>
                <textarea name="" class="form-control type_msg" placeholder="Type your message..." id="chatText"></textarea>
                <div class="input-group-append">
                  <span class="input-group-text send_btn"><i class="fas fa-location-arrow" onclick="sendChatMessage('.$profileData->user_reg_id.')"></i></span>
                </div>
              </div>
            </div> ';
            exit;

        //echo '<a>'.$profileData->first_name.' '.$profileData->last_name.'</a><br/>';
      }
      exit;
    }else{
      echo "false";exit;
    }
    }
  }
}