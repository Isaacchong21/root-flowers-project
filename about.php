<?php 
$phpVersion = phpversion();
include ("navbar.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>About Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="style/style.css" />
    </head>
    <body style="background-image: url('img/background/about_bg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="container py-5">    
            <div class="card shadow-lg p-4 border-0 rounded-4" style="background-color:  transparent;">
                    <h2 class="text-center mb-4 text-dark border-bottom pb-2">About This Website</h2>

                    <div class="mb-4">
                        <h5 class="fw-bold"> PHP Version Used </h5>
                        <ul class="list-group">
                            <li><?= $phpVersion ?></li>
                        </ul>
                    </div>

                    <div class="mb-4"> 
                        <h5 class="fw-bold"> Tasks Not Attempted / Not Completed </h5>
                        <ul class="list-group">
                            <li>None - All tasks completed successfully</li>
                        </ul>
                    </div>
                    
                    <div class="mb-4">
                        <h5 class="fw-bold"> Tasks Completed</h5>
                        <ul>
                            <li>Task 1 - Home Page</li>
                            <li>Task 2 - Main Menu Page</li>
                            <li>Task 3 - Products</li>
                            <li>Task 4 - Workshop Page</li>
                            <li>Task 5 - Student Work Page</li>
                            <li>Task 6 - View Student work Page</li>
                            <li>Task 7 - Profile Page</li>
                            <li>Task 8 - Update Profile Page</li>
                            <li>Task 9 - Account Registration Page</li>
                            <li>Task 10 - Process Registration Management</li>
                            <li>Task 11 - Workshop Registration Page</li>
                            <li>Task 12 - Login Page</li>
                            <li>Task 13 - About Page</li>
                        </ul>
                    </div>

                    <div class="mb-4">
                        <h5 class="fw-bold">Frameworks, Third-Party Librarues Used</h5>
                        <ul class="list-group">
                            <li>Bootstrap 5.3.2 - for responsive design and styling</li>
                        </ul>
                    </div>

                    <div class="mb-4">
                        <h5 class="fw-bold">Video Presentation</h5>
                        <a href="https://youtu.be/71Kr2F0ph0E" target="_blank" class="btn btn-outline-primary">
                            Watch the video presentation
                        </a>
                    </div>

                    <div class="mb-4">
                        <h5 class="mt-4 mb-3">Navigation</h5>
                        <a href="index.php" class="btn btn-secondary">Home Page</a>
                    </div>
            </div>
        </div>

    <?php include ("footer.php"); 
    ?>
    </body>
</html>

                
