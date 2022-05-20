<!-- ## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php 

$classe = [//primo livello

    [//secondi livelli
        "nome" => "Giulia",
        "cognome" => "Migliore",

        "voti" => [
            "matematica" => 8,
            "italiano" => 7,
            "informatica" => 6
        ]
        
    ],
    [
        "nome" => "Luca",
        "cognome" => "Militello",

        "voti" => [

            "matematica" => 6,
            "italiano" => 7,
            "informatica" => 4

        ]

    ],
    [

        "nome" => "Andrea",
        "cognome" => "Loffredo",

        "voti" => [

            "matematica" => 5,
            "italiano" => 8,
            "informatica" => 6

        ]


    ],

    [

            "nome" => "Francesco",
            "cognome" => "Nocera",
    
            "voti" => [
    
                "matematica" => 9,
                "italiano" => 6,
                "informatica" => 7
    
            ]
    
    
            ]

     ];

     var_dump($classe);






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>