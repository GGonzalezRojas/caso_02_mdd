<?php
include("basedatos.php");
date_default_timezone_set('America/Santiago');
$dia_actual = date('Y-m-d');
if(!empty($_POST["rut"]) && !empty($_POST["resumen_cv"]) && !empty($_POST["camara"]) && !empty($_POST["lentes"]) && !empty($_POST["tripode"]) && !empty($_POST["extras"]))
{
    $conexionbd = conectar_bd();
    $rut = $_POST["rut"];
    $resumen_cv = $_POST["resumen_cv"];
    $camara = $_POST["camara"];
    $lentes = $_POST["lentes"];
    $tipode = $_POST["tripode"];
    $extras = $_POST["extras"];
    $insertar = "INSERT INTO solicitud(rut,fecha,resumen_cv,camara,lentes,tripode,extras) VALUES ('$rut','$dia_actual','$resumen_cv','$camara','$lentes','$tripode','$extras')";
    $exito = mysqli_query($conexionbd,$insertar);
    if($exito)
    {
        header('Location: listar_solicitudes.php');
    }
    else
    {
        header('Location: formulario_nueva_solicitud.php');
    }

}
else
{
    header("location: formulario_nueva_solicitud.php");
}
?>