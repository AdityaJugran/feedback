<?php
session_start();
   include 'restServices/vendor1/common.php';
$log = $url.'Login/'.$_POST['username'].'/'.$_POST['password'].'/';
$try_json = file_get_contents($log);
// echo $try_json;
$arr= json_decode($try_json, true);
// print_r($log);
// exit();
if($arr['success']==1)
{ $_SESSION['id']=$arr['id'];
	// print_r($_SESSION['id']);
// exit();	
header('Location: quick/index.php');#set url for profile
}
else
{
	$_SESSION['error']=1;
header('Location: index.php');
}
?>