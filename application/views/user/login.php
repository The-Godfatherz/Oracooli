<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   ?>
<!doctype html>
<html>
   <?php 
      //require_once('settings.php');
      
      /* Google App Client Id */
      define('CLIENT_ID', '325224881481-mulslpp5kpe0dfvgr84p5bakfmicvsh6.apps.googleusercontent.com');
      
      /* Google App Client Secret */
      define('CLIENT_SECRET', 'MfMmHK2jFdICS2JqnUjeJmZD');
      
      /* Google App Redirect Url */
      define('CLIENT_REDIRECT_URL', base_url().'user/googlelogin');
      
      
      
      
      
      $login_url = 'https://accounts.google.com/o/oauth2/v2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/plus.me') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online';
      ?>
   <style>
      html{
      scroll-behavior: smooth;
      }
      body {
      overflow-y:hidden;
      overflow-x: hidden;
      }
   </style>
   <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Oracooli/Login</title>
      <link rel="icon" type="image/png" sizes="96x96" href="<?php echo str_replace("index.php/","",base_url());?>images/favicon.png"">
      <!-- Bootstrap CSS CDN -->
      <link href="css/bootstrap.css" rel="stylesheet" />
      <link href="css/bootstrap-theme.css" rel="stylesheet" />
      <link href="css/bootstrap.min.css" rel="stylesheet" />
      <link href="js/bootstrap.min.js" rel="stylesheet" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
  
	  
      <div class="d-flex " style="height: 100vh">
  <div class="flex bg-success w-25 " style="">
    
         <nav class="nav flex-column text-center w-25 leftside bg-info " id="navbar-example2" style="position:fixed;top:0;bottom: 0;left:0 ;background: #614385;  /* fallback for old browsers */








">
          <span class="text-white bg-info" style="position: relative;top:2rem;font-size:35px;font-family:LeagueGothic-Regular;background: #614385;

" >Oracooli <sub style="font-size:12px;color:red">Beta</sub> </span>
          <ul class=" flex-column p-0 leftside nav bg-info  " style="position: relative;top:3rem;background: #614385;



">
            <li class=" p-4  " style="background-color: transparent;



">
              <a class="nav-link text-white activelogin "href="#login" style="font-size:18px;font-family: LeagueGothic-Regular;" >Login</a>
            </li>
            <li class=" p-4" style="background-color: transparent;


">
              <a class="nav-link text-white "  href="#register" style="font-size:18px;font-family: LeagueGothic-Regular;">Create an account</a>
            </li>
            <li class="p-4 " style="background-color: transparent;



">
              <a class="nav-link text-white  " href="#about"style="font-size:18px;font-family: LeagueGothic-Regular;" >About Us</a>
            </li>
            <li class="p-4"style="background-color: transparent;


">
              <a class="nav-link text-white   " href="#FAQS" style="font-size:18px;font-family: LeagueGothic-Regular;">FAQS</a>
            </li>
         </ul>
        </nav>
 
    
 
  </div>
  <div class=" flex-fill bg-light" >
     <div class="card d-flex   mx-auto " id="login" style="position:relative;top:rem;left:;height:;border:none;width:;height:100%;
   ">
            <div class="mx-auto login1">
                 <?php if(isset($loginmessage)){ ?>
  
           
                <div class="alert alert-<?php if(isset($logintype)){echo $logintype;}?>" role="alert">
 <?php 
  echo $loginmessage;
 ?>
</div>
<?php }?> 

              <!-- Login Form-->
              <form id="login_form" class="focustxt" action="<?php echo base_url();?>user/login" method="POST">
                
                <div class="input-group" style="background-color:transparent;">
                  
                  <input   id="email_login" type="email"  name="email_login" placeholder="Email"required="">
                  
                  <span class="input-group-addon "  ><i class="far fa-user"></i>&nbsp;Email Address </span>
          </div>
                <div class="input-group">
                  
                  <input  id="Password" type="password"  name="Password" placeholder="Password"required="">
                  <span class="input-group-addon "><i class="fas fa-key"></i>&nbsp; Password</span>
                </div>
                <div class="">
                  <button type=" submit"="" class="btn loginbtn  btn-md  btn-outline-info " style=" 
 border-radius: 3.5rem / 100%;width:35%">Login</button>
                  
                 <br>
                   <style type="text/css">
    .loginbtn{
      color:black;
    }
    .loginbtn:hover{
       color:white;
    }

  </style>
                  
                  <a href='<?php echo $login_url?>' style="background-color:transparent;color:black;border:none;border-radius:;font-size: 11px;font-family: monospace;float: left;"> Sign in With 
                    <img class='card-img-top ' style='width:60px;height:18px' src='<?php echo str_replace('index.php/','',base_url()); ?><?php ?>images/google.png ' alt='Card image cap' >  </a>
                  
                  
                  
                  <a class=""href="#"style="float:right;background-color:transparent;color:black;border:none;border-radius:;font-size: 11px;margin-top:1.4rem" data-toggle="modal" data-target="#myModal1" data-backdrop="static" data-keyboard="false"style="" >Forget Password ?</a>
                </div>
         
              </form>
              
           
            
          </div>
  </div> 
   <div class="card d-flex   mx-auto "id="register"   style="position: relative;top:rem;height:;border:none;width:;height:100%;/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#ffffff+0,f6f6f6+47,ededed+100;White+3D+%231 */
