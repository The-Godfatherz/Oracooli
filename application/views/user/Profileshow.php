<?php 
   $result = array();
       foreach ($profile as $key => $value) {
         # code...
         $result[$key] = $value;
   
       }
   $ownProfile = array();
   foreach ($selfprofile as $key => $value) {
         # code...
         $ownProfile[$key] = $value;
   
       }
       $profile_image = $ownProfile['profile_image'];
       
   ?>           
<!DOCTYPE html>
<html>
   <?php if(!isset($this->session->userid)){
      echo "some issues with login";exit;
      }
      ?>
   <head>
      <meta charset="utf-8">
      
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Oracooli/Profile</title>
      <!-- Bootstrap CSS CDN -->
      <link href="<?php echo str_replace("index.php/","",base_url()); ?>css/bootstrap.css" rel="stylesheet" />
      <!-- <link href="<?php //echo str_replace("index.php/","",base_url()); ?>css/bootstrap-theme.css" rel="stylesheet" /> -->
      <link href="<?php echo str_replace("index.php/","",base_url()); ?>css/bootstrap.min.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script type="text/javascript" scr="<?php echo str_replace("index.php/","",base_url()); ?>js/bootstrap.min.js" ></script> 
      <!-- Our Custom CSS -->
      <link rel="stylesheet" href="<?php echo str_replace("index.php/","",base_url());?>css/style.css">
      <!-- Font Awesome JS -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/solid.css" integrity="sha384-wnAC7ln+XN0UKdcPvJvtqIH3jOjs9pnKnq9qX68ImXvOGz2JuFoEiCjT8jyZQX2z" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/regular.css" integrity="sha384-zkhEzh7td0PG30vxQk1D9liRKeizzot4eqkJ8gB3/I+mZ1rjgQk+BSt2F6rT2c+I" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/brands.css" integrity="sha384-nT8r1Kzllf71iZl81CdFzObMsaLOhqBU1JD2+XoAALbdtWaXDOlWOZTR4v1ktjPE" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css" integrity="sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/solid.css" integrity="sha384-wnAC7ln+XN0UKdcPvJvtqIH3jOjs9pnKnq9qX68ImXvOGz2JuFoEiCjT8jyZQX2z" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/brands.css" integrity="sha384-nT8r1Kzllf71iZl81CdFzObMsaLOhqBU1JD2+XoAALbdtWaXDOlWOZTR4v1ktjPE" crossorigin="anonymous">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css" integrity="sha384-HbmWTHay9psM8qyzEKPc8odH4DsOuzdejtnr+OFtDmOcIVnhgReQ4GZBH7uwcjf6" crossorigin="anonymous">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   </head>
   <body>
      <!-- Sidebar  -->
       <?php include'header.php' ?>
  
      <!-- <MAIN CONTENT -->
      <div class=" card  content-main    "style="background-color:whiite;border:none; ">
         <div class="jumbotron mx-auto profilecontainer"style="">
            <!--profile -->
            <?php include "EditProfile.php" ?>
      <?php include "Upload.php" ?>
            <!--Profile description -->
            <div class="d-flex flex-row justify-content-center " style="">
               <div class="card profilecardshow" >
                  <img class="card-img-top " style="height:10rem" src="<?php echo get_imagepath($result['profile_image']); ?>" alt="Card image cap" >
                  <?php if ($result['user_reg_id'] != $this->session->userid ){?>
                  <button onclick="#" class="btn follow profilecardbutton" >
                  <span class="msg-follow" onclick="StartFollow(<?php echo $result['user_reg_id']?>)">Follow</span>
                  <!-- <span class="msg-following">Following</span> -->
                  <span class=" msg-unfollow" onclick="UnFollow(<?php echo $result['user_reg_id']?>)">Unfollow</span></button>
                  <?php } ?>
                  <div class="card-body">
                     <p class=""style="color:black;text-align:center; font-size:12px;
                        font-family:Lucida Console, Courier, monospace;
                        "> <?php echo $result['first_name'].'&nbsp'.$result['last_name'];?></p>
                     <hr width="30%">
                     <p class="card-title" style="text-align:;font-size:11px;color:black; font-family:Lucida Console, Courier, monospace;">About</p>
                     <p class="card-text " style="font-size:10px;color:red">
                        Tell About Yourself
                     </p>
                  </div>
                  <div class="card-footer" style="background-color:white;border:none">
                     <form class="form-inline"style="font-size:9px;margin-top:%;font-family:Lucida Console, Courier, monospace;">
                        <li class="list-group font-weight-normal   "style="margin-left:-1%">Following : <?php echo $result['following'];?></li>
                        <li class="list-group  font-weight-normal "style="margin-left:18%">Followers :<?php echo $result['followers'];?></li>
                     </form>
                     <?php if ($result['user_reg_id'] != $this->session->userid ){?>
                     <button onclick="Addfriend(<?php echo $result['user_reg_id']?>)" class="btn btn-success btn-md navbar-btn" style="margin-left:1%;font-size:15px;margin-top:17%;width:100%;border:none;background-color:white;color:#9932CC;">
                     Add as Friend
                     </button>
                     <?php } ?>
                  </div>
               </div>
               <div class="card profiledetails" style="">
                  
                  <div class="profiledescription" style=
                     "" >
                     <table class="table table-borderless">
                        <thead>
                           <tr>
                              <th scope="col">Education:</th>
                              <td ><?php echo $result['education'];?></td>
                              <th scope="col">Current Qualifications:</th>
                              <td ><?php echo $result['current_qualification'];?></td>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="col">Skills::</th>
                              <td ><?php echo $result['languages_know'];?></td>
                              <th scope="col">Expertise:</th>
                              <td ><?php echo $result['expertise'];?></td>
                           </tr>
                           <tr>
                              <th scope="col">Job:</th>
                              <td ><?php echo $result['jobs'];?></td>
                              <th scope="col">Job Designation:</th>
                              <td ><?php echo $result['designation'];?></td>
                           </tr>
                           <tr>
                              <th scope="col">Experience:</th>
                              <td ><?php echo $result['experience'];?></td>
                              <th scope="col">Acheivement:</th>
                              <td ><?php echo $result['achievement'];?></td>
                           </tr>
                           <tr>
                              <th scope="col">Experience:</th>
                              <td ><?php echo $result['experience'];?></td>
                              <th scope="col">Acheivement:</th>
                              <td ><?php echo $result['achievement'];?></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>

        
               </div>
            </div>
         </div>
         <script>
            $('button').click(function(){
              var $this = $(this);
              $this.toggleClass('following')
              if($this.is('.following')){
                $this.addClass('wait');
              }
            }).on('mouseleave',function(){
              $(this).removeClass('wait');
            })
         </script>
         <!--<?php include "trending.php" ?>-->
         <?php include "ProfileFeed.php" ?>
      </div>
      <!--<?php include "Editprofile.php" ?>-->
     <!-- <?php include "Upload.php" ?>-->
     <!-- <script>
         $(document).ready(function(){
             $('[data-toggle="tooltip"]').tooltip();   
         });
      </script>-->
   <!--   <script type="text/javascript">
         $(document).ready(function () {
         $('#sidebarCollapse').on('click', function () {
         $('#sidebar').toggleClass('active');
         $(this).toggleClass('active');
         });
         });
      </script>
      <script type="text/javascript">
         $(document).ready(function () {
             $("nav").find("li").on("click", "a", function () {
                 $('.navbar-collapse.in').collapse('hide');
             });
         });
           
      </script>-->
      <!--search bar -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script>
        /* $(document).ready(function(){
           $('#search').on("click",(function(e){
           $(".form-group").addClass("sb-search-open");
             e.stopPropagation()
           }));
            $(document).on("click", function(e) {
             if ($(e.target).is("#search") === false && $(".form-control").val().length == 0) {
               $(".form-group").removeClass("sb-search-open");
             }
           });
             $(".form-control-submit").click(function(e){
               $(".form-control").each(function(){
                 if($(".form-control").val().length == 0){
                   e.preventDefault();
                   $(this).css('border', '2px solid red');
                 }
             })
           })
         })*/
         
         function saveProfileData(formName){
            var form = $("#"+formName);
            var data1 = form.serialize();
            alert(data1);
            $.ajax({
                 type: "POST",
                 url: "<?php echo base_url();?>mentor/saveProfile",
                 data: data1,
                 dataType: 'html',
                 success: function(data){
                     //$('#feed-container').prepend(data);
               document.getElementById("next_indicator").click();
                             }
            });
         }
      </script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript">
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
         
         $(document).ready(function(){
           id = "<?php echo $result['id'];?>";
           $.ajax({
             url: "<?php echo base_url();?>profile/checkfriend",
             type: "POST",
              data:{'id':id},
             cache: false,
             success: function(data){
              
             },
             error: function(){}           
             });
         });
         $(document).ready(function(){
            
            CheckFollow();

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
         function UnFollow(id){
           $.ajax({
             url: "<?php echo base_url();?>follow/unfollow",
             type: "POST",
              data:{'id':id},
             cache: false,
             success: function(data){
              if( data == 'true'){
               $(".msg-follow").show();
               $(".msg-unfollow").hide();
              } 

                

               
             },
             error: function(){}           
             });
         }
             function CheckFollow(){
               id = "<?php echo $result['user_reg_id']?>";
           $.ajax({
             url: "<?php echo base_url();?>follow/checkfollow",
             type: "POST",
              data:{'id':id},
             cache: false,
             success: function(data){
              if( data == 'true'){
               $(".msg-follow").hide();
               $(".msg-unfollow").show();
              } 
              else{
               $(".msg-follow").show();
               $(".msg-unfollow").hide();
              }

                

               
             },
             error: function(){}           
             });
         }

            $(document).on('click','.commentbtn',function(e){
          btnid = $(this).prop('id').split("_");
          postid = btnid[1];
          comment_text = $("#commentstextarea_"+btnid[1]).val();
          $.ajax({
                 url: "<?php echo base_url();?>comments/savecomments",
                 type: "POST",
                 cache: false,
                 data: {postid : postid,comment_text:comment_text},
                 success: function(data){
                    $("#commentstextarea_"+btnid[1]).val('');
                    $(".comments_"+postid).html(data);
                   
                 },
                 error: function(){}          
               });
         });
         
      </script>

   </body>
</html>