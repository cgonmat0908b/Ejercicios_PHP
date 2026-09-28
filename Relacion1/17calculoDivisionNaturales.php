<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <?php  
    
        $num1 = 300;
        $num2 = 8;
        $control = $num1;
        $contador = 0;

        while($control > $num2){
            $control -= $num2;
            $contador++;
        }

        echo "Resultado de la división de $num1 y $num2: $contador";
    
    ?>

</body>

</html>