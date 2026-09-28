<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php  
    
        $num = (int) 8;
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

    ?>
    
</body>

</html>