<?php
	/*Author: Chengkang Xu*/
	/*Handle interconnection between server and sign up page*/
	
	include('base.php');
	$dbhandle = database_connect();
	mysqli_query($dbhandle,"USE u703629164_cxu");
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$password_validate=$_POST['password_validate'];
	
	
	
	
		
	$result_username = mysqli_query($dbhandle, "SELECT * FROM users WHERE Username='$username'");
	$result_email = mysqli_query($dbhandle, "SELECT * FROM users WHERE Email='$email'");
	
	
		
	if (mysqli_num_rows($result_username) > 0 || mysqli_num_rows($result_email) > 0) {
		
		header("Location: ../signup.php");
		die();
	}
	
	else {
	
		$SQLString = "INSERT INTO users (Username,Email,Password)
		VALUES( '$username','$email', '$password')";
		mysqli_query($dbhandle, $SQLString);

		session_start();
		$_SESSION['loginuser']=$username;
		
		header("Location: ../index.php");
		die();
	}
	

	
	
?>