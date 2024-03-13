<?php
require("__connection.php");

if (isset($_POST['loginBtn'])) {

    $login_email = $_POST['loginEmail'];
    $login_password = $_POST['loginPassword'];

    $selectLogin = "SELECT * FROM user_accounts WHERE email = '{$login_email}'";
    $result = mysqli_query($conn, $selectLogin);

    $numberOfAccounts = mysqli_num_rows($result);

    if ($numberOfAccounts == 1) {

        $outputLogin = mysqli_fetch_assoc($result);

        if (password_verify($login_password, $outputLogin['password'])) {

            session_start();

            $_SESSION['username'] = $outputLogin['username'];
            $_SESSION['email'] = $outputLogin['email'];

            header("location:/webguruz/");

        } else {

            header("location:/webguruz/loginPage.php?wrongPassword");

        }

    } else {
        header("location:/webguruz/loginPage.php?noAccount");
    }

}

?>