

<p>Bonjour <?php echo $_GET['prenom'] . ' ' . $_GET['nom']; ?> !</p>

<?php
$nom = $_GET["nom"];
$prenom = $GET["prenom"];
$age = $GET["age"];
$debut = $_GET["dateDebut"];
$fin = $_GET["dateFin"];
$langage = $_GET["langage"];
$server = $_GET["server"];
$semaine = $_GET["semaine"];
$batiment = $_GET["batiment"];
$salle = $_["salle"];

if(isset($age))
{
  echo "Bonjour " .$prenom." ".$nom. " tu as " .$age." ans! "."<br>";
}
else
{
  echo "veuillez renseigner votre age, merci. "."<br>";
};

if(!isset($debut) && !isset($fin))
{
  echo "Veuillez renseigner les dates";

} elseif(!isset($fin))
{
  echo "Veuillez renseigner une date de fin"."<br>";
}elseif (!isset($debut)){
  echo "veuillez renseigner une date de debut";
}else {
  echo "Vous avez commencé le ". $debut ." et vous terminerez le ".$fin."<br>";
};


if (isset($langage) & ($server)){
  echo "Vous utilisez ".$langage. " sur le serveur ".$server. ".";
}

 ?>
