 <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12">
                    <ul>
                        <li><img src="../images/placeholder.jpg" alt="">
                        </li>
                        <li>
                            <h5><?php echo  $_SESSION["username"]; ?> <span> CEO</span></h5>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <!--== LEFT MENU ==-->
                <div class="sb2-13">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="../index2.php" class="<?php echo (basename($_SERVER['PHP_SELF'])=='index2.php')? 'menu-active':''?>"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
                        </li>
                        <li><a href="../travel_agent/travel_agent.php" class="<?php echo (basename($_SERVER['PHP_SELF'])=='travel_agent.php')? 'menu-active':''?>"><i class="fa fa-user" aria-hidden="true"></i> Travel Agent</a>
                        </li>
                        <li><a href="../franchisee/franchisee.php" class="<?php echo (basename($_SERVER['PHP_SELF'])=='franchisee.php')? 'menu-active':''?>"><i class="fa fa-user" aria-hidden="true"></i> Franchisee</a>
                        </li>
                        
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Customer</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='b2c.php')? 'menu-active':''?>" href="../customer/b2c.php">B2C</a>
                                    </li>
                                    <li><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='travel_agent_customer.php')? 'menu-active':''?>" href="../customer/travel_agent_customer.php">Travel Agent Customer</a>
                                    </li>
                                    <!-- <li><a href="../customer/b2c_test.php">B2C test</a>
                                    </li> -->
                                    
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Package</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='add_new_packages.php')? 'menu-active':''?>" href="../packages/add_new_packages.php">Add New Packages</a>
                                    </li>
                                    <li><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='all_packages.php')? 'menu-active':''?>" href="../packages/all_packages.php">All Packages</a>
                                    </li>
                                    <!-- <li><a href="../customer/b2c_test.php">B2C test</a>
                                    </li> -->
                                    
                                </ul>
                            </div>
                        </li>
                        <li><a href="../logout.php"><i class="fa fa-bar-chart" aria-hidden="true"></i> Logout</a>
                        </li>
                      <!--  <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-umbrella" aria-hidden="true"></i> Tour Packages</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="package-all.html">All Packages</a>
                                    </li>
                                    <li><a href="package-add.html">Add New Package</a>
                                    </li>
                                    <li><a href="package-cat-all.html">All Package Categories</a>
                                    </li>
                                    <li><a href="package-cat-add.html">Add Package Categories</a>
                                    </li>
                                </ul>
                            </div>
                        </li> -->
                        <!--  <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-h-square" aria-hidden="true"></i> Hotels</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="hotel-all.html">All Hotels</a>
                                    </li>
                                    <li><a href="hotel-add.html">Add New Hotel</a>
                                    </li>
                                    <li><a href="hotel-room-type-all.html">Room Type</a>
                                    </li>
                                    <li><a href="hotel-room-type-add.html">Add Room Type</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-picture-o" aria-hidden="true"></i> Sight Seeings</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="sight-see-all.html">All Sight Seeings</a>
                                    </li>
                                    <li><a href="sight-see-add.html">Add New Sight Seeing</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-calendar-o" aria-hidden="true"></i> Events</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="event-all.html">All Events</a>
                                    </li>
                                    <li><a href="event-add.html">Add New Event</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-braille" aria-hidden="true"></i> Ui-Kits</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="ui-form.html">ui-form</a>
                                    </li>
                                    <li><a href="ui-kit.html">ui-kit</a>
                                    </li>
                                    <li><a href="ui-table.html">ui-table</a>
                                    </li>
                                    <li><a href="ui-pre-load.html">ui-pre-load</a>
                                    </li>
                                    <li><a href="ui-tab.html">ui-tab</a>
                                    </li>
                                    <li><a href="ui-icons.html">ui-icons</a>
                                    </li>
                                    <li><a href="ui-collapsible.html">ui-collapsible</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-usd" aria-hidden="true"></i> Discounts</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="discount.html">All Discounts</a>
                                    </li>
                                    <li><a href="discount-add.html">Add New Discounts</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-tags" aria-hidden="true"></i> Offers</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="offers.html">All Offers</a>
                                    </li>
                                    <li><a href="offers-add.html">Add New Offers</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-ticket" aria-hidden="true"></i> Booking & Enquiry</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="hotel-booking-all.html">Hotel</a>
                                    </li>
                                    <li><a href="package-booking-all.html">Package</a>
                                    </li>
                                    <li><a href="sight-see-booking-all.html">Sight Seeings</a>
                                    </li>
                                    <li><a href="event-booking-all.html">Events</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-rss" aria-hidden="true"></i> Blog & Articals</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="blog-all.html">All Blogs</a>
                                    </li>
                                    <li><a href="blog-add.html">Add Blog</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="social-media.html"><i class="fa fa-plus-square-o" aria-hidden="true"></i> Social Media</a>
                        </li>
                        <li><a href="login.html" target="_blank"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                        </li> -->
                    </ul>
                </div>
            </div>