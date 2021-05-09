<?php

session_start();



if(isset($_SESSION['username2'])){
    unset($_SESSION['username2']);
 //   setcookie('user2','');
	// setcookie('pass','');

    session_destroy();
  
}
	setcookie('user2',''); // 86400 = 1 day
	setcookie('pass',''); // 86400 = 1 day
  header("location: ../login.php");


?>
