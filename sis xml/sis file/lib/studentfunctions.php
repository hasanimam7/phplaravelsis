<?php
include_once('lib/library.php');

function GetAllStudents()
{
    //TODO
}

function addItemToSession($xmlfile, $data)
{
    if(empty($data))
    {
        return;
    }

    $user = $xmlfile->addChild('studentstore');

    if(isset($_POST['student_fname']))
    $fname = $user->addChild("student_fname", $_POST['student_fname']);
    else
        $fname = $user->addChild("student_fname", '');
    if(isset($_POST['student_lname']))
    $lname = $user->addChild("student_lname", $_POST['student_lname']);
    else
        $lname = $user->addChild("student_lname", '');
    if(isset($_POST['student_address']))
    $address = $user->addChild("student_address", $_POST['student_address']);
    else
        $address = $user->addChild("student_address", '');
    if(isset($_POST['student_email']))
    $emailid = $user->addChild("student_email", $_POST['student_email']);
    else
        $emailid = $user->addChild("student_email", '');
    if(isset($_POST['student_mphone']))
    $mphone = $user->addChild("student_mphone", $_POST['student_mphone']);
    else
        $mphone = $user->addChild("student_mphone", '');
    if(isset($_POST['student_dob']))
    $dob = $user->addChild("student_dob", $_POST['student_dob']);
    else
        $dob = $user->addChild("student_dob", '');
    if(isset($_POST['student_gender']))
        $gender = $user->addChild("student_gender", $_POST['student_gender']);
    else
        $gender = $user->addChild("student_gender", '');
    if(isset($_POST['student_mstatus']))
        $mstatus = $user->addChild("student_mstatus", $_POST['student_mstatus']);
    else
        $mstatus = $user->addChild("student_mstatus", '');
    if(isset($_POST['student_degree']))
        $degree = $user->addChild("student_degree", $_POST['student_degree']);
    else
        $degree = $user->addChild("student_degree", '');
    if(isset($_POST['student_hobby_reading']))
        $reading = $user->addChild("student_hobby_reading", $_POST['student_hobby_reading']);
    else
        $reading = $user->addChild("student_hobby_reading", '');
    if(isset($_POST['student_hobby_movie']))
        $movie = $user->addChild("student_hobby_movie",  $_POST['student_hobby_movie']);
    else
        $movie = $user->addChild("student_hobby_movie",  '');
    if(isset($_POST['student_hobby_travel']))
        $travel = $user->addChild("student_hobby_travel",  $_POST['student_hobby_travel']);
    else
        $travel = $user->addChild("student_hobby_travel",  '');
    if(isset($_POST['student_hobby_playing']))
        $playing = $user->addChild("student_hobby_playing", $_POST['student_hobby_playing']);
    else
        $playing = $user->addChild("student_hobby_playing", '');

    $nextId = getStudentCount($xmlfile);
    $user->addAttribute(ID_COLUMN_STUDENT, $nextId);

    echo XMLFilePath;
    $xmlfile->asXML(XMLFilePath);

}

function getStudentCount($xmlfile)
{
    //TODO
    $itemcount = count($xmlfile);
    return $itemcount;
}

function getIndex()
{
    $index = $_GET[GET_ID];
    return $index;
}

function deleteByGettingIndex($xmlfile)
{
    $delID = getIndex();

    foreach($xmlfile->studentstore as $item)
    {
        if($item[ID_COLUMN_STUDENT] == $delID) {
            $dom=dom_import_simplexml($item);
            $dom->parentNode->removeChild($dom);
        }
    }

    $xmlfile->asXML(XMLFilePath);
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

function editItemToSession($xmlfile, $data)
{
    if(empty($data))
    {
        return;
    }
    global $student_store;
    global $student_keys;

    $modify_index = $_POST[ID_COLUMN_STUDENT];


    $user = $xmlfile->xpath('//studentstore[@student_id="' . $modify_index . '"]');

    if(isset($_POST['student_fname']))
    $user[0]->student_fname = $_POST['student_fname'];
    if(isset($_POST['student_lname']))
    $user[0]->student_lname = $_POST['student_lname'];
    if(isset($_POST['student_address']))
    $user[0]->student_address = $_POST['student_address'];
    if(isset($_POST['student_email']))
    $user[0]->student_email = $_POST['student_email'];
    if(isset($_POST['student_mphone']))
    $user[0]->student_mphone = $_POST['student_mphone'];
    if(isset($_POST['student_dob']))
    $user[0]->student_dob = $_POST['student_dob'];
    if(isset($_POST['student_gender']))
    $user[0]->student_gender = $_POST['student_gender'];
    if(isset($_POST['student_mstatus']))
    $user[0]->student_mstatus = $_POST['student_mstatus'];
    if(isset($_POST['student_degree']))
    $user[0]->student_degree = $_POST['student_degree'];
    if(isset($_POST['student_hobby_reading']))
    $user[0]->student_hobby_reading = $_POST['student_hobby_reading'];
    if(isset($_POST['student_hobby_movie']))
    $user[0]->student_hobby_movie = $_POST['student_hobby_movie'];
    if(isset($_POST['student_hobby_travel']))
    $user[0]->student_hobby_travel = $_POST['student_hobby_travel'];
    if(isset($_POST['student_hobby_playing']))
    $user[0]->student_hobby_playing = $_POST['student_hobby_playing'];

    echo XMLFilePath;
    $xmlfile->asXML(XMLFilePath);

}

function getModifyDetail($xmlfile, $index)
{
    $studentToUpdate = array();
    foreach ($xmlfile as $student) {
        $i = $student->attributes()->student_id;

        if($i == $index) {
            return $student;
        }
    }
    return $studentToUpdate;
}

