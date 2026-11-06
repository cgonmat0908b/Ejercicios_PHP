<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php 
        $notaFinal = 0;
        $resultado = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            if(isset($_POST["num1"], $_POST["num2"], $_POST["numFaltas"])){
                $nota1 = (int) ($_POST["num1"]);
                $nota2 = (int) ($_POST["num2"]);
                $numFaltas = (int)($_POST["numFaltas"]);

                $notaFinal = ($nota1 + $nota2) / 2 - ($numFaltas * 0.25);
            }
        }

        if($notaFinal >=5){
            $resultado = "Aprobado";
        }else{
            $resultado = "Suspenso";
            if($notaFinal < 1){
                $notaFinal = 1;
            }
        }

    ?>

    <p>El resultado de  las notas y faltas introducidas es: <?= $resultado ?> </p>

</body>

</html>