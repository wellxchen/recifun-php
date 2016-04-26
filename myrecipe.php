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

						<tbody>
								<?php
										$username = $_SESSION['loginuser'];
										$dbhandle = database_connect();	
										mysqli_query($dbhandle,"USE u703629164_cxu");											
										$result = mysqli_query($dbhandle, "SELECT * FROM recipe WHERE username = '$username'");
										
										while($row=mysqli_fetch_array($result)){
												echo '<tr>';
												echo '<td>';
												echo '<a href = "recipedetail.php?recipeid='.$row['recipeid'].'">'.$row['title'].'</a><br>';
												echo '</td>';
												echo '</tr>';
										}
								?>									
						</tbody>

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