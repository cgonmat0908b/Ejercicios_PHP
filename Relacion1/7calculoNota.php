<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>

    <?php 
    
        $nota1 = 10;
        $nota2 = 7;
        $faltasInjustificadas = 4;

        $notaFinal = ($nota1 + $nota2) / 2 - ($faltasInjustificadas * 0.25);
        echo "<p>Nota final: " . $notaFinal . "</p>";

        if($notaFinal > 5){
            echo "<p> Aprobado </p>";
        }else{
            echo "<p> Suspenso </p>";
        }

    ?>

</body>
</html>