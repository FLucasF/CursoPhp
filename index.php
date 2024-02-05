<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello world</h1>
    <?php 
        echo "Hello World!";
       
        $expression = false;    
    ?>

    <!-- If -->
    <?php if($expression == true): ?>
        Isso sera demostrado
    <?php else: ?> 
        senão isso irá aparecer.
    <?php endif; ?>    

    <!-- Tipos de dados -->
    <?php
        $a_bool = true; //boolean
        $a_str = "foo"; //string
        $a_str2 = 'foo'; //string
        $an_int = 12;  //inteiro

        echo get_debug_type($a_bool), "\n";
        echo get_debug_type($a_str), "\n";

        //se conter int incrementa mais 4 na variavel
        if (is_int($an_int)) {
            $an_int += 4;
        }
        var_dump($an_int);

        //se boolean for texto imprimir
        if (is_string($a_bool)) {
            echo "String: $a_bool";
        }
            var_dump($a_bool);

        
    ?>

    
</body>
</html>