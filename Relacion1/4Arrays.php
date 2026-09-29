<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

        // Apartado 1
        const DIAS_DE_LA_SEMANA = array("Lunes","Martes","Miércoles"
        ,"Jueves","Viernes","Sabado","Domingo");

        echo DIAS_DE_LA_SEMANA[0] . "<br>";

        // Apartado 2
        for($x = 0; $x < count(DIAS_DE_LA_SEMANA); $x++){
            echo DIAS_DE_LA_SEMANA[$x], " ";
        }
        
    ?>
    
    <!-- Apartado 3 -->
    <ol>
        <?php 

            for($x = 0; $x < count(DIAS_DE_LA_SEMANA); $x++){
                echo "<li>" . DIAS_DE_LA_SEMANA[$x] . "</li>";
            }

        ?>
    </ol>

</body>

</html>