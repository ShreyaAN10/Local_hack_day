<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $patient_symptoms = [];//$_POST['form du whatever it is']; //whatever array
    print_r($patient_symptoms);
    $disease_percent = array('Common Cold'=>0,'Dengue'=>0,'Depression'=>0,'Diabetes'=>0,'Fever'=>0,'Jaundice'=>0,'Kidney Stones'=>0,'Leukemia'=>0,'Malaria'=>0,'Throat infection'=>0,'Typhoid'=>0);
    $server='localhost';
    $user='root';
    $pw='';
    $db='symptom_checker';
    $conn=mysqli_connect($server,$user,$pw,$db) or die("Unable to connect");
    //$diseases = mysqli_query($conn,"SELECT * FROM disease");

    foreach ($patient_symptoms as $s){
        $check = mysqli_query($conn,"SELECT * FROM disease WHERE symptoms LIKE '%{$s}%'");
        if ($check){
              while($row=mysqli_fetch_assoc($check)){
                $i = $row['disease'];
                $disease_percent[$i]+=19.5;
              }
          }
      }
      foreach($disease_percent as $x => $x_value) {
      echo  $x."  ".$x_value;
      echo "<br>";
}
      arsort($disease_percent);
      foreach($disease_percent as $x => $x_value) {
      echo  $x."  ".$x_value;
      echo "<br>";
}

    ?>
  </body>
