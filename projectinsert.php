<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	require 'projectconnect.php';
	createStudent();
}

function createstudent()
{
	
	global $connect , $name , $email, $mobile, $OTP, $username, $password, $confirmpassword;
	
	$name = $_POST["name"];
	$email = $_POST["email"];
	$mobile = $_POST["mobile"];
	$OTP = $_POST["OTP"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$confirmpassword = $_POST["confirmpassword"];
	$query = " Insert into registerdetails(name,email,mobile,OTP,username,password,confirmpassword) values ('$name','$email','$mobile','$OTP','$username','$password','$confirmpassword');";
	
	mysqli_query($connect, $query) or die (mysqli_error($connect));
	mysqli_close($connect);
}

?>