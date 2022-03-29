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
        /*
            ceil - arredonda p cima
            floor - arredonda p baixo
            round - arredonda com base nas casas decimais
            rand - gera um numero aleatorio
            sqrt - raiz quadrada
        */

        $num = 7.3;
        $num_2 = 25;

        echo ceil($num) . "<br>"."<hr>";
        echo floor($num) . "<br>"."<hr>";
        echo round($num) . "<br>"."<hr>";
        echo sqrt($num_2) . "<br>"."<hr>";
        echo rand(100,120) . "<br>"."<hr>";

    ?>
</body>
</html>