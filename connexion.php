<!DOCTYPE html>
<html>
<head>
    <title>Exercice 3</title>
</head>
<body>
  <h2>Veuillez vous connecter :</h2>
  <form id="formulaire" method="post" action="verificationConnexion.php">
    <p>Identifiant : <input type="text" id="identifiant" name="identifiant"/></p>
    <p>Mot de passe : <input type="password" id="mdp" name="mdp"/></p>
  	<p><input type="submit" value="Valider" id="boutonValider" class="btn"/></p>
  </form>

  <?php
    if(!empty($_GET)){
      echo("<p style='color:red'>Il y a une erreur dans l'identifiant et/ou dans le mot de passe</p>");
    }
  ?>
</body>
</html>
