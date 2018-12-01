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
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* style the container */
.container {
  /* margin-top: 25px; */
  position: relative;
  border-radius: 5px;
  background-color: #f2f2f2;
  opacity: 0.93;
  padding: 20px 0 30px 0;
}

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 40px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}

/* add appropriate colors to fb, twitter and google buttons */
.fb {
  text-align: center;
  background-color: #3B5998;
  color: white;
}

.twitter {
  text-align: center;
  background-color: #55ACEE;
  color: white;
}

.google {
  text-align: center;
  background-color: #dd4b39;
  color: white;
}

/* style the submit button */
input[type=submit] {
  background-color: rgba(72,61,139,0.85);
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: rgba(72,61,139,0.9);
}

/* Two-column layout */
.col {
  /* float: left; */
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 25px;
}
.row{
  margin-top: 25px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
  text-align: center;
  font-size: 20px;
  text-decoration: none;
  background-color: #666;
  height: 120px;
  line-height: 25px;
  /* border-radius: 0px 0px 4px 4px; */
}
.bg{
  background-image: url("abstract.jpg");
  height: 110%;
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
hr {
    display: block;
    width: 60%;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
}
</style>
</head>
<body>
  <div class="bg">
<div class="container">
  <form action="login.inc.php" method="post">
    <div class="row">
      <h2 style="text-align:center">Login</h2>
      <div class="col">
        <a href="#" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
         </a>
        <a href="#" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> Login with Twitter
        </a>
        <a href="#" class="google btn"><i class="fa fa-google fa-fw">
          </i> Login with Google+
        </a>
      </div>
<hr>
      <div class="col">
        <div class="hide-md-lg">
          <p>Or sign in manually:</p>
        </div>
        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
      </div>
        <h4 style="text-align: center; margin-top: 15px;">Are you new here?<a href="demoSignup.php">Sign up</h4>
    </div>
  </form>
</div>

</div>
</body>
</html>
