<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
</head>
<body>

<link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous"
/>

<nav class = "navbar navbar-expand-sm" style="background-color: #D8CFC4;">
    <div class = "container-fluid">
        <a class = "navbar-brand" href="index.php"> 
            <img src= "img/logo1.png" class ="logo-img" style ="height:70px; width:auto; object-fit: contain;">
        </a>

        <ul class="navbar-nav d-flex flex-row align-items-center">
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <li class="bi bi-house-door-fill"></li>Home
                </a>
            </li>

            <li class="dropdown-container">
                <span class="dropdown-toggle">Menu</span>
                <div class="custom-dropdown-menu">
                    <a href="products.php">Products</a>
                    <a href="workshop.php">Workshop</a>
                    <a href="studentworks.php">Student Works</a>
                    <a href="flower_name.php">Flower Name</a>
                    <hr>
                    <a href="update_profile.php">View Profile</a>
                </div>
            </li>
            
            <?php if(isset($_SESSION['user_email'])): ?>
                <li class="nav-item">
                    <span class="nav-link text-muted">Welcome, <?= htmlspecialchars($_SESSION['user_email']) ?></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-danger" href="logout.php">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                </li>
                <?php else: ?>
                    <li class = "nav-item">
                        <a class = "nav-link" href = "registration.php">
                            <i class="bi bi-pencil-square"></i> Registration
                        </a>
                    </li>
                    <li class = "nav-item">
                        <a class = "nav-link" href = "login.php">
                            <i class="bi bi-box-arrow-in-right"></i> login
                        </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link " href="profile.php">
                        <i class="bi bi-person-circle"></i> Profile
                    </a>
                </li>
                <?php endif; ?>
            
        </ul>
        </div>
    </div>  
</nav>
</body>
</html>

