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
        $evaluaciones = array(
            "Inicial" => 0.1,
            "Primera" => 0.3,
            "Segunda" => 0.3,
            "Tercera" => 0.3
        );

        $notaFinal = 0;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (isset($_POST["mail"], $_POST["nombre"],
                    $_POST["notaInicial"], $_POST["nota1"],
                    $_POST["nota2"], $_POST["nota3"])) {

                $notasUsuario = array(
                    "Inicial" => (float) $_POST["notaInicial"],
                    "Primera" => (float) $_POST["nota1"],
                    "Segunda" => (float) $_POST["nota2"],
                    "Tercera" => (float) $_POST["nota3"]
                );

                foreach ($evaluaciones as $ev => $rubrica) {
                    $notaFinal += $notasUsuario[$ev] * $rubrica;
                }
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

                        <h2 class="text-primary mb-4">
                            <?= number_format($notaFinal, 2) ?>
                        </h2>

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