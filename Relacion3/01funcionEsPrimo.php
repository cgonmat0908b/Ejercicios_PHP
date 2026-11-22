<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

        $numero = 100;

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
        
        if(esPrimo($numero)){
            echo "<p>El número $numero es primo";
        }else{
            echo "<p>El número $numero no es primo";
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

        $primos = primos($numero);

        function mostrarArray(array $nums){
            for($i = 0; $i < count($nums); $i++){
                echo "$nums[$i]-";
            }
        }

        echo "<p>Primos entre 2 y $numero:<br>";
        mostrarArray($primos);

    ?>
    
</body>

</html>
