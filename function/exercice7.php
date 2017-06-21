<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<?php
  function present($age, $genre){

    echo "Je suis $genre et je suis $age";
  }

 ?>

 <?php
 present("majeur", "un homme"). "\n";
  ?>
<?php
present("mineure", "une femme"). "\n";
 ?>
<?php
present("majeure", "une femme"). "\n";
 ?>
<?php
present("mineur", "un homme"). "\n";
 ?>

</body>
</html>
