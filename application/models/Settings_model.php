<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Settings_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }


    public function checkChatMinimizeSettings($userId){
        echo "asdasd";exit;
    	$this->db->select('id,user_id,chat_minimize');
		$this->db->from('user_settings');
		$this->db->where('user_id', $userId);
        print_r($this->db->get()->result_array());exit;
		return $this->db->get()->result_array();
    }
}