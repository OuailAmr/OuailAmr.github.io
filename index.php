

<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="images/H_logo.svg">
    <title>Hope Inc.</title>
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<style>




</style>
<body id="body">

<div class="containsall" id="contwrap">
<!-- ////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 1 - THE NAVBAR SECTION  
/////////////////////////////////////////////////////////////////////////////////////////////-->
<nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="">
        <img src="images/hope_logo.svg" alt="logo image" height="50px" width="150px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
        <div class="navigation">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#testimonials"> Testimonials</a></li>
          <li class="nav-item"><a class="nav-link" href="#faq">faq</a></li>
          <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">contact</a>
          </li>
        </ul>
      </div>
      
        
      <?php
        if(!isset($_SESSION['email'])) {
        echo('<div class="btndiv">');
        echo('<button type="button" id="myBtn"  class="rounded-pill log">Log In</button>');
        echo('<button type="button" id="myBtn2" class="rounded-pill sign">Sign Up</button>');
        echo('</div>');
        }else{
      
      echo('<div class="dropdown2">');
      echo('<a class="avatar" href="#"><img src="images/usr_img.jpg" alt="#" width="45px"></a>');
      echo('<button onclick="myFunction()"class="dropbtn2 rdm3">Hello '. $_SESSION["name"].' !</button>');
      
      echo('<div id="myDropdown"class="dropdown-content2">');
      echo('<a href="db_logout.php">Log Out</a>');
      // echo('<a href="#">Link 2</a>');
      // echo('<a href="#">Link 3</a>');
      echo('</div>');
      echo('</div>');
      echo('</div>');
      
      
    }
    ?>

      </div>
    
  </nav>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////
                            START SECTION 2 - THE INTRO SECTION  
/////////////////////////////////////////////////////////////////////////////////////////////////////-->

<section id="home" class="intro-section">
  <div class="container">
    <div class="row align-items-center text-white">
      <!-- START THE CONTENT FOR THE INTRO  -->
      <div class="col-md-6 intros text-start">
        <h1 class="display-2">
          <span class="display-2--intro">Hello ! Ready ?</span>
          <span class="display-2--description lh-base">
            This is a company made to build , grow or even SAVE your business, enjoy our Website ! 
          </span>
        </h1>
        <a  class ="nocss" href="#contact"><button type="button" class="rounded-pill btn-rounded btn-phone" > Get in Touch
          <span><i class="fas fa-arrow-right"></i></span>
        </button></a>
      </div>
      <!-- START THE CONTENT FOR THE VIDEO -->
      <div class="col-md-6 intros text-end">
        <div class="video-box" >
          <img src="images/arts/intro-section-illustration.svg" alt="video illutration" class="img-fluid">
          <a href="#" class=" movebtnphone glightbox position-absolute top-50 start-50 translate-middle" >
            <span style="">
              <i class="fas fa-play-circle"style=" color: #232323;" ></i>
            </span>
            <span class="border-animation border-animation--border-1"></span>
            <span class="border-animation border-animation--border-2"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,133.3C672,139,768,213,864,202.7C960,192,1056,96,1152,74.7C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
</section>

<!-- //////////////////////////////////////////////////////////////////////////////////////////////
                             START SECTION 3 - THE CAMPANIES SECTION  
////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!-- //////////////////////////////////////////////////////////////////////////////////////////////
                         START SECTION 4 - THE SERVICES  
