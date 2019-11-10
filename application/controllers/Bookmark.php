<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bookmark extends CI_Controller {

	function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('bookmark_model');
    }

    public function saveBookmark(){
    	$userId = $this->input->post('userId');
    	$postId = $this->input->post('postId');
    	$this->bookmark_model->saveBookmark($userId,$postId);
    }

    public function removeBookmark($userId,$postId){
    	$this->bookmark_model->removeBookmark($userId,$postId);
    }

    public function getBookmarks($userId){
    	$this->bookmark_model->getBookmarks($userId,$postId);
    }


}