<?php
if (isset($_COOKIE['cookie_name'])) {
    header("location:admin.php");
}
else
{

?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title> Login From</title>
		<link rel="stylesheet"  href="style.css">
	</head>
	<body>
		<div class="login-box">
			<h1>Login</h1>
			<form autocomplete="off" action="home.php" method="post">
			<div class="textbox">
            <input type="text" placeholder="Username" name="user">
			</div>
			<div class="textbox">
            <input type="password" placeholder="Password" name="password" >
			</div>
            <input  type="submit" value="Sign in">
            <input type="checkbox" checked="checked" name="remember">Remember me?<br>
			</form>
		</div>
	
	</body>
    </html>
    <?php
}


?>