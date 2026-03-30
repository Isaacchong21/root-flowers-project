<?php
session_start();
include('navbar.php');

$errors = $_SESSION["errors"] ?? [];
$input = $_SESSION["input"] ?? [];

unset($_SESSION['errors']);
unset($_SESSION['input']);

if (isset($_GET['reset']) && $_GET['reset'] === 'true'){
    unset($_SESSION['input']);
    unset($_SESSION['errors']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Workshop Registration</title>
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

<body class="workshop-bg">
    <div class="page-wrapper">
        <main class="content-area">
            <div class="form-container">
            <form action="process_workshop.php" method="post">
                <h2 class= "text-center mb-4">Workshop Registration</h2>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="firstname" id="firstname"
                        value ="<?= $input['firstname'] ?? '' ?>">
                        <span class = "text-danger">
                            <?= $errors['firstname'] ?? '' ?>
                        </span>
                    </div>

                    <div class="col-md-6">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lastname" id="lastname"
                        value ="<?= $input['lastname'] ?? '' ?>">
                        <span class = "text-danger">
                            <?= $errors['lastname'] ?? '' ?>
                        </span>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="contactNum" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" name="contactNum" id="contactNum"
                        value ="<?= $input['contactNum'] ?? '' ?>">
                        <span class = "text-danger">
                            <?= $errors["contactNum"] ?? '' ?>
                        </span>
                    </div>

                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email"
                        value ="<?= $input["email"] ?? '' ?>">
                        <span class = "text-danger">
                            <?= $errors["email"] ?? '' ?>
                        </span>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="workshopDateTime" class="form-label">Date & Time</label>
                        <input type="datetime-local" class="form-control" name="workshopDateTime" id="workshopDateTime"
                        value ="<?= $input["workshopDateTime"] ?? '' ?>">
                        <span class = "text-danger">
                            <?= $errors["workshopDateTime"] ?? '' ?>
                        </span>
                    </div>

                    <div class="col-md-6">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title"
                        value ="<?= $input["title"] ?? '' ?>">
                        <span class = "text-danger">
                            <?= $errors['title'] ?? '' ?>
                        </span>
                    </div>
                </div>

                <div class="button-group mt-3">
                    <button type="submit" class="btn btn-primary">Submit Button</button>
                    <button type="reset" class="btn btn-secondary" onclick="window.location.href='workshop_reg.php'">Reset Button</button>
                </div>
            </form>
            </div>
        </main>
    </div>
</body>
<?php include("footer.php"); ?>
</html>

            