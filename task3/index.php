<!DOCTYPE html>
<html lang="en">
<head>
  <title>Milk Bath</title>
  <link rel="icon" href="bath.jpeg" type="image/icon type">
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="stylecards.css">
  <link rel="stylesheet" href="footer.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="bg-img" class="float-container">
        <div id = "t" class="float-child">
            <img src = "bath.jpeg" id="image">
        </div>
        <div id = "p" class="float-child">
            <ul class="nav justify-content-end">
                <li class="nav-item" >
                <a class="nav-link"  id = "item" href="#about">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" id = "item" href="#bg">Items</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" id = "item" href="#bg">Order</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" id = "item" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <h1 id = "topic">Welcome to Milk Bath</h1>
    </div>
    <div id="about" class = "grid-container">
    <div class = "grid-child">
        <h1 id="heading">Legacy of MB</h1>
        
        Three decades ago, a small sweet shop was started by Late K.S. Thirupathi Raja, in the metropolis of Chennai. This same shop has now flowered into multiple branches that dot the length and breadth of Chennai as well as its neighbouring cities.

M/s. Muruga Bhavan Sweets & Snacks is now a well-established brand in Southern India that continues to grow with a vision to capture the global market. The baton of this sweet legacy was passed on by K.S. Thirupathi Raja to his sons, Mr. K.T. Venkatesan and Mr. K.T. Srinivasa Raja who now act as the driving force behind MB.

The MB family is synonymous with a commitment to quality and a high degree of professionalism by using state of the art equipment in the manufacture of sweets, savouries, snacks and myriad varieties of Indian food. It is the taste of our food, coupled with our commitment to hygiene that makes us who we are today- a brand renowned for our authenticity. Today, MB is the most recognised Vegetarian restaurant in Chennai, cherished by many for our bountiful food at affordable prices!

</div>
<div class = "grid-child">
    <h1 id="heading">Quality you can taste</h1>
    We serve delicious vegetarian food made using fresh, quality ingredients catering to a multitude of taste preferences, without burning a hole in your wallet! We’re big on flavour and uncompromising on service, so much so that our restaurants are reckoned to be amongst the best vegetarian restaurants in the country.

Our sweets and snacks range from the melt-in-your-mouth Mysorepak from the south, the multi-variety Malaipeda of the North, the mouth-watering Badam Halwa of the East or the timeless dry fruits of the West. Our products are synonymous with traditional taste that you know and love while pioneering in the use of the latest techniques in manufacturing.

Our restaurants serve South Indian, North Indian as well Chinese delicacies! We use the finest ingredients that allows us to serve the freshest quality food. We give utmost importance to hygiene and customer service, which will leave you wanting more!
    </div>
</div>
    <div id="bg">
        <br><br>
        <h1 class="m">Items</h1>
    <div class="slideshow-container" id = "card">

<div class="mySlides fade">
  <img src="i1.jpg" id="cardimg"style="width:100%;height:auto">

</div>

<div class="mySlides fade">
  <img src="i2.jpg" id="cardimg"style="width:100%;height:auto">

</div>

<div class="mySlides fade">
  <img src="i3.jpg" id="cardimg"style="width:100%;height:auto">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
</div>
<br><br>
<br>
<br>
</div>
<form action="send.php" id="bookings" method="POST">
  <br>
  <div id="formbg" class="row">
  <h1 class="mm">Order</h1>
          <div class="col-9"> 
          <input type="text" class="float-right" id="name" placeholder="Name" name="name">
          </div>
          <div class="col-9"> 
          <input type="text"  class="float-right" id="pno" placeholder="Phone number" name="pno">
          </div>
          <div class="col-9">
          <input type="text"  class="float-right" id="address" placeholder="Address" name="address">
          </div>
          <div class="col-9">
          <input type="datetime-local"  class="float-right" id="dt" placeholder="Enter date/time for delivery" name="dt">
          </div>
          <div class="col-9"> 
          <input type="text" class="float-right" id="items" placeholder="Enter the items" name="items">
          </div>
          <div class="col-6">
          <button type="submit" class="btn btn-dark float-right" name="submit">Buy Items</button>
          </div>
      </div>
    </div>
  </form>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
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
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<div class = "footer" id="contact">
  <i class="fa fa-phone" id="icon1"></i><a id="footericons" href="#">10, Adyar, Chennai</a>
  <i class="fa fa-map-marker" id="icon2"></i><a id="footericons" href="#">+91 82378 29732</a>
  <i class="fa fa-envelope" id="icon3"></i><a id="footericons" href="mailto:ab@gmail.com">mb@gmail.com</a><br>
  <a href="https://www.google.com/search?tbs=lf:1,lf_ui:1&tbm=lcl&q=location+anna+university&rflfq=1&num=10&ved=2ahUKEwj9ke3a4vXuAhUUOSsKHUGAC0gQtgN6BAgTEAc#rlfi=hd:;si:;mv:[[13.0262271,80.2418169],[13.005884799999999,80.20306529999999]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3,lf:1,lf_ui:1">
  <img src="map.jpeg" alt="map" id="mapres"></a>
<p id="copy">@Copyright 2021, Milk Bath</p><br><br>
</div>
</body>
</html>
