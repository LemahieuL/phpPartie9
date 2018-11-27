<?php
$number = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 6 php Partie 9</title>
    </head>
    <body>
        <p>Dans le moi de février de l'année 2016 il y avais <?= $number ?> jours.</p>
    </body>
</html>