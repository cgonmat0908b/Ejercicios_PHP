<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php  
    
        $numBin = 1111001110111;
        $dividendo = $numBin;
        $resto = array();
        $decimal = 0;
        $finalizado = false;


        while(!$finalizado){
            array_push($resto , ($dividendo % 10));
            $dividendo = (int) ($dividendo / 10);

            if($dividendo == 0){
                $finalizado = true;
            }
        }

        for($i = count($resto);  $i >= 0; $i--){
            $decimal += $resto[$i] * (2 ** $i);
        }

        echo $decimal;

    ?>
    
</body>

</html>