$(document).ready(function(){

//define constants at particular location

  const fname = $('#fname');
  const lname = $('#lname');
  const email = $('#email');
  const phone_no = $('#phone_no');
  const age = $('#age');
  const address = $('#address');



  // let profile_pic = $('#profile_pic');
  let fnameValue = '';
  let lnameValue = '';
  let emailValue = '';
  // let genderValue = '';
  let phone_noValue = '';
  let ageValue = '';
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
        }else{
          validateInput(phone_noValue,phone_no,"*phone number cannot be blank");
        }
        
 });

 //  $(gender).keyup(function () { 
 //   genderValue = gender.val();
 //          validateGender(genderValue,gender,"*Please Select gender");     
 // });


   $(age).keyup(function () { 
    ageValue =age.val().trim();

    if(ageValue ===''){
      setError(age,"*Age cannot be blank");
    }else if(validateOnlyCharacter(ageValue)){
       setError(age,"*Enter proper age");
    }
    else if(ageValue<18 ||  ageValue>150 ){
      setError(age,"*Age should be greter then 17 and proper age");
    }else{
      setSuccess(age);
    }

  });
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

 //    $(bdate).click(function () { 
 //   bdateValue = bdate.val();
 //          validateInput(bdateValue,bdate,"*Please Select date");
 
        
 // });

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
    let fnameHas = classHas(fname);
    let lnameHas = classHas(lname);
    let emailHas = classHas(email);
    let phone_noHas = classHas(phone_no);
    let ageHas = classHas(age);
    let addressHas = classHas(address);

     if(profile_pic == ''){
        $('#profileError').text("*Select your profile.");
        $('#errorMessageText').text("*All fields are required");
    }else if(gender !== 'male' && gender !== 'female' && gender !== 'others'){
        $('#profileError').addClass('hideDiv');
        $('#errorMessage').text("*Select Gender.");
        $('#errorMessageText').text("*All fields are required");
    }
    else if(bdate ===''){
      $('#errorMessage').addClass('hideDiv');
      validateInput(bdate,$('#bdate'),"*Please Select date");
      $('#errorMessageText').text("*All fields are required");
    }else if(id_proof == ''){
           validateInput(bdate,$('#bdate'),"");
            $('#idProofError').text("*Select Id Proof.");
            $('#errorMessageText').text("*All fields are required");
    }else if(fnameHas === true && lnameHas === true && emailHas === true && phone_noHas === true && ageHas === true && addressHas === true){
       $('#idProofError').addClass('hideDiv');
 $('#errorMessageText').text("*All fields are required");
    let datastring='fname='+fnameValue+'&profile_pic='+profile_pic+'&lname='+lnameValue+'&email='+emailValue+'&gender='+gender+'&phone_no='+phone_noValue+'&age='+ageValue+'&bdate='+bdate+'&id_proof='+id_proof+'&address='+addressValue;

       $.ajax({
        type: "POST",
        url: "registration/submit_data.php",
        data: datastring,
        success: function (res) {
        if (res==1) {
          alert("Register Successfully ,You will receive username and password via sms");
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





});