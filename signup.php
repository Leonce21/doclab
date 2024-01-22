<?php session_start();
require_once('includes/config.php');

//Code for Registration 
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $contact=$_POST['contact'];
$sql=mysqli_query($con,"select id from users where email='$email'");
$row=mysqli_num_rows($sql);
if($row> 0) 
{ 
  echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>"; 
} else{ 
  $msg=mysqli_query($con,"insert into users(fname,lname,email,password,contactno) values('$fname','$lname','$email','$password','$contact')"); 
if($msg) { 
  echo "<script>alert('Registered successfully');</script>"; 
  echo "<script type='text/javascript'>document.location = 'login.php';</script>"; 
} } } ?>
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
  <title>User Signup | Registration and Login System</title>
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
            <a href="#" class="navbar-link title-md">Home</a>
          </li>

          <!-- <li class="navbar-item">
            <a href="#" class="navbar-link title-md">Doctors</a>
          </li> -->

          <!-- <li class="navbar-item">
            <a href="#" class="navbar-link title-md">Services</a>
          </li> -->

          <li class="navbar-item">
            <a href="./pages/articles.html" class="navbar-link title-md">Articles</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link title-md">Contact</a>
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
    <form name="signup" onsubmit="return checkpass();" method="post">
      <h2 class="form-title text-center">Register</h2>

      <div>
        <label for="fname">First Name</label>
        <input type="text" name="fname" id="fname" placeholder="John" class="text-input" required>
      </div>

      <div>
        <label for="lname">Last Name</label>
        <input type="text" name="lname" id="lname" placeholder="Doe" class="text-input" required>
      </div>

      <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="JohnDoe59@gmail.com" class="text-input" required>
      </div>

      <div>
        <label for="contact">Contact</label>
        <input type="number" name="contact" id="contact" 
        pattern="[0-9]{10}" 
        title="10 numeric characters only"
        placeholder="0099900045" 
        class="text-input" required>
      </div>

      <div>
        <label for="password">Password</label>
        <input type="password" 
          name="password" id="password"
          pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
          title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters" 
          placeholder="xxx-xxx-xxx" 
          class="text-input" required>
      </div>

      <div>
        <label for="confirmpassword">Confirm Password</label>
        <input type="password" name="confirmpassword" 
          pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
          title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters"
          placeholder="xxx-xxx-xxx" 
          class="text-input" required>
      </div>

      <div>
        <button type="submit" class="btn btn-big" name="submit" value="submit" aria-label="register">Register</button>
      </div>
      <p class="text-center">Have an account? <a href="./login.html">Login</a></p>

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
