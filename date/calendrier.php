<?php
function calendar ($month,$year)
{
  $nbday = cal_days_in_month(CAL_GREGORIAN, $month, $year);//nombre de jours dans le mois
  echo "< table class='p' >";
  for ($i=1;$nbday>=$i;$i++){
    $p = cal_to_jd(CAL_GREGORIAN, $month, $year);//formate le jour
    $dayweek = JDDayOfWeek($p);//jour de la semaine
    if($i == $nbday)//pour le dernier jour du mois
      {
      if ($dayweek == 1) //si c'est lundi on ouvre la ligne
        {
          echo "<tr>";
        }
        echo "<td class = 'plein'>".$i."<td><tr>";//on crée la case et on feme la ligne
      }elseif ($i == 1) // si c'est le premier jour du mois
        {
          echo "<tr>"; //ouverture de ligne
          if ($dayweek == 0)//si c'est dimanche
            {
              $dayweek =7;// on affecte la valeur 7 a la variable
            }
            for ($b= 1;$b!= $dayweek;$b++)
              {
                echo "<td></td>";//on rajoute des jours vide devant le premier jour
              }
          echo "<td class='full'>".$i."<td>";// pour ajouter la case

      if ($dayweek == 7)//si c'est un dimanche

        {
          echo "</tr>";//on ferme la ligne
        }
    }
    else
    {
      if($dayweek == 1)// si c'est un lundi
        {
          echo "<tr>";//on ouvre la ligne
        }
        echo "<td class='full'>".$i."</td>"; // ajout de la case

        if($dayweek == 0)// si c'est un dimanche
          {
            echo "</tr>"; // on ferme la ligne
          }
    }

  }
echo "</table>"; // on ferme la table
}

function month ($nb)
{
  $key = $nb -1;
  $ap = ["Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Decembre"];
  return $ap[$key];
}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>calendrier</title>
  </head>
  <body>
    <label for="month">mois</label>
    <input type="text" name="month" id="month" >
    <label for="year">année</label>
    <input type="text" name="year" id="year">
    <button type="button" name="button">valider</button>

    <table>
      <tr>
        <td></td>
      </tr>
    </table>
    <p><?php echo $today ?></p>
  </body>
</html>
