<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Search_model extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->library('email');
    }


    public function searchUser()
    {
    	$searchKeyword = $this->input->post('searchkey');
    	$this->db->select('user_reg_id,first_name,last_name,profile_image, user_registration.username, user_registration.email');
		$this->db->from('user_profile');
        $this->db->like('first_name', $searchKeyword);
		$this->db->or_like('last_name', $searchKeyword);

        $this->db->or_like('user_registration.username',$searchKeyword);
        $this->db->or_like('user_registration.email',$searchKeyword);
        $this->db->join('user_registration','user_profile.id = user_registration.id');
        
		return $this->db->get()->result_array();
    }
}