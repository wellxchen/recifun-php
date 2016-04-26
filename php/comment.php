<?php
	/*Author: Chengkang Xu*/
	/*Handle interconnection between server and sign up page*/
	
	include('base.php');
	$dbhandle = database_connect();
	mysqli_query($dbhandle,"USE u703629164_cxu");
	$title=$_POST['commenttitle'];
	$body=$_POST['commentbody'];
	$recipeid = $_SESSION['recipeid'];
	$username = $_SESSION['loginuser'];	
	
	
		

	$SQLString = "INSERT INTO comment (recipeid,username,title,body)
	VALUES( '$recipeid','$username', '$title', '$body')";
	mysqli_query($dbhandle, $SQLString);
		
	header("Location: ../index.php");
	die();

	

	
	
?>