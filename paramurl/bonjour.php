

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
  echo "Veuillez renseigner les dates"."<br>";

} elseif(!isset($fin))
{
  echo "Veuillez renseigner une date de fin"."<br>";
}elseif (!isset($debut)){
  echo "veuillez renseigner une date de debut"."<br>";
}else {
  echo "Vous avez commencé le ". $debut ." et vous terminerez le ".$fin."<br>";
};


if (isset($langage) && isset($server)){
  echo "Vous utilisez ".$langage. " sur le serveur ".$server. "."."<br>";
}else{
  echo "pas de language? pas de serveur, Mais bien sûr! Et la marmotte....";
}

if (isset($semaine)){
  echo "Nous sommes en semaine ". $semaine. "."."<br>";
} else {
  echo "Je ne sait pas , je ne sait plus, quand nous sommes.";
}



 ?>
