<?php
    include("cn.php");

    $id = $_GET['id'];
    $eliminar = "DELETE FROM tabla_usuarios WHERE id_usuario = '$id'";
    $resultadoEliminar = mysqli_query($conexion, $eliminar);


    if($resultadoEliminar) {
        header("Location: edicion.php");
    }