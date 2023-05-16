@extends('layouts.main');
@section('main-container');
  <section class="service">
    <div class="box">
      <div class="container">
        <div class="info">
          <div class="head">
            <h6>{{__('msg.appointment')}}</h6>
            <h1>{{__('msg.A Company Involved In Service And Maintenance')}}</h1>
          </div>
          <p></p>
          <div>
            <br>
            <p><br>
            <div id="txtHint"></div>
            </p>
          </div>
        </div>
        <form id="form">
          <h4 style="color:Orange;font-size:90px">
            <div class="hh">{{__('msg.Registered')}}<br></div>
            <div>
              <centre>
                <p style="color:white;font-size:20px"> {{__('msg.Thank you for Registering.')}}</p>
              </centre>

              <html>

              <head>
                <title>{{__('msg.ajax example')}}</title>

                <!-- Optional theme -->
              </head>

              <body>
                <div class="container" style="color:white;font-size:20px">
                  <style>
                    table,
                    th,
                    td {
                      border: 9px solid black;
                    }
                  </style>

                  <body>
                    <table>
                      <tr>
                        <th style="color:Orange;font-size:30px">{{__('msg.username')}}</th>
                        <th style="color:Orange;font-size:30px">{{__('msg.fullname')}}</th>
                        <th style="color:Orange;font-size:30px">{{__('msg.address')}}</th>
                        <th style="color:Orange;font-size:30px">{{__('msg.phonenumber')}}</th>
                      </tr>

                    </table>
                </div>

                <script src="jquery-3.2.1.min.js"></script>
                <script src="bootstrap.min.js"></script>
              </body>

              </html>
        </form>
      </div>

  </section>

  @endsection
