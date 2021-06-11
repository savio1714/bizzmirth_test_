 <div class="dashboard-nav">
                <div class="dashboard-nav-inner">
                    <ul>
                        <li class="<?php echo (basename($_SERVER['PHP_SELF'])=='index.php')? 'active':''?>"><a href="index.php"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
                        <?php if($_SESSION["user_type_id"] =='3'){
                                         echo '<li class="'; echo (basename($_SERVER['PHP_SELF'])=='add_customer.php')? 'active':''; echo '">';
                                       echo '<a href="add_customer.php"><i class="sl sl-icon-user"></i> Add Customer</a></li>' ;
                                    }
                                    ?>
                        
                        <li class="<?php echo (basename($_SERVER['PHP_SELF'])=='dashboard_my_profile.php')? 'active':''?>"><a href="dashboard_my_profile.php"><i class="sl sl-icon-user"></i> Edit Profile</a></li>
                        <li class="<?php echo (basename($_SERVER['PHP_SELF'])=='mytrips.php')? 'active':''?>"><a href="mytrips.php"><i class="sl sl-icon-folder"></i>My Trips</a></li>
                        <li class="<?php echo (basename($_SERVER['PHP_SELF'])=='offers.php')? 'active':''?>"><a href="offers.php"><i class="sl sl-icon-plus"></i>Offers</a></li>
                        <!-- <li><a href="dashboard-addtour.html"><i class="sl sl-icon-plus"></i> Add Tour</a></li>
                        <li> 
                            <a><i class="sl sl-icon-layers"></i> Tour Listing</a>
                            <ul>
                                <li><a href="dashboard-list.html">Active <span class="nav-tag green">6</span></a></li>
                                <li><a href="dashboard-list.html">Pending <span class="nav-tag yellow">1</span></a></li>
                                <li><a href="dashboard-list.html">Expired <span class="nav-tag red">2</span></a></li>
                            </ul>   
                        </li>
                        <li><a href="dashboard-booking.html"><i class="sl sl-icon-list"></i> Booking List</a></li>
                        <li><a href="dashboard-history.html"><i class="sl sl-icon-folder"></i> History</a></li>
                        <li><a href="dashboard-reviews.html"><i class="sl sl-icon-star"></i> Reviews</a></li> -->
                        <li><a href="../login.php" class="mylogout"><i class="sl sl-icon-power"></i> Logout</a></li>
                    </ul>
                </div>
            </div>