<?php

include '../clases/conexion.php';
include '../clases/usuario.php';

$objConexion = new conexion();
$conexion = $objConexion->conectar();

$objUsuario = new Usuario();

echo $objUsuario->eliminarId($conexion, $_POST['id']);

echo "<br><a href='../index.html'>Volver al menú</a>";