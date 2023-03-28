<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Instructor Page</title>
    </head>

     <body>
        <h2>This is a instructor webpage!</h2>

        <p> Click this link <a href="create_assignment_enter.php">create_assignment </a> to create an assignment for this course. </p>

        <p> Click this link <a href="enter_assignment_grade_input.php"> enter_grade </a> to enter asssignment grades for a student. </p>

        <p> Click this link <a href="show_all_grades_input.php"> show_all_grades </a> to show all the grades for this course. </p>

        <p> Click this link <a href="enter_letter_grade_input.php"> enter_letter_grade </a> to enter the letter grade for a student. </p>

        <p> All courses you teach: </p>

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
            $query = "SELECT cNum, year, semester, fname AS Insturctor_fName,  lname AS Insturctor_lName
            FROM Course JOIN User ON (instructor_Identifier = Identifier)
            WHERE instructor_Identifier = '$UserID';";

            if (!($result = mysqli_query($conn, $query))) {
               printf("Error: %s\n", mysqli_error($conn));
               exit(1);
               }


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