///////////////////////////////////////////////////////////////////////////////////////////////////-->
<section id="services" class="services">
  <div class="container">
    <div class="row text-center ">
      <h1 class="display-3 fw-bold fixmargin">Our Services</h1>
      <div class="heading-line mb-1"></div>
    </div>
  <!-- START THE DESCRIPTION CONTENT  -->
    <div class="row pt-2 pb-2 mt-0 mb-3">
      <div class="col-md-6 border-right">
        <div class="bg-white p-3">
          <h2 class="fw-bold text-capitalize text-center">
            Our Services Ranges From Initial Design To Deployment Anywhere Anytime
          </h2>
        </div>
      </div>
      <div class="col-md-6">
        <div class="bg-white p-4 text-start">
          <p class="fw-light">
            We make sure that our clients are the most calm and excited for their upcoming investment.
            We work hard to handle every aspect of making a website from start to finish, while respecting the norms and preferences of our client.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- START THE CONTENT FOR THE SERVICES  -->
  <div class="container">
    <!-- START THE MARKETING CONTENT  -->
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content">
          <div class="icon d-block fas fa-code"></div>
          
          <h3 class="display-3--title mt-1 ">Web Development</h3>
          <p class="lh-lg">
            Our Web developping experts, are not only the best at the job, but also very creative persons.
            Not only we serve you a very performing website with great characteristics. But we also make sure the user is having a blast using it too !
          </p>
          <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
            <span><i class="fas fa-arrow-right"></i></span>
          </button>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
        <div class="services__pic">
          <img src="images/services/service-2.svg" alt="web development illustration" class="img-fluid">
          
        </div>
      </div>
    </div>
    <!-- START THE WEB DEVELOPMENT CONTENT  -->
    <div class="row">
     
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content services__content_move">
          <div class="icon d-block fas fa-paper-plane"></div>
          <h3 class="display-3--title mt-1">Marketing</h3>
          <p class="lh-lg">
            We provide services of digital marketing, through the website, as well as plans to make the website more popular.
            We could even market the items and get percentages instead of a weekly/monthly payment, this way, we take the whole risk and you don't pay a single dime beforehand.
          </p>
          <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
            <span><i class="fas fa-arrow-right"></i></span>
          </button>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start">
          <div class="services__pic services__pic_move">
            
            <img src="images/services/service-1.svg" alt="marketing illustration" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    <!-- START THE CLOUD HOSTING CONTENT  -->
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
        <div class="services__content">
          <div class="icon d-block fas fa-cloud-upload-alt"></div>
          <h3 class="display-3--title mt-1">Website Hosting</h3>
          <p class="lh-lg">
            To take out one less burden on our client, we started recently to take in charge the hosting of the websites, that way we can offer a full pack of everything ready in a golden packaging !
          </p>
          <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
            <span><i class="fas fa-arrow-right"></i></span>
          </button>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
        <div class="services__pic">
          <img src="images/services/service-3.svg" alt="cloud hosting illustration" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ////////////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 5 - THE TESTIMONIALS  
