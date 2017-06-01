<?php
    include 'Constantes.php';
    include 'Librerias.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <div><?php if(isset($_SESSION['USR'])){ ?>
            <a href="Prueba.php">Pruebas</a>
            <a href="controladores/CerrarSesion.php">Cerrar Sesión</a>
            <?php } ?>
        </div>       
         <?php if(!isset($_SESSION['USR'])){ ?>
        <form action="controladores/IniciarSesion.php" method="post">
            <div><label>Usuario</label><input type="text" name="nombre"></div>
            <div><label>Clave</label><input type="password" name="clave"></div>
            <input type="submit" value="Acceder">
        </form>
        <?php
         }
        ?>
    </body>
</html>
