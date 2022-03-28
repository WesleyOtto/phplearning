<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis php</title>
</head>

<body>

    <!-- VARIAVEIS
        Comentário : /* */ 

        Tipos de Variáveis em php : string, int, float, boolean, php
        não precisamos tipar, pois a tipagem é dinamica

        Declarações: 

        - Iniciar com o caracter $
        - não pode conter espaços ou carteres especiais (com excessão do underline)
        - casesensitive 
        - não podemos utilizar numeros no começo das variáveis : $1endereco

        exemplo: 
        $nome 
        $fone1 

        Constantes

        define('BD_URL','endereco_bd_dev')
     -->

     <?php

        define('BD_URL','endereco_bd_dev');
        //String
        $nome = 'Wesley Otto Garcia Utsunomiya';
     
        //inteiro
        $idade = 26;

        //float
        $peso = 79.90;

        //boolean
        $fuma = true; //true == 1 , false == vazio
     ?>

    <h1>Ficha Cadastral</h1>
    <br>
    
    <p>Nome: <?= $nome ?> </p>
    <p>Idade: <?= $idade ?> anos </p>
    <p>Peso: <?= $peso ?> kg </p>
    <p>Fumante: <?= $fuma ?> </p>
    <p><?php  echo BD_URL  ?></p>
    
    
</body>

</html>