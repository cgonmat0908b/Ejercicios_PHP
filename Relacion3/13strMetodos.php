<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <form action="" method="post">
        <label for="cadena" >Introduce una cadena</label>
        <input type="text" id="cadena" name="cadena">

        <button type="submit">Mostrar Resultado</button>
    </form>

    <?php
    
        include "./11funcioneSwap/functionsRel3.php";
        // Salidas: Con alert BootStrap
        /* -Cadena del revés indicando si es palindroma
        *  -Cadena con las palabras al revés
        *  -Cadena toda en mayusculas y minusculas
        *  -Recuento de caracteres y palabras
        *  -Aplicando crypt,md5 y sha1
        */

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($_POST["cadena"])){
                $cadena = $_POST["cadena"];
                $palindroma = palindroma($cadena);
                $cadenaInvertida = invertirCadena($cadena);
                $cadenaMayusMinus = mayusMinus($cadena);
                $numCharYPalabras = numCaracteresYPalabras($cadena);
                $cryptMd5Sha1 = aplicarCryptMd5Sha1($cadena);

                echo '<div class="alert alert-info m-3" role="alert">
                        <h4 class="alert-heading">Resultado de aplicar los métodos:</h4>
                        <hr>
                        <p>Texto al revés: ' . htmlspecialchars($palindroma[0]) . ', ¿Es palíndromo? ' . ($palindroma[1] ? "Sí" : "No") . '</p>
                        <p>Palabras al revés: ' . htmlspecialchars($cadenaInvertida) . '</p>
                        <p>Cadena en mayúsculas: ' . htmlspecialchars($cadenaMayusMinus[0]) . ', Cadena en minúsculas: ' . htmlspecialchars($cadenaMayusMinus[1]) . '</p>
                        <p>Número de palabras: ' . $numCharYPalabras[0] . ', Número de caracteres: ' . $numCharYPalabras[1] . '</p>
                        <p class="mb-0 text-break">Crypt: ' . htmlspecialchars($cryptMd5Sha1[0]) . '<br>MD5: ' . $cryptMd5Sha1[1] . '<br>SHA1: ' . $cryptMd5Sha1[2] . '</p>
                        </div>';
            }
        }


        function palindroma(string $cadena){
            $arrayPalabras = explode(" ", $cadena);
            $cadenaPalindroma = "";
            $esPalindroma = true;
                
            for($i = count($arrayPalabras) - 1; $i >= 0 ; $i--){
                for($f = strlen($arrayPalabras[$i]) - 1; $f >= 0; $f--){
                    $cadenaPalindroma .= $arrayPalabras[$i][$f];
                }
                if($i != 0){
                    $cadenaPalindroma .= " ";
                }
            }

            if(strtolower(str_replace(" ", "", $cadena)) !== strtolower(str_replace(" ", "", $cadenaPalindroma))){
                $esPalindroma = false;
            }

            return [$cadenaPalindroma,$esPalindroma];

        }

        function invertirCadena(string $cadena){
            $arrayPalabras = explode(" ", $cadena);
            invertirArray($arrayPalabras);

            $cadenaInvertida = implode(" ", $arrayPalabras);

            return $cadenaInvertida;
        }

        function mayusMinus(string $cadena){
            return [strtoupper($cadena),strtolower($cadena)];
        }
        
        function numCaracteresYPalabras(string $cadena){
            $arrayPalabras = explode(" ", $cadena);
            $numCaracteres = strlen($cadena);

            return [count($arrayPalabras), $numCaracteres];
        }

        function aplicarCryptMd5Sha1(string $cadena){
            return [crypt($cadena , '$2y$10$abcdefghijklmnopqrstuv'), md5($cadena), sha1($cadena)];
        }

    ?>
    
</body>

</html>