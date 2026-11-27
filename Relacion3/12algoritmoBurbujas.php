<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

        include "./11funcioneSwap/functionsRel3.php";

        $datos = ['Pérez','García','López','Márquez','Álvarez','Domínguez','Ruíz','Díaz'];
    
        function ordenarArray(array &$arr){
            for($i = 0; $i < count($arr) - 1; $i++){
                for($f = 0; $f < count($arr) - 1 - $i; $f++){
                    if(strcasecmp($arr[$f],$arr[$f + 1]) > 0){
                        swap($arr[$f], $arr[$f + 1]);
                    }
                }
            }
        }
        
        ordenarArray($datos);

        echo implode(", ", $datos);

        // Con collator
        /*function ordenarArray(array &$arr){
            // Se crea una sola vez, antes de los bucles
            $collator = new Collator('es_ES');

            for($i = 0; $i < count($arr) - 1; $i++){
                for($f = 0; $f < count($arr) - 1 - $i; $f++){
                    if($collator->compare($arr[$f], $arr[$f + 1]) > 0){
                        swap($arr[$f], $arr[$f + 1]);
                    }
                }
            }
        }*/

    ?>
    
</body>

</html>