/////////////////////////////////////////////////////////////////////////////////////////////////////-->
<section id="testimonials" class="testimonials">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,213.3C384,203,480,117,576,117.3C672,117,768,203,864,202.7C960,203,1056,117,1152,117.3C1248,117,1344,203,1392,245.3L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
  <div class="container">
    <div class="row text-center text-white">
      <h1 class="display-3 fw-bold">Testimonials</h1>
      <hr style="width: 100px; height: 3px; " class="mx-auto">
      <p class="lead pt-1">what our clients are saying</p>
    </div>

    <!-- START THE CAROUSEL CONTENT  -->
    <div class="row align-items-center">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <!-- CAROUSEL ITEM 1 -->
          <div class="carousel-item active">
            <!-- testimonials card  -->
            <div class="testimonials__card">
              <p class="lh-lg">
                <i class="fas fa-quote-left"></i>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Placeat aut consequatur illo animi optio exercitationem doloribus eligendi iusto atque repudiandae. Distinctio.
                <i class="fas fa-quote-right"></i>
                <div class="ratings p-1">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </p>
            </div>
            <!-- client picture  -->
            <div class="testimonials__picture">
              <img src="images/testimonials/client-1.jpg" alt="client-1 picture" class="rounded-circle img-fluid">
            </div>
            <!-- client name & role  -->
            <div class="testimonials__name">
              <h3>Patrick Muriungi</h3>
              <p class="fw-light">CEO & founder</p>
            </div>
          </div>     
          <!-- CAROUSEL ITEM 2 -->
          <div class="carousel-item">
            <!-- testimonials card  -->
            <div class="testimonials__card">
              <p class="lh-lg">
                <i class="fas fa-quote-left"></i>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Placeat aut consequatur illo animi optio exercitationem doloribus eligendi iusto atque repudiandae. Distinctio.
                <i class="fas fa-quote-right"></i>
                <div class="ratings p-1">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </p>
            </div>
            <!-- client picture  -->
            <div class="testimonials__picture">
              <img src="images/testimonials/client-2.jpg" alt="client-2 picture" class="rounded-circle img-fluid">
            </div>
            <!-- client name & role  -->
            <div class="testimonials__name">
              <h3>Joy Marete</h3>
              <p class="fw-light">Finance Manager</p>
            </div>
          </div>     
          <!-- CAROUSEL ITEM 3 -->
          <div class="carousel-item">
            <!-- testimonials card  -->
            <div class="testimonials__card">
              <p class="lh-lg">
                <i class="fas fa-quote-left"></i>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Placeat aut consequatur illo animi optio exercitationem doloribus eligendi iusto atque repudiandae. Distinctio.
                <i class="fas fa-quote-right"></i>
                <div class="ratings p-1">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </p>
            </div>
            <!-- client picture  -->
            <div class="testimonials__picture">
              <img src="images/testimonials/client-3.jpg" alt="client-3 picture" class="rounded-circle img-fluid">
            </div>
            <!-- client name & role  -->
            <div class="testimonials__name">
              <h3>ClaireBelle Zawadi</h3>
              <p class="fw-light">Global brand manager</p>
            </div>
          </div>     
          CAROUSEL ITEM 4
          <div class="carousel-item">
            <!-- testimonials card  -->
            <div class="testimonials__card">
              <p class="lh-lg">
                <i class="fas fa-quote-left"></i>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Placeat aut consequatur illo animi optio exercitationem doloribus eligendi iusto atque repudiandae. Distinctio.
                <i class="fas fa-quote-right"></i>
                <div class="ratings p-1">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                </div>
              </p>
            </div>
            <!-- client picture  -->
            <div class="testimonials__picture">
              <img src="images/testimonials/client-4.jpg" alt="client-4 picture" class="rounded-circle img-fluid">
            </div>
            <!-- client name & role  -->
            <div class="testimonials__name">
              <h3>Uhuru Kenyatta</h3>
              <p class="fw-light">C.E.O & Founder</p>
            </div>
          </div>     
        </div>
        <div class="text-center">
          <button class="btn btn-outline-light fas fa-long-arrow-alt-left" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          </button>
          <button class="btn btn-outline-light fas fa-long-arrow-alt-right" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          </button>
        </div>
        <div class="faqbtndiv">
  
            <button type="button" id="myBtn6" class="rounded-pill btn-rounded border-primary faqbtn">
              Leave a Review !
                <span><i class="fas fa-arrow-right"></i></span>
            </button>       
        </div>
      </div>
    </div>
 
    
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,96L48,128C96,160,192,224,288,213.3C384,203,480,117,576,117.3C672,117,768,203,864,202.7C960,203,1056,117,1152,117.3C1248,117,1344,203,1392,245.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
  </section>
    


<!-- /////////////////////////////////////////////////////////////////////////////////////////////////
                       START SECTION 6 - THE FAQ 
