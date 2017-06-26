<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      //exercice 1
      <li><?php date_default_timezone_get("UTC");
      echo "today : ".date("d/m/y");?>
      </li>
      //exercice 2
      <li><?php echo "today : ".date("d-m-y");?></li>
      //exercice 3
      <li><?php echo "today : ".date("l d F Y");
      setlocale(LC_TIME, "fr_FR");?>
      </li>
      <li>
      <?php
      echo "aujourd'hui : " .strftime("%A %e %B %Y");//en français
      ?></li>
      //exercice 4
      <li>
        <?php echo strftime("%A %e %B %Y à %H:%M")?>;</li>

      //exercice 5
      <li><?php
        $dateDepart = new DateTime("16-05-2016");
        $dateFinale = new DateTime(date("d-m-y"));
        $interval = $dateFinale->diff($dateDepart);

        echo $interval->format("%a jours");?>
      </li>
      //on rajoute 20 jours a la date existante
      <li>
        <?php
        $date = strtotime(date("d-m-y"));
        $oneDay = 3600*24 ;//3600 secondes = 1heure * 24 pour une journée

        $date += 20*$oneDay; //on rajoute 20jours
        echo date("d-m-y", $date);
         ?>
        </li>
         //on remonte dans le temps
         <li>
           <?php
           $date -=22*$oneDay;
           echo date("d-m-y", $date);
            ?>
         </li>
    </ul>

    <a href="calendrier.php">vers les calendrier</a>



    

  </body>
</html>
