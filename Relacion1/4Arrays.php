<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
        const DIAS_DE_LA_SEMANA = array("Lunes","Martes","Miércoles"
        ,"Jueves","Viernes","Sabado","Domingo");

        echo DIAS_DE_LA_SEMANA[0];

        for($x = 0; $x < 7; $x++){
            echo DIAS_DE_LA_SEMANA[$x];
        }

    ?>
    
</body>

</html>