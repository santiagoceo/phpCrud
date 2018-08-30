<?php

class Usuario {

    public function registrar($conexion, $nombre, $apellido, $documento, $fechaNaci){
        $query = "INSERT INTO usuario (nombre, apellido, documento, fecha_nacimiento)
        VALUES ('$nombre','$apellido','$documento','$fechaNaci');";
        $consulta = mysqli_query($conexion, $query);
        if ($consulta){
            $respuesta = "Usuario registrado";
        }else{
            $respuesta = "Problemas al registrar, el error es: ". mysqli_error($conexion);
        }

        return $respuesta;
    }

    public function consultar($conexion){
        $query = "SELECT * FROM usuario;";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }

    public function consultaId($conexion, $id){
        $query = "SELECT * FROM usuario WHERE id = $id";
        $consulta = mysqli_query($conexion, $query);
        return $consulta;
    }

    public function actualizarId($conexion, $id, $nombre, $apellido, $documento, $fechaNacimiento){
        $query = "UPDATE usuario SET nombre = '$nombre', apellido = '$apellido', 
        documento = '$documento', fecha_nacimiento = '$fechaNacimiento' WHERE id = '$id' ;";
        $consulta = mysqli_query($conexion, $query);
        if ($consulta){
            $respuesta = "Usuario actualizado";
        }else{
            $respuesta = "Problemas al actualizar, el error es: ". mysqli_error($conexion);
        }

        return $respuesta;
    }

    public function eliminarId($conexion, $id){
        $query = "DELETE from usuario WHERE id = '$id';";
        $consulta = mysqli_query($conexion, $query);
        if ($consulta){
            $respuesta = "Usuario eliminado";
        }else{
            $respuesta = "Problemas al eliminar, el error es: ". mysqli_error($conexion);
        }

        return $respuesta;
    }
}