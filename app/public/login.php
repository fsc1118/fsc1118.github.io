<?php
// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($password == "1" && $username == "1"){
        // Set session variables logedInUser
        $_SESSION['loggedInUser'] = $username;
        unset($_SESSION['login_err']);
        header("location: welcome.php");
    } else {
        $login_err = "Invalid username or password.";
        $_SESSION['login_err'] = $login_err;
        header("location: index.php");
    }
} else {
    // Redirect to login page
    header("location: index.php");
}