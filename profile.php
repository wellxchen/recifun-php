<!DOCTYPE HTML>

<html>
	<head>
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<?php
		include('php/base.php');
		header_banner();
		
		
	?>

				<!-- Main -->
					<div id="main">
						<?php
	
							session_start();
							$username = $_SESSION['loginuser'];
							$dbhandle = database_connect();
							mysqli_query($dbhandle,"USE u703629164_cxu");	
	
	
							$SQLString = "SELECT * FROM users WHERE Username='$username'";
							$result = mysqli_query($dbhandle, $SQLString);
							$row = mysqli_fetch_assoc($result);
							
						?> 
						
						<form method="post" action="php/profileedit.php">
						<input name="username" type="text" value="<?php echo $row['username']; ?>" readonly/>
						<input name="email" type="text" value="<?php echo $row['email']; ?>" placeholder="Email"/>
						<input name="password" type="text" value="<?php echo $row['password']; ?>" placeholder="Password"/>
						
						<input type="submit" name = "submit" id="button" value="submit changes"/>

						</form>
					</div>

									


					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>