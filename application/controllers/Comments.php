<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comments extends CI_Controller {

	function __construct()
    {
        // this is your constructor
        parent::__construct();
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('comments_model');
        $this->load->helper('image_helper');
    }

    public function saveComments(){
    	$postid = $this->input->post('postid');
    	$comment_text = $this->input->post('comment_text');
    	$result = $this->comments_model->saveComments($postid,$comment_text);
        if($result){
            $comments = $this->comments_model->refreshComments($postid);
            if($comments){
             foreach ($comments as $comment_data) {
            # code...
            echo '<div class="">
                   <span class="text-dark  comms">
                   <img class="card-img-top" src="'.get_imagepath($comment_data['profile_image']).'"  class="media-object" style="width:40px; height:40px;border-radius:50%">
                        ' .$comment_data['first_name'].' '.$comment_data['last_name'].' 
                        <span class="float-right">
                          <button type="button"  class="btn btn-link text-danger " onclick="savePostlike('.$this->session->userid.','.$postid.')"><i class="fas fa-heart fa-xs "></i>
                     </button>
                     <div class="btn-group">
                          <a  class="btn btn-link text-secondary " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-h"></i>
                          </a>
                          <div class="dropdown-menu " style="font-size:12px; text-align:center">
                            <a class="dropdown-item" href="#">Delete</a>
                            <a class="dropdown-item" href="#">Report</a>
                            
                          </div>
                        </div>
                        </span>
                   </span> <br>
                 <span class="text-secondary ml-5">
                 '.$comment_data['comment'].' 
                 </span>
            </div> <br>';
            //echo $comment_data['comment'];
          }
          exit;
            return;
            }
        }
        echo false;
        return;
    }

    /*public function removePostlike($userId,$postId){
    	$this->bookmark_model->removePostlike($userId,$postId);
    }

    public function getPostlikes($userId){
    	$this->bookmark_model->getBookmarks($userId,$postId);
    }
*/

}