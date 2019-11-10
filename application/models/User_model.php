<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Oracooli
 * Description: Model classs contains functionality for login ,signup ,forget password
 */
class User_model extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->library('email');
        $this->load->helper('security');
        $this->load->library('encryption');
    }
    
    //Login function
    public function validate(){
        
        //Grab user input
        $username = $this->security->xss_clean($this->input->post('email_login'));
        $password = $this->security->xss_clean($this->input->post('Password'));
        

        // Prep the query
        $this->db->where('email', $username);
        
        // Run the query
        $query = $this->db->get('user_registration');
        $row = $query->row();

        // Let's check if there are any results
        if($query->num_rows() == 1)
        {   

            // If there is a user, then create session data
            $row = $query->row();
            if(password_verify($password,$row->password)){
            $data = array(
                    'userid' => $row->id,
                    'username' => $row->username,
                    'email' => $row->email,
                    );
            $this->session->set_userdata($data);
            return true;
            }
        }
        // If the previous process did not validate
        // then return false.
        return false;
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

    public function register(){
        // grab user input
        $username = $this->security->xss_clean($this->input->post('username'));
        $email = $this->security->xss_clean($this->input->post('email_registration'));
        $password = $this->security->xss_clean($this->input->post('registration_password'));
        $first_name = $this->security->xss_clean($this->input->post('first_name'));
        $last_name = $this->security->xss_clean($this->input->post('last_name'));

        // Password Encryption
        $options = [
            'cost' => 12,
        ];
        $password_hash = password_hash($password, PASSWORD_BCRYPT, $options);

        //Preparing Data array
         $data = array(
            'username'=>$username,
            'email'=>$email,
            'password'=>$password_hash,
            'is_activated'=>'0',
            'code' => uniqid()
        );


        $this->db->where('username', $username);
        $this->db->or_where('email', $email);
        
        // Run the query
        $query = $this->db->get('user_registration');
        
        // Let's check if there are any results
       
        if($query->num_rows() == 0)
        {
            //Insert Data
            $this->db->insert('user_registration',$data);
            $insert_id = $this->db->insert_id();
            $profileData = array(
            'user_reg_id'=>$insert_id,
            'first_name'=>$first_name,
            'last_name'=>$last_name
            );
           
            // Inserting Profile Data
            $this->db->insert('user_profile',$profileData);
            return $data;
        }
            
        
        // If the previous process did not validate
        // then return false.
        return false;
    }
	
    //Logout function
	public function Logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

    //Google Login
    public function googleLogin($email,$userData){
        // grab user input
        
        // Prep the query
        $this->db->where('email', $email);
        //$this->db->where('password', $password);
        
        // Run the query
        $query = $this->db->get('user_registration');
        $row = $query->row();
        //print_r($row->password);exit;
        // Let's check if there are any results
        if($query->num_rows() == 1)
        {   
            // If there is a user, then create session data
            $row = $query->row();

            $data = array(
                    'userid' => $row->id,
                    'username' => $row->username,
                    'email' => $row->email,
                    );
            $this->session->set_userdata($data);
            return true;
            
        }else{
            $Userdata = array('username'=>$userData['name']['givenName'],'email'=>$email,'is_activated'=>'0',
            'code' => uniqid());
            $this->db->insert('user_registration',$Userdata);
            $insert_id = $this->db->insert_id();
            $profileData = array(
            'user_reg_id'=>$insert_id,
            'first_name'=>$userData['name']['givenName'],
            'last_name'=>$userData['name']['familyName'],
            'profile_image'=>$userData['image']['url']
            );

            
            $this->db->insert('user_profile',$profileData);
            $data = array(
                    'userid' => $insert_id,
                    'username' => $userData['name']['givenName'],
                    'email' => $email
                    );
            $this->session->set_userdata($data);
            return true;
                

        }
        // If the previous process did not validate
        // then return false.
        return false;
    }

    // Forget Password Email
    public function sendForgetPasswordEmail(){
        $this->load->library('encryption');
        $email = $this->security->xss_clean($this->input->post('email_forget'));
        $config = $this->config->item('smtp_email_config');
        $this->db->where('email', $email);
        $query = $this->db->get('user_registration');
        if($query->num_rows() == 1)
        {
            $row = $query->row();
            $passwordLink = base_url();
            $this->email->initialize($config);
            $this->email->from('oracoolihelp@gmail.com');
            $this->email->to($email);
            $this->email->subject("Forget Password Email");
            $emailData = array('forgeturl' => $passwordLink.'user/passwordChangePage/userid/'.$row->id.'/email/'.urlencode($row->email));
            $emailMessage = $this->load->view('email/forget_password_email', $emailData, TRUE);
            //$this->email->message('Click following link to change password '.$passwordLink.'user/passwordChangePage/userid/'.$row->id.'/email/'.urlencode($row->email));
            $this->email->message($emailMessage);
            if ($this->email->send()) {
                return true;
            } else {
            return false;
            }
            
        }
    }

    //Change Password Function
    public function changePassword(){
            $email = urldecode($this->input->post('email'));
            $id = $this->input->post('userid');
            $password = $this->security->xss_clean($this->input->post('new_login'));
            $options = [
                'cost' => 12,
            ];
            $password_hash = password_hash($password, PASSWORD_BCRYPT, $options);
        
            $this->db->where('id', $id);
            $this->db->where('email', $email);
            $data = array('password' => $password_hash);
            $result = $this->db->update('user_registration', $data);
            return $result;
    }

    //Account Activation
    public function AccountActivation($uniquecode){
            $this->db->where('code', $uniquecode);
            $this->db->where('is_activated', 0);
            $data = array('is_activated' => 1);
            $result = $this->db->update('user_registration', $data);
            return $result;
    }
}
?>