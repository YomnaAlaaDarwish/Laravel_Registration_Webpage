<!DOCTYPE html>
<html lang="en">
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<html>
<head>
    <title>Laravel 8 Ajax Validation Example - ItSolutionStuff.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
</head>
<body>
@extends('layouts.main');
@section('main-container');

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <section class="service">
    <div class="box">
      <div class="container">
        <div class="info">
          <div class="head">
            <h6>{{__('msg.appointment')}}</h6>
            <h1>{{__('msg.Company')}}</h1>
          </div>
          <p>{{__('msg.Please')}}</p>
          <div>
            <br>
            <p>{{__('msg.Actors Names:')}}<br>
            <div id="txtHint"></div>
            </p>
          </div>
        </div>
        <form id="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  class="inputs">
        {{ csrf_field() }}
          <div>
            <i class="fas fa-user"></i>
            <label for="username">{{__('msg.Full Name')}}</label>
            <input type="text" name="fullname" id="fullname" placeholder=" {{__('msg.EFull')}}" />

            <i class="fas fa-exclamation-circle failure-icon"></i>

            <i class="far fa-check-circle success-icon"></i>


            <div class="error"></div>

          </div>
          <div>

            <i class="fas fa-user"></i>
            <label for="username">{{__('msg.User Name')}}</label>
            <input type="text" name="username" id="username" placeholder="{{__('msg.Enter your name')}}" />
            <i class="fas fa-exclamation-circle failure-icon"></i>
            <i class="far fa-check-circle success-icon"></i>
            <div class="error"></div>
          </div>
          <div>

            <i class="far fa-envelope"></i>
            <label for="email">{{__('msg.Email')}}</label>
            <input type="email" name="email" id="email" placeholder="msg.abc@gmail.com" />
            <i class="fas fa-exclamation-circle failure-icon"></i>
            <i class="far fa-check-circle success-icon"></i>
            <div class="error"></div>
          </div>
          <div>

            <i class="fas fa-lock"></i>
            <label for="password">{{__('msg.Password')}}</label>
            <input type="password" name="password" id="password" placeholder="{{__('msg.Pass')}}" />
            <i class="fas fa-exclamation-circle failure-icon"></i>
            <i class="far fa-check-circle success-icon"></i>
            <div class="error"></div>
          </div>
          <div>
            <i class="fas fa-lock"></i>
            <label for="password"> {{__('msg.Confirm_Password')}}</label>
            <input type="password" name="confirmPassword" id="confirmPassword" placeholder=" {{__('msg.confirm Password here')}}" />
            <i class="fas fa-exclamation-circle failure-icon"></i>
            <i class="far fa-check-circle success-icon"></i>
            <div class="error"></div>
          </div>
          <div>
            <i class="far fa-calendar-alt"></i>
            <label for="birthdate">{{__('msg.Birthdate')}}</label>
            <input type="text" placeholder="DD/MM/YYYY" onfocus="(this.type='date')" name="address" id="birthdate">
            <button type="button" class="check_actors">{{__('msg.Check Actors')}}</button>
            <i class="fas fa-exclamation-circle failure-icon"></i>
            <i class="far fa-check-circle success-icon"></i>
            <div class="error"></div>

          </div>
          <div>

            <i class="fas fa-phone"></i>
            <label for="phone">{{__('msg.Phone')}}</label>
            <input type="text" inputmode="numeric" placeholder="{{__('msg.Your Phone Number')}}" name="phone" id="phone">
            <i class="fas fa-exclamation-circle failure-icon"></i>
            <i class="far fa-check-circle success-icon"></i>
            <div class="error"></div>
          </div>
          <div>

            <i class="far fa-address-book"></i>
            <label for="address">{{__('msg.Address')}}</label>
            <input type="text" class="child" placeholder="{{__('msg.Your Address')}}" name="address" id="address">

            <i class="fas fa-exclamation-circle failure-icon"></i>
            <i class="far fa-check-circle success-icon"></i>
            <div class="error"></div>
          </div>
          <div>

            <i class="fa fa-camera"></i>
            <label class="la" for="image">{{__('msg.User Image')}}</label>
            <input type="file" class="child image" id="image" name="image">
            <i class="fas fa-exclamation-circle failure-icon"></i>
            <i class="far fa-check-circle success-icon"></i>
            <div class="error"></div>
          </div>

          <button class="bt" type="submit" id="submit" action="submit">{{__('msg.Get Appointment')}}</button>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
          </script>
          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
         
        </div>
    </form>
