<?php
    include 'clases/conexion.php';
    include 'clases/usuario.php';

    $objConexion = new Conexion();
    $objUsuario = new Usuario();

    $conexion = $objConexion->conectar();
    $datos = $objUsuario->consultar($conexion);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilos.css" />
</head>
    <body>
        <h2>Consultar y modificar</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Documento</th>
                <th>Fecha nacimiento</th>
                <th>Acción</th>
            </tr>
            <?php
                while($dato = mysqli_fetch_array($datos)){
            ?>
            <tr>
                <td><?php echo $dato['id'] ?></td>
                <td><?php echo $dato['nombre'] ?></td>
                <td><?php echo $dato['apellido'] ?></td>
                <td><?php echo $dato['documento'] ?></td>
                <td><?php echo $dato['fecha_nacimiento'] ?></td>
                <td><a class="btnEditar" href="confirmarEliminar.php?id=<?php echo $dato['id']; ?>">Eliminar</a></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </body>
</html>