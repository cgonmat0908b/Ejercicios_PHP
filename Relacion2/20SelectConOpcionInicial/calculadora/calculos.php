<?php
    // Captación de los datos
    $error = null;
    $a = filter_input(INPUT_POST, 'num1', FILTER_VALIDATE_FLOAT);
    $b = filter_input(INPUT_POST, 'num2', FILTER_VALIDATE_FLOAT);
    $operador = $_POST['operador'] ?? '';

    // Validación y cálculo
    if ($a === false || $a === null || $b === false || $b === null) {
        $error = 'Introduce dos números válidos.';
    } elseif (!in_array($operador, ['+', '-', '*', '/', '%'], true)) {
        $error = 'Selecciona una operación válida.';
    } elseif (($operador === '/' || $operador === '%') && (float)$b == 0.0) {
        $error = 'No se puede dividir entre cero.';
    } else {
        $resultado = match ($operador) {
            '+' => $a + $b,
            '-' => $a - $b,
            '*' => $a * $b,
            '/' => $a / $b,
            '%' => fmod($a, $b),
        };
    }
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resultado · Calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-secondary-subtle">
    <main class="container min-vh-100 py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-7 col-lg-6">
                <section class="border rounded bg-white p-4 shadow text-center">
                    <h1 class="h3 text-primary mb-4">Resultado de la operación</h1>

                    <?php if ($error !== null) { ?>
                        <div class="alert alert-danger">
                            <?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?>
                        </div>
                    <?php } else { ?>
                        <p class="fs-4">
                            <?= htmlspecialchars((string)$a, ENT_QUOTES, 'UTF-8') ?>
                            <?= htmlspecialchars($operador, ENT_QUOTES, 'UTF-8') ?>
                            <?= htmlspecialchars((string)$b, ENT_QUOTES, 'UTF-8') ?> =
                        </p>
                        <p class="fs-2 text-success fw-bold">
                            <?= htmlspecialchars((string)$resultado, ENT_QUOTES, 'UTF-8') ?>
                        </p>
                    <?php } ?>

                    <a class="btn btn-success" href="index.html">Volver a la calculadora</a>
                </section>
            </div>
        </div>
    </main>
</body>
</html>
