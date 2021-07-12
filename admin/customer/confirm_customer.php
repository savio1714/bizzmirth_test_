<?php 
require "../connect.php";


$id= $_POST["id"];
$uname= $_POST["uname"];
$string="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#%^*()";
$password = substr(str_shuffle($string), 0,8);
$status= '1';
$user_type_id= '2';

if( $_POST["ref_no"] ==''){
	$register_by = '1';
}else{
	$register_by = '3';
}



date_default_timezone_set('Asia/Calcutta');
$todayYear = date('Y' );

// getting last customer id

$sql2= $conn->prepare("SELECT distinct cust_id  from customer order by cust_id desc limit 1");
$sql2->execute();
$sql2->setFetchMode(PDO::FETCH_ASSOC);
if($sql2->rowCount()>0){
	foreach (($sql2->fetchAll()) as $key3 => $row3) {

		 $cust_id=$row3["cust_id"];

	}

	if($cust_id ==''){
		$uid = 'CUST_'.$todayYear.'_00001';
		// $uid='CUST_2021_001';
	}else{

		$subV=substr($cust_id,5,9);
		if($subV==$todayYear){
			// ''.$ssd
			$cust_id++;
			  $cust_id=str_pad($cust_id, 5, '0', STR_PAD_LEFT);
			  $uid =$cust_id;
		}else{

			$cust_id++;
			$cid=substr($cust_id,10);
			$newValue = 'CUST_'.$todayYear.'_'.$cid;

			  $Ncust_id=str_pad($newValue, 5, '0', STR_PAD_LEFT);
			  $uid =$Ncust_id;
		}
	}



}else
{
		$uid = 'CUST_'.$todayYear.'_00001';
	 // $uid= 'BH_TA_2021_001';;
}



	$sql1 = "UPDATE customer SET status=:status,cust_id=:cust_id,register_by=:register_by WHERE id=:id";
	$stmt = $conn->prepare($sql1);
	$result=  $stmt->execute(array(
		':status' => $status,
		':cust_id' => $uid,
		':register_by' => $register_by,
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