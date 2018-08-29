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
</head>
    <body>
        <h2>Consultar</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Documento</th>
                <th>Fecha nacimiento</th>
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
            </tr>
            <?php
                }
            ?>
        </table>
    </body>
</html>