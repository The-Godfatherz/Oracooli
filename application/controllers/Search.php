<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

    
    function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('search_model');
        $this->load->library('email');
        $this->load->helper('image_helper');
        
    }

    public function searchUser(){
        $result = $this->search_model->searchUser();
        foreach ($result as $key => $value) {
            # code...
              echo  " <ul class='nav '>
              <li class=' mr-2 mt-1 ' >
            
                     <a style='font-size:18px;font-family:LeagueGothic-Regular;letter-spacing:0.5px;color:green' href='".base_url()."profile/index/".$value['user_reg_id']."'>
                     <img class='card-img-top ml-1 mr-1 ' style='width:35px;height:35px' src='".get_imagepath($value['profile_image'])."' alt='Card image cap' >"  .$value['first_name']." ".$value['last_name']."</a>

            </li> </ul>";
            //print_r($value['first_name']);
        }
        exit;
    }

    public function searchResultEnter(){
        $result = $this->search_model->searchUser();
        foreach ($result as $key => $value) {
            # code...
              echo "<div class='card' style='width:50rem;background-color:transparent;font-size: 18px;height:7rem;border:none;'>
                    <div class='card-body'>
                      <a href='".base_url()."profile/index/".$value['user_reg_id']."'  data-content='Expertise' title='Follow<i style=float:right>Ask Questions ?</i>' data-html='true' data-placement='right' data-toggle='popover' data-trigger='hover'> <img class='card-img-top mr-1' src='".get_imagepath($value['profile_image'])."'  class='media-object' style='width:45px; height:45px;border-radius: 5px'>".$value['first_name']." ".$value['last_name']."</a><a href='#' onclick='Addfriend(".$value['user_reg_id'].")' class='btn btn-outline-info btn-sm float-right ml-2'>Add as Fiend</a>
                      <a href='#' onclick='StartFollow(".$value['user_reg_id'].")' class='btn btn-outline-info btn-sm float-right'>Follow</a>
                      <p class='card-text' style='font-size: 13px;margin-top:-0.8rem;margin-left: 4rem;color:green'> </p>
                      
                      
                    </div>
                  </div>";

             /* echo  " <ul>
              <div class='bg-white' >
            
                     <a style='font-size:18px;font-family:LeagueGothic-Regular;letter-spacing:0.5px;color:green' href='".base_url()."profile/index/".$value['user_reg_id']."'>
                     <img class='card-img-top ' style='width:12px;height:12px' src='".str_replace('index.php/','',base_url())."images/".$value['profile_image']."' alt='Card image cap' >".$value['first_name']." ".$value['last_name']."</a>

            </div> </ul>";*/
            //print_r($value['first_name']);
        }
        exit;
    }
}