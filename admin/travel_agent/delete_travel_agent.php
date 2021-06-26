<?php 
date_default_timezone_set('Asia/Calcutta');
$today = date('Y-m-d H:i:s' );

require "../connect.php";


$id= $_POST["id"];
$user_type="3";

$status= '0';
$editfor= $_POST["action"];

if($editfor == 'pending'){
    $identifier_name = 'id=';
}else if($editfor == 'registered') {
    $identifier_name = 'travel_agent_id=';
}



	$sql1 = "UPDATE travel_agent SET status=:status, deleted_date=:deleted_date WHERE $identifier_name:id";
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
	$travel_agent_id= $_POST["tid"];

	$sql2 = "UPDATE login SET status=:status WHERE user_id=:travel_agent_id and user_type_id=:user_type";
	$stmt2 = $conn->prepare($sql2);
	$result2=  $stmt2->execute(array(
		':status' => $status,
		':user_type' => $user_type,
		':travel_agent_id' => $travel_agent_id		
	));

	if ($result2) {
		echo 1;

	}
	else{
		echo 0;
	}
}


	


?>