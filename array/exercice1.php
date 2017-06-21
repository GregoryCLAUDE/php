<?php
$mois = array(
              "1" =>"Janvier" ,
              "2" =>"Fevrier" ,
              "3" =>"Mars",
              "4" =>"Avril",
              "5" =>"Mai",
              "6" =>"Juin",
              "7" =>"Juillet",
              "8" =>"Aout",
              "9" =>"Septembre",
              "10" => "Octobre",
              "11" => "Novembre",
              "12" => "Decembre"
            );
// exercice 2
 echo $mois[3]. "<br>";
//exercice 3
 echo $mois[5]. "<br>";
 //exercice 4
echo $mois[8]. "<br>";
$mois[8] = "Août";
echo $mois[8]. "<br>";
//exercice 8
$count = count($mois);
for ($i=0; $i<$count;$i++){
  echo $hdf[$i] ;
}
 ?>
