<?php
	session_start();
	session_destroy();
	if(isset($_COOKIE['username'])){
	setcookie('username',"",time()-30);
	setcookie('password',"",time()-30);
}
	header('Location:login.php');
?>