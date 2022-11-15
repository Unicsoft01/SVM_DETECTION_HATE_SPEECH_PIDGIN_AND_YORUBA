@php
  $setting =  App\Models\Setting::find(1);
  // $services =  App\Models\Services::latest()->get();
  // $whychooseus =   App\Models\WhyChooseUs::latest()->get();
  // $releases =   App\Models\LatestRelease::latest()->limit(5)->get();
  // $sliders = App\Models\Homeslider::latest()->limit(5)->get();
  // $courses = App\Models\Courses::latest()->limit(5)->get();
@endphp 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{$set['page']}} - {{$setting->site_name}}</title>
  <meta content="{{$setting->description}}" name="description">
  <meta content="{{$setting->description}}" name="keywords">

  <!-- Favicons -->
  <link href="{{url('/')}}/frontend_assets/img/favicon.png" rel="icon">
  <link href="{{url('/')}}/frontend_assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('/')}}/frontend_assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{url('/')}}/frontend_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{url('/')}}/frontend_assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{url('/')}}/frontend_assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{url('/')}}/frontend_assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{url('/')}}/frontend_assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('/')}}/frontend_assets/css/style.css" rel="stylesheet">

  <style type="text/css">
    .span{
  animation: blinker 1s linear infinite;
}

@keyframes blinker{
  50%{
    opacity: 0;
  }
}
  </style>
</head>

<body>

  <!-- ======= Header ======= -->

  <header id="header" class="fixed-top @if(route('home')==url()->current()) header-transparent @endif">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>{{$setting->site_name}}</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="{{url('/')}}/frontend_assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          @if(route('home')==url()->current())
          <li><a class="nav-link scrollto active" href="{{route('login')}} ">Sign in</a></li>
          @else
          <li><a class="nav-link scrollto active" href="/">Home</a></li>
          @endif
          <li><a class="nav-link scrollto" href="#about">About Us</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{route('contact')}}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->