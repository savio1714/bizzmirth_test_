<?php 
require "../connect.php";


$user_id= $_POST["id"];
$uname= $_POST["uname"];
$string="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#%^*()";
$password = substr(str_shuffle($string), 0,8);
$status= '1';
$user_type_id= '2';



	$sql1 = "UPDATE users_details SET status=:status WHERE id=:id";
	$stmt = $conn->prepare($sql1);
	$result=  $stmt->execute(array(
		':status' => $status,
		// ':deleted_date' => $today,
		':id' => $user_id		
	));

	if ($result) {
		
		$sql= "INSERT INTO login (username,password, user_id, user_type_id , status) VALUES (:uname ,:password, :user_id, :user_type_id, :status)";
		$stmt3 =$conn->prepare($sql);

		$result2=$stmt3->execute(array(
		':uname' => $uname, 
		':password' => $password, 
		':user_id' => $user_id, 
		':user_type_id' => $user_type_id, 
		':status' => $status
		));

		if($result2){
			echo 1;
		}
		else{
		echo 0	;
		}

	}
	else{
		echo 0;
	}


?>