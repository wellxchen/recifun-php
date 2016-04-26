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
						
							$dbhandle = database_connect();
							mysqli_query($dbhandle,"USE u703629164_cxu");
							$SQL = "select * from recipe where likecount=(select max(likecount) from recipe)";
							$result = mysqli_query($dbhandle, $SQL);
							$row=mysqli_fetch_array($result);
							
							$recipeid = $row['recipeid'];
							$SQL = "select count(*) as c from comment where recipeid='$recipeid'";
							$result = mysqli_query($dbhandle, $SQL);
							$row_c = mysqli_fetch_array($result);
						?>
						
						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<?php 
											echo '<a href = "recipedetail.php?recipeid='.$row['recipeid'].'">'.$row['title'].'</a>';
										?>
										
									</div>
									<div class="meta">
										
										<?php
										 echo '<a href="#" class="author"><span class="name">'.$row['username'].'</span><img src="images/avatar-2.jpg" alt="" /></a>';
										?>
									</div>
								</header>
								<?php
								echo '<a href="recipedetail.php?recipeid='.$row['recipeid'].'" class="image featured"><img src="images/bjduck.jpg" alt="" /></a>'
								?>
								
								<footer>
									<ul class="actions">
										
									</ul>
									<ul class="stats">
										
										
										<?php 
											echo '<li><a href="recipedetail.php?recipeid='.$row['recipeid']. '"class="'."icon fa-heart".'">'.$row['likecount'].'</a></li>';
										
										
										 echo '<li><a href="recipedetail.php?recipeid='.$row['recipeid']. '"class="'."icon fa-comment".'">'.$row_c['c'].'</a></li>';
										?>
									</ul>
								</footer>
							</article>

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