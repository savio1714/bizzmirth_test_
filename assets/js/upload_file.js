$('#file2').change(function(){

      var fd = new FormData();
      var files = $('#file2')[0].files[0];
      fd.append('file',files);

      $.ajax({
        url: 'upload/upload_profile.php',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(response){
          if(response != 0){
            $("#img2").attr("src",response); 
            $('#profile_pic').val(response);
                    $("#preview img").show(); // Display image element
                  }else{
                    $('#profile_pic').val('');
                    alert('file not uploaded');
                  }
                },
              });
    });

$('#file').change(function(){

      var fd = new FormData();
      var files = $('#file')[0].files[0];
      fd.append('file',files);

      $.ajax({
        url: 'upload/upload.php',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(response){
          if(response != 0){
            // $("#img").attr("src",response); 
            $('#id_proof').val(response);
                    // $(".preview img").show(); // Display image element
                  }else{
                    $('#id_proof').val('');
                    alert('file not uploaded');
                  }
                },
              });
    });