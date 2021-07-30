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
                            <h5><?php echo  $_SESSION["username"]; ?> <span> </span></h5>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <!--== LEFT MENU ==-->
                <div class="sb2-13">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="../index.php" class="<?php echo (basename($_SERVER['PHP_SELF'])=='index.php')? 'menu-active':''?>"><i class="fa fa-bar-chart" aria-hidden="true"></i>Dashboard</a>
                        </li>
                         <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i>Employee</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='regional_manager.php')? 'menu-active':''?>" href="../employee/regional_manager.php">Regional Manager</a>
                                    </li>
                                    <li><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='branch_manager.php')? 'menu-active':''?>" href="../employee/branch_manager.php">Branch Manager</a>
                                    </li>
                                    <li><a class="<?php echo (basename($_SERVER['PHP_SELF'])=='sales_manager.php')? 'menu-active':''?>" href="../employee/sales_manager.php">Sales Manager</a>
                                    </li>
                                    
                                     
                                    
                                </ul>
                            </div>
                        </li>
                        <li><a href="../franchisee/franchisee.php" class="<?php echo (basename($_SERVER['PHP_SELF'])=='franchisee.php')? 'menu-active':''?>"><i class="fa fa-user" aria-hidden="true"></i> Franchisee</a>
                        </li>
                        <li><a href="../travel_agent/travel_agent.php" class="<?php echo (basename($_SERVER['PHP_SELF'])=='travel_agent.php')? 'menu-active':''?>"><i class="fa fa-user" aria-hidden="true"></i>Travel Agent</a>
                        </li>
                        
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i>Customer</a>
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
                        <li><a href="../category/manage_categories.php" class="<?php echo (basename($_SERVER['PHP_SELF'])=='manage_categories.php')? 'menu-active':''?>"><i class="fa fa-list-alt" aria-hidden="true"></i>Category</a>
                        </li>
                      
                        <li><a href="../packages/all_packages.php" class="<?php echo (basename($_SERVER['PHP_SELF'])=='all_packages.php')? 'menu-active':''?>"><i class="fa fa-plane" aria-hidden="true"></i>Packages</a>
                        </li>
                        
                        <li><a href="../logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                        </li>
                     
                    </ul>
                </div>
            </div>