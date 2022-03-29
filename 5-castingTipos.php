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

        //gettype --> retorna o tipo da variável

        $valor = 10;
        echo gettype($valor);

        //Conversão de Int --> Float
        $valor_tipo = (string)$valor; //float,real, double, string, bool, boolean, int, interger

        echo gettype($valor_tipo);
    ?>

</body>
</html>