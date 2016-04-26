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
								$dbhandle = database_connect();
								$recipeid = $_GET['recipeid'];
								$SQLString = "SELECT * FROM recipe WHERE recipeid = '$recipeid'";
								$result = mysqli_query($dbhandle, $SQLString);
								$row = mysqli_fetch_assoc($result);
								
						?>							

						
						<tr>
							<td width="20%" align="right" bgcolor="#FFFFFF">Ingredients： </td>
							<td width="80%" align="left" bgcolor="#FFFFFF">
							<input name="ingredients" type="text" value="<?php echo $row['ingredient']; ?>" class="formBorder" readonly/>
							</td>
						</tr>
						
						<tr>
							<td width="20%" align="right" bgcolor="#FFFFFF">Steps： </td>
							<td width="80%" align="left" bgcolor="#FFFFFF">
							<input name="ingredients" type="text" value="<?php echo $row['step']; ?>" class="formBorder" readonly/>
							</td>
						</tr>

						<tr>
							<td width="20%" align="right" bgcolor="#FFFFFF">Video： </td>
							<td width="80%" align="left" bgcolor="#FFFFFF">
							<input name="ingredients" type="text" value="<?php echo $row['video']; ?>" class="formBorder" readonly/>
							</td>
						</tr>
						
						<!-- list comment -->
						<br>
						<h3>comment list</h3>
						<?php
						
								
								$recipeid = $_GET['recipeid'];
								session_start();
								$_SESSION['recipeid'] = $recipeid;
								$SQLString = "SELECT * FROM comment WHERE recipeid = '$recipeid'";
								$dbhandle = database_connect();
								$result = mysqli_query($dbhandle, $SQLString);
						
								
								while($row=mysqli_fetch_array($result)){
												echo '<tr>';
												echo '<td>';
												echo "<h3 value=".$row['username'].">";
												echo "<h3> title </h3>";
												echo "<input name=".'"'."ct".'"'. "type=".'"'."text".'"'."value=".$row['title']." readonly/>";
												echo "<h3> body </h3>";
												echo "<input name=".'"'."cb".'"'. "type=".'"'."text".'"'."value=".$row['body']." readonly/>";
												echo '</td>';
												echo '</tr>';
												echo '</br>';
								}
						?>
						
						
						<form method="post" action="php/comment.php">
						
						<br>
						<h3>comment title</h3>
						<input name="commenttitle" type="text" value="" placeholder="title" class="formBorder"/>
						</br>
						
						<h3>comment body</h3>
						<textarea name="commentbody" cols="40" rows="5" ... ></textarea>
						</br>
						
						<input type="submit" name = "submit" id="button" value="submit"/>
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