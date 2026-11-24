<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    
        // Constructor por defecto, fecha y hora actual
        $ahora = new DateTime();

        // Constructor con cadena
        $cadena = new DateTime("2026-12-25 20:30:00");

        echo "<h2>Fechas con formato</h2>";
        // Mostar con formato d-> Dia, m-> Mes, y-> Año, H-> hora, i->minuto, s->segundos,
        // N-> Numero día de la semana l-> día de la semana en inglés
        echo "Momento actual: " . $ahora->format("d/m/y H:i:s") . "<br>
        Día de la semana: " . $ahora->format("l") . "<br>";

        //Modificar fechas con cadenas
        // Más 1 día
        echo "<h2>Modificación de fechas con cadenas</h2>";
        $ahora->modify("+1 day");
        echo "Ahora + 1 día: " . $ahora->format("d/m/y") . "<br>";

        // Menos 2 meses
        $ahora->modify("-2 months");
        echo "Ahora - 2 meses: " . $ahora->format("d/m/y") . "<br>";

        // Menos 5 años
        $ahora->modify("-5 years");
        echo "Ahora - 5 años: " . $ahora->format("d/m/y") . "<br>";

        // Sumas/restas con add() y sub()
        // Sumar fechas
        $fecha = new DateTime("2000-5-13 14:00:00");
        echo "Fecha sin modificar: " . $fecha->format("d/m/y H:i:s") . "<br>";
        // Con new DateInterval introducimos una cadena con la siguiente sintaxis:
        // "PnumYnumMnumDTnumHnumMnumS" -> Y -> años, M -> Meses, D-> dias, H-> Hora, M-> minutos, S-> Segundos
        $fecha->add(new DateInterval("P1Y1M1DT1H1M1S"));
        echo "Fecha sumando 1año,1mes,1dia,1hora,1minuto,1segundo: " . $fecha->format("d/m/y H:i:s"). "<br>";
        // Resta
        $fecha->sub(new DateInterval("P1Y1M1DT1H1M1S"));
        echo "Fecha restando 1año,1mes,1dia,1hora,1minuto,1segundo: " . $fecha->format("d/m/y H:i:s"). "<br>";

        // Ultimo día de el mes de la fecha
        $ahora->modify("last day of this month");
        echo "Último día de este mes de este año: " . $ahora->format("d/m/y") . "<br>";

        // Modifcar fecha con valores numéricos 
        // Año,mes,dia con setDate(yyyy,mm,dd)
        $cadena->setDate(2025,12,5);
        // Hora,minutos,segundos con setTime(hh,mm,ss)
        $cadena->setTime(9,0,5);
        echo "Fecha modificada con valores numéricos: " . $cadena->format("d/m/y H:i:s") . "<br>";

        // Todos los métodos modifican el objeto para clonar el objeto:
        $copiaFecha = clone $cadena;
        $copiaFecha->modify("+1 day");
        echo "Fecha sin clonar: " . $cadena->format("d/m/y") . "<br>";
        echo "Fecha clonada + 1 día: " . $copiaFecha->format("d/m/y") . "<br>";

        echo "<h2>Comparación de fechas</h2>";
        // Comparación de fechas con diff()
        $a = new DateTime("2026-01-01");
        $b = new DateTime("2026-03-15");
        $diferencia = $a->diff($b);

        echo "Fecha a: " . $a->format("d/m/y") . "<br>";
        echo "Fecha b: " . $b->format("d/m/y") . "<br>";
        echo "Días de diferencia: $diferencia->days <br>";
        echo "Meses de diferencia: $diferencia->m <br>";
        echo "Años de diferencia: $diferencia->y <br>";

        // Comparación con mayor menor
        echo "Comparación con >: " . ($a < $b) . "<br>";

        echo "<h2>Ejercicio</h2>";

        function diaSemana(DateTime $fecha){
            $dia = $fecha->format("l");

            $diaSemana = match($dia){
                "Monday" => "Lunes",
                "Tuesday" => "Martes",
                "Wednesday" => "Miercoles",
                "Thursday" => "Jueves",
                "Friday" => "Viernes",
                "Saturday" => "Sabado",
                "Sunday" => "Domingo",
                default => "Fecha incorrecta"
            };

            return $diaSemana;
        }

        echo "A fecha de " . $copiaFecha->format("d/m/y") . " el día de la semana es: "
        . diaSemana($copiaFecha) ."<br>";

        function mesCadena(DateTime $fecha){
            $mes = (int) $fecha->format("m");

            $meses = [
                "Enero",
                "Febrero",
                "Marzo",
                "Abril",
                "Mayo",
                "Junio",
                "Julio",
                "Agosto",
                "Septiembre",
                "Octubre",
                "Noviembre",
                "Diciembre"
                ];

            $mesCadena = match($mes){
                1 => $meses[0],
                2 => $meses[1],
                3 => $meses[2],
                4 => $meses[3],
                5 => $meses[4],
                6 => $meses[5],
                7 => $meses[6],
                8 => $meses[7],
                9 => $meses[8],
                10 => $meses[9],
                11 => $meses[10],
                12 => $meses[11],
                default => "Valor incorrecto"
            };

            return $mesCadena;
        }

        echo "A fecha de " . $copiaFecha->format("d/m/y") . " el mes del año es: "
        . mesCadena($copiaFecha) ."<br>";
    ?>
    
</body>

</html>