<!--Communtity Box start -->
<?php
include 'chat.php';
$video_formats    = array(
                "video/mp4",
                "video/avi",
                "video/3gp",
                "video/x-flv",
                "video/webm",
                "video/mpeg"
);
$audio_formats    = array(
                "audio/mpeg"
);
$image_formats    = array(
                "image/jpeg",
                "image/png",
                "image/bmp",
                "image/x-icon"
);
$document_formats = array(
                "application/pdf",
                "application/msword",
                "text/plain",
                "application/msexcel",
                "application/powerpoint"
);

?>
<!--Communtity Box End -->
<!-- Mentee Feeds -->
<!-- Mentee Feed Selector-->
<div class="card bg-info" style="position:fixed;bottom:2rem;left:0;right:0;top:2.5rem;border:none;height:100vh">
    <div class="row p-0 ">
        <!-- TABS OPTION START-->
        <div class="col bg-white " style="z-index:1">
            <ul class="nav hometabs nav-tabs justify-content-center  p-0 mt-1 mb-3 " id="myTab" role="tablist">
                <li class="nav-item w-25 ml-1 mr-1 "  style="background-color:lightskyblue;">
                    <a class="nav-link show active " id="home-tab" data-toggle="tab" href="#friends1" role="tab" aria-controls="home" aria-selected="true">Friends
                        <div id="demo1" class="block1 bg-dark "></div>
                        <div id="demo1" class="block2 bg-dark"></div>
                    </a><style></style>
                </li>
                <li class="nav-item w-25 ml-1 mr-1" style="background-color:forestgreen">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#mentor" role="tab" aria-controls="profile" aria-selected="false">My Mentors
                        <div id="demo1" class="block1 bg-dark "></div>
                        <div id="demo1" class="block2 bg-dark"></div>
                    </a>
                </li>
                <li class="nav-item w-25 ml-1 mr-1 " style="background-color:#ffc107">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#global" role="tab" aria-controls="contact" aria-selected="false">Global
                        <div id="demo1" class="block1 bg-dark "></div>
                        <div id="demo1" class="block2 bg-dark"></div>
                    </a>
                </li>
               <!--  <li class="nav-item">
                   <a class="nav-item nav-link expandbtn "  data-toggle="collapse" href="#trending" aria-expanded="false" aria-controls="trending">Trending</a>
                </li> -->
            </ul>
            <!--TABS OPTION END -->
            <!-- tabs contains-->
            <div class="tab-content bg-white mt-2 "  style="overflow-y:hidden;overflow-x:hidden;height:93vh;bottom:0;border:none">
                <!-- frineds tab -->
                <div class="tab-pane fade show active bg-white mx-auto contentmain" id="friends1" role="tabpanel" aria-labelledby="home-tab"  style="overflow-y:scroll;overflow-x:hidden;height:93vh ;transition: all 0.3s ease-in;
               " >
                    <div class="d-flex text-center    bg-dark rounded " style="width:10.2rem;;border:none;z-index:25;height:4vh;position:sticky;top:3rem;left:15rem;line-height:1.5rem">
                        <a href="#Upload" id="about" class=" flex-fill rounded  bg-danger text-white"  data-toggle="collapse" href="#Upload" role="button" aria-expanded="false" aria-controls="collapseExample" role="button"style="font-size:12px;z-index:25"><i class="fas fa-plus">  </i> Post</a>
                    </div>
                    <div class=" collapse mx-auto" id="Upload" style="width:25rem;position:;;z-index:2;transition: all 0.6s cubic-bezier(0.810, -0.330, 0.345, 1.375);
                  transition-delay: 0.1s;background-color:white ">
                        <div class="card  shadow  " id="Files" style="width:25rem;background-color:transparent;border-radius: rem;border:none">
                            <div class="card-header p-0" style="background-color:white;border-radius:rem">
                            <!--<div class="">
                               <div class="form-group">
                               <input type="text" class="form-control" placeholder="Title" name="post_title">
                               </div> 
                               </div>-->
                                <div class="text-area1 p-0">
                                    <textarea   required="" placeholder="Express Yourself !" name="post_description"></textarea>
                                </div>
                            </div>
                            <div class="card-body  "style="text-align:center;background-color:transparent;" id="userActions">
                                <form id="UploadForm" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                                    <label class="custom-file-upload"> Choose File
                                        <input type="file"  id="fileUpload" size="60" name="userfile">
                                    </label> 
                                </form>
                            </div>
                            <input type="hidden" value="mentee" name="userRole">
                            <ul class="card-footer" style=" text-align:center;margin-top:;width:;background-color:white;border:none">
                                <div class=" upload">
                                    <a class="btn btn-link "style="text-decoration:none;color:;font-family:monospace;" onclick="PostData('UploadForm','friends')"> <i class="fas fa-user-friends mr-1 "></i>Friends</a>
                                    <a class="btn btn-link"style="text-decoration:none;font-family:monospace;" onclick="PostData('UploadForm','private')"> <i class="far fa-save "></i> Private</a>
                                </div>
                            </ul>
                        </div>
                    </div>
                    <div class="container   custom_contain mainmenteefeed " id="left-panel"  > </div>
                    <div class="d-flex bg-white text-center  feedselector "   style="">
                        <ul class="list-group feedselectorli"  style="">
                            <li class="list-group-item rounded-circle mb-3 mr-3 ">
                                <a class="" href="#Feeds" id="about"data-toggle="tooltip" title="All Feeds" data-placement="right"><i class="far fa-list-alt fa-xs  "></i></a>
                            </li>
                            <li class="list-group-item  rounded-circle mb-3 mr-3 ">
                                <a href="#Fs" class="" ><i data-toggle="tooltip" data-placement="right" title="Videos" class="fas fa-video fa-xs"></i></a>
                            </li>
                            <li class="list-group-item  rounded-circle mb-3 mr-3 ">
                                <a href="#images2"class="" id="projects"title="Images" data-toggle="tooltip" data-placement="right"><i class="far fa-images fa-xs"></i></a>
                            </li>
                            <li class="list-group-item  rounded-circle mb-3 mr-3  ">
                                <a href="#" class="" id="contact"data-toggle="tooltip" data-placement="right"title="Seminars"><i class="far fa-file-video fa-xs"></i></a>
                            </li>
                            <li class="list-group-item  rounded-circle mb-3 mr-3 "> 
                                <a href="#"class="" id="quizzes"  data-toggle="tooltip" data-placement="right" title="Quizzes"><i class="fas fa-book-reader fa-xs"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- frineds tab end-- >
                <!-- mentor tab -->
                <style>
                    ol.carousel-indicators 
                    {
                        position:absolute;
                        top:9rem;
                        bottom:5rem;     
                    }
                    ol.carousel-indicators li
                    {
                        border:0.5px solid black; border-radius:100%;
                    }
                    ol.carousel-indicators li.active 
                    {
                        height:5px;;
                    }
                    ol.carousel-indicators li.active 
                    {
                        background:red;
                    }
                    video 
                    {
                        width: 100%;
                        height: auto;
                    }
                </style>
                <div class="tab-pane fade bg-white contentmain1"  
                    id="mentor" role="tabpanel" aria-labelledby="mentor" 
                    style="overflow-y:scroll;overflow-x:hidden;height:93vh;transition: all 0.3s ease-in;">
                 <!--   <div class="d-flex  justify-content-start " style="width:10rem;position:fixed;top:4.1rem;left:32.5rem;border:none;z-index:999">
                      <ul class="nav p-0">
                         <a class="ml-3 text-success " href="#"><i class="fas fa-heart fa-xs"></i> </a>
                         <a class="ml-3 text-success" href="#"><i class="fas fa-question fa-xs"></i></a>
                         <a class="ml-3 text-success " href="#"  aria-disabled="true"><i class="fas fa-home fa-xs"></i></a>
                         <a class="ml-3 text-success " href="#"  aria-disabled="true"><i class="fas fa-video fa-xs"></i></a>
                         <a class="ml-3 text-success " href="#"  aria-disabled="true"><i class="fas fa-image fa-xs"></i></a>
                      </ul>
                   </div> -->
                    <div class="container mt-2 "><?php
                        $cnter   = 0;
                        $counter = 1;
                        foreach ($mentordata as $row) 
                        {
                            if ($cnter > 3) 
                            {
                                $cnter = 0;
                            }
                            if ($cnter == 0) {
                            ?>
                            <div class="row   " style="height:;width:rem;border:none"><?php
                            }
                            ?> 
                                <div class="col-3 p-1   mentorcard " style="border:none;">
                                    <div class="card-header p-2     bg-white  " style="background-color:;border:none;">
                                        <a href="<?php echo $row['profileurl'];?>" style="font-size:10px;">
                                            <img class="card-img-top mr-2  " src="<?php echo $row['mentorimage'];?>" style="width:1.2rem;height:1.2rem;object-fit:;"  alt="Card image cap" >
                                            <span class="text-dark"><?php echo ($row['first_name'] . $row['last_name']);?> </span>
                                        </a>
                                    </div>
                                    <div class="card-body p-0  text-dark " style="position:relative; ">
                                        <div id="carouselIndicators<?php echo $row['user_id'];?>" class="carousel slide p-0"  data-interval="flase" data-ride="carousel" style="position:relative;height:2rem">
                                            <ol class="carousel-indicators ">
                                                <li data-target="#carouselIndicators<?php echo $row['user_id'];?>" data-slide-to="0" class="active "></li>
                                                <li data-target="#carouselIndicators<?php echo $row['user_id'];?>" data-slide-to="1" class=" inc"></li>
                                                <li data-target="#carouselIndicators<?php echo $row['user_id'];?>" data-slide-to="2" class=" inc"></li>
                                            </ol>
                                            <div class="carousel-inner "><?php
                                                $feedcounter = 1;
                                                foreach ($row['mentorfeeds'] as $feeddata) {
                                                ?>
                                                    <div class="carousel-item mt-1 <?php if ($feedcounter == 1) {echo 'active'; }?> ">
                                                        <div class="card" style="border:none">
                                                            <span class="card-title " style="font-size:10.5px;font-family:monospace;"> <?php echo ($feeddata['post_title']);?>
                                                            <?php
                                if (in_array($feeddata['content_type'], $image_formats)) {
?>
                                    <img class="card-img-top mr-2  " style="height:9rem"src="<?php
                                                echo str_replace("index.php/", "", base_url()) . 'uploads/' . $feeddata['content_link'];
?>" style="width:rem;height:rem;object-fit:;"  alt="Card image cap" >
                                       <?php
                                } else if (in_array($feeddata['content_type'], $audio_formats)) {
?>
                                                               <audio controls>
                              <source src="<?php
                                                echo str_replace("index.php/", "", base_url()) . 'uploads/' . $feeddata['content_link'];
?>" type="'.$row->content_type.'">
                                      Your browser does not support the audio element.
                                  </audio>
                                       <?php
                                } else if (in_array($feeddata['content_type'], $document_formats)) {
?>
                                         <a href="https://drive.google.com/viewer?url='<?php
                                                echo str_replace("index.php/", "", base_url()) . 'uploads/' . $feeddata['content_link'];
?>'">'.$row->content_link.'</a>
                                       <?php
                                } else if (in_array($feeddata['content_type'], $video_formats)) {
?>
                                         <video width="400" height="240" controls>
                   <source src="<?php
                                                echo str_replace("index.php/", "", base_url()) . 'uploads/' . $feeddata['content_link'];
?>" >
  
                Your browser does not support the video tag.
               </video>
                               <?php
                                }
?>

                                 </span>
                          
                                 </div>
                              </div>
                              <?php
                                $feedcounter++;
                }
?>
                          </div>
                        </div>
                     </div>
                  </div>
                  <?php
                if ($cnter == 3 || $counter == count($mentordata)) {
?> 
               </div> <br><br><br><br><br><br>
               <?php
                }
?>
              <?php
                $cnter++;
                $counter++;
}
?>
              </div>
              
              
            </div>
            <!--global-->
            <div class="tab-pane fade bg-white" id="global" role="tabpanel" aria-labelledby="global" style="overflow-y:scroll;overflow-x:hidden;height:93vh;transition: all 0.3s ease-in;
               ">
            <!--    <div class="d-flex  justify-content-start " style="width:10rem;position:fixed;top:4.1rem;left:42.5rem;border:none;z-index:999">
                  <ul class="nav ">
                     <a class="ml-3 text-success " href="#"><i class="fas fa-heart fa-xs"></i> </a>
                     <a class="ml-3 text-success" href="#"><i class="fas fa-question fa-xs"></i></a>
                     <a class="ml-3 text-success " href="#"  aria-disabled="true"><i class="fas fa-home fa-xs"></i></a>
                     <a class="ml-3 text-success " href="#"  aria-disabled="true"><i class="fas fa-video fa-xs"></i></a>
                     <a class="ml-3 text-success " href="#"  aria-disabled="true"><i class="fas fa-image fa-xs"></i></a>
                  </ul>
               </div> -->
               <div class="d-flex justify-content-center ml-4">
                    <img  class="rounded-circle" style="width:;height:" src="<?php
