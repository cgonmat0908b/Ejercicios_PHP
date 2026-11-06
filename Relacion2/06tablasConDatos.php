<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas varias con bootstrap</title>

    <!-- Enlace de la hoja de estilo de bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">

</head>

<body>

    <?php  
        $personas = [
            ["nombre" => "Juan", "apellido" => "García", "correo" => "juan@gmail.com", "telefono" => "612345678", "edad" => 25],
            ["nombre" => "María", "apellido" => "López", "correo" => "maria@gmail.com", "telefono" => "623456789", "edad" => 30],
            ["nombre" => "Pedro", "apellido" => "Martínez", "correo" => "pedro@gmail.com", "telefono" => "634567890", "edad" => 22],
            ["nombre" => "Lucía", "apellido" => "Fernández", "correo" => "lucia@gmail.com", "telefono" => "645678901", "edad" => 28],
            ["nombre" => "Carlos", "apellido" => "Sánchez", "correo" => "carlos@gmail.com", "telefono" => "656789012", "edad" => 35]
        ];
    ?>

    <h2>Listado de Personas</h2>

    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th scope="col" class="theme-success">Nombre</th>
                <th scope="col" class="theme-success">Apellido</th>
                <th scope="col" class="theme-success">Correo</th>
                <th scope="col" class="theme-success">Teléfono</th>
                <th scope="col" class="theme-success">Edad</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($personas as $persona): ?>
                <tr>
                    <td class="theme-primary"><?= $persona["nombre"] ?></td>
                    <td class="theme-accent"><?= $persona["apellido"] ?></td>
                    <td class="theme-info"><?= $persona["correo"] ?></td>
                    <td class="theme-warning"><?= $persona["telefono"] ?></td>
                    <td class="theme-danger"><?= $persona["edad"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        
    </table>
    
</body>

</html>