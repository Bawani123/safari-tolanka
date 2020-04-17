<?php


session_start();


$con =mysqli_connect('localhost', 'root','');

mysqli_select_db($con,'useraccountnew');

$firstname   = $_POST['firstname'];
$lastname    = $_POST['lastname'];
$email       = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$password    = $_POST['password'];


$s = "select * from jointable1 where firstname = '$firstname' && password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {

	$_SESSION['firstname'] = $firstname;
	header('location:home2.php');
	
	# code...
}else{
	header('location:login2.php');
}

?>