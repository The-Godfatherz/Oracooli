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
   </style>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Oracooli/Login</title>
      <link rel="icon" type="image/png" sizes="96x96" href="<?php echo str_replace("index.php/","",base_url());?>images/favicon.png">
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
      <div class="d-flex " style="height:200vh">
               <ul class=" nav leftsideul bg-info flex-column " style=" ;">
                   <a href="#login"class="nav-link  logotitle text-white    " style="" >Oracooli <sub style="font-size:12px;color:red;background-color:transparent"><b> Beta</b>  </sub> </a>
                 
                  <li class="  logoli " style=";">
                      
                     <a class="nav-link text-white  logoa"href="#login" style="" >Login</a>
                  </li>
                  <li class=" logoli  " style=";">   
                     <a class="nav-link text-white logoa "  href="#register" style="">Create an account</a>
                  </li>
                  <li class=" logoli " style=";">
                     <a class="nav-link text-white  logoa " href="#about"style="" >About Us</a>
                  </li>
                  <li class=" logoli "style="">
                     <a class="nav-link text-white logoa  " href="#FAQS" style="">FAQS</a>
                  </li>
               </ul>
            <div class=" flex-column col-3 logincol  bg-white" style="width:15%" >
            </div>
           <div class=" flex-column  bg-light" >
            <div class="card " id="login" style="position:;top:rem;left:;right:;border:none;width:;height:100%;
               ">
               <div class="mx-auto login1">
                  <?php if(isset($loginmessage)){ ?>
                  <div class="alert alert-<?php if(isset($logintype)){echo $logintype;}?>" role="alert">
                     <?php 
                        echo $loginmessage;
                        ?>
                  </div>
                  <?php }?> 
                  
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
                        <button type=" submit"class="btn loginbtn  btn-md  btn-outline-info " style=" 
                       ">Login</button>
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
            <div class="card  "id="register" style="position:;top:rem;left:;right:;border:none;width:;height:100%;
               "><?php myconsole("sdf"); ?>
                <div class="mx-auto register1" ><?php 
                    if(isset($registermessage))
                    { ?>
                    <div class="alert alert-<?php if(isset($registertype)){echo $registertype;}?>" role="alert"><?php
                         echo $registermessage;?>
                    </div><?php 
                    }?> 
                    <form  method="post" id="register_form" action="<?php echo base_url();?>user/register">
                        <div class="input-group">
                            <input id="username" type="username"  name="username" placeholder="Username" required="">
                            <span class="input-group-addon"><i class="fas fa-user"></i></span>
                        </div>
                        <div class="input-group">
                            <div class="row w-100">
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
                            <div class="row w-100">
                                <div class="col">
                                    <input id="registration_password" type="password"  name="registration_password" placeholder="Password"required="">
                                    <span class="input-group-addon"><i class="fas fa-unlock-alt"></i></span>  
                                </div>
                                <div class="col">
                                    <input id="registration_password_confirm" type="password"  name="registration_password_confirm" placeholder="Confirm Password"required="">
                                    <span class="input-group-addon"><i class="fas fa-unlock"></i></span>       
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="row w-100">
                                <div class="col">
                                    <input id="current_qualification" type="text"  name="current_qualification" placeholder="Current Qualification" required="">
                                    <!-- <span class="input-group-addon"><i class="fas fa-unlock-alt"></i></span>-->
                                </div>
                                <div class="col">
                                    <input id="desired_job" type="text" name="desired_job" placeholder="Desired Job" required="">
                                    <!-- <span class="input-group-addon"><i class="fas fa-unlock"></i></span>-->
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="row w-100">
                                <div class="col">
                                    <input id="education" type="text"  name="education" placeholder="Education" required="">
                                    <!-- <span class="input-group-addon"><i class="fas fa-unlock-alt"></i></span>-->
                                </div>
                                <div class="col">
                                    <input id="desired_job" type="text" name="desired_skills" placeholder="Desired Skills" required="">
                                    <!-- <span class="input-group-addon"><i class="fas fa-unlock"></i></span>-->
                                </div>
                            </div>
                        </div>


                        <!--
                        <div class="input-group">
                            <input id="registration_password" type="password"  name="registration_password" placeholder="Password"required="">
                            <span class="input-group-addon"><i class="fas fa-unlock-alt"></i></span>
                        </div>
                        <div class="input-group">
                            <input id="registration_password_confirm" type="password"  name="registration_password_confirm" placeholder="Confirm Password"required="">
                            <span class="input-group-addon"><i class="fas fa-unlock"></i></span>
                        </div>-->
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
            
            <div class="card mx-auto "id="about" style="position:;top:rem;left:;right:;border:none;width:%;height:100%;
               " >
               <span class="mr-4 ml-4 text-justify ">
              Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with BootstrapCDN and a template starter page.Quickly manage the layout, alignment, and sizing of grid columns, navigation, components, and more with a full suite of responsive flexbox utilities. For more complex implementations, custom CSS may be necessary.
               </span>      
            </div>
         </div>
         <div class="card -footer logincardfooter  fixed-bottom "  >
            <ul class="text-center mb-1 mt-1">
               <i class="far fa-copyright"></i> 2019  all rights reserved. Oracooli Technology Pvt.Ltd
            </ul>
         </div>
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
         </div>
      </div>
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
      <script type="text/javascript">
         $(document).ready(function(){
           setTimeout('$(".alert-success").hide()',3000);
           setTimeout('$(".alert-danger").hide()',3000);
           
         });
      </script>
   </body>
</html>