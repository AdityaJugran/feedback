<?php
session_start();
$_SESSION['sem']=$_POST['sem'];
$_SESSION['stream']=$_POST['stream'];
$_SESSION['activate']=1;
header('Location: ../student_details.php');

?>