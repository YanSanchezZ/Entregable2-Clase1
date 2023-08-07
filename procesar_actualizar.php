<?php
    include("cn.php");

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $clave = $_POST['clave'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];


    $actualizar = "UPDATE tabla_usuarios SET nombre='$nombre', clave='$clave', correo='$correo', telefono='$telefono' WHERE id_usuario='$id'";


    $resultado=mysqli_query($conexion,$actualizar);


    if($resultado) {
        echo "<script>alert('CAMBIOS GUARDADOS actuialice la pagina para ver los cambios'); window.location='edicion.php';</script>";
    }