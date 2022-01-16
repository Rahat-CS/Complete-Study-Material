<?php
session_start();
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
<div class="jumbotron">
  <h1>Welcome to KUET</h1>
  <p>Khulna University of Engineering & Technology (KUET), Bangladesh established in 1967 as Khulna Engineering College, starts its long cherished journey in 3 June, 1974 after receiving special direction . At present, around 5240 students are studying in KUET in 20 Academic Department under 3 Faculty. . Besides, quality level graduate study and research in M.Sc, M.Sc Engg, M.Phil and Ph.D. Programs are running in its nourished environment. Students from foreign counties are also studying in this prestigious institute.The campus of this university stands at North-West corner of Khulna City Corporation, about 12 Km from the city center, in the midst of an impressive natural beauty having vast greenery spreading over an area of 101 acres land. It has a fresh airy campus and congenial atmosphere with several students’ halls of residence. The academic buildings are not far from residential halls having a harmonious bridge in between them. The Physical infrastructure including Halls of residence, Academic Buildings and Institutes, Workshops, Library, Computer Center, Play grounds, Cafeteria, Auditorium, Medical Center, Bank, Post Office, ATM Booth, Guest House and Club, Mosque, Dormitory, Teachers & Staff quarters, Schools etc. are structured in a very planned way and are being improving day by day. In every year, about seven hundred students graduate from this university at different branches of engineering and technology. Then the graduates are distinguished themselves for up-holding their quality in engineering and technological excellence to meet the demands of the days.</p>
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
<div class="mapouter">
  <div class="gmap_canvas">
    <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=kuet&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    <a href="https://www.whatismyip-address.com/divi-discount/"></a><br>
    <style>
    .mapouter{
    position:relative;
  text-align:right;
height:500px;
width:600px;}
</style>
    <a href="https://www.embedgooglemap.net">See our Location</a>
    <style>
    .gmap_canvas {
    overflow:hidden;
  background:none!important;
height:500px;
width:600%;}
</style>
  </div>
</div>
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
        <li><a href="department.php">CSE</a></li>
        <li><a href="department.php">EEE</a></li>
        <li><a href="department.php">BME</a></li>
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