</div>
       
<script type="text/javascript">
       let id = (id) => document.getElementById(id);

let classes = (classes) => document.getElementsByClassName(classes);
var one, two, three, four, five, six, seven, eight, nine = false;

let fullname = id("fullname"),
username = id("username"),
  email = id("email"),
  password = id("password"),
  confirmpassword = id("confirmPassword"),
  date = id("birthdate"),
  phone = id("phone"),
  address = id("address"),
  image = id("image"),
  form = id("form"),
  errorMsg = classes("error"),
  successIcon = classes("success-icon"),
  failureIcon = classes("failure-icon");

// Adding the submit event Listener

form.addEventListener("submit", (e) => {
  e.preventDefault();
  engine0(fullname, 0, "FullName is required");
  engine(username, 1, "Username is required");
  engine2(email, 2, "Email is required");
  engine3(password, 3, "Password is required");
  engine4(confirmpassword, 4,"confirm password is required");
  engine(birthdate, 5, "birthdate is required");
  engine(phone, 6, "phone is required");
  engine(address, 7, "address is required");
  engine(image, 8, "image is required");
  if (one == true && two == true && three == true && four == true && five == true) {
  
  $(document).ready(function() {
    var _token = $("input[name='_token']").val();
    var username = $("input[name='username']").val();
    var fullname = $("input[name='fullname']").val();
    var email = $("input[name='email']").val();
    var password = $("input[name='password']").val();
    var birthdate = $("input[name='birthdate']").val();
    var phone = $("input[name='phone']").val();
    var address = $("input[name='address']").val();
    var image = $("input[name='image']").val();
    

    $.ajax({
        url: "{{ route('my.form') }}",
        type:'POST',
        data: {_token:_token, username:username, fullname:fullname, email:email,password:password,birthdate:birthdate,phone:phone,address:address,image:image},
        success: function(data) {
            if($.isEmptyObject(data.error)){
                alert(data.success);
            }else{
                alert(data.error);
            }
        }
      });
     });
    }
});
let engine0 = (id, serial, message) => {
    var regName = /^[a-zA-Z]+ [a-zA-Z]+$/;
    if (id.value.trim() === "") {
      errorMsg[serial].innerHTML = message;
      id.style.border = "2px solid red";
  
      // icons
      failureIcon[serial].style.opacity = "1";
      successIcon[serial].style.opacity = "0";
    } else if(!id.value.match(regName)) {
      errorMsg[serial].innerHTML = "full name must contain only with char and FName LName";
      id.style.border = "2px solid red";
  
      // icons
      failureIcon[serial].style.opacity = "1";
      successIcon[serial].style.opacity = "0";}
      else  {
      errorMsg[serial].innerHTML = "";
      id.style.border = "2px solid green";
      one = true;
      // icons
      failureIcon[serial].style.opacity = "0";
      successIcon[serial].style.opacity = "1";}
    
  };