//////////////////////////////////////////////////////////////////////////////////////////////////////-->
<section id="faq" class="faq">
  <div class="container">
    <div class="row text-center">
      <h1 class="display-3 fw-bold text-uppercase">faq</h1>
      <div class="heading-line"></div>
      <p class="lead">frequently asked questions, get knowledge beforehand</p>
    </div>
    <!-- ACCORDION CONTENT  -->
    <div class="row mt-5">
      <div class="col-md-12">
        <div class="accordion" id="accordionExample">
          <!-- ACCORDION ITEM 1 -->
          <div class="accordion-item shadow mb-3">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Is it safe to use this service?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong> Yes safety is very important to us.</strong>Our first company's policy is safety and honesty, we won't promise you anything we won't achieve and we won't neglect anything that we promise !
              </div>
            </div>
          </div>
             <!-- ACCORDION ITEM 2 -->
          <div class="accordion-item shadow mb-3">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Do I need to pay before receiving the product/service?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>There are few services that require our clients to pay ahead.</strong>But this is the exception, we try to make our clients the most comfortable possible, even a service that requires you to pay ahead can be rearranged in another way that suits both parties.
              </div>
            </div>
          </div>
             <!-- ACCORDION ITEM 3 -->
          <div class="accordion-item shadow mb-3">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            How can I get started?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>It's quick, easy and simple.</strong>You must first find a way to contact us, and from that point it's our responsibility to contact you back and set a way where we can communicate and hear you.
              </div>
            </div>
          </div>
             <!-- ACCORDION ITEM 4 -->
          <div class="accordion-item shadow mb-3">
            <h2 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Can I be refunded if am not satisfied?
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                <strong>Refunds are always available if we don't assume our promises.</strong>As said before, our responsability is to ensure the client's safety , and always impact their businesses in a positive way, if anytthing goes wrong we are here for you !
              </div>
            </div>
          </div>
        </div>
      
    
  </div>
  <div class="faqbtndiv">
  <button type="button" id="myBtn5" class="rounded-pill btn-rounded border-primary faqbtn">send us a question !
            <span><i class="fas fa-arrow-right"></i></span>
          </button>
  </div>
  </div>
</section>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////////////
                              START SECTION 7 - THE PORTFOLIO  
//////////////////////////////////////////////////////////////////////////////////////////////////////-->

<section id="portfolio" class="portfolio">
  <div class="container">
    <div class="row text-center mt-5">
      <h1 class="display-3 fw-bold text-capitalize">Latest work</h1>
      <div class="heading-line"></div>
      <p class="lead">
        This is a glimpse of our work, thousands of hours have been spent concocting our products.
      </p>
    </div>
    <!-- FILTER BUTTONS  -->
    <div class="row mt-5 mb-4 g-3 text-center">
      <div class="col-md-12">
        <button class="btn btn-outline-primary" type="button" onclick="openCity('all')">All</button>
        <button class="btn btn-outline-primary" type="button" onclick="openCity('websites')">websites</button>
        <button class="btn btn-outline-primary" type="button" onclick="openCity('design')" >design</button>
        <button class="btn btn-outline-primary" type="button" onclick="openCity('mockup')">mockup</button>
      </div>
    </div>

    <!-- START THE PORTFOLIO ITEMS  -->
    <div class="row">
      <div class="websites col-lg-4 col-md-6 city" id="websites">
        <div class="portfolio-box shadow">
          <img src="images/portfolio/portfolio-1.jpg" alt="portfolio 1 image" title="portfolio 1 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>project name goes here 1</h4>
              <p>category project</p>
              
            </div>
          </div>
        </div>
      </div>
      <div class="websites col-lg-4 col-md-6 city" id="websites">
        <div class="portfolio-box shadow">
          <img src="images/portfolio/portfolio-2.jpg" alt="portfolio 2 image" title="portfolio 2 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>project name goes here 2</h4>
              <p>category project</p>
            </div>
          </div>
        </div>
      </div>
      <div class="mockup col-lg-4 col-md-6 city" id="mockup">
        <div class="portfolio-box shadow ">
          <img src="images/portfolio/portfolio-3.jpg" alt="portfolio 3 image" title="portfolio 3 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>project name goes here 3</h4>
              <p>category project</p>
            </div>
          </div>
        </div>
      </div>
      <div class="mockup col-lg-4 col-md-6 city" id="mockup">
        <div class="portfolio-box shadow">
          <img src="images/portfolio/portfolio-4.jpg" alt="portfolio 4 image" title="portfolio 4 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>project name goes here 4</h4>
              <p>category project</p>
            </div>
          </div>
        </div>
      </div>
      <div class="websites col-lg-4 col-md-6 city" id="websites">
        <div class="portfolio-box shadow">
          <img src="images/portfolio/portfolio-5.jpg" alt="portfolio 5 image" title="portfolio 5 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>project name goes here 5</h4>
              <p>category project</p>
            </div>
          </div>
        </div>
      </div>
      <div class="design col-lg-4 col-md-6 city" id="design">
        <div class="portfolio-box shadow">
          <img src="images/portfolio/portfolio-6.jpg" alt="portfolio 6 image" title="portfolio 6 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>project name goes here 6</h4>
              <p>category project</p>
            </div>
          </div>
        </div>
      </div>
      <div class="design col-lg-4 col-md-6 city" id="design">
        <div class="portfolio-box shadow">
          <img src="images/portfolio/portfolio-7.jpg" alt="portfolio 7 image" title="portfolio 7 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>project name goes here 7</h4>
              <p>category project</p>
            </div>
          </div>
        </div>
      </div>
      <div class="design col-lg-4 col-md-6 city" id="design">
        <div class="portfolio-box shadow">
          <img src="images/portfolio/portfolio-8.jpg" alt="portfolio 8 image" title="portfolio 8 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>project name goes here 8</h4>
              <p>category project</p>
            </div>
          </div>
        </div>
      </div>
      <div class=" websites col-lg-4 col-md-6 city" id="websites">
        <div class="portfolio-box shadow">
          <img src="images/portfolio/portfolio-9.jpg" alt="portfolio 9 image" title="portfolio 9 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>project name goes here 9</h4>
              <p>category project</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////
              START SECTION 8 - GET STARTED  
