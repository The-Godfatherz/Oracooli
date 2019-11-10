<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Publish_model extends CI_Model{
    function __construct(){
        parent::__construct();
		$this->load->helper(array('form', 'url'));
    $this->load->model('comments_model');
       

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
      if($query->result_array()){
        foreach ($query->result_array() as $key => $value) {
            # code...
            if($id == $value['user_id_2']){
                $friends[] = $value['user_id_1'];
            }else{
                $friends[] = $value['user_id_2'];
            }
        }
        return $friends;
      }
      return false;
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
                $config['max_size']             = 120480;
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
                        $post_image_data = array("user_id" => $id, "content_type" => $image_data['file_type'] , "content_desc" => "descc" , "content_link" => $image_data['file_name']);
                        $post_data = $this->input->post();
                        $this->db->insert('user_uploads',$post_image_data);
                        $post_data['image_ids'] = $this->db->insert_id();
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
                        $data = array('upload_data' => $this->upload->data());
                        return 1;
                        //$this->load->view('upload_success', $data);
                }
	}

    public function displayFeeds($id){

        if($this->input->post('offset') == "0"){
            $offset = 0;
        }

        if($this->session->has_userdata('offset') && $this->input->post('offset') == ""){
            $offset = $this->session->userdata('offset');
        }


        $this->db->select('user_post.*, user_uploads.*')
         ->from('user_post')
         ->join('user_uploads', 'user_post.image_ids = user_uploads.id');
         $this->db->where('user_uploads.user_id', $id);
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
        <div class="card mx-auto chover  " id="Feeds'.$row->post_id.'" style="">
         <div class="card-header" style="background-color:white;border:none">
            <a href="mentor.html"  data-content="Expertise" title="Follow<i style=float:right>Ask Questions </i>" data-html="true" data-placement="right" data-toggle="popover" data-trigger="hover" > <img class="card-img-top" src="'.$baseurl.'uploads/'.$row->content_link.'"  class="media-object" style="width:40px; height:40px">'.$name.'</a>
         </div>

         <div class="card-body ">';
          
            echo '<img class="card-img-top " src="'.$baseurl.'uploads/'.$row->content_link.'" alt="Image" ></img>';            
          
            echo '
            <div class="card-img-overlay" style="width:40rem;height:5rem;margin-top:5rem;">
               <div class="clike">
                  <ul class="list-group  ">
                     <button type="button"  class="btn btn-danger btn-circle" onclick="savePostlike('.$id.','.$row->post_id.')"><i class="fas fa-heartbeat "></i>
                     </button><br>
                     <button type="button" onclick="savePostlike('.$id.','.$row->post_id.')" class="btn btn-info btn-circle1"><i class="fas fa-share-alt "></i>
                     </button> <br>
                     <button type="button" onclick="saveBookmark('.$id.','.$row->post_id.')" class="btn btn-primary btn-circle2"> <i class="fas fa-bookmark"></i>
                     </button>
                  </ul>
               </div>
                          
            </div>

            <h6 class="card-title">'.$row->post_title.'</h6>
            <div class="card-text "id="module">
               <a role="button" data-toggle="collapse" href="#Description'.$row->post_id.'" aria-expanded="false" aria-controls="Description" style="margin-left:18rem;" ><i  data-toggle="tooltip" data-placement="bottom" title="More"class="fas fa-angle-down"></i>
               </a>
               <div style="" class="collapse"  id="Description'.$row->post_id.'" aria-expanded="false">
                  '.$row->post_description.'
               </div>
            </div>
         </div>
         

         <div class="card-footer mx-auto text-muted comment border-bottom border-dark  " style="border:none;background-color:transparent" >
            <textarea  placeholder="Type here" class="comments_textarea" id="'.$row->id.'"></textarea>
            
            <a href="#" class=""  > Post</a>
            <a href="#" class="" style="text-align:center" data-toggle="collapse" data-target="#comment"> Show more</a>
            <div class=" collaspe display_comments bg-dark" id="comment"  >';
         if($comments){
            foreach ($comments as $comment_data) {
            # code...
            echo $comment_data['first_name'].' '.$comment_data['first_name'].':'.$comment_data['comment'].'<br/>';
            //echo $comment_data['comment'];
          }
         }
         echo '</div>
         </div>
         
      </div>';
      echo '
        <div class="card mx-auto chover  " id="Feeds'.$row->post_id.'" style="">
         <div class="card-header" style="background-color:white;border:none">
            <a href="mentor.html"  data-content="Expertise" title="Follow<i style=float:right>Ask Questions </i>" data-html="true" data-placement="right" data-toggle="popover" data-trigger="hover" > <img class="card-img-top" src="'.$baseurl.'uploads/'.$row->content_link.'"  class="media-object" style="width:40px; height:40px">'.$name.'</a>
         </div>

         <div class="card-body ">';
          echo '<audio controls>
  <source src="'.str_replace('index.php/','',base_url()).'uploads/2_01_Saibo_Sachin_Jigar_MTV_Unplugged_Season_4(MyMp3Song_Com)_-_musiqpool.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>';

            echo '
            
            <div class="card-img-overlay" style="width:40rem;height:5rem;margin-top:5rem;">
               <div class="clike">
                  <ul class="list-group  ">
                     <button type="button"  class="btn btn-danger btn-circle" onclick="savePostlike('.$id.','.$row->post_id.')"><i class="fas fa-heartbeat "></i>
                     </button><br>
                     <button type="button" onclick="savePostlike('.$id.','.$row->post_id.')" class="btn btn-info btn-circle1"><i class="fas fa-share-alt "></i>
                     </button> <br>
                     <button type="button" onclick="saveBookmark('.$id.','.$row->post_id.')" class="btn btn-primary btn-circle2"> <i class="fas fa-bookmark"></i>
                     </button>
                  </ul>
               </div>
                          
            </div>

            <h6 class="card-title">'.$row->post_title.'</h6>
            <div class="card-text "id="module">
               <a role="button" data-toggle="collapse" href="#Description'.$row->post_id.'" aria-expanded="false" aria-controls="Description" style="margin-left:18rem;" ><i  data-toggle="tooltip" data-placement="bottom" title="More"class="fas fa-angle-down"></i>
               </a>
               <div style="" class="collapse"  id="Description'.$row->post_id.'" aria-expanded="false">
                  '.$row->post_description.'
               </div>
            </div>
         </div>
         

         <div class="card-footer mx-auto text-muted comment border-bottom border-dark  " style="border:none;background-color:transparent" >
            <textarea  placeholder="Type here" class="comments_textarea" id="'.$row->id.'"></textarea>
            
            <a href="#" class=""  > Post</a>
            <a href="#" class="" style="text-align:center" data-toggle="collapse" data-target="#comment"> Show more</a>
            <div class=" collaspe display_comments bg-dark" id="comment"  >';
         if($comments){
            foreach ($comments as $comment_data) {
            # code...
            echo $comment_data['first_name'].' '.$comment_data['first_name'].':'.$comment_data['comment'].'<br/>';
            //echo $comment_data['comment'];
          }
         }
         echo '</div>
         </div>
         
      </div>';
      echo '
        <div class="card mx-auto chover  " id="Feeds'.$row->post_id.'" style="">
         <div class="card-header" style="background-color:white;border:none">
            <a href="mentor.html"  data-content="Expertise" title="Follow<i style=float:right>Ask Questions </i>" data-html="true" data-placement="right" data-toggle="popover" data-trigger="hover" > <img class="card-img-top" src="'.$baseurl.'uploads/'.$row->content_link.'"  class="media-object" style="width:40px; height:40px">'.$name.'</a>
         </div>

         <div class="card-body ">';
          
          echo '<div class="embed-responsive embed-responsive-1by1">
             <iframe width="420" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY">
              </iframe>
           </div>';

            echo '
            <div class="card-img-overlay" style="width:40rem;height:5rem;margin-top:5rem;">
               <div class="clike">
                  <ul class="list-group  ">
                     <button type="button"  class="btn btn-danger btn-circle" onclick="savePostlike('.$id.','.$row->post_id.')"><i class="fas fa-heartbeat "></i>
                     </button><br>
                     <button type="button" onclick="savePostlike('.$id.','.$row->post_id.')" class="btn btn-info btn-circle1"><i class="fas fa-share-alt "></i>
                     </button> <br>
                     <button type="button" onclick="saveBookmark('.$id.','.$row->post_id.')" class="btn btn-primary btn-circle2"> <i class="fas fa-bookmark"></i>
                     </button>
                  </ul>
               </div>
                          
            </div>

            <h6 class="card-title">'.$row->post_title.'</h6>
            <div class="card-text "id="module">
               <a role="button" data-toggle="collapse" href="#Description'.$row->post_id.'" aria-expanded="false" aria-controls="Description" style="margin-left:18rem;" ><i  data-toggle="tooltip" data-placement="bottom" title="More"class="fas fa-angle-down"></i>
               </a>
               <div style="" class="collapse"  id="Description'.$row->post_id.'" aria-expanded="false">
                  '.$row->post_description.'
               </div>
            </div>
         </div>
         

         <div class="card-footer mx-auto text-muted comment border-bottom border-dark  " style="border:none;background-color:transparent" >
            <textarea  placeholder="Type here" class="comments_textarea" id="'.$row->id.'"></textarea>
            
            <a href="#" class=""  > Post</a>
            <a href="#" class="" style="text-align:center" data-toggle="collapse" data-target="#comment"> Show more</a>
            <div class=" collaspe display_comments bg-dark" id="comment"  >';
         if($comments){
            foreach ($comments as $comment_data) {
            # code...
            echo $comment_data['first_name'].' '.$comment_data['first_name'].':'.$comment_data['comment'].'<br/>';
            //echo $comment_data['comment'];
          }
         }
         echo '</div>
         </div>
         
      </div>';
      echo '
        <div class="card mx-auto chover  " id="Feeds'.$row->post_id.'" style="">
         <div class="card-header" style="background-color:white;border:none">
            <a href="mentor.html"  data-content="Expertise" title="Follow<i style=float:right>Ask Questions </i>" data-html="true" data-placement="right" data-toggle="popover" data-trigger="hover" > <img class="card-img-top" src="'.$baseurl.'uploads/'.$row->content_link.'"  class="media-object" style="width:40px; height:40px">'.$name.'</a>
         </div>

         <div class="card-body ">';
          echo '<a href="#">Document File</a>';

            echo '
        
            <div class="card-img-overlay" style="width:40rem;height:5rem;margin-top:5rem;">
               <div class="clike">
                  <ul class="list-group  ">
                     <button type="button"  class="btn btn-danger btn-circle" onclick="savePostlike('.$id.','.$row->post_id.')"><i class="fas fa-heartbeat "></i>
                     </button><br>
                     <button type="button" onclick="savePostlike('.$id.','.$row->post_id.')" class="btn btn-info btn-circle1"><i class="fas fa-share-alt "></i>
                     </button> <br>
                     <button type="button" onclick="saveBookmark('.$id.','.$row->post_id.')" class="btn btn-primary btn-circle2"> <i class="fas fa-bookmark"></i>
                     </button>
                  </ul>
               </div>
                          
            </div>

            <h6 class="card-title">'.$row->post_title.'</h6>
            <div class="card-text "id="module">
               <a role="button" data-toggle="collapse" href="#Description'.$row->post_id.'" aria-expanded="false" aria-controls="Description" style="margin-left:18rem;" ><i  data-toggle="tooltip" data-placement="bottom" title="More"class="fas fa-angle-down"></i>
               </a>
               <div style="" class="collapse"  id="Description'.$row->post_id.'" aria-expanded="false">
                  '.$row->post_description.'
               </div>
            </div>
         </div>
         

         <div class="card-footer mx-auto text-muted comment border-bottom border-dark  " style="border:none;background-color:transparent" >
            <textarea  placeholder="Type here" class="comments_textarea" id="'.$row->id.'"></textarea>
            
            <a href="#" class=""  > Post</a>
            <a href="#" class="" style="text-align:center" data-toggle="collapse" data-target="#comment"> Show more</a>
            <div class=" collaspe display_comments bg-dark" id="comment"  >';
         if($comments){
            foreach ($comments as $comment_data) {
            # code...
            echo $comment_data['first_name'].' '.$comment_data['first_name'].':'.$comment_data['comment'].'<br/>';
            //echo $comment_data['comment'];
          }
         }
         echo '</div>
         </div>
         
      </div>';
      exit;

    }

  }else{
        
      }
      exit;
    }

    public function displayMenteeFeeds($id){   

        if($this->input->post('offset') == "0"){
            $offset = 0;
        }

        if($this->session->has_userdata('offset') && $this->input->post('offset') == ""){
            $offset = $this->session->userdata('offset');
        }

        $FollowedArr = $this->getUserFollowing($id);
        $FriendsArr = $this->getUserFriends($id);
        $usersArr = array_unique(array_merge($FollowedArr,$FriendsArr));

        $this->db->select('user_post.*, user_uploads.*')
         ->from('user_post')
         ->join('user_uploads', 'user_post.image_ids = user_uploads.id');
         $this->db->where_in('user_uploads.user_id', $usersArr);
         $this->db->order_by("user_post.post_id","desc");
         $this->db->limit(5,$offset);
         
        $query = $this->db->get();
        $baseurl = str_replace("index.php/","",base_url());
        $offset = $offset + 5;
        $this->session->set_userdata('offset', $offset);
        if($query->result()){

        $this->db->where('user_profile.user_reg_id',$id);   
        $this->db->select('user_profile');
        //$userquery = $this->db->query("select * from user_profile where id = '".$id."'")->row();
        //$name = $userquery->first_name." ".$userquery->last_name;
        foreach ($query->result() as $row) {
            # code...
         $userquery = $this->db->query("select * from user_profile where id = '".$row->user_id."'")->row();
        $name = $userquery->first_name." ".$userquery->last_name;
        echo '
        <div class="card mx-auto chover  " id="Feeds'.$row->post_id.'" style="">
         <div class="card-header" style="background-color:white;border:none">
            <a href="mentor.html"  data-content="Expertise" title="Follow<i style=float:right>Ask Questions </i>" data-html="true" data-placement="right" data-toggle="popover" data-trigger="hover" > <img class="card-img-top" src="'.$baseurl.'uploads/'.$row->content_link.'"  class="media-object" style="width:40px; height:40px">'.$name.'</a>
         </div>
         <div class="card-body ">
            <img class="card-img-top " src="'.$baseurl.'uploads/'.$row->content_link.'" alt="Image" ></img>
            <div class="card-img-overlay" style="width:40rem;height:5rem;margin-top:5rem;">
               <div class="clike">
                  <ul class="list-group  ">
                     <button type="button"  class="btn btn-danger btn-circle" onclick="savePostlike('.$row->user_id.','.$row->post_id.')"><i class="fas fa-heartbeat "></i>
                     </button><br>
                     <button type="button" class="btn btn-info btn-circle1"><i class="fas fa-share-alt "></i>
                     </button> <br>
                     <button type="button" class="btn btn-primary btn-circle2"> <i class="fas fa-bookmark"></i>
                     </button>
                  </ul>
               </div>
            </div>
            <h6 class="card-title">'.$row->post_title.'</h6>
            <div class="card-text "id="module">
               <a role="button" data-toggle="collapse" href="#Description'.$row->post_id.'" aria-expanded="false" aria-controls="Description" style="margin-left:18rem;" ><i  data-toggle="tooltip" data-placement="bottom" title="More"class="fas fa-angle-down"></i>
               </a>
               <div style="" class="collapse"  id="Description'.$row->post_id.'" aria-expanded="false">
                  '.$row->post_description.'
               </div>
            </div>
         </div>
         <div class="card-footer mx-auto text-muted comment border-bottom border-dark " style="border:none;background-color:transparent" >
            <textarea   required="" placeholder="Comments"></textarea>
         </div>
      </div>';}

  }else{
        
      }
      exit;
    }
}
?>