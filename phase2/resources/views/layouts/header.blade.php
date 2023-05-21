<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{url('ALL.css')}}">
  <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css')}}">
  <link rel="stylesheet" href="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css')}}">
  <link
    href="{{url('https://fonts.googleapis.com/css2?family=Cairo:wght@700&family=Dancing+Script&family=Josefin+Sans:wght@500&display=swap')}}"
    rel="stylesheet">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light me-3">
      <a class="head navbar-brand" href="">
        <i class="fa fa-building "></i>
        <span>apex<span>
      </a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">
          <li class="nav-item active">
            <a class="des nav-link" href="">{{__('msg.home')}} <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">{{__('msg.shop')}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">{{__('msg.about')}}</a>
          </li>
          <li class="nav-item latest">

            <a class="nav-link hot" href="#">{{__('msg.latest')}}</a>


            <ul class="item-list ">
              <li><a href="#">{{__('msg.Product List')}}</a></li>
              <li><a href="#">{{__('msg.Product Details')}}</a></li>
            </ul>

          </li>
          <li class="nav-item items">
            <a class="nav-link" href="#">{{__('msg.blog')}}</a>
            <ul class="item-list">
              <li><a href="#">{{__('msg.Blog')}}</a></li>
              <li><a href="#">{{__('msg.Blog Details')}}</a></li>
            </ul>
          </li>
          <li class="nav-item items">
            <a class="nav-link" href="#">{{__('msg.pages')}}</a>
            <ul class="item-list">
              <li><a href="#">{{__('msg.Login')}}</a></li>
              <li><a href="#">{{__('msg.Cart')}}</a></li>
              <li><a href="#">{{__('msg.Element')}}</a></li>
              <li><a href="#">{{__('msg.Confermation')}}</a></li>
              <li><a href="#">{{__('msg.Product Checkout')}}</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">{{__('msg.contact')}}</a>
          </li>

        </ul>
        <div class="icons">
          <ul class="navbar-nav icons mr-auto">
            <li class="nav-item icon">
              <a class="nav-link" href="#"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></a>
            </li>
            <li class="nav-item icon">
              <a class="nav-link" href="#"><i class="fa-sharp fa-solid fa-user"></i></a>
            </li>
            <li class="nav-item icon">
              <a class="nav-link" href="#"><i class="fa-sharp fa-solid fa-cart-shopping"></i></a>
            </li>
          </ul>
        </div>
        <a id="lang1" href="{{ route('converter','ar')}}"> عربي </a>
        <a id="lang2" href="{{ route('converter','en')}}"> English </a>

      </div>
    </nav>

  </header>
  <section class="welcome">
    <div class="overlay ">
      <div class="info">
        <div class="contain">
          <h5>{{__('msg.welcome to apex')}}</h5>
          <h1>{{__('msg.A construction & Renovation Company')}}</h1>
          <div class="items">
            <p>{{__('msg.Commercial')}}</p>
            <p><i class="fa-sharp fa-solid fa-circle"></i>{{__('msg.Residential')}}</p>
            <p><i class="fa-sharp fa-solid fa-circle"></i>{{__('msg.Industrial')}}</p>
          </div>
          <div class="btn">
            <button>{{__('msg.More Details')}}</button>
          </div>

        </div>
      </div>
    </div>
  </section>


  <body>

