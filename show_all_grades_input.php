<?php

session_start();

?>


<!DOCTYPE html>
<html>
    <head>
        <title> Show All Grades</title>
    </head>

     <body>
        <h2>You can inspect all student grades for a course in here/h2>


        <form action = "show_all_grades_output.php" method = "POST">

        Course Number <br>
        <input type="text" name="cNum">
        </br>
        
        Year in which the course is offered<br>
        <input type="text" name="year">
        </br>

        Semester in which the course is offered<br>
        <input type="text" name="semester">
        </br>



        <br>
        <input type = "submit">
        <br>

        </form>


        

    </body>


</html>