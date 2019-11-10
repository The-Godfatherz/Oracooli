<?php include 'chat.php';?>
<div class="container  custom_contain" id="left-panel"style="background-color:white;width:50rem; margin-top:-4rem;z-index:1">
  <!-- <div id="mySidenav1"  class="sidenav1  " style="background-color: transparent;font-size:10px;">
      <a href="#Feeds" id="about"data-toggle="tooltip" title="All Feeds" data-placement="right"><i class="far fa-list-alt fa-2x  "></i></a><br><br><br><br>            
      <a href="#" class="blog " data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2"><i data-toggle="tooltip" data-placement="right"title="Videos" class="fas fa-video fa-2x"></i></a><br><br><br><br>
      <a href="#images2" class="" id="projects"title="Images" data-toggle="tooltip" data-placement="right"><i class="far fa-images fa-2x"></i></a><br><br><br><br>
      <a href="#" class="" id="contact"data-toggle="tooltip" data-placement="right"title="Seminars"><i class="far fa-file-video fa-2x"></i></a><br><br><br><br>
      <a href="#" class="" id="quizzes"  data-toggle="tooltip" data-placement="right" title="Quizzes"><i class="fas fa-book-reader fa-2x"></i></a><br><br><br><br>
   </div>
   <a href="#Feeds" id="top"  style="color:red;float:right;margin-top:70rem;position:sticky;top:35rem"data-toggle="tooltip" data-placement="right" title="Top"><i class="fas fa-angle-double-up fa-2x"></i></a><br><br><br><br>-->
</div>
<script>
   function setOffset(){
   
   }
   var x = 0;
   $(document).ready(function(){
     $(".content-main").scroll(function(){
        if($(window).scrollTop() >= $('.custom_contain').offset().top + $('.custom_contain').outerHeight() - window.innerHeight) {
            
            AppendFeed("");
       }
     });
   });
   
</script>
<script type="text/javascript">
   $(document).ready(function(){
       offset = 0;
     AppendFeed(offset);
   });
   
   function AppendFeed(offset){
           $("#wait").css("display", "block");
    $.ajax({
   url: "<?php echo base_url();?>postdata/displayPost",
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
</script>
<script type="text/javascript">
   function saveBookmark(userid,postid){
     $.ajax({
    url: "<?php echo base_url();?>bookmark/savebookmark",
    type: "POST",
    cache: false,
    data: {userId : userid,postId:postid},
    success: function(data){
    
    },
    error: function(){}          
    });
   }
   
   function savePostlike(userid,postid){
     alert("hello");
     $.ajax({
    url: "<?php echo base_url();?>postlike/savepostlike",
    type: "POST",
    cache: false,
    data: {userId : userid,postId:postid},
    success: function(data){
    
    },
    error: function(){}          
    });
   }
</script>