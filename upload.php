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
						
						<form method="post" action="php/upload.php">
						<h3>Recipe Title</h3>
						<input id="recipe title" type="text" name="title" value="" placeholder="Recipe Title"> </br>

						<!-- ingredients -->
						
						<h3>Ingredients</h3>
						
						<div class="row uniform">
							<div id="ingredient-name" class="6u 12u$(xsmall)">
								<input type="text" name="ingredient1" id="ingredient1" value="" placeholder="Gradient name" />
							</div>
							<div id="ingredient-quantity" class="6u 12u$(xsmall)">
								<input type="text" name="quantity1" id="quantity1" value="" placeholder="Quantity" />
							</div>
						</div>
						
						<div class="row uniform">
							<div id="ingredient-name" class="6u 12u$(xsmall)">
								<input type="text" name="ingredient2" id="ingredient2" value="" placeholder="Gradient name" />
							</div>
							<div id="ingredient-quantity" class="6u 12u$(xsmall)">
								<input type="text" name="quantity2" id="quantity2" value="" placeholder="Quantity" />
							</div>
						</div>
						
						<div class="row uniform">
							<div id="ingredient-name" class="6u 12u$(xsmall)">
								<input type="text" name="ingredient3" id="ingredient3" value="" placeholder="Gradient name" />
							</div>
							<div id="ingredient-quantity" class="6u 12u$(xsmall)">
								<input type="text" name="quantity3" id="quantity3" value="" placeholder="Quantity" />
							</div>
						</div>
						
						<div class="row uniform">
							<div id="ingredient-name" class="6u 12u$(xsmall)">
								<input type="text" name="ingredient4" id="ingredient4" value="" placeholder="Gradient name" />
							</div>
							<div id="ingredient-quantity" class="6u 12u$(xsmall)">
								<input type="text" name="quantity4" id="quantity4" value="" placeholder="Quantity" />
							</div>
						</div>
						
						<div class="row uniform">
							<div id="ingredient-name" class="6u 12u$(xsmall)">
								<input type="text" name="ingredient5" id="ingredient5" value="" placeholder="Gradient name" />
							</div>
							<div id="ingredient-quantity" class="6u 12u$(xsmall)">
								<input type="text" name="quantity5" id="quantity5" value="" placeholder="Quantity" />
							</div>
						</div>
						
						<div class="row uniform">
							<div id="ingredient-name" class="6u 12u$(xsmall)">
								<input type="text" name="ingredient6" id="ingredient6" value="" placeholder="Gradient name" />
							</div>
							<div id="ingredient-quantity" class="6u 12u$(xsmall)">
								<input type="text" name="quantity6" id="quantity6" value="" placeholder="Quantity" />
							</div>
						</div>
						
						<div class="row uniform">
							<div id="ingredient-name" class="6u 12u$(xsmall)">
								<input type="text" name="ingredient7" id="ingredient7" value="" placeholder="Gradient name" />
							</div>
							<div id="ingredient-quantity" class="6u 12u$(xsmall)">
								<input type="text" name="quantity7" id="quantity7" value="" placeholder="Quantity" />
							</div>
						</div>
						
						<div class="row uniform">
							<div id="ingredient-name" class="6u 12u$(xsmall)">
								<input type="text" name="ingredient8" id="ingredient8" value="" placeholder="Gradient name" />
							</div>
							<div id="ingredient-quantity" class="6u 12u$(xsmall)">
								<input type="text" name="quantity8" id="quantity8" value="" placeholder="Quantity" />
							</div>
						</div>
						
						<div class="row uniform">
							<div id="ingredient-name" class="6u 12u$(xsmall)">
								<input type="text" name="ingredient9" id="ingredient9" value="" placeholder="Gradient name" />
							</div>
							<div id="ingredient-quantity" class="6u 12u$(xsmall)">
								<input type="text" name="quantity9" id="quantity9" value="" placeholder="Quantity" />
							</div>
						</div>
						
						<div class="row uniform">
							<div id="ingredient-name" class="6u 12u$(xsmall)">
								<input type="text" name="ingredient10" id="ingredient10" value="" placeholder="Gradient name" />
							</div>
							<div id="ingredient-quantity" class="6u 12u$(xsmall)">
								<input type="text" name="quantity10" id="quantity10" value="" placeholder="Quantity" />
							</div>
						</div>
						
						<div class="row uniform">
							<div id="ingredient-name" class="6u 12u$(xsmall)">
								<input type="text" name="ingredient11" id="ingredient11" value="" placeholder="Gradient name" />
							</div>
							<div id="ingredient-quantity" class="6u 12u$(xsmall)">
								<input type="text" name="quantity11" id="quantity11" value="" placeholder="Quantity" />
							</div>
						</div>
						
						<div class="row uniform">
							<div id="ingredient-name" class="6u 12u$(xsmall)">
								<input type="text" name="ingredient12" id="ingredient12" value="" placeholder="Gradient name" />
							</div>
							<div id="ingredient-quantity" class="6u 12u$(xsmall)">
								<input type="text" name="quantity12" id="quantity12" value="" placeholder="Quantity" />
							</div>
						</div>
						
						<div>
						</br>

						<!-- steps -->
						<h3>Steps</h3>
						<span>Step 1</span>
						<textarea name="step1" cols="40" rows="5" ... ></textarea>
						
						<span>Step 2</span>
						<textarea name="step2" cols="40" rows="5" ... ></textarea>
						
						<span>Step 3</span>
						<textarea name="step3" cols="40" rows="5" ... ></textarea>
						
						<span>Step 4</span>
						<textarea name="step4" cols="40" rows="5" ... ></textarea>
						
						<span>Step 5</span>
						<textarea name="step5" cols="40" rows="5" ... ></textarea>
						
						<span>Step 6</span>
						<textarea name="step6" cols="40" rows="5" ... ></textarea>
						</br>
						
						<!-- video -->
						
						<h3>video link</h3>
						<input type="text" name="video" id="video" value="" placeholder="Video URL" />
						
						</br>
						
						<input type="submit" name = "submit" id="button" value="submit"/>
						
					</form>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>