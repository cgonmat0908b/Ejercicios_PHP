<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">

        <label for="texto">Introduce el texto:</label>
        <input type="text" name="texto">

        <button type="submit">Mostrar palabra más larga</button>

        <div id="Resultado">
            <?php
            
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST["texto"])){
                        $palabras = explode(" ", $_POST["texto"]);
                        $masLarga = $palabras[0];
                        for ($i = 1; $i < count($palabras); $i++){
                            if(strlen($palabras[$i]) > strlen($masLarga)){
                                $masLarga = $palabras[$i];
                            }
                        }

                        echo "La palabra más larga es: $masLarga";
                    }
                }
            ?>
        </div>

    </form>
    
</body>

</html>