<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location: index.php');
}


?>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="css/style2.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
	</head>
<body>
<section id="nav-bar">
<nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#"><img src=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars" aria-hidden="true"></i>
  </button> 
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto" >
		<div class="dropdown">
		<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</button>
		<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		<p class="dropdown-item">Welcome <?php echo $_SESSION['username'];?></a>
		<a class="dropdown-item" href="">My Course</a>
		<a class="dropdown-item" href="">Account setting</a>
		<a class="dropdown-item" href="">Purchase history</a>
		<a class="dropdown-item" href="logout.php">Logout</a>
		</div>
		</div>
      <li class="nav-item ">
        <a class="nav-link" href="#banner">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#courses">Our Courses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about-us">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#contact" >Contact</a>
      </li>
	  
		
	 
    </ul>
  </div>
</nav>
</section>

<!--------------------------------------  banner section ---------------------->

<section id="banner">
<div class="container">
<div class="row">
<div class="col-md-6">
<p class="promo-title">Explore Yourself</p>
<p>kjbhjbsj jbjksbfk kjbkbkbsf jkkbkbkbbjkbsf kjbkkubkubkbfr kjjbjbkbkbkf</p>

<a href="#" class="play-btn"><i class="fa fa-chevron-right" aria-hidden="true"></i>Go to the COURSE</a> 
</div>
<div class="img-size">
<img src="img/invest.png" class="img-fluid">
</div>
</div>
</div>
 <img src="img/wave1.png" class="bottom-img">

</section>


<!--------------------------------- Courses section ---------------------------->

<section id="courses">
<div class="container text-center">
<div style="text-align:center; margin-bottom:30px;">
<h1>Our Courses</h1>
</div>
<div class="row">

<div class="col-md-4">
<div class="card" style="width: 18rem;">
 <!---- <img src="..." class="card-img-top" alt="..."> -->
 <div style="margin-top: 5px; margin-left:5px; margin-bottom:5px; margin-right:5px;">
 <video width="275" controls>
			<source src="img/videoplayback.mp4" type="video/mp4">
			<source src="img/videoplayback.ogg" type="video/ogg">
			Your browser does not support HTML video.
		</video>
</div>
  <div class="card-body">
    <h5 class="card-title">Stock Exchange</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary" style="background-color:#ff3300;">Buy Now</a>
	<a href="#" class="btn btn-primary" style="background-color:#e6b800;">Add to Cart</a>
  </div>
</div>
</div>

</div>
</div>
</section>


<!---------------------------  ABOUT Us -------------------->

<section id="about-us">
<div class="container">
<div style="text-align:center; margin-bottom:30px;">
<h1 >Why Choose Us ?</h1>
</div>
<div class="row">
<div class="col-md-6">
<p class="about-title">Why we're different</p>
	<ul>
	<li>Belive in hbhbd bhkbkb sfbkbkbhbsdf hbkbkksjj</li>
	<li>Belive in hbhbd bhkbkb sfbkbkbhbsdf hbkbkksjj</li>
	<li>Belive in hbhbd bhkbkb sfbkbkbhbsdf hbkbkksjj</li>
	<li>Belive in hbhbd bhkbkb sfbkbkbhbsdf hbkbkksjj</li>
	<li>Belive in hbhbd bhkbkb sfbkbkbhbsdf hbkbkksjj</li>
	<li>Belive in hbhbd bhkbkb sfbkbkbhbsdf hbkbkksjj</li>
	<li>Belive in hbhbd bhkbkb sfbkbkbhbsdf hbkbkksjj</li>
	</ul>
</div>
</div>
</div>
</section>


<!--------------------------- CONTACT --------------------------->

<section id="contact">
<div class="container text-center">
<p>Find us on Social Media</p>
	<div class="social-icons">
	<a href="#"><img src="img/facebook.png"></a>
	<a href="#"><img src="img/google-plus.png"></a>
	<a href="#"><img src="img/instagram.png"></a>
	<a href="#"><img src="img/linkedin.png"></a>
	<a href="#"><img src="img/whatsapp.png"></a>
	<a href="#"><img src="img/youtube.png"></a>
	</div>

</div>
</section>

<!------------------ footer section  ----------->
<section id="footer">
<img src="img/wave2.png" class="footer-img">
<div clas="container">
<div class="row">
<div class="col-md-6" style="padding-left: 10%;">
<img src="">
	<p>bhsbhdbfkbh bhjvshbdf hjvjhvjvhs dfhjvvjbbjkbjksf hhjbkjbsdf hbhbibhkb
	bjkbjkbjkbjkdf hjhuubnbjknjdf juiuihuihkldf hbbkbkhbhbdf bbbbkbjkbhdf
	hjvhjvhjf hvvhjvjhvfd </p>
</div>
<div class="col-md-6" style="padding-left: 5%;">
<img src="">
	<p><b>CONTACT US</b></p>
	<p>World Trade center, Flana dhikana</p>
	<p>+91 9876543210</p>
	<p>xyz@gmail.com</p>
</div>
</div>
</div>
</section>
</body>
</html>