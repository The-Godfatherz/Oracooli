<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <title>Oracooli/Q@R</title>
         <!-- Bootstrap CSS CDN -->
         <link href="css/bootstrap.css" rel="stylesheet" />
         <link href="css/bootstrap-theme.css" rel="stylesheet" />
         <link href="css/bootstrap.min.css" rel="stylesheet" />
         <link href="js/bootstrap.min.js" rel="stylesheet" />
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    
         <!-- Our Custom CSS 
		  https://freefrontend.com/css-tabs/
		  http://www.bestjquery.com/lab/tabs/page/2/
		  https://embed.plnkr.co/NcdGqX/
		 -->
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
    

  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-bs4.js"></script>
     <script type="text/javascript">
         $(document).ready(function () {
         $('#sidebarCollapse').on('click', function () {
         $('#sidebar').toggleClass('active');
         $(this).toggleClass('active');
         });
         });
/* -------------------------------------------------------
| This first part can be ignored, it is just getting
| all the different entrance and exit classes of the
| animate-config.json file from the github repo.
--------------------------------------------------------- */

var animCssConfURL = 'https://api.github.com/repos/daneden/animate.css/contents/animate-config.json';
var selectIn = $('#animation-in-types');
var selectOut = $('#animation-out-types');
var getAnimCSSConfig = function ( url ) { return $.ajax( { url: url, type: 'get', dataType: 'json' } ) };
var decode = function ( data ) {
  var bin = Uint8Array.from( atob( data['content'] ), function( char ) { return char.charCodeAt( 0 ) } );
  var bin2Str = String.fromCharCode.apply( null, bin );
  return JSON.parse( bin2Str )
}
var buildSelect = function ( which, name, animGrp ) {
  var grp = $('<optgroup></optgroup>');
  grp.attr('label', name);
  $.each(animGrp, function ( idx, animType ) {
    var opt = $('<option></option>')
    opt.attr('value', idx)
    opt.text(idx)
    grp.append(opt);
  })
  which.append(grp)	
}
getAnimCSSConfig( animCssConfURL )
  .done (function ( data ) {
  var animCssConf = decode ( data );
  $.each(animCssConf, function(name, animGrp) {
    if ( /_entrances/.test(name) ) {
      buildSelect(selectIn, name, animGrp);
    }
    if ( /_exits/.test(name) ) {
      buildSelect(selectOut, name, animGrp);
    }
  })
})


/* -------------------------------------------------------
| Here is were the fun begins.
--------------------------------------------------------- */

var modalBtn = $('button');
var modal = $('#myModal');
var animInClass = "";
var animOutClass = "";

modalBtn.on('click', function() {
  animInClass = selectIn.find('option:selected').val();
  animOutClass = selectOut.find('option:selected').val();
  if ( animInClass == '' || animOutClass == '' ) {
    alert("Please select an in and out animation type.");
  } else {
    modal.addClass(animInClass);
    modal.modal({backdrop: false});
  }
})

modal.on('show.bs.modal', function () {
  var closeModalBtns = modal.find('button[data-custom-dismiss="modal"]');
  closeModalBtns.one('click', function() {
    modal.on('webkitAnimationEnd oanimationend msAnimationEnd animationend', function( evt ) {
      modal.modal('hide')
    });
    modal.removeClass(animInClass).addClass(animOutClass);
  })
})

modal.on('hidden.bs.modal', function ( evt ) {
  var closeModalBtns = modal.find('button[data-custom-dismiss="modal"]');
  modal.removeClass(animOutClass)
  modal.off('webkitAnimationEnd oanimationend msAnimationEnd animationend')
  closeModalBtns.off('click')
})
      </script>
    <style>
        
        
        
    /******* CSS *********/
.previous-tab,
.next-tab{
	display: inline-block;
	border: 1px solid #444348;
	border-radius: 3px;
	margin: 5px;
	color: #444348;
	font-size: 14px;
	padding: 10px 15px;
	cursor: pointer;
}
    </style>   
