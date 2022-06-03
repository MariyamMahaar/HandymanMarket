<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <title>Project1</title>
  
</head>
<div class="text-center p-3" style="background-color:black;">

<body>

<?php
session_start();

//including navbar
include_once('navbar.php');
?>
  
  


  <div class="text-center p-3" style="background-color:black;">

  <div class="card text-center text-white">
    <div class="text-center p-3" style="background-color:black;">

    <div class="card-body">

      <h5 class="card-title">Welcome To Handyman Market</h5>
      <p class="card-text">Our services are just a click away from you!</p>

    </div>
  </div>
</div>
</div>
  <div class="container">
    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
          <img src="pic.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block text-white">
            <h5>Who are we?</h5>
            <p>we are exactly the group of people you are looking for to help you out with your daily house chores</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
          <img src="s-slide.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block text-white">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="slide3.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block text-success">
            <h5>Get in contact</h5>
            <p>with all of our service providers using your phone.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <div class="text-center p-3" style="background-color:black;">

  <div class="text-center">

    <div class="container my-5">
      <div class="row">
        <div class="col-6 col-lg-3">
          <div class="service-item" style="transform: translate(0px, 0px); opacity: 1;">
            <img src="cook.jpg">
            <br>
            <a href="cook.php" class="btn btn-outline-light">COOK</a>

          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="service-item" style="transform: translate(0px, 0px); opacity: 1;">
            <img src="beaut.jpg">
            <br>
            <a href="beautician.php" class="btn btn-outline-light">BEAUTICIAN</a>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="service-item" style="transform: translate(0px, 0px); opacity: 1;">
            <img src="barb.jpg">
            <br>
            <a href="barber.php" class="btn btn-outline-light">BARBER</a>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="service-item" style="transform: translate(0px, 0px); opacity: 1;">
            <img src="elec.jpg">
            <br>
            <a href="electrician.php" class="btn btn-outline-light">ELECTRICIAN</a>
          </div>
        </div>
      </div>
    </div>

    </div>

    <div class="container my-5">
      <div class="row">

        <div class="col-6 col-lg-3">
          <div class="service-item" style="transform: translate(0px, 0px); opacity: 1;">
            <img src="driver.jpg">
            <br>
            <a href="driver.php" class="btn btn-outline-light">DRIVER</a>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="service-item" style="transform: translate(0px, 0px); opacity: 1;">
            <img src="mech.jpg">
            <br>
            <a href="mechanic.php" class="btn btn-outline-light">MECHANIC</a>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="service-item" style="transform: translate(0px, 0px); opacity: 1;">
            <img src="paint.jpg">
            <br>
            <a href="painter.php" class="btn btn-outline-light">PAINTER</a>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="service-item" style="transform: translate(0px, 0px); opacity: 1;">
            <img src="tutor.jpg">
            <br>
            <a href="tutor.php" class="btn btn-outline-light">TUTOR</a>
          </div>
        </div>
      </div>
    </div>
    <div class="container my-5">
      <div class="row">

        <div class="col-6 col-lg-3">
          <div class="service-item" style="transform: translate(0px, 0px); opacity: 1;">
            <img src="tailor.jpg">
            <br>
            <a href="tailor.php" class="btn btn-outline-light">TAILOR</a>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="service-item" style="transform: translate(0px, 0px); opacity: 1;">
            <img src="cloth.jpg">
            <br>
            <a href="clothes.php" class="btn btn-outline-light">CLOTH SELLER</a>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="service-item" style="transform: translate(0px, 0px); opacity: 1;">
            <img src="helper.jpg">
            <br>
            <a href="cleaner.php" class="btn btn-outline-light">HELPER</a>
          </div>
        </div>
        <div class="col-6 col-lg-3">
          <div class="service-item" style="transform: translate(0px, 0px); opacity: 1;">
            <img src="plum.jpg">
            <br>
            <a href="plumberpage.php" class="btn btn-outline-light">PLUMBER</a>
          </div>
        </div>
      </div>
    </div>
  </div>


    <footer class="bg-light text-center text-white">
      <!-- Grid container -->
      <div class="text-center p-3" style="background-color:black;">

      <div class="container p-4 pb-0">

        <div class="social-media-links">
          <a href="https://www.facebook.com/CareemJOR/?brand_redir=456801891004898" target="_blank">
            <img src="facebook-new.png" alt="facebook">
          </a>
          <a href="https://twitter.com/CareemUAE" target="_blank">
            <img src="twitter-new.png" alt="twitter">
          </a>
          <a href="https://www.linkedin.com/company/careem" target="_blank">
            <img src="insta-new.png" alt="linkedin">
          </a>
        </div>
      </div>
            </div>

      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color:  black;">
        © 2021 Copyright:
        <a class="text-white" href="./index.html">HandymanMarket.com</a>
      </div>
      <!-- Copyright -->
    </footer>

  </div>



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>