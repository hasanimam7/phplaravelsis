<?php
include_once('lib/library.php');
?>

<!DOCTYPE html>
<html>
<head><title>Student Application Form</title>
<body>
<h1>Student Information Form</h1>
<form method="post" action="index.php">
    <fieldset>

        <legend>Create Student Information</legend>

        <label>First Name:</label>
        <input type="text" name="student_fname" value=""/>
        <br/>

        <label>Last Name:</label>
        <input type="text" name= "student_lname" value=""/>
        <br/>

        <label>Address:</label>
        <input type="text" name= "student_address" value=""/>
        <br/>

        <label>E-mail:</label>
        <input type="text" name= "student_email" value=""/>
        <br/>

        <label>Mobile No:</label>
        <input type="text" name= "student_mphone" value=""/>
        <br/>

        <label>Date of Birth:</label>
        <input type="date" name= "student_dob" value="" placeholder="(Date of Birth)"/>
        <br/>

        <label>Gender: </label>
        <input type="radio" name= "student_gender" value="Male">Male</input><br />
        <input type="radio" name= "student_gender" value="Female">Female</input>
        <br />

        <label>Marital Status:</label>
        <select name="student_mstatus" value="">
            <option selected name="student_mstatus" value="single">Single</option>
            <option name="student_mstatus" value="married">Married </option>
        </select>
        <br />

        <label>Education:</label>
        <br />
        <input type="radio" name="student_degree" value="ssc">SSC</input><br />
        <input type="radio" name="student_degree" value="hsc">HSC</input><br />
        <input type="radio" name="student_degree" value="honours">Honours</input><br />
        <input type="radio" name="student_degree" value="masters">Masters</input><br />
        <br/>

        <label>Hobbies:</label>
        <br />
        <input type="checkbox" name="student_hobby_reading" value="student_hobby_reading">Reading Books</input><br />
        <input type="checkbox" name="student_hobby_movie" value="student_hobby_movie">Watching Movies</input><br />
        <input type="checkbox" name="student_hobby_travel" value="student_hobby_travel">Traveling</input><br />
        <input type="checkbox" name="student_hobby_playing" value="student_hobby_playing">Playing</input><br />


        <input type="submit" value="Submit"/>

    </fieldset>
</form>
</body>
</html>





