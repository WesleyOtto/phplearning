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
    
        $lista_coisa = [];

        $lista_coisa ['frutas'] = array ('Banana', 'Maça', 'Morango', 'Uva', 'Abacate');
        
        echo '<pre>';
            print_r($lista_coisa);
        echo '</pre>';
    ?>
</body>
</html>