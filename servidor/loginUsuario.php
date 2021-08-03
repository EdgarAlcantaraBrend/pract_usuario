<?php 
    session_start();
    $usuario = $_POST['usuario'];
    $password = sha1($_POST['password']);

    include "conexion.php";
    $conexion =  conexion();

    echo $sql = "SELECT * FROM t_usuario
                WHERE usuario = '$usuario' AND password = '$password'";

                $respuesta = mysqli_query($conexion, $sql);

                if (mysqli_num_rows($respuesta)>0) {
                        
                        $_SESSION['usuario']= $usuario;
                        header("location:../inicio.php");

                }else{
                    mysqli_close($conexion);
                    header("location:../index.php");
                }

?>