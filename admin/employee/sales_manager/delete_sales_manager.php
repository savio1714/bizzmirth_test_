<?php 
date_default_timezone_set('Asia/Calcutta');
$today = date('Y-m-d H:i:s' );

require "../../connect.php";

$action= $_POST["action"];
$id= $_POST["id"];
$user_type="5";

if($action == 'pending'){
	$status= '0';
}else if($action == 'registered') {
	$status= '3';
}

// $status= '0';



	$sql1 = "UPDATE sales_manager SET status=:status, deleted_date=:deleted_date WHERE id=:id";
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

if(isset($_POST["smid"])){
	$sales_manager_id= $_POST["smid"];

	$sql2 = "UPDATE login SET status=:status WHERE user_id=:sales_manager_id and user_type_id=:user_type";
	$stmt2 = $conn->prepare($sql2);
	$result2=  $stmt2->execute(array(
		':status' => $status,
		':user_type' => $user_type,
		':sales_manager_id' => $sales_manager_id		
	));

	if ($result2) {
		echo 1;

	}
	else{
		echo 0;
	}
}


	


?>