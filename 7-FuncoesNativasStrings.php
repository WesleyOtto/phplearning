<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $texto = "Quando você diz “Eu te amo”, 
        está fazendo uma promessa com o coração de alguém. Tente honrá-lo.";

        echo $texto . '<br>'.'<hr>';
        
        echo strtolower($texto). '<br>'.'<hr>';

        echo strtoupper($texto). '<br>'.'<hr>';

        echo ucfirst($texto). '<br>'.'<hr>';

        echo str_replace("amo", "odeio", $texto). '<br>'.'<hr>';

        echo substr($texto,0 ,17). '<br>'.'<hr>';
    ?>


</body>
</html>