<?php

session_start();

?>


<!DOCTYPE html>
<html>
    <head>
        <title> Assignment Details</title>
    </head>

     <body>
        <h2>Enter the information about the course assignments you want to look at</h2>


        <form action = "assignment_details_output.php" method = "POST">

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