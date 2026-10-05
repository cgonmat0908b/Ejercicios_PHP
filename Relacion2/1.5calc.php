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

                <form class="m-auto mt-5 border rounded p-4 shadow-lg" action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">

                    <div class="mb-3">

                        <!-- Primer num -->
                        <label for="num1">Introduce el primer número:</label><br>
                        <input type="number" min="1" name="num1" id="num1" value="1"><br>
                    
                    </div>

                    <div class="mb-3">

                        <!-- Segundo num -->
                        <label for="num2">Introduce el segundo número:</label><br>
                        <input type="number" min="1" name="num2" id="num2" value="1"><br>

                    </div>

                    
                    <div class="mb-3 text-center" >

                        <select name="sign" id="sign">

                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">*</option>
                            <option value="/">/</option>
                            <option value="%">%</option>

                        </select><br><br>

                    </div>
                    
                    <input type="submit" value="Calcular"><br>

                    <!-- Procesado de datos al ser enviados -->
                    <?php
                        

                        if(isset($_GET["num1"], $_GET["num2"], $_GET["sign"])){
                            // Variables
                            $num1 = (int) ($_GET["num1"]);
                            $num2 = (int) ($_GET["num2"]);
                            $sign = $_GET["sign"];
                            $resultado = 0;

                            // Control del signo, Operación a realizar, Mostrar resultado.
                            switch ($sign){
                                
                                case "+":
                                    $resultado = $num1 + $num2;
                                    echo "<p>$num1 + $num2 = $resultado</p>";
                                    break;

                                case "-":
                                    $resultado = $num1 - $num2;
                                    echo "<p>$num1 - $num2 = $resultado</p>";
                                    break;
                                
                                case "*":
                                    $resultado = $num1 * $num2;
                                    echo "<p>$num1 * $num2 = $resultado</p>";
                                    break;

                                case "/":
                                    $resultado = (float)($num1 / $num2);
                                    echo "<p>$num1 / $num2 = $resultado</p>";
                                    break;
                                
                                case "%":
                                    $resultado = $num1 % $num2;
                                    echo "<p>$num1 % $num2 = $resultado </p>";
                                    break;

                            }

                            // Con match

                            /*$resultado = match($sign){
                                "+" => $num1 + $num2,
                                "-" => $num1 - $num2,
                                "*" => $num1 * $num2,
                                "/" => $num1 / $num2,
                                "%" => $num1 % $num2,
                                default => 0
                            };
                            */

                        }
                    ?>
                    
                </form>

            </div>

            <div class="col-md-3 col-sm-1 col-0">
                <!-- Espacio en blanco a la derecha -->
            </div>

        </div>

    </div>

</body>

</html>