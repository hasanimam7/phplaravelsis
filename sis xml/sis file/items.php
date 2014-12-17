<?php
include_once('lib/library.php');
$xmlfile = simplexml_load_file('lib/sis.xml');

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
    foreach ($xmlfile as $student) {
        $i = $student->attributes()->student_id;
                   ?>
            <tr>
                <td><?php echo $i ?></td>
                <?php
                foreach ($student as $k1 => $v1) {
                    echo '<td>';
                    foreach ($student_keys as $k2 => $v2) {
                        if($k1 == $k2) {
                            if ($v1 == $k2) {
                                echo 'Yes';
                            } else {
                                echo $v1;
                            }
                        }
                    }
                    echo '</td>';
                }
                ?>
                <td><a href='update.php?index=<?php echo $i ?>'>Edit</a> |
                    <a href='delete.php?index=<?php echo $i ?>'>Delete</a> |
                    <a href='detail.php?index=<?php echo $i ?>'>Show</a>
                </td>
            </tr>
        <?php

        }
    ?>
</tbody>
</table>
    </div>
<a href="create.php">Create New Student Record</a>
</div>

</body>
</html>