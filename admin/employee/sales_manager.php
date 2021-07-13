<?php
session_start();

if(!isset($_SESSION['username'])){
    echo '<script>location.href = "../index.php";</script>';
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/travelz/admin/user-all.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 08:21:19 GMT -->
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
<?php include '../sidebar2.php';?>
    
    <!--== BODY CONTNAINER ==-->
<!--       <div class="container-fluid sb2">
        <div class="row"> -->
      <?php include '../header2.php';?>

            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Sales Manager</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Sales Manager</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                    <ul id="dr-users" class="dropdown-content">
                                        <li><a href="add_sm.php">Add New</a>
                                        </li>
                                        <li><a href="user-edit.html">Edit</a>
                                        </li>
                                        <li><a href="#!">Update</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#!"><i class="material-icons">delete</i>Delete</a>
                                        </li>
                                        <li><a href="user-view.html"><i class="material-icons">subject</i>View All</a>
                                        </li>
                                    </ul>

                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Employee No.</th>
                                                    <th>Name</th>
                                                    <th>Password</th>
                                                    <th>Email ID</th>
                                                    <th>Head Office Employee</th>
                                                    <th>Zone Name</th>
                                                    <th>Region Name</th>
                                                    <th>Designation</th>
                                                    <th>Is Approved</th>
                                                    <th>Active</th>
                                                    <th>Edit</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1001</td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>abc123</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>India</td>
                                                    <td>Goa</td>
                                                    <td>Sales Manager</td>
                                                    <td>
                                                        <span class="label label-primary">Approved</span>
                                                    </td>
                                                    <td> Active
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>1001</td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>abc123</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>India</td>
                                                    <td>Goa</td>
                                                    <td>Sales Manager</td>
                                                    <td>
                                                        <span class="label label-primary">Approved</span>
                                                    </td>
                                                    <td> Active
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>1001</td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>abc123</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>India</td>
                                                    <td>Goa</td>
                                                    <td>Sales Manager</td>
                                                    <td>
                                                        <span class="label label-primary">Approved</span>
                                                    </td>
                                                    <td> Active
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    
                                                </tr>
                                               <tr>
                                                    <td>1001</td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>abc123</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>India</td>
                                                    <td>Goa</td>
                                                    <td>Sales Manager</td>
                                                    <td>
                                                        <span class="label label-primary">Approved</span>
                                                    </td>
                                                    <td> Active
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>1001</td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>abc123</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>India</td>
                                                    <td>Goa</td>
                                                    <td>Sales Manager</td>
                                                    <td>
                                                        <span class="label label-primary">Approved</span>
                                                    </td>
                                                    <td> Active
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    
                                                </tr>
                                               <tr>
                                                    <td>1001</td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>abc123</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>India</td>
                                                    <td>Goa</td>
                                                    <td>Sales Manager</td>
                                                    <td>
                                                        <span class="label label-primary">Approved</span>
                                                    </td>
                                                    <td> Active
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>1001</td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>abc123</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>India</td>
                                                    <td>Goa</td>
                                                    <td>Sales Manager</td>
                                                    <td>
                                                        <span class="label label-primary">Approved</span>
                                                    </td>
                                                    <td> Active
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>1001</td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>abc123</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>India</td>
                                                    <td>Goa</td>
                                                    <td>Sales Manager</td>
                                                    <td>
                                                        <span class="label label-primary">Approved</span>
                                                    </td>
                                                    <td> Active
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    
                                                </tr>
                                               <tr>
                                                    <td>1001</td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>abc123</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>India</td>
                                                    <td>Goa</td>
                                                    <td>Sales Manager</td>
                                                    <td>
                                                        <span class="label label-primary">Approved</span>
                                                    </td>
                                                    <td> Active
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    
                                                </tr>
                                                <tr>
                                                    <td>1001</td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>abc123</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>India</td>
                                                    <td>Goa</td>
                                                    <td>Sales Manager</td>
                                                    <td>
                                                        <span class="label label-primary">Approved</span>
                                                    </td>
                                                    <td> Active
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    
                                                </tr>
                                               <tr>
                                                    <td>1001</td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha Hogan</span><span class="list-enq-city">Illunois, United States</span></a>
                                                    </td>
                                                    <td>abc123</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>Australia</td>
                                                    <td>India</td>
                                                    <td>Goa</td>
                                                    <td>Sales Manager</td>
                                                    <td>
                                                        <span class="label label-primary">Approved</span>
                                                    </td>
                                                    <td> Active
                                                    </td>
                                                    <td>
                                                        <a href="user-edit.html"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>
                                                    
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
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


<!-- Mirrored from rn53themes.net/themes/demo/travelz/admin/user-all.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 08:21:20 GMT -->
</html>