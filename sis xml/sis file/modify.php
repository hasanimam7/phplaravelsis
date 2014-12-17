<?php
include_once('lib/library.php');

if(strtolower($_SERVER['REQUEST_METHOD'])== 'post') {
    $xmlfile = simplexml_load_file('lib/sis.xml');
    editItemToSession($xmlfile, $_POST);
}

header('location:'.WWW_PATH.'items.php');
?>