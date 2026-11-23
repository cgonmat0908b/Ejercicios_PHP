<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Enlace de la hoja de estilo de bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body class="bg-secondary ">

    <!-- Guia grid para distribuir espacio-->
    <!-- 1º Div con class "container"-->

    <div id="main" class="container text-center bg-secondary-subtle min-vh-100">

        <h2 class="text-primary mt-3 pt-4">Formulario de referencia</h2>
        <!-- 2º Div con class "row" -->
        <div class="row">

            <!-- 3º Número de columnas en las que distribuimos la página
            en total, 12 columnas -->
            <div class="col-md-3 col-sm-1 col-0">
                <!-- Espacio en blanco a la izuierda -->
            </div>

            <div class="col-md-6 col-sm-10 col-12">

                <form class="m-auto mt-5 border rounded p-4 shadow-lg" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">

                    <div class="mb-3">
                        <label for="numTiradas" class="form-label">Número de lanzamientos</label>
                        <input type="number" min="1" name="numTiradas" id="numTiradas" required class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success">Lanzar dados</button>
                    
                </form>

                <?php 
    
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                        if (isset($_POST["numTiradas"])) {
                            $numTiradas = $_POST["numTiradas"];
                            
                            $frecuenciasNormal = array_fill(1, 6, 0);
                            $frecuenciasTrucado = array_fill(1, 6, 0);

                            for($i = 0; $i < $numTiradas; $i++){
                                $dadoNormal = rand(1,6);
                                $dadoTrucado = rand(1,8);

                                if($dadoTrucado >= 6){
                                    $dadoTrucado = 6;
                                }

                                // Contar resultados
                                $frecuenciasNormal[$dadoNormal]++;
                                $frecuenciasTrucado[$dadoTrucado]++;
                            }

                            echo "<h2>Normal</h2>";
                            for($i = 1; $i <= count($frecuenciasNormal); $i++){
                                echo "Del dado normal el numero: $i, ha salido $frecuenciasNormal[$i] veces<br>";
                            }

                            echo "<h2>Trucado</h2>";

                            for($i = 1; $i <= count($frecuenciasTrucado); $i++){
                                echo "Del dado trucado el numero: $i, ha salido $frecuenciasTrucado[$i] veces<br>";
                            }
                        }

                        
                    }

                ?>

            </div>

            <div class="col-md-3 col-sm-1 col-0">
                <!-- Espacio en blanco a la derecha -->
            </div>

        </div>

    </div>

</body>

</html>