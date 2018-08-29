<?php

include 'clases/conexion.php';
include 'clases/usuario.php';

$objConexion = new conexion();
$objUsuario = new usuario();

$conexion = $objConexion->conectar();
$datos = $objUsuario->consultaId($conexion, $_GET['id']);

$id;
$nombre;
$apellido;
$documento;
$fechaNacimiento;

while($dato = mysqli_fetch_array($datos)){
    $id = $dato['id'];
    $nombre = $dato['nombre'];
    $apellido = $dato['apellido'];
    $documento = $dato['documento'];
    $fechaNacimiento = $dato['fecha_nacimiento'];
}

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
    <h1>Estás editando un usuario:</h1>
    <form action="./controlador/editar.php" method="post">
        <input type="hidden" name="id" id="" value="<?php echo $id ?>">
        <label for="">Nombre: </label>
        <input type="text" name="nombre" id="" value="<?php echo $nombre ?>"> <br>
        <label for="">Apellido: </label>
        <input type="text" name="apellido" id="" value="<?php echo $apellido ?>"> <br>
        <label for="">Documento: </label>
        <input type="text" name="documento" id="" value="<?php echo $documento ?>"> <br>
        <label for="">Fecha de nacimiento: </label>
        <input type="date" name="fechaNacimiento" id="" value="<?php echo $fechaNacimiento ?>"> <br>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>