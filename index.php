<!doctype html>
<html lang="en">
    <head>
        <title>Root Flower</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="style/style.css">

    </head>

    <body>
        <div class="wrapper">
            <div class = "hero-section text-center">
                <div class="d-inline-flex justify-content-center align-items-center gap-2 flex-wrap">
                    <h1 class="custom-title">Welcome to Root Flower</h1>
                    <img src="img/logo1.png" alt="Root Flower Logo" class="logo-index">
                </div>
            </div>
                
            <div class = "about-section bg-light py-4">
                <div class = "container text-center pb-5">
                    <h2 class = "fw-bold mb-3">About Us</h2>
                    <p class = "lead">Root Flower is a boutique florist based in Kuching, Sarawak, offering handcrafted bouquets and personalized floral designs for all occasions.
                        Our passion for flowers and commitment to quality ensure that every arrangement is beautifully made, thoughtfully styled, and tailored to your unique needs.</p>
                        
                        <?php
                        $images = glob("img/homepage_img/*.jpg");
                        shuffle($images);
                        $groups = array_chunk($images, 3); 
                        ?>
                        
                        <div id="flowerCarousel" class="carousel slide mb-5" data-bs-ride="carousel" data-bs-interval="2000">
                            <div class="carousel-inner">
                                <?php
                                foreach ($groups as $index => $group) {
                                    $active = ($index === 0) ? "active" : "";
                                    echo '<div class="carousel-item ' . $active . '">';
                                    echo '<div class="container">';
                                    echo '<div class="row justify-content-center">';
                                    
                                    foreach ($group as $img) {
                                        echo '<div class="col-12 col-md-4 mb-3">';
                                        echo '<div class="card flower-card h-100">';
                                        echo '<img src="' . $img . '" class="carousel-image img-fluid" alt="Bouquet">';
                                        echo '</div>';
                                        echo '</div>';
                                    }
                                    echo '</div></div></div>';
                                }
                                ?>
                            </div>
                        </div>

                        <div class = "d-grid gap-3 d-md-flex justify-content-md-center btn-group-custom">
                            <a href="main_menu.php" class="btn btn-outline-dark px-4" data-hover="Start your journey">Main Menu</a>
                            <a href="login.php" class="btn btn-outline-dark px-4" data-hover="Welcome back">Login</a>
                            <a href="registration.php" class="btn btn-outline-dark px-4" data-hover="Let's join">Register</a>
                        </div>
                </div>
            </div>
            <?php include("footer.php"); ?>
        </div>
    </body>
</html>
