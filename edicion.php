<?php
    include("cn.php");
    $usuarios = "SELECT * FROM tabla_usuarios";
?>


<html>
<head>
<meta charset="UFT-8">
<title>Edicion</title>
<meta name="viewport"
content="width=device.width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="estilos2.css">

</head>
<body>
    <div class="container-table container-table--edit">
        <div class="table__tittle">Datos de usuarios</div>
        <div class="table__header">Nombre</div>
        <div class="table__header">Clave</div>
        <div class="table__header">Correo</div>
        <div class="table__header">Telefono</div>
        <div class="table__header">Operacion</div>
        <?php $resultado = mysqli_query ($conexion, $usuarios);         
        while($row=mysqli_fetch_assoc($resultado)){ ?>
        <div class="table__item"><?php echo $row["nombre"];?></div>
        <div class="table__item"><?php echo $row["clave"];?></div>
        <div class="table__item"><?php echo $row["correo"];?></div>
        <div class="table__item"><?php echo $row["telefono"];?></div>
        <div class="table__item">
            <a href="actualizar.php?id=<?php echo $row["id_usuario"];?>" class="table__item__link">Editar</a> /
            <a href="eliminar.php?id=<?php echo $row["id_usuario"];?>" class="table__item__link">Eliminar</a>
        </div>  
        <?php } mysqli_free_result($resultado);?>

    
    </div>
    
    <script>src="confirmacion.js"</script>



</body>









</html>