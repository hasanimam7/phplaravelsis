<?php
include_once('lib/library.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Application Form</title>
    <meta charset="utf-8">
    <!-- Include meta tag to ensure proper rendering and touch zooming -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Include bootstrap stylesheets -->
    <link rel="stylesheet" href="lib/bootstrap.css">
<body>
<h1>Student Information Form</h1>
<form method="post" action="index.php" class="form-horizontal" role="form">
    <fieldset>

        <legend>Create Student Information</legend>
        <div class="form-group">
        <label class="control-label col-md-2" for="create_student_fname">First Name:</label>
            <div class="col-md-10">
                <input type="text" name="student_fname" id="create_student_fname" value=""/>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="create_student_lname">Last Name:</label>
            <div class="col-md-10">
                <input type="text" name="student_lname" id="create_student_lname" value=""/>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="create_student_address">Address:</label>
            <div class="col-md-10">
                <input type="text" name="student_address" id="create_student_address" value=""/>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="create_student_email">E-mail:</label>
            <div class="col-md-10">
                <input type="text" name="student_email" id="create_student_email" value=""/>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="create_student_mphone">Mobile No:</label>
            <div class="col-md-10">
                <input type="text" name="student_mphone" id="create_student_mphone" value=""/>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="create_student_dob">Date of Birth:</label>
            <div class="col-md-10">
                <input type="date" name="student_dob" placeholder="(Date of Birth)" id="create_student_dob" value=""/>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="create_student_gender">Gender:</label>
            <div class="col-md-10" id="create_student_gender">
                <input type="radio" name= "student_gender" value="Male">Male</input>
                <input type="radio" name= "student_gender" value="Female">Female</input>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="create_student_mstatus">Marital Status:</label>
            <div class="col-md-10">
                <select name="student_mstatus" value="" id="create_student_mstatus">
                    <option selected name="student_mstatus" value="single">Single</option>
                    <option name="student_mstatus" value="married">Married </option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="create_student_degree">Education:</label>
            <div class="col-md-10" id="create_student_degree">
                <input type="radio" name="student_degree" value="ssc">SSC</input>
                <input type="radio" name="student_degree" value="hsc">HSC</input>
                <input type="radio" name="student_degree" value="honours">Honours</input>
                <input type="radio" name="student_degree" value="masters">Masters</input>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="create_student_hobby">Hobbies:</label>
            <div class="col-md-10" id="create_student_hobby">
                <input type="checkbox" name="student_hobby_reading" value="student_hobby_reading">Reading Books</input>
                <input type="checkbox" name="student_hobby_movie" value="student_hobby_movie">Watching Movies</input>
                <input type="checkbox" name="student_hobby_travel" value="student_hobby_travel">Traveling</input>
                <input type="checkbox" name="student_hobby_playing" value="student_hobby_playing">Playing</input>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="create_student_addbtn"></label>
            <div class="col-md-10">
                <input class="btn-default" type="submit" id="create_student_addbtn" value="Add Student"/>
            </div>
        </div>


    </fieldset>
</form>
</body>
</html>





