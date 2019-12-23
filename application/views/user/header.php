<div class="card d-flex  float-left   "  id="sidebar"style="height:;width:rem;z-index: 9;background-color: rgb(100, 112, 148)">
   <div class="list-group-flush  text-justify" style="position:;height:100vh; background-color: transparent;z-index:50;" >
      <!--<a href="#" aria-expanded="false" class=" sideicon list-group-item list-group-item-action text-white" style="background-color: transparent;"><i class="far fa-envelope mr-2 "></i>Dashboard</a>-->
     
      <!--<a href="#" aria-expanded="false" class=" sideicon list-group-item list-group-item-action text-white" style="background-color: transparent;"><i class="fas fa-cog mr-2"></i>Settings</a>-->
         <div class=" btn-group  " style="z-index:1000;" >
    <a class="btn btn-link mr-4 " style="color:white;" data-display="static" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"> 
     <?php
            if(!empty($profile_image)){
            
            
            if(strpos($profile_image,'https') !== false){
            
              ?>
              <img  class="rounded-circle" style="width:23px;height:23px"src="<?php echo $profile_image;?>">

         <?php }else{
            ?>
            <img  class="rounded-circle" style="width:23px;height:23px" src="<?php echo str_replace("index.php/","",base_url()); ?><?php ?>images/<?php echo $profile_image ?? "1.jpg";?>">
         <?php }
            }else{
              ?>
              <img  class="rounded-circle" style="width:23px;height:23px" src="<?php echo str_replace("index.php/","",base_url()); ?>images/<?php echo "avatar.png";?>">

         
         <?php }?>
       </a>
         <style type="text/css">
          
            </style>
      <div class="dropdown-menu    border-bottom-3 border-left-2 border-right-2 border-top " style="">
       <!--   <a href="#" class="dropdown-item" ><i class="fas fa-user mr-2 "></i>Edit Profile</a> -->
         <a href="<?php echo base_url().'inbox'?>" class="dropdown-item " ><i class="fas fa-envelope mr-2" ></i>Inbox</a>
         <a href="#" class="dropdown-item " data-toggle="modal" data-target="#chngpass" data-backdrop="static" ><i class="fas fa-clipboard mr-2"></i>Change Password</a>
         <a href="<?php echo base_url(); ?>user/logout" class="dropdown-item "><i class="fas fa-power-off mr-2"></i>Logout</a>
      </div>
   </div>
      <a href="<?php echo base_url().'inbox'?>"  aria-expanded="false" class=" sideicon list-group-item list-group-item-action text-white" style="background-color: transparent;"><i class="fas fa-bookmark mr-2"></i>Saved Items</a>
      <!--<a href="#" aria-expanded="false" class=" sideicon list-group-item list-group-item-action text-white" style="background-color: transparent;"><i class="far fa-envelope mr-2"></i>Question Page</a>-->
      <a href="#" aria-expanded="false" class=" sideicon list-group-item list-group-item-action text-white" style="background-color: transparent;"><i class="far fa-envelope mr-2"></i>About Us</a>
   </div>
    
   <div class=" list-group-flush  sideicon1 " style=";text-align:center;position:fixed; bottom: 0;z-index:99">
       <a   id="sidebarCollapse" class="btn btn-link navbar-btn" style="color:white;"> <i  class="fas fa-align-left  fa-xs "></i> </a>
      <a href="#" class=" list-group-item  sideicon " style="color:white;background-color:transparent;" data-placement="right" data-toggle="tooltip" title="Feedback"><i class="far fa-comment-alt fa-sm"></i></a>
      <a href="#" class=" list-group-item sideicon  "style="color:white;background-color:transparent" data-placement="right" data-toggle="tooltip" title="Settings"><i class="fas fa-cog fa-sm"></i></a>
      <a href="<?php echo base_url(); ?>user/logout" class="list-group-item sideicon " style="color:#BD1000;background-color:transparent" data-placement="right" data-toggle="tooltip" title="Logout"><i class="fas fa-power-off fa-sm"></i></a>
         
       
   </div>
</div>

<nav class="navbar p-0  " style="">
    
   <div class="d-flex p-0 ml-4 " style="color:;">
    
       
      <a class="btn btn-link ml-1 " style="color:black;" data-toggle="tooltip" data-placement="bottom" title="Home" href="<?php echo base_url().'mentee';?>"> <i class="fas fa-home fa-lg homeicon  "></i> Home</a>
       
      <a class="btn btn-link ml-1 "style="color:black;" data-toggle="tooltip" data-placement="bottom" title="Live Data" href="#"><i class="fas fa-chart-line fa-lg livedataicon "  data-toggle="modal" data-target="#livedata" data-backdrop="static" ></i> Live Data</a>

       
      <a class="btn btn-link ml-1 " style="color:black;" data-toggle="modal" data-target="#search" data-backdrop="static" href="#" ><i class="fas fa-search fa-lg searchicon "  data-toggle="tooltip" data-placement="bottom" title="Search"  ></i> Search</a>
       
   </div>
     
     <span   style=""class="mx-auto nav-logo ">
      <a href="<?php echo base_url().'mentee';?>" class="" style="text-decoration:none;font-family:LeagueGothic-Regular;color:black;font-size:25px">Oracooli <sub style="font-size:12px;color:red">Beta</sub> </a></span>
    
   
    
   <div class="btn-group mr-1" >
       <a class="btn btn-link mr-1 " style="color:black;"data-toggle="tooltip" data-placement="bottom"  title="Q & A" href="<?php echo base_url().'mentor';?>"><i class="fas fa-user-graduate fa-lg Mentorprofileicon"></i> Q&A</a>
      <a class="nav-link navbarsmall text-dark"class="dropdown-toggle" data-toggle="dropdown"  title="Notifications" href="#"><i data-toggle="tooltip" data-placement="bottom" class=" fas fa-exclamation-circle fa-lg notificationicon"></i> <!-- <span style="font-size:8px" class="badge badge-light">4</span>--> Notifications</a>
      <div class=" dropdown-menu text-center  border-bottom-3 border-left-2 border-right-2 border-top-2   dropdown-menu-right dropdown-menu-lg-left notification-dropdown" >
         <Span class="text-dark   font-weight-lighter text-monospace" style=font-size:12px;>No Notifications</Span>   
      </div>
   </div>
   <a class="btn btn-link mr-1 " style="color:black;"data-toggle="tooltip" data-placement="bottom" title="Mentor"href="<?php echo base_url().'mentor';?>"><i class="fas fa-user-graduate fa-lg questionpageicon"></i> Mentor Profile</a>
 
