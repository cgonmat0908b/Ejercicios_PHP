
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-secondary">

    <div class="container text-center bg-secondary-subtle min-vh-100">

        <h2 class="text-primary pt-4">Resultado de la operación</h2>

        <div class="row justify-content-center">

            <div class="col-md-6 col-sm-10 col-12">

                <div class="mt-5 border rounded p-4 shadow-lg">

                    <?php 

                        if (isset($_POST["num"]) && isset($_POST["operacion"])){
                        
                            $num = $_POST["num"];
                            $operacion = $_POST["operacion"];

                            if($operacion == "primo"){
                                echo "<p>Resultado de la operación: " . esPrimo($num) . "</p>";
                            }elseif($operacion == "divisores"){
                                divisores($num);
                            }

                        }

                        function esPrimo(int $num){
                            $contadorDivisibles = 0;
                            $resultado = "";

                            for($i = 1; $i <= $num; $i++){
                                if($num % $i == 0){
                                    $contadorDivisibles++;
                                }

                                if($contadorDivisibles > 2){
                                    break;
                                }
                            }

                            if($contadorDivisibles > 2){
                                $resultado = "No primo";
                            }else{
                                $resultado = "Primo";
                            }

                            return $resultado;
                        }

                        function divisores(int $num){

                            echo "<p> Números divisores de $num: </p>";

                            for($i = 1; $i <= $num; $i++){
                                
                                if($num % $i != 0){
                                    echo($i . " ");

                                }else{
                                    echo("<b>$i</b> ");
                                }

                            }
                        }

                    ?>

                </div>

            </div>

        </div>

    </div>

</body>
</html>
