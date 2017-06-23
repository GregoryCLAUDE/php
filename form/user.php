<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>page utilisateur</title>
  </head>
  <body>
   <?php
   $name = $_GET["nom"];
   $fname = $_GET["prenom"];
   $nom = $_POST["name"];
   $prenom = $_POST["firstname"];

      echo "Bonjour ".$fname. " ". $name."."."<br>";
      echo "Hello ". $nom. " " .$prenom."."."<br>";

    ?>
  </body>
</html>
