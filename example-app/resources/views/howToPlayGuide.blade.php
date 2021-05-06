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
      <a class="navbar-brand" href="index.html">
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
          <h3 class="mb-3 fw-medium">How to PLAY?</h3>
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
          <h3 class="mb-3">instruction :</h3>

          <p>iOS 10.0.3 includes improvements, bug fixes and additional parental controls for Screen Time.</p>

          <h5>Screen Time</h5>
          <ul class="theme-list">
            <li class="list-item">New parental controls provide more communication limits over who their children can call, FaceTime, or Message</li>
            <li class="list-item">Contact list for children lets parents manage the contacts that appear on their children’s devices</li>
          </ul>

          <h5>Apple News</h5>
          <ul class="theme-list">
            <li class="list-item">New layout for Apple News+ stories from The Wall Street Journal and other leading newspapers</li>
            <li class="list-item">Easily like or dislike stories with a tap</li>
          </ul>

          <h5>Stocks</h5>
          <ul class="theme-list">
            <li class="list-item">Stories from Apple News are now available in Canada in English and French</li>
            <li class="list-item">Continue reading with links to related stories or more stories from the same publication</li>
            <li class="list-item">“Breaking” and “Developing” labels for Top Stories</li>
          </ul>

          <p>This update also includes bug fixes and other improvements. This update:</p>
          <ul class="theme-list">
            <li class="list-item">Enables the creation of a new video clip when trimming a video in Photos</li>
            <li class="list-item">Adds support for NFC, USB, and Lightning FIDO2-compliant security keys in Safari</li>
            <li class="list-item">Fixes issues in Mail that may prevent downloading new messages</li>
            <li class="list-item">Addresses an issue that prevented deleting messages in Gmail accounts</li>
            <li class="list-item">Resolves issues that could cause incorrect characters to display in messages and duplication of sent messages in Exchange accounts</li>
            <li class="list-item">Fixes an issue where the cursor may not move after long pressing on the space bar</li>
            <li class="list-item">Addresses an issue that may cause screenshots to appear blurry when sent via Messages</li>
            <li class="list-item">Resolves an issue where cropping or using Markup on screenshots may not save to Photos</li>
            <li class="list-item">Fixes an issue where Voice Memos recordings may not be able to be shared with other audio apps</li>
            <li class="list-item">Addresses an issue where the missed call badge on the Phone app may not clear</li>
            <li class="list-item">Resolves an issue where the Cellular Data setting may incorrectly show as off</li>
            <li class="list-item">Fixes an issue that prevented turning off Dark Mode when Smart Invert was enabled</li>
            <li class="list-item">Addresses an issue where some wireless chargers may charge more slowly than expected</li>
          </ul>

          <p>For information on the security content of Apple software updates, please visit this website: <a href="https://support.apple.com/kb/HT201222 ">https://support.apple.com/kb/HT201222</a></p>
        </div>
        <div class="card-page mt-3">
          <h3 class="mb-3">how to add levels?</h3>
          <h5>steps :</h5>
          <ul class="theme-list">
            <li class="list-item">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
               Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
            <li class="list-item">you can start playing the game</li>
            <li class="list-item">for game instructions click <a href="{{ route('howToPlayGuide') }}">here</a></li>
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
