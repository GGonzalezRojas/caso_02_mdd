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
            <h1 class="h1_1">Ingrese Nueva solicitud</h1>  
        </div>
        
        <div class="centrado">
            <form action="agregar_solicitud.php" method="post">
                Ingrese Rut:
                <br>
                <input type="text" name="rut" placeholder="Rut nuevo detective">
                <br>
                Ingrese resumen cv:
                <br>
                <input type="text" name="resumen_cv" placeholder="Resumen CV">
                <br>
                Ingrese camara:
                <br>
                <input type="text" name="camara" placeholder="Camara">
                <br>
                Ingrese lentes:
                <br>
                <input type="text" name="lentes" placeholder="Lentes">
                <br>
                Ingrese tripode:
                <br>
                <input type="text" name="tripode" placeholder="Tripode">
                <br>
                Ingrese extras:
                <br>
                <input type="text" name="extras" placeholder="Extras">
                <br>
                <input type="submit" name="Agregar nueva solicitud"> 
            </form>
        </div>
    <a href="gestionar_solicitud.html" class="boton centrado">Volver</a>

    </body>
</html>