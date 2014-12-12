<?php
include_once('lib/library.php');
GetAllStudent();
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
    global $studentdbstore;
    $length = getStudentCount();
    for ($i=0;$i<$length;$i++):
        ?>
        <tr><td><?php echo $i+1?></td>
            <?php
            foreach ($student_keys as $k1 => $v1) {
                echo '<td>';
                if(isset($studentdbstore[$student_store][$i][$k1])) {
                    if($studentdbstore[$student_store][$i][$k1] == $k1)
                    {
                        echo 'Yes';
                    }
                    else {
                        echo $studentdbstore[$student_store][$i][$k1];
                    }
                }
                echo '</td>';
            }
            ?>
            <td><a href='update.php?index=<?php echo $studentdbstore[$student_store][$i][ID_COLUMN_STUDENT]?>'>Edit</a> |
                <a href='delete.php?index=<?php echo $studentdbstore[$student_store][$i][ID_COLUMN_STUDENT]?>'>Delete</a> |
                <a href='detail.php?index=<?php echo $studentdbstore[$student_store][$i][ID_COLUMN_STUDENT]?>'>Show</a>
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