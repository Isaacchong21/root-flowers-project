<?php
session_start();
include("navbar.php");

if(!isset($_SESSION['user_email'])) {
    $_SESSION['redirect_after_login'] = basename(__FILE__);
    header("Location: login.php?auth=required");
    exit();
}

$filePath = "data/User/user.txt";

$firstName = $lastName = $dob = $gender = $email = $hometown = $password = "";
$successMessage = "";
$currentEmail = $_SESSION['user_email'];

$lines = file_exists($filePath) ? file($filePath, FILE_IGNORE_NEW_LINES) : [];
$targetIndex = -1;

foreach ($lines as $index => $line) {
    if(str_contains($line, "Email: $currentEmail")) {
        $targetIndex = $index;
        break;
    }
}

if ($targetIndex !== -1) {
    $record = $lines[$targetIndex];
    $fields = explode("|", $record);

    foreach ($fields as $field) {
        if(str_starts_with($field, "First Name:")) {
            $firstName = trim(str_replace("First Name:", "", $field));
        } else if (str_starts_with($field, "Last Name:")) {
            $lastName = trim(str_replace("Last Name:", "", $field));
        } else if (str_starts_with($field, "DOB:")) {
            $dob = trim(str_replace("DOB:", "", $field));
        } else if (str_starts_with($field, "Gender:")) {
            $gender = trim(str_replace("Gender:", "", $field));
        } else if (str_starts_with($field, "Email:")) {
            $email = trim(substr($field, 6));
        } else if (str_starts_with($field, "Hometown:")) {
            $hometown = trim(str_replace("Hometown:", "", $field));
        } else if (str_starts_with($field, "Password:")) {
            $password = trim(substr($field, 9));
        }
    }
}

if($_SERVER["REQUEST_METHOD"] === "POST" && $targetIndex !== -1) {
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $hometown = $_POST["hometown"];

    $updatedRecord = "First Name: $firstName|Last Name: $lastName|DOB: $dob|Gender: $gender|Email: $email|Hometown: $hometown|Password: $password";
    $lines[$targetIndex] = $updatedRecord;

    file_put_contents($filePath, implode("\n", $lines));
    $successMessage = "Profile updated successfully";
}

$genderLower = strtolower($gender);
$profileImage = ($genderLower === "female") ? "girl.png" : "boys.jpg";
$profileImagePath = "profile_images/ProfilePictures/" . $profileImage;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Update Profile</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="style/style.css" />
    </head>

    <body>
        <div class="update_profile-container py-5">
            <h4 class="text-center mb-4 update_profile-title">Update Profile</h4>

            <div class="card update_profile-card shadow-lg rounded-4 bg-light p-4 mx-auto" style="max-width: 960px;">
                <div class="row g-5">
                    <div class="col-md-4 text-center position-relative">
                        <img src="<?= $profileImagePath ?>" alt="Profile Image" class="profile-picture rounded-circle shadow" width="150"  />
                        <div class="bling-stars"></div>
                        <h5 class="mt-3"><?= htmlspecialchars($firstName . ' ' . $lastName) ?></h5>
                        <p class="text-muted"><?= htmlspecialchars($email) ?></p>
                    </div>

                    <div class="col-md-8">
                        <?php if(!empty($successMessage)): ?>
                            <div class="alert alert-success text-center mb-4"><?= $successMessage ?></div>
                        <?php endif; ?>

                        <form method="post" action="update_profile.php" class="mx-auto card shadow-lg p-4 border-0 rounded-4 bg-light" style="max-width: 600px;">
                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <label for="firstname" class="form-label">First Name</label>
                                    <input type="text" name="firstname" id="firstname" class="form-control" value="<?=htmlspecialchars($firstName) ?>" required />
                                </div>

                                <div class="col-sm-6">
                                    <label for="lastname" class="form-label">Last Name</label>
                                    <input type="text" name="lastname" id="lastname" class="form-control" value="<?=htmlspecialchars($lastName) ?>" required />
                                </div>
                            </div>

                            <div class="row mb-4">
                                <div class="col-sm-6">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select name="gender" id="gender" class="form-select">
                                        <option value="Male" <?= $gender === "Male" ? "selected" : "" ?>>Male</option>
                                        <option value="Female" <?= $gender === "Female" ? "selected" : "" ?>>Female</option>
                                    </select>
                                </div>

                                <div class="col-sm-6">
                                    <label for="dob" class="form-label">Date of Birth</label>
                                    <input type="date" name="dob" id="dob" class="form-control" value="<?=htmlspecialchars($dob) ?>" required />
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="hometown" class="form-label">Hometown</label>
                                <input type="text" name="hometown" id="hometown" class="form-control" value="<?=htmlspecialchars($hometown) ?>" required />
                            </div>

                            <div class="d-flex justify-content-between mt-4">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="main_menu.php" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>