echo str_replace("index.php/", "", base_url());
?>images/<?php
echo "word.png";
?>">
                  
               </div>
            
            </div>
         </div>
      </div>
   </div>
   <!-- tabs contains -->
</div>
<!-- Mentee Upload   <!-- <input type="file" id="fileUpload" ><br><br> -->
<!-- <div class="card mx-auto chover1  shadow-sm  " id="Feeds" >
   <div class="card-header p-0"  style="background-color:transparent;border:none;color:">
      <a class=" btn btn-block mx-auto btn-outline-success text-dark" style="color:white"data-toggle="collapse" href="#Files"  aria-expanded="false" aria-controls="Files">
       <i class="fa fa-upload fa-sm"></i> Upload Files</a>
   </div>
   <div class="card p-0 collapse multi-collapse shadow  " id="Files" style="width:25rem;background-color:transparent;border-radius:rem;border:none">
      <p class="card-title " style="text-align:center;background-color:transparent;color:white;border-radius:25rem;">Uploads</p>
      <div class="card-body "style="text-align:center;background-color:transparent;" id="userActions">
      
         <form id="UploadForm" method="post" enctype="multipart/form-data" accept-charset="utf-8">
            <input type="file" id="fileUpload" name="userfile">
             </form> 
      </div>
      <div class="card-header" style="background-color:white;border-radius:rem">
      <div class="">
      <div class="form-group">
      <input type="text" class="form-control" placeholder="Title" name="post_title">
      </div>
      </div>
      <br>
      <div class="text-area1">
      <textarea   required="" placeholder="Description" name="post_description"></textarea>
      </div>
      </div>
      <input type="hidden" value="mentee" name="userRole">
      <ul class="card-footer"style=" text-align:center;margin-top:;width:;background-color:white;border:none">
      <div class=" upload">
      <a class="btn btn-link "style="text-decoration:none;color:" onclick="PostData('UploadForm','friends')"> <i class="fas fa-user-friends "></i>Friends</a>
      <a class="btn btn-link"style="text-decoration:none" onclick="PostData('UploadForm','private')"> <i class="far fa-save"></i> Private</a>
      </div>
            </ul>
              
    
   </div>
   </div>-->
<script>
   function setOffset(){
  
   }
   var x = 0;
   $(document).ready(function(){
     $(".contentmain").scroll(function(){
        if($(window).scrollTop() >= $('.custom_contain').offset().top + $('.custom_contain').outerHeight() - window.innerHeight) {
            
            AppendFeed("");
       }
     });
   });
      var x = 0;
   $(document).ready(function(){
     $(".contentmain1").scroll(function(){
        if($(window).scrollTop() >= $('.custom_contain1').offset().top + $('.custom_contain1').outerHeight() - window.innerHeight) {
            
            AppendFeed("");
       }
     });
   });
</script>
<script type="text/javascript">
   function saveBookmark(userid,postid){
     $.ajax({
    url: "<?php
echo base_url();
?>bookmark/savebookmark",
    type: "POST",
    cache: false,
    data: {userId : userid,postId:postid},
    success: function(data){
    
    },
    error: function(){}          
    });
   }
  
   function savePostlike(userid,postid){
    
     $.ajax({
    url: "<?php
echo base_url();
?>postlike/savepostlike",
    type: "POST",
    cache: false,
    data: {userId : userid,postId:postid},
    success: function(data){
    
    },
    error: function(){}          
    });
   }
</script>