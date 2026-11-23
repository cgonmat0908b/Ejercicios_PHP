<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php 

        function esPrimo(int $num) : bool{
            $contadorDivisibles = 0;
            $esPrimo = false;

            for($i = 1; $i <= $num; $i++){
                if($num % $i == 0){
                    $contadorDivisibles++;
                }

                if($contadorDivisibles > 2){
                    break;
                }
            }

            if($contadorDivisibles > 2){
                $esPrimo = false;
            }else{
                $esPrimo = true;
            }

            return $esPrimo;
        }

        function primos(int $num) : array{
            $primos = [];
            for($i = 2; $i < $num; $i++){
                if(esPrimo($i)){
                    $primos[] = $i;
                }
            }
            return $primos;
        }

        function mostrarArray(array $nums){
            for($i = 0; $i < count($nums); $i++){
                echo "$nums[$i]-";
            }
        }

        function factorialRecursivo(int $num){
            if($num == 0){
                return 1;
            }
            return $num * factorialRecursivo($num - 1);
            
        }

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

        
    ?>
    
</body>

</html>