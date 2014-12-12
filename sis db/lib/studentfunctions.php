

<?php

include_once('lib/library.php');

function addItemToSession($data)
{
    if(empty($data))
    {
        return;
    }
    global $student_keys;

    $queryfilter = '';
    $queryparam = '';
    foreach($_POST as $pk => $pv) {
        foreach ($student_keys as $k1 => $v1) {
            if ($pk == $k1) {
                if(isset($_POST[$pk])) {
                    if(empty($queryfilter))
                        $queryfilter = $k1;
                    else
                        $queryfilter .= ','.$k1;

                    if(empty($queryparam))
                        $queryparam = '"'.$_POST[$pk].'"';
                    else
                        $queryparam .= ','.'"'.$_POST[$pk].'"';
                }
            }
        }
    }

    $connection = mysql_connect("localhost","root","");
    if ($connection) {
        //echo ("Connection is succeed");
    } else {
        //echo ("Connection is fail");
    }

    mysql_select_db("shop");

    $querystring = '';
    if(isset($queryfilter))
    {
        $querystring = 'INSERT INTO studentstore ('.$queryfilter.') VALUES ('.$queryparam.')';
    }

    $result = mysql_query($querystring);
    if($result) {

    }

    mysql_close($connection);
    //reload all
    GetAllStudent();
}

function editItemToSession($data)
{
    if(empty($data))
    {
        return;
    }
    global $student_keys;


    $queryparam = '';
    foreach($_POST as $pk => $pv) {
        foreach ($student_keys as $k1 => $v1) {
            if ($pk == $k1) {
                if(isset($_POST[$pk])) {

                    if(empty($queryparam))
                        $queryparam = $k1.' = '.'"'.$_POST[$pk].'"';
                    else
                        $queryparam .= ','.$k1.' = '.'"'.$_POST[$pk].'"';
                }
            }
        }
    }

    $connection = mysql_connect("localhost","root","");
    if ($connection) {
        //echo ("Connection is succeed");
    } else {
        //echo ("Connection is fail");
    }

    mysql_select_db("shop");

    $querystring = '';
    if(isset($queryparam))
    {
        $querystring = 'UPDATE studentstore set '.$queryparam.' Where student_id='.$_POST[ID_COLUMN_STUDENT];
    }
    //echo $querystring;
    $result = mysql_query($querystring);
    if($result) {

    }

    mysql_close($connection);
    //reload all
    GetAllStudent();
}

function GetAllStudent()
{
    global $studentdbstore;
    global $student_store;
    $listall[$student_store] = array();
    $connection = mysql_connect("localhost","root","");
    if ($connection) {
        //echo ("Connection is succeed");
    } else {
        //echo ("Connection is fail");
    }

    mysql_select_db("shop");

    $querystring = "SELECT * from studentstore";

    $result = mysql_query($querystring);
    if($result) {
        while($data = mysql_fetch_assoc($result))
        {
            $listall[$student_store][] = $data;
        }
    }

    mysql_close($connection);

    $studentdbstore[$student_store] = $listall[$student_store];
    return $listall;
}

function getStudentCount()
{
    global $student_store;
    global $studentdbstore;
    $length = count($studentdbstore[$student_store]);
    return $length;
}

function getIndex()
{
    $index = $_GET[GET_ID];
    return $index;
}

function deleteByGettingIndex()
{
    global $student_store;
    global $studentdbstore;
    if(!array_key_exists($student_store,$studentdbstore)){
        $studentdbstore[$student_store]= array();
    }

    $delID = getIndex();

    //delete sql
    $connection = mysql_connect("localhost","root","");
    if ($connection) {
        //echo ("Connection is succeed");
    } else {
        //echo ("Connection is fail");
    }
    mysql_select_db("shop");

    $querystring = 'DELETE from studentstore
    Where
    student_id='.$delID;
    echo $querystring;
    $result = mysql_query($querystring);
    if($result) {

    }
    mysql_close($connection);
    //read all again
    GetAllStudent();
}

function getModifyDetail($index){
    $itemToUpdate = GetStudentById($index);
    return $itemToUpdate;
}

function GetStudentById($idshow)
{
    global $studentdbstore;
    global $student_store;
    $detail = array();
    $connection = mysql_connect("localhost","root","");
    if ($connection) {
        //echo ("Connection is succeed");
    } else {
        //echo ("Connection is fail");
    }

    mysql_select_db("shop");

    $querystring = 'SELECT * from studentstore where student_id = '.$idshow;

    $result = mysql_query($querystring);
    if($result) {
        while($data = mysql_fetch_assoc($result))
        {
            $detail[] = $data;
        }
    }

    mysql_close($connection);


    return $detail;
}