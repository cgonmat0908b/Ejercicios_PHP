<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php  
    
    # Decimal a Binario
    # Variables
    $decimal = 49012;
    $dividendo = $decimal;
    $restos = array();
    $bin = "";
    $finalizado = false;

    /*En el while, divido el número entre 2 
    hasta que el dividendo sea 0 o 1.
    Guardo en un array el resto(0 o 1) y en otra el 
    resultado del dividendo entre 2
    */
    while(!$finalizado){
        array_push($restos , ($dividendo % 2));
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
    for($i = count($restos) - 1; $i >= 0; $i--){
        $bin = $bin . (String) ($restos[$i]);
    }

    echo "El decimal $decimal es en binario: $bin <br>";

    # Decimal a octal
    # Variables
    $dividendo = $decimal;
    $restos = array();
    $octal = "";
    $finalizado = false;

    while(!$finalizado){
        array_push($restos , ($dividendo % 8));
        $dividendo = (int) ($dividendo / 8);

        if($dividendo == 1 || $dividendo == 0){
            $finalizado = true;
        }
    }

    if($dividendo != 0){
        $octal = $octal . $dividendo;
    }

    for($i = count($restos) - 1; $i >= 0; $i--){
        $octal = $octal . (String) ($restos[$i]);
    }

    echo "El decimal $decimal es en octal: $octal <br>";
    
    # Decimal a hexadecimal
    # Variables
    $dividendo = $decimal;
    $restos = array();
    $hexadecimal = "";
    $finalizado = false;

    while(!$finalizado){
        array_push($restos , ($dividendo % 16));
        $dividendo = (int) ($dividendo / 16);

        if($dividendo == 1 || $dividendo == 0){
            $finalizado = true;
        }
    }


    for($i = count($restos) - 1 ; $i >= 0; $i--){
        if($restos[$i] > 9 && $restos[$i] < 16){
            switch($restos[$i]){
                case 10:
                    $hexadecimal = $hexadecimal . "A";
                    break;

                case 11:
                    $hexadecimal = $hexadecimal . "B";
                    break;

                case 12:
                    $hexadecimal = $hexadecimal . "C";
                    break;

                case 13:
                    $hexadecimal = $hexadecimal . "D";
                    break;

                case 14:
                    $hexadecimal = $hexadecimal . "E";
                    break;

                case 15:
                    $hexadecimal = $hexadecimal . "F";
                    break;
                    
            }
        }else{
            $hexadecimal = $hexadecimal . (String) ($restos[$i]);
        }
        
    }

    echo "El decimal $decimal es en hexadecimal: $hexadecimal";

    ?>

    
</body>

</html>