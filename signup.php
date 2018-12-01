<?php
session_start();
  if (isset($_SESSION['usr_email'])){
    require 'navbar-logged.php';
  }
  else{
    require 'navbar.php';
  }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign up</title>
    <style>
body {
    font-family: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    /* margin-top: 50px; */
    padding: 16px;
    background-color: white;
    opacity: 0.9;

}

/* Full-width input fields */
input[type=text], input[type=password], input[type=number]{
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus, input[type=number]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    /* border: 1px solid #f1f1f1; */
    boder: transparent;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: rgba(0,0,0,0.9);
    font-size: 25px;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}
.bg{
  background-image: url("abstract.jpg");
  height: 240%;
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}
</style>
  </head>
  <body>
  <div class="bg">
    <form action="store.php" method="post">
    <div class="container">
    <h1>Register</h1>
    <h4>Please fill in this form to create an account.</h4>
    <hr>
    <label for="fname"><b>First name</b></label>
    <input type="text" name="fname" value="" placeholder="Enter your First Name" required>

    <label for="lname"><b>Last name</b></label>
    <input type="text" name="lname" value="" placeholder="Enter your Last Name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="contact"><b>Contact Number</b></label>
    <input type="number" placeholder="Enter your contact number" name="contact" required>

    <label for="contact"><b>Date of birth</b></label>
    <input type="date" name="dob">

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password1" required>

    <label for="psw-repeat"><b>Confirm Password</b></label>
    <input type="password" placeholder="Re-enter your password" name="password2" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <h4>Already have an account? <a href="login.php">Log in</a>.</h4>
  </div>
</form>
</div>
  </body>
</html>
<!--  -->
