<?php
setcookie("login", $_POST["login"] );
setcookie("password", $_POST["password"]);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>envoie de cookie</title>
  </head>
  <body>

<div class="container">

<form  method="post">

  login : <input type="text" name="login" value="jean"><br/>
  mot de passe : <input type="password" name="password" value="azert1234"><br/>

  <button type="submit" name="button">connexion</button>

</form>

</div>

</body>
</html>
