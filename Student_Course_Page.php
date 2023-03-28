<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Student Course Page</title>
    </head>

     <body>
        <h2>This is a student course webpage!</h2>

        <p> Click this link <a href="assignment_grades_input.php">assignment_grades </a> to see your assignment grades (including final letter grade) for this course. </p>

        <p> Click this link <a href="assignment_details_input.php"> assignment_details </a> to see the details of all assignments for this course. </p>

        <p> All courses you are taking: </p>

        <P>
            <?php

            # obtain UserID
            $UserID = $_SESSION['Identifier'];
            $loginID = $_SESSION['loginID'];


            # establish the connection
            $conn = mysqli_connect("localhost",
                                   "cs377", "ma9BcF@Y", "Learning_Management_System");

            if (mysqli_connect_errno()) {
               printf("Connect failed: %s\n", mysqli_connect_error());
               exit(1);
            }
            
            # execute the query
            $query = "SELECT cNum, year, semester, cName, fname AS instructorFisrtName, lname AS instructorLastName 
            FROM Takes NATURAL JOIN (Course NATURAL JOIN Course_Info) JOIN User ON (Instructor_Identifier = Identifier) 
            WHERE Student_Identifier = '$UserID';";

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