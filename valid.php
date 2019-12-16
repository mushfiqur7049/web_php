<!--  -->

<?php
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$username   = $_POST['username'];
		$password   = $_POST['password'];
		//$remember  	= $_POST['remember'];
		
		
		if($username==='mushfiqur' && $password==='01704817049')
		{
			
			if(!empty($_POST['remember']))
			{
				setcookie('cookie_name',$name,time()+86400*30);
				header("location:admin.php");
			}
			else
			{
				header("location:admin.php");
			}
		}
		// 	{
		// 		//$remember	= $_POST['remember'];
		// 		if(isset($_POST['remember'])){
		// 			//setcookie('username',$username,time()+30,"/");
		// 			//setcookie('password',$password,time()+30,"/");
		// 			session_start();
		// 			$_SESSION['username'] = $username;
		// 			header("Location:admin.php"); 
		// 		}
		// 		else{
		// 			//setcookie('username',$username,time()+30,"/");
		// 			//setcookie('password',$password,time()+30,"/");
		// 			session_start();
		// 			$_SESSION['username'] = $username;
		// 			header("Location:admin.php");
		// 		}
				
		// 	}
		// else{

		// 	echo "<h1 style='text-align:center;'>Username or Password is invalid.<br>Click here to <a href='logina.php'>try again</a></h1>";

		// }
	}
	else{
		header("location: logina.php");
	}
?>
