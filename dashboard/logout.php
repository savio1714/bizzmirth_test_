<?php

session_start();

if(isset($_SESSION['username2'])){
    unset($_SESSION['username2']);
    session_destroy();
  
}
  header("location: ../login.php");


?>
