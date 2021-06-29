<?php 
date_default_timezone_set('Asia/Calcutta');
$today = date('Y-m-d H:i:s' );

require "../connect.php";


$id= $_POST["id"];
$user_type="4";

$status= '0';

 

	$sql1 = "UPDATE franchisee SET status=:status, deleted_date=:deleted_date WHERE id=:id";
	$stmt = $conn->prepare($sql1);
	$result=  $stmt->execute(array(
		':status' => $status,
		':deleted_date' => $today,
		':id' => $id		
	));

	if ($result) {
		echo 1;

	}
	else{
		echo 0;
	}

if(isset($_POST["tid"])){
	$franchisee_id= $_POST["tid"];

	$sql2 = "UPDATE login SET status=:status WHERE user_id=:franchisee_id and user_type_id=:user_type";
	$stmt2 = $conn->prepare($sql2);
	$result2=  $stmt2->execute(array(
		':status' => $status,
		':user_type' => $user_type,
		':franchisee_id' => $franchisee_id		
	));

	if ($result2) {
		echo 1;

	}
	else{
		echo 0;
	}
}


	


?>