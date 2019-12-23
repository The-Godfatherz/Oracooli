<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Publish_model extends CI_Model{
    function __construct(){
        parent::__construct();
		$this->load->helper(array('form', 'url'));
        $this->load->model('comments_model');
       $this->load->helper('image_helper');

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


    public function getUserFollowing($id){
      $this->db->where('user_id1',$id);
      $query = $this->db->get('user_following');
      $followeduserIds = array_column($query->result_array(), 'user_id2');
      return $followeduserIds;
    }

    public function getUserFriends($id){
      $friends = array();
      $this->db->group_start();    
      $this->db->where('user_id_1',$id);
      $this->db->or_where('user_id_2',$id);
      $this->db->group_end();
      $this->db->where('friends',2);
      $query = $this->db->get('user_relations');
        foreach ($query->result_array() as $key => $value) {
            # code...
            if($id == $value['user_id_2']){
                $friends[] = $value['user_id_1'];
            }else{
                $friends[] = $value['user_id_2'];
            }
        }
        return $friends;
      //$followeduserIds = array_column($query->result_array(), 'user_id2');
      //return $followeduserIds;
    }

    public function updateProfileData($userid){
	
            $data = $this->input->post();
            unset($data['email']);
            $this->db->where('user_reg_id', $userid);
            $this->db->update('user_profile', $data);
        
    }
	
	public function publishPost($id){

        //print_r($_POST);exit;
		  $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'mp4|3gp|flv|mp3|jpg|jpeg|png|doc|docx|text|txt|pdf';
                $config['max_size']             = 100480;
                $config['file_name'] = $id."_".$_FILES['userfile']['name'];
                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        print_r($error);exit;
                        $this->load->view('user/mentor', $error);
                }
                else
                {
                        $image_data = $this->upload->data();
                        $post_data = $this->input->post();
                        
                        //$post_data['image_ids'] = $this->db->insert_id();
                        $post_data['user_id'] = $id;
                        if($post_data['userRole'] == 'mentee'){
                            $post_data['as_mentee'] = 1;
                        }else if($post_data['userRole'] == 'mentor'){
                            $post_data['as_mentor'] = 1;
                        }
                        $post_data[$this->input->post('upload_access')] = 1;
                        unset($post_data['userRole']);
                        unset($post_data['upload_access']);

                        $this->db->insert('user_post',$post_data);

                        $post_image_data = array("post_id" => $this->db->insert_id(),"user_id" => $id, "content_type" => $image_data['file_type'] , "content_desc" => "descc" , "content_link" => $image_data['file_name']);
                        $this->db->insert('user_uploads',$post_image_data);

                        $data = array('upload_data' => $this->upload->data());
                        return 1;
                        //$this->load->view('upload_success', $data);
                }
	}

    public function displayFeeds($id,$globalFeeds = 0,$friendsFeeds = 0){

        $video_formats = array("video/mp4","video/avi","video/3gp","video/x-flv","video/webm","video/mpeg");
        $audio_formats = array("audio/mpeg");
        $image_formats = array("image/jpeg","image/png","image/bmp","image/x-icon");
        $document_formats = array("application/pdf","application/msword","text/plain","application/msexcel","application/powerpoint","application/vnd.openxmlformats-officedocument.wordprocessingml.document");
        if($this->input->post('offset') == "0"){
            $offset = 0;
        }

        if($this->session->has_userdata('offset') && $this->input->post('offset') == ""){
            $offset = $this->session->userdata('offset');
        }


        $this->db->select('user_post.*, user_uploads.*')
         ->from('user_post')
         ->join('user_uploads', 'user_post.post_id = user_uploads.post_id');
         $this->db->where('user_uploads.user_id', $id);
         if($globalFeeds == 1){
            $this->db->where('user_post.global', $globalFeeds);
         }
         if($friendsFeeds == 1){
            $this->db->or_where('user_post.friends', $globalFeeds);
         }
         $this->db->order_by("user_post.post_id","desc");
         $this->db->limit(5,$offset);
        $query = $this->db->get();
        $baseurl = str_replace("index.php/","",base_url());
        $offset = $offset + 5;
        $this->session->set_userdata('offset', $offset);
        if($query->result()){

        $userquery = $this->db->query("select * from user_profile where user_reg_id = '".$id."'")->row();
        $name = $userquery->first_name." ".$userquery->last_name;


        foreach ($query->result() as $row) {
            # code...
        $comments = $this->comments_model->getComments($row->id);
        echo '
        <div class="card mx-auto chover   " id="Feeds'.$row->post_id.'" style="">
         <div class="card-header" style="background-color:white;border:none">
            <a href="'. base_url().'profile/index/'.$row->user_id.'"  data-content="Expertise" title="Follow<i style=float:right>Ask Questions </i>" data-html="true" data-placement="right" data-toggle="popover" data-trigger="hover" > 
            <img class="card-img-top " src="'.get_imagepath($userquery->profile_image).'"  class="media-object" style="width:40px; height:40px;border-radius:50%"><span class="choverheader ml-1">'.$name.'</span> </a>
         </div>
         <div class="card-body p-0 ">';
         if(in_array ( $row->content_type, $image_formats)){
            echo '<img class="card-img-top " src="'.$baseurl.'uploads/'.$row->content_link.'" alt="Image" ></img>';
         }else if(in_array ( $row->content_type, $audio_formats)){
            echo '<audio controls>
            <source src="'.str_replace('index.php/','',base_url()).'uploads/'.$row->content_link.'" type="'.$row->content_type.'">
                    Your browser does not support the audio element.
                </audio>';
         }else if(in_array ( $row->content_type, $document_formats)){
            echo '<a href="https://drive.google.com/viewer?url='.$baseurl.'uploads/'.$row->content_link.'">'.$row->content_link.'</a>';
         }
         else if(in_array ( $row->content_type, $video_formats)){
            

           echo '
               <video width="400" height="240" controls>
                   <source src="'.$baseurl.'uploads/'.$row->content_link.'" >
  
                Your browser does not support the video tag.
               </video>
              ';
         }

         

         echo '
            
            <div class="card-img-overlay" style="width:1px;height:1px;top:3rem">
               <div class="clike">
                  <ul class="list-group  ">
                     <span style="font-size:12px;"><button type="button"  class="btn btn-danger btn-circle" onclick="savePostlike('.$id.','.$row->post_id.')"><i class="fas fa-heart "></i>
                     </button>1.3M</span><br>
                     <span><button type="button" onclick="savePostlike('.$id.','.$row->post_id.')" class="btn btn-info btn-circle1"><i class="fas fa-share-alt "></i>
                     </button></span> <br>
                     <span><button type="button" onclick="saveBookmark('.$id.','.$row->post_id.')" class="btn btn-primary btn-circle2"> <i class="fas fa-bookmark"></i>
                     </button></span>
                  </ul>
               </div>
            </div>
            
            
         </div>
         

         <div class="card-footer text-muted comment   border-dark p-2" style="border:none;background-color:transparent">
            <h6 class="card-title">'.$row->post_title.'</h6>
            <div class="card-text "id="module">
            '.$row->post_description.'
             <div  class="collapse"  id="Description'.$row->post_id.'" aria-expanded="false">
                  '.$row->post_description.'
               </div>
               <a role="button" data-toggle="collapse" href="#Description'.$row->post_id.'" aria-expanded="false" aria-controls="Description" style="margin-left:rem;font-size:9px;"
                >Read more...
               </a><br>
              
               <a href="#" class="" style="text-align:center;font-size:12px" data-toggle="collapse" data-target="#comment"> View all Comments </a>
               <div class=" collaspe display_comments comments_'.$row->post_id.' show " id="comment"  >';

         if($comments){
            foreach ($comments as $comment_data) {
               
            # code...
            echo '<div class="">
                   <span class="text-dark comms">
                   <img class="card-img-top  " src="'.get_imagepath($comment_data['profile_image']).'"  class="media-object" style="width:40px; height:40px;border-radius:50%">
                        ' .$comment_data['first_name'].' '.$comment_data['last_name'].' 
                        <span class="float-right">
                          <button type="button"  class="btn btn-link text-danger" onclick="savePostlike('.$id.','.$row->post_id.')"><i class="fas fa-heart fa-xs "></i>
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
                 <span class="text-secondary ml-5 commentclass">
                 '.$comment_data['comment'].' 
                 </span>
            </div> <br>';
            //echo $comment_data['comment'];
          }
         }

         echo '</div>
            </div>
            <div class="d-flex mt-2">
            <textarea  placeholder="Add a Comment" class="comments_textarea border-top-0 border-bottom border-left-0 border-right-0 commentarea" id="commentstextarea_'.$row->id.'" ></textarea>
            </div>

              <div class="mt-2">

            <a href="#" id="commentbtn_'.$row->id.'" class="commentbtn  btn btn-dark btn-sm float-right mr-1 commentbtnfont"  >Comment</a><br><br>
              

            </div>

            
           
         </div>
         
      </div>';}

  }else{
        
      }
      exit;
    }

    public function displayFriendsFeeds($id){   

        $video_formats = array("video/mp4","video/avi","video/3gp","video/x-flv","video/webm","video/mpeg");
        $audio_formats = array("audio/mpeg");
        $image_formats = array("image/jpeg","image/png","image/bmp","image/x-icon");
        $document_formats = array("application/pdf","application/msword","text/plain","application/msexcel","application/powerpoint");

        if($this->input->post('offset') == "0"){
            $offset = 0;
        }

        if($this->session->has_userdata('offset') && $this->input->post('offset') == ""){
            $offset = $this->session->userdata('offset');
        }
		
		$FriendsArr = $this->getUserFriends($id);
		$FriendsArr[] = $id;
        
       
		
        $this->db->select('user_post.*, user_uploads.*')
         ->from('user_post')
         ->join('user_uploads', 'user_post.post_id = user_uploads.post_id');
		 $this->db->where('user_post.friends','1'); 
         $this->db->where_in('user_uploads.user_id',$FriendsArr);
		 
	    
		               
         $this->db->order_by("user_post.post_id","desc");
         $this->db->limit(5,$offset);
         
        $query = $this->db->get();
		
        $baseurl = str_replace("index.php/","",base_url());
        $offset = $offset + 5;
        $this->session->set_userdata('offset', $offset);
        if($query->result()){

        //$this->db->where('user_profile.user_reg_id',$id);   
        //$this->db->select('user_profile');
        $userquery = $this->db->query("select * from user_profile where id = '".$id."'")->row();
        $name = $userquery->first_name." ".$userquery->last_name;
        foreach ($query->result() as $row) {
            # code...
        $comments = $this->comments_model->getComments($row->id);

         $userquery = $this->db->query("select * from user_profile where id = '".$row->user_id."'")->row();
        $name = $userquery->first_name." ".$userquery->last_name;
        echo '
        <div class="card mx-auto  chovermentee  " id="Feeds'.$row->post_id.'" style="">
         <div class="card-header" style="background-color:white;border:none;font-size:12px;">
            <a  href="'. base_url().'profile/index/'.$row->user_id.'"   data-content="Expertise" title="Follow<i style=float:right>Ask Questions </i>" data-html="true" data-placement="right" data-toggle="popover" data-trigger="hover" > 
            <img class="card-img-top " src="'.get_imagepath($userquery->profile_image).'"  class="media-object" style="width:40px; height:40px;border-radius:50%"> <span class="chover1header ml-1">'.$name.' </span></a>
         </div>
         <div class="card-body p-0 ">';
         if(in_array ( $row->content_type, $image_formats)){
            echo '<img class="card-img-top " src="'.$baseurl.'uploads/'.$row->content_link.'" alt="Image" ></img>';
         }else if(in_array ( $row->content_type, $audio_formats)){
            echo '<audio controls>
            <source src="'.str_replace('index.php/','',base_url()).'uploads/'.$row->content_link.'" type="'.$row->content_type.'">
                    Your browser does not support the audio element.
                </audio>';
         }else if(in_array ( $row->content_type, $document_formats)){
            echo '<a href="https://drive.google.com/viewer?url='.$baseurl.'uploads/'.$row->content_link.'">'.$row->content_link.'</a>';
         }
         else if(in_array ( $row->content_type, $video_formats)){
            echo '<div class="embed-responsive embed-responsive-1by1">
             <iframe width="420" height="345" src="'.$baseurl.'uploads/'.$row->content_link.'">
              </iframe>
           </div>';
         }
            echo '<div class="card-img-overlay" style="width:1px;height:1px;top:3rem">
               <div class="clike">
                  <ul class="list-group  ">
                     <span style="font-size:12px;color:black"><button type="button"  class="btn btn-danger btn-circle" onclick="savePostlike('.$row->user_id.','.$row->post_id.')"><i class="fas fa-heart "></i>
                     </button>1.3M</span><br>
                     <span><button type="button" class="btn btn-info btn-circle1"><i class="fas fa-share-alt "></i>
                     </button> </span><br>
                      <span><button type="button" class="btn btn-primary btn-circle2" onclick="saveBookmark('.$id.','.$row->post_id.')"> <i class="fas fa-bookmark"></i>
                     </button></span>
                  </ul>
               </div>
            </div>
            
            
         </div>
          <div class="card-footer text-muted comment   border-dark p-2" style="border:none;background-color:transparent">
            <h6 class="card-title">'.$row->post_title.'</h6>
            <div class="card-text "id="module">
               <a role="button" data-toggle="collapse" href="#Description'.$row->post_id.'" aria-expanded="false" aria-controls="Description" style="margin-left:5rem;"
                >more...
               </a><br>
               <div style="" class="collapse"  id="Description'.$row->post_id.'" aria-expanded="false">
                  '.$row->post_description.'
               </div>
               <a href="#" class="" style="text-align:center;font-size:12px" data-toggle="collapse" data-target="#comment"> View all Comments </a>
               <div class=" collaspe display_comments comments_'.$row->post_id.' show" id="comment"  >';

         if($comments){
            foreach ($comments as $comment_data) {
            # code...
            echo '<div class="">
                   <span class="text-dark  comms">
                   <img class="card-img-top" src="'.get_imagepath($comment_data['profile_image']).'"  class="media-object" style="width:40px; height:40px;border-radius:50%">
                        ' .$comment_data['first_name'].' '.$comment_data['last_name'].' 
                                <span style="font-size:11px"><a class="" data-toggle="collapse" href="#collapsecomment" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Reply
                          </a>
                           <div class="collapse mt-4" id="collapsecomment">
                    <textarea  placeholder="Add a Comment" class="comments_textarea border-top-0 border-bottom border-left-0 border-right-0  commentarea" id="commentstextarea" ></textarea>
                       <div class="mt-2">

                        <a href="#" id="commentbtn" class="commentbtn btn btn-outline-dark btn-sm float-right mr-1" style="border-radius:10px" >Comment</a><br><br>


                        </div>
                        </div>
                          </span>

                            <span class="float-right">
                        
                          <button type="button"  class="btn btn-link text-danger " onclick="savePostlike('.$id.','.$row->post_id.')"><i class="fas fa-heart fa-xs "></i>
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
                 <div class=" ml-5">
                   <span class="text-dark  comms">
                   <img class="card-img-top" src="http://localhost/CodeIgniter/images/1_Vasanti.jpg" style="width:20px; height:20px;border-radius:50%">
                        Gaurav Sagdeo 
                               <span style="font-size:11px"><a class="" data-toggle="collapse" href="#collapsecomment" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Reply
                          </a>
                           <div class="collapse mt-4" id="collapsecomment">
                    <textarea  placeholder="Add a Comment" class="comments_textarea border-top-0 border-bottom border-left-0 border-right-0  commentarea" id="commentstextarea" ></textarea>
                       <div class="mt-2">

                        <a href="#" id="commentbtn" class="commentbtn btn btn-outline-dark btn-sm float-right mr-1" style="border-radius:10px" >Comment</a><br><br>


                        </div>
                        </div>
                          </span>
                            <span class="float-right">
                        
                          <button type="button" class="btn btn-link text-danger " onclick="savePostlike(1,3)"><i class="fas fa-heart fa-xs "></i>
                     </button>
                     
                     <div class="btn-group">
                          <a class="btn btn-link text-secondary " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                 g 
                 </span>
            </div>
            </div> <br>';
            //echo $comment_data['comment'];
          }
         }
         echo '</div>
            </div>
            <div class="d-flex">
            <textarea  placeholder="Add a Comment" class="comments_textarea border-top-0 border-bottom border-left-0 border-right-0  commentarea" id="commentstextarea_'.$row->id.'" ></textarea>
            </div>

              <div class="mt-2">

            <a href="#" id="commentbtn_'.$row->id.'" class="commentbtn btn btn-outline-dark btn-sm float-right mr-1" style="border-radius:10px" >Comment</a><br><br>
              

            </div>

            
           
         </div>
         
      </div>';}

  }else{
        
      }
      exit;
    }
	

    public function displayMentorsFeeds($id)
    {   

        $video_formats = array("video/mp4","video/avi","video/3gp","video/x-flv","video/webm","video/mpeg");
        $audio_formats = array("audio/mpeg");
        $image_formats = array("image/jpeg","image/png","image/bmp","image/x-icon");
        $document_formats = array("application/pdf","application/msword","text/plain","application/msexcel","application/powerpoint");
        if($this->input->post('offset') == "0")
        {
            $offset = 0;
        }
        if($this->session->has_userdata('offset') && $this->input->post('offset') == ""){
            $offset = $this->session->userdata('offset');
        }	
		
		$FollowedArr = $this->getUserFollowing($id);        
		
        $this->db->select('user_post.*, user_uploads.*')->from('user_post')->join('user_uploads', 'user_post.post_id = user_uploads.post_id');
        $this->db->where_in('user_uploads.user_id',$FollowedArr); 
	    $this->db->where('global',1);  
        $this->db->order_by("user_post.post_id","desc");
        $this->db->limit(5,$offset);
         
        $query = $this->db->get();
        $baseurl = str_replace("index.php/","",base_url());
        $offset = $offset + 5;
        $this->session->set_userdata('offset', $offset);
        if($query->result())
        {
            //$this->db->where('user_profile.user_reg_id',$id);   
            //$this->db->select('user_profile');
            $userquery = $this->db->query("select * from user_profile where id = '".$id."'")->row();
            $name = $userquery->first_name." ".$userquery->last_name;
    		$activecounter = 0;
            foreach ($query->result() as $row) 
            {
                # code...
        		$activecounter ++;	
        		if ($activecounter == 1)
                {
        			$classactive = 'active';
        		}
                else 
                {
        			$classactive = '';
        		}
                $comments = $this->comments_model->getComments($row->id);

                $userquery = $this->db->query("select * from user_profile where id = '".$row->user_id."'")->row();
                $name = $userquery->first_name." ".$userquery->last_name;
                echo '
        		  <div class="carousel-item '.$classactive.' ">
                <div class="card mx-auto  chovermentee  " id="Feeds'.$row->post_id.'" style="">
                    <div class="card-header" style="background-color:white;border:none;font-size:12px;">
                        <a  href="mentor.html"   data-content="Expertise" title="Follow<i style=float:right>Ask Questions </i>" data-html="true" data-placement="right" data-toggle="popover" data-trigger="hover" > 
                            <img class="card-img-top " src="'.get_imagepath($userquery->profile_image).'"  class="media-object" style="width:40px; height:40px;border-radius:50%"> <span class="chover1header ml-1">'.$name.' </span>
        			     </a>
                    </div>
                    <div class="card-body p-0 ">';
                    if(in_array ( $row->content_type, $image_formats))
                    {
                        echo '<img class="card-img-top " src="'.$baseurl.'uploads/'.$row->content_link.'" alt="Image" ></img>';
                    }
                    else if(in_array ( $row->content_type, $audio_formats))
                    {
                        echo '<audio controls>
                        <source src="'.str_replace('index.php/','',base_url()).'uploads/'.$row->content_link.'" type="'.$row->content_type.'">
                                Your browser does not support the audio element.
                            </audio>';
                     }
                     else if(in_array ( $row->content_type, $document_formats))
                     {
                        echo '<a href="https://drive.google.com/viewer?url='.$baseurl.'uploads/'.$row->content_link.'">'.$row->content_link.'</a>';
                     }
                     else if(in_array ( $row->content_type, $video_formats))
                     {
                        echo '<div class="embed-responsive embed-responsive-1by1">
                         <iframe width="420" height="345" src="'.$baseurl.'uploads/'.$row->content_link.'">
                          </iframe>
                       </div>';
                     }
                    echo '<div class="card-img-overlay" style="width:1px;height:1px;top:3rem">
                       <div class="clike">
                          <ul class="list-group  ">
                            <span> <button type="button"  class="btn btn-danger btn-circle" onclick="savePostlike('.$row->user_id.','.$row->post_id.')"><i class="fas fa-heart "></i>
                             </button></span><br>
                            <span> <button type="button" class="btn btn-info btn-circle1"><i class="fas fa-share-alt "></i>
                             </button> </span><br>
                             <span><button type="button" class="btn btn-primary btn-circle2" onclick="saveBookmark('.$id.','.$row->post_id.')"> <i class="fas fa-bookmark"></i>
                             </button></span>
                          </ul>
                       </div>
                    </div>
                    </div>
                    <div class="card-footer text-muted comment   border-dark p-2" style="border:none;background-color:transparent">
                        <h6 class="card-title">'.$row->post_title.'</h6>
                        <div class="card-text "id="module">
                            <a role="button" data-toggle="collapse" href="#Description'.$row->post_id.'" aria-expanded="false" aria-controls="Description" style="margin-left:5rem;">more...
                            </a><br>
                            <div style="" class="collapse"  id="Description'.$row->post_id.'" aria-expanded="false">
                          '.$row->post_description.'
                            </div>
                            <a href="#" class="" style="text-align:center;font-size:12px" data-toggle="collapse" data-target="#comment"> View all Comments </a>
                            <div class=" collaspe display_comments comments_'.$row->post_id.' show" id="comment"  >';

         if($comments){
            foreach ($comments as $comment_data) {
            # code...
            echo '<div class="">
                   <span class="text-dark  comms">
                   <img class="card-img-top" src="'.get_imagepath($comment_data['profile_image']).'"  class="media-object" style="width:40px; height:40px;border-radius:50%">
                        ' .$comment_data['first_name'].' '.$comment_data['last_name'].' 
                        <span class="float-right">
                          <button type="button"  class="btn btn-link text-danger " onclick="savePostlike('.$id.','.$row->post_id.')"><i class="fas fa-heart fa-xs "></i>
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
         }
         echo '</div>
            </div>
            <div class="d-flex">
            <textarea  placeholder="Add a Comment" class="comments_textarea border-top-0 border-bottom border-left-0 border-right-0  commentarea" id="commentstextarea_'.$row->id.'" ></textarea>
            </div>

              <div class="mt-2">

            <a href="#" id="commentbtn_'.$row->id.'" class="commentbtn btn btn-outline-dark btn-sm float-right mr-1" style="border-radius:10px" >Comment</a><br><br>
              

            </div>

            
           
         </div>
         
      </div>
	      </div>';}

  }else{
        
      }
      exit;
    }
	
}
?>