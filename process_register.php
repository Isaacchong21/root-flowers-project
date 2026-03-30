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
$userInput = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["firstname"])) {
        $errors["firstname"] = "*Name is required";
    } else {
        $userInput["firstname"] = test_input($_POST["firstname"]);
        if (!preg_match("/^[a-zA-Z\s]+$/", $userInput["firstname"])) {
            $errors["firstname"] = "*Only letters and white space allowed";
        }
    }

    if (empty($_POST["lastname"])) {
        $errors["lastname"] = "*Last Name is required";
    } else {
        $userInput["lastname"] = test_input($_POST["lastname"]);
        if (!preg_match("/^[a-zA-Z\s]+$/", $userInput["lastname"])) {
            $errors["lastname"] = "*Only letters and white space allowed";
        }
    }
    
    if (empty($_POST["email"])) {
        $errors["email"] = "*Email is required";
    } else {
        $userInput["email"] = test_input($_POST["email"]);
        if (!filter_var($userInput["email"], FILTER_VALIDATE_EMAIL)) {
            $errors["email"] = "*Invalid email format";
        }
    }

    if (empty($_POST["hometown"])) {
        $errors["hometown"] = "*Hometown is required";
    } else {
        $userInput["hometown"] = test_input($_POST["hometown"]);
    }

    if (empty($_POST["password"])) {
        $errors["password"] = "*Password is required";
    } else {
        $password = ($_POST["password"]);
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        if (strlen($password) < 8 || !preg_match("/[0-9]/", $password) || !preg_match("/[\W]/", $password)) {
            $errors["password"] = "*Password must be at least 8 characters long and include a number and a symbol";
        }
    }

    if (empty($_POST["confirmpassword"])) {
        $errors["confirmpassword"] = "Please confirm your password";
    } else {
        if ($_POST["password"] !== $_POST["confirmpassword"]) {
            $errors["confirmpassword"] = "Passwords and confirm password do not match";
        }
    }

    if(!empty($errors)){
        $_SESSION["errors"] = $errors;
        $_SESSION["userInput"] = $userInput;
        header("Location: registration.php");
        exit();
    } 

    $directory = "D:/xampp/htdocs/COS30020/data/User";
    if(!is_dir($directory)){
        mkdir($directory, 0777, true);
    }

    $filePath = $directory . "/user.txt";

    $emailExists = false;
    if(file_exists($filePath)){
        $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line){
            $fields = explode("|", $line);
            foreach($fields as $field){
                if(str_starts_with($field, "Email:")){
                    $existingEmail = trim(substr($field,6));
                    if (strtolower($existingEmail) === strtolower($userInput['email'])){
                        $emailExists = true;
                        break 2;
                }
            }
        }
    }
}

    if($emailExists){
        $errors["email"] = "There is an existing account.";
        $_SESSION["errors"] = $errors;
        $_SESSION["userInput"] = $userInput;
        header("Location: registration.php");
        exit();
    }

    $file = fopen($filePath, "a");

    if(filesize($filePath) > 0) {
        fwrite($file, "\n");
    }

    $record = "First Name: {$userInput['firstname']}|Last Name: {$userInput['lastname']}|Date Of Birth: {$_POST['dob']}|Gender: {$_POST['gender']}|Email: {$userInput['email']}|Hometown: {$userInput['hometown']}|Password: $hashedPassword\n";
    fwrite($file, $record);
    fclose($file);

    $_SESSION['registration_success'] = true;
    header("Location: register_success.php");
    exit();
}
?>