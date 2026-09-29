<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php 
    
        $evaluaciones = array("Inicial" => 0.1 , "Primera" => 0.3
        , "Segunda" => 0.3 , "Tercera" => 0.3);

        $notasCristian = array("Inicial" => 5, "Primera" => 10
        , "Segunda" => 7 , "Tercera" => 3);

        $notaFinal = 0;

        foreach($evaluaciones as $ev => $rubrica){
            $notaFinal = $notaFinal + $notasCristian[$ev] * $rubrica;
        }

        echo "Nota de Cristian: " . $notaFinal;

    ?>
    
</body>

</html>