      <style>
    #session {
               z-index:5;
             height:25rem;
          bottom:0;
                  position:fixed;
                  right:24rem ;
                  width:rem;
                  transition: 0.3s;
              border:none;
          padding:0;
                  -webkit-transition: width 600ms ease-out, height 600ms ease-out;
                  -moz-transition: width 600ms ease-out, height 600ms ease-out;
                  -o-transition: width 600ms ease-out, height 600ms ease-out;
                  transition: width 600ms ease-out, height 600ms ease-out;
    
                  }
    
                  
    
    
                        .send_btn{
      border-radius: 0 15px 15px 0 !important;
      background-color: rgba(0,0,0,0.3) !important;
          border:0 !important;
          color: white !important;
          cursor: pointer;
        }
              .attach_btn{
      border-radius: 15px 0 0 15px !important;
      background-color: rgba(0,0,0,0.3) !important;
          border:0 !important;
          color: white !important;
          cursor: pointer;
        }
        .type_msg{
          background-color: rgba(0,0,0,0.3) !important;
          border:0 !important;
          color:white !important;
          max-height:200px; !important;
          min-height: 60px;
          overflow-y: auto;
        }
          .type_msg:focus{
             box-shadow:none !important;
               outline:0px !important;
        }
            .msg_time{
        position: absolute;
        left: 0;
        bottom: -15px;
        color: Orange;
        font-size: 10px;
      }
      .msg_time_send{
        position: absolute;
        right:0;
        bottom: -15px;
        color: yellow;
        font-size: 10px;
      }
      .msg_cotainer{
        margin-top: auto;
        margin-bottom: auto;
        margin-left: 10px;
       
        position: relative;
      }
      .msg_cotainer_send{
        margin-top: auto;
        margin-bottom: auto;
        margin-right: 20px;
     
        
        
        position: relative;
      }
    .video_cam{
       float:right;
        margin-left: px;
        margin-top:11px;
      }
      .video_cam span{
        color: teal;
        
        cursor: pointer;
        margin-right: 20px;
      }
      .more{
            margin-top: 0.5rem;
            margin-left:-10rem; 
          }
    
              .badge1{
                color:orange;
              }
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
             .carousel-control-next{
             color:red;
             margin-right:-2rem;
             }
             .carousel-control-prev{
             color:red;
             margin-left:-2rem;
             }
             .searchbar{
             margin-bottom: auto;
             margin-top: auto;
             height: 35px;
             background-color: #353b48;
             border-radius: 20px;
             padding:5px;
         
             }
             .search_input{
             color: white;
             border: 0;
             outline: 0;
             background: none;
             width: 0;
             caret-color:transparent;
             line-height: 0px;
             transition: width 0.4s linear;
             }
             
         .searchbar:hover   > .search_input         
                   {
            padding: 0 10px;
                width: 250px;
                caret-color:red;
                transition: width 0.4s linear;
              }
         
         
         
        
             .searchbar > .search_input:focus{
             padding: 0 10px;
             width: 250px;
             caret-color:red;
             transition: width 0.4s linear;
             }
             .searchbar:focus > .search_icon{
             background: #353b48;
             color: #e74c3c;
             }
             .search_icon{
             height: 25px;
             width: 25px;
             float: right;
             display: flex;
             justify-content: center;
             align-items: center;
             border-radius: 50%;
             color:white;
             }
             .chattabs{
             border-bottom:none;
             }
             .nav-tabs{
            
             }
             .nav-tabs a[data-toggle="tab"]{
             border-top:none;
             border-bottom:none;
             border-left:none;
             border-right:none;
             }
             .nav-tabs a[data-toggle="tab"]:hover{
             border-top:none;
             border-bottom:none;
             border-left:none;
             border-right:none;
             }
             .nav-tabs a[data-toggle="tab"].active{
             border-top:none;
            border-bottom:0.5px solid teal;
             color:teal;
         font-size:15px;
         font-family: "Playfair Display", serif;
         letter-spacing: 1px;
             border-left:none;
             border-right:none;
        
             }
             .nav-tabs a[data-toggle="tab"].active:hover{
             border-top:none;
             border-bottom:0.5px solid teal;
             
             border-left:none;
             border-right:none;
             }
             .nav-tabs a:hover{
             border-top:none;
             border-bottom:none;
             border-left:none;
             border-right:none;
             }
             .nav-tabs a:focus{
             border-top:none;
             border-bottom:none;
             border-left:none;
             border-right:none;
             }
             .nav-tabs.active{
             border-top:none;
             border-bottom:none;
             border-left:none;
             border-right:none;
             }
             .nav-tabs.active:hover{
             border-top:none;
             border-bottom:none;
             border-left:none;
             border-right:none;
             }
    
    
    
    
    
    
    .follow {
      display: inline-block;
      cursor: default;
      padding: 0;
      margin: 0 .5em;
      position: relative;
      text-align: center;
    }
    .follow:hover .label {
      opacity: 0;
      transition: opacity .5s .125s ease-out;
      background-color: green;
    }
    .follow:hover .icon {
      border-radius: 1em;
      margin: 0 0;
      background-color: red;
    }
    
    .icon, .label {
      background-color: #1f7a7a;
      line-height: 1rem;
    
      text-align: right;
    }
    
    .label {
    
      border-radius: 1rem;
      position: absolute;
      font-size: .618em;
      font-weight: 900;
      letter-spacing: .0816em;
      top: 0;
      left: 0;
      right: 0;
      opacity: 1;
      pointer-events: none;
      text-transform: uppercase;
      transition: opacity .5s .75s ease-out;
    }
    
    .icon {
      border-radius: 0;
      cursor: pointer;
      display: inline-block;
      height: 2em;
      margin: 0 -.5em;
      transition: background-color .5s ease-out, border-radius .5s .25s ease-out, margin .5s .25s ease-out;
      width: 2em;
    }
    .icon.first {
      border-bottom-left-radius: 1em;
      border-top-left-radius: 1em;
      margin-left: 0;
    }
    .icon.last {
      border-bottom-right-radius: 1em;
      border-top-right-radius: 1em;
      margin-right: 0;
    }
    .icon:hover {
      background-color: #ebc247;
      color: #111;
    }
    .msg-tabs {
         overflow-x: auto;
        overflow-y: hidden;
        display: -webkit-box;  
        display: -moz-box;   
      }
    .msg-tabs>li {
         
        }
    
    .nav-pills .nav-link.active, .nav-pills .show>.nav-link{
      background-color:transparent;
      color:teal;
      
    }
    
    
    
    
        #myTab {
    
    
    
  
   
  
        }
        #myTab.active {
       
   
          padding:0;
       
         
     
        transition: all 0.8s cubic-bezier(0.810, -0.330, 0.345, 1.375);
        transition-delay: 0.2s;
        }
    #myTab li a span {
         
          display:none;
        }
    #myTab.active li a span {
          display:inline-block;
      
          
        }
    
    
        /* ---------------------------------------------------
        showfrnds Collapse Button 
        ----------------------------------------------------- */
        #showfrndsCollapse {
        background-color: transparent;
        cursor: pointer;
        }
        #showfrndsCollapse.active i{
        color:teal;
    
    background-color: transparent;
        transition: all 0.6s cubic-bezier(0.810, -0.330, 0.345, 1.375);
        transition-delay: 0.1s;
        }
     #showfrndsCollapse i{
       
    
    background-color: transparent;
        transition: all 0.6s cubic-bezier(0.810, -0.330, 0.345, 1.375);
        transition-delay: 0.1s;
        }
    .minimize{
    height:90vh;
    
    }
        .maximize{
    height:37vh;
    
    }
    .chatbody{
      height:83vh;
    }
    .chatbodymin{
      height:30vh;
    }
  </style>


