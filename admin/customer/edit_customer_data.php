<?php
require "../connect.php";

$id= $_POST["id"];
$user_id= $_POST["user_id"];
// $cust_id= $_POST["cust_id"];
$username= $_POST["username"];
$firstname= $_POST["firstname"];
$lastname= $_POST["lastname"];
$phone= $_POST["phone"];
$email= $_POST["email"];
$gender= $_POST["gender"];
$dob= $_POST["dob"];
$address= $_POST["address"];
$id_proof= $_POST["id_proof"];
$profile_pic= $_POST["profile_pic"];
$user_type_id= $_POST["user_type_id"];


$country_code= $_POST["country_code"];
$country= $_POST["country"];
$state= $_POST["state"];
$city= $_POST["city"];
$pincode= $_POST["pincode"];


if($username !='' ||$firstname !='' ||$lastname !='' ||$phone !='' ||$email !='' ||$gender !='' ||$dob !='' ||$address !='' ||$id_proof !='' ||$profile_pic !=''||$country !=''||$state !=''||$city !=''){
	


$sql1 = "UPDATE customer SET firstname=:firstname,lastname=:lastname,country_code=:country_code,contact_no=:contact_no,email=:email,gender=:gender,date_of_birth=:date_of_birth,country=:country,state=:state,city=:city,pincode=:pincode,address=:address,id_proof=:id_proof,profile_pic=:profile_pic WHERE id=:id";
	$stmt = $conn->prepare($sql1);
	$result=  $stmt->execute(array(
		':firstname' => $firstname,
		':lastname' => $lastname,
		':country_code' => $country_code,
		':contact_no' => $phone,
		':email' => $email,
		':gender' => $gender,
		':date_of_birth' => $dob,
		':country' => $country,
		':state' => $state,
		':city' => $city,
		':pincode' => $pincode,
		':address' => $address,
		':id_proof' => $id_proof,
		':profile_pic' => $profile_pic,
		// ':deleted_date' => $today,
		':id' => $id		
	));

	if ($result) {
		
		$sql = "UPDATE login SET username=:username WHERE user_id=:user_id and user_type_id=:user_type_id";
		$stmt2 = $conn->prepare($sql);
		$result2=  $stmt2->execute(array(
			':username' => $username,
			':user_type_id' => $user_type_id,
			':user_id' => $user_id		
		));

		if($result2){
			echo 1;
		}
		else{
		echo 1	;
		}

	}
	else{
		echo 0;
	}

}else{
	echo 0;

}




?>