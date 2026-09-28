<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php  
    
        $n = 10;
        $acum = 0;

        for($i = 1; $i <= $n; $i++){
            $acum += $i;
        }

        echo("La suma de los " . $n . " primeros número es: " . $acum);
    
    ?>
    
</body>

</html>