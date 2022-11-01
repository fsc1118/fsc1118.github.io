<?php
    // start the session
    session_start();
    // unset the session variable
    unset($_SESSION['loggedInUser']);
    unset($_SESSION['login_err']);
    // redirect to login page
    header("location: index.php");
?>