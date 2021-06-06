<div class="dashboard-sticky-nav">
                <div class="content-left pull-left">
                    <a href="index.php"><img src="../images/bizzmirth.png" alt="logo"></a>
                </div>
                <!-- <div class="content-right pull-right"> -->
                    <!-- <div class="search-bar">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="search" placeholder="Search Now">
                                <a href="#"><span class="search_btn"><i class="fa fa-search" aria-hidden="true"></i></span></a>
                            </div>
                        </form>
                    </div> -->
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <div class="profile-sec">
                                <div class="dash-image">
                                    <?php
                                        require '../connect.php';

                                       
                                            // Fetch city data based on the specific state

                                            $stmt2 = $conn->prepare("SELECT * FROM customer WHERE cust_id = '".$_SESSION['user_id']."'");
                                            $stmt2->execute();                                                                                   
                                            $stmt2->setFetchMode(PDO::FETCH_ASSOC);
                                             
                                            // Generate HTML of city options list

                                             if($stmt2->rowCount()>0){
                                                foreach (($stmt2->fetchAll()) as $key => $row){
                                                    $profile = $row['profile_pic'];
                                                    echo '<img src="../'.$profile.'" alt="">';
                                                } 
                                                    
                                           
                                            }else{
                                                echo 0;
                                            }
                                        

                                        ?>
                                    
                                </div>
                                <div class="dash-content">
                                    <h4><?php echo $_SESSION['username2']; ?></h4>
                                    <span><?php echo $_SESSION['user_type_name']; ?></span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                             <!-- <li><a href="#"><i class="sl sl-icon-settings"></i>Settings</a></li> -->
                            <li><a href="dashboard_my_profile.php"><i class="sl sl-icon-user"></i>Profile</a></li>
                            <li><a href="changepassword.php"><i class="sl sl-icon-lock"></i>Change Password</a></li>
                            <li><a href="../login.php" class="mylogout"><i class="sl sl-icon-power"></i>Logout</a></li>
                        </ul>
                    </div>
                    <!-- <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <div class="dropdown-item">
                                <i class="sl sl-icon-envelope-open"></i>
                                <span class="notify">3</span>
                            </div>
                        </a>
                        <div class="dropdown-menu notification-menu">
                        <h4> 23 Messages</h4>
                        <ul>
                            <li>
                                <a href="#">
                                    <div class="notification-item">
                                        <div class="notification-image">
                                            <img src="../images/comment.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p><span class="notification-time">2 hours ago</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="notification-item">
                                        <div class="notification-image">
                                            <img src="../images/comment.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p><span class="notification-time">2 hours ago</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="notification-item">
                                        <div class="notification-image">
                                            <img src="../images/comment.jpg" alt="">
                                        </div>
                                        <div class="notification-content">
                                            <p>You have a notification.</p><span class="notification-time">2 hours ago</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <p class="all-noti"><a href="#">See all messages</a></p>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <div class="dropdown-item">
                                <i class="sl sl-icon-bell"></i>
                                <span class="notify">3</span>
                            </div>
                        </a>
                        <div class="dropdown-menu notification-menu">
                            <h4> 599 Notifications</h4>
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="notification-item">
                                            <div class="notification-image">
                                                <img src="../images/comment.jpg" alt="">
                                            </div>
                                            <div class="notification-content">
                                                <p>You have a notification.</p><span class="notification-time">2 hours ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="notification-item">
                                            <div class="notification-image">
                                                <img src="../images/comment.jpg" alt="">
                                            </div>
                                            <div class="notification-content">
                                                <p>You have a notification.</p><span class="notification-time">2 hours ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="notification-item">
                                            <div class="notification-image">
                                                <img src="../images/comment.jpg" alt="">
                                            </div>
                                            <div class="notification-content">
                                                <p>You have a notification.</p><span class="notification-time">2 hours ago</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <p class="all-noti"><a href="#">See all notifications</a></p>
                        </div>
                    </div> -->
                </div>
            </div>  