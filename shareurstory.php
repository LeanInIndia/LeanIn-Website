<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Lean In India Index -->
  <title>Lean In India</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 8px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
  
  }
  .person:hover {
      border-color: #fff;
  }
  .carousel-inner img {
      -webkit-filter: grayscale(90%);
      filter: grayscale(90%); /* make all photos black and white */
      width: 100%; /* Set width to 100% */
      margin: auto;
      max-height:600px !important;
      
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #fff;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
 
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #E52E1A;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar  {
      color: #d5d5d5 !important;
  }
  .navbar-brand{
    color: #fff !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #292920 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: #E52E1A !important;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
   .search:focus{
   outline-color:#E52E1A;
 }
.search {
                padding:3px 10px;
                margin: -10px 0 0 0;
                border:0px solid #dbdbdb;
}
.button {
                position:relative;
                padding:2px 15px;
                left:-8px;
                border:2px solid #E52E1A;
                background-color:#E52E1A;
                color:#fafafa;
}
.button:hover  {
                background-color:#fafafa;
                color:#E52E1A;
}
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  </style>
</head>
<body id="LeanIn" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#LeanIn">LEAN IN INDIA</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#aboutus">WHO WE ARE</a></li>
        <li><a href="#circles">CIRCLES</a></li>
        <li><a href="#inspi">INSPIRATION</a></li>
        <li><a href="#contact">CONTACT US</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">EXPLORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Our Mentors</a></li> <!--mentors page-->
            <li><a href="#">Moments</a></li>      <!--like red scarf and video thing-->
            <li><a href="#">Events</a></li>        <!--Event calender showing public events-->
          </ul>
        </li>
      <!--  <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li> -->
      </ul>
    </div>
  </div>
</nav>

<!-- ***<div id="myCarousel" -->


<!-- Container (About us Section) -->
<!-- ***<div id="aboutus" -->


<!-- Container (Circle Section) -->
<!-- ***<div id="circles" -->


<!-- Container (Inspiration Section) -->
<div id="inspi" class="container">
  <h3 class="text-center">Share your Lean In story</h3>
  <div class="row"> 
    <!-- <div class="col-md-4">
      <p><span class="glyphicon glyphicon-phone"></span>Phone: xxxxxxxxxx</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: leanin@mail.com</p>
    </div> -->
	<form method="post" action="secure_email_code.php">
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="headline" name="headline" placeholder="Headline" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Your Email ID" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="story" name="story" placeholder="Your Lean In story" rows="15"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <input type="submit" class="btn pull-right" name="send" value="Send">
        </div> 
      </div>
    </div>
	</form>
  </div>
</div>
    
  
<!-- Container (Contact Section) -->
<!-- ***<div id="contact" -->


<!-- Footer -->
<!-- ***<footer class="text-center" -->


<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip();
  document.getElementById('demo11').style.visibility="hidden";
  document.getElementById('demo22').style.visibility="hidden";
  document.getElementById('demo33').style.visibility="hidden";
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#LeanIn']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();
      // Store hash
      var hash = this.hash;
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
       // window.location.hash = hash;
      });
    } // End if
  });
});
$('#demo1').hover(
    function hoverIn() {
        // mouse is hovering over this element
        document.getElementById('demo11').style.visibility="visible";
    },
    function hoverOut() {
        // mouse was hovering over this element, but no longer is
        document.getElementById('demo11').style.visibility="hidden";
    }
);
$('#demo2').hover(
    function hoverIn() {
        // mouse is hovering over this element
        document.getElementById('demo22').style.visibility="visible";
    },
    function hoverOut() {
        // mouse was hovering over this element, but no longer is
        document.getElementById('demo22').style.visibility="hidden";
    }
);
$('#demo3').hover(
    function hoverIn() {
        // mouse is hovering over this element
        document.getElementById('demo33').style.visibility="visible";
    },
    function hoverOut() {
        // mouse was hovering over this element, but no longer is
        document.getElementById('demo33').style.visibility="hidden";
    }
);
</script>

</body>
</html>