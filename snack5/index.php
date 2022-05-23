<!-- 
    ## Snack 5

Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

 -->

 <?php 

    $paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id possimus nobis recusandae ab, iste, inventore harum voluptates. temporibus minus corporis laudantium veniam hic tenetur neque. Eos ad, perspiciatis dicta maxime ab, numquam modi doloribus suscipit sit tempora voluptatum commodi rem, quis consectetur aperiam quasi culpa labore vitae asperiores earum? Deleniti!';

        var_dump($paragraph);

        $texts = explode('.', $paragraph);

        var_dump($texts);

?>



<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack5</title>
</head>
<body>
    <?php foreach($texts as $text) : ?>
        <p>Questo è un paragrafo: <?php echo $text; ?></p>
    <?php endforeach; ?>
</body>
</html>