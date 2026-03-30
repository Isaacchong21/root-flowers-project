<?php 
session_start();
include("navbar.php");
$error = $_SESSION['login_error'] ?? '';
unset($_SESSION['login_error']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
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

<body class="login-page">
<div class="page-wrapper">
  <main class="content-area">
    <div class="container py-0">
      <div class="row align-items-center">
      <div class="col-md-7 px-4">
          <form action="login_process.php" method="post" class="login-form">
            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Please Log in</h3>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" id="email"/>
            </div>            
            
            <div class="mb-3">
              <label for="passwWord" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password"  />
            </div>

            <?php if (!empty($error)): ?>
              <div class="text-danger" style="font-size: 20px"><?php echo $error ?></div>
              <?php endif; ?>
              
              <button class="btn btn-root btn-block text-bold" type="submit">Login</button>
              <p>Don't have an account? <a href="registration.php" class="text-danger">Register</a></p>
          
            </form>
      </div>
      <div class="col-md-5 px-0 d-none d-md-block">
        <img src="img/background/login.jpg" alt="Login image" class="login-image">
      </div>
    </div>
  </div>
</main>

<?php include("footer.php"); ?>
</div>
</body>
</html>