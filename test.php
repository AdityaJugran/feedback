<?php

echo $_POST['firstname']."<br>".$_POST['lastname']."<br>".$_POST['email']."<br>".$_POST['branch']."<br>".$_POST['semester']."<br>";
if(isset($_POST['stream']))
{
	echo "STREAM ".$_POST['stream'];
}

?>