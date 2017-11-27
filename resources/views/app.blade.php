<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <title>Tirupati Nagar</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Css -->
      <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all"/>
      <link href="{{ asset('css/base.css') }}" rel="stylesheet" type="text/css" media="all"/>
      <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" media="all"/>
      <link href="{{ asset('css/owl-carousel/owl.carousel.css') }}" rel="stylesheet"  media="all"/>
      <link href="{{ asset('css/owl-carousel/owl.theme.css') }}" rel="stylesheet"  media="all" />
      <link href="{{ asset('css/venobox.css') }}" type="text/css" rel="stylesheet" media="all"/>
      <link href="{{ asset('css/fonts.css') }}" rel="stylesheet" type="text/css"  media="all" />
   </head>
   <body class="stop-scroll">
      <div class="loader">
         <div class="loader-inner">
             <img src="{{ asset('img/loading.gif')}}" width="100">
         </div>
      </div>

      <div id="wrapper">
         <div class="inner-wrapper">
            <div class="mask-canvas"></div>
            <aside class="offest-nav-canvas ">
               <nav class="main-nav">
                  <ul class="menu">
                     <li><a href="{{ url('/') }}">Home</a></li>
                     <li><a href="{{ url('/about') }}">About</a></li>
                     <li><a href="{{ url('/service') }}">Facilities</a></li>
                     <li><a href="{{ url('/portfolio') }}">Gallery</a></li>
                     <li><a href="{{ url('/contact') }}">Contact</a></li>
                  </ul>
               </nav>
               <div class="socials-nav">
                  <ul class="socials">
                     <li><a href="#"><i class="icon-facebook"></i></a></li>
                     <li><a href="#"><i class="icon-vimeo"></i></a></li>
                     <li><a href="#"><i class="icon-twitter"></i></a></li>
                     <li><a href="#"><i class="icon-instagram"></i></a></li>
                  </ul>
               </div>
            </aside>

            <section class="hero {{ $page }}">
               <header class="header">
                  <div class="logo left-part">
                     <a href="{{url('')}}">
                     <img  alt="" src="img/logo.png">
                     </a>
                  </div>
                  <div class="toggle-navigation right-part">
                     <div class="toggle-nav-canvas">
                        <a href="#">
                           <div class="lines"></div>
                        </a>
                     </div>
                  </div>
               </header>
               @yield('content')
            </section>

            <footer class="footer pb-50">
               <a class="plus-btn" href="#top"><i class="icon-up-open"></i></a>
               <div class="container ">
                  <div class="row">
                     <div class="col-md-12 text-center">
                        <div class="logo left-part">
                           <img  alt="" src="img/logo.png">
                        </div>
                        <p class="mt-10">© 2017 Tirupati Nagar. All Rights Reserved.</p>
                        <ul class="socials mt-15">
                           <li><a href="#"><i class="icon-facebook"></i></a></li>
                           <li><a href="#"><i class="icon-vimeo"></i></a></li>
                           <li><a href="#"><i class="icon-twitter"></i></a></li>
                           <li><a href="#"><i class="icon-instagram"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </footer>
         </div>
      </div>
      <script src="js/jquery-1.12.4.min.js" type="text/javascript"></script>
      <script src="js/owl.carousel.js" type="text/javascript"></script>
      <script src="js/venobox.min.js" type="text/javascript"></script>
      <script src="js/script.js" type="text/javascript"></script>
   </body>
</html>
