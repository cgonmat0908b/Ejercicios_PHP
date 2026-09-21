<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola Mundo en PHP</title>
</head>

<body>

    <!-- 1 Haz un programa en PHP que muestre el mensaje “Hello world” de diferentes formas: -->

    <!-- Ejercicio  1, Texto plano-->
    <?php echo "Hello world" ;?>

    <!--  Ejercicio 2, Encabezado con H2 -->
    <h2>
        <?php echo "Hello world" ;?>
    </h2>

    <!-- Ejercicio 3, Párrafo con estilos -->
    <p style="color: blue; font-family:Verdana, Geneva, Tahoma, sans-serif; text-align:center">
        <?php echo "Hello world"?>
    </p>

    <!-- Ejercicio 4, Salto de linea entre Hello y world  -->
    <?php echo "Hello<br>world";?>
    <br>

    <!-- Ejercicio 5, Añadir información sobre la versión de PHP-->
    <?php echo "Hello world <br>" . phpversion() . phpinfo();?>
    <br>

    <!-- Ejercicio 6, Mostrar la fecha y hora del sistema -->
    <?php echo  "Hello wolrd <br>" . date(DATE_ATOM) ;?>
    <?php echo "Hello world <br>" . date("Y-m-d H:i:s");?>
    <br>

</body>


</html>