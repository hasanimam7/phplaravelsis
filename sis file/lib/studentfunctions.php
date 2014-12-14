<?php
include_once('lib/library.php');

function GetAllStudents()
{
    file_put_contents(TXTFilePath, json_encode($_SESSION));
    $_SESSION = json_decode(file_get_contents(TXTFilePath), true);
}

function addItemToSession($data)
{
    if(empty($data))
    {
        return;
    }
    global $student_store;
    global $student_keys;

    if(!array_key_exists($student_store,$_SESSION)){
        $_SESSION[$student_store]= array();
    }
    $length = count($_SESSION[$student_store]);

    foreach($_POST as $pk => $pv) {
            if (empty($_SESSION[$student_store][$length])) {
                $_SESSION[$student_store][$length] = array();
            }
            foreach ($student_keys as $k1 => $v1) {
                if ($pk == $k1) {
                    if(isset($_POST[$pk]))
                        $_SESSION[$student_store][$length][$pk] = $_POST[$pk];
                    else
                        $_SESSION[$student_store][$length][$pk] = '';
                }
            }
    }

    //text file
    file_put_contents(TXTFilePath, json_encode($_SESSION));
    $_SESSION = json_decode(file_get_contents(TXTFilePath), true);

    print_r($_SESSION);

    //$_SESSION['names'][$length] = array('product_name'=>$product_name,
    //    'product_qty'=>$product_qty);


    /*$product_name='';$product_qty=0;


    if(!array_key_exists('names',$_SESSION)){
        $_SESSION['names']= array();
    }

    $length = count($_SESSION['names']);
    $_SESSION['names'][$length] = array('product_name'=>$product_name,
        'product_qty'=>$product_qty);*/

}

function getStudentCount()
{
    global $student_store;
    $_SESSION = json_decode(file_get_contents(TXTFilePath), true);
    if(isset($_SESSION[$student_store])) {
        $length = count($_SESSION[$student_store]);
        return $length;
    }
    else
        return 0;
}

function getIndex()
{
    $index = $_GET[GET_ID];
    return $index;
}

function deleteByGettingIndex()
{
    global $student_store;
    $_SESSION = json_decode(file_get_contents(TXTFilePath), true);

    if(!array_key_exists($student_store,$_SESSION)){
        $_SESSION[$student_store]= array();
    }

    $delID = getIndex();
    unset($_SESSION[$student_store][$delID]);

    $_SESSION[$student_store] = array_values($_SESSION[$student_store]);
    sortNSaveStudentInfo();

    file_put_contents(TXTFilePath, json_encode($_SESSION));
    $_SESSION = json_decode(file_get_contents(TXTFilePath), true);
}

function sortNSaveStudentInfo()
{
    global $student_store;

    if(!array_key_exists($student_store,$_SESSION)){
        $_SESSION[$student_store]= array();
    }
    $name = array();
    foreach ($_SESSION[$student_store] as $key => $val)
    {
        $name[$key] = $val[SORT_COLUMN_STUDENT];
    }
    array_multisort($name, SORT_ASC, $_SESSION[$student_store]);
}

function editItemToSession($data)
{
    if(empty($data))
    {
        return;
    }
    global $student_store;
    global $student_keys;

    if(!array_key_exists($student_store,$_SESSION)){
        $_SESSION[$student_store]= array();
    }

    $modify_index = $_POST[ID_COLUMN_STUDENT];
    echo $modify_index;
    foreach($_POST as $pk => $pv) {
        if (empty($_SESSION[$student_store][$modify_index])) {
            $_SESSION[$student_store][$modify_index] = array();
        }
        foreach ($student_keys as $k1 => $v1) {
            if ($pk == $k1) {
                $_SESSION[$student_store][$modify_index][$pk] = '';
                if(isset($_POST[$pk]))
                    $_SESSION[$student_store][$modify_index][$pk] = $_POST[$pk];
                else
                    $_SESSION[$student_store][$modify_index][$pk] = '';
            }
        }
    }
    //print_r($_POST);
    file_put_contents(TXTFilePath, json_encode($_SESSION));
    $_SESSION = json_decode(file_get_contents(TXTFilePath), true);

}

function getModifyDetail($index){

    $_SESSION = json_decode(file_get_contents(TXTFilePath), true);
    global $student_store;
    $itemToUpdate = array();
    if(!array_key_exists($student_store,$_SESSION)){
        $_SESSION[$student_store]= array();
    }

    $itemToUpdate = $_SESSION[$student_store][$index];
    return $itemToUpdate;
    //return $product = array('name'=>$_SESSION['names'][$index]['product_name'],
    //    'qty'=>$_SESSION['names'][$index]['product_qty']);
}

