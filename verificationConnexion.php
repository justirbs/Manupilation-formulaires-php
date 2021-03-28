<!DOCTYPE html>
<html>
<head>
    <title>Exercice 3</title>
</head>
<body>
  <?php
  function recupInfoEleves(){
    $row = 1;
    $tabEleves = array();
    if (($handle = fopen("infoEleves.csv", "r")) !== FALSE) {
      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        if($row > 1){
          for ($c=0; $c < $num; $c++) {
            $array = explode(";", $data[$c]);
            $tabEleves += [$array[5] => $array[6]];
          }
        }
        $row++;
      }
      fclose($handle);
    }
    return($tabEleves);
  }

  function recupInfoProfs(){
    $row = 1;
    $tabProfs = array();
    if (($handle = fopen("infoProfesseurs.csv", "r")) !== FALSE) {
      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        for ($c=0; $c < $num; $c++) {
          $array = explode(";", $data[$c]);
          $tabProfs += [$array[3] => $array[4]];
        }
        $row++;
      }
      fclose($handle);
    }
    return($tabProfs);
  }


  function verification(){
    $tabEleves = recupInfoEleves();
    $tabProfs = recupInfoProfs();
    $estValide = 0;

    foreach ($tabEleves as $login => $mdp) {
      if($_POST["identifiant"] == $login  &&  $_POST["mdp"] == $mdp) {
        $estValide = 1;
      }
    }

    foreach ($tabProfs as $login => $mdp) {
      if($_POST["identifiant"] == $login  &&  $_POST["mdp"] == $mdp) {
        $estValide = 2;
      }
    }
    return($estValide);
  }


  $estValide = verification();
  switch ($estValide) {
    case '0':
      header('Location: connexion.php?erreur=erreur');
      exit();
      break;
    case '1':
      header('Location: accueil.php');
      exit();
      break;
    case '2':
      header('Location: accueil.php');
      exit();
    default:
      echo("erreur");
      break;
  }


  ?>
</body>
</html>
