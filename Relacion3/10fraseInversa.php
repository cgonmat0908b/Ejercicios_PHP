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
                        
                        echo "<h2>Palabras en orden inverso:</h2>";
                        for ($i = count($palabras); $i >= 0; $i--){
                            echo " $palabras[$i]";
                        }
                    }
                }
            ?>
        </div>

    </form>
    
</body>

</html>