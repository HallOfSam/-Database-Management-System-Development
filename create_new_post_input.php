<?php

session_start();

?>


<!DOCTYPE html>
<html>
    <head>
        <title> Create New Post Page</title>
    </head>

     <body>
        <h2>You can create a new post for this course</h2>


        <form action = "create_new_post_output.php" method = "POST">

        Your User ID <br>
        <input type="text" name="postAuthorID">
        </br>

        Post Title <br>
        <input type="text" name="postTitle">
        </br>
        
        Description of the post<br>
        <input type="text" name="text">
        </br>

        Choose a tag for your post <br>
        <select name = "tagID">
        <option value = "0">logistics</option>
        <option value = "1">assignment1</option>
        <option value = "2">assignment2</option>
        <option value = "3">assignment3</option>
        <option value = "4">assignment4</option>
        <option value = "5">lectures</option>
        <option value = "6">other</option>
        <option value = "7">preps</option>
        <option value = "8">final project</option>
        <option value = "9">exams</option>
        <option value = "10">assignments</option>
        <option value = "11">hw1</option>
        <option value = "12">hw2</option>
        <option value = "13">hw3</option>
        <option value = "14">hw4</option>
        <option value = "15">hw5</option>
        <option value = "16">hw6</option>
        <option value = "17">hw7</option>
        <option value = "18">hw8</option>
        <option value = "19">homeworks</option>
        <option value = "21">proj1</option>
        <option value = "22">proj2</option>
        <option value = "23">proj3</option>
        <option value = "24">proj4</option>
        <option value = "25">proj5</option>

        </br>



        <br>
        <input type = "submit">
        <br>

        </form>


        

    </body>


</html>