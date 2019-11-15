<!DOCTYPE html>
<html>
   <?php if(!isset($this->session->userid)){
      echo "some issues with login";exit;
      }
        $video_formats = array("video/mp4","video/avi","video/3gp","video/x-flv","video/webm","video/mpeg");
        $audio_formats = array("audio/mpeg");
        $image_formats = array("image/jpeg","image/png","image/bmp","image/x-icon");
        $document_formats = array("application/pdf","application/msword","text/plain","application/msexcel","application/powerpoint");


      ?>
   <head>
      <meta charset="utf-8">
      
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Oracooli/Inbox</title>
       <link rel="icon" type="image/png" sizes="96x96" href="<?php echo str_replace("index.php/","",base_url());?>images/favicon.png">
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
      <div class=" card  content-main    "style="background-color:white;border:none; ">
         <div class="jumbotron profilecontainer">
           
            <div class="card  mb-3" style="max-width:rem;border:none">
               <div class="card-header bg-transparent border-success">Save Items</div>
               <div class="card-body text-success ">
                  <div class="container mt-2 ">
                   <?php 
                  $cnter = 0;
                  $counter = 1;
                   foreach ($inbox_data as $value ) {  
                  if($cnter > 3){
                     $cnter = 0;    
                   }
                   if($cnter == 0  ){?>
               <div class="row   " style="height:;width:rem;border:none">
                  <?php   }?> 
                  <div class="col-3 p-1   mentorcard " style="border:none;">
                    
                      <div class="card border-right border-left-0 border-top-0 border-bottom-0 border-success mb-3" style="max-width:20rem;">
                        <h6 class="card-title"><?php echo $value->post_title;?></h6>
                        <div class="card-body text-success">
                          
                           <?php if(in_array ( $value->content_type, $image_formats)){?>
                                     <img class="card-img-top mr-2  " style="height:9rem"src="<?php echo str_replace("index.php/","",base_url()).'uploads/'.$value->content_link; ?>" style="width:rem;height:rem;object-fit:;"  alt="Card image cap" >
                                       <?php }else if(in_array ( $value->content_type, $audio_formats)){?>
                                              <audio controls>
            <source src="<?php echo str_replace("index.php/","",base_url()).'uploads/'.$value->content_link; ?>" type="'.$row->content_type.'">
                    Your browser does not support the audio element.
                </audio>
                                       <?php }else if(in_array ( $value->content_type, $document_formats)){ ?>
                                          <a href="https://drive.google.com/viewer?url='<?php echo str_replace("index.php/","",base_url()).'uploads/'.$value->content_link; ?>'">'.$row->content_link.'</a>
                                       <?php }else if(in_array ( $value->content_type, $video_formats)){ ?>
                                          <video width="200" height="150" controls>
                   <source src="<?php echo str_replace("index.php/","",base_url()).'uploads/'.$value->content_link; ?>" >
  
                Your browser does not support the video tag.
               </video>
                               <?php }?>
                           
                           <p class="card-text"><?php echo $value->post_description;?></p>
                        </div>
                     </div>
                  </div>
                  <?php  if($cnter ==  3 || $counter == count($inbox_data) ){?> 
               </div> <br><br><br><br><br><br>
               <?php   }?>
               <?php $cnter ++;$counter ++;  } ?>
               </div>
                  
               </div>
               </p>
            </div>
         </div>
      </div>
      <?php include "Editprofile.php" ?>
      <?php include "Upload.php" ?>
      <script>
         $(document).ready(function(){
             $('[data-toggle="tooltip"]').tooltip();   
         });
      </script>
     <script type="text/javascript">
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
           
      </script>
      <!--search bar -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script>
         $(document).ready(function(){
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
         })
         
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
   </body>
</html>