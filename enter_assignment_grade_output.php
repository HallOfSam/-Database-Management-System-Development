<html>
<head>
<title>Show Entered Assignment Grade</title>
</head>
<body>
<hr>
<b>
<?php


   $cNum = $_POST['cNum'];
   $year = $_POST['year'];
   $semester = $_POST['semester'];
   $Student_Identifier = $_POST['Student_Identifier'];
   $Assignment1Grade = $_POST['Assignment1Grade'];
   $Assignment2Grade = $_POST['Assignment2Grade'];
   $Assignment3Grade = $_POST['Assignment3Grade'];
   $Assignment4Grade = $_POST['Assignment4Grade'];
   $Assignment5Grade = $_POST['Assignment5Grade'];
   $Assignment6Grade = $_POST['Assignment6Grade'];
   $Assignment7Grade = $_POST['Assignment7Grade'];
   $Assignment8Grade = $_POST['Assignment8Grade'];
   $Assignment9Grade = $_POST['Assignment9Grade'];
   $Assignment10Grade = $_POST['Assignment10Grade'];

    # open the connection
    $conn = mysqli_connect("localhost",
                           "cs377", "ma9BcF@Y", "Learning_Management_System");
    # check connection
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit(1);
    }


    # Insert into the Assignment table
    $query1 = "UPDATE Grades
    SET Assignment1Grade = '$Assignment1Grade', Assignment2Grade = '$Assignment2Grade', Assignment3Grade = '$Assignment3Grade',Assignment4Grade = '$Assignment4Grade',
    Assignment5Grade = '$Assignment5Grade', Assignment6Grade = '$Assignment6Grade', Assignment7Grade = '$Assignment7Grade', Assignment8Grade = '$Assignment8Grade', 
    Assignment9Grade = '$Assignment9Grade', Assignment10Grade = '$Assignment10Grade'
    WHERE Student_Identifier = '$Student_Identifier' AND cNum = '$cNum' AND year = '$year' AND semester = '$semester';";

    # Execute query
    if (!($result1 = mysqli_query($conn, $query1))) {
        printf("Error: %s\n", mysqli_error($conn));
        exit(1);
    }


# print the assignments
$query2 = "SELECT *
FROM Grades
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