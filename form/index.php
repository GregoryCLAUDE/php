<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>inscription</title>
  </head>
  <body>
    <form  action="user.php" method="get">
      <p>Formulaire en Get</p>
        nom : <input type="text" name="nom" value="">
        prenom : <input type="text" name="prenom" value="">

        <button type="submit" name="button">envoyer</button>
    </form>
<form class="" action="user.php" method="post">
  <p>Form in post</p>
  
    nom : <input type="text" name="name" value="">
    prenom : <input type="text" name="firstname" value="">

    <button type="submit" name="button">send</button>
</form>
  </body>
</html>
