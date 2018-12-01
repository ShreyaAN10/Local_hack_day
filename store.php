<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $server='localhost';
    $user='root';
    $pw='';
    $db='symptom_checker';
    $conn=mysqli_connect($server,$user,$pw,$db) or die("Unable to connect");
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $dob=$_POST['dob'];
    $password1=$_POST['password1'];
    $password2=$_POST['password2'];
    if($password1!=$password2){
      echo "Password doesn't match. Try again!";
    }
    else{
      $query="INSERT INTO patient VALUES('$fname','$lname','$email','$contact','$dob','$password1')";
      if(!mysqli_query($conn,$query)){
        echo "Not inserted";
      }
      header("refresh:0; url=login.php");
    }
  ?>
  </body>
</html>
