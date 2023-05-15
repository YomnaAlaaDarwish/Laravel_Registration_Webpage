
@extends('layouts.main');
@section('main-container');


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
        <form id="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="inputs">
          <input type="hidden" id="action" value="register">
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
            <button type="button" onclick="showHint()">{{__('msg.Check Actors')}}</button>
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
        </form>
      </div>


  </section>
@endsection
