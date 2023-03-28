<html>
<head>
<title>Show Entered Letter Grade</title>
</head>
<body>
<hr>
<b>
<?php


   $cNum = $_POST['cNum'];
   $year = $_POST['year'];
   $semester = $_POST['semester'];
   $Student_Identifier = $_POST['Student_Identifier'];
   $CourseGrade = $_POST['CourseGrade'];
  


    # open the connection
    $conn = mysqli_connect("localhost",
                           "cs377", "ma9BcF@Y", "Learning_Management_System");
    # check connection
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit(1);
    }


    # Insert into the Assignment table
    $query1 = "UPDATE Takes
    SET CourseGrade = '$CourseGrade'
    WHERE Student_Identifier = '$Student_Identifier' AND cNum = '$cNum' AND year = '$year' AND semester = '$semester';";

    # Execute query
    if (!($result1 = mysqli_query($conn, $query1))) {
        printf("Error: %s\n", mysqli_error($conn));
        exit(1);
    }


# print the assignments
$query2 = "SELECT *
FROM Takes
WHERE Student_Identifier = '$Student_Identifier' AND cNum = '$cNum' AND year = '$year' AND semester = '$semester';";

if (!($result2 = mysqli_query($conn, $query2))) {
   printf("Error: %s\n", mysqli_error($conn));
   exit(1);
   }

# print out the number of returned rows
printf("<p>\nSelect returned %d rows.\n<P>\n", mysqli_num_rows($result2));

# create a new paragraph
print("<p>\n");
print("<table>\n");

# write the contents of the table
$header = false;
while ($row = mysqli_fetch_assoc($result2)){
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



    # close connection
    mysqli_free_result($result1);
    mysqli_free_result($result2);
    mysqli_close($conn);



   
?>
</b>
<hr>
</body>
</html>