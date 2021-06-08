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

    <title>Dashboard Profile | Bizzmirth Holidays</title>
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
            <div class="dashboard-form">
                <div class="row">

                    <!-- Profile -->
                    <div class="col-lg-6 col-md-6 col-xs-12 padding-right-30">
                        <div class="dashboard-list-box">
                            <h4 class="gray">Profile Details</h4>
                            <div class="dashboard-list-box-static">
                                
                                <!-- Avatar -->
                                <div class="edit-profile-photo">
                                    <img src="../images/user-avatar.jpg" alt="">
                                    <div class="change-photo-btn">
                                        <div class="photoUpload">
                                            <span><i class="fa fa-upload"></i> Upload Photo</span>
                                            <input type="file" class="upload" />
                                        </div>

                                    </div>

                                </div>
                                
            
                                <!-- Details -->
                                <div class="my-profile">

                                    <label>First Name</label>
                                    <input value="Tom Perrin" type="text">

                                    <label>Last Name</label>
                                    <input value="Tom Perrin" type="text">

                                    <label>Phone Number</label>
                                    <input value="(123) 123-456" type="text">

                                    <label>Email Address</label>
                                    <input value="tom@example.com" type="text">

                                     <label class="margin-top-30 margin-bottom-10">Amenities <span>(optional)</span></label>
                                <div class="radio in-row margin-bottom-20">

                                    <input id="check-a" type="radio" name="check">
                                    <label for="check-a">Elevator in building</label>

                                    <input id="check-b" type="radio" name="check">
                                    <label for="check-b">Friendly workspace</label>

                                    <input id="check-c" type="radio" name="check">
                                    <label for="check-c">Instant Book</label>

                                    
                                </div>

                                    

                                </div>
            
                                <button class="button">Save Changes</button>

                            </div>
                        </div>
                    </div>

                    <!-- Change Password -->
                    <div class="col-lg-6 col-md-6 col-xs-12 padding-left-30">
                        <div class="dashboard-list-box margin-top-0">
                            <h4 class="gray">Your Address</h4>
                            <div class="dashboard-list-box-static">

                                <!-- Change Password -->
                                <div class="my-profile">
                                    <label class="margin-top-0">Country</label>
                                    
                                        <select class="chosen-select-no-single" >
                                            <option label="blank">Select Category</option>  
                                            <option>Eat & Drink</option>
                                            <option>Shops</option>
                                            <option>Hotels</option>
                                            <option>Restaurants</option>
                                            <option>Fitness</option>
                                            <option>Events</option>
                                        </select>

                                    <label>State</label>
                                        <select class="chosen-select-no-single" >
                                            <option label="blank">Select Category</option>  
                                            <option>Eat & Drink</option>
                                            <option>Shops</option>
                                            <option>Hotels</option>
                                            <option>Restaurants</option>
                                            <option>Fitness</option>
                                            <option>Events</option>
                                        </select>

                                    <label>City</label>
                                     <select class="chosen-select-no-single" >
                                            <option label="blank">Select Category</option>  
                                            <option>Eat & Drink</option>
                                            <option>Shops</option>
                                            <option>Hotels</option>
                                            <option>Restaurants</option>
                                            <option>Fitness</option>
                                            <option>Events</option>
                                        </select>

                                    <label>Zip Code *</label>
                                    <input type="text" readonly>

                                    <label>Full Address</label>
                                    <textarea></textarea>

                                    
                                </div>

                            </div>
                        </div>
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
    <script src="../js/plugin.js"></script>
    <script src="../js/preloader.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/dashboard-custom.js"></script>
    <script src="../js/jpanelmenu.min.js"></script>
    <script src="../js/counterup.min.js"></script>
    <script type="text/javascript" src="../logout/logout.js"></script>
</body>
</html>