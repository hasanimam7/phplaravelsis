<?php
include_once('lib/library.php');

//print_r($_SESSION);
?>

<html>
<head>
    <title>All Students</title>
    <meta charset="utf-8">
    <!-- Include meta tag to ensure proper rendering and touch zooming -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Include bootstrap stylesheets -->
    <link rel="stylesheet" href="lib/bootstrap.css">
</head>
<body>
<div class="container">
    <h2>Students</h2>
    <p>All students:</p>
    <div class="table-responsive">
    <table class="table table-striped table-bordered">
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
                if(isset($_SESSION[$student_store][$i][$k1])) {
                    if($_SESSION[$student_store][$i][$k1] == $k1)
                    {
                        echo 'Yes';
                    }
                    else {
                        echo $_SESSION[$student_store][$i][$k1];
                    }
                }
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
    </div>
<a href="create.php">Create New Student Record</a>
</div>

</body>
</html>