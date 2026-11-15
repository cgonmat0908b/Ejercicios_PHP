<?php
    // Captación y validación de los datos
    $error = null;
    $decimal = filter_input(INPUT_POST, 'decimal', FILTER_VALIDATE_INT);
    $baseRecibida = filter_input(INPUT_POST, 'base', FILTER_VALIDATE_INT);

    if ($decimal === false || $decimal === null || $decimal < 0) {
        $error = 'Introduce un número entero mayor o igual que cero.';
    } elseif (!in_array($baseRecibida, [2, 8, 16], true)) {
        $error = 'Selecciona una operación válida.';
    } else {
        $base = $baseRecibida;

        // Conversión según la base seleccionada
        $resultado = match ($base) {
            2 => decbin($decimal),
            8 => decoct($decimal),
            16 => strtoupper(dechex($decimal)),
        };

        $nombreBase = match ($base) {
            2 => 'binario',
            8 => 'octal',
            16 => 'hexadecimal',
        };
    }
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado · Ejercicio 20</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-secondary-subtle">
    <main class="container min-vh-100 py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-7 col-lg-6">
                <section class="border rounded bg-white p-4 shadow text-center">
                    <h1 class="h3 text-primary mb-4">Resultado de la conversión</h1>

                    <?php if ($error !== null) { ?>
                        <div class="alert alert-danger">
                            <?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?>
                        </div>
                    <?php } else { ?>
                        <p>El decimal <strong><?= $decimal ?></strong> en <?= $nombreBase ?> es:</p>
                        <p class="fs-3 text-success fw-bold"><?= $resultado ?></p>
                    <?php } ?>

                    <a class="btn btn-success" href="index.html">Volver al formulario</a>
                </section>
            </div>
        </div>
    </main>
</body>
</html>
