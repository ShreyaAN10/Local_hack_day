<?php
  session_start();
    $server='localhost';
    $user='root';
    $pw='';
    $db='symptom_checker';
    $conn=mysqli_connect($server,$user,$pw,$db) or die("Unable to connect");
    $usr_email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd= mysqli_real_escape_string($conn, $_POST['password']);
    {
      $sql = "SELECT * FROM patient WHERE email='$usr_email'";
      $result = mysqli_query($conn,$sql);
      $resultCheck = mysqli_num_rows($result);
      if ($resultCheck < 1){
        header("Location: login.php/login=?error");
        exit();
      }else{
          if ($row = mysqli_fetch_assoc($result)){
            if (strcmp($pwd, $_POST['password'])==0){
              echo 'Password is valid!';
              $_SESSION['usr_email'] = $row['email'];
              $_SESSION['usr_fname'] = $row['fname'];
              $_SESSION['usr_lname'] = $row['lname'];
              header("Location: home.php?login=success");
              exit();
              } else {
                echo 'Invalid password';
                echo $pwd;
                echo $row['password'];
                exit();
              }
          }
      }
    }
?>
