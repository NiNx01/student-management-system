<?php


require("__connection.php");

if (isset($_GET['id'])) {

    $student_id = $_GET['id'];


    $delete = "DELETE FROM student_details WHERE student_id = '{$student_id}'";
    $result = mysqli_query($conn, $delete);

    if ($result) {
        header("location:/webguruz/index.php?deleted");
    } else {
        echo "Error";
    }

}

?>