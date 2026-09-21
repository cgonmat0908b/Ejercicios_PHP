<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3, SuperGlobals</title>

    <style>
        b{
            color: red;
        }
    </style>

</head>

<body>
    
    <h1>SuperGlobals</h1>
    <!-- Creamos la lista fuera del php por comodidad, se podría crea dentro
    pero es más incomodo -->
    <ul>
        <!-- Etiqueta de apertura php --> 
        <?php
        // En todos los echo usamos las etiquetas html entre " " y usamos <b> para hacerla negrita y con style le damos color
        echo "<li><b>Raiz:</b> " . $_SERVER['DOCUMENT_ROOT'] . "<br></li>";
        echo "<li><b>Archivo:</b> " . $_SERVER['PHP_SELF'] . "<br></li>";
        echo "<li><b>Servidor:</b> " . $_SERVER['SERVER_NAME'] . "<br></li>";
        echo "<li><b>Software servidor:</b> " . $_SERVER['SERVER_SOFTWARE'] . "<br></li>";
        echo "<li><b>Protocolo:</b> " . $_SERVER['SERVER_PROTOCOL'] . "<br></li>";
        echo "<li><b>Host:</b> " . $_SERVER['HTTP_HOST'] . "<br></li>";
        echo "<li><b>Navegador:</b> " . $_SERVER['HTTP_USER_AGENT'] . "<br></li>";
        echo "<li><b>IP cliente:</b> " . $_SERVER['REMOTE_ADDR'] . "<br></li>";
        echo "<li><b>Puerto Cliente:</b> " . $_SERVER['REMOTE_PORT'] . "<br></li>";
        echo "<li><b>Ruta Archivo:</b> " . $_SERVER['SCRIPT_FILENAME'] . "<br></li>";
        echo "<li><b>URL Solicitada:</b> " . $_SERVER['REQUEST_URI'] . "<br></li>";

        ?>

    </ul>

    <?php

    // Volcado con var_Dump()
    var_dump($_SERVER);

    // Volcado con print_r()
    print_r($_SERVER);

    ?>

</body>

</html>