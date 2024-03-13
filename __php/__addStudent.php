<?php

require("__connection.php");

if (isset($_POST['addStudentBtn'])) {

    $student_name = $_POST['studentName'];
    $student_class = $_POST['studentClass'];
    $student_rollno = $_POST['studentRollno'];
    $student_dob = $_POST['studentDob'];

    $insert = "INSERT INTO student_details ( student_name , student_class, student_rollno , student_dob ) VALUES ( '{$student_name}' , '{$student_class}' , '{$student_rollno}' , '{$student_dob}' )" ;
    $result = mysqli_query($conn , $insert) ;

    if($result) {
       
        header("location:/webguruz/index.php?success") ;

    }else {
        echo "Error" ;
    }

}

?>