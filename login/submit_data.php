<?php
session_start();
require '../connect.php';
$username=$_POST['username'];
$password=$_POST['password'];



$stmt = $conn->prepare("SELECT * FROM login where username='".$username."' AND password='".$password."' AND status='1' ");
$stmt->execute();

    // set the resulting array to associative
$stmt->setFetchMode(PDO::FETCH_ASSOC);

if($stmt->rowCount()>0){
	foreach (($stmt->fetchAll()) as $key => $row) 

		# code...
		$_SESSION["username2"] = $row['username'];
		$_SESSION["user_type_id"] = $row['user_type_id'];

	if ($_SESSION["user_type_id"] =='2' || $_SESSION["user_type_id"]== '3'){
		echo '1';
	}else{
		echo '0';
	}
}
	else{
		echo '0';
	}


$stmt2 = $conn->prepare("SELECT * FROM user_type where id='".$_SESSION["user_type_id"]."' AND status='1' ");
$stmt2->execute();

    // set the resulting array to associative
$stmt2->setFetchMode(PDO::FETCH_ASSOC);

if($stmt2->rowCount()>0){
	foreach (($stmt2->fetchAll()) as $key => $row2) 

		# code...
		$_SESSION["user_type_name"] = $row2['name'];
}
	else{
		echo '0';
	}

	// if(isset($_SESSION["username"])) {
 //    header("Location:index.php");
 //    }


// if ($result->num_rows > 0) {
// 	while($row = $result->fetch_assoc()) {
// 		echo "1";
// 	}
// } else {
// 	echo "0";
// }

?>