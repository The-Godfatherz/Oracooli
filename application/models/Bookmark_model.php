<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Bookmark_model extends CI_Model{

    function __construct(){
        parent::__construct();
    }

	public function saveBookmark($userId,$postId){
		$bookmark = array('user_id' => $userId, 'post_id' => $postId);
		return $this->db->insert('user_post_bookmark',$bookmark);
    }

    public function removeBookmark($userId,$postId){

    }

    public function getBookmarks($userId){

    } 

}