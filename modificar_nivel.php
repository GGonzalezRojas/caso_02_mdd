<?php
include("basedatos.php");
$conexion = conectar_bd();
$id = $_GET['id'];
$query = "SELECT id,nivel FROM detective WHERE id=".$id." LIMIT 1";
$resultado = mysqli_query($conexion,$query);
mysqli_close($conexion);

$registro = mysqli_fetch_assoc($resultado);
$ide_1 = $registro['ide'];
$nivel = $registro['nivel'];
$id_1 = $registro['id'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Incorporación de estilos -->
    <link rel="stylesheet" href="estilos.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INSPECTOR CAT-JET</title>
</head>
    <body>
        <div>
        <h1 class="h1_1">MODIFICAR NIVEL</h1>
        </div>

       <form action="actualizar_nivel.php" method="post class="centrado"">
            Ingrese Nuevo Nivel:
            <br>
            <input type="number" name="nivel" value= " <?php echo $id_1 ?> " >
            <br>
            <input type="submit" name="Actualizar Nivel">
            
       </form>
       </a>
        <br>
        <a href="gestionar_solicitud.html" class="boton">volver
        </a>
    </body>
</html>