<?php
session_start();

include '../../restServices/vendor1/common.php';
$name = $_POST['fname']."%20".$_POST['lname'];

$log = $url.'addfac/'.$name.'/'.$_POST['email'].'/'.$_POST['password'].'/'.$_POST['gender'].'/';

$try_json = file_get_contents($log);
// echo $try_json;
$arr= json_decode($try_json, true);
if($arr['success']==1)
{
    header('Location: ../viewf.php');
}
else
{
    $_SESSION['error']=1;
    header('Location: ../add_faulty.php');
}
// exit();	
// header('Location: profile.php');#set url for profile

?>