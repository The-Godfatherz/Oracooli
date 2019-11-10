
<body>
  <div class="container-fluid mx-auto"id="login">
    
    <h1>Oracooli</h1>
    <!-- New Password-->
    <form id="newpass_form" action="<?php echo base_url();?>user/changepasswordpost" method="POST">
      <input type="hidden" name="email" value="<?php echo $email;?>">
      <input type="hidden" name="userid" value="<?php echo $id;?>">
      <div class="input-group" style="background-color:transparent;">
        
        <input id="new_login"  type="password"  name="new_login" placeholder="New Password"required="">
        
        <span class="input-group-addon"><i class="fas fa-key"></i></span>
      </div>
      <div class="input-group">
        
        <input id="confirm_password" type="password"  name="confirm_password" placeholder="Confirm_Password"required="">
        <span class="input-group-addon"><i class="fas fa-key"></i></span>
      </div>

      <div class="">
      <button  type="Submit" class="btn btn-link btn-md ">Submit</button><br>
     
      
     

      
       
       </div>
    </form>
    
  </div>


</body>

<script type='text/javascript'>
/* attach a submit handler to the form */
$("#register_form").submit(function(event) {
/* stop form from submitting normally */
event.preventDefault();
/* get the action attribute from the <form action=""> element */
  var $form = $( this ),
  url = $form.attr( 'action' );
  /* Send the data using post with element id name and name2*/
  //var posting = $.post( url, { name: $('#name').val(), name2: $('#name2').val() } );
  var form_data = $('#register_form').serialize();
  alert(JSON.stringify(form_data));
  /* Alerts the results */
      $.ajax({
      url: url,
      type: "POST",
      data : form_data,
      beforeSend: function() {
      },
      success: function(data){
       
      },
      error: function(xhr, ajaxOptions, thrownError) {
      console.log(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
      }
      });
  });
  </script>
</html>