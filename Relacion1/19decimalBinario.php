<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php  
    
    # Variables
    $decimal = 5534;
    $dividendo = $decimal;
    $resto = array();
    $bin = "";
    $finalizado = false;

    /*En el while, divido el número entre 2 
    hasta que el dividendo sea 0 o 1.
    Guardo en un array el resto(0 o 1) y en otra el 
    resultado del dividendo entre 2
    */
    while(!$finalizado){
        array_push($resto , ($dividendo % 2));
        $dividendo = (int) ($dividendo / 2);

        if($dividendo == 1 || $dividendo == 0){
            $finalizado = true;
        }
    }

    # Si el número sobrante es 1, lo pongo como primer número bin
    if($dividendo == 1){
        $bin = $bin . "1";
    }

    /* Recorro el array concantenando al resultado
    el número que hay en esa posición del array hasta 
    recorrerlo por completo
    */
    for($i = count($resto); $i >= 0; $i--){
        $bin = $bin . (String) ($resto[$i]);
    }

    echo "El decimal $decimal es en binario: $bin";

    ?>

    
</body>

</html>