/////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<section  class="get-started">
  <div class="container">
    <div class="row text-center">
      <h1 class="display-3 fw-bold text-capitalize">Get started</h1>
      <div class="heading-line"></div>
      <p class="lh-lg">
        Write down the info about the project ur interested in. Our team will reply to you soon.
      </p>
    </div>

    <!-- START THE CTA CONTENT  -->
    <div class="row text-white">
      <div class="col-12 col-lg-6 gradient shadow p-3">
        <div class="cta-info w-100">
          <h4 class="display-4 fw-bold">100% Satisfaction Guaranteed</h4>
          <p class="lh-lg">
            We offer tailored guaranties to make sure our clients are well protected from any of our professional mistakes.

          </p>
          <h3 class="display-3--brief">What will be the next step?</h3>
          <ul class="cta-info__list">
            <li>We'll prepare the proposal.</li>
            <li>we'll discuss it together.</li>
            <li>let's start the discussion.</li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-lg-6 bg-white shadow p-3">
        <div class="form w-100 pb-2" id="contact">
          <h4 class="display-3--title mb-5">start your project</h4>
          <form action="messages.php" class="row" method="post" >
            <div class="col-lg-6 col-md mb-3">
              <input type="text" placeholder="First Name" name="msgname" id="inputFirstName" class="shadow form-control form-control-lg">
            </div>
            <div class="col-lg-6 col-md mb-3">
              <input type="text" placeholder="Last Name" name="msglastname"  id="inputLastName" class="shadow form-control form-control-lg">
            </div>
            <div class="col-lg-12 mb-3">footin
              <textarea name="message" placeholder="message" id="message" rows="8" class="shadow form-control form-control-lg"></textarea>
            </div>
            <div class="text-center d-grid mt-1">
              <button type="submit" class="btn btn-primary rounded-pill pt-3 pb-3">
                submit
                <i class="fas fa-paper-plane"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ///////////////////////////////////////////////////////////////////////////////////////////
                           START SECTION 9 - THE FOOTER  
