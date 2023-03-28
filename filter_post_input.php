<?php

session_start();

?>


<!DOCTYPE html>
<html>
    <head>
        <title> Filter Page</title>
    </head>

     <body>
        <h2>Please enter the tag name that you want to filter on</h2>


        <form action = "filter_post_output.php" method = "POST">

        Tag Name  <br>
        <input type="text" name= "tag_Name">
        </br>
        
        
        <br>
        <input type = "submit">
        <br>

        </form>


        

    </body>


</html>