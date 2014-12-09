<?php
include_once('lib/library.php');
?>
<html>
<head></head>
<body>
<p>
    <?php
    global $student_store;
    global $student_keys;
    $index = getIndex();
    foreach ($student_keys as $k1 => $v1) {
    echo '<span><b>';
    echo $v1;
    echo '</b>: ';
    echo $_SESSION[$student_store][$index][$k1];
    echo '</span><br/>';
    }
    ?>

</p>
<a href="items.php">Student list</a>
</body>
</html>