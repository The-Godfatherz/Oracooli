<style>
   .videoWrapper {
   position: relative;
   padding-bottom: 56.25%; /* 16:9 */
   padding-top: 25px;
   height: 0;
   }
   .videoWrapper iframe {
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   }
</style>
<!-- Profile upload Modal-->
<div class="modal fade" id="uploadP" tabindex="-1" role="dialog" aria-labelledby="uploadP" aria-hidden="true">
   <div class="modal-dialog  modal-full " >
      <div class="modal-content " style="background-color:white" >
            
         <!-- video upload-->
         <div class="card mx-auto" style="width:33rem;height:30rem;background-color:white;border-radius:rem;top:2rem">
         
            
            <div class="card-body "style="text-align:center;background-color:white;border-bottom:1px solid black; " id="userActions">
              <button type="button" class=" close   mb-1" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true" style="color:black;outline:none;border:none;"><i class="far fa-arrow-alt-circle-left fa-sm "></i></span>
               </button>
               <!-- <input type="file" id="fileUpload" ><br><br> -->
               <form id="UploadForm" method="post" enctype="multipart/form-data" accept-charset="utf-8">
			   	 <label class="custom-file-upload"> Choose File
              <input type="file" id="fileUpload" name="userfile">
                  <input type="hidden" value="mentor" name="userRole" id="userRole">
          </label> 
                 
                  <!--<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner">
                       <div class="carousel-item active">
                         <img class=" " id="imgPrime" src="<?php echo str_replace("index.php/","",base_url()); ?>images/1.jpg" style="width: 100%;
                     height: 100%;" alt="upload image " />
                     
                       </div>
                       <div class="carousel-item">
                          <img class=" " id="imgPrime" src="<?php echo str_replace("index.php/","",base_url()); ?>images/2.jpg" style="width: 100%;
                     height: 100%;" alt="upload image " />
                       </div>
                       <div class="carousel-item">
                          <img class=" " id="imgPrime" src="<?php echo str_replace("index.php/","",base_url()); ?>images/3.jpg" style="width: 100%;
                     height: 100%;" alt="upload image " />
                       </div>
                       <div class="carousel-item">
                         <input type="file" id="fileUpload" name="userfile">
                       </div>
                       <div class="carousel-item">
                     <div class="videoWrapper">
                        Copy & Pasted from YouTube
                       <iframe width="560" height="349" src="http://www.youtube.com/embed/n_dZNLr2cME?rel=0&hd=1" frameborder="0" allowfullscreen></iframe>
                     </div> 
                       </div>
                     </div>
                     <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                       <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                       <span class="carousel-control-next-icon" aria-hidden="true"></span>
                       <span class="sr-only">Next</span>
                     </a>
                     </div>-->
            </div>
            <div class="card-header" style="background-color:white;border-radius:rem;border:none">
            <div class="ufont">
            <div class="form-group">
            <input type="text" class="form-control" placeholder="Title" name="post_title" required="">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" placeholder="Tags" name="post_tags" required="">
            </div>
            </div>
            <br>
            <div class="text-area1">
            <textarea   required="" placeholder="Description" name="post_description" required=""></textarea>
            </div>
            </div>
            <ul class="card-footer"style=" text-align:center;margin-top:;width:;background-color:transparent;border:none">
            <div class=" upload">
            <div class="btn-group">
            <button class="btn btn-sm text-white dropdown-toggle"  style="background-color: #76323f"type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Publish
            </button>
            <div class="dropdown-menu">
            <a class="btn btn-link "style="text-decoration:none;color:" onclick="PostData('UploadForm','friends')"> <i class="fas fa-user-friends "></i>  Friends</a>
            <a class="btn btn-link"style="text-decoration:none" onclick="PostData('UploadForm','global')"> <i class="fas fa-globe-asia "></i> Global</a>
            <a class="btn btn-link "style="text-decoration:none;color:" onclick="PostData('UploadForm','private')"> <i class="fas fa-save"></i> Private</a>
            </div>
            </div>
            </div>
            </form>				 
            </ul>
         </div>
         <div id="loading"></div>

                  <style>
                  
       #loading {
        display: none;
              border: 16px solid #f3f3f3;
              border-radius: 50%;
              border-top: 16px solid blue;
              border-right: 16px solid green;
              border-bottom: 16px solid red;
              border-left: 16px solid pink;
              width: 120px;
              height: 120px;

              -webkit-animation: spin 2s linear infinite;
              animation: spin 2s linear infinite;
                }

        @-webkit-keyframes spin {
          0% { -webkit-transform: rotate(0deg); }
          100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
          0% { transform: rotate(0deg); }
          100% { transform: rotate(360deg); }
        }
</style>
         <script>
           
            
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
      </div>
   </div>
</div>