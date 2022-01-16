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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;1,300&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200;1,300&family=Roboto:ital,wght@0,100;1,300&display=swap');">
	<title>user info for study materials</title>
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
    <fieldset>
  <div class="py-5">
    <h3 class="text-center">USER INFO</h3>
  </div>
  <div class="w-50 m-auto">
    <form action="" method="post">
       <div class="form-group">
    <input type="text" class="form-control" name="user" placeholder="User Name">
  </div>
      <div class="form-row">
    <div class="col">
      <input type="text" class="form-control" name="roll" placeholder="ROLL">
    </div>
    <div class="col">
    <select name="department" class="form-control " id="department">
                    <option value="">Department</option>
                    <option value="US">EEE</option>
                    <option value="UK">CSE</option>
                    <option value="IN">BME</option>
                    
      </select>
    </div>
  </div>
       <div class="from-group">
        <label>Email Id</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
        </div>
         <div class="from-group">
        <label>Comments</label>
        <textarea class="form-control" name="comments"></textarea>
        
      </div>

      <button type="submit" name="button" class="btn btn-success"> submit</button>
      
    </form>
  </div>
</fieldset>
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
</body>
<?php
$con = mysqli_connect('localhost','root','', 'userdata');

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

//mysqli_select_db($con, 'userdata');
if (isset($_POST['button'])){
  $user = $_POST['user'];
  $roll = $_POST['roll'];
  $department = $_POST['department'];
  $email = $_POST['email'];
  $comments = $_POST['comments'];

  echo $user;

  $sql = "INSERT INTO userinfo(user, roll, department, email, comments) values('$user','$roll','$department','$email', '$comments')";
  //echo "$query";
  if(mysqli_query($con, $sql))
    echo "yes";

}
?>
</html>