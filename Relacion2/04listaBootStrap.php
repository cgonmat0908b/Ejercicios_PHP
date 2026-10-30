<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas con BootStrap</title>

    <!-- Enlace de la hoja de estilo de bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

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
    <br>
    
    <!-- Apartado 3 -->
    <ol class="list-group">
        <?php 

            for($x = 0; $x < count(DIAS_DE_LA_SEMANA); $x++){
                if($x % 2 == 0){
                    echo "<li class='list-group-item bg-primary text-white'>" . DIAS_DE_LA_SEMANA[$x] . "</li>";
                }else{
                    echo "<li class='list-group-item bg-success text-white'>" . DIAS_DE_LA_SEMANA[$x] . "</li>";
                }
            }

        ?>
    </ol>

</body>

</html>