<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
</head>
<body>
    <?php
      echo("<h2>Profil ".$_SESSION["statut"]."</h2>");
      echo("<p>Bienvenue ".$_SESSION["nom"]." ".$_SESSION["prenom"]."</p>");
      if($_SESSION["statut"] == "élève"){
        echo("<p>Vous êtes né le : ".$_SESSION["date"]."</p><p>Vous êtes dans la maison ".$_SESSION["maison"]."</p><p>Vous avez actuellement ".$_SESSION["points"]." points</p><p>Votre pseudo est : ".$_SESSION["login"]."</p>");
      } else {
        echo("<p>Vous enseignez la matières ".$_SESSION["matiere"]."</p><p>Votre pseudo est : ".$_SESSION["login"]."</p>");
      }
    ?>

    <form method="POST" action="connexion.php">
      <input type="submit" name="OUT" value="déconnexion"/>
    </form>

</body>
</html>
