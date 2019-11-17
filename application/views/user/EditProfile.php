<!--Edit Profile Modal-->
<div class="modal fade  " id="EditP" tabindex="-1" role="dialog" aria-labelledby="EditP" aria-hidden="true">
   <div class="modal-dialog  modal-full  " >
      <div class="modal-content  " style="background-color:" >
         <div class="d-flex flex-row mx-auto" style="background-color:;">
            <form id="editprofilecard_form" name="editprofilecard_form" method="post" enctype="multipart/form-data" accept-charset="utf-8">
               <div class="card editprofilecard "  >
                  <img class="card-img-top " style="height:10rem;object-fit:cover" src="<?php echo get_imagepath($profile_image);?>" alt="Card image cap" >
                  <span class="" style="">
                     <div  class="post-file">
                        <i class="far fa-edit " style="font-size:15px;"></i>
                        <input id="profileimage" name="profileimage" type="file">
                     </div>
                  </span>
                  <div class="card-body pfont" >
                     <p class=""style="color:black;"> 
                        <input type="text" class="form-control"value="" name=""   placeholder="Username">
                     </p>
                     <hr width="30%">
                     <p class="card-title" >About</p>
                     <p class="card-text" >
                        <textarea class="" rows="4" cols="33" name ="about"  placeholder="">
                        <?php echo $about ?? "";?>
                        </textarea>
                     </p>
                  </div>
                  <div class="card-footer"style="background-color:transparent">
                     <button type="button" onclick="saveProfileImage('editprofilecard_form')" class="btn btn-success btn-md navbar-btn" style="margin-left:;font-size:15px;width:100%;border:none;background-color:white;color:#9932CC;">
                     Save Changes
                     </button>
                  </div>
            </form>
            </div>
            <div class="card  editdetails">
               <a  href="#"class="editclose" style="color:red;margin-top:%;margin-right:%;font-size:15px;right:0 "class="close " data-dismiss="modal"><i class="fas fa-times "></i></a>
               <div class="editinfo"  >
