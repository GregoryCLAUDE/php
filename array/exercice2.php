<?php
//exercice 5
$hdf =array(
  "02" => "Aisne",
  "59" => "Nord",
  "60" => "Oise",
  "62" => "Pas-de-Calais",
  "80" => "Somme"
);
  //exercice 6
  echo $hdf[59]. "<br>";
//exercice 7
  $hdf[51] = "marne";
//exercice 9
  print_r($hdf). "\n";
  //exercice 10

  foreach ($hdf as $k => $v){
    echo "le departement $v à le numéro $k.\n". "<br>" ;
    $i++;
  }
 ?>
