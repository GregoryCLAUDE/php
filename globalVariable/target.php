<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>user</title>
  </head>
  <body>
    <?php
    session_start();
    $nom = $_SESSION["name"];
    $prenom = $_SESSION["firstname"];
    $age = $_SESSION["age"];


    echo "Bienvenue ".$prenom. " ".$nom."!"."<br/>";
    echo "Déjà " .$age. " ans ! "."<br/>";
     ?>
  </body>
</html>
