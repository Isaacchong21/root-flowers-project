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
        <title>Products</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
            <link rel="stylesheet" href="style/style.css">
    </head>

    <body>
        <a id="top"></a>
        <section class="container py-5">
            <h1 class="text-center fw-bold mb-5">Our Products</h1>
            <div class="scroll-trigger"></div>
            <section class="category-nav py-4">
                <div class="container">
                    <div class="row justify-content-center g-4">
                        <div class="col-md-3 col-sm-6">
                            <a href="#roses" class="category-card text-decoration-none">
                                <div class="p-4 rounded shadow-sm text-center hover-card">
                                    <i class="bi bi-flower1" style="font-size: 2rem;"></i>
                                    <h5 class="mt-2">Roses</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="#mix_flower_bouquet" class="category-card text-decoration-none">
                                <div class="p-4 rounded shadow-sm text-center hover-card">
                                    <i class="bi bi-flower2" style="font-size: 2rem;"></i>
                                    <h5 class="mt-2">Mix Bouquets</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="#arrangements" class="category-card text-decoration-none">
                                <div class="p-4 rounded shadow-sm text-center hover-card">
                                    <i class="bi bi-basket" style="font-size: 2rem;"></i>
                                    <h5 class="mt-2">Arrangements</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="#mother_day" class="category-card text-decoration-none">
                                <div class="p-4 rounded shadow-sm text-center hover-card">
                                    <i class="bi bi-heart-fill" style="font-size: 2rem"></i>
                                    <h5 class="mt-2">Mother's Day Flower</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <h2 id="roses" class="text-center text-muted mb-4">Roses</h2>
            <div class="masonry-grid">
                <?php for ($i = 1; $i <= 6; $i++): ?>
                    <div class="masonry-item">
                        <div class="card product-card">
                            <img src="img/products/roses/rose<?= $i ?>.jpg" class="card-img-top" alt="Rose <?= $i ?>" data-bs-toggle="modal" data-bs-target="#modalRose<?= $i ?>">
                            <div class="card-body text-center">
                                <h5 class="card-title">Roses <?= $i ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modalRose<?= $i ?>" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <img src="img/products/roses/rose<?= $i ?>.jpg" class="img-fluid rounded"  alt="Roses <?= $i ?>">
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>

            <h2 id="mix_flower_bouquet" class="text-center text-muted mt-5 mb-4">Mix flowers Bouquet </h2>
            <div class="masonry-grid">
                <?php for ($i = 1; $i <= 6; $i++): ?>
                    <div class="masonry-item">
                        <div class="card product-card">
                            <img src="img/products/mix_flowers_bouquet/mfb<?= $i ?>.jpg" class="card-img-top" alt="Mix Flower Bouquet <?= $i ?>" data-bs-toggle="modal" data-bs-target="#modalBouquet<?= $i ?>">
                            <div class="card-body text-center">
                                <h5 class="card-title">Mix Flower Bouquet <?= $i ?></h5>
                            </div>
                        </div>
                    </div>
                    
                    <div class="modal fade" id="modalBouquet<?= $i ?>" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <img src="img/products/mix_flowers_bouquet/mfb<?= $i ?>.jpg" class="img-fluid rounded" alt="Mix Flower Bouquet <?= $i ?>">
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>

            <h2 id="arrangements" class="text-center text-muted mt-5 mb-4">Arrangements</h2>
            <div class="masonry-grid">
                <?php for($i = 1; $i <= 6; $i++): ?>
                    <div class="masonry-item">
                        <div class="card product-card">
                            <img src="img/products/arrangements/arrangement<?= $i ?>.jpg" class="card-img-top" alt="Arrangements <?= $i ?>" data-bs-toggle="modal" data-bs-target="#modalArrangement<?= $i ?>">
                            <div class="card-body text-center">
                                <h5 class="card-title"> Arrangements <?= $i ?></h5>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modalArrangement<?= $i ?>" tabindex="-1"> 
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <img src="img/products/arrangements/arrangement<?= $i ?>.jpg" class="img-fluid rounded shadow" alt="Arrangements <?= $i ?>">
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>

            <h2 id="mother_day" class="text-center text-muted mt-5 mb-4">Mothers' Day Flowers</h2>
            <div class="masonry-grid">
                <?php for ($i=1; $i<= 6; $i++): ?>
                    <div class="masonry-item">
                        <div class="card product-card">
                            <img src="img/products/mother_day_flowers/mother_day_flower<?= $i ?>.jpg" class="card-img-top" alt="Mother's Day Flowers <?= $i ?>" data-bs-toggle="modal" data-bs-target="#modalMother_day<?= $i ?>">
                            <div class="card-body text-center">
                                <h5 class="card-title"> Mothers' Day Flowers<?= $i ?></h5>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="modalMother_day<?=$i ?>" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <img src="img/products/mother_day_flowers/mother_day_flower<?= $i ?>.jpg" class="img-fluid rounded shadow" alt="Mothers' Day Flowers <?= $i ?>">
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </section>

        <a href="#top" class="back-to-top-btn">
                <i class="bi bi-arrow-up"></i>
            </a>
        
        <?php include("footer.php"); ?>
    </body>
</html>
   