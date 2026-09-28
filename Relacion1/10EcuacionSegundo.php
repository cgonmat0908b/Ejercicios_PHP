<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    
        $a = 1;
        $b = -5;
        $c = 6;

        $discriminante = ($b ** 2) - (4 * $a * $c);
        $resultado = 0;

        if($discriminante >= 0){

            $resultado = (-$b + sqrt($discriminante)) / (2 * $a);
            echo("<p> El resultado de la ecuación de segundo grado es: " . $resultado) . "</p>";

            $resultado = (-$b - sqrt($discriminante)) / (2 * $a);
            echo("<p> El resultado de la ecuación de segundo grado es: " . $resultado) . "</p>";

        }else{
            echo "No se puede resolver";
        }

    ?>

</body>

</html>