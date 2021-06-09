<?php
session_start();
if(!isset($_SESSION['username2'])){
    echo '<script>location.href = "../login.php";</script>';
}



require '../connect.php';

$user_type =$_SESSION["user_type_id"];
$user_id =$_SESSION["user_id"];


if ($user_type =='2'){

     $stmt = $conn->prepare("SELECT * FROM customer where cust_id='".$user_id."'");
    $stmt->execute();
     // set the resulting array to associative
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    if($stmt->rowCount()>0){
    foreach (($stmt->fetchAll()) as $key => $row) {

        $firstname=$row['firstname'];
        // $username=$row['username'];
        $lastname=$row['lastname'];
        $email=$row['email'];
        $country_code=$row['country_code'];
        $contact_no=$row['contact_no'];
        $date_of_birth=$row['date_of_birth'];
        $gender=$row['gender'];
        $address=$row['address'];
        $profile_pic=$row['profile_pic'];
        $age=$row['age'];
        $pincode=$row['pincode'];


        $country = $row['country'];
        $state = $row['state'];
        $city = $row['city'];


        $stmt2 = $conn->prepare("SELECT country_name,(select state_name from states where id = '".$state."') as statename, (select city_name from cities where id = '".$city."') as city_name FROM countries where id = '".$country."'");
        $stmt2->execute();

        $stmt2->setFetchMode(PDO::FETCH_ASSOC);

        if($stmt2->rowCount()>0){
        foreach (($stmt2->fetchAll()) as $key2 => $row2) {
            $city_name=$row2['city_name'];
            $statename=$row2['statename'];
            $countryname=$row2['countryname'];
        }
        }                                                      
        else{
                                                                
        }






 
    }
    }                                                      
    else{
                                                            
    }

}


