<?php 
require "../connect.php";


$id= $_POST["id"];
$uname= $_POST["uname"];
$string="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#%^*()";
$password = substr(str_shuffle($string), 0,8);
$status= '1';
$user_type_id= '2';
$register_by = '1';
// $uid=0;
// $cust_id=0;

// $uid='';
$sql2= $conn->prepare("SELECT cust_id,CAST(cust_id as SIGNED) AS casted_column  from customer where user_type='2'  ORDER BY casted_column desc limit 1");
$sql2->execute();
$sql2->setFetchMode(PDO::FETCH_ASSOC);
if($sql2->rowCount()>0){
	foreach (($sql2->fetchAll()) as $key3 => $row3) {

		 $cust_id=$row3["cust_id"];

	}
	// $uid=substr($user_id, 4);
	// $uid = intval($uid);
	if($cust_id ==''){
		$uid= 1;
	}else{
		$uid = $cust_id + 1;
	}



}else
{
	 $uid= 1;
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