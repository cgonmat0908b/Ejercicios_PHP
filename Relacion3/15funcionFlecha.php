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

        $circunferencia = fn($r) => (2 * M_PI * $r);

        $circulo = fn($r) => (M_PI * pow($r,2));

        $esfera = fn($r) => ((4/3) * M_PI * pow($r, 3));

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

                $dia = 3;

                // Con switch
                switch ($dia) {
                    case 1:
                        $nombre = "Lunes";
                        break;
                    case 2:
                        $nombre = "Martes";
                        break;
                    case 3:
                        $nombre = "Miércoles";
                        break;
                    case 4:
                        $nombre = "Jueves";
                        break;
                    case 5:
                        $nombre = "Viernes";
                        break;
                    case 6:
                    case 7:
                        $nombre = "Fin de semana";
                        break;
                    default:
                        $nombre = "Día no válido";
                }

                echo "<p>Con switch: $nombre</p>";

                // Con match
                $nombre = match ($dia) {
                    1 => "Lunes",
                    2 => "Martes",
                    3 => "Miércoles",
                    4 => "Jueves",
                    5 => "Viernes",
                    6, 7 => "Fin de semana",
                    default => "Día no válido",
                };

                echo '<h2>Comparación entre switch y match</h2>
                <ul>
                <li><strong>Parecidos:</strong> las dos evalúan un valor, eligen entre varios casos, permiten agruparlos y admiten <code>default</code>.</li>
                <li><strong>Resultado:</strong> <code>match</code> devuelve un valor. <code>switch</code> no, así que la variable se asigna dentro de cada caso.</li>
                <li><strong>Break:</strong> <code>switch</code> usa <code>break</code> para no continuar en el caso siguiente. <code>match</code> no lo necesita.</li>
                <li><strong>Comparación:</strong> <code>switch</code> usa <code>==</code> y <code>match</code> usa <code>===</code>. Con <code>$dia = "3";</code>, en el ejemplo de los días, <code>switch</code> da "Miércoles" y <code>match</code> da "Día no válido".</li>
                <li><strong>Sin coincidencias ni default:</strong> <code>switch</code> no ejecuta ningún caso, mientras que <code>match</code> lanza el error <code>UnhandledMatchError</code>.</li>
                <li><strong>Contenido de cada caso:</strong> <code>switch</code> admite varias instrucciones y a la derecha de cada <code>=&gt;</code> de <code>match</code> va una sola expresión.</li>
                </ul>';
            }      
        }
    
    ?>


    
</body>

</html>