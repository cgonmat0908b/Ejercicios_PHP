
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la evaluación</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-secondary">

    <?php
        $notaFinal = 0;
        $resultado = "";
        $datosValidos = false;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (isset($_POST["num1"], $_POST["num2"], $_POST["numFaltas"])) {

                $nota1 = (int) $_POST["num1"];
                $nota2 = (int) $_POST["num2"];
                $numFaltas = (int) $_POST["numFaltas"];

                $notaFinal = ($nota1 + $nota2) / 2 - ($numFaltas * 0.25);

                if ($notaFinal >= 5) {
                    $resultado = "Aprobado";
                } else {
                    $resultado = "Suspenso";

                    if ($notaFinal < 1) {
                        $notaFinal = 1;
                    }
                }

                $datosValidos = true;
            }
        }
    ?>

    <div class="container bg-secondary-subtle min-vh-100 text-center pt-5">

        <h2 class="text-primary mb-4">Resultado de la evaluación</h2>

        <div class="row justify-content-center">

            <div class="col-12 col-md-6">

                <div class="card shadow-lg p-4">

                    <div class="card-body">

                        <h4 class="card-title mb-4">Nota final</h4>

                        <?php if ($datosValidos): ?>

                            <h2 class="text-primary mb-4">
                                <?= number_format($notaFinal, 2) ?>
                            </h2>

                            <h4 class="<?= $resultado == 'Aprobado' ? 'text-success' : 'text-danger' ?> mb-4">
                                <?= $resultado ?>
                            </h4>

                        <?php else: ?>

                            <p class="text-danger mb-4">
                                No se han recibido todos los datos.
                            </p>

                        <?php endif; ?>

                        <a href="index.html" class="btn btn-success">
                            Volver al formulario
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>
