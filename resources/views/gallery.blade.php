@extends('app')

@section('content')
<div class="inner-hero">
  <div class="video">
     <video autoplay loop class="fillWidth" id="video" poster="img/site/page-poster.jpg">
        <source src="video/page.webm" type="video/webm">
        <source src="video/page.ogv" type="video/ogg">
        <source src="video/page.mp4" type="video/mp4">
     </video>
  </div>
  <div class="overlay-hero"></div>
  <div class="container hero-text pt-120">
     <div class="row">
        <div class="col-sm-12 ">
           <h1 class="mb-10 uppercase line-left">Gallery</h1>
           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
           </p>
        </div>
     </div>
  </div>
</div>
</section>

<section class="portfolio bg-grey pt-100 pb-100">
<div class="works">
  <div class="container ">
      <div class="row mb-30">
         <div class="col-sm-3">
            <div class="box work web">
               <div class="box-img">
                  <img src="img/portfolio/5.jpg" alt="">
               </div>
               <div class="box-content">
                  <h3>Construction</h3>
               </div>
               <a class="link" href="portfolio_single.html"></a>
               <a class="venobox more"  href="img/portfolio/5.jpg">
                   <span>
                       <i class="icon-search-6"></i>
                   </span>
               </a>
            </div>
         </div>
         <div class="col-sm-3">
            <div class="box work web">
               <div class="box-img">
                  <img src="img/portfolio/6.jpg" alt="">
               </div>
               <div class="box-content">
                  <h3>Main Entry Gate</h3>
               </div>
               <a class="link" href="portfolio_single.html"></a>
               <a class="venobox more"  href="img/portfolio/6.jpg">
                   <span>
                       <i class="icon-search-6"></i>
                   </span>
               </a>
            </div>
         </div>
         <div class="col-sm-3">
            <div class="box work web">
               <div class="box-img">
                  <img src="img/portfolio/7.jpg" alt="">
               </div>
               <div class="box-content">
                  <h3>Garden</span></h3>
               </div>
               <a class="link" href="portfolio_single.html"></a>
               <a class="venobox more"  href="img/portfolio/7.jpg">
                   <span>
                       <i class="icon-search-6"></i>
                   </span>
               </a>
            </div>
         </div>
         <div class="col-sm-3">
            <div class="box work web">
               <div class="box-img">
                  <img src="img/portfolio/8.jpg" alt="">
               </div>
               <div class="box-content">
                  <h3>Concrete Road</h3>
               </div>
               <a class="link" href="portfolio_single.html"></a>
               <a class="venobox more"  href="img/portfolio/8.jpg">
                   <span>
                       <i class="icon-search-6"></i>
                   </span>
               </a>
            </div>
         </div>
     </div>

     <div class="row mb-30">
        <div class="col-sm-3">
           <div class="box work web">
              <div class="box-img">
                 <img src="img/portfolio/2.jpg" alt="">
              </div>
              <div class="box-content">
                 <h3>Enquiry Stop</h3>
              </div>
              <a class="link" href="portfolio_single.html"></a>
              <a class="venobox more"  href="img/portfolio/2.jpg">
                  <span>
                      <i class="icon-search-6"></i>
                  </span>
              </a>
           </div>
        </div>
        <div class="col-sm-3">
           <div class="box work web">
              <div class="box-img">
                 <img src="img/portfolio/3.jpg" alt="">
              </div>
              <div class="box-content">
                 <h3>Existing House</h3>
              </div>
              <a class="link" href="portfolio_single.html"></a>
              <a class="venobox more"  href="img/portfolio/3.jpg">
                  <span>
                      <i class="icon-search-6"></i>
                  </span>
              </a>
           </div>
        </div>
        <div class="col-sm-3">
           <div class="box work web">
              <div class="box-img">
                 <img src="img/portfolio/9.jpg" alt="">
              </div>
              <div class="box-content">
                 <h3>Garden Another View</h3>
              </div>
              <a class="link" href="portfolio_single.html"></a>
              <a class="venobox more"  href="img/portfolio/9.jpg">
                  <span>
                      <i class="icon-search-6"></i>
                  </span>
              </a>
           </div>
        </div>
        <div class="col-sm-3">
           <div class="box work web">
              <div class="box-img">
                 <img src="img/portfolio/10.jpg" alt="">
              </div>
              <div class="box-content">
                 <h3>Mani Entry Gate inside</h3>
              </div>
              <a class="link" href="portfolio_single.html"></a>
              <a class="venobox more"  href="img/portfolio/10.jpg">
                  <span>
                      <i class="icon-search-6"></i>
                  </span>
              </a>
           </div>
        </div>
    </div>
  </div>
</div>
</section>

<section class="quote quote-content img overlay text-center pt-80 pb-80">
<div class="img-content col-md-12">
  <div class="background-img">
     <img src="img/site/9.jpg" alt="">
  </div>
</div>
<div class="container">
  <div class="row">
     <div class="quote-box">
        <div class="col-md-12">
           <a class="but opc mt-40 line" href="{{ url('/contact') }}">Enquiry <span class="arrow left"><i class="icon-angle-right"></i></span></a>
           <h4 class="mt-20">Some text goes here</h4>
        </div>
     </div>
  </div>
</div>
@endsection
