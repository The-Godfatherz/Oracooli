<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Profile_model extends CI_Model{
    function __construct(){
        $this->load->model('notification_model');
        parent::__construct();
    }
    

    public function profileData($userid){
        // Prep the query
        $this->db->where('user_reg_id', $userid);
        
        // Run the query
        $query = $this->db->get('user_profile');
        // Let's check if there are any results
        if($query->num_rows() == 1)
        {
            // If there is a user, then create session data
            $row = $query->row();
            return $row;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }

    public function updateProfileData($userid){
	
            $data = $this->input->post();
            unset($data['email']);
            $this->db->where('user_reg_id', $userid);
            $this->db->update('user_profile', $data);
        
    }

    public function addFriend(){
        $CurrentUserData = $this->session->get_userdata();
        $addfriendUser = $this->input->post('id');
        $where = '((user_id_1="'.$CurrentUserData['userid'].'" and user_id_2="'.$addfriendUser.'") or (user_id_2="'.$CurrentUserData['userid'].'" and user_id_1="'.$addfriendUser.'" and friends="1"))';
        $this->db->where($where);
        $query = $this->db->get('user_relations');
        if($query->num_rows() == 0){
            $data = array('user_id_1' => $CurrentUserData['userid'],'user_id_2' => $addfriendUser, 'friends'=>'1');
            $result = $this->db->insert('user_relations',$data);
            $this->notification_model->addNotification($addfriendUser,$notification_text,"follow");
            echo "true";
            return;
        }
        echo "false";
        return;
       //$where = '(wrk_dlvrd_sts="open" or wrk_cl_sts = "Success")';
    }

    public function checkfriend($id){
        $CurrentUserData = $this->session->get_userdata();
        $addfriendUser = $id;
        $where = '((user_id_1="'.$CurrentUserData['userid'].'" and user_id_2="'.$addfriendUser.'") or (user_id_2="'.$CurrentUserData['userid'].'" and user_id_1="'.$addfriendUser.'" and friends="1"))';
        $this->db->where($where);
        $query = $this->db->get('user_relations');
        if($query->num_rows() == 0){
            return false;
        }

        return true;
    }

    public function AcceptFriend($id){
        $data = array('friends' => '2');
        $this->db->where('relation_id', $id);
        $this->db->update('user_relations', $data);
        return true;
    }

    public function getFriendList(){
        $id = $this->session->userid;
        $where = '((user_id_1="'.$id.'" or user_id_2="'.$id.'") and friends="2")';
        $this->db->where($where);
        return $query = $this->db->get('user_relations');
    }

    public function getMentorList(){
        $id = $this->session->userid;
        $this->db->where('user_id1',$id);
        return $query = $this->db->get('user_following');
    }   

    public function getChatMessages($userId , $friendId){
        $where = '((user_id1="'.$userId.'" and user_id2="'.$friendId.'") or (user_id1="'.$friendId.'" and user_id2="'.$userId.'"))';
        $this->db->where($where);
        return $query = $this->db->get('user_chat');        
    }

    public function sendChatMessage($userId , $friendId , $message){
        $data = array('user_id1' => $userId,'user_id2'=>$friendId,'message'=> $message);  
        $this->db->insert('user_chat',$data);
        return true;  
    }

    public function getFollowers($userId){
        $this->db->where('user_id2',$userId);
        $query = $this->db->get('user_following');
        return $query->num_rows();
    }

    public function getFollowing($userId){
        $this->db->where('user_id1',$userId);
        $query = $this->db->get('user_following');
        return $query->num_rows();
    }

    public function updateCurrentUserChat(){
        $friendUserId = $this->input->post('friendUserId');
        $userId = $this->session->userid;
        $where = '(user_id1="'.$friendUserId.'" and user_id2="'.$userId.'" and read_status = 0)';
        $this->db->where($where);
        $query = $this->db->get('user_chat');

        $data = array('read_status' => '1');
        $this->db->where($where);
        $this->db->update('user_chat', $data);
        return $query;
    }

    public function updateChatNotification(){
        $this->db->select('user_id1, COUNT(id) as total');
        $where = '(user_id2="'.$this->session->userid.'" and read_status = 0)';
        $this->db->where($where);
        $this->db->group_by('user_id1'); 
        $query = $this->db->get('user_chat');
        return $query;
    }
}
?>