<?php
include("navbar.php");

$file = $_GET['file'] ?? '';
$title = $_GET['title'] ?? 'Untitled';
$workshop = $_GET['workshop'] ?? 'Unknown Workshop';
$name = $_GET['name'] ?? '';
$style = $_GET['style'] ?? '';
$date = $_GET['date'] ?? '';
$desc = $_GET['desc'] ?? '';
$ext = pathinfo($file, PATHINFO_EXTENSION);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?=htmlspecialchars($title) ?></title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style/style.css">
    </head>

    <body>
        <section class="py-5">
            <div class="container">
                <div class="row align-items-center g-4">
                    <div class="col-md-6 text-center">
                        <div class="media-wrapper fade-in">    
                            <?php if ($ext === 'mp4'): ?>
                                <video autoplay muted playsinline controls class="media-preview">
                                    <source src="img/studentworks/<?= htmlspecialchars($file) ?>" type="video/mp4">
                                </video>
                            <?php else: ?>
                                <img src="img/studentworks/<?= htmlspecialchars($file) ?>" alt="<?= htmlspecialchars($title) ?>" class="media-preview">
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-md-6 fade-in">
                        <h2 class="title"><?=htmlspecialchars($title) ?></h2>
                        <p class="text-muted mb-2"><?= htmlspecialchars($workshop) ?></p>
                        
                        <?php if ($name): ?>
                            <div> Name: <?= htmlspecialchars($name) ?></div>
                        <?php endif; ?>

                        <?php if ($desc): ?>
                            <p class="mt-3">Description: <?= htmlspecialchars($desc) ?></p>
                        <?php endif; ?>

                        <div class="mt-3">
                            <?php if ($style): ?>
                                <div class="mb-1">Style: <?= htmlspecialchars($style) ?></div>
                            <?php endif; ?>
                            <br>
                            <?php if ($date): ?>
                                <div> Published: <?= htmlspecialchars($date) ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                        <a href="studentworks.php" class="back-btn">
                            <span class="icon">←</span>
                            <span class="text">Back to Gallery</span>
                        </a>
                </div>
            </div>
        </section>
        <?php include("footer.php"); ?>
    </body>
</html>                        