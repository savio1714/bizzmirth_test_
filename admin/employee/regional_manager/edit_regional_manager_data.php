<?php
require "../../connect.php";

// $id= $_POST["testiod"];
$editfor= $_POST["editfor"];
// $franchisee_id=$_POST['franchisee_id'];
if($editfor == 'pending'){
	$identifier_id= $_POST["testiod"];
	$identifier_name = 'id=';
}else if($editfor == 'registered') {
	$identifier_id= $_POST["testiod"];
	$identifier_name = 'regional_manager_id=';
}

$head_office=$_POST['head_office'];
$zone_name=$_POST['zone_name'];
$region_name=$_POST['region_name']; 

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$country_code=$_POST['country_code'];
$phone=$_POST['phone'];
// $age=$_POST['age'];
$dob=$_POST['dob'];
$profile_pic=$_POST['profile_pic'];
$kyc=$_POST['kyc'];
$pan_card=$_POST['pan_card'];
$aadhar_card=$_POST['aadhar_card'];
$voting_card=$_POST['voting_card'];
$bank_passbook=$_POST['passbook'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];

$user_type_id = '7';


if($firstname !='' ||$lastname !='' ||$phone !='' ||$email !='' ||$gender !='' ||$dob !='' ||$address !='' ||$profile_pic !=''||$country !=''||$state !=''||$city !=''||$head_office !=''||$zone_name !=''||$region_name !=''){
	


$sql1 = "UPDATE regional_manager SET firstname=:firstname,lastname=:lastname,country_code=:country_code,contact_no=:contact_no,email=:email,gender=:gender,date_of_birth=:date_of_birth,country=:country,state=:state,city=:city,pincode=:pincode,address=:address,profile_pic=:profile_pic,kyc=:kyc,pan_card=:pan_card,aadhar_card=:aadhar_card,voting_card=:voting_card ,bank_passbook=:bank_passbook,head_office=:head_office,zone=:zone_name,region=:region_name WHERE $identifier_name:identifier_id";
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
		':profile_pic' => $profile_pic,
		':kyc' => $kyc,
		':pan_card' => $pan_card,
		':aadhar_card' => $aadhar_card,
		':voting_card' => $voting_card,
		':bank_passbook' => $bank_passbook,
		':head_office' => $head_office,
		':zone_name' => $zone_name,
		':region_name' => $region_name,
		':identifier_id' => $identifier_id	
	));

	if ($result) {
		
		$sql = "UPDATE login SET username=:email WHERE user_id=:user_id and user_type_id=:user_type_id";
		$stmt2 = $conn->prepare($sql);
		$result2=  $stmt2->execute(array(
			':email' => $email,
			':user_type_id' => $user_type_id,
			':user_id' => $identifier_id		
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

}else{
	echo 0;

}




?>