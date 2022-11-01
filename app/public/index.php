<?php
    // Session start
    session_start();
    // Check if the user is logged in, if not then redirect him to login page
    if(isset($_SESSION["loggedInUser"])){
        header("location: welcome.php");
    }
?>

<!-- Login form -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Login form -->
    <form action="login.php" method="post">
        <!-- Username and password are required fields -->
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        <input type="submit" value="Login">
    </form>
    <!-- Showing error messages -->
    <div class="error">
        <?php
        // check if session variable is set
        if (isset($_SESSION['login_err'])){
            echo $_SESSION['login_err'];
            // unset session variable
            unset($_SESSION['login_err']);
        }
        ?>
    <div>
    <!-- Error messages should be red -->
    <style>
        .error{
            color: red;
        }
    </style>
</body>
</html>