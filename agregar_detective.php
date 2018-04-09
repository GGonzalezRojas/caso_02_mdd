<?php
include("basedatos.php");

if(!empty($_POST["rut"]) && !empty($_POST["nombre"]) && !empty($_POST["apellidos"]) && !empty($_POST["direccion"]) && !empty($_POST["ciudad"]) && !empty($_POST["codigo_postal"]) && !empty($_POST["telefono"]))
{
    $conexionbd = conectar_bd();
    $rut = $_POST["rut"];
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $direccion = $_POST["direccion"];
    $ciudad = $_POST["ciudad"];
    $codigo_postal = $_POST["codigo_postal"];
    $telefono = $_POST["telefono"];
    $insertar = "INSERT INTO detective(rut,nombre,apellidos,direccion,ciudad,codigo_postal,telefono) VALUES ('$rut','$nombre','$apellidos','$direccion','$ciudad','$codigo_postal','$telefono')";
    $exito = mysqli_query($conexionbd,$insertar);
    if($exito)
    {
        header('Location: listar_detective.php');
    }
    else
    {
        header('Location: formulario_nuevo_detective.php');
    }

}
else
{
    header("location: formulario_nuevo_detective.php");
}
?>