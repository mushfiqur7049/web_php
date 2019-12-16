<!DOCTYPE HTML>

<html>
	<head>
		<title>Brand & products</title>
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
    width: 120px;
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
						<h2>BRAND & PRODUCT COLLECTION </h2>
						<p>TOTO CAR COMPANY  ,KHULNA</p>
						<marquee><a href="gallery.php">Click to View TOTO Photo Gallery</a></marquee>
						
					</header>

					

					
					
					<div id="mar">

                        <iframe width="390" height="345" src="uploads/alot.jpg"></iframe>
						<button class="collapsible">alot</button>
						<div class="cont">
						  <p>Alot<br>
						  Car Model Name:-Maruti Suzuki Alto 800<br>
						  Price:-5000.0$ <br>
						  Just Available For Sale Only </p>
                        </div>  
						
						<iframe width="390" height="345" src="uploads/AskMen.jpg"></iframe>
						<button class="collapsible">AskMen</button>
						<div class="cont">
						  <p>AskMen<br>
						  Car Model Name:- AskMen<br>
						  Price:-1.2$billion<br>
						  1st Most Selling Car in June'19</p>
						</div>
						<iframe width="390" height="345" src="uploads/BMW i100.jpg"></iframe>
						<button class="collapsible">bmw i100 coupe</button>
						<div class="cont">
						  <p>BMW i100 Coupe<br>
						  Car Model Name:-BMW i100 Coupe<br>
						  Price:-2.1$billion<br>
                          2nd Most Selling Car in June'19</p>
						</div>
						<iframe width="390" height="345" src="uploads/volvo.jpg"></iframe>
						<button class="collapsible">volvo S60 Cross Country Crossover</button>
						<div class="cont">
						  <p>volvo S60<br>
						  Car Model Name:-Volvo S60 Cross Country Crossover<br>
						  Price:-1.6$billion<br>
                          3rd Most Selling Car in June'19</p>
						</div>
						<iframe width="390" height="345" src="uploads/volvo-s60.jpg"></iframe>
						<button class="collapsible">vlovo s60 (latest)</button>
						<div class="cont">
						  <p>Volvo_s60(latest)<br>
						  Car Model Name:-Volvo S60 (latest) <br>
						  Price:-1.8$ billion<br>
                          4th Most Selling Car in June'19 </p>
						</div>
						<iframe width="390" height="345" src="uploads/rolls-royce-cullinan-main2.jpg"></iframe>
						<button class="collapsible">rolls royce cullinan</button>
						<div class="cont">
						  <p>Rolls-Royce-Cullinan<br>
						  Car Model Name:-Rolls-Royce-Cullinan<br>
						  Price:-1.3$ billion<br>
                          5th Most Selling Car in April'17</p>
						</div>
						<iframe width="390" height="345" src="uploads/suzuki-global.jpg"></iframe>
						<button class="collapsible">suzuki global</button>
						<div class="cont">
						  <p>Suzuki Global<br>
						  Car Model Name:-Suzuki Global<br>
						  Price:-1.5$ billion<br>
                          1st Most Selling Car in August'18</p>
						</div>

						<iframe width="390" height="345" src="uploads/harley-davidson.jpg"></iframe>
						<button class="collapsible">harley davidson</button>
						<div class="cont">
						  <p>Harley Davidson<br>
						  Car Model Name:-Harley Davidson<br>
						  Price:-1.0$ billion<br>
						  4th Most Selling Bike in April'19</p>
                        </div>
                        <iframe width="390" height="345" src="uploads/elantra.jpg"></iframe>
						<button class="collapsible">elantra</button>
						<div class="cont">
						  <p>Elantra<br>
						  Car Model Name:-Hyundai Elantra<br>
						  Price:-9000.0$<br>
						  1st Most Selling Car in January'19</p>
                        </div>

                        <iframe width="390" height="345" src="uploads/wagon.jpg"></iframe>
						<button class="collapsible">wagon</button>
						<div class="cont">
						  <p>Wagon<br>
						  Car Model Name:-Maruti Suzuki Wagon R<br>
						  Price:-5000.0$ <br>
						  4th Most Selling Car in March'19</p>
						

                        
						
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
					
					
					

				</div>
			</section>

<?php include 'footer.php'?>