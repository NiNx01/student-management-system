<?php

require("__connection.php");

if (isset($_POST['saveChangesBtn'])) {

    $student_id = $_POST['studentID'];
    $student_name_updated = $_POST['studentNameUpdated'];
    $student_class_updated = $_POST['studentClassUpdated'];
    $student_rollno_updated = $_POST['studentRollnoUpdated'];
    $student_dob_updated = $_POST['studentDobUpdated'];

    $update = "UPDATE student_details SET student_name = '{$student_name_updated}' , student_class = '{$student_class_updated}' , student_rollno = '{$student_rollno_updated}' , student_dob = '{$student_dob_updated}' WHERE student_id = '{$student_id}'";

    $result = mysqli_query($conn, $update);

    if ($result) {
        header("location:/webguruz/index.php?updated");
    } else {
        echo "Error";
    }

}

?>