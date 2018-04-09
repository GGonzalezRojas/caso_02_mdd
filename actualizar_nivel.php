<?php
include("basedatos.php");
$conexionbd = conectar_bd();
$nivel = $_POST['nivel'];
$id = $_POST['id'];

if(!empty($nivel) && !empty($id))
{
    $insertar = "UPDATE detective SET nivel = '$nivel' WHERE id='$id'";
    $exito = mysqli_query($conexionbd,$insertar);
    if($exito)
    {
        header('Location: solicitud_ascenso.php');
    }
    else
    {
        header('Location: modificar_nivel.php');
    }

}
else
{
    header("location: modificar_nivel.php");
}
?>