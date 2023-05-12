

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">   
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
    <link rel="icon" type="image/x-icon" href="images/H_logo.svg">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>feedbacks</title>
</head>
<body>
    

    <nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">
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
      </div>   
  </nav>
     <div style="margin-top:100px"> </div>
    <div class="msgdiv">
        <div class="msgtitle"> 
        <?php
// start the session
session_start();

// check if the form was submitted
 
    // connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mysql";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    
    // query the database to check if the email and password match
    $sql = "SELECT * FROM reviews";
    $result = mysqli_query($conn, $sql);
    while($row = $result->fetch_assoc()) {
        echo 
        "<br> <div class='biggerdiv'><div class='msgcard'><div class='titlediv'><p id='msgtitle'>"
        .
        $row["fullName"]
        .
        " <p class='position'>" 
        .
        $row["position"]
        . 
        "</p></p>
        </div><br><div class='msgdiv'><p class='msg'>"
        .
        $row["review"]
        .
        "</p></div></div></div><br>" 
        ;
    }
    
    // close the database connection
    mysqli_close($conn);

?>    
        </div>
    </div>
  <script>
    // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
  element.classList.remove("show");
  all.style.filter ="blur(6px)"; 
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
  all.style.filter ="none"; 
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// nfjabnfjoabfebfjabfkfe
var modal2 = document.getElementById("myModal2");
var all = document.getElementsByClassName("containsall")[0];
  

// Get the button that opens the modal
var btn2 = document.getElementById("myBtn2");

var btn3 = document.getElementById("myBtn3");
var btn4 = document.getElementById("myBtn4");
var pageBody = document.getElementById("body")
// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close2")[0];


// When the user clicks the button, open the modal 
btn2.onclick = function() {
  modal2.style.display = "block";
  element.classList.remove("show");
  
  all.style.filter ="blur(6px)"; 

  modal2.style.filter = "none";

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

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
  modal2.style.display = "none";
  all.style.filter ="none"; 
}

// When the user clicks anywhere outside of the modal, close it
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