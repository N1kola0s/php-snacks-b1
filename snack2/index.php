<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

//dumbo i parametri passati tramite GET

/* var_dump($_GET);
var_dump($_GET["name"]);
var_dump($_GET["mail"]);
var_dump($_GET["age"]); */

//inserisco i parametri in variabili
$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack2</title>
</head>
<body>
<!-- imposto le tre condizioni -->
    <?php if(strlen($name) > 3 && (strpos($mail, ".")) && (strpos($mail,"@")) &&  (is_numeric($age) == true )) : ?>

        <!-- in caso la verifica delle tre condizioni dia esito positivo mi restituirà il messaggio...: -->
        <h1>Accesso riuscito</h1>
    <?php else : ?>
        <!-- in caso negativo mi restituirà il messaggio...: -->
        <h1>Accesso negato</h1>
    <?php endif; ?>

</body>
</html>