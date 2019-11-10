<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postlike extends CI_Controller {

	function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('notification_model');
        $this->load->model('postlike_model');
    }

    public function savePostlike(){
    	$userId = $this->input->post('userId');
    	$postId = $this->input->post('postId');
    	$this->postlike_model->savePostlike($userId,$postId);
    }

    public function removePostlike($userId,$postId){
    	$this->bookmark_model->removePostlike($userId,$postId);
    }

    public function getPostlikes($userId){
    	$this->bookmark_model->getBookmarks($userId,$postId);
    }


}