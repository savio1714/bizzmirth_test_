<?php
session_start();

if(!isset($_SESSION['username'])){
    echo '<script>location.href = "../index.php";</script>';
}

$id = $_GET['vkvbvjfgfikix'];
$user_id = $_GET['jdjdfdjs'];
$user_type = $_GET['ghghhj'];
$country = $_GET['ncy'];
$state = $_GET['mst'];
$city = $_GET['hct'];


    require '../connect.php';


$stmt2 = $conn->prepare("SELECT username FROM login where user_id = '".$user_id."' and (id='".$id."' or user_type_id='".$user_type."') ");
    $stmt2->execute();

    $stmt2->setFetchMode(PDO::FETCH_ASSOC);

    if($stmt2->rowCount()>0){
    foreach (($stmt2->fetchAll()) as $key2 => $row2) {
        $username=$row2['username'];
    }
    }                                                      
    else{
                                                            
    }





    $stmt = $conn->prepare("SELECT *, (select state_name from states where id = '".$state."') as statename, (select city_name from cities where id = '".$city."') as city_name,(select country_name from countries where id = '".$country."') as countryname FROM `customer` where cust_id='".$id."'");
    $stmt->execute();
     // set the resulting array to associative
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    if($stmt->rowCount()>0){
    foreach (($stmt->fetchAll()) as $key => $row) {
        $cust_id=$row['cust_id'];

        $firstname=$row['firstname'];
        // $username=$row['username'];
        $lastname=$row['lastname'];
        $email=$row['email'];
        $contact_no=$row['contact_no'];
        $date_of_birth=$row['date_of_birth'];
        $gender=$row['gender'];
        $address=$row['address'];
        $id_proof=$row['id_proof'];
        $profile_pic=$row['profile_pic'];

        $city_name=$row['city_name'];
        $statename=$row['statename'];
        $countryname=$row['countryname'];
        $pincode=$row['pincode'];
 
    }
    }                                                      
    else{
                                                            
    }



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bizzmirth Holidays</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="../images/fav.ico">

    <!-- GOOGLE FONTS -->
    <link href="../../../../../fonts.googleapis.com/cssbcc5.css?family=Open+Sans:300,400,600|Quicksand:300,400,500" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="../css/font-awesome.min.css">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/mob.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/materialize.css" />

</head>

<body>
    <!--== MAIN CONTRAINER ==-->
