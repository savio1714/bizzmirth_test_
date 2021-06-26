$('#addTravelAgent').click(function(e){
            e.preventDefault();
            // alert("ok ok");
            var franchisee_id = $('#franchisee_id').val();
            var franchisee_name = $('#franchisee_name').val();
            var firstname = $('#firstname').val().trim();
            var lastname = $('#lastname').val().trim();
            var country_code = $('#country_cd').val();
            var phone = $('#phone').val().trim();
            var email = $('#email').val().trim();
            var gender = $('.gender:checked').val();
            var dob = $('#dob').val();
            var address = $('#address').val().trim();
            var profile_pic = $('#profile_pic').val();
            var kyc = $('#kyc').val();
            var pan_card = $('#pan_card').val();
            var aadhar_card = $('#aadhar_card').val();
            var voting_card = $('#voting_card').val();
            var passbook = $('#passbook').val();


            var country = $('#country').val();
            var state = $('#mystate').val();
            var city = $('#city').val();
            var pin = $('#pin').val();

            var characterLetters = /^[A-Za-z\s]+$/;
            var phoneReg =/^[0-9]{10}$/;
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var specialChar = /[!@#$%^&*]/g;


            var testp= $('#testphone').val();
            var testE= $('#testemail').val();
            var age =getdob(dob);



            var dataString = 'franchisee_id='+ franchisee_id+'&firstname='+firstname+'&lastname='+lastname+'&phone='+phone+'&email='+email+'&gender='+gender+'&dob='+dob+'&address='+address+'&profile_pic='+profile_pic+'&kyc='+kyc+'&pan_card='+pan_card+'&aadhar_card='+aadhar_card+'&voting_card='+voting_card+'&passbook='+passbook+'&country_code='+country_code+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin+'&age='+age+'&franchisee_name='+franchisee_name;

          if (franchisee_id ==''){
              alert("Select Franchisee Id");
          }else if (firstname ==='' || !firstname.match(characterLetters) || firstname.length <= 2){
              alert("Enter Proper First Name");
          }else if (lastname ==='' || !lastname.match(characterLetters) || lastname.length <= 2){
              alert("Enter Proper Last Name");
          }else if (email==''){
              alert("Enter Email");
          }else if (!emailReg.test(email)){
              alert("Enter Proper Email");
          }else if (testE == '1'){
              alert("Email already exists");
          }else if(gender !== 'male' && gender !== 'female' && gender !== 'others'){
            alert('Please Select Gender');
          }
          else if(dob ===''){
            alert('Please Select date');
          }else if(age<18 ||  age>=100){
            alert('Sorry you are not eligible');
          }else if (phone==''){
              alert("Enter Phone number");
          }else if (!phoneReg.test(phone)){
              alert("Enter Proper Phone Number");
          }else if (testp == '1'){
              alert("Phone number already exists");
          }else if (country ===''){
              alert("Select Country");
          }else if (state ===''){
              alert("Select State");
          }else if (city ===''){
              alert("Select City");
          }else if (address ==='' || specialChar.test(address) || address.length <= 7){
              alert("Enter Proper Address");
          }else if (profile_pic ===''){
              alert("Upload Profile Picture");
          }else{
              $.ajax({
                type: "POST",
                url: "add_travel_agent_data.php",
                data: dataString,
                cache: false,
                  success:function(data){
                    if(data == 1){
                        alert("Added Successfuly");
                        location.href = "travel_agent.php";
                  }
                  else{

                  alert("Failed");
                }
              }
              });
       
          }
            



        });



  //Edit Travel Agent

  $('#editTravelAgent').click(function(e){
            e.preventDefault();
            
            var editfor = $('#editfor').val();
            var franchisee_id = $('#franchisee_id').val();
            var testiod = $('#testiod').val();
            var franchisee_name = $('#franchisee_name').val();
            var firstname = $('#firstname').val().trim();
            var lastname = $('#lastname').val().trim();
            var country_code = $('#country_cd').val();
            var phone = $('#phone').val().trim();
            var email = $('#email').val().trim();
            var gender = $('.gender:checked').val();
            var dob = $('#dob').val();
            var address = $('#address').val().trim();
            var profile_pic = $('#profile_pic').val();
            var kyc = $('#kyc').val();
            var pan_card = $('#pan_card').val();
            var aadhar_card = $('#aadhar_card').val();
            var voting_card = $('#voting_card').val();
            var passbook = $('#passbook').val();


            var country = $('#country').val();
            var state = $('#mystate').val();
            var city = $('#city').val();
            var pin = $('#pin').val();

            var characterLetters = /^[A-Za-z\s]+$/;
            var phoneReg =/^[0-9]{10}$/;
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var specialChar = /[!@#$%^&*]/g;


            var testp= $('#testphone').val();
            var testE= $('#testemail').val();
            var phoneN =$('#phoneN').val();
            var emailV =$('#emailV').val();
            var age =getdob(dob);



            var dataString = 'testiod='+testiod+'&editfor='+editfor+'&firstname='+firstname+'&lastname='+lastname+'&phone='+phone+'&email='+email+'&gender='+gender+'&dob='+dob+'&address='+address+'&profile_pic='+profile_pic+'&kyc='+kyc+'&pan_card='+pan_card+'&aadhar_card='+aadhar_card+'&voting_card='+voting_card+'&passbook='+passbook+'&country_code='+country_code+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin+'&age='+age;

          if (firstname ==='' || !firstname.match(characterLetters) || firstname.length <= 2){
              alert("Enter Proper First Name");
          }else if (lastname ==='' || !lastname.match(characterLetters) || lastname.length <= 2){
              alert("Enter Proper Last Name");
          }else if (email=='' ){
              alert("Enter Email");
          }else if (!emailReg.test(email)){
              alert("Enter Proper Email");
          }else if (testE == '1' && emailV !=email){
              alert("Email already exists ok");
          }
          else if(dob ===''){
            alert('Please Select date');
          }else if(age<18 ||  age>=100){
            alert('Sorry you are not eligible');
          }else if (phone=='' ){
              alert("Enter Phone number");
          }else if (!phoneReg.test(phone)){
              alert("Enter Proper Phone Number");
          }else if (testp == '1' && phoneN !=phone){
              alert("Phone number already exists ok");
          }else if (country ===''){
              alert("Select Country");
          }else if (state ===''){
              alert("Select State");
          }else if (city ===''){
              alert("Select City");
          }else if (address ==='' || specialChar.test(address) || address.length <= 7){
              alert("Enter Proper Address");
          }else if (profile_pic ===''){
              alert("Upload Profile Picture");
          }else{
              $.ajax({
                type: "POST",
                url: "edit_travel_agent_data.php",
                data: dataString,
                cache: false,
                  success:function(data){
                    if(data == 1){
                        alert("Edited Successfuly");
                        location.href = "travel_agent.php";
                  }
                  else{

                  alert("Failed");
                }
              }
              });
       
          }
            



        });


//Add Franchisee

$('#addFranchisee').click(function(e){
            e.preventDefault();
            // alert("ok ok");

            var sales_manager_id = $('#sales_manager_id').val();
            var sales_manager_name = $('#sales_manager_name').val();
            var firstname = $('#firstname').val().trim();
            var lastname = $('#lastname').val().trim();
            var country_code = $('#country_cd').val();
            var phone = $('#phone').val().trim();
            var email = $('#email').val().trim();
            var gender = $('.gender:checked').val();
            var dob = $('#dob').val();
            var address = $('#address').val().trim();
            var profile_pic = $('#profile_pic').val();
            var kyc = $('#kyc').val();
            var pan_card = $('#pan_card').val();
            var aadhar_card = $('#aadhar_card').val();
            var voting_card = $('#voting_card').val();
            var passbook = $('#passbook').val();


            var country = $('#country').val();
            var state = $('#mystate').val();
            var city = $('#city').val();
            var pin = $('#pin').val();

            var characterLetters = /^[A-Za-z\s]+$/;
            var phoneReg =/^[0-9]{10}$/;
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var specialChar = /[!@#$%^&*]/g;


            var testp= $('#testphone').val();
            var testE= $('#testemail').val();
            var age =getdob(dob);



            var dataString = 'sales_manager_id='+ sales_manager_id+'&firstname='+firstname+'&lastname='+lastname+'&phone='+phone+'&email='+email+'&gender='+gender+'&dob='+dob+'&address='+address+'&profile_pic='+profile_pic+'&kyc='+kyc+'&pan_card='+pan_card+'&aadhar_card='+aadhar_card+'&voting_card='+voting_card+'&passbook='+passbook+'&country_code='+country_code+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin+'&age='+age+'&sales_manager_name='+sales_manager_name;

          if (sales_manager_id ==''){
              alert("Select Sales Manager Id");
          }else if (firstname ==='' || !firstname.match(characterLetters) || firstname.length <= 2){
              alert("Enter Proper First Name");
          }else if (lastname ==='' || !lastname.match(characterLetters) || lastname.length <= 2){
              alert("Enter Proper Last Name");
          }else if (email==''){
              alert("Enter Email");
          }else if (!emailReg.test(email)){
              alert("Enter Proper Email");
          }else if (testE == '1'){
              alert("Email already exists");
          }else if(gender !== 'male' && gender !== 'female' && gender !== 'others'){
            alert('Please Select Gender');
          }
          else if(dob ===''){
            alert('Please Select date');
          }else if(age<18 ||  age>=100){
            alert('Sorry you are not eligible');
          }else if (phone==''){
              alert("Enter Phone number");
          }else if (!phoneReg.test(phone)){
              alert("Enter Proper Phone Number");
          }else if (testp == '1'){
              alert("Phone number already exists");
          }else if (country ===''){
              alert("Select Country");
          }else if (state ===''){
              alert("Select State");
          }else if (city ===''){
              alert("Select City");
          }else if (address ==='' || specialChar.test(address) || address.length <= 7){
              alert("Enter Proper Address");
          }else if (profile_pic ===''){
              alert("Upload Profile Picture");
          }else{
              $.ajax({
                type: "POST",
                url: "add_franchisee_data.php",
                data: dataString,
                cache: false,
                  success:function(data){
                    if(data == 1){
                        alert("Added Successfuly");
                        location.href = "franchisee.php";
                  }
                  else{

                  alert("Failed");
                }
              }
              });
       
          }
            



        });


  //Edit Travel Agent

  $('#editFranchisee').click(function(e){
            e.preventDefault();
            
            var editfor = $('#editfor').val();
            var sales_manager_id = $('#sales_manager_id').val();
            var testiod = $('#testiod').val();
            var sales_manager_name = $('#sales_manager_name').val();
            var firstname = $('#firstname').val().trim();
            var lastname = $('#lastname').val().trim();
            var country_code = $('#country_cd').val();
            var phone = $('#phone').val().trim();
            var email = $('#email').val().trim();
            var gender = $('.gender:checked').val();
            var dob = $('#dob').val();
            var address = $('#address').val().trim();
            var profile_pic = $('#profile_pic').val();
            var kyc = $('#kyc').val();
            var pan_card = $('#pan_card').val();
            var aadhar_card = $('#aadhar_card').val();
            var voting_card = $('#voting_card').val();
            var passbook = $('#passbook').val();


            var country = $('#country').val();
            var state = $('#mystate').val();
            var city = $('#city').val();
            var pin = $('#pin').val();

            var characterLetters = /^[A-Za-z\s]+$/;
            var phoneReg =/^[0-9]{10}$/;
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var specialChar = /[!@#$%^&*]/g;


            var testp= $('#testphone').val();
            var testE= $('#testemail').val();
            var phoneN =$('#phoneN').val();
            var emailV =$('#emailV').val();
            var age =getdob(dob);



            var dataString = 'testiod='+testiod+'&editfor='+editfor+'&firstname='+firstname+'&lastname='+lastname+'&phone='+phone+'&email='+email+'&gender='+gender+'&dob='+dob+'&address='+address+'&profile_pic='+profile_pic+'&kyc='+kyc+'&pan_card='+pan_card+'&aadhar_card='+aadhar_card+'&voting_card='+voting_card+'&passbook='+passbook+'&country_code='+country_code+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin+'&age='+age;

          if (firstname ==='' || !firstname.match(characterLetters) || firstname.length <= 2){
              alert("Enter Proper First Name");
          }else if (lastname ==='' || !lastname.match(characterLetters) || lastname.length <= 2){
              alert("Enter Proper Last Name");
          }else if (email=='' ){
              alert("Enter Email");
          }else if (!emailReg.test(email)){
              alert("Enter Proper Email");
          }else if (testE == '1' && emailV !=email){
              alert("Email already exists ok");
          }
          else if(dob ===''){
            alert('Please Select date');
          }else if(age<18 ||  age>=100){
            alert('Sorry you are not eligible');
          }else if (phone=='' ){
              alert("Enter Phone number");
          }else if (!phoneReg.test(phone)){
              alert("Enter Proper Phone Number");
          }else if (testp == '1' && phoneN !=phone){
              alert("Phone number already exists ok");
          }else if (country ===''){
              alert("Select Country");
          }else if (state ===''){
              alert("Select State");
          }else if (city ===''){
              alert("Select City");
          }else if (address ==='' || specialChar.test(address) || address.length <= 7){
              alert("Enter Proper Address");
          }else if (profile_pic ===''){
              alert("Upload Profile Picture");
          }else{
              $.ajax({
                type: "POST",
                url: "edit_franchisee_data.php",
                data: dataString,
                cache: false,
                  success:function(data){
                    if(data == 1){
                        alert("Edited Successfuly");
                        location.href = "franchisee.php";
                  }
                  else{

                  alert("Failed");
                }
              }
              });
       
          }
            



        });








$('#phone').keyup(function () { 
    var country_code = $('#country_cd').val();
    var phone = $('#phone').val().trim();
    var testValue = $('#testValue').val().trim();
    // alert(testValue);
      phonetest(phone,country_code,testValue);
        
    });


$('#email').keyup(function () { 
    var email = $('#email').val().trim();
    var testValue = $('#testValue').val().trim();
     emailtest(email,testValue);
        
    });


var phonetest = (phone_noValue,code,testValue) =>{
      // alert(testValue);
      $.ajax({

        type:'POST',
         url:'../test_data/phone_test.php',
        data:'phone='+phone_noValue+'&countrycode='+code+'&tablename='+testValue,
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


    var emailtest = (emailtest,testValue) =>{
      $.ajax({

        type:'POST',
         url:'../test_data/emailtest.php',
        data:'email='+emailtest+'&tablename='+testValue,
          success:function(response){
            if(response == 1){
              $('#testemails').html('<input type="hidden"  id="testemail" value="1" >');
            }else{
               $('#testemails').html('<input  type="hidden" id="testemail" value="0" >');
             // return false;
            }
          
          }
        }); 
    }


    var getdob =(bdate)=>{
   var birthday =Date.parse(bdate);

     var todaysDate = Date.now();

     var age= todaysDate - birthday ;



     // var millsecond= toage;
    var second = 1000;
    var minute = second*60;
    var hour = minute *60;
    var day = hour*24;
    var year = day*365;

    // alert(bdate.getMonth());

    var dob= Math.floor(age/year);


// $('#age').val(dob);


return dob;
}

