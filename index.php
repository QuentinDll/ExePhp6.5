<?php
// declaration du tableaux
$state = array(
  '02' => 'Aisne',
  '59' => 'Nord',
  '60' => 'Oise',
  '62' => 'Pas-de-Calais',
  '80' => 'Somme'
);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 6</title>
    </head>
    <body>
        <?php
        // affichage de la valeur avec pour key 59
        echo $state['59'];
        ?>
    </body>
</html>
