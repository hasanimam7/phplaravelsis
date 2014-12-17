<?php
include_once('lib/library.php');

if(strtolower($_SERVER['REQUEST_METHOD'])== 'post') {
    $xmlfile = simplexml_load_file('lib/sis.xml');
    addItemToSession($xmlfile, $_POST);
}
else {
    header('location:'.WWW_PATH.'create.php');
}
header('location:'.WWW_PATH.'items.php');
?>

