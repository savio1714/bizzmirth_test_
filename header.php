
    <!-- Header -->
    <header class="head-style-1">
        <div class="upper-head clearfix">
            <div class="container">
                <div class="upper-head-inner">
                    <div class="contact-info pull-left">
                        <div class="contact-info-item"><i class="flaticon-phone-call"></i><p> Phone: <span>0832 2438500</span></p></div>
                        <i class="flaticon-mail"></i><p> Mail: <span>support@bizzmirth.com</span></p>
                    </div>
                    <div class="login-btn pull-right">
                        <?php if(isset($_SESSION['username2'])){echo ' <a href="dashboard/" ><i class="fa fa-user-plus"></i> Dashboard</a>
                        <a href="login.php" class="my2logout"><i class="fa fa-user-plus mylogout"></i> Logout</a>';
                    }else { echo '
                        <a class="active" href="login.php" ><i class="fa fa-unlock-alt "></i> Login / Register</a>';}?>
                       
                        <!-- <a href="login.php"><i class="fa fa-user-plus"></i> Register</a> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation Bar -->
        <div class="navigation head-style-1">  
            <div class="container">
                <div class="navigation-content">
                    <div class="header_menu">
                        <!-- start Navbar (Header) -->
                    <nav class="navbar navbar-default navbar-sticky-function navbar-arrow">
                        <div class="logo pull-left">
                            <a href="index.html"><img alt="Image" src="images/bizzmirth.png" class="colorlogo"></a>
                            <a href="index.html"><img alt="image" src="images/bizzmirth.png" class="whitelogo"></a>
                        </div>
                        <div id="navbar" class="navbar-nav-wrapper">
                            <ul class="nav navbar-nav" id="responsive-menu">
                                <li class="<?php echo (basename($_SERVER['PHP_SELF'])=='index.php')? 'active':''?>"> <a href="index.php"> Home </a>
                                </li>
                                <li class="<?php echo (basename($_SERVER['PHP_SELF'])=='about.php')? 'active':''?>"> <a href="about.php"> About us </a></li>
                                  <li class="<?php echo (basename($_SERVER['PHP_SELF'])=='contactus.php')? 'active':''?>"> <a href="contactus.php"> Contact us </a></li>
                              
                            </ul>
                        </div><!--/.nav-collapse -->
                        <div id="slicknav-mobile"></div>
                    </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navigation Bar Ends -->

    </header>
    <!-- Header Ends -->