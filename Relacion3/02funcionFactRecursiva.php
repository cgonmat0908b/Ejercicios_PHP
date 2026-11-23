<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php  

        function factorial(int $num){
            $contador = $num;
            $acum = $num;
            
            echo("<p>Factorial: " . $num . "</p>");

            if($num > 0){
                while($contador > 1){
                    $contador--;
                    echo("<p>" . $acum . "*" . $contador);
                    $acum = $acum * $contador;
                    echo("=" . $acum . "</p>");
                }

            }else{
                echo("Número invalido");
            }
        }
    
        factorial(5);

        function factorialRecursivo(int $num){
            if($num == 0){
                return 1;
            }
            return $num * factorialRecursivo($num - 1);
            
        }

        echo "Con recursividad, el factorial de 5 es: " . factorialRecursivo(5);
    ?>
    
</body>

</html>