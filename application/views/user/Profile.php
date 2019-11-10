<div class="jumbotron mx-auto profilecontainer"style="">
   <!--profile -->
   <!--Profile description -->
      
   <div class="d-flex flex-row justify-content-center " style="">
      
      <div class="card profilecard" >
         
         <img class="card-img-top " style="height:10rem;object-fit:cover" src="<?php echo get_imagepath($profile_image);?>" alt="Card image cap" >
         
       

         <div class="card-body">
            <p class=""style="color:black;text-align:center; font-size:12px;
               font-family:Lucida Console, Courier, monospace;
               "> <?php echo $first_name.'&nbsp'.$last_name;?></p>
            <hr width="30%">
            <p class="card-title" style="text-align:;font-size:11px;color:black; font-family:Lucida Console, Courier, monospace;">About</p>
            <p class="card-text " style="font-size:10px;color:red">
               <?php echo $about ?? "";?>
            </p>
         </div>
         <div class="card-body" style="background-color:white;border:none">
            <form class="form-inline"style="font-size:9px;margin-top:%;font-family:Lucida Console, Courier, monospace;">
               <li class="list-group font-weight-normal   "style="margin-left:-1%">Following : <?php echo get_following($user_reg_id)?></li>
               <li class="list-group  font-weight-normal "style="margin-left:18%">Followers :<?php echo get_follows($user_reg_id)?></li>
            </form>
          
         </div>
           <div class="card-footer text-center   " style="background-color:white;border:none">
           <a href="#"  class=" btn text-white btn-block " style="background-color: #76323f" data-toggle="modal" data-target="#EditP">
          Edit Profile</a>

       </div>
      </div>

      <div class="card profiledetails" style="">
     
         
         <div class="profiledescription" style=
            "" >
            <table class="table table-borderless">
               <thead>
                  <tr>
                     <th scope="col">Education:</th>
                     <td ><?php echo $education;?></td>
                     <th scope="col">Current Qualifications:</th>
                     <td ><?php echo $current_qualification;?></td>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <th scope="col">Skills::</th>
                     <td ><?php echo $languages_know;?></td>
                     <th scope="col">Expertise:</th>
                     <td ><?php echo $expertise;?></td>
                  </tr>
                  <tr>
                     <th scope="col">Job:</th>
                     <td ><?php echo $jobs;?></td>
                     <th scope="col">Job Designation:</th>
                     <td ><?php echo $designation;?></td>
                  </tr>
                  <tr>
                     <th scope="col">Experience:</th>
                     <td ><?php echo $experience;?></td>
                     <th scope="col">Acheivement:</th>
                     <td ><?php echo $achievement;?></td>
                  </tr>
                  
               </tbody>
            </table>
         </div>
		
		
		
			  
		
        
      </div>
     
   </div>
   <div class="card  bg-info  w-25 " style="position:absolute;top:;left:35rem;font-family: monospace;">
       
<button href="#" style="background-color: #76323f" class="flex-fill btn text-white btn-block btn-sm"   <?php if ($experience == null){echo "disabled='disabled'";}?> data-toggle="modal" data-target="#uploadP" >Upload</button>
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
<script type="text/javascript">
   $(document).ready(function(){
     $.ajax({
          url: "<?php echo base_url();?>profile/displayMenteeFeeds",
          type: "POST",
           data:{'offset':offset},
          cache: false,
          success: function(data){
               $("#wait").css("display", "none");
           $(".custom_contain").append(data);
          },
          error: function(){}           
          });
   });
</script>