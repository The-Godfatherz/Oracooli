<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class User_inbox extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->library('email');
    }

		public function fetchInbox(){
			$userId = $this->session->userid;
			$this->db->select('user_post.*,user_post_bookmark.*,user_uploads.*')
			->from('user_post')
			->join('user_post_bookmark','user_post.post_id = user_post_bookmark.post_id')
			->join('user_uploads','user_uploads.post_id = user_post_bookmark.post_id')
			->where('user_post_bookmark.user_id',$userId);
			$result = $this->db->get();
			
			if($result){
				return $result->result();
			}
			return false;
		}
}