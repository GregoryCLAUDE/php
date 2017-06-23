<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>inscription</title>
  </head>
  <body>
    <?php
    $genre = $_POST["civility"];
    $name = $_POST["name"];
    $firstname = $_POST["firstname"];
    $file = pathinfo($_POST["fichier"]);
    $fileName = $file["filename"];
    $fileType = $file["extension"];
     ?>
    <form  action="user.php" method="get">
      <p>Formulaire en Get</p>
      <select  name="civility">
        <option value="Monsieur">Monsieur</option>
        <option value="Madame">Madame</option>
      </select>
        nom : <input type="text" name="nom" value="">
        prenom : <input type="text" name="prenom" value="">

        <button type="submit" name="button">envoyer</button>
    </form>
<form class="" action="user.php" method="post" enctype="multipart/form-data">
  <p>Form in post</p>
    <select  name="civility">
        <option value="Monsieur">Monsieur</option>
        <option value="Madame">Madame</option>
    </select>
    nom : <input type="text" name="name" value="">
    prenom : <input type="text" name="firstname" value="">
    <p>
      Formulaire d'envoi de fichiers : <br/>
      <input type="file" name="fichier" /><br/>
    </p>
    <button type="submit" name="button">send</button>
</form>
<?php
  if (empty($name)||empty($firstname)) {
echo "
    <form action='index.php' method='post'>
      <p>Form </p>
        <select  name='civility'>
            <option value='Monsieur'>Monsieur</option>
            <option value='Madame'>Madame</option>
        </select>
        nom : <input type='text' name='name'>
        prenom : <input type='text' name='firstname'>
        <p>
          Formulaire d'envoi de fichiers : <br/>
          <input type='file' name='fichier' /><br/>
        </p>

        <button type='submit' name='button'>send</button>
    </form>";
  }else {
    echo $genre. "<br>".$firstname. "<br>".$name."<br>";
    echo $fileName."<br/>";
    echo $fileType."<br/>";
    print_r ($file);
  }

 ?>
  </body>
</html>
