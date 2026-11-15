<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de PHP · Cristian González Mateo</title>
    <style>
        body { margin: 0; font-family: system-ui, sans-serif; background: #f4f7fb; color: #172b3b; }
        main { max-width: 820px; margin: auto; padding: 48px 24px; }
        h1 { margin-bottom: 8px; }
        p { line-height: 1.6; }
        ol { padding-left: 28px; }
        li { padding: 8px 0; line-height: 1.5; }
        a { color: #075985; text-underline-offset: 3px; }
        a:focus-visible { outline: 3px solid #0891b2; outline-offset: 4px; }
        .intro { color: #4b6171; }
    </style>
</head>
<body>
    <main>
        <p class="intro">DWES · Desarrollo de Aplicaciones Web</p>
        <h1>Ejercicios de PHP</h1>
        <p>Cristian González Mateo · Relación 1</p>
        <p>Selecciona un ejercicio. Los ejemplos utilizan los valores definidos en su código.</p>
        <ol start="0">
        <?php
        // El índice conserva el orden numérico de los ejercicios del repositorio.
        $ejercicios = array(
            '0Hola-mundo.php' => 'Primer programa',
            '1hello-world.php' => 'Hello world, versión y fechas',
            '2variables.php' => 'Tipos escalares y salida formateada',
            '3superGlobales.php' => 'Variables superglobales y entorno del servidor',
            '4arrays.php' => 'Arrays indexados',
            '5arrayAsociativo.php' => 'Arrays asociativos y temperaturas',
            '6claseFruta.php' => 'Clases, objetos, constructor, getter y setter',
            '7calculoNota.php' => 'Media de notas y penalización por faltas',
            '8arrayAsociativosParalelos.php' => 'Media ponderada con arrays paralelos',
            '9triangulos.php' => 'Clasificación de triángulos',
            '10ecuacionSegundo.php' => 'Ecuaciones de segundo grado',
            '12notaATexto.php' => 'Ecuaciones y casos especiales',
            '13factorial.php' => 'Calificaciones numéricas a texto',
            '14sumaNPrimeros.php' => 'Factorial',
            '15esPrimo.php' => 'Suma de los primeros números naturales',
            '16lista-divisor.php' => 'Comprobación de números primos',
            '17calculoDivisionNaturales.php' => 'Divisores destacados en un listado',
            '18maxComDivEuclides.php' => 'División entera mediante restas',
            '19decimalBinario.php' => 'Máximo común divisor por Euclides',
            '20binarioMejorado.php' => 'Conversión decimal a binario',
            '11ecuaciones2.php' => 'Conversión decimal a binario, octal y hexadecimal',
        );
        foreach ($ejercicios as $archivo => $titulo) {
            $ruta = htmlspecialchars('Relacion1/' . $archivo, ENT_QUOTES, 'UTF-8');
            $texto = htmlspecialchars($titulo, ENT_QUOTES, 'UTF-8');
            echo '<li><a href="' . $ruta . '">' . $texto . '</a></li>';
        }
        ?>
        </ol>
        <h2>Práctica adicional</h2>
        <p><a href="Adicional/19incorrectoBinarioDecimalE.php">Conversión de binario a decimal</a></p>
        <p><a href="https://github.com/cgonmat0908b/Ejercicios_PHP">Código y documentación en GitHub</a></p>
    </main>
</body>
</html>
