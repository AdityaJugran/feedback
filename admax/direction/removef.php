<?php
include '../../restServices/vendor1/common.php';
if($_GET['sub']==1)
{
    $log = $url.'removes/'.$_GET['id'].'/';
    
    $try_json = file_get_contents($log);
    // echo $try_json;
    $arr= json_decode($try_json, true);
    
        header('Location: ../views.php');
    
}
elseif($_GET['sub']==0)
{
$log = $url.'removef/'.$_GET['id'].'/';

$try_json = file_get_contents($log);
// echo $try_json;
$arr= json_decode($try_json, true);

    header('Location: ../viewf.php');
}
elseif($_GET['sub']==2)
{
$log = $url.'unassign/'.$_GET['id'].'/';

$try_json = file_get_contents($log);
// echo $try_json;
$arr= json_decode($try_json, true);

    header('Location: ../unassign.php');
}

?>