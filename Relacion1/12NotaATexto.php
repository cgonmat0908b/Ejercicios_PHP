<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php  
    
        $nota = (int) 4.99;
        $evaluacion = "";

        if($nota > 0 || $nota < 11){
            if($nota < 5 && $nota >=1){
            $evaluacion = "Suspenso";

            }else if($nota == 5){
                $evaluacion = "Aprobado";

            }else if($nota == 6){
                $evaluacion = "Bien";

            }else if($nota == 7 || $nota == 8){
                $evaluacion = "Notable";

            }else{
                $evaluacion = "Sobresaliente";
            }

            echo("Tienes un: " . $evaluacion);

        }else{
            echo("Nota introducida invalida");
        }
        
    ?>
    
</body>

</html>