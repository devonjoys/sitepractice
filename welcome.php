<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Styles Conference</title>
		<link rel="stylesheet" href="assets/stylesheets/main.css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400">
	</head>

	<body>

		<header class="primary-header container group">
			<h1 class="logo">
				<a href="index.html">Styles <br> Conference</a>
			</h1>
			<h3 class="tagline">August 24&ndash;26th &mdash; Chicago, IL</h3>
			<nav class="nav primary-nav">
  				<ul>
   					<li><a href="index.html">Home</a></li><!--
    				--><li><a href="speakers.html">Speakers</a></li><!--
    				--><li><a href="schedule.html">Schedule</a></li><!--
    				--><li><a href="venue.html">Venue</a></li><!--
    				--><li><a href="register.html">Register</a></li>
  				</ul>
			</nav>
		</header>

		<?php  
		$info = $_POST["name"];
		$email = $_POST["email"];
		$info .= ", ";
		$info .= $email;
		$info .= "\n";

		$fp = fopen("register.txt", 'a+');
		fwrite($fp, $info);
		fclose($fp);
		?>


		<section class="row-alt">
  			<div class="lead container">

    			<h1>Thank you for registering!</h1>
    			<h3>
    				<a href="index.html">Return to Homepage</a>
    			</h3>
    			
  
  			</div>
		</section>		

	</body>

</html>