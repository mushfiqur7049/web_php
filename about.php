<!DOCTYPE HTML>

<html>
	<head>
		<title>About</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><a href="index.php">TOTO</a></h1>
				<a href="#nav">Menu</a>
			</header>

		<?php include 'hnav.php'?>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major special">
						<h2>About Us</h2>
						<p>TOTO Caar Company , Khulna </p>
					</header>

					<a href="#" class="image fit"><img src="uploads/toto1.jpg" alt="" /></a>
					<p>
						<?php 
							$myfile = fopen("toto.txt", "r") or die("Unable to open file!");
							//echo fread($myfile,filesize("toto.txt"));					
							//echo readfile("hack.txt");
							// Output one line until end-of-file
							while(!feof($myfile)) {
  								echo fgets($myfile);
							} 
							// Output one character until end-of-file
							/*while(!feof($myfile)) {
  								echo fgetc($myfile);
							}*/
							fclose($myfile);
						?> 
					</p>
					<marquee><a href="noticeuser.php">Click to View TOTO Notice and News Update</a></marquee>

				</div>
			</section>

<?php include 'footer.php'?>