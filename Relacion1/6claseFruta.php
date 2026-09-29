<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php  
    
        class Fruit{
            public $nombre;
            public $color;

            function __construct($nombre, $color){
                $this->nombre = $nombre;
                $this->color = $color;
            }

            function set_nombre($nombre){
                $this->nombre = $nombre;
            }

            function get_nombre(){
                echo "Nombre: " . $this->nombre;
            }
        }

        $apple = new Fruit("Manzana", "Roja");
        $banana = new Fruit("Platano", "Amarillo");

        $apple -> get_nombre();
        echo "<br>";
        $banana -> get_nombre();
        echo "<br><p>Tras cambiarles el nombre: </p>";

        $apple -> set_nombre("Uva");
        $banana -> set_nombre("Melón");

        $apple -> get_nombre();
        echo "<br>";
        $banana -> get_nombre();
        echo "<br>";
    
    ?>

</body>

</html>