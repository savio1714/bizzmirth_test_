<?php
// session_start();
require '../connect.php';
$profile_pic=$_POST['profile_pic'];
$fname=$_POST['fname'];
// $mname=$_POST['mname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$country_code=$_POST['country_code'];
$phone_no=$_POST['phone_no'];
$age=$_POST['age'];
$bdate=$_POST['bdate'];
$id_proof=$_POST['id_proof'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$user_type="2";



$sql= "INSERT INTO customer (firstname,lastname, email, country_code, contact_no , date_of_birth, age,gender,country,state,city,pincode,address,profile_pic, id_proof,user_type) VALUES (:fname ,:lname, :email, :country_code, :phone_no, :bdate, :age,  :gender , :country, :state, :city, :pincode,:address,:profile_pic ,:id_proof,  :user_type)";
$stmt3 =$conn->prepare($sql);

$result2=$stmt3->execute(array(
':fname' => $fname, 
':lname' => $lname, 
':email' => $email,
':country_code' => $country_code, 
':phone_no' => $phone_no,
':country' => $country,
':state' => $state,
':city' => $city,
':pincode' => $pincode,
':address' => $address,  
':bdate' => $bdate,
':age' => $age,  
':gender' => $gender,
':profile_pic' => $profile_pic,
':id_proof' => $id_proof,  
':user_type' => $user_type
));

if($result2){
	echo 1;
}
else{
echo 0	;
}

?>