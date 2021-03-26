<!DOCTYPE html>
<html>
<head>
    <title>Exercice 1</title>
</head>
<body>
  <?php
    $fp = fopen('./infoEleves.csv', 'w');
    fputcsv($fp, $_POST,";");
    fclose($fp);
  ?>
  <h2>L'élève a bien été enregistré</h2>
  <a href="inscriptionEleves.php">Revenir à la page précédente</a>
</body>
</html>
