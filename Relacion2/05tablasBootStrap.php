<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <title>Tabla con BootStrap</title>

    <!-- Enlace de la hoja de estilo de bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">

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

    

    <table class="table">

        <?php
            $colores = ["theme-primary","theme-accent","theme-success","theme-danger","theme-warning","theme-info","theme-inverse"];
            $contador = 0;

            foreach(ASOCIATIVO as $diaSemana => $temp){
                echo "<tr class='$colores[$contador]'><th scope='row'>" . $diaSemana . "</th>"
                . "<td>" . $temp . "</td></tr>";

                $contador++;
            }

        ?>

    </table>

    <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading…</span>
    </div>

    <span class="badge theme-primary">
        <span class="spinner-border" aria-hidden="true"></span>
        <span role="status">Loading</span>
    </span>

    <button class="btn-subtle theme-primary" type="button" disabled>
        <span class="spinner-border" aria-hidden="true"></span>
        <span role="status">Loading…</span>
    </button><br>

    <button type="button" class="btn btn-link theme-primary">Botón</button>

</body>

</html>