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
        <li><a href="home.php">User</a></li>
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
</body>
</html>