if ($user_type =='3'){

     $stmt = $conn->prepare("SELECT * FROM travel_agent where travel_agent_id='".$user_id."'");
    $stmt->execute();
     // set the resulting array to associative
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    if($stmt->rowCount()>0){
    foreach (($stmt->fetchAll()) as $key => $row) {

        $firstname=$row['firstname'];
        // $username=$row['username'];
        $lastname=$row['lastname'];
        $email=$row['email'];
        // $country_code=$row['country_code'];
        $contact_no=$row['contact_no'];
        $date_of_birth=$row['date_of_birth'];
        $gender=$row['gender'];
        $address=$row['address'];
        $profile_pic=$row['profile_pic'];
        $pincode=$row['pincode'];
        // $age=$row['age'];


        $country = $row['country'];
        $state = $row['state'];
        $city = $row['city'];


        $stmt2 = $conn->prepare("SELECT country_name,(select state_name from states where id = '".$state."') as statename, (select city_name from cities where id = '".$city."') as city_name FROM countries where id = '".$country."'");
        $stmt2->execute();

        $stmt2->setFetchMode(PDO::FETCH_ASSOC);

        if($stmt2->rowCount()>0){
        foreach (($stmt2->fetchAll()) as $key2 => $row2) {
            $city_name=$row2['city_name'];
            $statename=$row2['statename'];
            $countryname=$row2['country_name'];
        }
        }                                                      
        else{
                                                                
        }


        
 
    }
    }                                                      
    else{
                                                            
    }

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
                                    
                                    <?php if($user_type =='2'){
                                        echo'<img id="img2" src="../'.$profile_pic.'" alt="">';
                                    }else if($user_type =='3'){
                                        echo'<img id="img2" src="../'.$profile_pic.'" alt="">';
                                    }else{
                                        echo'<img src="" alt="noProfile">';
                                    }
                                    ?>
                                    <input type="hidden" name="profile_pic" id="profile_pic" disabled>

                                   <!--  <input type="file" id="file2" name="file2" /> -->

                                    <div class="change-photo-btn">
                                        <div class="photoUpload">
                                            <span><i class="fa fa-upload"></i> Upload Photo</span>
                                            <input type="file" id="file2" name="file2" class="upload" />
                                        </div>

                                    </div>

                                </div>
                                
            
                                <!-- Details -->
                                <div class="my-profile">

                                    <label>First Name</label>
                                    <input  type="text" value="<?php echo $firstname;?>">

                                    <label>Last Name</label>
                                    <input  type="text" value="<?php echo $lastname;?>">

                                    <label>Phone Number</label>
                                    <input  type="text" value="<?php echo $contact_no;?>">

                                    <label>Email Address</label>
                                    <input type="text" value="<?php echo $email;?>">

                                     <label>Gender</label>
                                <div class="" >

                                    <input id="check-a" type="radio" name="check" value="male" <?php if ($gender == 'male'){echo ' checked ';} ?>>
                                    <label style="display: inline-block;" for="check-a" >Male</label>

                                    <input id="check-b" type="radio" name="check" value="female" <?php if ($gender == 'female'){echo ' checked ';} ?>>
                                    <label  style="display: inline-block;" for="check-b">Female</label>

                                    <input id="check-c" type="radio" name="check" value="others" <?php if ($gender == 'others'){echo ' checked ';} ?>>
                                    <label style="display: inline-block;" for="check-c">Others</label>

                                    
                                </div>

                                <label>Date</label>
                                    <input type="date" value="<?php echo $date_of_birth;?>">

                                    

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

                                        <?php
                                            require '../connect.php';
                                            $stmt = $conn->prepare("SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC");
                                            $stmt->execute();

                                                                                               
                                            $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                            ?>
                                    
                                        <select id="country" class="chosen-select-no-single" >
                                            <option value="<?php echo $country;?>"><?php echo $countryname.' (Already Selected)' ; ?></option>
                                            <?php 
                                            if($stmt->rowCount()>0){
                                                 foreach (($stmt->fetchAll()) as $key => $row) {  
                                                    echo '<option value="'.$row['id'].'">'.$row['country_name'].'</option>'; 
                                                } 
                                            }else{ 
                                                echo '<option value="">Country not available</option>'; 
                                            } 
                                            ?>
                                        </select>

                                    <label>State</label>
                                        <select id="mystate" class="chosen-select-no-single" >
                                             <?php
                                                        require '../connect.php';
                                                        $stmt = $conn->prepare("SELECT * FROM states WHERE country_id = '".$country."' AND status = 1 ORDER BY state_name ASC");
                                                        $stmt->execute();

                                                                                                           
                                                        $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                                        ?>
                                                        
                                                        <option value="<?php echo $state;?>"><?php echo $statename.' (Already Selected)' ; ?></option>
                                                        <?php 
                                                        if($stmt->rowCount()>0){
                                                             foreach (($stmt->fetchAll()) as $key => $row) {  
                                                                echo '<option value="'.$row['id'].'">'.$row['state_name'].'</option>'; 
                                                            } 
                                                        }else{ 
                                                            echo '<option value="">State not available</option>'; 
                                                        } 
                                                        ?>
                                        </select>

                                    <label>City</label>
                                     <select id="city" class="chosen-select-no-single" >
                                             <?php
                                                        require '../connect.php';
                                                        $stmt = $conn->prepare("SELECT * FROM cities WHERE state_id = '".$state."' AND status = 1 ORDER BY city_name ASC");
                                                        $stmt->execute();

                                                                                                           
                                                        $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                                        ?>
                                                        
                                                        <option value="<?php echo $city;?>"><?php echo $city_name.' (Already Selected)' ; ?></option>
                                                        <?php 
                                                        if($stmt->rowCount()>0){
                                                             foreach (($stmt->fetchAll()) as $key => $row) {  
                                                                echo '<option value="'.$row['id'].'">'.$row['city_name'].'</option>'; 
                                                            } 
                                                        }else{ 
                                                            echo '<option value="">City not available</option>'; 
                                                        } 
                                                        ?>
                                            
                                        </select>

                                    <label>Zip Code *</label>
                                    <input type="text" id="pin"  value="<?php echo $pincode;?>" readonly>

                                    <label>Full Address</label>
                                    <textarea><?php echo $address;?></textarea>

                                    
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
    <!-- <script src="../assets/js/upload_file.js"></script> -->
    <script type="text/javascript" src="../logout/logout.js"></script>


    <script type="text/javascript">
    $('#file2').change(function(){

      var fd = new FormData();
      var files = $('#file2')[0].files[0];
      fd.append('file',files);

      $.ajax({
        url: '../upload/upload_profile.php',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(response){
          if(response != 0){
            $("#img2").attr("src","../"+response); 
            $('#profile_pic').val(response);
                    // $("#preview img").show();
                  }else{
                    $('#profile_pic').val('');
                    alert('File not uploaded! '); //"jpg","jpeg","png"
                  }
                },
              });
    });
</script>


<script type="text/javascript">
    $('#country').on('change', function(){

  // alert("ok");
        var countryID = $(this).val();
        // alert(countryID);
        // var state=$('#state').val();
        // alert(state);

        // alert(countryID);
        if(countryID){
            $.ajax({
                type:'POST',
                url:'../registration/countrydata.php',
                data:'country_id='+countryID,
                success:function(htmll){
                    // console.log(htmll);

                    // if(html != ''){
                    //     $('#mystate').html(html);
                    // $('#city').html('<option value="">Select state first</option>'); 

                    // }
                    // alert(getf.a[0]);


                    $('#mystate').html(htmll); 
                    // alert(html);
                    // console.log(html);
                      $('#city').html('<option value="">Select state first</option>'); 

                    
                }
            }); 
        }else{
            $('#mystate').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>'); 
        }
        });
        
        $('#mystate').on('change', function(){
            // alert();
            var stateID = $(this).val();
            if(stateID){
                $.ajax({
                    type:'POST',
                    url:'../registration/countrydata.php',
                    data:'state_id='+stateID,
                    success:function(html){
                        $('#city').html(html);
                       
                    }
                }); 
            }else{
                $('#city').html('<option value="">Select state first</option>'); 
            }
        });

        $('#city').on('change', function(){
            var cityID = $(this).val();
            if(cityID){
                 $.ajax({
                          type:'POST',
                          url:'../registration/pincode.php',
                          data:'city_id='+cityID,
                          success:function(response){
                             // $('#pin').html(response);
                             $('#pin').val(response); 
                          }
                      }); 
            }else{
                $('#city').html('<option value="">Select state first</option>'); 
            }
        });

</script>


</body>
</html>

