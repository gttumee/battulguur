<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>@yield('title')</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{ route('index') }}">
            <span>
              Баттулгуур ХХК
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="s-1"> </span>
            <span class="s-2"> </span>
            <span class="s-3"> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav">    
                @if ( Route::currentRouteName() === 'index' )
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('index') }}">Эхлэл</a>
                </li> 
                @else
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('index') }}">Эхлэл</a>
                </li> 
                @endif
                @if ( Route::currentRouteName() === 'about' )
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('about') }}">Бидний тухай</a>
                </li> 
                @else
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('about') }}">Бидний тухай</a>
                </li> 
                @endif
                @if ( Route::currentRouteName() === 'service' )
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('service') }}">Үйлчилгээ</a>
                </li> 
                @else
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('service') }}">Үйлчилгээ</a>
                </li> 
                @endif
                @if ( Route::currentRouteName() === 'performed' )
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('performed') }}">Гүйцэтгэсэн ажил</a>
                </li> 
                @else
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('performed') }}">Гүйцэтгэсэн ажил</a>
                </li> 
                @endif
                @if ( Route::currentRouteName() === 'contact' )
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('contact') }}">Холбоо барих</a>
                </li> 
                @else
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('contact') }}">Холбоо барих</a>
                </li> 
                @endif
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>
