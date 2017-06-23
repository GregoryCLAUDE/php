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
   $civility = $_POST["civility"];

      echo "Bonjour ".$civility." ".$fname. " ". $name."."."<br>";
      echo "Hello ".$civility. " " .$nom. " " .$prenom."."."<br>";

    ?>
  </body>
</html>
