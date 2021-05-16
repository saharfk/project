<?php 
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="description" content="Mobile Application HTML5 Template">

  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

  <title>VEGLECTHERAPY</title>

  <link rel="shortcut icon" href="../public/front/assets/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="../public/front/assets/css/maicons.css">

  <link rel="stylesheet" href="../public/front/assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../public/front/assets/vendor/owl-carousel/css/owl.carousel.min.css">

  <link rel="stylesheet" href="../public/front/assets/css/bootstrap.css">

  <link rel="stylesheet" href="../public/front/assets/css/bootstrap.min.css">

  <link rel="stylesheet" href="../public/front/assets/css/mobster.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700%7CMontserrat:400,700">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
    crossorigin="anonymous">

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light navbar-floating">
    <div class="container">
      <a class="navbar-brand" href="{{ route('welcome') }}">
        <img src="../public/front/assets/favicon.png" alt="" width="100" height="70">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav ml-lg-5 mt-3 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('welcome') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}">About</a>
          </li>
          <?php 
          if (Auth::check() && auth()->user()->access == 0) {
              echo "<li class='nav-item'><a class='nav-link' href='".route('admin.dashboard')."'>Dashboard</a></li>";
          }else if (Auth::check() && auth()->user()->access == 1) {
              echo "<li class='nav-item'><a class='nav-link' href='".route('doctor.dashboard')."'>Dashboard</a></li>";
          }else if (Auth::check() && auth()->user()->access == 2) {
              echo "<li class='nav-item'><a class='nav-link' href='".route('normal.dashboard')."'>Dashboard</a></li>";
          }
          ?>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
          </li>
        </ul>
        <div class="ml-auto my-2 my-lg-0">
          <button class="btn btn-primary rounded-pill" onclick="window.location.href='https://github.com/parinazmellatdoust/project';">Download github code</button>
        </div>
      </div>
    </div>
  </nav>

  <div class="page-hero-section bg-image hero-home-1" style="background-image: url(../public/front/assets/img/bg_hero_1.svg);">
    <div class="hero-caption pt-5">
      <div class="container h-100">
        <div class="row align-items-center h-100">
          <div class="col-lg-6 wow fadeInUp">
            <h1 class="mb-4">Visual Neglect Therapy Service</h1>
            <p class="mb-4">This is a Student project for the final bachelor project.
              <br/> So if you like this please give us a star in Github.
            </p>
            <a href="#mouse-here" class="page-scroll">
              <span class="myb btn btn--start ">
                Let's Go
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mouse-here" style="height:30px;"></div>

  <div class="position-realive bg-image" style="background-image: url(../public/front/assets/img/pattern_1.svg);">

    <div class="page-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 py-3">
            <div class="img-place mobile-preview shadow wow zoomIn">
              <img src="../public/front/assets/img/indexp.jpeg" alt="" style="height: 100%;width: 100%">

            </div>
          </div>
          <div class="col-lg-6 offset-lg-1 py-3 mt-lg-5 wow fadeInUp">
            <h1 class="mb-4">Doctor's personal page</h1>
            <p class="mb-4">After registration on the site , go to your panel then click on report button and inform admin that you are a
              doctor so we will promote you as soon as possible.
              <br/> You can use your report button for adding a patient too.
              <br/> For more information about doctor panel click
              <a href="{{ route('DoctorsGuide') }}">Here</a>.
              <br/> And if you want to know how to set levels for your patient click
              <a href="{{ route('howToPlayGuide') }}">Here</a>.
            </p>
            <a href="{{ route('login') }}" class="btn btn-outline-primary rounded-pill">Sign up / Sign in</a>
          </div>
        </div>
      </div>
    </div>
    <div class="page-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-1 py-3 mt-lg-5 wow fadeInUp">
            <h1 class="mb-4">Patient's personal page</h1>
            <p class="mb-4">After registration on the site then send your username to your doctor and wait until your doctor begin your proccess
              then you can start to play the game.
              <br/> and for more information about patient panel click
              <a href="{{ route('PatientsGuide') }}">Here</a>.
              <br/> for more information about how to play game click
              <a href="{{ route('howToPlayGuide') }}">Here</a>.
              </p>
            <a href="{{ route('login') }}" class="btn btn-outline-primary rounded-pill">Sign up / Sign in</a>
          </div>
          <div class="col-lg-5 py-3">
            <div class="img-place mobile-preview shadow wow zoomIn" style="height: 100%">
              <img src="../public/front/assets/img/indexd.jpeg" alt="" style="height: 100%;width: 100%">
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>


  <div class="page-section bg-dark fg-white">
    <div class="container">
      <h1 class="text-center">Why Choose Us</h1>

      <div class="row justify-content-center mt-5">
        <div class="col-md-6 col-lg-6 py-3">
          <div class="card card-body border-0 bg-transparent text-center wow zoomIn" data-wow-delay="200ms">
            <div class="mb-3">
              <img src="../public/front/assets/img/icons/testimony.svg" alt="">
              <p class="fs-large">Happy Patient</p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-6 py-3">
          <div class="card card-body border-0 bg-transparent text-center wow zoomIn" data-wow-delay="600ms">
            <div class="mb-3">
              <img src="../public/front/assets/img/icons/coins.svg" alt="">
            </div>
            <p class="fs-large">Free service</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 py-3">
          <div class="card card-body border-0 bg-transparent text-center wow zoomIn" data-wow-delay="800ms">
            <div class="mb-3">
              <img src="../public/front/assets/img/icons/support.svg" alt="">
            </div>
            <p class="fs-large">24/7 Support</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 py-3">
          <div class="card card-body border-0 bg-transparent text-center wow zoomIn" data-wow-delay="1000ms">
            <div class="mb-3">
              <img src="../public/front/assets/img/icons/laptop.svg" alt="">
            </div>
            <p class="fs-large">Full Features</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="page-section bg-image bg-image-overlay-dark" style="background-image: url(../public/front/assets/img/docBackground.jpg);">
    <div class="container fg-white">
      <div class="row">
        <div class="col-md-8 col-lg-6  wow fadeInUp">
          <h2 class="mb-5 fg-white fw-normal">What is visual neglect ?</h2>
          <p class="fs-large font-italic" >Visual neglect (visual hemi-inattention) is a neuropsychological disorder of attention in which patients exhibit
            a lack of response to stimuli in one half of their visual field that cannot be explained by primary damage to
            the visual geniculostriate pathways.</p>
          <p class="fs-large fg-grey fw-medium mb-5">- VEGLECTHERAPY</p>
        </div>
      </div>
    </div>
  </div>
  <!-- </section> -->
  <div class="page-footer-section bg-dark fg-white">
    <div class="container">
      <div class="row mb-5 py-3">
        <div class="col-sm-6 col-lg-2 py-3">
          <h5 class="mb-3">Pages</h5>
          <ul class="menu-link">
            <li>
              <a href="{{ route('welcome') }}" class="">Home</a>
            </li>
            <?php 
          if (Auth::check() && auth()->user()->access == 0) {
              echo "<li><a href='".route('admin.dashboard')."'>Dashboard</a></li>";
          }else if (Auth::check() && auth()->user()->access == 1) {
              echo "<li><a href='".route('doctor.dashboard')."'>Dashboard</a></li>";
          }else if (Auth::check() && auth()->user()->access == 2) {
              echo "<li><a href='".route('normal.dashboard')."'>Dashboard</a></li>";
          }
          ?>
            
            <li>
              <a href="{{ route('about') }}" class="">About</a>
            </li>
            <li>
              <a href="{{ route('contact') }}" class="">Contact</a>
            </li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-2 py-3">
          <h5 class="mb-3">Guide</h5>
          <ul class="menu-link">
            <li>
              <a href="{{ route('DoctorsGuide') }}" class="">Doctors</a>
            </li>
            <li>
              <a href="{{ route('PatientsGuide') }}" class="">Patient</a>
            </li>
            <li>
              <a href="{{ route('howToPlayGuide') }}" class="">how to play?</a>
            </li>
          </ul>
        </div>
        <div class="col-md-6 col-lg-4 py-3">
          <h5 class="mb-3">Contact Us</h5>
          <ul class="menu-link">
            <li>
              <a href="https://mail.google.com/" class="">saharkashany@gmail.com</a>
            </li>
            <li>
              <a href="https://mail.google.com/" class="">parinazmellatdoust@gmail.com </a>
            </li>
            <li>
              <a href="https://mail.google.com/" class="">neginshahany@gmail.com </a>
            </li>
          </ul>
        </div>
        <div class="col-md-6 col-lg-4">
          <img src="../public/front/assets/footerLogo.png" alt="" width="300" height="210">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-12">
          <p style="text-align: center">Copyright &copy;
            All rights reserved</p>
        </div>
      </div>
    </div>
  </div>

  <script src="../public/front/assets/js/jquery-3.5.1.min.js"></script>

  <script src="../public/front/assets/js/bootstrap.bundle.min.js"></script>

  <script src="../public/front/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

  <script src="../public/front/assets/vendor/wow/wow.min.js"></script>

  <script src="../public/front/assets/js/mobster.js"></script>

</body>

</html>