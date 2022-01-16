<?php
session_start();

$con = mysqli_connect('localhost','root','', 'login');

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


$name = $_POST['user'];
$pass = $_POST['password'];

 
$s = "select * from usertable where name = '$name'";
$result = mysqli_query($con, $s);


if(!$result || mysqli_num_rows($result)==0)
{
	$reg= "insert into usertable (name, password) values('$name','$pass')";
	mysqli_query($con, $reg);

	echo "Registration Successful";

	//$_SESSION["user"] = $name;

	header('location:home.php');
}
else{
	
	echo "this Already Taken" ;
	
}
?>