</head>
<body>
    
    <!-- Sidebar  -->
       <?php include 'header.php' ?>
 
        <div  class="row mx-auto  " style="height:vh;background-color:">
	  <div class="col-12 bg-dark">
	  <div class="d-flex justify-content-around">
	 
	  	   <div class="card mb-3 bg-dark " style="width:rem; box-shadow;border:none">
	  
	 
	  </div>
	    <div class="card p-1  bg-dark " style="width:rem; box-shadow; border:none">
	   <div class="card-title text-center text-light">
	       Ask any question and get answers from  Mentors   
	   </div>
            
      
	  <div class="card-header p-0" style="" >
	<div class="input-group" data-toggle="modal" data-target="#textedit" style="background-color:">
					<div class="QAsearchbar mx-auto" >
						<input class="QAsearch_input"style="" type="text" name="" placeholder=" "> 
						<a href="#" class="QAsearch_icon"style="">
						Ask Question <i class="fas fa-question fa-xs fa-fw" ></i>
						</a>
					</div>
        
       
				</div>

         
	  
	  </div>
	 
	  </div>
	  	   <div class="card mb-3 bg-dark " style="width:rem; box-shadow;border:none">
	  
	 
	 
	  </div>
	  </div>
	   
	  
	  </div>
	
	  <div class="col bg-white " style="z-index:;height:100vh;">
	 <div class="row   " style="z-index: ; ">
	  <div class="col-2 text-center " style="background-color:#E0D3AF ">
	  <ul class=" list-unstyled text-justify text-dark  mt-5 ml-4" style="font-size:14px">
	   <li><h5 class="text-danger">Feeds </h5></li>
	   <li><a href="#" class="text-info">Movies</a></li>
	  <li> <a href="#" class="text-info">Technology </a></li>
	   <li><a href="#" class="text-info">Mobile Phones </a></li>
	   <li><a href="#" class="text-info">Geometry </a></li>
	  <li> <a href="#" class="text-info">Computer Science </a></li>
	   <li><a href="#" class="text-info">The Internet </a></li>
	  <li> <a href="#" class="text-info">Television Series</a></li>
	  <li> <a href="#" class="text-info">Sports </a></li>
	  <li> <a href="#" class="text-info">Music </a></li>
	  </ul>
	  

	  </div>
	  <div class="col-10   " style="height:55vh;background-color:#E0D3AF   ">
	  <div class="scroller" style="position:absolute; top: 0px;z-index:5;overflow-y:scroll;height:80vh">
	    <div class="card mt-3 mb-3" style="width:80%; box-shadow: 0 8px 0px -6px lightgrey;border:none">
	  <div class="card-header bg-white" style="border:none" >
	  <a href="#" Style="font-size:15px"> <img src="images/1 (1).jpg " hspace="5" style="width:20px;height:20px;border-radius:15px;">Gaurav Sagdeo</a>
	   <span Style="font-size:10px; color:grey; ">  <a href="#" class="text-dark pl-1 pr-2"style=" padding:;">Computer Science</a> Answered  4 days ago</span>
	   <div class="float-right">
            <a href="#" > <i class="fas fa-ellipsis-v fa-sm"></i></a>	   
	   </div>
	 

         
	  
	  </div>
	  <div class="card-body">
	   <h3 class="" style="font-size:20px">What is the "2038" problem?</h3>
	  <h6 class="" style="color:grey;font-size:10px">In all the computer environments, dates are stored as numbers. Different solution developers use different approaches. We need to compare dates and do arithmetic on dates like difference between dates and find date after/ before given days. </h6>

	  </div>
	  <div class="card-footer bg-white" style="border:none">
	  <ul class="list-inline">
		  <li class="list-inline-item "><a class="text-Primary" href="#" style="font-size:10px">like : 20k</a></li>
		  <li class="list-inline-item "><a class="text-success" href="#" style="font-size:10px">Share :50k</a></li>
		  	  <a href="#" style="font-size:10px;float:right">Reply :10k</a>
		  <li class="list-inline-item"></li>
      </ul>
	   
	  </div>
	  </div>
    <div class="card mt-3 mb-3" style="width:80%; box-shadow: 0 8px 0px -6px lightgrey;border:none">
	  <div class="card-header bg-white" style="border:none" >
	  <a href="#" Style="font-size:15px"> <img src="images/1 (1).jpg " hspace="5" style="width:20px;height:20px;border-radius:15px;">Gaurav Sagdeo</a>
	   <span Style="font-size:10px; color:grey; ">  <a href="#" class="text-dark pl-1 pr-2"style=" padding:;">Computer Science</a> Answered  4 days ago</span>
	   <div class="float-right">
            <a href="#" > <i class="fas fa-ellipsis-v"></i></a>	   
	   </div>
	 

         
	  
	  </div>
	  <div class="card-body">
	   <h3 class="" style="font-size:20px">What is the "2038" problem?</h3>
	  <h6 class="" style="color:grey;font-size:10px">In all the computer environments, dates are stored as numbers. Different solution developers use different approaches. We need to compare dates and do arithmetic on dates like difference between dates and find date after/ before given days. </h6>
	  <a href="#" style="font-size:10px">Comments</a>
	  </div>
	  <div class="card-footer bg-white" style="border:none">
	  <ul class="list-inline">
		  <li class="list-inline-item "><a class="text-Primary" href="#" style="font-size:10px">Vote</a></li>
		  <li class="list-inline-item "><a class="text-success" href="#" style="font-size:10px">Share This Answer</a></li>
		  <li class="list-inline-item"></li>
      </ul>
	   
	  </div>
	  </div>
	<div class="card mt-3 mb-3" style="width:80%; box-shadow: 0 8px 0px -6px lightgrey;border:none">
	  <div class="card-header bg-white" style="border:none" >
	  <a href="#"> <img src="images/1 (1).jpg " hspace="5" style="width:30px;height:30px;border-radius:15px;">Gaurav Sagdeo</a>
	   <span Style="font-size:10px; color:grey; ">  <a href="#" class="text-dark pl-1 pr-2"style=" padding:;">Computer Science</a> Answered  4 days ago</span>
	   <div class="float-right">
            <a href="#" > <i class="fas fa-ellipsis-v"></i></a>	   
	   </div>
	 

         
	  
	  </div>
	  <div class="card-body">
	   <h3 class="">What is the "2038" problem?</h3>
	  <h6 class="" style="color:grey">In all the computer environments, dates are stored as numbers. Different solution developers use different approaches. We need to compare dates and do arithmetic on dates like difference between dates and find date after/ before given days. </h6>
	  <a href="#">Comments</a>
	  </div>
	  <div class="card-footer bg-white" style="border:none">
	  <ul class="list-inline">
		  <li class="list-inline-item "><a class="text-Primary" href="#">Vote</a></li>
		  <li class="list-inline-item "><a class="text-success" href="#">Share This Answer</a></li>
		  <li class="list-inline-item"></li>
      </ul>
	   
	  </div>
	  </div>
	<div class="card mt-3 mb-3" style="width:80%; box-shadow: 0 8px 0px -6px lightgrey;border:none">
	  <div class="card-header bg-white" style="border:none" >
	  <a href="#"> <img src="images/1 (1).jpg " hspace="5" style="width:30px;height:30px;border-radius:15px;">Gaurav Sagdeo</a>
	   <span Style="font-size:10px; color:grey; ">  <a href="#" class="text-dark pl-1 pr-2"style=" padding:;">Computer Science</a> Answered  4 days ago</span>
	   <div class="float-right">
            <a href="#" > <i class="fas fa-ellipsis-v"></i></a>	   
	   </div>
	 

         
	  
	  </div>
	  <div class="card-body">
	   <h3 class="">What is the "2038" problem?</h3>
	  <h6 class="" style="color:grey">In all the computer environments, dates are stored as numbers. Different solution developers use different approaches. We need to compare dates and do arithmetic on dates like difference between dates and find date after/ before given days. </h6>
	  <a href="#">Comments</a>
	  </div>
	  <div class="card-footer bg-white" style="border:none">
	  <ul class="list-inline">
		  <li class="list-inline-item "><a class="text-Primary" href="#">Vote</a></li>
		  <li class="list-inline-item "><a class="text-success" href="#">Share This Answer</a></li>
		  <li class="list-inline-item"></li>
      </ul>
	   
	  </div>
	  </div>
	<div class="card mt-3 mb-3" style="width:80%; box-shadow: 0 8px 0px -6px lightgrey;border:none">
	  <div class="card-header bg-white" style="border:none" >
	  <a href="#"> <img src="images/1 (1).jpg " hspace="5" style="width:30px;height:30px;border-radius:15px;">Gaurav Sagdeo</a>
	   <span Style="font-size:10px; color:grey; ">  <a href="#" class="text-dark pl-1 pr-2"style=" padding:;">Computer Science</a> Answered  4 days ago</span>
	   <div class="float-right">
            <a href="#" > <i class="fas fa-ellipsis-v"></i></a>	   
	   </div>
	 

         
	  
	  </div>
	  <div class="card-body">
	   <h3 class="">What is the "2038" problem?</h3>
	  <h6 class="" style="color:grey">In all the computer environments, dates are stored as numbers. Different solution developers use different approaches. We need to compare dates and do arithmetic on dates like difference between dates and find date after/ before given days. </h6>
	  <a href="#">Comments</a>
	  </div>
	  <div class="card-footer bg-white" style="border:none">
	  <ul class="list-inline">
		  <li class="list-inline-item "><a class="text-Primary" href="#">Vote</a></li>
		  <li class="list-inline-item "><a class="text-success" href="#">Share This Answer</a></li>
		  <li class="list-inline-item"></li>
      </ul>
	   
	  </div>
	  </div>
	
	  </div>
	
	  </div>
	 </div>
	 
	  
	  </div>
	
	  
