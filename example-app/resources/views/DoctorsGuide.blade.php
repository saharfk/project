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

  <link rel="stylesheet" href="../public/front/assets/css/mobster.css">
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark navbar-floating">
    <div class="container">
      <a class="navbar-brand" href="{{ route('welcome') }}">
        <img src="../public/front/assets/favicon-light.png" alt="" width="100" height="70">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
           <li class="nav-item">
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

<div class="bg-light">

<div class="page-hero-section bg-image hero-mini" style="background-image: url(../public/front/assets/img/hero_mini.svg);">
  <div class="hero-caption">
    <div class="container fg-white h-100">
      <div class="row justify-content-center align-items-center text-center h-100">
        <div class="col-lg-6">
          <h3 class="mb-3 fw-medium">Doctors Guide</h3>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="page-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card-page">
          <h3 class="mb-3">How to signUp?</h3>
          <h5>steps :</h5>
          <ul class="theme-list">

            <li class="list-item">On the home page click on the <b>Sign Up / Sign In</b> button</li>
            <li class="list-item">fill the form and go to your panel</li>

          </ul>

          <h5>how to inform the admin that you are a doctor?</h5>
          <ul class="theme-list">
            <li class="list-item">after you signed in hit the report button on the left side of your panel.</li>
            <li class="list-item">in this form what you will write will be sent to the admin <br>ask admin to promote you to doctors position</li>
            <li class="list-item">after the admin promotes you to the doctors position your panel will update and you can add your Patients</li>

          </ul>
        </div>

        <div class="card-page mt-3">
          <h3 class="mb-3">how to add patients to your list ?</h3>
          <ul class="theme-list">
            <li class="list-item">after the admin promotes you to the doctors position you can tap the report button on the left side of your dashboard<br>
            and send the usernames of your patients to the admin</li>
            <li class="list-item">then, you must wait until the admin adds the patient to your dashboard.</li>
            <p><br><b>if you want to know how to Specifiy level to your patient click <a href="{{ route('howToPlayGuide') }}">here</a></b></p>
            </ul>
        </div>
      </div>
    </div>
  </div>
</div>

</div>



<div class="page-footer-section bg-dark fg-white">
  <div class="container">
    <div class="row mb-5 py-3">
      <div class="col-sm-6 col-lg-2 py-3">
        <h5 class="mb-3">Pages</h5>
        <ul class="menu-link">
          <li><a href="{{ route('welcome') }}" class="">Home</a></li>
          <?php 
          if (Auth::check() && auth()->user()->access == 0) {
              echo "<li><a href='".route('admin.dashboard')."'>Dashboard</a></li>";
          }else if (Auth::check() && auth()->user()->access == 1) {
              echo "<li><a href='".route('doctor.dashboard')."'>Dashboard</a></li>";
          }else if (Auth::check() && auth()->user()->access == 2) {
              echo "<li><a href='".route('normal.dashboard')."'>Dashboard</a></li>";
          }
          ?>
          <li><a href="{{ route('about') }}" class="">About</a></li>
          <li><a href="{{ route('contact') }}" class="">Contact</a></li>
        </ul>
      </div>
      <div class="col-sm-6 col-lg-2 py-3">
        <h5 class="mb-3">Guide</h5>
        <ul class="menu-link">
          <li><a href="{{ route('DoctorsGuide') }}" class="">Doctors</a></li>
          <li><a href="{{ route('PatientsGuide') }}" class="">Patient</a></li>
          <li><a href="{{ route('howToPlayGuide') }}" class="">how to play?</a></li>
        </ul>
      </div>
      <div class="col-md-6 col-lg-4 py-3">
        <h5 class="mb-3">Contact Us</h5>
        <ul class="menu-link">
          <li><a href="https://mail.google.com/" class="">saharkashany@gmail.com</a></li>
          <li><a href="https://mail.google.com/" class="">parinazmellatdoust@gmail.com </a></li>
          <li><a href="https://mail.google.com/" class="">neginshahany@gmail.com </a></li>
        </ul>
      </div>
      <div class="col-md-6 col-lg-4">
        <img src="../public/front/assets/footerLogo.png" alt="" width="300" height="210">
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
