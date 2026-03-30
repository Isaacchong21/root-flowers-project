<?php
session_start();
$target = $_SESSION['final_redirect'] ?? 'index.php';
unset($_SESSION['final_redirect']);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Logging in</title>
        
        <meta http-equiv="refresh" content="2;url=<?php echo $target; ?>">

        <link rel="stylesheet" href="style/style.css">
    </head>

    <body>
        <div class="loader-screen">
            <div class="loader"></div>
            <p class="loader-text">Logging in, please wait...</p>
        </div>
    </body>
</html>