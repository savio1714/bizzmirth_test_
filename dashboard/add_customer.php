<?php
session_start();
if(!isset($_SESSION['username2'])){
    echo '<script>location.href = "../login.php";</script>';
}


$user_type =$_SESSION["user_type_id"];
$user_id =$_SESSION["user_id"];



?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Customer | Bizzmirth Holidays</title>
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
                            <h4 class="gray">Customer Details</h4>
                            <div class="dashboard-list-box-static">
                                
                                <!-- Avatar -->
                                <div class="edit-profile-photo">
                                    
                                    <img id="img2" src="../images/user_icon.png" alt="">
                                    <input type="hidden" name="profile_pic" id="profile_pic" disabled>

                                   <!--  <input type="file" id="file2" name="file2" /> -->

                                    <div class="change-photo-btn">
                                        <div class="photoUpload">
                                            <span><i class="fa fa-upload"></i> Upload Photo</span>
                                            <input type="file" id="file2" name="file2" class="upload" />
                                        </div>

                                    </div>



                                </div>
                                <div id="profileMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>
                                
            
                                <!-- Details -->
                                <div class="my-profile">

                                    <label>First Name</label>
                                    <input id="fname" type="text" placeholder="Enter First Name">
                                    <div id="fnameMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>

                                    <label>Last Name</label>
                                    <input id="lname"  type="text" placeholder="Enter Last Name">
                                    <div id="lnameMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>

                                    <label>Phone Number</label>
                                    
                                        <div class="col-lg-4 col-md-4">
                                        <?php
                                            require '../connect.php';
                                            $stmt = $conn->prepare("SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC");
                                            $stmt->execute();

                                                                                               
                                            $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                            ?>
                                            <select  id="countrycode">
                                            <option value="">Select</option>
                                            <?php 
                                            if($stmt->rowCount()>0){
                                                 foreach (($stmt->fetchAll()) as $key => $row) {  
                                                    echo '<option value="'.$row['country_code'].'">'.$row['country_code'].'('.$row['sortname'].')</option>'; 
                                                } 
                                            }else{ 
                                                echo '<option value="">No Country Code available</option>'; 
                                            } 
                                            ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-8 col-md-8">
                                             <input id="phone_no" type="text" placeholder="Phone Number">
                                        </div>

                                           
                                    
                                    <div id="phoneMessage" style="display:none;color: #e74c3c;font-size: 85%;">  
                                    </div>


                                    <label>Email Address</label>
                                    <input id="emailvalue" type="text" placeholder="abc@xyz.com">
                                    <div id="emailMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>

                                     <label>Gender</label>
                                <div class="" >

                                    <input id="check-a" type="radio" class="gender" name="gender" value="male">
                                    <label style="display: inline-block;" for="check-a" >Male</label>

                                    <input id="check-b" type="radio" class="gender" name="gender" value="female">
                                    <label  style="display: inline-block;" for="check-b">Female</label>

                                    <input id="check-c" type="radio" class="gender" name="gender" value="others">
                                    <label style="display: inline-block;" for="check-c">Others</label>

                                    
                                </div>
                                <div id="genderMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>

                                <label>Date of Birth</label>
                                    <input type="date" id="bdate" >
                                </div>
                                <div id="dobMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>
            
                                <!-- <button id="#" class="button">Save Changes</button> -->

                            </div>
                        </div>
                    </div>

                    <!-- Change Password -->
                    <div class="col-lg-6 col-md-6 col-xs-12 padding-left-30">
                        <div class="dashboard-list-box margin-top-0">
                            <h4 class="gray">Customer Address</h4>
                            <div class="dashboard-list-box-static">

                                <!-- Change Password -->
                                <div class="my-profile">

                                    <div class="edit-profile-photo">
                                         <img id="img" src="../images/id-proof-line.png" alt="">
                                    
                                    <input type="hidden" name="id_proof" id="id_proof" disabled>

                                   <!--  <input type="file" id="file2" name="file2" /> -->

                                    <div class="change-photo-btn">
                                        <div class="photoUpload">
                                            <span><i class="fa fa-upload"></i> Upload Id Proof</span>
                                            <input type="file" id="file" name="file" class="upload" />
                                        
                                        </div>

                                    </div>



                                </div>

                                    <label class="margin-top-0">Country</label>

                                        <?php
                                            require '../connect.php';
                                            $stmt = $conn->prepare("SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC");
                                            $stmt->execute();

                                                                                               
                                            $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                            ?>
                                    
                                        <select id="country" class="chosen-select-no-single" >
                                             <option value="">Select Country</option>
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
                                        <div id="countryMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>

                                    <label>State</label>
                                        <select id="state" class="chosen-select-no-single" >
                                             <option value="">Select country first</option>
                                        </select>
                                        <div id="stateMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>

                                    <label>City</label>
                                     <select id="city" class="chosen-select-no-single" >
                                        <option value="">Select state first</option>  
                                    </select>
                                        <div id="cityMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>

                                    <label>Zip Code *</label>
                                    <input type="text" id="pin"  placeholder="Pincode" readonly>

                                    <label>Full Address</label>
                                    <textarea id="address" placeholder="Enter Address"></textarea>
                                    <div id="addressMessage" style="display:none;color: #e74c3c;font-size: 85%;"></div>

                                    
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-xs-12 padding-left-30">
                        <div class="dashboard-list-box-static">
                            <button id="#" class="button">Register</button>
                        </div>
                    </div>

                </div>
            </div>

            <input id="utss" type="hidden" value="<?php echo $user_type;?>"  disabled>
            <input id="uiss" type="hidden" value="<?php echo $user_id?>" disabled >

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
    <script src="../assets/js/register.js"></script>
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


    $('#file').change(function(){

      var fd = new FormData();
      var files = $('#file')[0].files[0];
      fd.append('file',files);

      $.ajax({
        url: '../upload/upload.php',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(response){
          if(response != 0){
            $("#img").attr("src","../upload/"+response); 
            $('#id_proof').val(response);
                    // $(".preview img").show(); // Display image element
                  }else{
                    $('#id_proof').val('');
                    alert('file not uploaded');
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
                $('#pin').html(''); 
                $('#city').html('<option value="">Select state first</option>'); 
            }
        });

</script>


</body>
</html>