background: rgb(255,255,255); /* Old browsers */
background: -moz-linear-gradient(left,  rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(left,  rgba(255,255,255,1) 0%,rgba(246,246,246,1) 47%,rgba(237,237,237,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to right,  rgba(255,255,255,1) 0%,rgba(246,246,246,1) 47%,rgba(237,237,237,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed',GradientType=1 ); /* IE6-9 */
    ">
            <div class="mx-auto register1" >
              
                             <?php if(isset($registermessage)){ ?>
  
           
                <div class="alert alert-<?php if(isset($registertype)){echo $registertype;}?>" role="alert">
 <?php 
  echo $registermessage;
 ?>
</div>
<?php }?> 
             <form  method="post" id="register_form" action="<?php echo base_url();?>user/register">
     <div class="input-group">
    
      <input id="username" type="username"  name="username" placeholder="Username" required="">
      <span class="input-group-addon"><i class="fas fa-user"></i></span>
    </div>
	 <div class="input-group">
         <div class="form-row">
            <div class="col">
               <input type="text"  placeholder="First name" name="first_name" required="">
            </div>
            <div class="col">
              <input type="text"  placeholder="Last name" name="last_name" required="">
            </div>
         </div>
     </div>
   <div class="input-group" style="background-color:transparent;">
    
      <input id="email_registration" type="email"  name="email_registration" placeholder="Email"required="">
    
      <span class="input-group-addon"><i class="far fa-user"></i></span>
    </div>
   <div class="input-group">
    
      <input id="registration_password" type="password"  name="registration_password" placeholder="Password"required="">
      <span class="input-group-addon"><i class="fas fa-unlock-alt"></i></i></span>
    </div>
   <div class="input-group">
    
      <input id="registration_password_confirm" type="password"  name="registration_password_confirm" placeholder="Confirm Password"required="">
      <span class="input-group-addon"><i class="fas fa-unlock"></i></span>
    </div>
  
    <button type="Submit" class="btn createaccount btn-outline-info btn-lg btn-block  " style="">Create an Account</button>
  <style type="text/css">
    .createaccount{
      color:black;
    }
    .createaccount:hover{
       color:white;
    }

  </style>

   </form>
              
            </div>
            
          </div>
           <div class="card d-flex   mx-auto "id="about"   style="position: relative;top:rem;height:;border:none;width:;height:100%;/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#ffffff+0,f6f6f6+47,ededed+100;White+3D+%231 */
background: rgb(255,255,255); /* Old browsers */
background: -moz-linear-gradient(left,  rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(left,  rgba(255,255,255,1) 0%,rgba(246,246,246,1) 47%,rgba(237,237,237,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to right,  rgba(255,255,255,1) 0%,rgba(246,246,246,1) 47%,rgba(237,237,237,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed',GradientType=1 ); /* IE6-9 */
   ">
            
            
          </div>
   
</div>
  
      <div class="card -footer logincardfooter  fixed-bottom "  >
         <ul class="text-center mb-1 mt-1">
            <i class="far fa-copyright"></i> 2019  all rights reserved. Oracooli Technology Pvt.Ltd
         </ul>
      </div>
    
      <div class="modal fade" id="myModal1" role="dialog" style="background-color:white;">
      <div class="modal-dialog"style="background-color:transparent;">
      <!-- Modal content-->
      <div class="modal-content " style="background-color:white;height:200px;margin-top:20%;border:none">
         <div class="container-fluid text-center" id="forget">
            <button style=" outline:none !important;float:left;color:black;margin-right:-4%;font-family: ff-tisa-sans-web-pro, sans-serif;font-style: normal;font-weight: 100;" type="button" class="btn btn-link" data-dismiss="modal"><i class="fas fa-arrow-left"></i></button>
            Verfiy Email Address
            <form action="<?php echo base_url();?>user/forgetPasswordLink" method="POST">
               <div class="input-group ">
                  <input id="email_forget" type="email"  name="email_forget" placeholder="Email "required="">
                  <span class="input-group-addon"><i class="fas fa-user"></i>
                  </span>
               </div>
               <button type="Submit" class="btn btn-link ">Submit</button>
            </form>
         </div>
      </div>
	  </div></div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type='text/javascript'>
         /*$("#register_form").submit(function(event) {
         event.preventDefault();
           var $form = $( this ),
           url = $form.attr( 'action' );
           var form_data = $('#register_form').serialize();
           alert(JSON.stringify(form_data));
           $.ajax({
           url: url,
           type: "POST",
           data : form_data,
           beforeSend: function() {
           },
           success: function(data){
           alert(data);
           },
           error: function(xhr, ajaxOptions, thrownError) {
           console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
           }
           });
           });*/
           
      </script>
   </body>
   <script type="text/javascript">
      $(document).ready(function(){
        setTimeout('$(".alert-success").hide()',3000);
        setTimeout('$(".alert-danger").hide()',3000);
        
      });
   </script>
</html>