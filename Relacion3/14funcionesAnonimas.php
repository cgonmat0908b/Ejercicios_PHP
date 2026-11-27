<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <label for="radio">Introduce el radio</label>
        <input type="number" name="radio" id="radio" step="any">

        <button type="submit">Realizar calculos</button>
    </form>

    <?php  

        $circunferencia = function($r){
            return (2 * M_PI * $r);
        };

        $circulo = function($r){
            return (M_PI * pow($r,2));
        };

        $esfera = function($r){
            return ((4/3) * M_PI * pow($r, 3)); 
        };

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["radio"])){
                $r = $_POST["radio"];

                if($r > 0){
                    $longitud = $circunferencia($r);
                    $area = $circulo($r);
                    $volumen = $esfera($r);
                    echo "<h2>Resultado: </h2>
                    <p>Longitud: $longitud</p>
                    <p>Area: $area</p>
                    <p>Volumen: $volumen</p>";
                }else{
                    echo "Valor invalido";
                }
            }      
        }
    
    ?>


    
</body>

</html>