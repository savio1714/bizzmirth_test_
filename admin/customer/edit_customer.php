<?php
session_start();

if(!isset($_SESSION['username'])){
    echo '<script>location.href = "../index.php";</script>';
}

$id = $_GET['vkvbvjfgfikix'];
$user_id = $_GET['jdjdfdjs'];
$user_type = $_GET['ghghhj'];


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





    $stmt = $conn->prepare("SELECT * FROM customer where id = '".$id."'");
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
                                            
                                            <div class="input-field col s6">
                                                <input id="name" type="text" value="<?php echo 'cust'.$user_id;?>" readonly>
                                                <label for="first_name">Customer Id</label>

                                            </div>
                                            <div class="input-field col s6">

                                                <input id="username" type="text" value="<?php echo $username ;?>" >
                                                <label for="username">Username</label>
                                                <!-- <span>message</span> -->

                                            </div>
                                        
                                        </div>
                                       <!-- <div class="row">
                                            
                                            <div class="input-field col s12">
                                                <input id="name" type="text" value="<?php echo $firstname.' '. $lastname;?>" >
                                                <label for="first_name">Name</label>
                                            </div>
                                           
                                        
                                        </div> -->
                                       
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
                                                <input id="phone" type="text" value="<?php echo $contact_no;?>" >
                                                <label for="phone">Mobile</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="email" type="email" value="<?php echo $email;?>" >
                                                <label for="email">Email</label>
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
                                                <label for="date-picker" style="margin-top: -25px;    font-size: 0.8rem;">Date of Birth</label>
                                            <input type="date" id="dob" class="datepicker" value="<?php echo $date_of_birth;?>">

                                                <!-- <input id="bdate" type="email" value="<?php echo $date_of_birth;?>" >
                                                <label for="email">Date of Birth</label> -->
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
                                                    <?php echo '<img src="../../'.$profile_pic.'" alt="id proof" style="width: 120px;height: 120px" id="img2">';?>
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
                                        
                                           
                                           <!--  <div class="input-field col s6" >

                                            </div> -->
                                   
                                        </div>
                                        <!-- <div class="row">
                                            
                                            <label style="margin-left: 10px;margin-top: 3%;">Id Proof</label>
                                            
                                            <div class="input-field col s12">
                                              
                                                    <div class="file-field input-field">
                                                        <div class="btn">
                                                            <span>File</span>
                                                            <input type="file">
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text">
                                                        </div>
                                                    </div>
                                                
                                            </div>
                                            <div class="input-field col s12">
                                                
                                                


                                            </div>
                                                
                                            
                                        
                                        </div> -->

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


      var username = $('#username').val();
      var firstname = $('#firstname').val();
      var lastname = $('#lastname').val();
      var phone = $('#phone').val();
      var email = $('#email').val();
      var gender = $('.gender:checked').val();
      var dob = $('#dob').val();
      var address = $('#address').val();
      var id_proof = $('#id_proof').val();
      var profile_pic = $('#profile_pic').val();

      var characterLetters = /^[A-Za-z\s]+$/;
      var phoneReg =/^[0-9]{10}$/;
      var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

 // alert();
      var dataString = 'id='+ id+'&user_id='+uid+'&user_type_id='+utype+'&username='+username+'&firstname='+firstname+'&lastname='+lastname+'&phone='+phone+'&email='+email+'&gender='+gender+'&dob='+dob+'&address='+address+'&id_proof='+id_proof+'&profile_pic='+profile_pic;

    if(username ==='' || username.length <= 2){
      alert("Username should be max 3 character");
    }else if (firstname ==='' || !firstname.match(characterLetters) || firstname.length <= 2){
        alert("Enter Proper First Name");
    }else if (lastname ==='' || !lastname.match(characterLetters) || lastname.length <= 2){
        alert("Enter Proper Last Name");
    }else if (!phoneReg.test(phone)){
        alert("Enter Proper Phone Number");
    }else if (!emailReg.test(email)){
        alert("Enter Proper Email");
    }else if (address ===''){
        alert("Enter Address");
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

    </script>
    <!-- <script src="../../assets/js/upload_file.js"></script> -->

</body>


</html>
<script type="text/javascript">
    $('#file').change(function(){

      var fd = new FormData();
      var files = $('#file')[0].files[0];
      fd.append('file',files);

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
    });

   $('#file2').change(function(){

      var fd = new FormData();
      var files = $('#file2')[0].files[0];
      fd.append('file',files);

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
    });
</script>
