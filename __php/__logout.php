<?php

session_start();

if (isset($_SESSION['username']) && $_SESSION['email']) {

    session_unset();
    session_destroy();

    header("location:/webguruz/");

}


?>