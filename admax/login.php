<?php
session_start();

// print_r($log);
// exit();
if(($_POST['username']=='aditya')&&($_POST['password']==123456789))
{ 
	$_SESSION['admin']=1;
	// print_r($_SESSION['admin']);
// exit();	create a session{admin}
header('Location: dashboard.php');#se/t url for profile
}
else
{
	$_SESSION['error']=1;
header('Location: index.php');
}
?>