<?php
session_start();

include '../../restServices/vendor1/common.php';

$log = $url.'addsub/'.$_POST['sname'].'/'.$_POST['scode'].'/'.$_POST['sem'].'/';

$try_json = file_get_contents($log);
// echo $try_json;
$arr= json_decode($try_json, true);
if($arr['success']==1)
{
    header('Location: ../views.php');
}
else
{
    $_SESSION['error']=1;
    header('Location: ../add_subject.php');
}
// exit();	
// header('Location: profile.php');#set url for profile

?>