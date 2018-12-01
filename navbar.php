<?php
echo'
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  ul li a:hover {
  color:grey;
}
</style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid" style="margin-top: 10px; background-color: black;">

    <ul class="nav navbar-nav">
	    <li class="active"><a href="#">HOME</a></li>
      <li class="active"><a href="#">ABOUT US</a></li>
       <li class="active"><a href="#">Page 1</a></li>
      <li class="active"><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li class="active"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>


</body>
</html>
';
?>
