<?php
    setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
    $date = strftime('%A %d %B %Y');;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 3 php Partie 9</title>
    </head>
    <body>
        <p>Aujourd'hui nous somme le : <?= $date ?></p>
    </body>
</html>