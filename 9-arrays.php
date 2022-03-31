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
    
        //Sequenciais (numericos)

        //Forma 1   $lista_frutas = array('Banana', 'Maça', 'Morango', 'Uva', 'Abacate');
       
        //Forma 2
        $lista_frutas  = ['Banana', 'Maça', 'Morango', 'Uva', 'Abacate'];
        $lista_frutas [] = 'Abacaxi';

        /*
        echo '<pre>';
            var_dump($lista_frutas);
        

        echo '<hr>';

        echo '<pre>';
            print_r($lista_frutas);
        echo '</pre>';

        echo $lista_frutas[2];
        */

        //associativos
        $lista_frutas2  = array( 
            'a' => 'Banana', 
            'b' =>'Maça',
            'c' => 'Morango',
            'd' => 'Uva', 
            'e' =>'Abacate');
        
        echo '<pre>';
            var_dump($lista_frutas2);
        echo '<\pre>';

        echo $lista_frutas2['d'];
    ?>
</body>
</html>