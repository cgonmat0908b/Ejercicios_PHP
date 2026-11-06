
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de PHP · Cristian González Mateo</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <main class="container py-5">

        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9">

                <!-- Encabezado -->
                <div class="text-center mb-4">
                    <h1 class="text-primary">Ejercicios de PHP</h1>
                    <p class="text-secondary mb-1">
                        DWES · Desarrollo de Aplicaciones Web
                    </p>
                    <p class="fw-semibold">
                        Cristian González Mateo · Relación 1
                    </p>
                </div>

                <!-- Tarjeta de ejercicios -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Lista de ejercicios</h5>
                    </div>

                    <div class="card-body">
                        <p class="text-secondary">
                            Selecciona un ejercicio para ver su resultado.
                        </p>

                        <ol start="0" class="ps-4 mb-0">

                        <?php
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

                            echo '<li class="py-2 border-bottom">';
                            echo '<a class="text-decoration-none" href="' . $ruta . '">' . $texto . '</a>';
                            echo '</li>';
                        }
                        ?>

                        </ol>
                    </div>
                </div>

                <!-- Práctica adicional -->
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-secondary text-white">
                        <h5 class="mb-0">Práctica adicional</h5>
                    </div>

                    <div class="card-body">
                        <p class="mb-0">
                            <a class="text-decoration-none"
                               href="Adicional/19incorrectoBinarioDecimalE.php">
                                Conversión de binario a decimal
                            </a>
                        </p>
                    </div>
                </div>

                <!-- Pie de página -->
                <div class="text-center">
                    <a href="https://github.com/cgonmat0908b/Ejercicios_PHP"
                       class="btn btn-outline-primary"
                       target="_blank">
                        Ver código en GitHub
                    </a>

                    <p class="text-secondary small mt-3">
                        Desarrollo Web en Entorno Servidor · PHP
                    </p>
                </div>

            </div>
        </div>

    </main>

</body>
</html>
