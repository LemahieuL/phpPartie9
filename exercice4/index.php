<?php
$timestamp = time();
//$timePast = mktime(15,0,0,8,2,2016); 1470142800
$timePast = strtotime(date('8/2/2016 15:00:00'));
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 4 php Partie 9</title>
    </head>
    <body>
        <p>Le time stamp jusqu'a aujourd'hui est de : <?= $timestamp ?></p>
        <p>Le time stamp jusqu'au 2 août 2016 à 15h00 est de : <?= $timePast ?></p>
    </body>
</html>