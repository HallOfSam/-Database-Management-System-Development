<?php

session_start();

?>


<!DOCTYPE html>
<html>
    <head>
        <title> Enter Letter Grade Page</title>
    </head>

     <body>
        <h2>You can enter a letter grade for a student here</h2>


        <form action = "enter_letter_grade_output.php" method = "POST">

        Course Number <br>
        <input type="text" name="cNum">
        </br>
        
        Year in which the course is offered<br>
        <input type="text" name="year">
        </br>

        Semester in which the course is offered<br>
        <input type="text" name="semester">
        </br>

        Student ID<br>
        <input type="text" name="Student_Identifier">
        </br>


        Enter letter grade<br>
        <input type="text" name="CourseGrade">
        </br>


        <br>
        <input type = "submit">
        <br>

        </form>


        

    </body>


</html>