<div class="container-fluid " style="height:%;background-color:transparent;position:sticky;top:0; z-index:-1">
  
  
  
  <div class="card border-success  mb-3" style="max-width: 13rem;margin-top:8rem; position:">
      <div class="card-header"style="font-size:13px;color:;background-color:white">Recent Activity</div>
      <div class="card-body">
         <h5 class="card-title"style="font-size:12px">Primary card title</h5>
         <p class="card-text"style="font-size:11px">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  
   <div class="card border-info  mb-3" style="max-width:13rem;top:;position:absolute">
      <div class="card-header"style="color:Lightblue;background-color:white">Suggestion</div>
      <div class="card-body">
         <h5 class="card-title"style="font-size:12px">Secondary card title</h5>
         <p class="card-text"style="font-size:11px">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
   </div>
    <div id="mySidenav2" style=";" class="sidenav2"> <a href="#" id="friends" data-toggle="collapse" data-target="#communtiybox">Community</a>
    </div>
  </div>
           <!-- Community Box -->
        <!-- Main Content start -->
  <div class=" container  collapse p-0  show active shadow communtiybox " id="communtiybox" style="width:; 
    color:white;z-index: 5;">
  <!-- Minimize and Maximize start-->
    <div class="d-flex bg-info justify-content-end " style="display:inline-block;font-size:;height:;font-size: 1.3rem;">
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
    <div class="d-flex bg-white  justify-content-end minimize " style="">
    <!-- Left Side Column Content start -->
      <div class="col-auto bg-light  " id="myTab">
      
        
        <div class="tab-content" style=" ;">
          <div class="tab-pane fade in " id="tab1default">Default 1</div>
          <div class="tab-pane fade in show active " id="tab2default">
          <!-- Search Bar And Toggle Start -->
        <a class="nav-link active text-blue text-center " data-toggle="pill" id="showfrndsCollapse" href="" role="tab" aria-controls="v-pills-home" aria-selected="true" style=""> 
        <i class="fas fa-bars"></i>
        </a>
        <div class="input-group ">
          <div class="searchbar mx-auto ">
            <input class="search_input" type="text" name="" placeholder="Search Mentors and Friends" onkeyup="searchFriendList(this.value)"> 
            <a href="#" class="search_icon">
            <i class="fas fa-search"></i>
            </a>
          </div>
        </div>
        <!-- Search Bar And Toggle End -->
            <ul class="nav flex-column    nav-pills   " Style="  " id="friendListDisplay" role="tablist" aria-orientation="vertical">
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
      <div class="col-9  p-0  " style="">
      
      
        <!-- Selection Panel start -->
        
        <nav>
            <div class="nav nav-tabs nav-justified  " style="background-color:; " id="nav-tab" role="tablist"> 
            <a class="nav-item nav-link  " id="nav-home-tab" data-toggle="tab" href="#tab1default" role="tab" aria-controls="nav-home" aria-selected="true">Mentor </a>
              <a class="nav-item nav-link  active" id="nav-profile-tab" data-toggle="tab" href="#tab2default" role="tab" aria-controls="nav-profile" aria-selected="false">Friends</a>
              
            </div>
          </nav>
        
        <!-- Selection Panel End -->
        <!-- Chat Content start -->
        <div class="card-body p-0 ">
        <div class="tab-content  " id="showfrndsCollapse" style="margin-top:">
        <!-- First user start -->
            <div class="tab-pane fade show active " id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
              <div class="card p-0 mt-4 chatbody bg-white text-white  border-right-0 border-left-0 " style="">
                <div class="card-header border-right-0 border-left-0  border-bottom border-top-0 " id="cardHeaderDisplay" style="background-color:transparent;color:teal;font-size:10px;">
                  
                
                </div>
                <div id="chatContentDisplay">
                
               
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
    $(document).ready(function () {
            $('#showfrndsCollapse').on('click', function () {
            $('#myTab').toggleClass('active');
            $(this).toggleClass('active');
            });
            });
  
  
   $(".minimizebtn i").click(function(){if($( ".communtiybox" ).hasClass( "communityboxmin" )){
             
       <!-- Maximize Condition-->
        $(".communtiybox ").removeClass("communityboxmin ");
    $(".minimize ").removeClass("maximize ");
    $(".chatbody").removeClass("chatbodymin ");
  
      $(this).removeClass("fas fa-minus fas fa-plus");
    $(this).addClass(" fas fa-minus ");
       
    
    
   }
   
    else {
      <!-- Minimize  Condition-->
     $(".communtiybox ").addClass("communityboxmin ");
    $(".minimize ").addClass("maximize ");
    $(".chatbody").addClass("chatbodymin ");
  
      $(this).addClass("fas fa-minus fas fa-plus");
    
       
    }});
   
  
   
  
  </script>

      <script type="text/javascript">
   $(document).ready(function(){


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
    $.ajax({
   url: "<?php echo base_url();?>profile/sendchatmessage",
   type: "POST",
   cache: false,
   data: {frienduserId : friendId,chatText:chatText},
   success: function(data){
   //$(".custom_chat_message_body").append(data);
   openChatContent(friendId);
   },
   error: function(){}          
   });
  }

  function checkChatStatusWindow(){
    $.ajax({
   url: "<?php echo base_url();?>profile/checkChatStatusWindow",
   type: "POST",
   cache: false,
   success: function(data){
        if(data != "false"){
            //$("#session").html(data);
            //$("#communtiybox").toggle();
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