///////////////////////////////////////////////////////////////////////////////////////////////-->
<footer class="footer">
  <div class="container">
    <div class="row">
      <!-- CONTENT FOR THE MOBILE NUMBER  -->
      <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
        <div class="contact-box__icon">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone-call" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
            <path d="M15 7a2 2 0 0 1 2 2" />
            <path d="M15 3a6 6 0 0 1 6 6" />
          </svg>
        </div>
        <div class="contact-box__info">
          <a href="#" class="contact-box__info--title">+213 793 69 65 74</a>
          <p class="contact-box__info--subtitle">  Everyday until 11pm</p>
        </div>
      </div>  
      <!-- CONTENT FOR EMAIL  -->
      <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
        <div class="contact-box__icon">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-opened" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <polyline points="3 9 12 15 21 9 12 3 3 9" />
            <path d="M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10" />
            <line x1="3" y1="19" x2="9" y2="13" />
            <line x1="15" y1="13" x2="21" y2="19" />
          </svg>
        </div>
        <div class="contact-box__info">
          <a href="#" class="contact-box__info--title">wailamroun2002@gmail.com</a>
          <p class="contact-box__info--subtitle">Online support</p>
        </div>
      </div>
      <!-- CONTENT FOR LOCATION  -->
      <div class="col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex">
        <div class="contact-box__icon">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-2" viewBox="0 0 24 24" stroke-width="1" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <line x1="18" y1="6" x2="18" y2="6.01" />
            <path d="M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5" />
            <polyline points="10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15" />
            <line x1="9" y1="4" x2="9" y2="17" />
            <line x1="15" y1="15" x2="15" y2="20" />
          </svg>
        </div>
        <div class="contact-box__info">
          <a href="#" class="contact-box__info--title">Algiers, Algeria</a>
          <p class="contact-box__info--subtitle">Ain Taya</p>
        </div>
      </div>
    </div>
  </div>

  <!-- START THE SOCIAL MEDIA CONTENT  -->
  <div class="footer-sm" style="background-color: #212121;">
    <div class="container">
      <div class="row py-4 text-center text-white">
        <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
          connect with us on social media
        </div>
        <div class="col-lg-7 col-md-6">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-linkedin"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- START THE CONTENT FOR THE CAMPANY INFO -->
  <div class="container mt-5">
    <div class="row text-white justify-content-center mt-3 pb-3">
      <div class="col-12 col-sm-6 col-lg-6 mx-auto">
        <h5 class="text-capitalize fw-bold">Hope Inc.</h5>
        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
        <p class="lh-lg">
        We can spend countless words explaining to you why we're the best, but it's better if You simply contact us and get to the next step to find out for urself !
        </p>
      </div>
      <div class="col-12 col-sm-6 col-lg-2 mb-4 mx-auto">
        <h5 class="text-capitalize fw-bold">Products</h5>
        <hr class="bg-white d-inline-block mb-4" style="width: 60px; height: 2px;">
        <ul class="list-inline campany-list">
          <li><a href="#contact">e-Commerce Website</a></li>
          <li><a href="#contact">Portfolio Website</a></li>
          <li><a href="#contact">Reservation's Website</a></li>
          <li><a href="#contact">And More ...</a></li>
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
          <li><a href="mailto:wailamroun2002@gmail.com">wailamroun2002@gmail.com</a></li>
          <li><a href="numberto:+213793696574">0793 69 65 74</a></li>
          <li><a href="#contact">Send us a message !</a></li>
          <li><a href="#testimonials">Give us a Review !</a></li>
        </ul>
      </div>
    </div>
  </div>

  <!-- START THE COPYRIGHT INFO  -->
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
</div>

<!-- BACK TO TOP BUTTON  -->
<a href="#" class="shadow btn-primary rounded-circle back-to-top">
  <i class="fas fa-chevron-up"></i>
</a>
</div>



