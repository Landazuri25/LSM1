<?php
    $puntuacion = $_POST["punto"];
 ?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Bienvenido a LSM</title> 
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
        <link rel="stylesheet" href="estilos.css">
    </head>  
    <body style="background-color: slategray;">
        <h1 style="color: #1a2537; text-align: center;"> Aprende México  en LSM</h1>
        <a href="index.html"><img src="img/flecha.png" style=" width: 80px; margin-left: 5em; margin-top: -3em; position: absolute;"></a>
        <form class="formulario" action="login_registrar.php" method="POST">
            <h1>Ingresar puntos</h1>
            <div class="contenedor" style="margin-top: 1em; margin-right: -1em;">
                <div class="input-contenedor" >
                    <i class="fas fa-envelope icon"></i>
                    <input type="text" placeholder="Usuario" name="usuario" required>
                </div>
                <div class="input-contenedor">
                    <i class="fas fa-key icon"></i>
                    <input type="password" placeholder="Contraseña" name="pass" required>
                </div>
                <p>La puntuacion es de: <?php echo $puntuacion;?></p>
                <?php $_POST["pn"] = $puntuacion?>
            </div>
            <a href="inicio.html" > <input type="submit" value="Ingresar puntos" class="button" name="btningresar"></a>
            <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
            <p>¿No tienes una cuenta?</p> <p><a class="link" href="index.html">Ve al inicio y create una cuenta para poder registrar puntuaciones </a></p>
        </form>
    </body>
</html>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>