<?php
$connection = mysql_connect("localhost","root","");
if ($connection) {
    echo ("Connection is succeed");
} else {
    echo ("Connection is fail");
}
?>