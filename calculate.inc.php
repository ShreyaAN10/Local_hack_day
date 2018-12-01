<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $patient_symptoms = $_POST['form du whatever it is']; //whatever array
    $disease_percent = array()
    $server='localhost';
    $user='root';
    $pw='';
    $db='symptom_checker';
    $conn=mysqli_connect($server,$user,$pw,$db) or die("Unable to connect");
    $diseases = mysqli_query($conn,"SELECT * FROM disease");
    while($disease_tuple = mysqli_fetch_assoc($diseases)){
      array_push($disease_percent,$disease_tuple['disease'],0);
    }
    foreach ($patient_symptoms as $s){
        $check = mysqli_query($conn,"SELECT * FROM disease WHERE symptoms LIKE '%{$s}%'");
        if ($check){
              while($row=mysqli_fetch_assoc($check)){
                i = $row['disease'];
                $disease_percent[i]+=19.5;
              }
          }
      }
      arsort($disease_percent);
      echo $disease_percent;
    ?>
  </body>
