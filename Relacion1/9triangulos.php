<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

        $lado1 = 5;
        $lado2 = 7;
        $lado3 = 5;

        if($lado1 == $lado2 && $lado1 == $lado3){
            echo "Triangulo equilatero";

        }else if(($lado1 == $lado2 || $lado1 == $lado3)
        && ($lado1 != $lado2 || $lado1 != $lado3)){
            echo "Triangulo isosceles";

        }else{
            echo "Triangulo escaleno";
        }

    ?>
    
</body>

</html>