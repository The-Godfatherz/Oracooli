<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questionpage extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
	}

	public function index(){
		$this->load->view('user/questionpage');
	}
}
?>