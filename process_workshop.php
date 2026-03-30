<?php
session_start();
include('navbar.php');

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$errors = [];
$input = [];
 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["firstname"])){
        $errors["firstname"] ="*Name is required";
    } else {
        $input["firstname"] = test_input($_POST["firstname"]);
        if (!preg_match("/^[a-zA-Z\s]+$/", $input["firstname"])){
            $errors["firstname"] = "*Only letters and white spaces allowed";
        }
    }

    if (empty($_POST["lastname"])){
        $errors["lastname"] = "*Last Name is required";
    } else {
        $input["lastname"] = test_input($_POST["lastname"]);
        if (!preg_match("/^[a-zA-Z\s]+$/", $input["lastname"])){
            $errors["lastname"] = "*Only letters and white spaces allowed";
        }
    }

    if(empty($_POST["contactNum"])){
        $errors["contactNum"] = "*Contact Number is required";
    } else {
        $input["contactNum"] = test_input($_POST["contactNum"]);
    }
    
    if (empty($_POST["email"])){
        $errors["email"] = "*Email is required";
    } else {
        $input["email"] = test_input($_POST["email"]);
        if (!filter_var($input["email"], FILTER_VALIDATE_EMAIL)){
            $errors["email"] = "*Invalid email format";
        }
    }

    if (empty($_POST["title"])){
        $errors["title"] = "*Title is required";
    } else {
        $input["title"] = test_input($_POST["title"]);
    }

    if(!empty($errors)){
        $_SESSION["errors"] = $errors;
        $_SESSION["input"] = $input;
        header("Location: workshop_reg.php");
        exit();
    }
}
?>