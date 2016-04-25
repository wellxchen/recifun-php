
<?php
	include('base.php');
	$dbhandle = database_connect();
	mysqli_query($dbhandle,"USE u703629164_cxu");
	
	
	
 	session_start();
	$username = $_SESSION['loginuser'];	

 	
 		if (!empty($_POST['email'])) {
 			
 			
 			$SQLupdate = "UPDATE users SET Email = '".$_POST['email']."' WHERE Username = '$username'" ;
 
 			$result_update = mysqli_query($dbhandle, $SQLupdate);
 			
 		}
 		
 		if (!empty($_POST['password'])) {
 			
 			
 			$SQLupdate = "UPDATE users SET password = '".$_POST['password']."' WHERE Username = '$username'" ;
 
 			$result_update = mysqli_query($dbhandle, $SQLupdate);
 			
 		}
 		
 		
 		
 		
 	
 	header("Location: ../index.php");
 	die();
 	
 	
 
 ?>