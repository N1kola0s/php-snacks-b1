<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
//dichiaro un array vuoto
$array = [];

//imposto un ciclo for
for($i=0; count($array) < 15; $i++){

    //dichiaro variabile in cui inserisco dei numeri randomici da 1 a 100

    $number = rand(1, 100);

    //imposto condizione in cui verifico se il numero non è presente nell'array e in caso positivo lo pusho
     if(!in_array($number, $array)){

        array_push($array, $number);

    }
}

//dumpo il contenuto dell'array
    var_dump($array);

?>