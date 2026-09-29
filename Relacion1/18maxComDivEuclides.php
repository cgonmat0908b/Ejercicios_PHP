<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php  
    
        $num1 = 152334;
        $num2 = 181533;

        $encontrado = false;

        echo "El máximo común divisor de $num1 y $num2 es: ";
        
        while(!$encontrado){
            if($num1 > $num2){
                $num1 -= $num2;

            }else if($num1 < $num2){
                $num2 = $num2 - $num1;

            }else{
                $encontrado = true;
            }
        }

        echo $num1;
    
    ?>
    
</body>

</html>