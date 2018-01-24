<?php
session_start();
include '../../restServices/vendor1/common.php';

$log = $url.'asign/'.$_POST['subjects'].'/'.$_POST['faculty'].'/'.$_POST['sem'].'/'.$_POST['stream'].'/';

$try_json = file_get_contents($log);
// echo $try_json;
$arr1= json_decode($try_json, true);
// print_r($try_json);
if($arr1['success']==1)
{
    header('Location: ../unassign.php');
}
else
{
    $_SESSION['error']=1;
    $_SESSION['message']=$arr1['message'];
    header('Location: ../assign.php?sem=0');
}
?>
                      
