<?php
require "../../connect.php";
// console.log("a");
$password= $_POST["password"];
$user_id= $_POST["uid"];
$user_type_id= $_POST["utid"];


$sql1 = "UPDATE login SET password=:password WHERE user_id=:user_id and user_type_id=:user_type_id ";
	$stmt = $conn->prepare($sql1);
	$result=  $stmt->execute(array(
		':password' => $password,
		':user_id' => $user_id,
		':user_type_id' => $user_type_id
			
	));

	if ($result) {
		echo 1;
	}
	else{
		echo 0;
	}




?>