</div>
<div class="modal" id="myModal2">
<section class="user-login section">
	<div class="container formsec">
		<div class="row">
			<div class="col-12">
        <div class="close3 ">
          <span class="closediv">&times;</span>
        </div>
				<div class="block">
					<!-- Image -->
					
					<!-- Content -->
					<div class="content text-center">
						
						<div class="title-text">
							<h3>Sign Up for A New Account</h3>
						</div>
						<form action="database.php" method="post" >
							<!-- Username -->
							<input class="form-control main" type="text" placeholder="Your Name" name="name" required>
							<!-- Email -->
							<input class="form-control main" type="email" placeholder="Email Address" name="email" required>
							<!-- Password -->
							<input class="form-control main" type="password" placeholder="Password"  name="password" required>
              <input class="form-control main" type="password" placeholder="Confirm the password" name="password2" required>
							<!-- Submit Button -->
							<button type="submit" class="btn btn-main-md subbtn">sign up</button>
						</form>
						<div class="new-acount">
							<p class="subtext">By clicking “Sign Up” I agree to <a href="privacy-policy.php">Terms of Conditions.</a></p>
							<p class="subtext">Anready have an account? <a href="#" id="myBtn4">SIGN IN</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</div>

<div class="modal" id="myModal3">
<section class="user-login section" >
	<div class="container formsec formsec3" >
		<div class="row">
			<div class="col-12">
        <div class="close2">
          <span class="closediv">&times;</span>
        </div>
				<div class="block">
					<!-- Image -->
					
					<!-- Content -->
					<div class="content text-center" >
						
						<div class="title-text" >
							<h3>Your Reviews are very helpful to us !</h3>
						</div>
						<form action="reviews.php" method="post" >
							<!-- Username -->
							<input class="form-control main" type="text" placeholder="Full Name" name="urname" required>
							<!-- Email -->
							<input class="form-control main" type="text" placeholder="position" name="position" required>
							<!-- Password -->
							<input class="form-control main" type="longtext" placeholder="ur review"  name="review" required>
              
							<!-- Submit Button -->
							<button type="submit" class="btn btn-main-md subbtn">Submit</button>
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</div>



<!-- The Modal -->
<div>
</section>
<div id="myModal" class="modal">

  <!-- Modal content -->
   <section class="user-login section">
    <div class="container formsec">
      <div class="row">
        <div class="col-12">
          <div class="close">
          <span class="closediv">&times;</span>
        </div>
          <div class="block">
            <!-- Image -->
            
            <!-- Content -->
            <div class="content text-center">
              
              <div class="title-text">
                <h3>Sign in to To Your Account</h3>
              </div>
              <form action="auth.php" method="post" >
                <!-- Username -->
                <input class="form-control main" type="email" name="email2" placeholder="Email" required>
                <!-- Password -->
                <input class="form-control main" type="password" name="password3"placeholder="Password" required>
                <!-- Submit Button -->
                <button type="submit2" class="btn btn-main-sm">sign in</button>
              </form>
              <div class="new-acount">
                <a href="contact.php">Forget your password?</a>
                <p>Don't Have an account? <a id="myBtn3" href="#" > SIGN UP</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
</div>

<div class="modal" id="myModal4">
<section class="user-login section" >
	<div class="container formsec formsec4" >
		<div class="row">
			<div class="col-12">
        <div class="close4">
          <span class="closediv">&times;</span>
        </div>
				<div class="block">
					<!-- Image -->
					
					<!-- Content -->
					<div class="content text-center" >
						
						<div class="title-text" >
							<h3>Send Us Your Question !</h3>
						</div>
						<form action="questions.php" method="post" >
							<!-- Username -->
							<input class="form-control main" type="text" placeholder="Full Name" name="urname" required>
							<!-- Email -->
							<input class="form-control main" type="email" placeholder="email" name="email" required>
							<!-- Password -->
							<input class="form-control main" type="longtext" placeholder="Your Question"  name="question" required>
              
							<!-- Submit Button -->
							<button type="submit" class="btn btn-main-md subbtn">Submit</button>
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</div>
    
  </section>

  

  <script>
    // Get the modal
