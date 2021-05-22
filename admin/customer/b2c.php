<?php
session_start();

if(!isset($_SESSION['username'])){
    echo '<script>location.href = "../index.php";</script>';
}


require '../connect.php';
$stmt = $conn->prepare("SELECT count(id) as pending_record FROM users_details where status='2' ");
$stmt->execute();

                                                   
$stmt->setFetchMode(PDO::FETCH_ASSOC);
    if($stmt->rowCount()>0){
    foreach (($stmt->fetchAll()) as $key => $row) {
        $pending_record= $row['pending_record'];
    }
                                                          
     }
    else{
        $pending_record=0;
    }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bizzmirth Holidays</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="../images/fav.ico">

    <!-- GOOGLE FONTS -->
    <link href="../../../../../fonts.googleapis.com/cssbcc5.css?family=Open+Sans:300,400,600|Quicksand:300,400,500" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/mob.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/materialize.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!--== MAIN CONTRAINER ==-->
<?php include '../header2.php';?>

    <!--== BODY CONTNAINER ==-->
    
        <?php include '../sidebar2.php';?>
           
            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> B2C</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12" style="padding: 0 0 30% 0;">
                            <div class="box-inn-sp" >
                                
                                <div class="tab-inn" >
                                    <ul class="collapsible" data-collapsible="accordion">
                                        <li>
                                            <div class="collapsible-header coll-head"><i class="material-icons dp48">view_list</i>Pending Customer <span class="badge badge-danger" style="color:white;background: #F44336; "><?php echo $pending_record ;?></span></div>
                                            <div class="collapsible-body coll-body"><span>
                                                <a href="../customer/pending_customer.php" class="waves-effect waves-light btn-large">Preview</a>
                                            </span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="collapsible-header coll-head"><i class="material-icons dp48">view_list</i>Registered Customer</div>
                                            <div class="collapsible-body coll-body"><span>
                                                 <a href="../customer/registered_customer.php" class="waves-effect waves-light btn-large">Preview</a>
                                            </span>
                                            </div>
                                        </li>
                                        
                                    </ul>
                          <!-- <div class="row">
                                        <div class="col-md-6 col-sm-6 "style="padding: 15% 10%;" > 
                                            <a href="../customer/pending_customer.php" class="waves-effect waves-light btn-large">Pending Customer
                                                <span class="badge badge-danger" style="margin-top: -38px;
                                                color: white;margin-left: 230px;background: #F44336; "><?php echo $pending_record ;?></span></a>
                                        </div>
                                        <div class="col-md-6 col-sm-6 "style="padding: 15% 8%;margin: 0 auto; "> 

                                   <a href="../customer/registered_customer.php" class="waves-effect waves-light btn-large">Register Customer</a>
                                        </div>
                                            
                                        </div>  --> 

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--== BOTTOM FLOAT ICON ==-->
    <!-- <section>
        <div class="fixed-action-btn vertical">
            <a class="btn-floating btn-large red pulse">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a>
                </li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a>
                </li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a>
                </li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a>
                </li>
            </ul>
        </div>
    </section> -->

    <!--======== SCRIPT FILES =========-->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/materialize.min.js"></script>
    <script src="../js/custom.js"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/travelz/admin/user-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 08:21:19 GMT -->
</html>