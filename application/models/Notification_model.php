<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Notification_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function getNotifications($userid){
        $this->db->select('user_relations.*, user_profile.*')
         ->from('user_relations')
         ->join('user_profile', 'user_relations.user_id_1 = user_profile.user_reg_id');
        $this->db->where('user_relations.user_id_2', $userid);
        $this->db->where('user_relations.friends', '1');
        $query = $this->db->get();
        if($query->result() > 0){
            return $query->result();
        }

        return false;
    }

    public function getUserNotification(){
        $this->db->where('notify_user_id',$this->session->userid);
        $query = $this->db->get('user_notification');
        if($query->result() > 0){
            return $query->result();
        }
        return false;
    }

    public function addNotification($notify_user_id,$notification_text,$notification_type){
            $data = array("notification_type" => $notification_type,"notify_user_id" => $notify_user_id,"notification_text" => $notification_text);
            return $this->db->insert('user_notification',$data);
    }

    /*public function profileData($userid){
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
        return false;
    }

    public function updateProfileData($userid){
	
            $data = $this->input->post();
            unset($data['email']);
            $this->db->where('user_reg_id', $userid);
            $this->db->update('user_profile', $data);
        
    }*/
}
?>