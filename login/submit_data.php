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
		$_SESSION["type"] = $row['type'];

	if ($_SESSION["type"] =='customer' || $_SESSION["type"]== 'consultant'){
		echo '1';
	}else{
		echo '0';
	}
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