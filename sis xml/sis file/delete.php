<?php
include_once('lib/library.php');
$xmlfile = simplexml_load_file('lib/sis.xml');
deleteByGettingIndex($xmlfile);

header('location:items.php');