<?php 
	include 'includes/config.php';
  if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Retrieve user data based on email
    $stmt = $con->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    
      if ($user) {
        $_SESSION['user_name'] = $user['user_name'];
        $_SESSION['display_name'] = $user['display_name'];
        $_SESSION['profile_picture'] = $user['profile_picture'];

        // Verify the password
        if (password_verify($password, $user['password'])) {
          // Password is correct, start a session and store user data
          $_SESSION['user_id'] = $user['id'];
          $_SESSION['user_name'] = $user['user_name'];
          $_SESSION['display_name'] = $user['display_name'];
          $_SESSION['profile_picture'] = $user['profile_picture'];
  
          // You can redirect the user to the dashboard or any other page
      
          echo "<script type='text/javascript'>document.location = './users/dashboard.php';</script>";
        } else {
          echo "<script>alert('Invalid password');</script>";
        }
      } else {
        echo "<script>alert('Email not found');</script>";
      }
    

    
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - SCE Gene</title>
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&family=Rubik:wght@400;500;700&display=swap"
    rel="stylesheet">
    <link href="./assets/css/login_register.css" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/css/style.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
 <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">
  <link rel="preload" as="image" href="./assets/images/hero-bg.png">


</head>
<body>
  <!-- 
    - #PRELOADER
  -->

  <div class="preloader" data-preloader>
    <div class="circle"></div>
  </div>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/logo2.svg" width="136" height="46" alt="SCE Gene home">
      </a>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <a href="#" class="logo">
            <img src="./assets/images/logo2.svg" width="136" height="46" alt="SCE Gene home">
          </a>

          <button class="nav-close-btn" aria-label="clsoe menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="./index.php" class="navbar-link title-md">Home</a>
          </li>

          <li class="navbar-item">
            <a href="./pages/articles.php" class="navbar-link title-md">Articles</a>
          </li>

          <li class="navbar-item">
            <a href="./pages/gallery.php" class="navbar-link title-md">ACR/CCA Gallery</a>
          </li>

          <li class="navbar-item">
            <a href="./pages/contact.php" class="navbar-link title-md">Contact</a>
          </li>

        </ul>

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-pinterest"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <a href="./login.php" class="btn has-before title-md">Login</a>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>
   <!-- 
    - # End HEADER
  -->

  
  <!-- /.login-logo -->
  
    <div class="auth-content">
      <form method="post">
        <h2 class="form-title text-center">Login</h2>

        <div>
          <label for="email">Email</label>
          <input type="email" name="email" placeholder="JohnDoe59@gmail.com" class="text-input">
        </div>

        <div>
          <label for="password">Password</label>
         
            <input type="password" name="password" placeholder="xxx-xxx-xxx" class="text-input">
           
        
         
        </div>

        <div>
          <button type="submit" class="btn btn-big" name="login" value="submit" aria-label="login">Login</button>
        </div>
        <p class="text-center">Don't have an account? <a href="./signup.php">Register</a></p>

      </form>
      
    </div>


 <!-- 
    - custom js link
  -->
  <!-- SweetAlert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="./assets/js/script.js"></script>
   <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
