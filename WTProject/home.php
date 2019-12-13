<?php 
session_start();
session_unset();
if($_SESSION)
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="indexs.css">
<title>Home page</title>

</head>
<body>
<div class="head">
    <img src="btp.png" alt="logo"></img>
    <h1 style="font-size:80px; display: inline; text-align:center">Traffic Violation Spotter</h1>
</div>
<ul class="top_nav">
    <div>
    <li><a href="faq_nologin.html">FAQs</a></li>
    <li><a href="upload_nologin.php">Upload</a></li>
    <li><a href="login.php">Login</a></li>
    </div>
</ul>

<div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="traffic9.png" style="width:100%">

</div>

<div class="mySlides fade">
  
  <img src="traffic4.png" style="width:100%">
</div>

<div class="mySlides fade">
  
  <img src="traffic8.png" style="width:100%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<!--<div>

<img src="traffic_home.png" class="imgm"></img>
<div class="centered">
<pre>HELP ENFORCE 
TRAFFIC RULES</pre>
</div>
</div>
-->
<div class="heading">
Options
</div>
<hr class="line">
<div class="row">
    <a href="faq_nologin.html">
    <div class="column">
        <div id="faqp">
        <img src="faq2.png"></img>
        <figcaption id="faqt">Ask your questions and browse through forum</figcaption>
        </div>
    </a>
    </div>
    <a href="upload_nologin.html">
    <div class="column">
        <div id="uploadp">
        <img src="upload1.png"></img>
        <figcaption id="uploadt">Upload pic of violation</figcaption>
        </div>
    </div>
    </a>
    <a href="login.php">
    <div class="column">
        <div id="awardsp">
        <img src="awards1.png"></img>
        <figcaption id="awardst">My winnings and past history</figcaption>
        </div>
    </div>
    </a>
    <a href="instructionsnologin.html">
    <div class="column">
        <div id="rulesp">
        <img src="rules1.png"></img>
        <figcaption id="rulest">Instructions</figcaption>
        </div>
    </div>
    </a>
</div>
<br>
<div class="heading">
About Us
</div>
<hr class="line">
<br>
<br>
        <div id="about_usp">
        <div class="about_usc">
        <img src="about_us3.png" class="imgm"></img>
        </div>
        <div class="about_usc"> 
        <p>By the people, for the people, of the people<p>
    <p>Help keep namma Bengaluru city safe. This is a platform to create awareness of traffic rules and helps in enforcing them 
    by joining hands with the public and sensitizes them on following traffic rules.</p>
        </div>
        </div>
<div class="contact">
    <div class="col">
        <p class="header">Change Makers</p>
        <p class="contactt">
        We aim to build a safer city and we accomplish it ourselves with the help of our law-abiding citizens.
        </p>

        <img src="icons.png" alt="facebook and instagram and twitter icon" id="icons" width="50%" height="20%"></img>
    </div>
    <div class="col">
        <p class="header">
        Our Mission</p>
        <p class="contactt">
            An intiative to create awareness about rampant traffic violations and sensitize citizens on following traffic rules making bengaluru roads safer to commute.
            </p>
    </div>
    <div class="col">
        <p class="header">Connect with us:</p>
        <br>
        <img src="email.png" id="email" alt="email"></img> <pre> btp@gmail.com</pre>
        <br>
        <br>
        <img src="location.png" id="loc" alt="location" >
<pre id="location">Outer Ring Road,
Banashankari,
Bangalore-85.</pre>

    </div>
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>