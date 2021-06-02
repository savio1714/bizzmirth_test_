<?php
require '../connect.php';

if(!empty($_POST["phone"])){ 
    // Fetch city data based on the specific state

    $stmt2 = $conn->prepare("SELECT * FROM customer WHERE contact_no = '".$_POST['phone']."'");
    $stmt2->execute();                                                                                   
    $stmt2->setFetchMode(PDO::FETCH_ASSOC);
     
    // Generate HTML of city options list

     if($stmt2->rowCount()>0){
        	echo 1;
   
    }else{
        echo 0;
    }
}

?>