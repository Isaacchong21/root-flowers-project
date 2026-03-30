<?php
session_start();
if (isset($_GET['auth']) && $_GET['auth'] === "required" && isset($_SESSION['user_email'])){
    header("Location: main_menu.php");
    exit();
}
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Main Menu</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
            <link rel="stylesheet" href="style/style.css">
    </head>

    <body class="main-menu-page">
        <div class="page-wrapper">
            <main class="content-area">
                <?php if(isset($_GET['auth']) && $_GET['auth'] === "required"): ?>
                    <div class="alert alert-warning text-center m-0" role="alert">
                        You must be logged in to access that page. Please <a href="login.php">login</a> or <a href="registration.php">register</a>.
                    </div>
                <?php endif; ?>
                    <section class="main-menu-section container py-5">
                        <h1 class="main-menu-heading text-center fw-bold mb-5">Main Menu</h1>
                        <div class="row justify-content-center g-4">
                            <div class="col-md-6 col-lg-3">
                                <div class="card h-100 text-center shadow-sm">
                                    <div class="card-body">
                                        <i class="bi bi-flower1" style="font-size: 2rem;"></i>
                                        <h5 class="card-title"> Products </h5>
                                        <p class="card-text">Explore  our floral collections by category. </p>
                                        <a href="products.php" class="btn btn-root">View Products</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-lg-3">
                                <div class="card h-100 text-center shadow-sm">
                                    <div class="card-body">
                                        <i class="bi bi-calendar-event" style="font-size: 2rem;"></i>
                                        <h5 class="card-title mt-2">Workshop</h5>
                                        <p class="card-text">Learn flower arrangement with us.</p>
                                        <a href="workshop.php" class="btn btn-root">View Workshop</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-lg-3">
                                <div class="card h-100 text-center shadow-sm">
                                    <div class="card-body">
                                        <i class="bi bi-image" style="font-size: 2rem;"></i>
                                        <h5 class="card-title mt-2">Student Works</h5>
                                        <p class="card-text">Upload and share your creations.</p>
                                        <a href="studentworks.php" class="btn btn-root">Share Works</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-3">
                                <div class="card h-100 text-center shadow-sm">
                                    <div class="card-body">
                                        <i class="bi bi-search" style="font-size: 2rem;"></i>
                                        <h5 class="card-title mt-2">Flower Name</h5>
                                        <p class="card-text">Identify flower & downlod PDF.</p>
                                        <a href="flower_name.php" class="btn btn-root">Identify Flower</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
            </main>
            
            <?php include 'footer.php'; ?>
        </div>
    </body>
</html>