<!-- 
    ## Snack 6

Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

 -->

 <?php 

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

    /* var_dump($db); */




?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>snack6</title>
 </head>
 <body>
   <!-- imposto un ciclo foreach che mi restituisca come valori teachers e pm dalla struttura dati -->
    <?php foreach($db as $key =>$data) : ?>
        <!-- imposto con un operatore ternario una condizione in cui se $key è uguale a 'teachers' allora il background sarà grigio altrimenti nel caso restituisca 'PM' stampiamo un rettangolo verde. -->
    <div style="background-color: <?php echo $key === 'teachers' ? 'gray' : 'green' ?>">

        <!-- stampiamo la $key (che sarà o 'teachers' o 'pm' da struttura dati) -->
        <div><?php echo $key?></div>
        <ul>
            <!-- con un foreach cicliamo all'interno dell'array al livello inferiore, in corrispondenza di teachers o pm -->
            <?php foreach ($data as $user):?>
                <li>
                    <!-- stampiamo a schermo il valore della chiave 'name' e di 'lastname' -->
                    <?php echo $user['name'] . ' ' . $user['lastname'] ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php endforeach; ?>

             

                
            

            

            

            

     
     
 </body>
 </html>
 
 