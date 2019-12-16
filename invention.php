<!DOCTYPE HTML>

<html>
	<head>
		<title>Invention</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	
	<style>
	* {
	    box-sizing: border-box;
	}

	body {
	    margin: 0;
	    font-family: Arial;
	    font-size: 17px;
	}
	.collapsible {
    
    color: red;
    cursor: pointer;
    padding: 6px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
	}

	.active, .collapsible:hover {
	    background-color: #555;
	}
	.cont {
    padding: 0 18px;
    display: none;
    overflow: hidden;
    background-color: #f1f1f1;
	}
	.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
	}
	.tooltip .tooltiptext {
    visibility: hidden;
    width: 190px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -60px;
    opacity: 0;
    transition: opacity 0.3s;
	}

	.tooltip .tooltiptext::after {
	    content: "";
	    position: absolute;
	    top: 100%;
	    left: 50%;
	    margin-left: -5px;
	    border-width: 5px;
	    border-style: solid;
	    border-color: #555 transparent transparent transparent;
	}

	.tooltip:hover .tooltiptext {
	    visibility: visible;
	    opacity: 1;
	}

	#myVideo {

	    position: relative;
	    right: 0;
	    bottom: 0;
	    min-width: 100%; 
	    min-height: 100%;
	}

	.content {
		text-align: center;
	    position: relative;
	    bottom: 0;
	    background: rgba(0, 0, 0, 0.5);
	    color: #f1f1f1;
	    width: 100%;
	    padding: 20px;
	}
	#wrapper {
	  /* for visualization purposes */
	  text-align: center;
	}
	#yourdiv {
	   /* for visualization purposes */
	  display: inline-block;
	}

	#myBtn {
	    width: 200px;
	    font-size: 18px;
	    padding: 10px;
	    border: none;
	    background: #000;
	    color: #fff;
	    cursor: pointer;
	}

	#myBtn:hover {
	    background: #ddd;
	    color: black;
	}
	#mar{
		margin: 65px;
	}
	</style>
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
						<h2>TOTO Invention</h2>
						<p>TOTO CAR COMPANY < BANGLADESH </p>
						<marquee><a href="noticeuser.php">Click to View TOTO Notice and News Update </a></marquee>
					</header>

					
					<div id="wrapper">
						<div id="yourdiv">
							<div class="content">
								<video autoplay muted loop id="myVideo">
								  <source src="video/toto.MP4" type="video/mp4">
								  Your browser does not support HTML5 video.
								</video>
							  <h1>TOTO Invention </h1>
							  <p></p>
							  <button id="myBtn" onclick="myFunction()">Pause</button>
							</div>
						</div>
					</div>

					<script>
					var video = document.getElementById("myVideo");
					var btn = document.getElementById("myBtn");

					function myFunction() {
					  if (video.paused) {
					    video.play();
					    btn.innerHTML = "Pause";
					  } else {
					    video.pause();
					    btn.innerHTML = "Play";
					  }
					}
					</script>
					
					
					<div id="mar">
						<h4>
							<div class="tooltip">TOTO has Inventated some Cars like-
							  <span class="tooltiptext">AsKmen,BMW i100 Coupe,Volvo S60 Cross Country Crossover,Rolls-Royce-Cullinan</span>
							</div>
						</h4>
						<button class="collapsible">AsKmen , faster car in Bangladesh</button>
						<div class="cont">
						  <p>AsKmen is a fastest car in Bangladesh with some nice feature.It is so much comfortable for the user.</p>
						</div>
						<button class="collapsible">BMW i100 Coupe,luxurious car in the world.</button>
						<div class="cont">
						  <p>People want to leaf luxurious life, so they want such kind of car. And now we are able to provide them such car like BMW i100 Coupe.</p>
						</div>
						
						
						
						<script>
							var coll = document.getElementsByClassName("collapsible");
							var i;

							for (i = 0; i < coll.length; i++) {
							    coll[i].addEventListener("click", function() {
							        this.classList.toggle("active");
							        var content = this.nextElementSibling;
							        if (content.style.display === "block") {
							            content.style.display = "none";
							        } else {
							            content.style.display = "block";
							        }
							    });
							}
						</script>
						
						
						
					</div>
					
					<div id="mar">
						<iframe width="390" height="345" src="https://www.youtube.com/embed/85L1xCKgsWM"></iframe>
						<iframe width="390" height="345" src="https://www.youtube.com/embed/iNa6NW8YiK0"></iframe>
						<iframe width="390" height="345" src="https://www.youtube.com/embed/QrSCwfo3JrQ"></iframe>
					</div>
					

				</div>
			</section>

<?php include 'footer.php'?>