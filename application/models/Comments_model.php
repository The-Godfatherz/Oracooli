<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Comments_model extends CI_Model{

    function __construct(){
        parent::__construct();
    }

	public function saveComments($postid,$comment_text){
        $userId = $this->session->userid;
		$postcomment = array( 'user_id' => $userId, 'post_id' => $postid, 'comment' => trim($comment_text));
		return $this->db->insert('user_post_comment',$postcomment);
    }

    public function getComments($postid){
        $this->db->select('user_post_comment.*,user_profile.*')
        ->from('user_post_comment')
        ->join('user_profile','user_post_comment.user_id = user_profile.user_reg_id')
        ->where('user_post_comment.post_id',$postid);
        
      $comment_query = $this->db->get();
      if($comment_query->result_array()){
        return $comment_query->result_array();
      }
      return false;
    }

    public function refreshComments($postid){
        $this->db->select('user_post_comment.*,user_profile.*')
        ->from('user_post_comment')
        ->join('user_profile','user_post_comment.user_id = user_profile.user_reg_id')
        ->where('user_post_comment.post_id',$postid);
        
      $comment_query = $this->db->get();
      if($comment_query->result_array()){
        return $comment_query->result_array();
      }
      return false;
    }
/*
    public function removePostlike($userId,$postId){

    }

    public function getPostlikes($userId){

    } */

}