<?php 
require "../connect.php";


$id= $_POST["id"];
$uname= $_POST["uname"];
$string="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#%^*()";
$password = substr(str_shuffle($string), 0,8);
$status= '1';
$user_type_id= '4';

date_default_timezone_set('Asia/Calcutta');
$todayYear = date('Y' );

// $uid=0;
// $franchisee_id=0;

// $uid='';
// $sql2= $conn->prepare("SELECT franchisee_id,CAST(franchisee_id as SIGNED) AS casted_column  from franchisee where user_type='4'  ORDER BY casted_column desc limit 1");
 
$sql2= $conn->prepare("SELECT distinct franchisee_id  from franchisee order by franchisee_id desc limit 1");

$sql2->execute();
$sql2->setFetchMode(PDO::FETCH_ASSOC);
if($sql2->rowCount()>0){
	foreach (($sql2->fetchAll()) as $key3 => $row3) {

		 $franchisee_id=$row3["franchisee_id"];

	}

	if($franchisee_id ==''){
		$uid = 'BH_F_'.$todayYear.'_001';
		// $uid='BH_F_2021_001';;
	}else{

		$subV=substr($franchisee_id,5,9);
		if($subV==$todayYear){
			// ''.$ssd
			$franchisee_id++;
			  $franchisee_id=str_pad($franchisee_id, 3, '0', STR_PAD_LEFT);
			  $uid =$franchisee_id;
		}else{

			$franchisee_id++;
			$fid=substr($franchisee_id,10);
			$newValue = 'BH_F_'.$todayYear.'_'.$fid;

			  $Nfranchisee_id=str_pad($newValue, 3, '0', STR_PAD_LEFT);
			  $uid =$Nfranchisee_id;
		}
	}



}else
{
	 // $uid= 'BH_F_2021_001';
	$uid = 'BH_F_'.$todayYear.'_001';
}



	$sql1 = "UPDATE franchisee SET status=:status,franchisee_id=:franchisee_id WHERE id=:id";
	$stmt = $conn->prepare($sql1);
	$result=  $stmt->execute(array(
		':status' => $status,
		':franchisee_id' => $uid,
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