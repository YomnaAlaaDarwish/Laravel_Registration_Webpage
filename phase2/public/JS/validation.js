let id = (id) => document.getElementById(id);

let classes = (classes) => document.getElementsByClassName(classes);

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
  
      // icons
      failureIcon[serial].style.opacity = "0";
      successIcon[serial].style.opacity = "1";
    }
  };


  