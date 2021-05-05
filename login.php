<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bizzmirth Holidays</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/logo1.png">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--Custom CSS-->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!--Flaticons CSS-->
    <link href="font/flaticon.css" rel="stylesheet" type="text/css">
    <!--Plugin CSS-->
    <link href="css/plugin.css" rel="stylesheet" type="text/css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>
    <!-- Preloader Ends -->

    <!-- Header -->
  <?php include 'header.php';?>
    <!-- Header Ends -->

    <!-- Navigation Bar -->

    <!-- Navigation Bar Ends -->

    <!-- Breadcrumb -->
    <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Login/Register</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <!-- <li class="breadcrumb-item"><a href="#">Shop</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Login/Register</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->

    <section class="login">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="login-form">
                        <form>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-title">
                                        <h2>Login</h2>
                                        <p>Register if you don't have an account.</p>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12">
                                    <label>Username</label>
                                    <input type="email" class="form-control" id="username" placeholder="Enter username or email id">
                                </div>
                                <div class="form-group col-xs-12">
                                    <label>Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="Enter correct password">
                                </div>
                                <div class="col-xs-12">
                                    <div class="checkbox-outer">
                                        <input type="checkbox" name="remember_me" id="remember_me" value="1"> Remember Me?
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="comment-btn">
                                        <!-- <button id="login" class="btn-blue btn-red">Login</button> -->
                                        <a id="login" class="btn-blue btn-red">Login</a>
                                    </div>
                                </div>
                                <!-- <div class="col-xs-12">
                                    <div class="login-accounts">
                                        <a href="forgot-password.html" class="forgotpw">Forgot Password?</a>
                                        <h3>Login using</h3>
                                        <div class="login-accounts-btn">
                                            <a class="btn-blue" href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
                                            <a class="btn-blue btn-google" href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a>                              
                                            <a class="btn-blue btn-twit" href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="login-form">
                        <form>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-title">
                                        <h2>Register</h2>
                                        <p>Enter your details to be a member.</p>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12">
                                    <label>Name:</label>
                                    <input type="text" class="form-control" id="Name" placeholder="Enter full name">
                                </div>
                                <div class="form-group col-xs-12">
                                    <label>Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="abc@xyz.com">
                                </div>
                                <div class="form-group col-xs-12">
                                    <label>Phone Number:</label>
                                    <input type="text" class="form-control" id="date1" placeholder="Select Date">
                                </div>
                                <div class="form-group col-xs-6">
                                    <label>Select Password :</label>
                                    <input type="password" class="form-control" id="date" placeholder="Enter Password">
                                </div>
                                <div class="form-group col-xs-6 col-left-padding">
                                    <label>Confirm Password :</label>
                                    <input type="password" class="form-control" id="phnumber" placeholder="Re-enter Password">
                                </div>
                                <div class="col-xs-12">
                                    <div class="checkbox-outer">
                                        <input type="checkbox" name="vehicle2" value="Car"> I agree to the <a href="#">terms and conditions.</a>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="comment-btn">
                                        <a href="#" class="btn-blue btn-red">Register Now</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
      <?php include 'footer.php';?>
    <!-- Footer Ends --> 
    <!-- back to top start -->
    <div id="back-to-top">
        <a href="#"></a>
    </div>

    <!-- *Scripts* -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/main.js"></script>
    <script src="js/preloader.js"></script>
    <script src="login/login.js"></script>

</body>
</html>