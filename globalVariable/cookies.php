<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>cookies</title>
  </head>
  <body>

    <?php
    if(isset($_COOKIE["cookie"])){
      foreach ($_COOKIE["cookie"] as $name => $value) {
        $name = htmlspecialchars($name);
        $value = htmlspecialchars($value);
        echo " $name : $value <br />\n";
      }
    }
    ?>
  </body>
</html>
