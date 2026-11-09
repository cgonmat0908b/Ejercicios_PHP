
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
        $mail = $_POST["mail"];
        $nombre = $_POST["nombre"];
        $nota = (float) $_POST["notaNumerica"];

        $notaTexto = match (true) {
            $nota < 5 => "Suspenso",
            $nota < 6 => "Aprobado",
            $nota < 7 => "Bien",
            $nota < 9 => "Notable",
            default => "Sobresaliente"
        };

        $colorBarra = match (true) {
            $nota < 5 => "bg-danger",
            $nota < 7 => "bg-warning",
            $nota < 9 => "bg-info",
            default => "bg-success"
        };
    ?>

    <div class="container bg-secondary-subtle min-vh-100 text-center pt-5">

        <h2 class="text-primary mb-4">Resultado de la evaluación</h2>

        <div class="row justify-content-center">

            <div class="col-12 col-md-6">

                <div class="card shadow-lg p-4">

                    <div class="card-body">

                        <h4 class="card-title mb-4">
                            Nota de <?= htmlspecialchars($nombre) ?>
                        </h4>

                        <h2 class="text-primary mb-3">
                            <?= number_format($nota, 2) ?> / 10
                        </h2>

                        <h4 class="mb-4">
                            <?= $notaTexto ?>
                        </h4>

                        <div class="progress mb-4" style="height: 30px;">

                            <div
                                class="progress-bar <?= $colorBarra ?>"
                                role="progressbar"
                                style="width: <?= $nota * 10 ?>%;"
                                aria-valuenow="<?= $nota ?>"
                                aria-valuemin="0"
                                aria-valuemax="10">

                                <?= $nota * 10 ?>%

                            </div>

                        </div>

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
