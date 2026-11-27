<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">

        <label for="texto">Introduce un texto</label>
        <input type="text" id="texto" name="texto">

        <select name="mayusMinus" id="mayusMinus">
            <option value="mayus">Mayusculas</option>
            <option value="minus">Minusculas</option>
        </select>

        <button type="submit">Mostrar Resultado</button>
    
    </form>
    <div id="Resultado">
        <?php 
        
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST["texto"]) && isset($_POST["mayusMinus"])){
                    $texto = $_POST["texto"];
                    $opcion = $_POST["mayusMinus"];

                    if($opcion == "mayus"){
                        $texto = strtoupper($texto);
                    }else{
                        $texto = strtolower($texto);
                    }

                    echo "Texto a $opcion: $texto";
                }
            }
                

        ?>
    </div>

</body>

</html>