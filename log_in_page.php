<?php

session_start();

?>


<!DOCTYPE html>
<html>
    <head>
        <title> Login Page</title>
    </head>

     <body>
        <h2>This is login page!</h2>


        <p>Enter your UserID (unique Identifier) and loginID to access your courses. </p>


        <form action = "Authentication.php" method = "POST">

        UserID <br>
        <input type="text" name="Identifier">
        </br>
        
        loginID<br>
        <input type="text" name="loginID">
        </br>

        I want to log in as a/an <br>
        <select name = "role">
        <option value = "Student">Student</option>
        <option value = "Instructor">Instructor</option>
        <option value = "TA">TA</option>
        </br>

        </br>
        <input type = "submit">


        </form>


        

    </body>


</html>