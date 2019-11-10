<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Postlike_model extends CI_Model{

    function __construct(){
        parent::__construct();
    }

	public function savePostlike($userId,$postId){
        $postquery = $this->db->query("select * from user_post where post_id = '".$postId."'")->row();
        $userquery = $this->db->query("select first_name,last_name from user_profile where user_reg_id = '".$this->session->userid."'")->row();

		$postlike = array('user_id' => $postquery->user_id, 'post_id' => $postId);
		$result = $this->db->insert('user_post_like',$postlike);

        if($result){
            $notification_text = "$userquery->first_name likes your post $postquery->post_title";
            return $this->notification_model->addNotification($postquery->user_id,$notification_text,"like");
        }
    }

    public function removePostlike($userId,$postId){

    }

    public function getPostlikes($userId){

    } 

}