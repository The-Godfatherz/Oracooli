<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Summernote</title>
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
</head>
<body>
  <form method="POST" action="">
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
</body>
</html>   