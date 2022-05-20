<!-- ## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php 

$classe = [//primo livello

    [//secondi livelli
        "nome" => "Giulia",
        "cognome" => "Migliore",
        "voti" => [8,6,7]
        
    ],
    [
        "nome" => "Luca",
        "cognome" => "Militello",
        "voti" => [6, 7 , 4]

    ],
    [

        "nome" => "Andrea",
        "cognome" => "Loffredo",
        "voti" => [5, 8, 6]


    ],

    [

            "nome" => "Francesco",
            "cognome" => "Nocera",
            "voti" => [9,6,7]
    
    
            ]

     ];
//dumbo a schermo la struttura dati
     var_dump($classe);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack7</title>
</head>
<body>
     <!-- stampo a schermo la pagella della classe -->

     <h3>Pagella della classe:</h3>

    <ul>
    <!-- imposto un ciclo for in modo da stampare le singole pagelle degli alunni -->
    <?php for($i=0; $i <= count($classe) - 1; $i++): ?>

        <!-- dichiaro una variabile dove inserisco la media voto degli alunni -->
        <?php $average_value = array_sum($classe[$i]["voti"]) / count($classe[$i]["voti"])?>

        <!-- stampo su schermo nome, cognome e media voto di ciascun alunno -->
        <li><?php echo $classe[$i]["nome"]. ' ' .$classe[$i]["cognome"]. ' -  media voto: '. $average_value; ?></li>
    
    <?php endfor; ?>

    </ul>
    
</body>
</html>