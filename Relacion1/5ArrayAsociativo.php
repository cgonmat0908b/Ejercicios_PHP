<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php 
        // Creación de array asociativo constante
        const ASOCIATIVO = array("Lunes" => 25.4 , "Martes" => 33.7
        , "Miércoles" => 28.5 , "Jueves" => 29.7 , "Viernes" => 30.5 ,
        "Sábado" => 26.3 , "Domingo" => 27.2);

        // Apartado 1
        echo "<p>Apartado 1 </p>";
        echo "</p>Lunes: " . ASOCIATIVO["Lunes"] . "</p>";

        // Apartado 2
        echo "<p> Apartado 2 </p>";
        foreach(ASOCIATIVO  as $diaSemana => $temp){
            echo "$diaSemana: $temp <br>";
        }

    ?>

    <!-- Apartado 3 -->
    <p>Apartado 3</p>
    <ol>

        <?php 
    
            foreach(ASOCIATIVO  as $diaSemana => $temp){
                echo "<li>$diaSemana: $temp </li>";
            }

        ?>

    </ol>

    <!-- Apartado 4 -->
    <p>Apartado 4</p>

    <table border="1">

        <?php
        
            foreach(ASOCIATIVO as $diaSemana => $temp){
                echo "<tr><th>" . $diaSemana . "</th>"
                . "<td>" . $temp . "</td></tr>";
            }

        ?>
    </table>

</body>

</html>