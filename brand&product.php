<?php
  session_start();
?>
<?php include 'config/config.php' ?>
  <?php include 'lib/Database.php' ?>
  <?php
    $db = new Database();
  ?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Brand and Product</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>


    <style type="text/css">
    .sh{
      
      color:black;
      box-sizing: content-box;
      width: 30%;
      border: solid #5B6DCD 3px;
      padding: 5px;

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
						<h2>BRAND AND PRODUCTS </h2>
						<p>TOTO CAR COMPANY  ,BANGLADESH
						</p>
					</header>

					

					<!-- <div id="map" style="width:50%;height:400px;"></div> -->
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
                  xhttp.open("GET", "gethint.php?q="+str, true);
                  xhttp.send();   
                }
                </script>

					

					<?php
              //$myfile = fopen("member.txt", "w") or die("Unable to open file!");
              
              $query = "select * from tbl_image";
              $mem = $db->select($query);
              $x=1;
              while($result = $mem->fetch_assoc()){
              ?>
              <div class="sh">
              <img src="uploads/<?php echo $result['image']; ?>" alt="<?php echo $_SESSION['car_name']; ?>" style="height: 100%;width:100%"> <br><?php $txt=$x.". ".$result['car_name']."<br>Model Name: ".$result['car_name']." ".$result['car_model']; ?> 
                  <?php echo $txt;//fwrite($myfile, $txt); ?> </div> <br/>
              

             <?php $x++; } //fclose($myfile);?>
					<marquee><a href="noticeuser.php">Click to View TOTO Notice and News Update</a></marquee>

				
			</section>

<?php include 'footer.php'?>