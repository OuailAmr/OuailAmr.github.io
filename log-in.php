<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="images/H_logo.svg">
  <title>Hope Inc.</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
  <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<style>
  *{
    font-family: Poppins;
  }
</style>
<body>
<!-- ////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 1 - THE NAVBAR SECTION  
/////////////////////////////////////////////////////////////////////////////////////////////-->

<nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php">
      <img src="images/hope_logo.svg" alt="logo image" height="50px" width="150px">
    </a>
    <button class="navbar-toggler" onclick="myFunction()"  id="togler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <div class="navigation">
      <ul class="navbar-nav homebtn">
        <li class="nav-item"><a class="nav-link active active2 " aria-current="page" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#services" style="visibility:hidden;">Services</a></li>
        <li class="nav-item" style="visibility:hidden;"><a class="nav-link" href="#testimonials">Testimonials</a></li>
        <li class="nav-item" style="visibility:hidden;"><a class="nav-link" href="#faq">faq</a></li>
        <li class="nav-item" style="visibility:hidden;"><a class="nav-link" href="#portfolio">portfolio</a></li>
        <li class="nav-item" style="visibility:hidden;"><a class="nav-link" href="#contact">contact</a>
        </li>
      </ul>
    </div>
      <div class="btndiv">
      <button type="button" style="visibility:hidden;" onclick="window.location.href ='log-in.php';" class="rounded-pill log log2">
        Log in
      </button>
      <button type="button" onclick="window.location.href ='sign-up.php';" class="rounded-pill sign sign2">
        Sign up

      </button>
    </div>

    </div>
  </div>
</nav>
  <section class="user-login section">
    <div class="container formsec">
      <div class="row">
        <div class="col-12">
          <div class="block">
            <!-- Image -->
            
            <!-- Content -->
            <div class="content text-center">
              
              <div class="title-text">
                <h3>Sign in to To Your Account</h3>
              </div>
              <form action="#">
                <!-- Username -->
                <input class="form-control main" type="email" placeholder="Email" required>
                <!-- Password -->
                <input class="form-control main" type="password" placeholder="Password" required>
                <!-- Submit Button -->
                <button class="btn btn-main-sm">sign in</button>
              </form>
              <div class="new-acount">
                <a href="contact.php">Forget your password?</a>
                <p>Don't Have an account? <a href="sign-up.php"> SIGN UP</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
<footer class="footer footing">
  <div class="container ">
    <div class="row">



  <!-- START THE CONTENT FOR THE CAMPANY INFO -->
  <div class="container mt-5">
    <div class="row text-white justify-content-center mt-3 pb-3">
      <div class="col-12 col-sm-6 col-lg-6 mx-auto">
        <h5 class="text-capitalize fw-bold">Campany name</h5>
        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
        <p class="lh-lg">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem ex obcaecati blanditiis reprehenderit ab mollitia voluptatem consectetur?
        </p>
      </div>
      <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
        <h5 class="text-capitalize fw-bold">Products</h5>
        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
        <ul class="list-inline campany-list">
          <li><a href="#">Lorem ipsum</a></li>
          <li><a href="#">Lorem ipsum</a></li>
          <li><a href="#">Lorem ipsum</a></li>
          <li><a href="#">Lorem ipsum</a></li>
        </ul>
      </div>
      <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
        <h5 class="text-capitalize fw-bold">useful links</h5>
        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
        <ul class="list-inline campany-list">
          <li><a href="#"> Your Account</a></li>
          <li><a href="#">Become an Affiliate</a></li>
          <li><a href="#">create an account</a></li>
          <li><a href="#">Help</a></li>
        </ul>
      </div>
      <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
        <h5 class="text-capitalize fw-bold">contact</h5>
        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
        <ul class="list-inline campany-list">
          <li><a href="#">Lorem ipsum</a></li>
          <li><a href="#">Lorem ipsum</a></li>
          <li><a href="#">Lorem ipsum</a></li>
          <li><a href="#">Lorem ipsum</a></li>
        </ul>
      </div>
    </div>
  </div>
<div class="footer-bottom pt-5 pb-5">
  <div class="container">
    <div class="row text-center text-white">
      <div class="col-12">
        <div class="footer-bottom__copyright">
          &COPY; Copyright 2021 <a href="#">Company</a> | Created by <a href="http://codewithpatrick.com" target="_blank">Muriungi</a><br><br>

          Distributed by <a href="http://themewagon.com" target="_blank">ThemeWagon</a>
        </div>
      </div>
    </div>
  </div>
</div>
</footer>


</body>
</html>
