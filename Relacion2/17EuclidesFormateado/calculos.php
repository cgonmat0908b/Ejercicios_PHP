
<?php  
    
    if(isset($_POST["num1"]) && isset($_POST["num2"]) && (isset($_POST["cociente"]) || isset($_POST["resto"]))){
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $control = $num1;
        $contador = 0;

        $cociente = isset($_POST["cociente"]);
        $resto = isset($_POST["resto"]);

        $valores = euclides($num1, $num2, $cociente, $resto);

    }

    function euclides(int $num1, int $num2,bool $cociente, bool $resto ){
        $control = $num1;
        $contador = 0;
        $valores = [];

        if($cociente){
            if($num1 == 0 || $num2 == 0){
                $valores[0] = 0;
                $valores[1] = 0;
            }else{
                while($control >= $num2){
                    $control -= $num2;
                    $contador++;
                }
                $valores[0] = $contador;
            }
        }
        if($resto){
            if($num1 == 0 || $num2 == 0){
                $valores[0] = 0;
                $valores[1] = 0;
            }else{
                while($control >= $num2){
                    $control -= $num2;
                    $contador++;
                }
                $valores[1] = $control;
            }
        }

        return $valores;
    }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-secondary">

    <div class="container text-center bg-secondary-subtle min-vh-100">

        <h2 class="text-primary mt-3 pt-4">
            Resultado de la división
        </h2>

        <div class="row">

            <div class="col-md-3 col-sm-1 col-0"></div>

            <div class="col-md-6 col-sm-10 col-12">

                <div class="m-auto mt-5 border rounded p-4 shadow-lg">

                    <h4 class="text-primary mb-4">
                        Datos introducidos
                    </h4>

                    <div class="bg-light border rounded p-3 mb-4">
                        <p><strong>Dividendo:</strong> <?= $num1 ?></p>
                        <p class="mb-0"><strong>Divisor:</strong> <?= $num2 ?></p>
                    </div>

                    <h4 class="text-primary mb-3">
                        Resultados
                    </h4>

                    <?php if($cociente){ ?>

                        <div class="alert alert-primary">
                            <strong>Cociente:</strong>
                            <?= $valores[0] ?>
                        </div>

                    <?php } ?>

                    <?php if($resto){ ?>

                        <div class="alert alert-success">
                            <strong>Resto:</strong>
                            <?= $valores[1] ?>
                        </div>

                    <?php } ?>

                    <a href="index.html" class="btn btn-success mt-3">
                        Volver al formulario
                    </a>

                </div>

            </div>

            <div class="col-md-3 col-sm-1 col-0"></div>

        </div>

    </div>

</body>
</html>
