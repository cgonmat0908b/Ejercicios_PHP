<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php  
    
        $num = 999983;
        $contadorDivisibles = 0;

        for($i = 1; $i <= $num; $i++){
            if($num % $i == 0){
                $contadorDivisibles++;
            }
        }

        if($contadorDivisibles > 2){
            echo "Número no primo";
        }else{
            echo "Número primo";
        }
    
    ?>
    
</body>

</html>