<ul class="nav edittabs nav-tabs nav-fill" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Personal Information</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Mentor Information</a>
  </li>
 
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><form id="personal_information" style="background-color:white;">
                              <!--<h3 style="text-align:center;font-size:15px;background-color:transparent">
                                 Personal Information
                              </h3>-->
                              <br>
                              <div class="pfont">
                                 <div class="row form-group">
                                    <div class="col">
                                       <input type="text" class="form-control" placeholder="First name" name="first_name" value="<?php echo $first_name ?? "";?>">
                                       <blockquote id="" class="form-text text-dark " style="">First Name</blockquote>
                                    </div>
                                    <div class="col">
                                       <input type="text" class="form-control" placeholder="Last name" name="last_name" value="<?php echo $last_name ?? '';?>">
                                       <blockquote id="" class="form-text text-dark">Last Name</blockquote>
                                    </div>
                                 </div>
                              </div>
                              <div class="clearfix"> </div>
                              <div class="pfont" >
                                 <div class="form-group">
                                    <input type="Email" class="form-control" id="Email" placeholder="Email" name="email" value="<?php echo $email ?? "";?>">
                                    <blockquote id="" class="form-text text-dark">Email Address</blockquote>
                                    <input type="text" class="form-control" id="Language" placeholder="Languages Know" name="languages_know" value="<?php echo $languages_know ?? '';?>">
                                    <blockquote id="" class="form-text text-dark">Languages Know</blockquote>
                                    <input type="text" class="form-control"  placeholder="Mobile Number" name="mobile_number" value="<?php echo $mobile_number ?? '';?>">
                                    <blockquote id="" class="form-text text-dark">Mobile Number</blockquote>
                                 </div>
                              </div>
                              <div class="pfont" >
                                 <div class="form-inline"  >
                                    <select class="form-control  pfont" name="country">
                                       <option  value="">Select Country</option>
                                       <option value="India" >India</option>
                                       <option value="USA">USA</option>
                                       <option value="China">China</option>
                                       <option value="Gremany">Gremany</option>
                                       <option value="Japan">Japan</option>
                                    </select>
                                 </div>
                              </div>
                              <div class="form-inline pfont">
                                 <button type="button"  class="btn btn-info" style="margin-left:85%;outline:none;float:right;text-decoration:none;font-size:15px " onclick='saveProfileData("personal_information")'>Save Changes</button>
                              </div>
                           </form>
                        
                        
                           <form id="mentee_information">
                             
                              <div class="pfont">
                                 <div class="row form-group">
                                    <div class="col">
                                       <input type="text" class="form-control" id="Current Qualifications" placeholder="Current Qualifications" name="current_qualification" value="<?php echo $current_qualification ?? '';?>">
                                       <blockquote id="" class="form-text text-dark">Current Qualifications</blockquote>
                                    </div>
                                    <div class="col">
                                       <input type="text" class="form-control" id="Desired Job" placeholder="Desired Job" name="desired_job" value="<?php echo $desired_job ?? '';?>">
                                       <blockquote id="" class="form-text text-dark">Desired Job</blockquote>
                                    </div>
                                 </div>
                              </div>
                              <div class="pfont" >
                                 <div class="form-group">
                                    <input type="text" class="form-control" id="Education" placeholder="Education (10th,12th,Degree)" name="education" value="<?php echo $education ?? '';?>">
                                    <blockquote id="" class="form-text text-dark">Education</blockquote>
                                 </div>
                                 <div class=" form-group">
                                    <input type="text" class="form-control" id="DesiredSkills" placeholder="Desired Skills" name="desired_skills" value="<?php echo $desired_skills ?? '';?>">
                                    <blockquote id="" class="form-text text-dark">Desired Skills</blockquote>
                                 </div>
                              </div>
                               <div class="form-inline pfont">
                                
                                  <button  id="btnSubmit" style="margin-left:85%;outline:none;float:right;text-decoration:none; "class="btn btn-info mb-4" onclick='saveProfileData("mentee_information")'>Save Changes</button>
								   <button type="button" onclick="location.reload()" class="btn btn-info "style="margin-left:85%;outline:none;float:right;text-decoration:none;" >Confirm</button>
                              </div>
                           </form>
                       
						</div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                           <form id="mentor_information"> 
                             <!-- <h4 style="text-align:center;font-size:15px">Mentor Information </h4>
                              <br><br>-->
                              <div class=" pfont " style="">
                                 <div class="row form-group">
                                    <div class="col">
                                       <input type="text" class="form-control" id="Jobs" placeholder="Jobs" name="jobs" value="<?php echo $jobs ?? '';?>">
                                       <blockquote id="" class="form-text text-dark">Jobs</blockquote>
                                    </div>
                                    <div class="col">
                                       <input type="text" class="form-control" id="Experience" placeholder="Experience" name="experience" value="<?php echo $experience ?? '';?>">
                                       <blockquote id="" class="form-text text-dark">Experience</blockquote>
                                    </div>
                                 </div>
                              </div>
                              <div  class="pfont ">
                                 <div class="form-group">
                                    <input type="text" class="form-control" id="Job Designation" placeholder="Job Designation" name="designation" value="<?php echo $designation ?? '';?>">
                                    <blockquote id="" class="form-text text-dark">Job Designation
                                    </blockquote>
                                 </div>
                                 <div class=" form-group">
                                    <input type="text" class="form-control"  placeholder="Expertise" name="expertise" value="<?php echo $expertise ?? '';?>">
                                    <blockquote id="" class="form-text text-dark">Expertise
                                    </blockquote>
                                 </div>
                                 <div class=" form-group">
                                    <input type="text" class="form-control "id="Acheivement"  placeholder="Acheivement" name="achievement" value="<?php echo $achievement ?? '';?>">
                                    <blockquote id="" class="form-text text-dark">Acheivement
                                    </blockquote>
                                 </div>
                              </div>
							    <div class="form-inline pfont">
                                 <button type="button"  class="btn btn-info " style="margin-left:85%;outline:none;float:right;text-decoration:none; " onclick='saveProfileData("mentor_information")'>Save Changes</button>
								
                              </div>
                             
                           </form>
                        
                     </div>
  
</div>
                        
                        
                  
               
            </div>
         </div>
      </div>
   </div>
</div>