<?php

function compare($a, $b){
  if ($a<$b){
    echo "Le second est le plus grand";
  }elseif ($b<$a) {
    echo "Le premier est le plus grand";
  }else {
    # code...
    echo "les deux sont egaux";
  }
}

compare(1,2) "\n";

compare(4,3) "\n";

compare(5,5) "\n";


 ?>
