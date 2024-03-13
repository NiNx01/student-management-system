<?php

require("__connection.php");

if (isset($_POST['signupBtn'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $insert = "INSERT INTO user_accounts (username , email , password) VALUES ( '{$username}' , '{$email}' , '{$hashed_password}' )";

    $result = mysqli_query($conn, $insert);

    if ($result) {
        header("location:/webguruz/loginPage.php?created");
    } else {
        echo "Error";
    }


}


?>