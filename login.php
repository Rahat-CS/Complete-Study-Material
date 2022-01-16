<?php 
	session_start();

	if(isset($_COOKIE['user'])){
		header('location:home.php');
	}

	if(isset($_POST['login'])){
		$con = mysqli_connect('localhost','root','', 'login');

		if (!$con) {
		  die("Connection failed: " . mysqli_connect_error());
		}
		echo "Connected successfully";

		$name = $_POST['user'];
		$pass = $_POST['password'];

		$sql = "select * from usertable where name = '$name' and password = '$pass'";
		$result = mysqli_query($con, $sql);

		if(!$result && mysqli_num_rows($result)==0){
			header('location:login.php');
		}
		else{
			setcookie('user', $name, time()+(3600*2));

			$_SESSION['user'] = $name;

			header('location:home.php');
		}	


	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<title>User Info</title>
</head>
<body>
	<div class="container">
		<div class="login-box">
			<div class="row">
				<div class="col-md-6 login-left">
					<h2>LOG IN HERE</h2>
					<form action="" method="post">
						<div class="from-group">
							<label>Email or Username</label>
							<input type="text" name="user" class="form-control" required>
						</div>
						<div class="from-group">
							<label> Password</label>
							<div class="from-group">
								<input type="password" name="password" class="form-control" required>
							</div>
						</div>
						<button type="submit" name="login" class="btn btn-primary">LOG IN</button>
					</form>
					
				</div>
				<div class="col-md-6 login-right">
					<h2>REGISTRATION HERE</h2>
					<form action="registration.php" method="post">
						<div class="from-group">
							<label>Email or Username</label>
							<input type="text" name="user" class="form-control" required>
						</div>
						<div class="from-group">
							<label> Password</label>
							<div class="from-group">
								<input type="password" name="password" class="form-control" required>
							</div>
						</div>
						<button type="submit" class="btn btn-primary">REGISTRATION </button>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>