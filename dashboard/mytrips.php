<?php
session_start();
if(!isset($_SESSION['username2'])){
    echo '<script>location.href = "../login.php";</script>';
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Trips | Bizzmirth Holidays</title>
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
                    <div class="col-lg-12 col-md-12 col-xs-12">
                        <div class="dashboard-list-box">
                            <h4 class="gray">All Bookings</h4>
                            <div class="table-box">
                            <table class="basic-table booking-table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Booking ID</th>
                                        <th>Destination</th>
                                        <th>No of Tickets</th>
                                        <th>Payment</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Ricky Ponting</td>
                                        <td>2019/01/18</td>
                                        <td class="t-id">C253</td>
                                        <td>Greece - Zakynthos</td>
                                        <td>7</td>
                                        <td><span class="paid t-box">Paid</span></td>
                                        <td><span class="cancel t-box">Cancelled</span></td>
                                        <td>
                                            <a href="#" class="button gray"><i class="sl sl-icon-pencil"></i></a>
                                            <a href="#" class="button gray"><i class="sl sl-icon-close"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Micheal</td>
                                        <td>2019/01/18</td>
                                        <td class="t-id">C023</td>
                                        <td>Bulgary - Sunny Beach</td>
                                        <td>2</td>
                                        <td><span class="unpaid t-box">Unpaid</span></td>
                                        <td><span class="approved t-box">Approved</span></td>
                                        <td>
                                            <a href="#" class="button gray"><i class="sl sl-icon-pencil"></i></a>
                                            <a href="#" class="button gray"><i class="sl sl-icon-close"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jim Morrison</td>
                                        <td>2019/01/18</td>
                                        <td class="t-id">E453</td>
                                        <td>Washington</td>
                                        <td>11</td>
                                        <td><span class="paid t-box">Paid</span></td>
                                        <td><span class="pending t-box">Pending</span></td>
                                        <td>
                                            <a href="#" class="button gray"><i class="sl sl-icon-pencil"></i></a>
                                            <a href="#" class="button gray"><i class="sl sl-icon-close"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Michelle</td>
                                        <td>2019/01/18</td>
                                        <td class="t-id">C253</td>
                                        <td>Tokyo, Japan</td>
                                        <td>3</td>
                                        <td><span class="paid t-box">Paid</span></td>
                                        <td><span class="pending t-box">Pending</span></td>
                                        <td>
                                            <a href="#" class="button gray"><i class="sl sl-icon-pencil"></i></a>
                                            <a href="#" class="button gray"><i class="sl sl-icon-close"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ricky Ponting</td>
                                        <td>2019/01/18</td>
                                        <td class="t-id">C253</td>
                                        <td>Brussels</td>
                                        <td>7</td>
                                        <td><span class="unpaid t-box">Unpaid</span></td>
                                        <td><span class="pending t-box">Pending</span></td>
                                        <td>
                                            <a href="#" class="button gray"><i class="sl sl-icon-pencil"></i></a>
                                            <a href="#" class="button gray"><i class="sl sl-icon-close"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ricky Ponting</td>
                                        <td>2019/01/18</td>
                                        <td class="t-id">C253</td>
                                        <td>Greece - Zakynthos</td>
                                        <td>7</td>
                                        <td><span class="paid t-box">Paid</span></td>
                                        <td><span class="cancel t-box">Cancelled</span></td>
                                        <td>
                                            <a href="#" class="button gray"><i class="sl sl-icon-pencil"></i></a>
                                            <a href="#" class="button gray"><i class="sl sl-icon-close"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Micheal</td>
                                        <td>2019/01/18</td>
                                        <td class="t-id">C023</td>
                                        <td>Bulgary - Sunny Beach</td>
                                        <td>2</td>
                                        <td><span class="unpaid t-box">Unpaid</span></td>
                                        <td><span class="approved t-box">Approved</span></td>
                                        <td>
                                            <a href="#" class="button gray"><i class="sl sl-icon-pencil"></i></a>
                                            <a href="#" class="button gray"><i class="sl sl-icon-close"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jim Morrison</td>
                                        <td>2019/01/18</td>
                                        <td class="t-id">E453</td>
                                        <td>Washington</td>
                                        <td>11</td>
                                        <td><span class="paid t-box">Paid</span></td>
                                        <td><span class="pending t-box">Pending</span></td>
                                        <td>
                                            <a href="#" class="button gray"><i class="sl sl-icon-pencil"></i></a>
                                            <a href="#" class="button gray"><i class="sl sl-icon-close"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Michelle</td>
                                        <td>2019/01/18</td>
                                        <td class="t-id">C253</td>
                                        <td>Tokyo, Japan</td>
                                        <td>3</td>
                                        <td><span class="paid t-box">Paid</span></td>
                                        <td><span class="pending t-box">Pending</span></td>
                                        <td>
                                            <a href="#" class="button gray"><i class="sl sl-icon-pencil"></i></a>
                                            <a href="#" class="button gray"><i class="sl sl-icon-close"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ricky Ponting</td>
                                        <td>2019/01/18</td>
                                        <td class="t-id">C253</td>
                                        <td>Brussels</td>
                                        <td>7</td>
                                        <td><span class="unpaid t-box">Unpaid</span></td>
                                        <td><span class="pending t-box">Pending</span></td>
                                        <td>
                                            <a href="#" class="button gray"><i class="sl sl-icon-pencil"></i></a>
                                            <a href="#" class="button gray"><i class="sl sl-icon-close"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
                        <div class="pagination-container">
                            <nav class="pagination">
                                <ul>
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
</body>
</html>