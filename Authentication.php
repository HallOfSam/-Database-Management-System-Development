<?php

    session_start();

    $Identifier = $_POST['Identifier'];
    $loginID = $_POST['loginID'];
    $role = $_POST['role'];
   
    # establish the connection
    $conn = mysqli_connect("localhost", "cs377", "ma9BcF@Y", "Learning_Management_System");

    # check connection
    if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit(1);
}   
   
    mysqli_select_db($conn,"Learning_Management_System");
    $result = mysqli_query($conn,"SELECT * FROM User WHERE Identifier  = '$Identifier' AND loginID = '$loginID'") or die("Query Failed".mysql_error());
   

    $row = mysqli_fetch_array($result);
    if($row['Identifier']== $Identifier && $row['loginID'] == $loginID){

      $_SESSION['Identifier'] = $_POST['Identifier'];
      $_SESSION['loginID'] = $_POST['loginID'];
      $_SESSION['role'] = $_POST['role'];
 

        if($role == "Student") {header("Location: Student_Course_Page.php");}

        if($role == "TA") {header("Location: TA_Page.php");}

        else if ($role == "Instructor") {header("Location: Instructor_Page.php");}
    }
    
    else{
        echo "You have enterd incomplete information or the user does not exist!";
    }

    mysqli_free_result($result);
    mysqli_close($conn);
?>