<!-- ## Snack 1

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 

-->

<?php

$calendario = [//primo livello

    [//secondi livelli

        "squadra_casa" => "Olimpia Milano",
        "squadra_ospite" => "Cantù",
        "punti_casa" => 55,
        "punti_ospite" => 60,
    ],
    [

        "squadra_casa" => "Juve Caserta",
        "squadra_ospite" => "Montepaschi Siena",
        "punti_casa" => 95,
        "punti_ospite" => 45,
    ],

    ];

    var_dump($calendario);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack1</title>
</head>
<body>

    <h3>Prima Giornata</h3>

    <?php for($i=0; $i <= count($calendario) - 1; $i++): ?>

    <p><?php echo $calendario[$i]["squadra_casa"]; ?> - <?php echo $calendario[$i]["squadra_ospite"]; ?> / <?php echo $calendario[$i]["punti_casa"]; ?> - <?php echo $calendario[$i]["punti_ospite"]; ?> </p>
    

    <?php endfor; ?>



</body>
</html>