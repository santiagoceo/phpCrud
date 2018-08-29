<?php

include '../clases/conexion.php';
include '../clases/usuario.php';

$objConexion = new conexion();
$conexion = $objConexion->conectar();

$objUsuario = new Usuario();

echo $objUsuario->registrar($conexion, $_POST['nombre'], $_POST['apellido'],
$_POST['documento'], $_POST['fechaNacimiento']);

echo "<br><a href='../index.html'>Volver al menú</a>";
