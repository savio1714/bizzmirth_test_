<?php 
require "../connect.php";


$id= $_POST["id"];
$uname= $_POST["uname"];
$string="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#%^*()";
$password = substr(str_shuffle($string), 0,8);
$status= '1';
$user_type_id= '3';

date_default_timezone_set('Asia/Calcutta');
$todayYear = date('Y' );

// $uid=0;
// $travel_agent_id=0;

// $uid='';
$sql2= $conn->prepare("SELECT distinct travel_agent_id  from travel_agent order by travel_agent_id desc limit 1");
$sql2->execute();
$sql2->setFetchMode(PDO::FETCH_ASSOC);
if($sql2->rowCount()>0){
	foreach (($sql2->fetchAll()) as $key3 => $row3) {

		 $travel_agent_id=$row3["travel_agent_id"];

	}
	// $uid=substr($user_id, 4);
	// $uid = intval($uid);
	// if($travel_agent_id ==''){
	// 	$uid= 'BH_TA_2021_001';
	// }else{
	// 	$uid = $travel_agent_id + 1;
	// }

	if($travel_agent_id ==''){
		$uid = 'BH_TA_'.$todayYear.'_001';
		// $uid='BH_TA_2021_001';
	}else{

		$subV=substr($travel_agent_id,6,10);
		if($subV==$todayYear){
			// ''.$ssd
			$travel_agent_id++;
			  $travel_agent_id=str_pad($travel_agent_id, 3, '0', STR_PAD_LEFT);
			  $uid =$travel_agent_id;
		}else{

			$travel_agent_id++;
			$taid=substr($travel_agent_id,11);
			$newValue = 'BH_TA_'.$todayYear.'_'.$taid;

			  $Ntravel_agent_id=str_pad($newValue, 3, '0', STR_PAD_LEFT);
			  $uid =$Ntravel_agent_id;
		}
	}



}else
{
		$uid = 'BH_TA_'.$todayYear.'_001';
	 // $uid= 'BH_TA_2021_001';;
}



	$sql1 = "UPDATE travel_agent SET status=:status,travel_agent_id=:travel_agent_id WHERE id=:id";
	$stmt = $conn->prepare($sql1);
	$result=  $stmt->execute(array(
		':status' => $status,
		':travel_agent_id' => $uid,
		// ':deleted_date' => $today,
		':id' => $id		
	));

	if ($result) {
		
		$sql= "INSERT INTO login (username,password, user_id, user_type_id , status) VALUES (:uname ,:password, :user_id, :user_type_id, :status)";
		$stmt3 =$conn->prepare($sql);

		$result2=$stmt3->execute(array(
		':uname' => $uname, 
		':password' => $password, 
		':user_id' => $uid, 
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