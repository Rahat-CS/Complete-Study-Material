<?php
session_start();


if(!isset($_SESSION["user"]) && !isset($_COOKIE['user'])){
  header('location:login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Study materials</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;1,300&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200;1,300&family=Roboto:ital,wght@0,100;1,300&display=swap');">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Study_Materials</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="department.php">Department</a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="about.php">about</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="user.php">User</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/cse.jpg" alt="COMPUTER SCIENCE & ENGINEERING" width="1100" height="500">
      <div class="carousel-caption">
      <h3>CSE</h3>
      <p>Computer for storming the brain</p>
    </div>
    </div>
    <div class="carousel-item">
      <img src="images/electrical.jpg" alt="Electrical & Electronics Engineering" width="1100" height="500">
      <div class="carousel-caption">
      <h3>EEE</h3>
      <p>Connection is the purpose for life</p>
    </div>
    </div>
    <div class="carousel-item">
      <img src="images/biomedical.jpg" alt="Biomedical Engineering" width="1100" height="500">
      <div class="carousel-caption">
      <h3>BME</h3>
      <p>Support human is our motto</p>
    </div>
    </div>
  </div>
  <!--<a class="carousel-control-next" href="#demo"data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo"data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>-->

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
  <div class="py-5">
    <h3 class="text-center">About</h3>
  </div>
  <div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="images/kuet.jpg" class="img-fluid aboutimg">
    </div>
        <div class="col-lg-6 col-md-6 col-12">
      <h2 class="display-4">About KUET</h2>
      <p class="py-5">Khulna University of Engineering & Technology (KUET) is one of the leading public universities of Bangladesh giving special emphasis in the Engineering and Technological Education and research. KUET is well known for offering very high quality educational, research and developmental programs in the major disciplines of engineering as well as basic sciences. It has a sober objective to achieve excellence in quality education, research and progression to address the present needs of the country as well as the South-Western region to make it as the "Center of Excellence".</p>

      <a href="department.php" class="btn btn-success">know more about dept</a>
    </div>
    </div>
  </div>
</section>
<section class="my-5">
  <div class="py-5">
    <h3 class="text-center">DEPARTMENTS</h3>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-12">
        <div class="card">
  <img class="card-img-top" src="images/cse.jpg" alt="COMPUTER SCIENCE & ENGINEERING">
  <div class="card-body">
    <h4 class="card-title">COMPUTER SCIENCE & ENGINEERING</h4>
    <p class="card-text">Click Here For UPLOAD & DOWNLOAD Study Materials</p>
    <a href="upload/index.php" class="btn btn-primary">click</a>
  </div>
</div>
      </div>
      <div class="col-lg-4 col-md-6 col-12">
        <div class="card">
  <img class="card-img-top" src="images/electrical.jpg" alt=ELECTRICAL & ELECTRONICS ENGINEERING>
  <div class="card-body">
    <h4 class="card-title">ELECTRICAL & ELECTRONICS ENGINEERING</h4>
    <p class="card-text">Click Here For UPLOAD & DOWNLOAD Study Materials</p>
    <a href="upload/index.php" class="btn btn-primary">click</a>
  </div>
</div>
      </div>
      <div class="col-lg-4 col-md-6 col-12">
        <div class="card">
  <img class="card-img-top" src="images/biomedical.jpg" alt="BIOMEDICAL ENGINEERING">
  <div class="card-body">
    <h4 class="card-title">BIOMEDICAL ENGINEERING</h4>
    <p class="card-text">Click Here For UPLOAD & DOWNLOAD Study Materials</p>
    <a href="upload/index.php" class="btn btn-primary">click</a>
  </div>
</div>
      </div>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="containers">
    <div class="rows">
      <div class="footer-col">
        <h4> HOME</h4>
        <ul>
        <li><a href="home.php">HOME</a></li>
        <li><a href="user.php">User</a></li>
        <li><a href="logout.php">logout</a></li>
      </ul>
      </div>
      <div class="footer-col">
        <h4>Contact KUET</h4>
        <ul>
        <li><a href="user.php">Contact number</a></li>
        <li><a href="#">01888102099</a></li>
        <li><a href="#">02-0682451150</a></li>
      </ul>
      </div> 
      <div class="footer-col">
        <h4>Departments</h4>
        <li><a href="department.php">Department</a></li>
      </ul>
        <li><a href="#">CSE</a></li>
        <li><a href="#">EEE</a></li>
        <li><a href="#">BME</a></li>
        <ul>
      </div> 
      <div class="footer-col">
        <h4>Follow KUET</h4>
        <ul>
        <div class="social-links">
          <a href="https://www.facebook.com/rahat.rmk/"><i class="fab fa-facebook-f"></i></a>
          <a href="https://twitter.com/Kha2Mahmud"> <i class="fab fa-twitter"></i></a>
          <a href="https://www.linkedin.com/in/rahat-mahmud-khan-016756169/"> <i class="fab fa-instagram"></i></a>
          <a href=""> <i class="fab fa-linkedin-in"></i></a>
          </div>
      </ul>
      </div>
    </div>
  </div>

</footer>
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>