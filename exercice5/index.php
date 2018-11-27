<?php
$dateStart = new Datetime(2016-5-16);
$date = new Datetime();
$dateCalcul = $dateStart->diff($date);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 5 php Partie 9</title>
    </head>
    <body>
        <p>depuis le 16 mai 2016 il s'est passé <?= $dateCalcul->format('%a'); ?> jours</p>
    </body>
</html>