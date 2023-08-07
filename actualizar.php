<?php
    include("cn.php");
    $id = $_GET ["id"];
    $usuarios = "SELECT * FROM tabla_usuarios WHERE id_usuario = '$id'";
?>


<html>
<head>
<meta charset="UFT-8">
<title>Actualizar Usuarios</title>
<meta name="viewport"
content="width=device.width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="estilos2.css">

</head>
<body>
    <form class="container-table container-table--edit" action="procesar_actualizar.php" method="post">
        <div class="table__tittle table__title-edit">Datos de usuarios</div>
        <div class="table__header">Nombre</div>
        <div class="table__header">Clave</div>
        <div class="table__header">Correo</div>
        <div class="table__header">Telefono</div>
        <div class="table__header">Operacion</div>
        <?php $resultado = mysqli_query ($conexion, $usuarios);         
        while($row=mysqli_fetch_assoc($resultado)){ ?>
        <input type="hidden" class="table__item" value="<?php echo $row["id_usuario"];?>" name="id">
        <input type="text" class="table__input" value="<?php echo $row["nombre"];?>" name="nombre">
        <input type="text" class="table__input" value="<?php echo $row["clave"];?>" name="clave">
        <input type="text" class="table__input" value="<?php echo $row["correo"];?>" name="correo">
        <input type="text" class="table__input" value="<?php echo $row["telefono"];?>" name="telefono">
                  
        <?php } mysqli_free_result($resultado);?>

        <input type="submit" value="Actualizar" class="container__submit container__submit--actualizar">

    
        </form>




</body>









</html>