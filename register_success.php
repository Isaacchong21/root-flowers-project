<?php
session_start();
if(!isset($_SESSION['registration_success'])) {
    header("Location: registration.php");
    exit();
}
unset($_SESSION['registration_success']);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Successful</title>
        
        <meta http-equiv="refresh" content="2;url=login.php">

        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="loader-screen">
            <div class="loader"></div>
            <p class="loader-text">Registration successful! Redirecting to login…</p>
        </div>
    </body>
</html>
