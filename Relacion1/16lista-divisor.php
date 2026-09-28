<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

        b{
            color: red;
        }
    </style>
</head>

<body>

    
    <?php  
    
        $num = 348;

        echo "<h2> Números divisores de 10: </h2>";

        for($i = 1; $i <= $num; $i++){
            if($num % $i != 0){
                echo($i);

            }else{
                echo("<b>$i</b>");

            }

        }
    
    ?>
    
</body>

</html>