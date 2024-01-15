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
  <title>User Signup | Registration and Login System</title>
  <link href="./assets/css/login_register.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <script type="text/javascript">
    function checkpass() {
      if (
        document.signup.password.value !=
        document.signup.confirmpassword.value
      ) {
        alert(" Password and Confirm Password field does not match");
        document.signup.confirmpassword.focus();
        return false;
      }
      return true;
    }
  </script>
</head>

<body>
<div class="wrapper">
    <header>Login Form</header>
    <form method="post" name="signup" onsubmit="return checkpass();">

      <div class="field fname">
        <div class="input-area">
          <input id="fname" name="fname" type="text" placeholder="Enter your first name" required>
          <i class="icon fas fa-user"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Email can't be blank</div>
      </div>

      <div class="field lname">
        <div class="input-area">
          <input id="lname" name="lname" type="text" placeholder="Enter your last name" required>
          <i class="icon fas fa-user"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">last name can't be blank</div>
      </div>

      <div class="field contact">
        <div class="input-area">
          <input id="contact" name="contact" type="text" placeholder="1234567890"
            required pattern="[0-9]{10}" title="10 numeric characters only" maxlength="10" required>
          <i class="icon fas fa-phone"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Contact can't be blank</div>
      </div>

      <div class="field email">
        <div class="input-area">
          <input placeholder="name@example.com" name="email" type="email" required>
          <i class="icon fas fa-envelope"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Email can't be blank</div>
      </div>

      <div class="field password">
        <div class="input-area">
          <input id="password" name="password" type="password"
            placeholder="Create a password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
            title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters"
            required>
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Password can't be blank</div>
      </div>

      <div class="field cnfmpassword">
        <div class="input-area">
          <input id="confirmpassword" name="confirmpassword" type="password"
            placeholder="Confirm password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
            title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters"
            required>
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Confirm Password can't be blank</div>
      </div>

      <div class="pass-txt"><a href="password-recovery.php">Forgot password?</a></div>
      <input type="submit" value="Submit" name="submit">

    </form>
    <div class="sign-txt">Have an account?<a href="login.php">Login now</a></div>
  </div>
  <!-- <div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
      <main>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-7">
              <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-body">
                  <form method="post" name="signup" onsubmit="return checkpass();">
                    <div class="row mb-3">
                      <div class="col-md-6">
                        <div class="form-floating mb-3 mb-md-0">
                          <input class="form-control" id="fname" name="fname" type="text"
                            placeholder="Enter your first name" required />
                          <label for="inputFirstName">First name</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-floating">
                          <input class="form-control" id="lname" name="lname" type="text"
                            placeholder="Enter your last name" required />
                          <label for="inputLastName">Last name</label>
                        </div>
                      </div>
                    </div>

                    <div class="form-floating mb-3">
                      <input class="form-control" id="email" name="email" type="email"
                        placeholder="phpgurukulteam@gmail.com" required />
                      <label for="inputEmail">Email address</label>
                    </div>

                    <div class="form-floating mb-3">
                      <input class="form-control" id="contact" name="contact" type="text" placeholder="1234567890"
                        required pattern="[0-9]{10}" title="10 numeric characters only" maxlength="10" required />
                      <label for="inputcontact">Contact Number</label>
                    </div>

                    <div class="row mb-3">
                      <div class="col-md-6">
                        <div class="form-floating mb-3 mb-md-0">
                          <input class="form-control" id="password" name="password" type="password"
                            placeholder="Create a password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
                            title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters"
                            required />
                          <label for="inputPassword">Password</label>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-floating mb-3 mb-md-0">
                          <input class="form-control" id="confirmpassword" name="confirmpassword" type="password"
                            placeholder="Confirm password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
                            title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters"
                            required />
                          <label for="inputPasswordConfirm">Confirm Password</label>
                        </div>
                      </div>
                    </div>

                    <div class="mt-4 mb-0">
                      <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-block" name="submit">
                          Create Account
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center py-3">
                  <div class="small">
                    <a href="login.php">Have an account? Go to login</a>
                  </div>
                  <div class="small">
                    <a href="index.php">Back to Home</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div> -->

  <script>
    const form = document.querySelector("form");
eField = form.querySelector(".email"),
eInput = eField.querySelector("input"),
pField = form.querySelector(".password"),
pInput = pField.querySelector("input");

form.onsubmit = (e)=>{
  e.preventDefault(); //preventing from form submitting
  //if email and password is blank then add shake class in it else call specified function
  (eInput.value == "") ? eField.classList.add("shake", "error") : checkEmail();
  (pInput.value == "") ? pField.classList.add("shake", "error") : checkPass();

  setTimeout(()=>{ //remove shake class after 500ms
    eField.classList.remove("shake");
    pField.classList.remove("shake");
  }, 500);

  eInput.onkeyup = ()=>{checkEmail();} //calling checkEmail function on email input keyup
  pInput.onkeyup = ()=>{checkPass();} //calling checkPassword function on pass input keyup

  function checkEmail(){ //checkEmail function
    let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/; //pattern for validate email
    if(!eInput.value.match(pattern)){ //if pattern not matched then add error and remove valid class
      eField.classList.add("error");
      eField.classList.remove("valid");
      let errorTxt = eField.querySelector(".error-txt");
      //if email value is not empty then show please enter valid email else show Email can't be blank
      (eInput.value != "") ? errorTxt.innerText = "Enter a valid email address" : errorTxt.innerText = "Email can't be blank";
    }else{ //if pattern matched then remove error and add valid class
      eField.classList.remove("error");
      eField.classList.add("valid");
    }
  }

  function checkPass(){ //checkPass function
    if(pInput.value == ""){ //if pass is empty then add error and remove valid class
      pField.classList.add("error");
      pField.classList.remove("valid");
    }else{ //if pass is empty then remove error and add valid class
      pField.classList.remove("error");
      pField.classList.add("valid");
    }
  }

  //if eField and pField doesn't contains error class that mean user filled details properly
  if(!eField.classList.contains("error") && !pField.classList.contains("error")){
    window.location.href = form.getAttribute("action"); //redirecting user to the specified url which is inside action attribute of form tag
  }
}
  </script>
</body>

</html>
