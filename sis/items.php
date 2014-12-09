<?php
include_once('lib/library.php');

print_r($_SESSION);
?>

<html>
<head>All Students</head>
<body>
<div>
    <table border="1">
    <thead>
        <tr>
            <th>SL#</th>
            <?php
            foreach ($student_keys as $k1 => $v1) {
                echo '<th>';
                echo $v1;
                echo '</th>';
            }
            ?>
            <th></th>
        </tr>
    </thead>
    <tbody>
    <?php
    global $student_store;
    $length = getStudentCount();
    for ($i=0;$i<$length;$i++):
        ?>
        <tr><td><?php echo $i+1?></td>
            <?php
            foreach ($student_keys as $k1 => $v1) {
                echo '<td>';
                if(isset($_SESSION[$student_store][$i][$k1]))
                echo $_SESSION[$student_store][$i][$k1];
                echo '</td>';
            }
            ?>
            <td><a href='update.php?index=<?php echo $i?>'>Edit</a> |
                <a href='delete.php?index=<?php echo $i?>'>Delete</a> |
                <a href='detail.php?index=<?php echo $i?>'>Show</a>
            </td>
        </tr>
    <?php
    endfor;
    ?>
</tbody>
</table>
<a href="create.php">Create New Student Record</a>
</div>

</body>
</html>