// engine function which will do all the works
let engine2 = (id, serial, message) => {
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if (id.value.trim() === "") {
    errorMsg[serial].innerHTML = message;
    id.style.border = "2px solid red";

    // icons
    failureIcon[serial].style.opacity = "1";
    successIcon[serial].style.opacity = "0";
  } else if(!id.value.match(mailformat)) {
    errorMsg[serial].innerHTML = "Email must be abc@gmail.com";
    id.style.border = "2px solid red";

    // icons
    failureIcon[serial].style.opacity = "1";
    successIcon[serial].style.opacity = "0";}
    else  {
    errorMsg[serial].innerHTML = "";
    id.style.border = "2px solid green";
    two = true;
    // icons
    failureIcon[serial].style.opacity = "0";
    successIcon[serial].style.opacity = "1";}
  
};
let engine3 = (id, serial, message) => {
    var pw = document.getElementById("password").value;
    var paswd=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/; //the pattern for check the password
  if (id.value.trim() === "") {
    errorMsg[serial].innerHTML = message;
    id.style.border = "2px solid red";

    // icons
    failureIcon[serial].style.opacity = "1";
    successIcon[serial].style.opacity = "0";
  } else if(!pw.match(paswd)) {
    errorMsg[serial].innerHTML = "password must be at least 8 char with at least 1 number and 1 special charact";
    id.style.border = "2px solid red";

    // icons
    failureIcon[serial].style.opacity = "1";
    successIcon[serial].style.opacity = "0";}
    else  {
    errorMsg[serial].innerHTML = "";
    id.style.border = "2px solid green";
    three = true;
    // icons
    failureIcon[serial].style.opacity = "0";
    successIcon[serial].style.opacity = "1";}
  
};
let engine4 = (id, serial,message) => { 
    var pasw2=  /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,}$/; //the pattern for check the password
    if (id.value.trim() === "") {
      errorMsg[serial].innerHTML = message;
      id.style.border = "2px solid red";
  
      // icons
      failureIcon[serial].style.opacity = "1";
      successIcon[serial].style.opacity = "0";
    }else if(id.value!=password.value ){
        errorMsg[serial].innerHTML = "there is no match between password and confirm password";
        id.style.border = "2px solid red";
    
        // icons
        failureIcon[serial].style.opacity = "1";
        successIcon[serial].style.opacity = "0";
    }else if(!id.value.match(pasw2)){
        errorMsg[serial].innerHTML = "password must be at least 8 char with at least 1 number and 1 special charact";
       id.style.border = "2px solid red";

       // icons
      failureIcon[serial].style.opacity = "1";
       successIcon[serial].style.opacity = "0";
    }
     else {
      errorMsg[serial].innerHTML = "";
      id.style.border = "2px solid green";
      four = true;
      // icons
      failureIcon[serial].style.opacity = "0";
      successIcon[serial].style.opacity = "1";
    }
    
  };
  /*let engine5 = (id, serial, message) => {
    var dateformat = /^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$/
    if (id.value.trim() === "") {
      errorMsg[serial].innerHTML = message;
      id.style.border = "2px solid red";
  
      // icons
      failureIcon[serial].style.opacity = "1";
      successIcon[serial].style.opacity = "0";
    } else if(!id.value.match(dateformat)) {
      errorMsg[serial].innerHTML = "birth date must be dd/mm/yyyy or dd-mm-yyyy";
      id.style.border = "2px solid red";
  
      // icons
      failureIcon[serial].style.opacity = "1";
      successIcon[serial].style.opacity = "0";}
      else  {
      errorMsg[serial].innerHTML = "";
      id.style.border = "2px solid green";
  
      // icons
      failureIcon[serial].style.opacity = "0";
      successIcon[serial].style.opacity = "1";}
    
  };*/
let engine = (id, serial, message) => {
    if (id.value.trim() === "") {
      errorMsg[serial].innerHTML = message;
      id.style.border = "2px solid red";
  
      // icons
      failureIcon[serial].style.opacity = "1";
      successIcon[serial].style.opacity = "0";
    } else {
      errorMsg[serial].innerHTML = "";
      id.style.border = "2px solid green";
      five = true;
      // icons
      failureIcon[serial].style.opacity = "0";
      successIcon[serial].style.opacity = "1";
    }
  };


              $(document).on('click','.check_actors',function (e){
                    e.preventDefault();
                      $.ajaxSetup({
                          headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                          }

                      });
                      var date = $("#birthdate").val();
                      var res = "";
                      res = date.split("-");
                      if (res[1] == 0 && res[2] == 0) {
                          $("#txtHint").html("");
                          return;
                      } else {
                          $.ajax({
                              url: "Actors",
                              data: {
                              q: res[2],
                              s: res[1],
                              },
                              type: "GET",
                              success: function (response) {
                              $("#txtHint").html(response);
                              },
                          });
                         
                        
                      }
                  });



</script>
</body>
</html>
      </div>


  </section>
@endsection
