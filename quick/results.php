<?php
session_start();
include '../restServices/vendor1/common.php';

foreach (array_keys($_POST) as $field)
{
    $data = explode("/",$field);
    $data = $url.'result/'.$_SESSION['id'].'/'.$data[0].'/'.$data[1].'/'.$data[2].'/'.$_POST[$field].'/';
    $try_json = file_get_contents($data);
    

}
$arr= json_decode($try_json, true);
// print_r($log);
// exit();

if($arr['success']==1)
{	
    $data = $url.'/chk/'.$_SESSION['id'].'/';
    $try_json = file_get_contents($data);
header('Location: index.php');#set url for profile
}
else
{
	$_SESSION['error']=1;
header('Location: feed_back.php');
}
?>