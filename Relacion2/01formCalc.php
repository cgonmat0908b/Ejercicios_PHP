<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>

    <!-- Action vacio lo manda al mismo archivo -->
    <form action="" method="get">

        <!-- Primer num -->
        <label for="num1">Introduce el primer número:</label><br>
        <input type="number" min="1" name="num1" id="num1" value="1"><br>

        <!-- Segundo num -->
        <label for="num2">Introduce el segundo número:</label><br>
        <input type="number" min="1" name="num2" id="num2" value="1"><br>

        <!-- Operadores con select-->
        <label for="sign">Selecciona el operador:</label><br>

        <select name="sign" id="sign">

            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>

        </select><br><br>

        <input type="submit" value="Submit"><br>

    </form>
    
    <?php  

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
                $resultado = $num1 / $num2;
                echo "<p>$num1 / $num2 = $resultado</p>";
                break;
            
            case "%":
                $resultado = $num1 % $num2;
                echo "<p>$num1 % $num2 = $resultado </p>";
                break;

        }

    ?>

</body>
</html>