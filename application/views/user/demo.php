<!DOCTYPE html>
<html>
<?php if(!isset($this->session->userid)){
  echo "some issues with login";exit;
}
?>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript" scr="<?php echo str_replace('index.php/','',base_url()); ?>js/bootstrap.min.js" ></script> 
</head>
<body>
<div class="container  custom_contain" id="left-panel"style="background-color:white;width:50rem; margin-top:-25rem;z-index:1">
        <div id="mySidenav1"  class="sidenav1  " style="background-color: transparent;font-size:10px;">
                <a href="#Feeds" id="about"data-toggle="tooltip" title="All Feeds" data-placement="right"><i class="far fa-list-alt fa-2x  "></i></a><br><br><br><br>            
               <a href="#" class="blog " data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2"><i data-toggle="tooltip" data-placement="right"title="Videos" class="fas fa-video fa-2x"></i></a><br><br><br><br>
                <a href="#images2" class="" id="projects"title="Images" data-toggle="tooltip" data-placement="right"><i class="far fa-images fa-2x"></i></a><br><br><br><br>
                <a href="#" class="" id="contact"data-toggle="tooltip" data-placement="right"title="Seminars"><i class="far fa-file-video fa-2x"></i></a><br><br><br><br>
                <a href="#" class="" id="quizzes"  data-toggle="tooltip" data-placement="right" title="Quizzes"><i class="fas fa-book-reader fa-2x"></i></a><br><br><br><br>
              </div>
              <a href="#Feeds" id="top"  style="color:red;float:right;margin-top:70rem;position:sticky;top:35rem"data-toggle="tooltip" data-placement="right" title="Top"><i class="fas fa-angle-double-up fa-2x"></i></a><br><br><br><br>
 


      
   </div>


</body>
</html>
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