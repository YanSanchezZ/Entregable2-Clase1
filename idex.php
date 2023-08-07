<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros - Usuarios</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <div class="panel_registro">

        <div class="fondo_registro">
            <div class="fondo_registro-login">
                <h3>Iniciar Sesion</h3>
                <button id="btn__iniciar_sesion">Inicio</button>                
            </div>
            <div class="fondo_registro-registro">
                <h3>Registrate Ahora</h3>
                <button id="btn__registrarse">Registrate</button>
            </div>            
        </div>

        <div class="contenedor_formularios">
            <form action="" class="formulario_inicio">
                <h2>Ingreso Tablas</h2>                
                <a href="tabla.php">CLICK AQUI</a><br><br>
            </form>

            <form action="registros.php" method="POST" class="formulario_registro">
                <h2>Registrate</h2>
                <input type="text" placeholder="Nombre Completo" name="nombre">
                <input type="text" placeholder="Clave" name="clave">
                <input type="text" placeholder="Correo Electronico" name="correo">
                <input type="text" placeholder="Telefono" name="telefono">
                <button>Registro</button>
            </form>


        </div>   


    </div>

    <script src="efecto.js"></script>


   


    
</body>
</html>