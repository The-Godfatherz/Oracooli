<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Chat_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getFriendList(){

        $id = $this->session->userid;
        $where = '((user_id_1="'.$id.'" or user_id_2="'.$id.'") and friends="2")';
        $this->db->where($where);
        return $query = $this->db->get('user_relations');
    }   

    public function getActiveChatFriendList(){
        $id = $this->session->userid;
        $where = '((user_id_1="'.$id.'" or user_id_2="'.$id.'") and friends="2" and chat_status="1")';
        $this->db->where($where);
        return $query = $this->db->get('user_relations');
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

    public function profileData($userid){
        // Prep the query
        $this->db->where('user_reg_id', $userid);
        
        // Run the query
        $this->db->select('user_reg_id','first_name','last_name','profile_image');
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

    public function changeChatStatus($userId,$friendId,$chatStatus = 1){

        $this->db->set('user1_chat_status', '0', FALSE);
        $this->db->where('user_id_1', $userId);
        $this->db->update('user_relations'); // gives UPDATE mytable SET field = field+1 WHERE id = 2

        $this->db->set('user2_chat_status', 0);
        $this->db->where('user_id_2', $userId);
        $this->db->update('user_relations'); // gives UPDATE `mytable` SET `field` = 'field+1' WHERE `id` = 2

        $where = '(user_id_1="'.$userId.'" and user_id_2="'.$friendId.'")';
        $data = array('user1_chat_status'=> 1);
        $this->db->where($where);   
        $this->db->update('user_relations',$data);
        
        $where = '(user_id_1="'.$friendId.'" and user_id_2="'.$userId.'")';
        $data = array('user2_chat_status'=> $chatStatus);
        $this->db->where($where);   
        $this->db->update('user_relations',$data);
    }

    public function closeChat($friendId){
        $userId = $this->session->userid;
        $where = '((user_id_1="'.$userId.'" and user_id_2="'.$friendId.'") or (user_id_1="'.$friendId.'" and user_id_2="'.$userId.'"))';
        $data = array('chat_status'=> 0);
        $this->db->where($where);   
        $this->db->update('user_relations',$data);
    }

    public function searchFriendList($key){

        $friendlist = $this->getFriendList();
        $friends = array();
        if($friendlist->num_rows() > 0){
            foreach ($friendlist->result() as $row) {
                if($this->session->userid == $row->user_id_1){
                    $friends[] = $row->user_id_2;
                }elseif($this->session->userid == $row->user_id_2){
                    $friends[] = $row->user_id_1;
                }
            }
        $this->db->select('user_reg_id,first_name,last_name,profile_image');
        $this->db->from('user_profile');
        $this->db->like('first_name', $key);
        $this->db->where_in('user_reg_id',$friends);
        $query = $this->db->get();
        return $query->result_array();
        }
        return false;
    }
}