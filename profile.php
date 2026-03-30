<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile Page</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous"
  />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <link rel="stylesheet" href="style/style.css" />
</head>

<body class="profile-page">
  <?php
  include("navbar.php");
  ?>
  <div class="profile-container">
      <img src="img/Isaac.png" alt="Profile Image" class="profile-image" />
      <h3 class="fw-bold mt-4">Isaac Chong Jun Zong</h3>
      <p><strong>Student ID:</strong> 104390381</p>
      <p><strong>Email:</strong> 104390381@students.swinburne.edu.my</p>

      <div class="declaration">
          <P>
          I declare that this assignment is my individual work. I have not 
          work collaboratively nor have I copied from any other student's work or from any
          other source. I have not engaged another party to complete this assignment. I 
          am aware of the University's policy with regards to plagiarism. I have not 
          allowed, and will not allow, anyone to copy my work with the intention of passing 
          it off as his or her own work.</p>
      </div>
      
      <div class="profile-links">
        <a href="index.php"><i class="bi bi-house-door-fill"></i> Home Page</a>
        <span class="mx-2">|</span>
        <a href="about.php"><i class="bi bi-file-earmark-text"></i> About this Assignment</a>
      </div>
  </div>
  <?php include("footer.php"); ?>
</body>
</html>