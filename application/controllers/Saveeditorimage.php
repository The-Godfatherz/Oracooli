<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saveeditorimage extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
	}

	public function index(){
				$baseurl = str_replace("index.php/","",base_url());
				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'jpg|jpeg|png';
                $config['max_size']             = 100480;
                $config['file_name'] = $this->randomString()."_".$_FILES['file']['name'];
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('file'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);exit;
                }
                $image_data = $this->upload->data();
                echo $baseurl."/uploads/".$config['file_name'];exit;
                //echo $image_data['full_path'];exit;
	}

   function randomString() {
   		return md5(rand(100, 200));
	}
}
?>