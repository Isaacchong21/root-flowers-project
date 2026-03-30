<?php 
session_start();

if (!isset($_SESSION['user_email'])) {
    $_SESSION['redirect_after_login'] = basename($_SERVER['PHP_SELF']);
    header("Location: login.php?auth=required");
    exit();
}

include("navbar.php"); 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Workshop</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
            <link rel="stylesheet" href="style/style.css">
    </head>

    <body class="workshop-page">
        <section class="workshop-gallery container py-5">
            <h1 class="main-menu-heading text-center fw-bold mb-5">Workshop</h1>
            <div class="timeline-container my-5">
                <h2 class="text-center fw-bold mb-6">Timeline</h2>
                <div class="timeline d-flex flex-wrap justify-content-center gap-4">
                    <div class="timeline-item text-center">
                        <div class="timeline-date fw-bold text warning">30 Aug 2025</div>
                        <div class="timeline-label">Hobby Class</div>
                    </div>
                    <div class="timeline-item text-center">
                        <div class="timeline-date fw-bold text warning">13 Sept 2025</div>
                        <div class="timeline-label">Hobby Class</div>
                    </div>
                    <div class="timeline-item text-center">
                        <div class="timeline-date fw-bold text warning">18 Oct 2025</div>
                        <div class="timeline-label">Hobby Class</div>
                    </div>
                    <div class="timeline-item text-center">
                        <div class="timeline-date fw-bold text warning">Sept 2025</div>
                        <div class="timeline-label">Florist To Be 1</div>
                    </div>
                    <div class="timeline-item text-center">
                        <div class="timeline-date fw-bold text warning">Oct 2025</div>
                        <div class="timeline-label">Florist To Be 2</div>
                    </div>
                </div>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="img/workshop/floral_class.jpg" alt="Floral Class Overview">
                            </div>
                            <div class="flip-card-back">
                                <h5 class="fs-4 fw-bold">Course Details</h5>
                                <ul>
                                    <li><strong>Type:</strong> Handtied / Florist To Be / Hobby </li>
                                    <li><strong>Date:</strong> Aug-Oct 2025</li>
                                    <li><strong>Time:</strong> 10:00 AM - 4:00PM</li>
                                    <li><strong>Venue:</strong> KUCHING </li>
                                </ul>
                                <a href="workshop_reg.php" class="btn btn-root mt-2">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="img/workshop/handtied_bouquet.jpg" alt="Handtied Bouquet">
                            </div>
                            <div class="flip-card-back">
                                <h5 class="fs-4 fw-bold">Course Details</h5>
                                <ul>
                                    <li><strong>Type:</strong> Spiral Hantied- ROUND\CLASS LAYERS & SINGLE STALK & KOREAN & RUSSIAN & MIX FLOWERS </li>
                                    <li><strong>Date:</strong> Aug-Oct 2025</li>
                                    <li><strong>Time:</strong> 2 Days / 5 Classes</li>
                                    <li><strong>Venue:</strong> KUCHING </li>
                                </ul>
                                <a href="workshop_reg.php" class="btn btn-root mt-2">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="img/workshop/florist_to_be1.jpg" alt="Florist To Be 1">
                            </div>
                            <div class="flip-card-back">
                                <h5 class="fs-4 fw-bold">Course Details</h5>
                                <ul>
                                    <li><strong>Type:</strong> Professional Floral Design</li>
                                    <li><strong>Date:</strong> Sept 2025</li>
                                    <li><strong>Time:</strong> 4 Days / 9 Classes</li>
                                    <li><strong>Venue:</strong> KUCHING </li>
                                </ul>
                                <a href="workshop_reg.php" class="btn btn-root mt-2">Register</a>
                            </div>
                        </div>
                    </div>
                 </div>
                 
                <div class="col-md-6 col-lg-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="img/workshop/florist_to_be2.jpg" alt="Florits To Be 2">
                            </div>
                            <div class="flip-card-back">
                                <h5 class="fs-4 fw-bold">Course Details</h5>
                                <ul>
                                    <li><strong>Type:</strong> Bridal / Advanced Floral Design</li>
                                    <li><strong>Date:</strong> Oct 2025</li>
                                    <li><strong>Time:</strong> 4 Days / 9 Classes</li>
                                    <li><strong>Venue:</strong> KUCHING</li>
                                </ul>
                                <a href="workshop_reg.php" class="btn btn-root mt-2">Register</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="img/workshop/hobby_class.jpg" alt="Hobby Class">
                            </div>
                            <div class="flip-card-back">
                                <h5 class="fs-4 fw-bold">Course Details</h5>
                                <ul>
                                    <li><strong>Type:</strong> Basket / Centerpiece / Flower Box</li>
                                    <li><strong>Date:</strong> 30 Aug, 13 Sept, 18 Oct</li>
                                    <li><strong>Time:</strong> 1 Day / 1 Class</li>
                                    <li><strong>Venue:</strong> KUCHING</li>
                                </ul>
                                <a href="workshop_reg.php" class="btn btn-root mt-2">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
        </section>
   <?php include("footer.php"); ?>


