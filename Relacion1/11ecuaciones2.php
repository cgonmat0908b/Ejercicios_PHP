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
        $b = 0;
        $c = -9;

        $discriminante = ($b ** 2) - (4 * $a * $c);
        $resultado = 0;

        // Caso a == 0
        if($a == 0){
            echo("<p>No es una ecuación de segundo grado</p>");
            $resultado = -$c / $b;
            echo("<p>Resultado de la ecuación: " . $resultado . "</p>");
        
        // Caso b == 0
        }else if($b == 0){

            if(-$c / $a < 0){
                echo "<p>No se puede resolver</p>";

            }else{
                $resultado = -sqrt(-$c / $a);
                echo("<p>Resultado de la ecuación: " . $resultado . "</p>");

                $resultado = sqrt(-$c / $a);
                echo("<p>Resultado de la ecuación: " . $resultado . "</p>");

            }
            
        // Caso c == 0
        }else if($c == 0){
            $resultado = 0;
            echo("<p>Resultado de la ecuación: " . $resultado . "</p>");

            $resultado = (-$b / $a);
            echo("<p>Resultado de la ecuación: " . $resultado . "</p>");
        
        // Todos distintos de 0 con discriminante > 0
        }else if($discriminante >= 0){
            $resultado = (-$b + sqrt($discriminante)) / (2 * $a);
            echo("<p> El resultado de la ecuación de segundo grado es: " . $resultado . "</p>");

            $resultado = (-$b - sqrt($discriminante)) / (2 * $a);
            echo("<p> El resultado de la ecuación de segundo grado es: " . $resultado . "</p>");
            
        // Todos distintos de 0 y discriminante < 0    
        }else{
            echo "No se puede resolver";
        }

    ?>

</body>

</html>