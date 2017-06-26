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
    $info = $_SERVER["REMOTE_ADDR"];
    $server = $_SERVER["SERVER_NAME"];
    $session = $_SERVER["HTTP_USER_AGENT"];
    ?>
</div>

<div class="container">
  <?php
    global $user;
    $user= array( "name"=> "Dalors", "firstname"=>"omer","age=>24");
    echo "user agent : ".$session ."<br/>";
    echo "ip : ".$info ."<br/>";
    echo "server name : ".$server."<br/>";
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

<a href="sendcookie.php">cookies de jordan</a>


  </body>
</html>
