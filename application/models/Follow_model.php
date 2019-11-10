<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Follow_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    

    public function StartFollow(){
        $CurrentUserData = $this->session->get_userdata();
        $followId = $this->input->post('id');
        $where = '(user_id1="'.$CurrentUserData['userid'].'" and user_id2="'.$followId.'")';
        $this->db->where($where);
        $query = $this->db->get('user_following');
        if($query->num_rows() == 0){
            $data = array('user_id1' => $CurrentUserData['userid'],'user_id2' => $followId);
            $result = $this->db->insert('user_following',$data);
            $userquery = $this->db->query("select first_name,last_name from user_profile where user_reg_id = '".$CurrentUserData['userid']."'")->row();
            $notification_text = "$userquery->first_name started following you";
            $this->notification_model->addNotification($followId,$notification_text,"follow");

            echo "true";
            return;
        }
        echo "false";
        return;
    }
    public function UnFollow(){
        $CurrentUserData = $this->session->get_userdata();
        $followId = $this->input->post('id');
        $where = '(user_id1="'.$CurrentUserData['userid'].'" and user_id2="'.$followId.'")';
        $this->db->where($where);

        $query =  $this -> db -> delete('user_following');
        if($query){
            echo'true';
            exit;
        }
        echo "false";
        exit;
    }
	

    public function CheckFollow($id){
        $CurrentUserData = $this->session->get_userdata();
        $followId = $id;
        $where = '(user_id1="'.$CurrentUserData['userid'].'" and user_id2="'.$followId.'")';
        $this->db->where($where);
        $query = $this->db->get('user_following');
        if($query->num_rows() == 0){
            return false;
        }
        return true;
    }    
   
}
?>