var modal = document.getElementById("myModal");
var modal2 = document.getElementById("myModal2");
var modal3 = document.getElementById("myModal3");
var modal4 = document.getElementById("myModal4");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn2 = document.getElementById("myBtn2");
var btn3 = document.getElementById("myBtn3");
var btn4 = document.getElementById("myBtn4");
var btn5 = document.getElementById("myBtn5");
var btn6 = document.getElementById("myBtn6");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span2 = document.getElementsByClassName("close2")[0];
var span3 = document.getElementsByClassName("close3")[0];
var span4 = document.getElementsByClassName("close4")[0];

// When the user clicks the button, open the modal 


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
  all.style.filter ="none"; 
}
span2.onclick = function() {
  modal3.style.display = "none";
  all.style.filter ="none"; 
}
span3.onclick = function() {
  modal2.style.display = "none";
  all.style.filter ="none"; 
}
span4.onclick = function() {
  modal4.style.display = "none";
  all.style.filter ="none"; 
}



// When the user clicks anywhere outside of the modal, close it

btn.onclick = function() {
  modal.style.display = "block";
  element.classList.remove("show");
  all.style.filter ="blur(6px)"; 
}
btn2.onclick = function() {
  modal2.style.display = "block";
  element.classList.remove("show");
  
  all.style.filter ="blur(6px)"; 

  modal2.style.filter = "none";
  console.log(all)

}

btn3.onclick = function() {
  modal.style.display = "none";
  modal2.style.display = "block";
  all.style.filter ="blur(6px)"; 
  
}

btn4.onclick = function() {
  modal2.style.display = "none";
  modal.style.display = "block";
  all.style.filter ="blur(6px)"; 
  
}
btn5.onclick = function() {
 
 modal.style.display = "none";
 modal4.style.display = "block";
 all.style.filter ="blur(6px)"; 
}
btn6.onclick = function() {
 
  modal.style.display = "none";
  modal3.style.display = "block";
  all.style.filter ="blur(6px)"; 
}

// nfjabnfjoabfebfjabfkfe

var all = document.getElementsByClassName("containsall")[0];

  

// Get the button that opens the modal



window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}
  </script>
   
    <script src="assets/vendors/js/glightbox.min.js"></script>

    <script type="text/javascript">
      const lightbox = GLightbox({
        'touchNavigation': true,
        'href': 'https://www.youtube.com/watch?v=J9lS14nM1xg',
        'type': 'video',
        'source': 'youtube', //vimeo, youtube or local
        'width': 900,
        'autoPlayVideos': 'true',
});
      
    
    </script>
    <script>
      
      function openCity(cityName) {

      var i;
      var x = document.getElementsByClassName("city");
      var y =document.getElementsByClassName(cityName)
      for (i = 0; i < y.length; i++) {
              
              
              y[i].style.display = "block";

            }
      

       if(cityName === "all"){ 
        
        for (i = 0; i < x.length; i++) {
          
          x[i].style.display = "block";
        }}
        else{
      for (i = 0; i < x.length; i++) { 
        
          if(x[i].id === cityName){

            
          }
          else{
          x[i].style.display = "none";  
          
        }
      }}}
      


    </script>
    <script>
      var element = document.getElementById("navbarNav")
      function myFunction(){
        if(!element.classList.contains("show")){
        element.classList.add("show");
      }else{
        element.classList.remove("show");
      }
      }
    </script>
     <script src="assets/js/bootstrap.bundle.min.js"></script>

     <script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show2");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn2')) {
        var dropdowns = document.getElementsByClassName("dropdown-content2");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show2')) {
            openDropdown.classList.remove('show2');
          }
        }
      }
    }
    </script>

    
</body>
</html>