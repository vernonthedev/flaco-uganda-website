<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Flames Of Compassion Uganda | Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{ asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{ asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="alternate icon" class="js-site-favicon" type="image/png" href="images/flaco-logo.png">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">

      <img class="navbar-brand" src="{{ asset('images/flaco-logo.png')}}" width="10%"/>
      <a class="navbar-brand" href="index.html">Flames of Compassion</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="{{ route('home')}}" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="{{ route('about')}}" class="nav-link">About</a></li>
          <li class="nav-item"><a href="{{ route('causes')}}" class="nav-link">Causes</a></li>
          <li class="nav-item"><a href="{{ route('blog')}}" class="nav-link">Blog</a></li>
          <li class="nav-item"><a href="{{ route('gallery')}}" class="nav-link">Gallery</a></li>
          <li class="nav-item"><a href="{{ route('contact')}}" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>






  @yield('content')




  <footer class="ftco-footer ftco-section img">
    <div class="overlay"></div>
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-3">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">About Us</h2>
          <p>We exist to provide a safe and productive environment for children to learn and grow while empowering women.</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Recent Blog</h2>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(images/gallery17.jpg);"></a>
            <div class="text">
              <h3 class="heading"><a href="#">Providing Counselling Services to the community</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> July 12, 2023</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url(images/gallery20.jpg);"></a>
            <div class="text">
              <h3 class="heading"><a href="#">Providing Educational Services to our community</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> Dec, 2023</a></div>
                <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-2">
         <div class="ftco-footer-widget mb-4 ml-md-4">
          <h2 class="ftco-heading-2">Site Links</h2>
          <ul class="list-unstyled">
            <li><a href="{{ route('home')}}" class="py-2 d-block">Home</a></li>
            <li><a href="{{ route('about')}}" class="py-2 d-block">About</a></li>
            <li><a href="{{ route('causes')}}" class="py-2 d-block">Causes</a></li>
            <li><a href="{{ route('blog')}}" class="py-2 d-block">Blog</a></li>
            <li><a href="{{ route('contact')}}" class="py-2 d-block">Contact Us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">Kampala, Uganda, P.O.BOX 21578, Wakiso District, Uganda East Africa</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+256 039 3217945</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@theflaco.org</span></a></li>
              </ul>
            </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center">

        <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Flames Of Compassion Uganda
</p>
      </div>
    </div>
  </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate-3.0.1.min.js')}} "></script>
<script src="{{asset('js/popper.min.js')}} "></script>
<script src="{{asset('js/bootstrap.min.js')}} "></script>
<script src="{{asset('js/jquery.easing.1.3.js')}} "></script>
<script src="{{asset('js/jquery.waypoints.min.js')}} "></script>
<script src="{{asset('js/jquery.stellar.min.js')}} "></script>
<script src="{{asset('js/owl.carousel.min.js')}} "></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}} "></script>
<script src="{{asset('js/aos.js')}} "></script>
<script src="{{asset('js/jquery.animateNumber.min.js')}} "></script>
<script src="{{asset('js/bootstrap-datepicker.js')}} "></script>
<script src="{{asset('js/jquery.timepicker.min.js')}} "></script>
<script src="{{asset('js/scrollax.min.js')}} "></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('js/google-map.js')}} "></script>
<script src="{{asset('js/main.js')}} "></script>

</body>
</html>
