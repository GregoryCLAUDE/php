<?php
$today = date("d-m-y");
for ($date = strtotime)
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
    <p><?php echo $today ?></p>
  </body>
</html>
