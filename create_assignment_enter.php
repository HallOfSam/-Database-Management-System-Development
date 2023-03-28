<?php

session_start();

?>


<!DOCTYPE html>
<html>
    <head>
        <title> Create Assignment Page</title>
    </head>

     <body>
        <h2>You can create a new assignment here</h2>


        <form action = "create_assignment_receive.php" method = "POST">

        Course Number <br>
        <input type="text" name="cNum">
        </br>
        
        Year in which the course is offered<br>
        <input type="text" name="year">
        </br>

        Semester in which the course is offered<br>
        <input type="text" name="semester">
        </br>

        Assignment Name<br>
        <input type="text" name="AssignmentID">
        </br>

        Due date of the assignment (format: '2017-09-15 23:59:00')<br>
        <input type="text" name="dueDate">
        </br>

        Description of the assignment<br>
        <input type="text" name="text">
        </br>

        How many points is the assignment worth?<br>
        <input type="text" name="points">
        </br>


        <br>
        <input type = "submit">
        <br>

        </form>


        

    </body>


</html>