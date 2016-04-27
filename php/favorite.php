<?php
	/*Author: Chengkang Xu*/
	/*Handle interconnection between server and sign up page*/
	
	include('base.php');
	$dbhandle = database_connect();
	mysqli_query($dbhandle,"USE u703629164_cxu");
	
	session_start();
	$username= $_SESSION['loginuser'];
	$recipeid = $_SESSION['recipeid'];
	
		
	$SQLString = "INSERT INTO favorite (username, recipeid)
		VALUES( '$username','$recipeid')";
	mysqli_query($dbhandle, $SQLString);
	
	$SQLString = "UPDATE recipe SET likecount = likecount + 1 WHERE recipeid = '$recipeid'" ;
	mysqli_query($dbhandle, $SQLString);
	
	header("Location: ../recipedetail.php?recipeid=$recipeid");
	die();
?>