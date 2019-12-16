<?php
  session_start();
?>
<?php include 'config/config.php' ?>
  <?php include 'lib/Database.php' ?>
  <?php
    $db = new Database();
  ?>

<?php
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
      $product  = $_POST['product'];
      $quantity   = $_POST['quantity'];
      $usid = $_SESSION['username'];
      
      $query = "INSERT INTO tbl_online(customer_name,product_name,quantity) VALUES('$usid','$product','$quantity');";
      $result = $db->insert($query);

    }
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Online Order</title>
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
				<h1><a href="users.php">TOTO</a></h1>
				<a href="#nav">Menu</a>
			</header>

		<?php include 'unav.php'?>
		
		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">

					<header class="major special">
						<h2>Online Order</h2>
						<p>TOTO Car COmpany ,Khulna </p>
					</header>

					<a href="#" class="image fit"><img src="images/toto1.jpg" alt="" /></a>
					<form action="" method="POST">
	                    <div class="container 75%">
	                      <div class="row uniform 50%">
	                        
	                        <div class="12u$">
	                          
	                           <input name="product" placeholder="Product Name" type="text" /><br>
	                            <input name="quantity" placeholder="Quantity" type="text" />
	                            <ul class="actions">
	                              <li><input type="submit" class="special" value="Submit" /></li>
	                              <li><input type="reset" class="alt" value="Reset" /></li>
	                            </ul>
	                        </div>
	                      </div>
	                    </div>
	                    
	                </form>
	                <div>
						<p><b>Choose your Car model : </b><br>
							<a href=innovation.php><i>TOTO Innovation <i></a><br>
							<a href=ubrand&product.php><i>TOTO Brand & Product</i></a><br>
							
						</p>
					</div>

				</div>
			</section>

<?php include 'footer.php'?>