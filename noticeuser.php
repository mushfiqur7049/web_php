<?php include 'config/config.php' ?>
<?php include 'lib/Database.php' ?>
<?php
$db = new Database();
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Noticeboard</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<style>
	.fa {
	    font-size: 50px;
	    cursor: pointer;
	    user-select: none;
	}

	.fa:hover {
	  color: darkblue;
	}
	</style>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><a href="users.php">TOTO</a></h1>
				<a href="#nav">Menu</a>
			</header>

		<?php include 'unav.php'?>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major special">
						<h2>Noticeboard</h2>
						<p>TOTO Car Company , Khulna</p>
					</header>

					<div>
		              <p>Suggestions: <span id="txtHint"></span></p> 
		              <p>Search: <input type="text" id="txt1" onkeyup="showHint(this.value)"></p>

		                <script>
		                function showHint(str) {
		                  var xhttp;
		                  if (str.length == 0) { 
		                    document.getElementById("txtHint").innerHTML = "";
		                    return;
		                  }
		                  xhttp = new XMLHttpRequest();
		                  xhttp.onreadystatechange = function() {
		                    if (this.readyState == 4 && this.status == 200) {
		                      document.getElementById("txtHint").innerHTML = this.responseText;
		                    }
		                  };
		                  xhttp.open("GET", "gethint3.php?q="+str, true);
		                  xhttp.send();   
		                }
		                </script>
		            </div>

					<?php
						$query = "select * from tbl_notice order by post_time desc";
						$notice = $db->select($query);
						while($result = $notice->fetch_assoc()){
						?>
						
						<h3><a href="#"><?php echo  $result['title']; ?></a></h3>
						<?php //<a href="#"><img src="images/hack.jpg" alt="post image"/></a>?>
						<?php echo $result['post']; ?>
						<p><?php echo $result['post_time']; ?></p>
						<i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>

										
										
					
					<?php } ?>

				</div>
			</section>
				<script>
					function myFunction(x) {
					    x.classList.toggle("fa-thumbs-down");
					}	
				</script>		
<?php include 'footer.php'?>