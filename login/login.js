$(document).ready(function(){
  $("#login").click(function(){
  	let username = $('#username').val();
  	let password = $('#password').val();
    let remember_me = $('#remember_me').val();

  	let datastring='username='+username+'&password='+password+'&remember_me='+remember_me;


  	if (username=='') {
        alert("Please Enter Username");
    }
    else if(password==''){
        alert("Please Enter Password");
    }else{

       $.ajax({
        type: "POST",
        url: "login/submit_data.php",
        data: datastring,
        success: function (res) {
        if (res==1) {
          // alert("login ");
          // window.open("index2.php");
          location.href = "dashboard/index.php";
        }
        else{
          alert("username and password not correct");
        }
            },
        });

    }

  

  	// alert(username);
  });
});