<?php

	//database connection
	include('base.php');
	$dbhandle = database_connect();
	mysqli_query($dbhandle,"USE u703629164_cxu");	
	
	$username=$_POST["username"];
	$password=$_POST["password"];

	

	
	$SQLString = "SELECT * FROM users WHERE Username='$username' AND Password='$password'";
	
	$result = mysqli_query($dbhandle, $SQLString);
	$count=mysqli_num_rows($result);
	if($count==1){
		session_start();
		$_SESSION['loginuser']=$username;
		header("Location: ../index.php");
		die();
	}
	else{
				
		header("Location: ../login.php");
		die();
	}	
?>