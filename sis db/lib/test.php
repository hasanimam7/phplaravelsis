<?php
//include_once('lib/connect.php');

$connection = mysql_connect("localhost","root","");
if ($connection) {
    echo ("Connection is succeed");
} else {
    echo ("Connection is fail");
}

mysql_select_db("shop");

/**
 * 1. INSERT QUERY
 */
/*$querystring = "INSERT INTO studentstore
(student_fname, student_lname)
VALUES
('Hasan Imam', 'Md')";*/
////inserting data

/**
 * 2. UPDATE QUERY
 */
/*$querystring = "UPDATE studentstore
set student_fname = 'Md.', student_lname = 'Imam'
Where
student_id=1";*/
////updating data

/**
 * 3. DELETE QUERY
 */
/*$querystring = "DELETE from studentstore
Where
student_id=1";*/
////Deleting data

/**
 * 4. SELECT QUERY
 */
$querystring = "SELECT * from studentstore";
////Selecting data


$result = mysql_query($querystring);
if($result){
    echo("<br>Input data is succeed");

    // 4. Select result
    //mysql_fetch_array
    //mysql_fetch_assoc
    while($data = mysql_fetch_assoc($result))
    {
        echo '<br/>';
        echo ' '. $data['student_id'] . ' ';
        echo ' '. $data['student_fname'] . ' ';
        echo ' '. $data['student_lname'] . ' ';
    }
    //Selecting data

}else{
    echo("<br>Input data is fail");
}