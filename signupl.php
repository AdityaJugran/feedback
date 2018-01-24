<?php
session_start();
 include 'restServices/vendor1/common.php';
 if($_POST['branch']==2)
 {
 	$_POST['stream']='B.Ed';
 }
 else if($_POST['branch']==3)
 {
 	$_POST['stream']='B.C.A';
 }
 $name = $_POST['firstname']."%20".$_POST['lastname'];

 $log = $url.'signup/'.$name.'/'.$_POST['email'].'/'.$_POST['phone'].'/'.$_POST['password'].'/'.$_POST['year'].'/'.$_POST['late'].'/'.$_POST['semester'].'/'.$_POST['reg_number'].'/'.$_POST['branch'].'/'.$_POST['roll_number'].'/'.$_POST['stream'].'/'.$_POST['gender'].'/';

$arr_json = file_get_contents($log);
print_r($log);
print_r($arr_json);
$arr= json_decode($arr_json, true);

if($arr['success']==1)
{ 
header('Location: index.php');
}
else
{
$_SESSION['error']=1;
header('Location: signup.php');
}
?>