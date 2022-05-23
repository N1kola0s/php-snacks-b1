<!-- ## Snack 3

Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
 -->

 <?php

 $posts = [

    '10-01-2019' => [

        'title' => 'Post 1',
        'author' => 'Michele Papagni',
        'text' => 'Testp post 1'

    ],
    '11-01-2019' => [

        'title' => 'Post 2',
        'author' => 'Michele Papagni',
        'text' => 'Testp post 2'

    ],
    '12-01-2019' => [

        'title' => 'Post 3',
        'author' => 'Michele Papagni',
        'text' => 'Testp post 3'

    ],
    '13-01-2019' => [

        'title' => 'Post 4',
        'author' => 'Michele Papagni',
        'text' => 'Testp post 4'

    ]
    ];

 var_dump($posts);


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
     

        <?php foreach ($posts as $key => $value ) : ?>

            <ul><?php echo $key?>

                <li><?php foreach() ?>
            
                <?php endforeach; ?>
                </li>

        
        
            </ul>

        <?php endforeach; ?>
    
       
     
 </body>
 </html>
