<?php
$name=$_POST['user'];
$pass=$_POST['password'];
if(($name=='rifat'&& $pass=='123')||($name=='mimma'&& $pass=='123')||($name=='nira'&& $pass=='123')||($name=='nipa'&& $pass=='123'))
{
	echo"<h1>welcome</h1>";
	echo $name;
	echo"<br>";
    echo $pass;
    
    if(!empty($_POST['remember']))
{
	setcookie('cookie_name',$name,time()+86400*30);
	header("location:admin.php");
}
else
{
	//echo"<br>Cookie is not set";
	header("location:admin.php");
}
}
?>