</div>
	   


<!-- Modal -->
<div class="modal animated fadeInDown QAmodal  " data-backdrop="static" id="textedit" tabindex="-1" role="dialog" aria-labelledby="textedit" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content w-50 mx-auto">
       
      <div class="modal-header">
        <h5 class="modal-title" id="textedit">Ask Questions</h5>
        <button type="button" class="close  " data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
   
        <div class="modal-body ">
      <script>
    
    $(document).ready(function() {
  $('.btnNext').click(function() {
    $('.nav-tabs .active').parent().next('li').find('a').trigger('click');
  });

  $('.btnPrevious').click(function() {
    $('.nav-tabs .active').parent().prev('li').find('a').trigger('click');
  });
});

          

    
    </script>
<ul class="nav qatabs nav-tabs nav-fill" id="myTab" role="tablist">
  <li class="nav-item disabled">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Ask Question</a>
  </li>
  <li class="nav-item disabled">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Upload Video</a>
  </li>
  <li class="nav-item disabled">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Preview</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
     <form method="POST" action="">
            
          
  <div class="form-group">
    <label for="">Ask a  question.</label>
    <input type="text" class="form-control" id="" aria-describedby="">
   
  </div>
    <textarea name="question" id="summernote"></textarea>
    <button type="submit">Ask Question</button>
  </form>
  <script>
    $(document).ready(function() {
        $('#summernote').summernote({
          callbacks: {
            onImageUpload: function(files, editor, welEditable) {
            sendFile(files[0],editor,welEditable);
          },
          onMediaDelete : function(target) {
            alert("demo");
                // alert(target[0].src) 
                //deleteFile(target[0].src);
            }
          }
        });
    });

    function sendFile(file,editor,welEditable) {
      var editor = editor;
      var welEditable = welEditable;
    data = new FormData();
    data.append("file", file);
    $.ajax({
        data: data,
        type: "POST",
        url: "<?php echo base_url();?>Saveeditorimage/index",
        cache: false,
        contentType: false,
        processData: false,
        success: function(url) {
          //alert(url);
          //$summernote.summernote('insertNode', url);
          $('#summernote').summernote('insertImage', url);
        }
    });
}
 
  </script>
            
     <a class="btn btn-outline-success btnNext mr-2">Next</a>
    </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      
         <div class="card mx-auto" style="">
         
            
            <div class="card-body "style="text-align:center;background-color:white;border-bottom:1px solid black; " id="userActions">
             
               <!-- <input type="file" id="fileUpload" ><br><br> -->
               <form id="UploadForm" method="post" enctype="multipart/form-data" accept-charset="utf-8">
			   	 <label class="custom-file-upload"> Choose File
              <input type="file" id="fileUpload" name="userfile">
                  <input type="hidden" value="mentor" name="userRole" id="userRole">
          </label> 
                 
                  
           
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
            </ul>
             </form>				 
         </div>
         </div>     
          <a class="btn btn-outline-success btnNext mr-2">Next</a>
      <a class="btn btn-outline-danger btnPrevious mr-2">Previous</a>
      
    </div>
<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
    
    <a class="btn btn-outline-success btnSubmit mr-2">Submit</a>
      <a class="btn btn-outline-danger btnPrevious mr-2">Previous</a>
      
    </div>
</div>
              
      
   
            
      </div>
     
        
    
    </div>
  </div>
</div>
   
  
</body>
</html>   