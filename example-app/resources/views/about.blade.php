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

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
       crossorigin="anonymous">
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
        <li class="nav-item active">
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

<main class="bg-light">

<div class="page-hero-section bg-image hero-mini" style="background-image: url(../public/front/assets/img/hero_mini.svg);">
  <div class="hero-caption">
    <div class="container fg-white h-100">
      <div class="row justify-content-center align-items-center text-center h-100">
        <div class="col-lg-6">
          <h3 class="mb-4 fw-medium">About Us</h3>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="page-section pt-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card-page">
          <h5 class="fg-primary">About Our Service</h5>
          <hr>
          <p> is an indispensable tool for cost-effective rehabilitation following a brain injury.  VEGLECTHERAPY can help individuals with their attention and concentration, in their performance of various memory and planning tasks, help with visual field issues and much more</p>
          <p>VEGLECTHERAPY can be used, for example, even at a very acute stage of stroke recovery - and remains relevant through all stages of stroke recovery.  It is also an excellent tool to help with aspects of Visual Neglect.  Training modules can easily be selected based on a cognitive assessment or by using built-in  VEGLECTHERAPY Screening Modules.

The Video on this page gives an overview of VEGLECTHERAPY in a couple of minutes. Further videos showing product features can be found here</p>

          <!-- Video -->
          <div class="text-center py-5">
            <embed class="embed-video" src="https://www.youtube.com/embed/k1D0_wFlXgo?list=PLl-K7zZEsYLmnJ_FpMOZgyg6XcIGBu2OX">
          </div>

          <p>a pic of the game environment.</p>
        </div>
        <div class="card-page mt-3">
          <h5 class="fg-primary">Meet Our Teams</h5>
          <hr>

          <div class="row justify-content-center">
            <div class="col-lg-3 py-3">
              <div class="team-item">
                <div class="team-avatar">
                  <img src="../public/front/assets/img/person/person_1.png" alt="">
                </div>
                <h5 class="team-name">Sahar Fakhrieh kashan</h5>
                <a class="fg-gray fs-small" href="https://www.linkedin.com/in/sahar-kashany-027832170/" target="_blank" title="LinkedIn profile">
                    <span class="fab fa-linkedin" aria-hidden="true"></span>
                </a>
                <a class="fg-gray fs-small" href="https://github.com/saharfk" target="_blank" title="GitHub profile">
                    <span class="fab fa-github" aria-hidden="true"></span>
                </a>
                <a class="fg-gray fs-small" href="https://codepen.io/saharfk" target="_blank" title="CodePen profile">
                    <span class="fab fa-codepen" aria-hidden="true"></span>
                </a>
              </div>
            </div>
            <div class="col-lg-3 py-3">
              <div class="team-item">
                <div class="team-avatar">
                  <img src="../public/front/assets/img/person/person_2.png" alt="">
                </div>
                <h5 class="team-name">Negin Banay Shahani</h5>
                <a class="fg-gray fs-small" href="https://www.linkedin.com/in/negin-banay-shahani-7180ab19a/" target="_blank" title="LinkedIn profile">
                    <span class="fab fa-linkedin" aria-hidden="true"></span>
                </a>
                <a class="fg-gray fs-small" href="https://github.com/negin-shahani" target="_blank" title="GitHub profile">
                    <span class="fab fa-github" aria-hidden="true"></span>
                </a>
                <a class="fg-gray fs-small" href="https://codepen.io/negin-titanium" target="_blank" title="CodePen profile">
                    <span class="fab fa-codepen" aria-hidden="true"></span>
                </a>
              </div>
            </div>
            <div class="col-lg-3 py-3">
              <div class="team-item">
                <div class="team-avatar">
                  <img src="../public/front/assets/img/person/person_3.png" alt="">
                </div>
                <h5 class="team-name">Parinaz Mellatdoust</h5>

                    <a class="fg-gray fs-small" href="https://www.linkedin.com/in/parinaz-mellatdoust-66b915177/" target="_blank" title="LinkedIn profile">
                        <span class="fab fa-linkedin" aria-hidden="true"></span>
                    </a>
                    <a class="fg-gray fs-small" href="https://github.com/parinazmellatdoust" target="_blank" title="GitHub profile">
                        <span class="fab fa-github" aria-hidden="true"></span>
                    </a>
                    <a class="fg-gray fs-small" href="https://codepen.io/parinazmellatdoust" target="_blank" title="CodePen profile">
                        <span class="fab fa-codepen" aria-hidden="true"></span>
                    </a>

              </div>
            </div>
          </div>
        </div>
        <div class="card-page mt-3">
          <h5 class="fg-primary">Our Supervisor</h5>
          <hr>

          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 justify-content-center align-items-center mt-5">
            <div class="col-lg-3 py-3">
              <div class="team-item">
                <div class="team-avatar">
                  <img src="../public/front/assets/img/person/person_4.png" alt="">
                </div>
                <h5 class="team-name">HamidReza Ahmadifar</h5>
                <a class="fg-gray fs-small" href="https://www.linkedin.com/in/hamidreza-ahmadifar-33a5a431/" target="_blank" title="LinkedIn profile">
                    <span class="fab fa-linkedin" aria-hidden="true"></span>
                </a>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</main> <!-- .bg-light -->



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
