      <style>

              #session {
           z-index:5;
         height:25rem;
      bottom:0;
              position:fixed;
              right:24rem ;
              width:25rem;
              transition: 0.3s;
          
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
    color:white;
    
    background-color:transparent;
    padding: 8px;
    position: relative;
  }
  .msg_cotainer_send{
    margin-top: auto;
    margin-bottom: auto;
    margin-right: 20px;
    color:white;
  
    background-color: tranparent;
    
    
    padding: 8px;
    position: relative;
  }
.video_cam{
   float:right;
    margin-left: px;
    margin-top: 5px;
  }
  .video_cam span{
    color: white;
    
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
         .searchbar:hover > .search_input{
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
         .searchbar:hover > .search_icon{
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
         border-bottom:0.5px solid teal;
         border-radius:50px;
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
         border-bottom:none;
         border-left:none;
         border-right:none;
         }
         .nav-tabs a[data-toggle="tab"].active:hover{
         border-top:none;
         border-bottom:none;
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





      </style>


<div class="container-fluid "style="height:%;background-color:transparent;position:sticky;top:0; z-index:-1" >
 
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
   <div id="mySidenav2" style=";" class="sidenav2">
      <a href="#" id="friends" data-toggle="collapse" data-target="#communtiybox" >Community</a>
   </div>
 
           </div>
           <!-- Community Box -->
       <div class="card collapse border-top-0  border-right-0 border-left-0 border-dark shadow-lg   " id="communtiybox"  style=" background-color: white;color:black;width:rem; z-index: 5; ">
              <div class="row">
                <div class="card-title container-fluid text-center" style="background-color:;">
                 <nav >
            <div class="nav nav-tabs nav-justified " style="background-color:; " id="nav-tab" role="tablist">
               <a class="nav-item nav-link active  " id="nav-home-tab" data-toggle="tab" href="#tab1default" role="tab" aria-controls="nav-home" aria-selected="true">Mentor </a>
         
               <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#tab2default" role="tab" aria-controls="nav-profile" aria-selected="false">Friends</a>
               <div class="input-group mb-1" >
                  <div class="searchbar mx-auto ">
                     <input class="search_input" type="text" name="" placeholder="Search Mentors and Friends">
                     <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                  </div>
               </div>
            </div>
         </nav>
  
                </div>
                <div class="card-body " >
                  <div class="tab-content" style=" ;height:100%" >
                    <div class="tab-pane fade in p-2" id="tab1default">Default 1</div>
                    <div class="tab-pane fade in show active " id="tab2default">
					
					</div>
            
                
          
                    
                    
                  </div>
                 
                </div>
                
                
              </div>
			  
            </div>
            <!-- Chat Box -->
			<div class="card    border-dark shadow-lg " style="" id="session" >
      
      

  <div class="bg-dark">
              <ul class="nav msg-tabs " Style="" id="myTab" role="tablist"  >
  <li class="nav-item  ">
    <a class="nav-link  active" >
  <div class="card-header "  id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"  style="background-color:#2AA1AF;color:#FFFFFF">
           <a   class="btn btn-link  "  >
            <i class="fas fa-arrow-circle-left float-left"  > </i>
            
             <span class="sr-only"></span>
          </a>
          <a   class="btn btn-link " href="#" >
            <img src="images/ajay.jpg" style="width:30px;height:30px" class=" rounded-circle ml-1 mr-2" alt="..."> 
             Ajay Chaudhari 
            
             <span class="sr-only"></span>
          </a>
           <div class="video_cam">
                  <span><i class="fas fa-video"></i></span>
                  <span><i class="fas fa-phone"></i></span>
                   <span class=""> <i class=" fas fa-ellipsis-v" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"  ></i>
                      <div class="dropdown-menu more border-bottom border-left-0 border-right-0 border-top-0" >
                          <a href="#" class="dropdown-item" ><i class="fas fa-user-circle"></i> View profile</a>
                          <a href="#" class="dropdown-item " ><i class="fas fa-users"></i> Add to close friends</a>
                          <a href="#" class="dropdown-item "><i class="fas fa-plus"></i> Add to groupt</a>
                          <a href="#" class="dropdown-item "><i class="fas fa-ban"></i> Block</a>

                      </div>
          </span>
     
          </div>
     
        </div>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link " >
          <div class="card-header bg-dark " id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"  style="background-color:#2AA1AF;color:#FFFFFF">
           <a   class="btn btn-link  "  >
            <i class="fas fa-arrow-circle-left float-left"  > </i>
            
             <span class="sr-only"></span>
          </a>
          <a   class="btn btn-link " href="#" >
            <img src="images/ajay.jpg" style="width:30px;height:30px" class=" rounded-circle ml-1 mr-2" alt="..."> 
             Ajay Chaudhari 
            
             <span class="sr-only"></span>
          </a>
           <div class="video_cam">
                  <span><i class="fas fa-video"></i></span>
                  <span><i class="fas fa-phone"></i></span>
                   <span class=""> <i class=" fas fa-ellipsis-v" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"  ></i>
                      <div class="dropdown-menu more border-bottom border-left-0 border-right-0 border-top-0" >
                          <a href="#" class="dropdown-item" ><i class="fas fa-user-circle"></i> View profile</a>
                          <a href="#" class="dropdown-item " ><i class="fas fa-users"></i> Add to close friends</a>
                          <a href="#" class="dropdown-item "><i class="fas fa-plus"></i> Add to groupt</a>
                          <a href="#" class="dropdown-item "><i class="fas fa-ban"></i> Block</a>

                      </div>
          </span>
     
          </div>
     
        </div>  
  </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" >
      <div class="card-header bg-light"  id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"  style="background-color:#2AA1AF;color:#FFFFFF">
           <a   class="btn btn-link  "  >
            <i class="fas fa-arrow-circle-left float-left"  > </i>
            
             <span class="sr-only"></span>
          </a>
          <a   class="btn btn-link " href="#" >
            <img src="images/ajay.jpg" style="width:30px;height:30px" class=" rounded-circle ml-1 mr-2" alt="..."> 
             Ajay Chaudhari 
            
             <span class="sr-only"></span>
          </a>
           <div class="video_cam">
                  <span><i class="fas fa-video"></i></span>
                  <span><i class="fas fa-phone"></i></span>
                   <span class=""> <i class=" fas fa-ellipsis-v" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"  ></i>
                      <div class="dropdown-menu more border-bottom border-left-0 border-right-0 border-top-0" >
                          <a href="#" class="dropdown-item" ><i class="fas fa-user-circle"></i> View profile</a>
                          <a href="#" class="dropdown-item " ><i class="fas fa-users"></i> Add to close friends</a>
                          <a href="#" class="dropdown-item "><i class="fas fa-plus"></i> Add to groupt</a>
                          <a href="#" class="dropdown-item "><i class="fas fa-ban"></i> Block</a>

                      </div>
          </span>
     
          </div>
     
        </div>
  </a>
  </li>
</ul>
     </div>
                      

<div class="tab-content bg-info" id="myTabContent" style="margin-top:">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
   <div class="card-body msg_card_body" style="overflow-y:scroll">
              <div class="d-flex justify-content-start mb-4 border-right-0 border-left-0 border-dark  ">
               
                <div class="msg_cotainer shadow-lg ">
                  Hi, how are you samim1?
                  <span class="msg_time ">8:40 AM, Today</span>
                </div>
              </div>
              <div class="d-flex justify-content-end  ">
                <div class="msg_cotainer_send shadow-lg">
                  Hi Maryam ood tnx how about you?
                  <span class="msg_time_send">8:55 AM, Today</span>

                </div>
                
              </div>
               

            </div>
         <div class="card-footer">
              <div class="input-group">
                <div class="input-group-append">
                  <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                </div>
                <textarea name="" class="form-control type_msg" placeholder="Type your message..."></textarea>
                <div class="input-group-append">
                  <span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
                </div>
              </div>
            </div> 
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
     <div class="card-body msg_card_body" style="overflow-y:scroll">
              <div class="d-flex justify-content-start mb-4 border-right-0 border-left-0 border-dark  ">
               
                <div class="msg_cotainer shadow-lg ">
                  Hi, how are you samim2?
                  <span class="msg_time ">8:40 AM, Today</span>
                </div>
              </div>
              <div class="d-flex justify-content-end  ">
                <div class="msg_cotainer_send shadow-lg">
                  Hi Maryam tnx how about you?
                  <span class="msg_time_send">8:55 AM, Today</span>

                </div>
                
              </div>
               

            </div>
         <div class="card-footer">
              <div class="input-group">
                <div class="input-group-append">
                  <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                </div>
                <textarea name="" class="form-control type_msg" placeholder="Type your message..."></textarea>
                <div class="input-group-append">
                  <span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
                </div>
              </div>
            </div> 
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <div class="card-body msg_card_body" style="overflow-y:scroll">
              <div class="d-flex justify-content-start mb-4 border-right-0 border-left-0 border-dark  ">
               
                <div class="msg_cotainer shadow-lg ">
                  Hi, how are you samim3?
                  <span class="msg_time ">8:40 AM, Today</span>
                </div>
              </div>
              <div class="d-flex justify-content-end  ">
                <div class="msg_cotainer_send shadow-lg">
                  Hi Maryam  how about you?
                  <span class="msg_time_send">8:55 AM, Today</span>

                </div>
                
              </div>
               

            </div>
         <div class="card-footer">
              <div class="input-group">
                <div class="input-group-append">
                  <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                </div>
                <textarea name="" class="form-control type_msg" placeholder="Type your message..."></textarea>
                <div class="input-group-append">
                  <span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
                </div>
              </div>
            </div>   
  </div>
</div>


      </div>

      <script type="text/javascript">
   $(document).ready(function(){
      $.ajax({
   url: "<?php echo base_url();?>profile/getfriendlist",
   type: "POST",
   cache: false,
   success: function(data){
   $("#tab2default").html(data);
   checkChatStatusWindow();
   },
   error: function(){}          
   });
   });

   function startChat(userId){
    $.ajax({
   url: "<?php echo base_url();?>profile/startchat",
   type: "POST",
   cache: false,
   data: {frienduserId : userId},
   success: function(data){
   $("#session").html(data);
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
   $(".custom_chat_message_body").append(data);
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
        $("#session").html(data);      
    }
   },
   error: function(){}          
   });
  }
</script>