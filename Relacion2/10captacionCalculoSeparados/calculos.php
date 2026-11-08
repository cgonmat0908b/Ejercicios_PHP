
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la operación</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-secondary">

    <?php
        $resultado = null;
        $operacion = "";
        $error = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $datos = $_POST;
        } else {
            $datos = $_GET;
        }

        if (isset($datos["num1"], $datos["num2"], $datos["sign"])) {

            // Variables
            $num1 = (int) $datos["num1"];
            $num2 = (int) $datos["num2"];
            $sign = $datos["sign"];

            // Control del signo y operación a realizar
            switch ($sign) {

                case "+":
                    $resultado = $num1 + $num2;
                    $operacion = "$num1 + $num2";
                    break;

                case "-":
                    $resultado = $num1 - $num2;
                    $operacion = "$num1 - $num2";
                    break;

                case "*":
                    $resultado = $num1 * $num2;
                    $operacion = "$num1 * $num2";
                    break;

                case "/":
                    if ($num2 != 0) {
                        $resultado = $num1 / $num2;
                        $operacion = "$num1 / $num2";
                    } else {
                        $error = "No se puede dividir entre cero.";
                    }
                    break;

                case "%":
                    if ($num2 != 0) {
                        $resultado = $num1 % $num2;
                        $operacion = "$num1 % $num2";
                    } else {
                        $error = "No se puede calcular el módulo entre cero.";
                    }
                    break;

                default:
                    $error = "Operador no válido.";
                    break;
            }

        } else {
            $error = "No se han recibido todos los datos.";
        }
    ?>

    <div class="container bg-secondary-subtle min-vh-100 text-center pt-5">

        <h2 class="text-primary mb-4">Resultado de la operación</h2>

        <div class="row justify-content-center">

            <div class="col-12 col-md-6">

                <div class="card shadow-lg p-4">

                    <div class="card-body">

                        <h4 class="card-title mb-4">Resultado</h4>

                        <?php if ($resultado !== null): ?>

                            <h5 class="mb-3">
                                <?= $operacion ?>
                            </h5>

                            <h2 class="text-primary mb-4">
                                <?= $resultado ?>
                            </h2>

                        <?php else: ?>

                            <p class="text-danger mb-4">
                                <?= $error ?>
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
