<!-- <?php session_start(); 
include_once('includes/config.php');
// Code for login 
if(isset($_POST['login']))
{
$password=$_POST['password'];
$dec_password=$password;
$useremail=$_POST['email'];
$ret= mysqli_query($con,"SELECT id,fname FROM users WHERE email='$useremail' and password='$dec_password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{

$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['fname'];
header("location:dashboard.php");

}
else
{
echo "<script>alert('Invalid username or password');</script>";
}
}
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>SCE Gene - login</title>
    <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;700&family=Rubik:wght@400;500;700&display=swap"
    rel="stylesheet">
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
    <form action="" method="post">
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
        <button type="submit" class="btn btn-big" name="login" value="submit" aria-label="register">Login</button>
      </div>
      <p class="text-center">Don't have an account? <a href="./signup.php">Register</a></p>

    </form>
  </div>



  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>
</body>
</html>