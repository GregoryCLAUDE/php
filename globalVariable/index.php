<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>logpage</title>
  </head>
  <body>

    <div class="container">
    <?php
//exercice1//
    $info = $_SERVER["SERVER_ADDR"];
    $server = $_SERVER["SERVER_NAME"];
    $session = $_SERVER["HTTP_USER_AGENT"];

    global $user;
    $user= array( "name"=> "Dalors", "firstname"=>"omer","age=>24");
    echo $session ."<br/>";
    echo $info ."<br/>";
    echo $server."<br/>";
    ?>
  </div>
<div class="container">


  <?php
//exercice 2//
session_start();
$_SESSION["name"]= "dalors";
$_SESSION["firstname"]= "Omer";
$_SESSION["age"] = "24";
echo $_SESSION["firstname"]." " .$_SESSION["name"]." tu as ".$_SESSION["age"]." ans."."<br/>";

?>

  <a href="target.php?<?php echo htmlspecialchars(SID);?>">pour continuer</a>
</div>
<div class="container">
  <?php
setcookie("name","dalors" );
setcookie("firstname", "omer");
setcookie("age", 23);

echo $_COOKIE["name"];

   ?>
<a href="cookies.php?<?php echo htmlspecialchars(SID);?>">page des cookies</a>
</div>

  </body>
</html>
