<?php
    include("basedatos.php");
    $conexion = conectar_bd();
    $consulta = "SELECT id,rut,nombre,apellidos FROM detective;";
    $resultado = mysqli_query($conexion,$consulta);
    mysqli_close($conexion);

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
        <h1 class="h1_1">ASCENDER A DETECTIVE</h1>
        <nav class="menu">
            <ul>
                <div class="centrado">
                    <?php
                    while($registro = mysqli_fetch_assoc($resultado))
                    {
                        echo '<li> Rut: =>'.$registro['rut'].'<br> Nombre: => '.$registro['nombre'].' '.$registro['apellidos'].'<br>';
                        echo '<a href="modificar_nivel.php?id='.$registro['id'].'">Modificar Nivel</a></li>';

                        /*echo '<a href="eliminarnodriza.php?id='.$registro['id'].'">Eliminar Nodriza</a></li>';*/
                    }
                ?>
                </div>
                
            </ul>
        </nav>

        <a href="gestionar_detective.html" class="boton">volver
    </body>
</html>
