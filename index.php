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

</body>
</html>