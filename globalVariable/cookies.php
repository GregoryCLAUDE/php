
<?php
setcookie("login", $_POST["login"] );
setcookie("password", $_POST["password"]);
$_COOKIE["login"] =  $_POST["login"];
$_COOKIE["password"]= $_POST["password"]  ;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>cookies</title>
  </head>
  <body>

    <?php
    $login = $_COOKIE["login"];
    $pwd= $_COOKIE["password"];
    username : echo "nom : ".$login ."<br/>";
    password : echo "password : ".$pwd ."<br/>";


    ?>
    <a href="sendcookie.php" type="button" >retour</a>
  </body>
</html>
