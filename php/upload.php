
<?php
	include('base.php');
	$dbhandle = database_connect();
	mysqli_query($dbhandle,"USE u703629164_cxu");

	//concate ingredients
	
	$SQL_ingredients = "";
	
	for ($x = 1; $x <= 12; $x++) {
	
		$ingredient = "ingredient".$x;
		$quantity = "quantity".$x;
	
		if ((!empty($_POST[$ingredient])) && (!empty($_POST[$quantity]))) {
		
			$SQL_ingredients = $SQL_ingredients.$_POST[$ingredient]." ".$_POST[$quantity]."; "; 	
			
		}
		else {
			break;
		}	
	} 
	
	//concate steps
	
	$SQL_steps = "";
	
	for ($x = 1; $x <= 6; $x++) {
	
		$step = "step".$x;
	
		if (!empty($_POST[$step])) {
		
			$SQL_steps = $SQL_steps.$_POST[$step]."; "; 	
		
			
		}
		else {
			break;
		}	
	} 
 	
 	$title = $_POST['title'];
 	$video = $_POST['video'];
 	session_start();
	$username = $_SESSION['loginuser'];	
	
	$SQLString = "INSERT INTO recipe (title,ingredient,step,username,likecount,video)
		VALUES( '$title', '$SQL_ingredients','$SQL_steps', '$username',0, '$video')";
	mysqli_query($dbhandle, $SQLString);
 	
 	 				
 	header("Location: ../index.php");
 	die();
 	
 	
 
 ?>