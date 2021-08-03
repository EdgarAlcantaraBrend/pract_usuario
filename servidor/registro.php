<?php 

    $nombre = $_POST['nombre'];
    $paterno = $_POST['paterno'];
    $materno = $_POST['materno'];
    $sexo = $_POST['sexo'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $password = sha1($_POST['password']);

    include "conexion.php";
    $conexion = conexion();

    $sql = "SELECT usuario FROM t_usuario WHERE usuario= '$usuario'";
    $respuesta =mysqli_query($conexion,$sql);
    if (mysqli_num_rows($respuesta)>0) {
        echo "Este usuario ya existe, usa otro.!";
        exit;
    }
    $sql =  "INSERT INTO t_usuario (nombre,
                                    paterno,
                                    materno,
                                    sexo,
                                    telefono,
                                    email,
                                    usuario,
                                    password)
                VALUES ('$nombre',
                        '$paterno',
                        '$materno',
                        '$sexo',
                        '$telefono',
                        '$email',
                        '$usuario',
                        '$password')";

    $respuesta = mysqli_query( $conexion,$sql);
    mysqli_close($conexion);

    if ($respuesta) {
        header("location:../index.php");
    }else{
        echo "No se pudo registrar";
    }

?>