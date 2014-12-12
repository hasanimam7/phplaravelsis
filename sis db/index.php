<?php
include_once('lib/library.php');

if(strtolower($_SERVER['REQUEST_METHOD'])== 'post') {
    addItemToSession($_POST);

    header('location:'.WWW_PATH.'items.php');
}
else {
    header('location:'.WWW_PATH.'create.php');
}
?>

