<?php
include("conexion.php");

$nombre = $_POST["usuario"];
$pass = $_POST["pass"];
$puntuacion = $_POST["salate"];

//LOGIN
if(isset($_POST["btningresar"]))
{
    $query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '$nombre'AND contraseña='$pass'");
    $nr = mysqli_num_rows($query);

    if($nr==1){

        $puntuacion = $_POST["salate"];
        $sqlgrabarpuntos = "INSERT INTO puntos(usuario,puntuacion) values ('$nombre', '$puntuacion')";
        mysqli_query($conn,$sqlgrabarpuntos);
        echo "<script> alert('Bienvenido $nombre'); window.location='index.html' </script>";
    }else
    {
        echo "<script> alert('Este usuario no existe'); window.location='index.html' </script>";
    }
}
//Registrar
if(isset($_POST["btnregistrar"]))
{
    $sqlgrabarusuario = "INSERT INTO login(usuario,contraseña) values ('$nombre','$pass')";
    $sqlgrabarpuntos = "INSERT INTO puntos(usuario,puntuacion) values ('$nombre', 0)";

    if(mysqli_query($conn,$sqlgrabarusuario))
    {
        mysqli_query($conn,$sqlgrabarpuntos);
        echo "<script> alert('Usuario registrado con exito: $nombre'); window.location='index.html' </script>";
    }else
    {
        echo "Error:".$sql."<br>".mysql_error($conn);
    }
}
?>