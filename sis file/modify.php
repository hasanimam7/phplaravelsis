<?php
include_once('lib/library.php');

if(strtolower($_SERVER['REQUEST_METHOD'])== 'post') {
    editItemToSession($_POST);
}

header('location:'.WWW_PATH.'items.php');
?>