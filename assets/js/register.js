$(document).ready(function(){

//define constants at particular location

  const fname = $('#fname');
  const lname = $('#lname');
  const email = $('#email');
  const phone_no = $('#phone_no');
  // const age = $('#age');
  const address = $('#address');




  // let profile_pic = $('#profile_pic');
  let fnameValue = '';
  let lnameValue = '';
  let emailValue = '';
  // let genderValue = '';
  let phone_noValue = '';
  // let ageValue = '';
  let addressValue = '';
  // let bdateValue = '';
  // let id_proof = $('#id_proof');

  
  $("#register").click(function(e){
    // alert(firstnameValue)
     // alert(gender);
    e.preventDefault();

    checkInput();
    
  });


  $(fname).keyup(function () { 
    fnameValue =fname.val().trim();

    if(fnameValue ===''){
      setError(fname,"*Firstname cannot be blank");
    }
    else if(!validateOnlyCharacter(fnameValue)){
      setError(fname,"*Only Alphabets allowed.");
    }else if(fnameValue.length <= 2){
      setError(fname,"*Max 3 Character");
    }else{
      // validateInput(fnameValue,fname,"*fname cannot be blank"); 
      setSuccess(fname);
    }

  });

   $(lname).keyup(function () { 
    lnameValue =lname.val().trim();

    if(lnameValue ===''){
      setError(lname,"*Lastname cannot be blank");
    }
    else if(!validateOnlyCharacter(lnameValue)){
      setError(lname,"*Only Alphabets allowed.");
    }else if(lnameValue.length <= 2){
      setError(lname,"*Max 3 Character");
    }else{
      setSuccess(lname);
    }

  });


 $(email).keyup(function () { 
   emailValue = email.val().trim();
        
        if(!validateEmail(emailValue)){
          setError(email,"*Please enter correct email id");
        }else{
          validateInput(emailValue,email,"*Email cannot be blank");
        }
        
 });

  $(phone_no).keyup(function () { 
   phone_noValue = phone_no.val().trim();
        
        if(!validatePhone(phone_noValue)){
          setError(phone_no,"*Please enter correct phone number");
        }else if(phone_noValue ==='')
        {
          setError(phone_no,"*phone number cannot be blank");
        }else{
          $.ajax({
        type:'POST',
         url:'registration/phonetest.php',
        data:'phone='+phone_noValue,
          success:function(response){
            if(response == 1){
              setError(phone_no,"*phone number already taken");
            }else{
              setSuccess(phone_no);
            }
          
          }
        }); 
          
        }
        
 });

 //  $(gender).keyup(function () { 
 //   genderValue = gender.val();
 //          validateGender(genderValue,gender,"*Please Select gender");     
 // });


  //  $(age).keyup(function () { 
  //   ageValue =age.val().trim();

  //   if(ageValue ===''){
  //     setError(age,"*Age cannot be blank");
  //   }else if(validateOnlyCharacter(ageValue)){
  //      setError(age,"*Enter proper age");
  //   }
  //   else if(ageValue<18 ||  ageValue>60 ){
  //     setError(age,"*Age should be greter then 17 and proper age");
  //   }else{
  //     setSuccess(age);
  //   }

  // });
   $(address).keyup(function () { 
    addressValue =address.val();

    if(addressValue ===''){
      setError(address,"*Address cannot be blank");
    }
    else{
      // validateInput(addressValue,address,"*address cannot be blank"); 
      setSuccess(address);
    }

  });


  const validateInput = (inputValue,idOfInput,message) =>{
  if(inputValue ==='')
    {
      setError(idOfInput,message);
    }else{
      setSuccess(idOfInput);
    }
   }

   const validateGender = (inputValue,idOfInput,message) =>{
  if(idOfInput.checked == true){
      setError(idOfInput,message);
    }else{
      setSuccess(idOfInput);
    }
}
 

const validateOnlyCharacter = (input) =>{

  let characterLetters = /^[A-Za-z\s]+$/;
  if(!input.match(characterLetters )){
    return false
   }else{
    return true
   }

}

const setError = (input,message) =>{
  $(input).parent().addClass('error');
  $(input).parent().removeClass('success');
   $(input).siblings('small').html(message);
}

const setSuccess = (input) =>{  
$(input).parent().addClass('success');
$(input).parent().removeClass('error');

}
 const validateEmail= (email) => {
  let emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test(email);
}

const validatePhone= (phone) => {
  let phoneReg =/^[0-9]{10}$/;
  return phoneReg.test(phone);
}






  const checkInput =  () =>{

    let gender = $('.gender:checked').val();
    let bdate = $('#bdate').val();
    let profile_pic = $('#profile_pic').val();
    let id_proof = $('#id_proof').val();
    let agevalue = $('#age').val();
    let country = $('#country').val();
    let state = $('#state').val();
    let city = $('#city').val();
    let pin = $('#pin').val();

    let fnameHas = classHas(fname);
    let lnameHas = classHas(lname);
    let emailHas = classHas(email);
    let phone_noHas = classHas(phone_no);
    // let ageHas = classHas(age);
    let addressHas = classHas(address);

    let countrycode = $('#countrycode').val();

    let agree = $('#agree').prop( "checked" );

    var phone= countrycode+""+phone_noValue;


    // alert(phone);




    // var age =getdob(bdate);
    // alert(agevalue);



   




    // alert(bdate);

     if(agree == false){
        $('#agreeError').text("*Please Agree Terms and Conditions");
        $('#errorMessageText').text("*All fields are required");
    }else if(profile_pic == ''){
      $('#agreeError').addClass('hideDiv');
        $('#profileError').text("*Select your profile.");
        $('#errorMessageText').text("*All fields are required");
    }else if(countrycode == ''){
        $('#profileError').addClass('hideDiv');
        $('#countryCodeError').text("*Select Country Code");
        $('#errorMessageText').text("*All fields are required");
    }else if(gender !== 'male' && gender !== 'female' && gender !== 'others'){
        $('#countryCodeError').addClass('hideDiv');
        $('#errorMessage').text("*Select Gender.");
        $('#errorMessageText').text("*All fields are required");
    }
    else if(bdate ===''){
      $('#errorMessage').addClass('hideDiv');
      validateInput(bdate,$('#bdate'),"*Please Select date");
      $('#errorMessageText').text("*All fields are required");
    }else if(agevalue<18 ||  agevalue>90 ){
      validateInput(bdate,$('#bdate'),"");
      $('#ageError').text("*You are not eligible");
        $('#errorMessageText').text("*All fields are required");
    }else if(country == ''){
      $('#errorMessage').addClass('hideDiv');
      $('#ageError').addClass('hideDiv');
            $('#countryError').text("*Select Country.");
            $('#errorMessageText').text("*All fields are required");
    }else if(state == ''){
      $('#countryError').addClass('hideDiv');
            $('#stateError').text("*Select State.");
            $('#errorMessageText').text("*All fields are required");
    }else if(city == ''){
      $('#stateError').addClass('hideDiv');
      $('#countryError').addClass('hideDiv');
            $('#cityError').text("*Select City.");
            $('#errorMessageText').text("*All fields are required");
    }else if(id_proof == ''){
      $('#errorMessage').addClass('hideDiv');
      $('#stateError').addClass('hideDiv');
      $('#countryError').addClass('hideDiv');
      $('#cityError').addClass('hideDiv');
            $('#idProofError').text("*Select Id Proof.");
            $('#errorMessageText').text("*All fields are required");
    }else if(fnameHas === true && lnameHas === true && emailHas === true && phone_noHas === true && addressHas === true){
      
      $('#agreeError').addClass('hideDiv');$('#profileError').addClass('hideDiv');$('#countryCodeError').addClass('hideDiv');
      $('#errorMessage').addClass('hideDiv');$('#ageError').addClass('hideDiv');$('#countryError').addClass('hideDiv');
      $('#stateError').addClass('hideDiv');$('#cityError').addClass('hideDiv');$('#idProofError').addClass('hideDiv');
 $('#errorMessageText').text("*All fields are required");


    let datastring='fname='+fnameValue+'&profile_pic='+profile_pic+'&lname='+lnameValue+'&email='+emailValue+'&gender='+gender+'&phone_no='+phone+'&age='+agevalue+'&bdate='+bdate+'&id_proof='+id_proof+'&address='+addressValue+'&country='+country+'&state='+state+'&city='+city+'&pincode='+pin;

       $.ajax({
        type: "POST",
        url: "registration/submit_data.php",
        data: datastring,
        success: function (res) {
        if (res==1) {
          alert("Register Successfully ,You will receive username and password via sms");
          window.location.reload();
        }
        else{
          alert("failed");
        }
            },
        });
             $('#errorMessageText').addClass('hideDiv');
    } else{
       $('#errorMessageText').text("*All fields are required");
    }

    // validateGender(genderValue,gender,"*Please Select gender");





  // if(fnameHas === true && lnameHas === true && unameHas === true && emailHas === true && passwordHas === true && confirmPasswordHas === true){
    
  //    $.ajax({
  //                   type: "POST",
  //                   url: "sign_up1.php",
  //                   data: "fname=" + firstnameValue+ "&lname=" + lastnameValue + "&uname="+ usernameValue +"&email="+ emailValue +"&password="+ passwordValue,
  //                   success: function(res) {
  //                      if(res == 1){
  //                       alert("success");
  //                      }else{
  //                       alert("failed");
  //                      }
  //                   }
  //               });

  //   // alert(firstnameValue +" "+ lastnameValue +" "+ usernameValue +" "+ emailValue);
  // }else{
  //   alert("Please Fill all the field");
  // }

  // alert(firstnameValue+"  "+lastnameValue);

  }


const classHas = (input) =>{
  if ($(input).parent().hasClass("success")){
    return true;
  }else{
    return false;
  }
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


$('#country').on('change', function(){
  // alert("ok");
        var countryID = $(this).val();

        // alert(countryID);
        if(countryID){
            $.ajax({
                type:'POST',
                url:'registration/countrydata.php',
                data:'country_id='+countryID,
                success:function(html){
                    $('#state').html(html);
                    $('#city').html('<option value="">Select state first</option>'); 
                }
            }); 
        }else{
            $('#state').html('<option value="">Select country first</option>');
            $('#city').html('<option value="">Select state first</option>'); 
        }
    });
    
    $('#state').on('change', function(){
        var stateID = $(this).val();
        if(stateID){
            $.ajax({
                type:'POST',
                url:'registration/countrydata.php',
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
                      url:'registration/pincode.php',
                      data:'city_id='+cityID,
                      success:function(response){
                         // $('#pin').html(response);
                         $('#pin').val(response); 
                      }
                  }); 
        }else{
            // $('#city').html('<option value="">Select state first</option>'); 
        }
    });

    $('#bdate').on('change', function(){
      // alert("ok");
    let bdate = $('#bdate').val();

    var age =getdob(bdate);
    if(age <=0){
      $('#age').val(0); 
    }else{
      $('#age').val(age); 
    }
    

        
    });







});




