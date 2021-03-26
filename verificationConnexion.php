<!DOCTYPE html>
<html>
<head>
    <title>Exercice 3</title>
</head>
<body>
  <?php
    if (($handle = fopen("infoEleves.csv", "r"))) {
    while (($data = fgetcsv($handle, 1000, ","))) {
        echo $data[0]."</br>";
        echo $data[1]."</br>";
        echo $data[2]."</br>";
    }
    $array1 = explode($data[0], ";");
    $array2 = explode($data[1], ";");
    $array3 = explode($data[2], ";");
    echo("<br/><br/>Tableau 1 : ");
    foreach ($array1 as $value) {
      echo("<br/>".$value);
    }
    echo("<br/><br/>Tableau 2 : ");
    foreach ($array2 as $value) {
      echo("<br/>".$value);
    }
    echo("<br/><br/>Tableau 3 : ");
    foreach ($array3 as $value) {
      echo("<br/>".$value);
    }

    fclose($handle);
    }

  ?>
</body>
</html>
