<?php
	/*Author: Chengkang Xu*/
	/*Handle interconnection between server and sign up page*/
	
	include('base.php');
	$dbhandle = database_connect();
	mysqli_query($dbhandle,"USE u703629164_cxu");
	
	session_start();
	$username= $_SESSION['loginuser'];
	$recipeid = $_SESSION['recipeid'];
	
		
	$SQLString = "DELETE from favorite where username = '$username' and recipeid = '$recipeid'";
	mysqli_query($dbhandle, $SQLString);
	
	$SQLString = "UPDATE recipe SET likecount = likecount - 1 WHERE recipeid = '$recipeid'" ;
	mysqli_query($dbhandle, $SQLString);
	
	header("Location: ../recipedetail.php?recipeid=$recipeid");
	die();
	
?>