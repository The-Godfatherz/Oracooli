<style type="text/css">
  
              ::-webkit-scrollbar { 
               width: 1px;
               background: white;  /* optional: just make scrollbar invisible */ 
              }
              ::-webkit-scrollbar-thumb {
               background: teal;
               
               
              }
              .scroll{
              overflow-y:   
              }
</style>

   <script type="text/javascript">
         $(document).ready(function () {
         $('#mySidenav2').on('click', function () {
         $('.communitybox').toggleClass('active');
         $(this).toggleClass('active');
         });
         });
      </script>

<!-- Community Box -->
<!-- Main Content start -->
<div class=" container   p-0   shadow communitybox " id="communitybox" style="width:; 
    color:white;z-index: 5;">
    <div id="mySidenav2" style=";" class="sidenav2"> 
      <a href="#" id="friends">Community
     <!--  <span class="badge text-white outline" style="font-size:13px;" id="totalNotificationCount">9</span> -->
      </a>
   </div>
   <!-- Minimize and Maximize start-->
   <div class="d-flex bg-dark  justify-content-end mx-auto" style="background:; display:inline-block;font-size:;height:;font-size: 1.3rem;width:rem; ">
      <ul class="nav ">
         <li>
            <a class="text-white pr-4 minimizebtn "  href="#"> 
            <i class=" fas fa-minus fa-sm "></i>
            </a>
         </li>
         <li>
            <a class="text-white pr-4" href="#"> 
            <i class="fas fa-cog fa-sm"></i>
            </a>
         </li>
      </ul>
   </div>
   <!-- Minimize and Maximize End-->
   <!-- Main Community Box Start -->
   <div class="d-flex bg-white   minimize " style="">
      <!-- Left Side Column Content start
/*background-color:#4abdac;#76323f;#c0b283;#f4f4f4;#dcd0c0;#66b9bf;#EEAA7b;#96858F;#6D7993;#062F4F;#9099a2;#a9a9a9;#Efefef;:#d7cec7;#565656;#c09f80;#18121E;#233237;#57bc90,#1F1F1F,#50394c*/ ;
       -->

      <div class="col-auto bg-light" style="width:rem;background:" id="myTab">
         <div class="tab-content" style=" ;">
            <div class="tab-pane fade in " id="tab1default">
              <!-- Search Bar And Toggle Start -->
               
               <!-- Search Bar And Toggle End -->
               <ul class="nav flex-column    nav-pills   " Style="  " id="MentorListDisplay" role="tablist" aria-orientation="vertical">
                  <li class="nav-item">
                     <a class="nav-link  " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true" style="">
                     <img src="images/ajay.jpg" style="width:25px;height:25px" class=" rounded-circle ml-1 mr-2" alt="...">
                     <span class="">Ajay Chaudhari</span>
                     </a>
                  </li>
                  <li class="nav-item text-white">
                     <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                     <img src="images/1 (4).jpg" style="width:30px;height:30px;border:1px black;" class=" rounded-circle ml-1 mr-2" alt="...">
                     <span>Gaurav Sagdeo</span>
                     </a>
                  </li>
               </ul>
            </div>
            <div class="tab-pane fade in show active " id="tab2default">
               <!-- Search Bar And Toggle Start -->
             
               <!-- Search Bar And Toggle End -->
               <ul class="nav flex-column   nav-pills   " Style="  " id="friendListDisplay" role="tablist" aria-orientation="vertical">
                  <li class="nav-item">
                     <a class="nav-link  " id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true" style="">
                     <img src="images/ajay.jpg" style="width:30px;height:30px" class=" rounded-circle ml-1 mr-2" alt="...">
                     <span class="">Ajay Chaudhari</span>
                     </a>
                  </li>
                  <li class="nav-item text-white">
                     <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                     <img src="images/1 (4).jpg" style="width:30px;height:30px;border:1px black;" class=" rounded-circle ml-1 mr-2" alt="...">
                     <span>Gaurav Sagdeo</span>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <!-- Left Side Column Content End -->
      <!-- Right Side Column Content start -->
      <div class=" col  p-0  ">
         <!-- Selection Panel start -->
         <nav style="#6D7993">
            <div class="nav chattabs nav-tabs nav-justified bg-light " style="background: " id="nav-tab" role="tablist"> 
               <a class="nav-item nav-link  " id="nav-home-tab" data-toggle="tab" href="#tab1default" role="tab" aria-controls="nav-home" aria-selected="true">Mentor </a>
               <a class="nav-item nav-link  active" id="nav-profile-tab" data-toggle="tab" href="#tab2default" role="tab" aria-controls="nav-profile" aria-selected="false">Friends</a>
            </div>
         </nav>
         <!-- Selection Panel End -->
         <!-- Chat Content start -->
         <div class="card-body p-0 ">
            <div class="tab-content  " id="showfrndsCollapse" style="margin-top:;">
               <!-- First user start -->
               <div class="tab-pane fade show active bg-light " style="background:;border:none; "id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                  <div class="card   chatbody    " style="overflow-y:scroll;border-radius: none;border:none;">
                     <div class="input-group " style="">
                        <div class="searchbar  ">
                           <input class="search_input" type="text" name="" placeholder="Search Mentors and Friends" onkeyup="searchFriendList(this.value)"> 
                           <a href="#" class="search_icon">
                           <i class="fas fa-search"></i>
                           </a>
                        </div>
                     </div>
                     <div class="card-header  border-right-0 border-left-0  border-bottom border-top-0 " id="cardHeaderDisplay" style="background-color:white;color:teal;font-size:10px;">
                     </div>
                     <div class="card-body msg_card_body mb-5 " id="chatContentDisplay"  style="overflow-y:scroll; overflow-x: hidden;background-color: white">
                     </div>
                  </div>
               </div>
               <!-- First user End -->
               <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">Profile</div>
               <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">Messages</div>
               <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Settings</div>
            </div>
         </div>
         <!-- Chat Content End -->
      </div>
      <!-- Left Side Column Content End -->
   </div>
   <!-- Main Community Box End  -->
