<?php

define('WWW_PATH','http://localhost:8080/sis/');
define('GET_ID','index');

//Here I am preserving table name / storage name used for storing  data - student.
$student_store = 'studentstore';

//Here I am preserving all columns/names used for posting data - student.
$student_keys = array(
    'student_fname'=>'First Name',
    'student_lname' => 'Last Name',
    'student_address'=>'Address',
    'student_email'=>'E-mail',
    'student_mphone'=>'Mobile No',
    'student_dob'=>'Date of Birth',
    'student_gender'=>'Gender',
    'student_mstatus'=>'Marital Status',
    'student_degree'=>'Education',
    'student_hobby_reading' => 'Reading Books',
    'student_hobby_movie' => 'Watching Movies',
    'student_hobby_travel' => 'Traveling',
    'student_hobby_playing' => 'Playing'
);

define('SORT_COLUMN_STUDENT','student_fname');
define('ID_COLUMN_STUDENT','student_id');


