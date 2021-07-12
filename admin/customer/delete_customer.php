<?php 
date_default_timezone_set('Asia/Calcutta');
$today = date('Y-m-d H:i:s' );

require "../connect.php";


$id= $_POST["id"];
$user_type="2";

$status= '0';
$editfor= $_POST["action"];

if($editfor == 'pending'){
    $identifier_name = 'id=';
}else if($editfor == 'registered') {
    $identifier_name = 'cust_id=';
}



	$sql1 = "UPDATE customer SET status=:status, deleted_date=:deleted_date WHERE $identifier_name:id";
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

if(isset($_POST["cid"])){
	$cust_id= $_POST["cid"];

	$sql2 = "UPDATE login SET status=:status WHERE user_id=:cust_id and user_type_id=:user_type";
	$stmt2 = $conn->prepare($sql2);
	$result2=  $stmt2->execute(array(
		':status' => $status,
		':user_type' => $user_type,
		':cust_id' => $cust_id		
	));

	if ($result2) {
		echo 1;

	}
	else{
		echo 0;
	}
}


	


?>