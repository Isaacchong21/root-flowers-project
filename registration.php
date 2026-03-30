<?php
session_start();
include('navbar.php');


$errors = $_SESSION["errors"] ?? [];
$userInput = $_SESSION["userInput"] ?? [];
session_unset();

if (isset($_GET['reset']) && $_GET['reset'] === 'true'){
    unset($_SESSION['userInput']);
    unset($_SESSION['errors']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style/style.css" />
</head>

<body class="registration-page">
    <div class="page-wrapper">
        <main class="content-area">
            <div class="form-container">
                <?php
                $gender = $userInput["gender"] ?? "Female";
                ?>
                
                <form action="process_register.php" method="post">
                    <h2 class = "text-center mb-4">Registration Form</h2>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="firstname" class="form-label">First Name</label>
                            <input type="text" class="form-control" name="firstname" id="firstname" 
                            value ="<?= $userInput['firstname'] ?? '' ?>">
                            
                            <span class ="text-danger">
                                <?= $errors['firstname'] ?? '' ?>
                            </span>
                        </div>
                        
                        <div class="col-md-6">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="lastname" id="lastname" 
                            value ="<?= $userInput['lastname'] ?? '' ?>">
                            
                            <span class = "text-danger">
                                <?= $errors['lastname'] ?? '' ?>
                            </span>
                        </div>
                    </div>
                
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="dob" class="form-label">Date Of Birth</label>
                    <input type="date" class="form-control" name="dob" id="dob">
                </div>
                
                
                <div class="col-md-6">
                    <label class="form-label d-block">Gender: </label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="Male"
                        <?php if ($gender == "Male") echo "checked"; ?>>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="Female"
                        <?php if ($gender == "Female") echo "checked"; ?>>
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </div>
            </div>

            <div class = "row mb-3">
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="email" 
                    value ="<?= $userInput['email'] ?? '' ?>">
                    <span class = "text-danger">
                        <?= $errors['email'] ?? '' ?>
                    </span>
                </div>
                
                <div class="col-md-6">
                    <label for="hometown" class="form-label">Hometown</label>
                    <input type="text" class="form-control" name="hometown" id="hometown"
                    value ="<?= $userInput['hometown'] ?? '' ?>">
                    <span class = "text-danger">
                        <?= $errors['hometown'] ?? '' ?>
                    </span>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control password-input" name="password" id="password">
                    <span class = "text-danger">
                        <?= $errors['password'] ?? '' ?>
                    </span>
                </div> 
                
                <div class="col-md-6">
                    <label for="confirmpassword" class="form-label">Confirm Password</label>
                    <input type="text" class="form-control password-input" name="confirmpassword" id="confirmpassword">
                    <span class = "text-danger">
                        <?= $errors['confirmpassword'] ?? '' ?>
                    </span>
                </div>
            </div>

            <div class="button-group mt-3">
                <button type="submit" class="btn btn-primary">Submit Form</button>
                <button type="reset" class="btn btn-secondary" onclick="window.location.href='registration.php'">Reset Form</button>
                <button type="button" class="btn btn-danger" onclick="window.location.href='login.php'">Back to Login</button>
            </div>
        </form>
    </div>
</div>
</main>
    <?php include("footer.php");
    ?>
</body>
</html>