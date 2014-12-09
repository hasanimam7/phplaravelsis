<?php
include_once('lib/library.php');

if(strtolower($_SERVER['REQUEST_METHOD'])== 'post') {
    addItemToSession($_POST);
}
else {
    header('location:'.WWW_PATH.'create.php');
}
header('location:'.WWW_PATH.'items.php');
?>

