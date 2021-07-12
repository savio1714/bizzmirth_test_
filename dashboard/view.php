<?php
session_start();
if(!isset($_SESSION['username2']) || !isset($_SESSION['user_type_id_value']) || !isset($_SESSION['user_id']) ){
    echo '<script>location.href = "../login.php";</script>';

}

$user_type =$_SESSION["user_type_id_value"];
$user_id =$_SESSION["user_id"];
$firstname =$_SESSION["username2"];
$lastname =$_SESSION["lname"];


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>View Customer List | Bizzmirth Holidays</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../images/fav.ico">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <!--Flaticons CSS-->
    <link href="../font/flaticon.css" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="../css/plugin.css" rel="stylesheet" type="text/css">
    <!--Dashboard CSS-->
    <link href="../css/dashboard.css" rel="stylesheet" type="text/css">
    <link href="../css/icons.css" rel="stylesheet" type="text/css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->

    <!-- start Container Wrapper -->
    <div id="container-wrapper">
        <!-- Dashboard -->
        <div id="dashboard">

            <!-- Responsive Navigation Trigger -->
            <a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>  
            
            <?php include 'header.php';?>

            <?php include 'sidebar.php';?>

            <div class="dashboard-content">

                                                
                <div class="row">
                    
                    <!-- Listings -->
                    <div class="col-lg-12 col-md-12">
                        <div class="dashboard-list-box">
                            <h4 class="gray">View Customer</h4>
                            <div class="table-box">
                            <table class="basic-table booking-table">
                               <thead>
                                  <tr >
                                    <th scope="col">Customer ID</th>
                                    <th scope="col">Customer Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Phone No.</th>
                                    <!-- <th scope="col">DOB</th> -->
                                    <th scope="col">Date Of Joining</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>

                                     <?php
                                                require '../connect.php';
                                                $srno =1;
                                                $stmt = $conn->prepare("SELECT * FROM customer where user_type='2' and reference_no='".$user_id."' and status='1' order by cust_id");
                                                $stmt->execute();

                                                    // set the resulting array to associative
                                                $stmt->setFetchMode(PDO::FETCH_ASSOC);

                                                if($stmt->rowCount()>0){
                                                    foreach (($stmt->fetchAll()) as $key => $row) {
                                                        $bd= new DateTime($row['date_of_birth']);
                                                        $bdate= $bd->format('d-m-Y');
                                                        $dt= new DateTime($row['register_date']);
                                                        $datev= $dt->format('d-m-Y'); 
                                                        echo ' <tr>
                                                    <th scope="row"> '.$row['cust_id'].'
                                                    </th>
                                                    <td>'.$row['firstname'].' '.$row['lastname'].'
                                                    </td>
                                                    <td>'.$row['address'].'</td>
                                                    <td>+'.$row['country_code'].' '.$row['contact_no'].'</td>
                                                   
                                                    <td>'.$datev.'</td>
                                                    <td>
                                                      <button type="button" onclick=\'editfunc("' .$row["cust_id"]. '","' .$row["country"]. '","' .$row["state"]. '","' .$row["city"]. '")\' class="btn btn-primary">Edit</button>
                                                      
                                                    <button type="button"  onclick=\'deletefunc("' .$row["cust_id"]. '")\' class="btn btn-danger">Delete</button>
                                                    </td>
                                                    
                                                    
                                                </tr>';

                                                $srno++;

                                                    }
                                                      
                                                } 
                                                    else{
                                                        echo '<tr>
                                                    <td colspan="7">No Customer Register By You
                                                    </td>
                                                    <tr>';
                                                    }
              ?>

                                  <!-- <tr>
                                    <th scope="row">1001</th>
                                    <td>Name</td>
                                    <td>Address</td>
                                    <td>Phone no.</td>
                                    <td>DOB</td>
                                    <td>Joining date</td>
                                    <td>
                                      <button type="button" class="btn btn-primary">Edit</button>
                                      
                                    <button type="button" class="btn btn-danger">Delete</button>
                                    </td>
                                  </tr>
                                  <tr>
                                    <th scope="row">1002</th>
                                    <td>Name</td>
                                    <td>Address</td>
                                    <td>Phone no.</td>
                                    <td>DOB</td>
                                    <td>Joining date</td>
                                    <td>
                                      <button type="button" class="btn btn-primary">Edit</button>
                                      
                                    <button type="button" class="btn btn-danger">Delete</button>
                                    </td>
                                  </tr> -->
                                 
       
                                   <!--  <tr>
                                        <td>01/01/2017</td>
                                        <td>U.A.E. - Dubai</td>
                                        <td>$300.00</td>
                                        <td class="textright">
                                            <div class="dropdown">
                                                <button class="button gray dropdown-toggle" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="glyphicon glyphicon-plus"></span>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="">
                                                    <a class="dropdown-item" href="#">Send Email</a>
                                                    <a class="dropdown-item" href="#">Print PDF</a>
                                                    <a class="dropdown-item del" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr> -->
                                   
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <div class="pagination-container">
                            <nav class="pagination">
                                <ul>
                                    <li><a href="#"><i class="sl sl-icon-arrow-left"></i></a></li>
                                    <li><a href="#" class="current-page">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#"><i class="sl sl-icon-arrow-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>                          
                    </div>
                </div>
            </div>


            <!-- Content / End -->
            <!-- Copyrights -->
            <div class="copyrights">
                <p>2021  <i class="fa fa-copyright" aria-hidden="true"></i> Bizzmirth <a href="#" target="_blank"></a></p>
            </div>
        </div>
        <!-- Dashboard / End -->
    </div>
    <!-- end Container Wrapper -->


    <!-- Back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>
    <!-- Back to top ends -->

    <!-- *Scripts* -->
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/preloader.js"></script>
    <script src="../js/plugin.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/dashboard-custom.js"></script>
    <script src="../js/jpanelmenu.min.js"></script>
    <script src="../js/counterup.min.js"></script>
    <script type="text/javascript" src="../logout/logout.js"></script>
    <script type="text/javascript">


    function deletefunc(cust_id)
    { 
    var dataString = 'cust_id='+ cust_id;


      $.ajax({
        type: "POST",
        url: "customer/delete_customer.php",
        data: dataString,
        cache: false,
          success:function(data){
            if(data == 11 ){

            alert("Delete Succesfully");
             window.location.reload();
          }
          else{

          alert("deletion failed");
        }
      }
      });
          
    };


    function editfunc(id,cut,st,ct)
    { 
        window.location.href='edit_customer.php?vkvbvjfgfikix='+id+'&ncy='+cut+'&mst='+st+'&hct='+ct;  
    };


    </script>
</body>
</html>