<?php
require '../connect.php';

$tablename = $_POST["tablename"];
$countrycode = $_POST["countrycode"];
$phoneTenDegit = $_POST["phone"];
$phone=$countrycode."".$phoneTenDegit;

if($tablename == 3 ){
    $tname='travel_agent';

}else if($tablename == 4){
    $tname='franchisee';
}

if((!empty($_POST["countrycode"]))|| (!empty($_POST["phoneTenDegit"]))){ 
    // Fetch city data based on the specific state

    $stmt2 = $conn->prepare("SELECT * FROM ".$tname." WHERE contact_no = '".$phoneTenDegit."' AND country_code = '".$countrycode."'");
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