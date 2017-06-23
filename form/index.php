<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>inscription</title>
  </head>
  <body>
    <form  action="user.php" method="get">
        nom : <input type="text" name="nom" value="">
        prenom : <input type="text" name="prenom" value="">

        <button type="submit" name="button">envoyer en get</button>
    </form>
<form class="" action="user.php" method="post">
    nom : <input type="text" name="name" value="">
    prenom : <input type="text" name="firstname" value="">

    <button type="submit" name="button">send in post</button>
</form>
  </body>
</html>
