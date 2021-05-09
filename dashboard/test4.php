<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>test Remember Me</title>
</head>
<body>
	<form>
		<label>User</label>
		<input type="text" name="user" id="user"><br>
		<input type="checkbox" name="remember" id="remember">
		<label>Remember Me</label><br>
		<a href="" id="submit">Submit</a>
	</form>

</body>
</html>
    <script src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
  $("#submit").click(function(e){
  	e.preventDefault();
  	  	let username = $('#user').val();
  	  	let remember = $('#remember').val();
  	  	let datastring='username='+username+'&remember='+remember;

  	  	  $.ajax({
        type: "POST",
        url: "test5.php",
        data: datastring,
        success: function (res) {
        if (res==1) {

          // alert("login ");
          // window.open("index2.php");
          location.href = "test2.php";
        }
        else{
          alert("username and password not correct");
        }
            },
        });
  	  });
});
	
</script>