<!DOCTYPE html>
<html>
<head>
    <title>Exercice 1</title>
</head>
<body>
  <?php
    $fp = fopen('infoEleves.csv', 'a+');
    foreach ($_POST as $valeur) {
      fputcsv($fp, $valeur,";");
    }
    fclose($fp);
  ?>
</body>
</html>