</div>
<!-- Main Content End -->
<script type="text/javascript">
  
   
   $(".minimizebtn i").click(function(){if($( ".communitybox" ).hasClass( "communityboxmin" )){
            
      <!-- Maximize Condition-->
       $(".communitybox ").removeClass("communityboxmin ");
   $(".minimize ").removeClass("maximize ");
   $(".chatbody").removeClass("chatbodymin ");
   
     $(this).removeClass("fas fa-minus fas fa-plus");
   $(this).addClass(" fas fa-minus ");
      
   
   
   }
   
   else {
     <!-- Minimize  Condition-->
    $(".communitybox ").addClass("communityboxmin ");
   $(".minimize ").addClass("maximize ");
   $(".chatbody").addClass("chatbodymin ");
   
     $(this).addClass("fas fa-minus fas fa-plus");
   
      
   }});
   
   
   
   
</script>
<script type="text/javascript">
   $(document).ready(function(){
   
   
    function update_chat_notifications(){
      $.ajax({
   url: "<?php echo base_url();?>profile/updateChatNotification",
   type: "POST",
   cache: false,
   dataType: "text",
   success: function(data){
    var json = $.parseJSON(data);
        //now json variable contains data in json format
        //let's display a few items
        total_count = 0;
        for (var i=0;i<json.length;++i)
        {
            $('#count'+json[i].user_id1).html(json[i].total);
            total_count = parseInt(total_count) + parseInt(json[i].total);
        }
        $("#totalNotificationCount").html(total_count);
   
   },
   error: function(){}          
   });
    }
   
    function update_current_user_chat(){
   
      if($(".chatHeading").length) {
        //it doesn't exist
        //alert();
       id_data = $(".chatHeading").attr('id');
       id = id_data.split("_");
       $.ajax({
   url: "<?php echo base_url();?>profile/updateCurrentUserChat",
   type: "POST",
   cache: false,
   data: {friendUserId : id[1]},
   success: function(data){
    if(data !=""){
      $(".msg_card_body").append(data);      
    }
   },
   error: function(){}          
   });
       //openChatContent(id[1]);
      }
    }
   
    setInterval(function(){
   update_current_user_chat();
   update_chat_notifications();
   
   }, 10000);
   
    $.ajax({
   url: "<?php echo base_url();?>settings/checkchatminimizesettings",
   type: "POST",
   cache: false,
   success: function(data){
   
   
   },
   error: function(){}          
   });    
   
      $.ajax({
   url: "<?php echo base_url();?>profile/getfriendlist",
   type: "POST",
   cache: false,
   success: function(data){
   $("#friendListDisplay").html(data);
   checkChatStatusWindow();
   },
   error: function(){}          
   });

      $.ajax({
   url: "<?php echo base_url();?>profile/getmentorlist",
   type: "POST",
   cache: false,
   success: function(data){
   $("#MentorListDisplay").html(data);
   
   },
   error: function(){}          
   });

   });
   
   function searchFriendList(searchkey){
    if(searchkey.length == 3 || searchkey.length > 3){
      $.ajax({
   url: "<?php echo base_url();?>profile/searchfriendlist",
   type: "POST",
   cache: false,
   data: {searchkey : searchkey},
   success: function(data){
   $("#friendListDisplay").html(data);
   },
   error: function(){}          
   });
    }
   }
   
   function startChat(userId){
    if($("#chatHeader" + userId).length != 0) {
      //$("#chatHeader"+userId).focus();
      //$('#myTab').scrollTop($("#chatHeader"+userId)[0].scrollWidth + 150);
      //$("#myTab").scroll($("#chatHeader"+userId)[0].scrollWidth + 150);
      //it doesn't exist
      //$("#chatHeader" + userId).click();
      return;
    }
    $.ajax({
   url: "<?php echo base_url();?>profile/startchat",
   type: "POST",
   cache: false,
   data: {frienduserId : userId},
   success: function(data){
   openChatHeader(userId);
   openChatContent(userId);
   },
   error: function(){}          
   });
   }
   
   
   function sendChatMessage(friendId){
    chatText = $("#chatText").val();
    if(chatText){
      alert(chatText);      
    
    $.ajax({
   url: "<?php echo base_url();?>profile/sendchatmessage",
   type: "POST",
   cache: false,
   data: {frienduserId : friendId,chatText:chatText},
   success: function(data){
   //$(".custom_chat_message_body").append(data);
   if(data != ""){
    openChatContent(friendId);    
   }else{
    alert("please enter chat message");
   }
   },
   error: function(){}          
   });
  }else{
    alert("please enter chat message");
  }
   }
   
   function checkChatStatusWindow(){
    $.ajax({
   url: "<?php echo base_url();?>profile/checkChatStatusWindow",
   type: "POST",
   cache: false,
   success: function(data){
        if(data != "false"){
            //$("#session").html(data);
            //$("#communitybox").toggle();
            //$("#session").toggle();
          openChatHeader(data);
          openChatContent(data); 
        }     
   },
   error: function(){}          
   });
   }
   
   function openChatHeader(userId){
    $.ajax({
   url: "<?php echo base_url();?>profile/openchatheader",
   type: "POST",
   cache: false,
   data: {frienduserId : userId},
   success: function(data){
   $("#cardHeaderDisplay").html(data);
   return;
   //openChatContent(userId);
   
   },
   error: function(){}          
   });
   }
   
   function openChatContent(userId,opentab = 0){
    $.ajax({
   url: "<?php echo base_url();?>profile/openchatcontent",
   type: "POST",
   cache: false,
   data: {frienduserId : userId,opentab:opentab},
   success: function(data){
    //console.log(data);
   $("#chatContentDisplay").html(data);
   return;
   //openChatHeader(userId);
   
   },
   error: function(){}          
   });
   }
   
   function closeChat(userId){
    $.ajax({
   url: "<?php echo base_url();?>profile/closeChat",
   type: "POST",
   cache: false,
   data: {frienduserId : userId},
   success: function(data){
    /*if ($("#chatHeader"+userId).next().length) {
        $("#chatContent"+userId).next().addClass("show");
        $("#chatContent"+userId).next().addClass("active");
    }
     if ($("#chatHeader"+userId).prev().length) {
        $("#chatContent"+userId).prev().addClass("show");
        $("#chatContent"+userId).prev().addClass("active");
    }
   $("#chatHeader"+userId).remove();
   $("#chatContent"+userId).remove();
   
   if($(".chat-content-tab").length == "0"){
    $("#session").toggle();
    }*/
   //openChatHeader(userId);
   },
   error: function(){}          
   });
   }
</script>