<?php

session_start();

?>


<!DOCTYPE html>
<html>
    <head>
        <title> Enter Assignment Grade Page</title>
    </head>

     <body>
        <h2>You can enter a assignment grade for a student here</h2>


        <form action = "enter_assignment_grade_output.php" method = "POST">

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


        Enter Assignment 1 grade<br>
        <input type="text" name="Assignment1Grade">
        </br>

        Enter Assignment 2 grade<br>
        <input type="text" name="Assignment2Grade">
        </br>

        Enter Assignment 3 grade<br>
        <input type="text" name="Assignment3Grade">
        </br>

        Enter Assignment 4 grade<br>
        <input type="text" name="Assignment4Grade">
        </br>

        Enter Assignment 5 grade<br>
        <input type="text" name="Assignment5Grade">
        </br>

        Enter Assignment 6 grade<br>
        <input type="text" name="Assignment6Grade">
        </br>

        Enter Assignment 7 grade<br>
        <input type="text" name="Assignment7Grade">
        </br>

        Enter Assignment 8 grade<br>
        <input type="text" name="Assignment8Grade">
        </br>

        Enter Assignment 9 grade<br>
        <input type="text" name="Assignment9Grade">
        </br>

        Enter Assignment 10 grade<br>
        <input type="text" name="Assignment10Grade">
        </br>


        <br>
        <input type = "submit">
        <br>

        </form>


        

    </body>


</html>