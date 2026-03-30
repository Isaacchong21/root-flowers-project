<?php
session_start();
include("functions.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"] ?? '';
    $password = $_POST["password"] ?? '';

    if (empty($email) || empty($password)) {
        $_SESSION['login_error'] = "Login failed. Invalid username or password. Please try again";
        header("Location: login.php");
        exit();
    }

    if (!user_exists($email)) {
        $_SESSION['login_error'] = "Login failed. Invalid username or password. Please try again";
        header("Location: login.php");
        exit();
    }

    if (!login($email, $password)) {
        $_SESSION['login_error'] = "Login failed. Invalid username or password. Please try again";
        header("Location: login.php");
        exit();
    }

    $_SESSION['user_email'] = $email;
   
    $_SESSION['final_redirect'] = $_SESSION['redirect_after_login'] ?? 'index.php';
    unset($_SESSION['redirect_after_login']);
    
    header("Location: login_success.php");
    exit();
}

?>