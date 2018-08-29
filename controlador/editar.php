<?php

include '../clases/conexion.php';
include '../clases/usuario.php';

$objConexion = new conexion();
$conexion = $objConexion->conectar();

$objUsuario = new Usuario();

echo $objUsuario->actualizarId($conexion, $_POST['id'], $_POST['nombre'], $_POST['apellido'],
$_POST['documento'], $_POST['fechaNacimiento']);