</nav>
<div class="modal fade" style=""id="search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog   " style=""role="document">
      <div class="modal-content  " style="background-color: transparent;border:none">
         <div class="modal-body mx-auto" style="">
            <div class=" card  mx-auto" style="background-color: white;border:none;max-width:55rem;max-height: 30rem;overflow-y: scroll; ">
               <div class="card-header" >
                  <button type="button" class="close float-left mb-1" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" style="color:red"><i class="far fa-arrow-alt-circle-left fa-sm "></i></span>
                  </button>
                  <div class="form-group has-search">
                     <span class="fa fa-search form-control-feedback"></span>
                     <input type="text" class="form-control search_text" placeholder="Search by Firstname | Lastname | Username | Email ID" id="search_text">
                     <div id="search_display"></div>
                  </div>
               </div>
               <div class="container mx-auto" style="width: rem;">
                  <div class="row mx-auto justify-content-center mt-3 mb-4 display_search_result" >
                     <div class="card " style="width:50rem;background-color:transparent;font-size: 18px;height:rem;border:none;    ">
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" style=""id="chngpass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog   " style=""role="document">
      <div class="modal-content  " style="background-color: transparent;border:none">
         <div class="modal-body mx-auto" style="">
            <div class=" card  mx-auto" style="background-color: white;border:none;width:35rem; ">
               <div class="card-header" >
                  <button type="button" class="close float-left mb-1" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" style="color:red"><i class="far fa-arrow-alt-circle-left fa-sm "></i></span>
                  </button>
               </div>
               <div class="card-body">
                  <form>
                     <div class="form-group">
                        <label for="">Password</label>
                        <input id="new_login"  type="password"  name="new_login" placeholder="Password"required="" class="form-control" >
                     </div>
                     <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input id="confirm_password" type="password"  name="confirm_password" placeholder="Confirm_Password"required="" class="form-control">
                     </div>
                     <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="modal fade" id="livedata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Live Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <img  class="rounded-circle" style="width:;height:" src="<?php echo str_replace("index.php/","",base_url()); ?>images/<?php echo "word.png";?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<!--  Paste style in style.css-->
<style>
   body .modal-dialog { /* Width */
   max-width: 100%;
   width: auto !important;
   }
   .has-search .form-control {
   padding-left: 2.375rem;
   }
   .has-search .form-control-feedback {
   position: absolute;
   z-index: 2;
   display: block;
   width: 2.375rem;
   height: 2.375rem;
   line-height: 5.5rem;
   text-align: center;
   pointer-events: none;
   color: #aaa;
   }
</style>
      <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip(); 
});
</script>

<script>
   $(document).ready(function(){
   
       $.ajax({
           url: "<?php echo base_url();?>notification/getNotifications",
           type: "POST",
           cache: false,
           success: function(data){
           $('.notification-dropdown').append(data);
           },
           error: function(){}           
           });
   });
   
   function searchResult(searchkey){
     if(searchkey.length == "3" || searchkey.length > "3"){
       $.ajax({
           url: "<?php echo base_url();?>search/searchuser",
           type: "POST",
           cache: false,
           data: {searchkey : searchkey},
           success: function(data){
             $('#search_display').html(data);
           },
           error: function(){}           
       });
     }
   }
   
    $(document).on('keyup','.search_text',function(e)
    {
        if($(this).val().length == 3 || $(this).val().length > 3)
        {
            if(e.which == '13')
            {
                search_text_get = $(this).val();
                $.ajax({
                    url: "<?php echo base_url();?>search/searchresultenter",
                    type: "POST",
                    cache: false,
                    data: {searchkey : search_text_get},
                    success: function(data)
                    {
                        $(".display_search_result").html(data);
                    },
                    error: function(){}          
                }); 
            }
            else
            {
                search_text_get = $(this).val(); 
                $.ajax({
                    url: "<?php echo base_url();?>search/searchuser",
                    type: "POST",
                    cache: false,
                    data: {searchkey : search_text_get},
                    success: function(data)
                    {
                        $('#search_display').html(data);
                    },
                    error: function(){}          
                });
            }  
        }
        else
        {
            $('#search_display').html("");
        }
    });
   
   function StartFollow(id){
         $.ajax({
           url: "<?php echo base_url();?>follow/startfollow",
           type: "POST",
            data:{'id':id},
           cache: false,
           success: function(data){
             
           },
           error: function(){}           
           });
       }
   
       function Addfriend(id){
           $.ajax({
           url: "<?php echo base_url();?>profile/addfriend",
           type: "POST",
            data:{'id':id},
           cache: false,
           success: function(data){
            //$(".custom_contain").append(data);
            if(data == "false"){
             alert("already friends");
            }
           },
           error: function(){}           
           });
       }
</script>