<?php
include("navbar.php");

$studentWorks = [];
$filepath = "data/rootflower.txt";

if (file_exists($filepath)) {
    $lines = file($filepath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $parts = explode("|", $line);
        if (count($parts) >= 6) {
            $studentWorks[] = [
                "title" => trim($parts[0]),
                "workshop" => trim($parts[1]),
                "name" => trim($parts[2]),
                "file" => trim($parts[3]),
                "style" => trim($parts[4]),
                "desc" => trim($parts[5]),
                "date" => trim($parts[6])
            ];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Works</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
<section class="py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-4">Student Works</h2>
        <hr class="mx-auto" style="width: 80px; border-top: 3px solid #333;">
        <div class="row g-4">
            <?php 
            foreach ($studentWorks as $work): 
                $ext = pathinfo($work['file'], PATHINFO_EXTENSION);
            ?>

            <div class="col-md-4 col-sm-6">
                <a href="studentwork_detail.php?file=<?= urlencode($work['file']) ?>&title=<?= urlencode($work['title']) ?>&workshop=<?= urlencode($work['workshop']) ?>&name=<?= urlencode($work['name']) ?>&style=<?= urlencode($work['style']) ?>&desc=<?= urlencode($work['desc']) ?>&date=<?= urlencode($work['date']) ?>" class="text-decoration-none text-dark">
                    <div class="studentwork_card p-3">
                        <?php if ($ext === "mp4"): ?>
                            <video autoplay muted loop playsinline>
                                <source src="img/studentworks/<?= $work['file'] ?>" type="video/mp4">
                            </video>
                        <?php else: ?>
                            <img src="img/studentworks/<?= $work['file'] ?>" alt="<?= htmlspecialchars($work['title']) ?>" class="media-preview">
                        <?php endif; ?>

                        <div class="card-body text-center">
                            <h5 class="card-title"><?= htmlspecialchars($work['title']) ?></h5>
                            <p class="tag"><?= htmlspecialchars($work['workshop']) ?></p>
                        </div>
                    </div>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include("footer.php"); ?>
</body>
</html>