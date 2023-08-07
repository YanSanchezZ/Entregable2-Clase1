<?php

    include 'configuracion.php';



    $nombre = $_POST['nombre'];
    $clave = $_POST['clave'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];


    $query = "INSERT INTO tabla_usuarios(nombre, clave, correo, telefono) 
              VALUES('$nombre', '$clave', '$correo', '$telefono')";



    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>   
                alert("Registro exitoso");
                window.location = "idex.php";
            </script>        
        ';
    }



?>