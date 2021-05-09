<?php
session_start();
require '../connect.php';
$username=$_POST['username'];
$remember=$_POST['remember'];


// $remember_me=$_POST['remember_me'];


$stmt = $conn->prepare("SELECT * FROM login where username='".$username."' and status='1' ");
$stmt->execute();

    // set the resulting array to associative
$stmt->setFetchMode(PDO::FETCH_ASSOC);

if($stmt->rowCount()>0){
	foreach (($stmt->fetchAll()) as $key => $row) 
		// setcookie('user',$username,86500);
	setcookie('user', $username, time() + (86400 * 30), "/"); // 86400 = 1 day
		# code...
// 		if(isset($_POST['remember'])){
	
	
// }
		$_SESSION["username2"] = $row['username'];


		echo '1';
}
	else{
		echo '0';
	}




?>