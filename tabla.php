<?php
    include("cn.php");
    $usuarios = "SELECT * FROM tabla_usuarios";
?>


<html>
<head>
<meta charset="UFT-8">
<title>Tabla Principal</title>
<meta name="viewport"
content="width=device.width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="estilos2.css">

</head>
<body>
    <div class="container-table">
        <div class="table__tittle table__title--edit">Datos de usuarios <a href="edicion.php" class="title_edit">Editar</a></div>
        <div class="table__header">Nombre</div>
        <div class="table__header">Clave</div>
        <div class="table__header">Correo</div>
        <div class="table__header">Telefono</div>
        <?php $resultado = mysqli_query ($conexion, $usuarios);         
        while($row=mysqli_fetch_assoc($resultado)){ ?>
        <div class="table__item"><?php echo $row["nombre"];?></div>
        <div class="table__item"><?php echo $row["clave"];?></div>
        <div class="table__item"><?php echo $row["correo"];?></div>
        <div class="table__item"><?php echo $row["telefono"];?></div>
        <?php } mysqli_free_result($resultado);?>

    
    </div>




</body>









</html>