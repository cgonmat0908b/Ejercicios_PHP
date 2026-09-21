<!-- 2- Haz un programa PHP que muestre un valor de ejemplo de cada tipo de
dato escalar en php con echo utilizando la función var_dump(), y también
con printf formateado.-->

<?php

    // Variable varBool
    $varBool = true;
    echo "El valor del boolean es: $varBool
    \tCon varDump: "; var_dump($varBool);
    printf("Con printf: %b",$varBool);

    $entero = 54;
    echo " <br>El valor del entero es: $entero
    \tCon varDump: "; var_dump($entero);
    printf("Con printf: %d",$entero);

    $flotante = 2.4556;
    echo "<br>El valor del flotante es: $flotante
    \tCon varDump: "; var_dump($flotante);
    printf("Con printf: %.4f",$flotante);

    $cadena = "Macarrones";
    echo "<br>El valor de la cadena es: $cadena
    \tCon varDump: "; var_dump($cadena);
    printf("Con printf: %s",$cadena);


?>