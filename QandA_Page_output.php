<?php

session_start();

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Q&A Page</title>
    </head>

     <body>
        <h2>This page shows the posts related to a course!</h2>

        <p> Click this link <a href="filter_post_input.php"> filter </a> to filter the questions based on the tag of the posts. </p>

        <p> Click this link <a href="create_new_post_input.php"> create_new_post </a> to create a new post for this course. </p>

        <p> Click this link <a href="respond_to_post_input.php"> respond_to_post </a> to respond to a post. </p>

        <p> This are the posts related to this course. </p>



        <P>
            <?php

            $cNum = $_POST['cNum'];
            $year = $_POST['year'];
            $semester = $_POST['semester'];

            $_SESSION['cNum'] = $_POST['cNum'];
            $_SESSION['year'] = $_POST['year'];
            $_SESSION['semester'] = $_POST['semester'];


            # establish the connection
            $conn = mysqli_connect("localhost",
                                   "cs377", "ma9BcF@Y", "Learning_Management_System");

            if (mysqli_connect_errno()) {
               printf("Connect failed: %s\n", mysqli_connect_error());
               exit(1);
            }
            
            # execute the query
            $query = "SELECT *
            FROM Post p NATURAL JOIN Post_tag JOIN Thread  USING (postTitle, postAuthorID)
            WHERE cNum = '$cNum' AND year = '$year' AND semester = '$semester'
            ORDER BY post_date DESC;";

            if (!($result = mysqli_query($conn, $query))) {
               printf("Error: %s\n", mysqli_error($conn));
               exit(1);
               }

            # print out the number of returned rows
            printf("<p>\nSelect returned %d rows.\n<P>\n", mysqli_num_rows($result));

            # create a new paragraph
            print("<p>\n");
            print("<table>\n");

            # write the contents of the table
            $header = false;
            while ($row = mysqli_fetch_assoc($result)){
               # print the attribute names once!
               if (!$header) {
                  $header = true;
                  print("<thead><tr>\n");
                  foreach ($row as $key => $value) {
                     print "<th>" . $key . "</th>";             // Print attr. name
                  }
                  print("</tr></thead>\n");
               }
               print("<tr>\n");     # Start row of HTML table
               foreach ($row as $key => $value) {
                  print ("<td>" . $value . "</td>"); # One item in row
               }
               print ("</tr>\n");   # End row of HTML table
            }
      
            print("</table>\n");
            print("<p>\n");

            //Clean up and close connection with MySQL server
            mysqli_free_result($result);
            mysqli_close($conn);
            ?>
            <P>


    </body>


</html>