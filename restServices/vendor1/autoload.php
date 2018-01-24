<?php
/*these files are declared by Aditya Jugran*/
function my_autoloader() {
    include 'class.functions.php';
    include 'common.php';
}

spl_autoload_register('my_autoloader');
?>