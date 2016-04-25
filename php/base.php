<?php

	session_start();

	function header_banner () {

		echo "<!-- Wrapper -->";
		echo "<div id=".'"'."wrapper".'"'.">";

		echo "<!-- Header -->";
		echo "<header id="."header".">";
						echo "<h1><a href=".'"'."index.php".'"'.">Recifun</a></h1>";
					
						echo "<nav class=".'"'."main".'"'.">";
						echo "<ul>";
						echo "<li class=".'"'."search".'"'.">";
								echo	"<a class=".'"'."fa-search".'"'."href=".'"'."#search".'"'.">Search</a>";
								echo	"<form id=".'"'."search".'"'. "method=".'"'."get".'"'."action=".'"'."#".'"'.">";
										echo "<input type="."text"." name="."query"."placeholder="."Search"."/>";
									echo "</form>";
								echo "</li>";
								echo "<li class=".'"'."menu".'"'.">";
								echo "<a class=".'"'."fa-bars".'"'." href=".'"'."#menu".'"'.">Menu</a>";
								echo "</li>";
							echo "</ul>";
						echo "</nav>";
					echo "</header>";

				echo "<!-- Menu -->";
					echo "<section id=".'"'."menu".'"'.">";

						echo "<!-- Search -->";
						echo "<section>";
								echo "<form class=".'"'."search".'"'." method=".'"'."get".'"'." action=".'"'."#".'"'.">";
								echo "<input type=".'"'."text".'"'. " name=".'"'."query".'"'."placeholder=".'"'."Search".'"'."/>";
							echo	"</form>";
							echo "</section>";

						

							if(isset($_SESSION['loginuser'])) {
							
							echo "<!-- Links -->";
							echo "<section>";
								echo "<ul class=".'"'."links".'"'.">";
								echo	"<li>";
									echo	"<a href=".'"'."profile.php".'"'.">";
									echo		"<h3>Profile</h3>";
									echo		"<p>View and edit my profile</p>";
									echo	"</a>";
									echo "</li>";
									echo "<li>";
									echo	"<a href=".'"'."myrecipe.php".'"'.">";
										echo	"<h3>Recipes</h3>";
										echo	"<p>View and edit my recipes</p>";
									echo	"</a>";
									echo "</li>";
									echo "<li>";
									echo	"<a href=".'"'."upload.php".'"'.">";
									echo		"<h3>Upload recipes</h3>";
									echo		"<p>Upload new recipes</p>";
									echo	"</a>";
									echo "</li>";
									echo "<li>";
									echo	"<a href=".'"'."favoriterecipe.php".'"'.">";
									echo		"<h3>Favorite recipes</h3>";
									echo		"<p>View favorite recipes</p>";
									echo	"</a>";
									echo "</li>";
								echo "</ul>";
							echo "</section>";
							
									echo "<!-- Actions -->";
									echo "<section>";
									echo "<ul class=".'"'."actions vertical".'"'.">";
									echo "<li><a href=".'"'."php/logout.php".'"'." class=".'"'."button big fit".'"'.">Log out</a></li>";
									echo "</ul>";
									echo "</section>";
							}
							
							else {
								
									
									echo "<!-- Actions -->";
									echo "<section>";
									echo "<ul class=".'"'."actions vertical".'"'.">";
									echo "<li><a href=".'"'."login.php".'"'." class=".'"'."button big fit".'"'.">Log In</a></li>";
									echo "</ul>";
								
								
								
									echo "<ul class=".'"'."actions vertical".'"'.">";
									echo "<li><a href=".'"'."signup.php".'"'." class=".'"'."button big fit".'"'.">Sign Up</a></li>";
									echo "</ul>";
									echo "</section>";
							}

					echo "</section>";

				}
				
	function database_connect(){
		$dbhandle = mysqli_connect("mysql.hostinger.co.uk","u703629164_cxu","qwer1234","u703629164_rf");
		if (mysqli_connect_errno())
		{
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		}
  		return $dbhandle; 
	}

								
?>