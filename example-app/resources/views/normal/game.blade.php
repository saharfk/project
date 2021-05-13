<?php 
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

$info=array_pop ($_SESSION['list']);
$dirs = scandir($info[0],1);
array_pop ($dirs);
array_pop ($dirs);
$correct=$dirs[1];
if ($info[1]==4 || $info[1]==5) {
 $correct=$dirs[2];
 array_pop ($dirs);
}
shuffle($dirs);
$flag=1;
if (count($_SESSION['list'])==9) {
  $flag=0;
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="description" content="Mobile Application HTML5 Template">

  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">

  <title>VEGLECTHERAPY</title>

  <link rel="shortcut icon" href="../../public/front/assets/favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="../../public/front/assets/css/maicons.css">

  <link rel="stylesheet" href="../../public/front/assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../../public/front/assets/vendor/owl-carousel/css/owl.carousel.min.css">

  <link rel="stylesheet" href="../../public/front/assets/css/bootstrap.css">

  <link rel="stylesheet" href="../../public/front/assets/css/bootstrap.min.css">

  <link rel="stylesheet" href="../../public/front/assets/css/mobster.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700%7CMontserrat:400,700">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
    crossorigin="anonymous">

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light navbar-floating">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <img src="../../public/front/assets/favicon.png" alt="" width="100" height="70">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar-nav ml-lg-5 mt-3 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
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
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        </ul>
        <div class="ml-auto my-2 my-lg-0">
          <button class="btn btn-primary rounded-pill" onclick="window.location.href='https://github.com/parinazmellatdoust/project';">Download github code</button>
        </div>
      </div>
    </div>
  </nav>

  <div class="page-hero-section bg-image hero-home-1" style="background-image: url(../../public/front/assets/img/bg_hero_1.svg);">
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
                Let's play
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php if ($info[1] == 1 || $info[1] == 2 || $info[1] == 3 ): ?>
    <div class="full-height mouse-here" >
    <!-- points , level number , question -->
    <div class="row h-game justify-content-center">
      <div class="col-md-3 col-lg-2 header-game">
        <p class="textQ"><strong>Score : <?= $_SESSION["score"] ?></strong></p>
      </div>
      <div class="col-md-3 col-lg-2 header-game">
        <p class="textQ"><strong>Level : <?= $info[1]?></strong></p>
      </div>
      <div class="col-md-6 col-lg-7 header-game">
        <p class="textQ"><strong>Find the similar animal</strong></p>
      </div>
    </div>
    <!-- hr line -->
    <hr class="hr-game">
    <!-- main structure -->
    <div class="row O-game">
        <div class="col-3 phoneQ" style="margin-top: 5%; margin-left:5%;">
            <img class="imageQ borderimage" src="../<?= $info[0]?>/<?= $correct ?>">           
         </div>
         <hr class="hr-game hrphoneQ" style="border: 2px solid #3D58F3; opacity: 0.5;">
       <div class="col-8">
         <div class="rows photos">
            <?php if ($flag==0): ?>
            <form method="POST" action="{{route('normal.submitgame')}}">
              @csrf 
               <input type="hidden" name="score" value="<?=$_SESSION['score']?>">
               <?php $tmp=json_encode($_SESSION['list']);
                $tmp=str_replace('"',"'",$tmp);
                ?>
               <input type="hidden" name="list" value="<?=$tmp?>">
                
              <input type="checkbox" id="<?= $dirs[0] ?>" name="img" value="<?= $dirs[0] ?>">
              <label for="<?= $dirs[0] ?>"> <?= $dirs[0] ?></label><br>
              <input type="checkbox" id="<?= $dirs[1] ?>" name="img" value="<?= $dirs[1] ?>">
              <label for="<?= $dirs[1] ?>"> <?= $dirs[1] ?></label><br>
              <input type="checkbox" id="<?= $dirs[2] ?>" name="img" value="<?= $dirs[2] ?>">
              <label for="<?= $dirs[2] ?>"> <?= $dirs[2] ?></label><br>
              <input type="submit" value="Submit">
            </form>
            <?php endif; ?>
            <?php if ($flag==1): ?>
            <form method="POST" action="{{route('normal.submitgame')}}" autofocus>
              @csrf 
               <input type="hidden" name="score" value="<?=$_SESSION['score']?>">
               <?php $tmp=json_encode($_SESSION['list']);
                $tmp=str_replace('"',"'",$tmp);
                ?>
               <input type="hidden" name="list" value="<?=$tmp?>">
                
              <input type="checkbox" id="<?= $dirs[0] ?>" name="img" value="<?= $dirs[0] ?>">
              <label for="<?= $dirs[0] ?>"> <?= $dirs[0] ?></label><br>
              <input type="checkbox" id="<?= $dirs[1] ?>" name="img" value="<?= $dirs[1] ?>">
              <label for="<?= $dirs[1] ?>"> <?= $dirs[1] ?></label><br>
              <input type="checkbox" id="<?= $dirs[2] ?>" name="img" value="<?= $dirs[2] ?>">
              <label for="<?= $dirs[2] ?>"> <?= $dirs[2] ?></label><br>
              <input type="submit" value="Submit">
            </form>
            <?php endif; ?>
           <!--  <div class="column">
               <a href="#"><img class="imageS borderimage" src="../<?= $info[0]?>/<?= $dirs[0] ?>"></a> 
            </div>
            <div class="column">
                <a href="#"><img class="imageS borderimage" src="../<?= $info[0]?>/<?= $dirs[1] ?>"></a>
            </div>
            <div class="column">
                <a href="#"><img class="imageS borderimage" src="../<?= $info[0]?>/<?=$dirs[2]?>"></a>
            </div> -->

         </div>
       </div>
       <div class="vl"></div>
       <div class="col-3" style="margin-top: 5%; margin-left:5%;">
          <img class="imageQ borderimage laptopQ" src="../<?= $info[0]?>/<?= $correct ?>">           
       </div>
    </div>
  </div>
  <?php endif; ?>
  <?php if ($info[1] == 4 || $info[1] == 5): ?>
    <div class="full-height mouse-here" >
    <!-- points , level number , question -->
    <div class="row h-game justify-content-center">
      <div class="col-md-3 col-lg-2 header-game">
        <p class="textQ"><strong>Score : <?= $_SESSION["score"] ?></strong></p>
      </div>
      <div class="col-md-3 col-lg-2 header-game">
        <p class="textQ"><strong>Level : <?= $info[1]?></strong></p>
      </div>
      <div class="col-md-6 col-lg-7 header-game">
        <p class="textQ"><strong>Find the answer of the puzzle!</strong></p>
      </div>
    </div>
    <!-- hr line -->
    <hr class="hr-game">
    <!-- main structure -->
    <div class="row O-game">
        <div class="col-3 phoneQ" style="margin-top: 5%; margin-left:5%;">
            <img class="imageQ borderimage" src="../<?= $info[0]?>/<?= $correct ?>">           
         </div>
         <hr class="hr-game hrphoneQ" style="border: 2px solid #3D58F3; opacity: 0.5;">
       <div class="col-8">
         <div class="rows photos" >
            <?php if ($flag==0): ?>
            <form method="POST" action="{{route('normal.submitgame')}}">
              @csrf 
               <input type="hidden" name="score" value="<?=$_SESSION['score']?>">
               <?php $tmp=json_encode($_SESSION['list']);
                $tmp=str_replace('"',"'",$tmp);
                ?>
              <input type="hidden" name="list" value="<?=$tmp?>"> 
              <input type="checkbox" id="<?= $dirs[0] ?>" name="img" value="<?= $dirs[0] ?>">
              <label for="<?= $dirs[0] ?>"> <?= $dirs[0] ?></label><br>
              <input type="checkbox" id="<?= $dirs[1] ?>" name="img" value="<?= $dirs[1] ?>">
              <label for="<?= $dirs[1] ?>"> <?= $dirs[1] ?></label><br>
              <input type="submit" value="Submit">
            </form>
            <?php endif; ?>
            <?php if ($flag==1): ?>
            <form method="POST" action="{{route('normal.submitgame')}}"  >
              @csrf 
               <input type="hidden" name="score" value="<?=$_SESSION['score']?>">
               <?php $tmp=json_encode($_SESSION['list']);
                $tmp=str_replace('"',"'",$tmp);
                ?>
              <input type="hidden" name="list" value="<?=$tmp?>"> 
              <input type="checkbox" id="<?= $dirs[0] ?>" name="img" value="<?= $dirs[0] ?>" >
              <label for="<?= $dirs[0] ?>"> <?= $dirs[0] ?></label><br>
              <input type="checkbox" id="<?= $dirs[1] ?>" name="img" value="<?= $dirs[1] ?>">
              <label for="<?= $dirs[1] ?>"> <?= $dirs[1] ?></label><br>
              <input type="submit" value="Submit">
            </form>
            <?php endif; ?>
            <!-- <div class="column" style="margin-right:100px;">
               <a href="#"><img class="imageS borderimage" src="../datasets/level (4)/New folder/Capture.PNG"></a> 
            </div>
            <div class="column">
                <a href="#"><img class="imageS borderimage" src="../datasets/level (4)/New folder/t.PNG"></a>
            </div> -->
         </div>
       </div>
       <div class="vl"></div>
       <div class="col-3" style="margin-top: 5%; margin-left:5%;">
          <img class="imageQ borderimage laptopQ" src="../<?= $info[0]?>/<?= $correct ?>">           
       </div>
    </div>
  </div>






















  <?php endif; ?>
  

  <div class="page-footer-section bg-dark fg-white">
    <div class="container">
      <div class="row mb-5 py-3">
        <div class="col-sm-6 col-lg-2 py-3">
          <h5 class="mb-3">Pages</h5>
          <ul class="menu-link">
            <li>
              <a href="index.html" class="">Home</a>
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
              <a href="about.html" class="">About</a>
            </li>
            <li>
              <a href="contact.html" class="">Contact</a>
            </li>
          </ul>
        </div>
        <div class="col-sm-6 col-lg-2 py-3">
          <h5 class="mb-3">Guide</h5>
          <ul class="menu-link">
            <li>
              <a href="DoctorsGuide.html" class="">Doctors</a>
            </li>
            <li>
              <a href="PatientsGuide.html" class="">Patient</a>
            </li>
            <li>
              <a href="how to play Guide.html" class="">how to play?</a>
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
          <img src="../../public/front/assets/footerLogo.png" alt="" width="300" height="210">
        </div>
      </div>
    </div>

    <hr>

    <div class="container">
      <div class="row">
        <div class="col-12 col-md-12">
          <p style="text-align: center">Copyright &copy;
           All rights reserved</p>
        </div>
      </div>
    </div>
  </div>

  <script src="../../public/front/assets/js/jquery-3.5.1.min.js"></script>

  <script src="../../public/front/assets/js/bootstrap.bundle.min.js"></script>

  <script src="../../public/front/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

  <script src="../../public/front/assets/vendor/wow/wow.min.js"></script>

  <script src="../../public/front/assets/js/mobster.js"></script>

</body>

</html>