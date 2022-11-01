<?php
    // Start the session
    session_start();
    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedInUser"])){
        header("location: index.php");
    }
    // Get username from session
    $username = $_SESSION['loggedInUser'];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome <?php echo $username; ?></h1>
    <a href="logout.php">Logout</a>
    <!-- Display all chats of the user by calling apis-->
    <div class="chats">
</body>
<body>
    
</body>
</html>