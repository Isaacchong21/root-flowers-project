<?php
function user_exists($email) {
    $filePath = "D:/xampp/htdocs/COS30020/data/User/user.txt";
    if(!file_exists($filePath)) return false;

    $lines = file($filePath , FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line){
        $fields = explode("|", $line);
        foreach($fields as $field){
            if(str_starts_with($field, "Email:")) {
                $existingEmail = trim(substr($field, 6));
                if(strtolower($existingEmail) === strtolower($email)){
                    return true;
                }
            }
        }
    } return false;
}

function login($email, $password){
    $filePath = "D:/xampp/htdocs/COS30020/data/User/user.txt";
    if(!file_exists($filePath)) return false;

    $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $fields = explode("|", $line);
        $userData = [];

        foreach ($fields as $field) {
            $parts = explode(":", $field, 2);
            if (count($parts) == 2) {
                $key = trim($parts[0]);
                $value = trim($parts[1]);
                $userData[$key] = $value;
            }
        }

        if(isset($userData["Email"]) && strtolower($userData["Email"]) === strtolower($email)) {
            if(isset($userData["Password"])) {
                return password_verify($password, $userData["Password"]);
            }
        }
    }return false;
}
?>