<?php include '../header2.php';?>

    <!--== BODY CONTNAINER ==-->
    <div id="testdiv"></div>
    <input id="phoneN" type="hidden" value="<?php echo $contact_no;?>" >
    <input id="emailV" type="hidden" value="<?php echo $email;?>" >

    
        <?php include '../sidebar2.php';?>
            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> View Customer Details </a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Edit Customer Details</h4>
                                    <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p> -->
                                </div>
                                <div class="tab-inn">
                                    <form>
                                        <div class="row">
                                            
                                            <div class="input-field col s12">
                                                <input id="name" type="text" value="<?php echo 'cust'.$user_id;?>" readonly>
                                                <label for="first_name">Customer Id</label>

                                            </div>
                                            <!-- <div class="input-field col s6">

                                                <input id="username" type="text" value="<?php echo $username ;?>" >
                                                <label for="username">Username</label>
                                                

                                            </div> -->
                                        
                                        </div>
                                       
                                       
                                        <div class="row">
                                            
                                            <div class="input-field col s6">
                                                <input id="firstname" type="text" value="<?php echo $firstname;?>" >
                                                <label for="firstname">First Name</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="lastname" type="text" value="<?php echo $lastname;?>" >
                                                <label for="lastname">Last Name</label>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="input-field col s6">
                                                <input id="email" type="email" value="<?php echo $email;?>" >
                                                <label for="email">Email</label>
                                            </div>

                                            <div class="input-field col s6">
                                                <label for="date-picker" style="margin-top: -25px;    font-size: 0.8rem;">Date of Birth</label>
                                            <input type="date" id="dob" class="datepicker" value="<?php echo $date_of_birth;?>">
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="input-field col s6">
                                                <label style="margin-top: -25px;    font-size: 0.8rem;">Gender</label>
                                            <input class="with-gap gender " name="gender" type="radio" id="test3" value="male" <?php if ($gender == 'male'){echo ' checked ';} ?> />
                                            <label for="test3">Male</label>
                                            <input class="with-gap gender" name="gender" type="radio" id="test4" value="female" <?php if ($gender == 'female'){echo 'checked ';}?>/>
                                            <label for="test4">Female</label>
                                            <input class="with-gap gender" name="gender" type="radio" id="test5" value="others" <?php if ($gender == 'others'){echo 'checked ';}?>/>
                                            <label for="test5">Others</label>
                                                
                                                
                                                <!-- <label for="phone">Gender</label>  -->
                                            </div>

                                            <div class="input-field col s6">

                                                <div class="form-group col s4">
                                                <!-- <label style="margin-top: -17%;font-size: 0.8rem;">Country Code</label> -->
                                                 <?php
                                                require '../connect.php';
                                                $stmt = $conn->prepare("SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC");
                                                $stmt->execute();

                                                                                                   
                                                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                                ?>
                                                <select id="country_cd" style=" width: 100%;border-left: 0px;border-top: 0px;border-right: 0px;height: 5%;padding-bottom: 10%;padding-top: 10%;padding-left: 1%;">
                                                    <?php 
                                                    if($stmt->rowCount()>0){
                                                         foreach (($stmt->fetchAll()) as $key => $row) {  
                                                            echo '<option value="'.$row['country_code'].'">'.$row['country_code'].' ('.$row['sortname'].')</option>'; 
                                                        } 
                                                    }else{ 
                                                        echo '<option value="">Country not available</option>'; 
                                                    } 
                                                    ?>
                                                </select>
                                           


                                            
                                            
                                                </div>
                                                <div class="form-group col s8">
                                                    <input id="phone" type="text" value="<?php echo $contact_no;?>" >
                                                    <label for="phone">Mobile</label>
                                                </div>
                                                

                                                <!-- <input id="bdate" type="email" value="<?php echo $date_of_birth;?>" >
                                                <label for="email">Date of Birth</label> -->
                                            </div>

                                        </div>



                                        <div class="row">
                                            
                                             <div class="form-group col-xs-6">
                                                <label>Country</label>
                                                
                                            <?php
                                            require '../connect.php';
                                            $stmt = $conn->prepare("SELECT * FROM countries WHERE status = 1 ORDER BY country_name ASC");
                                            $stmt->execute();

                                                                                               
                                            $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                            ?>
                                            <select id="country" style=" width: 100%;border-left: 0px;border-top: 0px;border-right: 0px;height: 5%;padding-bottom: 3%;padding-top: 2%;padding-left: 1%;">
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


                                            
                                            
                                        </div>
                                        


                                            <div class="form-group col-xs-6">
                                                <label>State</label>
                                                <select id="mystate" style=" width: 100%;border-left: 0px;border-top: 0px;border-right: 0px;height: 5%;padding-bottom: 3%;padding-top: 2%;padding-left: 1%;">

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
                                                </div>
                                    

                                    
                                    

                                        
                                        </div>

                                       

                                    <div class="row">
                                    <div class="form-group col-xs-6">
                                        <label>City:</label><br>
                                        <select id="city" style=" width: 100%;border-left: 0px;border-top: 0px;border-right: 0px;padding-bottom: 3%;padding-top: 2%;padding-left: 1%;">

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
                                        <!-- <div id="cityError" class=" errorMessage2"></div>                  -->
                                    </div>

                                     <div class="form-group col-xs-6">
                                        <label>Pincode:</label>
                                        <input type="text" class="form-control" id="pin" placeholder="Pincode" value="<?php echo $pincode; ?>" readonly>
                                        
                                    </div>

                                </div>
                                



                                        

                                    





                            


                                         <div class="row">
                                            
                                            <div class="input-field col s12">
                                                <input id="address" type="text" value="<?php echo $address;?>" >
                                                <!-- <textarea id="address" style="margin-top: 1.5%;" ><?php echo $address;?></textarea> -->
                                            
                                                <label for="address">Address</label>
                                            </div>
                                         </div>
                                        
                                        <div class="row">
                                        
                                            <div class="input-field col s6 col-sm-12">
                                              <label style="margin-top: -25px;font-size: 0.8rem;">Profile</label>
                                                    <div class="file-field input-field">
                                                        <div class="btn">
                                                            <span>Upload</span>
                                                            <input type="file" id="file2" name="file2">
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text"  >
                                                             <input type="hidden" name="profile_pic" id="profile_pic" value="<?php echo $profile_pic;?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div >
                                                    <?php echo '<img src="../../'.$profile_pic.'" alt="profile pic" style="width: 120px;height: 120px" id="img2">';?>
                                                    </div>
                                                
                                            </div>
                                             <div class="input-field col s6 col-sm-12">
                                              <label style="margin-top: -25px;font-size: 0.8rem;">PAN / Aadhar Card</label>
                                                    <div class="file-field input-field">
                                                        <div class="btn">
                                                            <span>Upload</span>
                                                            <input type="file"id="file" name="file">
                                                        </div>
                                                         <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text"  >
                                                             <input type="hidden" name="id_proof" id="id_proof" value="<?php echo $id_proof; ?>" disabled>
                                                        </div>
                                                    
                                                    </div>
                                                    <div >
                                                    <?php echo '<img src="../../upload/'.$id_proof.'" alt="id proof" style="width: 120px;height: 120px" id="img">';?>
                                                    </div>
                                                
                                            </div>
                                          <!--   <div class="input-field col s6" >

                                            </div> -->
                                   
                                        </div>

                                        
                                        <div class="row">
                                            <div class="input-field col s12" style="margin-top: 20px;">
                                                <a href="registered_customer.php" class="waves-effect waves-light btn-large">Back</a>

                                                 <a href="#" class="waves-effect waves-light btn-large" <?php echo 'onclick=\'editfunc("' .$id. '","' .$user_id. '","' .$user_type. '")\'';?>>Edit</a>
                                                <!-- <input type="submit" class="waves-effect waves-light btn-large" value="Back"> -->
                                            </div>
                                           
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--== BOTTOM FLOAT ICON ==-->
  <!--   <section>
        <div class="fixed-action-btn vertical">
            <a class="btn-floating btn-large red pulse">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a>
                </li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a>
                </li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a>
                </li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a>
                </li>
            </ul>
        </div>
    </section> -->

    <!--======== SCRIPT FILES =========-->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/materialize.min.js"></script>
    <script src="../js/custom.js"></script>
    <script type="text/javascript" >
    function editfunc(id,uid,utype)
      {


      // var username = $('#username').val().trim();
      var firstname = $('#firstname').val().trim();
      var lastname = $('#lastname').val().trim();
      var country_code = $('#country_cd').val();
      var phone = $('#phone').val().trim();
      var email = $('#email').val().trim();
      var gender = $('.gender:checked').val();
      var dob = $('#dob').val();
      var address = $('#address').val().trim();
      var id_proof = $('#id_proof').val();
      var profile_pic = $('#profile_pic').val();

      var country = $('#country').val();
      var state = $('#mystate').val();
      var city = $('#city').val();
      var pin = $('#pin').val();

      var characterLetters = /^[A-Za-z\s]+$/;
      var phoneReg =/^[0-9]{10}$/;
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
      var specialChar = /[!@#$%^&*]/g;

 // alert();

 var testp= $('#testphone').val();
  var testE= $('#testemail').val();
 
 var phoneN =$('#phoneN').val();
  var emailV =$('#emailV').val();
 // alert($('#test2').val());
      var dataString = 'id='+ id+'&user_id='+uid+'&user_type_id='+utype+'&firstname='+firstname+'&lastname='+lastname+'&phone='+phone+'&email='+email+'&gender='+gender+'&dob='+dob+'&address='+address+'&id_proof='+id_proof+'&profile_pic='+profile_pic+'&country_code='+country_code+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin;
// phonetest(phone_noValue,countrycode);
    if (firstname ==='' || !firstname.match(characterLetters) || firstname.length <= 2){
        alert("Enter Proper First Name");
    }else if (lastname ==='' || !lastname.match(characterLetters) || lastname.length <= 2){
        alert("Enter Proper Last Name");
    }else if (!phoneReg.test(phone)){
        alert("Enter Proper Phone Number");
    }else if (testp == '1' && phoneN !=phone){
        alert("Phone number already exists");
    }else if (!emailReg.test(email)){
        alert("Enter Proper Email");
    }else if (testE == '1' && emailV !=email){
        alert("Email already exists");
    }else if (country ===''){
        alert("Select Country");
    }else if (state ===''){
        alert("Select State");
    }else if (city ===''){
        alert("Select City");
    }else if (address ==='' || specialChar.test(address) || address.length <= 7){
        alert("Enter Proper Address");
    }else if (id_proof ===''){
        alert("Upload Id Proof");
    }else if (profile_pic ===''){
        alert("Upload Profile Picture");
    }else{
        $.ajax({
          type: "POST",
          url: "edit_customer_data.php",
          data: dataString,
          cache: false,
            success:function(data){
              if(data == 1){
                  alert("Update Successfuly");
               window.location.reload();
            }
            else{

            alert("Failed to confirm");
          }
        }
        });
 
    }



  
      
      
      };



$('#email').keyup(function () { 
    var email = $('#email').val().trim();
     emailtest(email);
        
    });

$('#phone').keyup(function () { 
    var country_code = $('#country_cd').val();
    var phone = $('#phone').val().trim();
     phonetest(phone,country_code);
        
    });


 var phonetest = (phone_noValue,code) =>{
      $.ajax({

        type:'POST',
         url:'../../registration/phonetest.php',
        data:'phone='+phone_noValue+'&countrycode='+code,
          success:function(response){
            if(response == 1){
              $('#testpho').html('<input type="hidden"  id="testphone" value="1" >');
            }else{
               $('#testpho').html('<input  type="hidden" id="testphone" value="0" >');
             // return false;
            }
          
          }
        }); 
    }


    var emailtest = (emailtest) =>{
      $.ajax({

        type:'POST',
         url:'../../registration/emailtest.php',
        data:'email='+emailtest,
          success:function(response){
            if(response == 1){
              $('#testdiv').html('<input type="hidden"  id="testemail" value="1" >');
            }else{
               $('#testdiv').html('<input  type="hidden" id="testemail" value="0" >');
             // return false;
            }
          
          }
        }); 
    }


    </script>
    <!-- <script src="../../assets/js/upload_file.js"></script> -->

</body>


</html>
<script type="text/javascript">
    $('#file').change(function(){

      var fd = new FormData();
      var files = $('#file')[0].files[0];
      fd.append('file',files);

      //getting filesize of that image 
    var file_size = $('#file')[0].files[0].size;
    
//checking if the filesize is greater then 2MB
    if(file_size<2097152) {

      $.ajax({
        url: '../../upload/upload.php',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(response){
          if(response != 0){
            $("#img").attr("src","../../upload/"+response); 
            $('#id_proof').val(response);
                    // $(".preview img").show(); // Display image element
                  }else{
                    $('#id_proof').val('');
                    alert('Please Upload Proper Id Proof');
                  }
                },
              });
      }else{
        $('#id_proof').val('');
        alert('File size is greater than 2MB');
        
        // $(invalidvalue).val('2');
      }

    });

   $('#file2').change(function(){

      var fd = new FormData();
      var files = $('#file2')[0].files[0];
      fd.append('file',files);

      //getting filesize of that image 
    var file_size = $('#file2')[0].files[0].size;
    
//checking if the filesize is greater then 2MB
    if(file_size<2097152) {

      $.ajax({
        url: '../../upload/upload_profile.php',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(response){
          if(response != 0){
            $("#img2").attr("src","../../"+response); 
            $('#profile_pic').val(response);
                    // $("#preview img").show(); // Display image element
                  }else{
                    $('#profile_pic').val('');
                    alert('Please Upload Proper Profile Image');
                  }
                },
              });
  }else{
        alert('File size is greater than 2MB');
        $('#profile_pic').val('');
        // $(invalidvalue).val('2');
      }


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
                url:'countrydata.php',
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
                    url:'countrydata.php',
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
                          url:'pincode.php',
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
