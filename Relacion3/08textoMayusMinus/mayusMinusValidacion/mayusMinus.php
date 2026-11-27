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
                if (isset($_POST["texto"]) && (isset($_POST["mayus"])
                    || isset($_POST["minus"]))){
                    $texto = $_POST["texto"];
                    $opcion = "";

                    if(isset($_POST["mayus"])){
                        $texto = strtoupper($texto);
                        $opcion = $_POST["mayus"];
                    }else{
                        $texto = strtolower($texto);
                        $opcion = $_POST["minus"];
                }

                echo "Texto a $opcion: $texto";
            }
        }
                

    ?>
    
</body>

</html>