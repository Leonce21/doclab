<?php
// session_start();
require_once('includes/config.php');

// Code for Registration
if (isset($_POST['submit'])) {
  $display_name = $_POST['display_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $user_name = $_POST['user_name'];

  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  // // Handle profile picture upload
  // $profilePicture = $_FILES['profile_picture'];
  // $profilePictureName = '';

  // // Check if a file is uploaded
  // if ($profilePicture['error'] == 0) {
  //   // Generate a unique filename based on the current timestamp
  //   $targetFile = time() . '_' . basename($profilePicture['name']);
  //   $profilePictureName = 'users/user_images/'.$targetFile;
  
  //   // Move the uploaded file to the user_images folder
  //   move_uploaded_file($profilePicture['tmp_name'], $profilePictureName);
  // }

  $baseName = basename($_FILES["profile_picture"]["name"]);
  $targetFile = time() . $baseName;

  $profilePictureName = move_uploaded_file($_FILES["profile_picture"]["tmp_name"], 'users/user_images/' . $targetFile);

    try {
      $con->beginTransaction();

      $query = "INSERT INTO `users`(`display_name`, `email`, `user_name`, `password`, `profile_picture`) 
                VALUES('$display_name', '$email', '$user_name', '$hashedPassword', '$targetFile')";

      $stmtUser = $con->prepare($query);
      // $stmtUser->bindParam(':display_name', $display_name);
      // $stmtUser->bindParam(':email', $email);
      // $stmtUser->bindParam(':user_name', $user_name);
      // $stmtUser->bindParam(':hashedPassword', $hashedPassword);
      // $stmtUser->bindParam(':profile_picture', $profilePictureName);
      $result = $stmtUser->execute();

      $con->commit();

      $message = 'user registered successfully';

    } catch (PDOException $ex) {
      $con->rollback();
      echo $ex->getTraceAsString();
      echo $ex->getMessage();
      exit;
    }
    header("location:./login.php");
    exit;

    // // Check if the email already exists
    // $stmt = $con->prepare("SELECT id FROM users WHERE email = :email");
    // $stmt->bindParam(':email', $email);
    // $stmt->execute();
    // $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // if ($row) {
    //   echo "<script>alert('Email id already exists with another account. Please try with another email id');</script>";
    // } else {
    //   // Hash the password
    //   $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    //   // Insert user data into the database
    //   $stmt = $con->prepare("INSERT INTO users(display_name, email, password, user_name, profile_picture) 
    //                         VALUES(:display_name, :email, :password, :user_name, :profile_picture)");
    //   $stmt->bindParam(':display_name', $display_name);
    //   $stmt->bindParam(':email', $email);
    //   $stmt->bindParam(':password', $hashedPassword);
    //   $stmt->bindParam(':user_name', $user_name);
    //   $stmt->bindParam(':profile_picture', $profilePictureName);

    //   $result = $stmt->execute();

      // if ($result) {
      //   echo "<script>alert('Registered successfully');</script>";
      //   echo "<script type='text/javascript'>document.location = 'login.php';</script>";
      // }
    // }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
   <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <title>SCA Gene - Registration</title>
  <link href="./assets/css/login_register.css" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
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

          <li class="navbar-item">
            <a href="./login.php" class="title-md navbar-link">Login</a>
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

  <div class="auth-content">
    <form name="signup" onsubmit="return checkpass();" method="post" enctype="multipart/form-data">
      <h2 class="form-title text-center">Register</h2>

      <div>
        <label for="fname">Full Name</label>
        <input type="text" name="display_name" id="display_name" placeholder="John Doe" class="text-input" required>
      </div>

      <div>
        <label for="user_name">User name</label>
        <input type="text" name="user_name" id="user_name" 
        placeholder="john_Doe25" 
        class="text-input" required>
      </div>

      <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="JohnDoe59@gmail.com" class="text-input" required>
      </div>

      <div>
        <label for="email">Profile Picture</label>
        <input type="file" id="profile_picture" 
                name="profile_picture" class="text-input" accept="image/*" required>
      </div>


      <div>
        <label for="password">Password</label>
        <div class="password-container">
        <input type="password" 
          name="password" id="password"
          pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
          title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters" 
          placeholder="xxx-xxx-xxx" 
          class="text-input" required>
          <span class="password-toggle" onclick="togglePasswordVisibility('password')">
            <ion-icon name="eye"></ion-icon>
          </span>
        </div>
        
          
      </div>

      <div>
        <label for="confirmpassword">Confirm Password</label>
        <div class="password-container">
          <input type="password" name="confirmpassword" id="confirmpassword"
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
            title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters"
            placeholder="xxx-xxx-xxx" 
            class="text-input" required>
          <span class="password-toggle" onclick="togglePasswordVisibility('confirmpassword')">
            <ion-icon name="eye"></ion-icon>
          </span>
        </div>
        
      </div>

      <div>
        <button type="submit" class="btn btn-big" name="submit" value="submit" aria-label="register">Register</button>
      </div>
      <p class="text-center">Have an account? <a href="./login.php">Login</a></p>

    </form>
  </div>


  <script>
    
    function togglePasswordVisibility(passwordFieldId) {
    var passwordField = document.getElementById(passwordFieldId);
    var icon = document.querySelector('.password-toggle ion-icon');
    if (passwordField.type === "password") {
      passwordField.type = "text";
      icon.setAttribute('name', 'eye-off');
    } else {
      passwordField.type = "password";
      icon.setAttribute('name', 'eye');
    }
  }
</script>

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
