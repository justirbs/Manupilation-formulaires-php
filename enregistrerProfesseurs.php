<!DOCTYPE html>
<html>
<head>
    <title>Exercice 2</title>
</head>
<body>
  <?php
    $fp = fopen('./infoProfesseurs.csv', 'a+');
    fputcsv($fp, $_POST,";");
    fclose($fp);
  ?>
  <h2>Le professeur a bien été enregistré</h2>
  <a href="inscriptionProfesseurs.php">Revenir à la page précédente</a>
</body>
</html>
