<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Mentor_model extends CI_Model{
    function __construct(){
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
            
            if(isset($_FILES['profileimage']['name'])){
                $config['upload_path']          = './images/';
                $config['allowed_types']        = 'jpg|jpeg|png';
                $config['max_size']             = 20480;
                $config['file_name'] = $userid."_".$_FILES['profileimage']['name'];
                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('profileimage'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);exit;
                        $this->load->view('user/mentor', $error);
                }
                else
                {
                    $image_data = $this->upload->data();
                    $data['profile_image'] = $image_data['file_name'];
                }
            }
            unset($data['email']);
            $this->db->where('user_reg_id', $userid);
            $this->db->update('user_profile', $data);
        
    }
}
?>