<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Oracooli/Home</title>
       <link rel="icon" type="image/png" sizes="96x96" href="<?php echo str_replace("index.php/","",base_url());?>images/favicon.png"">
      <!-- Bootstrap CSS CDN -->
      <link href="<?php echo str_replace("index.php/","",base_url()); ?>css/bootstrap.css" rel="stylesheet" />
      <!-- <link href="<?php //echo str_replace("index.php/","",base_url()); ?>css/bootstrap-theme.css" rel="stylesheet" /> -->
      <link href="<?php echo str_replace("index.php/","",base_url()); ?>css/bootstrap.min.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
   <body>
        <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
      <!-- Sidebar and header   -->
      <?php include 'header.php' ?>
      <!-- <MAIN CONTENT -->
      <div class=" card  content-main    "style="background-color:white;border:none; ">
       
         <?php include "trending.php" ?>
                   <?php if(isset($message)){ ?>
  
           
                <div class=" card w-50 mt-3 mx-auto text-center alert alert-<?php if(isset($type)){echo $type;}?>" style="z-index:999;"role="alert">
 <?php 
  echo $message;
 ?>
</div>
<?php }?> 
          
         <?php include "Menteefeed.php" ?>

      </div>
       <script type="text/javascript">
      $(document).ready(function(){
        setTimeout('$(".alert-success").hide()',3000);
        setTimeout('$(".alert-danger").hide()',3000);
        
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
         
         function PostData(formName,upload_access){
            /*$(document).ajaxStart(function(){
             $("#wait").css("display", "block");
           });*/
          
           
            var formContent = new FormData($("#"+formName)[0]);
               formContent.append('upload_access',upload_access);
            $.ajax({
           url: "<?php echo base_url();?>postdata/publishPost",
           type: "POST",
           data:  formContent,
           contentType: false,
           cache: false,
           processData:false,
           async:false,
           success: function(data){
           location.reload();
           },
           error: function(){}           
           });
           
            /*$(document).ajaxComplete(function(){
             $("#wait").css("display", "none");
           });*/
         }
         
         
      </script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript">
         $(document).ready(function(){
             offset = 0;
           AppendFeed(offset);
         });
		    $(document).ready(function(){
             offset = 0;
           AppendFeed1(offset);
         });
         
         
         function AppendFeed(offset){
                 $("#wait").css("display", "block");
          $.ajax({
         url: "<?php echo base_url();?>postdata/displayFriendsFeeds",
         type: "POST",
          data:{'offset':offset},
         cache: false,
         success: function(data){
              $("#wait").css("display", "none");
          $(".custom_contain").append(data);
         },
         error: function(){}           
         });
         }
		    function AppendFeed1(offset){
                 $("#wait").css("display", "block");
          $.ajax({
         url: "<?php echo base_url();?>postdata/displayMentorsFeeds",
         type: "POST",
          data:{'offset':offset},
         cache: false,
         success: function(data){
              $("#wait").css("display", "none");
          $(".custom_contain1").html(data);
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