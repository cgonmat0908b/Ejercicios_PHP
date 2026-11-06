<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
                        
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            if(isset($_POST["num1"], $_POST["num2"], $_POST["sign"])){
                                // Variables
                                $num1 = (int) ($_POST["num1"]);
                                $num2 = (int) ($_POST["num2"]);
                                $sign = $_POST["sign"];
                                $resultado = 0;
                            }

                        }else if($_SERVER["REQUEST_METHOD"] == "GET"){
                            if(isset($_GET["num1"], $_GET["num2"], $_GET["sign"])){
                            // Variables
                            $num1 = (int) ($_GET["num1"]);
                            $num2 = (int) ($_GET["num2"]);
                            $sign = $_GET["sign"];
                            $resultado = 0;

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

                        // Control del signo, Operación a realizar, Mostrar resultado.
                        switch ($sign){
                            
                            case "+":
                            $resultado = $num1 + $num2;
                            echo "<p>El resultado es: $num1 + $num2 = $resultado</p>";
                            break;

                            case "-":
                            $resultado = $num1 - $num2;
                            echo "<p>El resultado es: $num1 - $num2 = $resultado</p>";
                            break;
                                        
                            case "*":
                            $resultado = $num1 * $num2;
                            echo "<p>El resultado es: $num1 * $num2 = $resultado</p>";
                            break;

                            case "/":
                            $resultado = (float)($num1 / $num2);
                            echo "<p>El resultado es: $num1 / $num2 = $resultado</p>";
                            break;
                                        
                            case "%":
                            $resultado = $num1 % $num2;
                            echo "<p>El resultado es: $num1 % $num2 = $resultado </p>";
                            break;

                        }
                    ?>


</body>
</html>
