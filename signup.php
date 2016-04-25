<!DOCTYPE HTML>

<html>
	<head>
		
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<script type="text/javascript">
			function ValidateForm(frm) {
				if (frm.username.value == "") {alert('Username is required.');frm.username.focus();return false;}
				if (frm.email.value == "") {alert('Email is required.');frm.email.focus();return false;}
				if (frm.password.value == "") {alert('Password is required.');frm.password.focus();return false;}
				if (frm.password_validate.value != frm.password.value) {alert('Password does not match.');frm.password_validate.focus();return false;}
			
			return true; 
		}
		</script>
	</head>
	<body>

		<?php
		include('php/base.php');
		header_banner();
	?>

				<!-- Main -->
					<div id="main">
						
						
						<form method="post" action="php/signup.php" onsubmit="return ValidateForm(this);">
						
						<div>
						<input type="text" name="username" id="username" value="" placeholder="User Name" />
						</div>
						
						<div>
						<input type="text" name="email" id="email" value="" placeholder="Email" />
						</div>
						
						<div>
						<input type="password" name="password" id="password" value="" placeholder="Password",class="formBorder"/>
						</div>
						
						<div>
						<input type="password" name="password_validate" id="password_validate" value="" placeholder="Enter password again", class="formBorder"/>
						</div>
						
						<div>
						<input type="submit" name = "submit" id="button" value="submit"/>
						</div>
						
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