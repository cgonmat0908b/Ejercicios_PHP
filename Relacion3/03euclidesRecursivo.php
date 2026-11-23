<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php  

        function euclidesDivision(int $num1, int $num2) : int{
            // Variable que guarda el mayor valor, que se dividirá en el menor,
            // se actualiza cuando se resta y se suma 1 al contador
            $control = $num1;
            // Contador es el número de veces que ocurre la resta, también, el resultado de la división
            $contador = 0;

            // Mientras que se pueda restas(mayor o igual), se resta y se añade 1 al contador
            while($control >= $num2){
                $control -= $num2;
                $contador++;
            }

            return $contador;
        }

        echo "<p>El resultado de 25 / 5 es: " . euclidesDivision(25,5) . "</p>";


        function euclidesDivisionRecursiva(int $num1, int $num2) : int{
            $contador = 0;

            if($num1 < $num2){
                return $contador;
            }

            $num1 -= $num2;

            return ++$contador + euclidesDivisionRecursiva($num1, $num2);

        }

        echo "<p>El resultado con recursividad de 25 / 5 es: " . euclidesDivisionRecursiva(25,5);
    ?>


    <?php  
    
        function maxComDivEuclides(int $num1, int $num2){
            $encontrado = false;

            while(!$encontrado){
                if($num1 > $num2){
                    $num1 -= $num2;

                }else if($num1 < $num2){
                    $num2 = $num2 - $num1;

                }else{
                    $encontrado = true;
                }
            }

            return $num1;
        }

        echo "<p>El máximo común divisor de 24 y 36 es: " . maxComDivEuclides(24,36) . "</p>";


        function maxComDivEuclidesRecursiva(int $num1, int $num2){
            if($num1 == $num2){
                return $num1;
            }

            if($num1 > $num2){
                $num1 -= $num2;
            }else if($num1 < $num2){
                $num2 -= $num1;
            }

            return maxComDivEuclidesRecursiva($num1,$num2);
        }

        echo "<p>El máximo común divisor de 24 y 36 es: " . maxComDivEuclidesRecursiva(24,36) . "</p>";

    ?>
    
</body>

</html>