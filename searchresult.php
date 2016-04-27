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
										
										$dbhandle = database_connect();
										mysqli_query($dbhandle,"USE u703629164_cxu");

										$title = $_POST['query'];						
										
										$SQLString = "SELECT * FROM recipe where title like '%$title%'";
	
										$result = mysqli_query($dbhandle, $SQLString);
									
										
										if ((mysqli_num_rows($result) != 0) && ($result != false)) {
											
											while($row=mysqli_fetch_array($result)){
													echo '<tr>';
													echo '<td>';
													echo '<a href = "recipedetail.php?recipeid='.$row['recipeid'].'">'.$row['title'].'</a><br>';
													echo '</td>';
													echo '</tr>';
												}
										}
										
										else {
											echo '<tr><td>no such recipe exists</td></tr>';
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