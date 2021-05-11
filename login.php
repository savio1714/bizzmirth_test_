
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <title>Bizzmirth Holidays</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/fav.ico">
    <!-- <link rel="shortcut icon" type="image/x-icon" href="images/logo1.png"> -->
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
    <style type="text/css">
         #preview img{
     display: none;
   }
         /*.preview{
        }
     width: 100px;
     height: 100px;
     border: 1px solid black;
     margin: 0 auto;
     background: white;
   }*/
    </style>
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
                                    <input type="email" class="form-control" id="username" placeholder="Enter username or email id" value="<?php if(isset($_COOKIE['user2'])){echo $_COOKIE['user2'];}?>" >
                                </div>
                                <div class="form-group col-xs-12">
                                    <label>Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="Enter correct password" value="<?php if(isset($_COOKIE['pass'])){echo $_COOKIE['pass'];}?>" >
                                </div>
                                <div class="col-xs-12">
                                    <div class="checkbox-outer">
                                        <input type="checkbox" name="remember_me" id="remember_me"  <?php if(isset($_COOKIE['user2'])){echo 'checked';}?>>
                                        <label>Remember Me?</label> 
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
                                    <label class="custom-file">Profile Picture: </label><br>
                                    <!-- <input type="file" id="id_proof" class="custom-file-input"> -->
                                    <div class="col-md-5 col-sm-5 ">
                                    <input type="file" id="file2" name="file2" />
                                  </div>
                                 
                                  <div class="col-md-3 col-sm-3 ">  <input type="hidden" name="profile_pic" id="profile_pic" disabled></div>
                                   <div class='preview col-md-4 col-sm-12' id="preview">
                                    <img src="" id="img2" width="100" height="100" align="right" alt="Profile Image">
                                  </div>
                                   
                                </div>
                                <div class="form-group col-xs-12">
                                    <label>Firstname:</label>
                                    <input type="text" class="form-control" id="fname" placeholder="Enter First Name">
                                </div>
                               <!--  <div class="form-group col-xs-12">
                                    <label>Middlename:</label>
                                    <input type="text" class="form-control" id="mname" placeholder="Enter Middle Name">
                                </div> -->
                                 <div class="form-group col-xs-12">
                                    <label>Lastname:</label>
                                    <input type="text" class="form-control" id="lname" placeholder="Enter Last Name">
                                </div>
                                <div class="form-group col-xs-12">
                                    <label>Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="abc@xyz.com">
                                </div>
                                <div class="form-group col-xs-12">
                                    <label>Phone Number:</label>
                                    <input type="text" class="form-control" id="phone_no" placeholder="Phone Number">
                                </div>
                                <div class="form-group col-xs-12">
                                    <label>Gender:</label>
                                    <div class="form-check form-check-inline">
                                        <div class="form-group col-xs-3">
                                      <input type="radio" name="gender" class="form-check-input gender" value="male"> 
                                      <label class="form-check-label" for="male">Male</label>
                                      </div>
                                      <div class="form-group col-xs-3">
                                         <input type="radio"  class="form-check-input gender" name="gender" value="female">
                                          <label class="form-check-label" for="female">Female</label>
                                      </div>
                                      <div class="form-group col-xs-3">
                                          <input type="radio"  class="form-check-input gender" name="gender" value="others">
                                          <label class="form-check-label" for="others">Others</label>
                                      </div>
                                    </div>
                                  
                                </div>
                                <div class="form-group col-xs-12">
                                    <label>Age:</label>
                                    <input type="text" class="form-control" id="age" placeholder="Enter Age">
                                </div>
                                 <div class="form-group col-xs-12">
                                    <label>Date of Birth:</label>
                                    <input class="form-control" type="date" id="bdate">
                                </div>
                                <div class="form-group col-xs-12">
                                    <label class="custom-file">PAN / Aadhar Card: </label><br>
                                    <!-- <input type="file" id="id_proof" class="custom-file-input"> -->
                                    <div class="col-md-3 col-sm-3 ">
                                    <input type="file" id="file" name="file" />
                                  </div>
                                 <!--  <div class='preview col-md-2'>
                                    <img src="" id="img" width="100" height="100" align="right">
                                  </div> -->
                                  <div class="col-md-6 col-sm-6 ">  <input type="hidden" name="id_proof" id="id_proof" disabled></div>
                                   
                                </div>
                                <!-- <div class="form-group col-xs-6">
                                    <label>Select Password :</label>
                                    <input type="password" class="form-control" id="date" placeholder="Enter Password">
                                </div>
                                <div class="form-group col-xs-6 col-left-padding">
                                    <label>Confirm Password :</label>
                                    <input type="password" class="form-control" id="phnumber" placeholder="Re-enter Password">
                                </div> -->
                                <div class="col-xs-12">
                                    <div class="checkbox-outer">
                                        <input type="checkbox" name="vehicle2" value="Car"> I agree to the <a href="#">terms and conditions.</a>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="comment-btn">
                                        <a href="#" id="register" class="btn-blue btn-red">Register Now</a>
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
    <script src="assets/js/register.js"></script>
    <script src="assets/js/upload_file.js"></script>

</body>
</html>