<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Enlace de la hoja de estilo de bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="bg-secondary ">

    <!-- Guia grid para distribuir espacio-->
    <!-- 1º Div con class "container"-->

    <div id="main" class="container text-center bg-secondary-subtle min-vh-100">

        <h2 class="text-primary mt-3 pt-4">Formulario de referencia</h2>
        <!-- 2º Div con class "row" -->
        <div class="row">

            <!-- 3º Número de columnas en las que distribuimos la página
            en total, 12 columnas -->
            <div class="col-md-3 col-sm-1 col-0">
                <!-- Espacio en blanco a la izuierda -->
            </div>

            <div class="col-md-6 col-sm-10 col-12">

                <form class="m-auto mt-5 border rounded p-4 shadow-lg" action="" method="post">

                    <div class="mb-3">
                        <label for="number" class="form-label">Factorial de:</label>
                        <input type="number" name="num" id="num" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                    
                </form>

            </div>

            <div id="resultado" class="col-md-6 col-sm-10 col-12 mx-auto mt-4 border rounded p-4 shadow-lg">

            </div>

            </div>

            <div class="col-md-3 col-sm-1 col-0">
                <!-- Espacio en blanco a la derecha -->
            </div>

        </div>

    </div>

    <!-- Bloque script para validación de datos -->
    <script>
        let formulario = document.querySelector("form");
        formulario.addEventListener("submit", envio);

        function envio(evento){
            let num = parseInt(document.getElementById("num").value);
            let formValido = true;

            if(isNaN(num) || !Number.isInteger(num) || num < 0 ){
                formValido = false;
                alert("Número invalido");
            }else{
                formValido = true;
            }

            if(!formValido){
                evento.preventDefault();
            }
        }

    </script>
    
    <!-- Lógica y muestra del programa -->
    <?php
    

        

        if (isset($_POST["num"])){
            $num = $_POST["num"];
            $contador = $num;
            $acum = $num;

            if($num == 0 || $num == 1){
                $acum = 1;

                echo("<script>document.getElementById('resultado').innerHTML += ".
                "'" . $acum . " * " . $contador . "");

                $acum = $acum * $contador;
                echo(" = " . $acum . "<br>'</script>");

            }else{
                while($contador > 1){
                    $contador--;
                    echo("<script>document.getElementById('resultado').innerHTML += ".
                    "'" . $acum . " * " . $contador . "");

                    $acum = $acum * $contador;
                    echo(" = " . $acum . "<br>'</script>");
                }
            }
        }

    ?>

</body>

</html>