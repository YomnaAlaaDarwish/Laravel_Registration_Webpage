
@extends('layouts.main');
@section('main-container');


  <section class="service">
    <div class="box">
      <div class="container">
        <div class="info">
          <div class="head">
            <h6>appointment</h6>
            <h1>A Company Involved In Service And Maintenance</h1>
          </div>
          <p>Please fill out the form to contact one of the specialized engineers, and we will contact you via e-mail to
            inform you of the appropriate date.Thank you for choosing AJAX and trusting us.</p>
          <div>
            <br>
            <p>Actors Names:<br>
            <div id="txtHint"></div>
            </p>
          </div>
        </div>
        <form id="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="inputs">
          <input type="hidden" id="action" value="register">
          <div>
            <i class="fas fa-user"></i>
            <label for="username">Full Name</label>
            <input type="text" name="fullname" id="fullname" placeholder=" Enter your full_name" />

            <i class="fas fa-exclamation-circle failure-icon"></i>

            <i class="far fa-check-circle success-icon"></i>


            <div class="error"></div>

          </div>
          <div>

            <i class="fas fa-user"></i>
            <label for="username">User Name</label>
            <input type="text" name="username" id="username" placeholder="Enter your name" />
            <i class="fas fa-exclamation-circle failure-icon"></i>
            <i class="far fa-check-circle success-icon"></i>
            <div class="error"></div>
          </div>
          <div>

            <i class="far fa-envelope"></i>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="abc@gmail.com" />
            <i class="fas fa-exclamation-circle failure-icon"></i>
            <i class="far fa-check-circle success-icon"></i>
            <div class="error"></div>
          </div>
          <div>

            <i class="fas fa-lock"></i>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password here" />
            <i class="fas fa-exclamation-circle failure-icon"></i>
            <i class="far fa-check-circle success-icon"></i>
            <div class="error"></div>
          </div>
          <div>
            <i class="fas fa-lock"></i>
            <label for="password"> Confirm_Password</label>
            <input type="password" name="confirmPassword" id="confirmPassword" placeholder=" confirm Password here" />
            <i class="fas fa-exclamation-circle failure-icon"></i>
            <i class="far fa-check-circle success-icon"></i>
            <div class="error"></div>
          </div>
          <div>
            <i class="far fa-calendar-alt"></i>
            <label for="birthdate">Birthdate</label>
            <input type="text" placeholder="DD/MM/YYYY" onfocus="(this.type='date')" name="address" id="birthdate">
            <button type="button" onclick="showHint()">Check Actors</button>
            <i class="fas fa-exclamation-circle failure-icon"></i>
            <i class="far fa-check-circle success-icon"></i>
            <div class="error"></div>

          </div>
          <div>

            <i class="fas fa-phone"></i>
            <label for="phone">Phone</label>
            <input type="text" inputmode="numeric" placeholder="Your Phone Number" name="phone" id="phone">
            <i class="fas fa-exclamation-circle failure-icon"></i>
            <i class="far fa-check-circle success-icon"></i>
            <div class="error"></div>
          </div>
          <div>

            <i class="far fa-address-book"></i>
            <label for="address">Address</label>
            <input type="text" class="child" placeholder="Your Address" name="address" id="address">

            <i class="fas fa-exclamation-circle failure-icon"></i>
            <i class="far fa-check-circle success-icon"></i>
            <div class="error"></div>
          </div>
          <div>

            <i class="fa fa-camera"></i>
            <label class="la" for="image">User Image</label>
            <input type="file" class="child image" id="image" name="image">
            <i class="fas fa-exclamation-circle failure-icon"></i>
            <i class="far fa-check-circle success-icon"></i>
            <div class="error"></div>
          </div>

          <button class="bt" type="submit" id="submit" action="submit">Get Appointment</button>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
          </script>
        </form>
      </div>


  </section>
@endsection
