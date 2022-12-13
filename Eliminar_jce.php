<?php


$conexion = mysqli_connect("localhost","root","","jce") or die("error en conexion: " . mysqli_error($conexion));

$registro = mysqli_query($conexion,"SELECT `id`, `nombre`, `lugarDeNacimiento`, `fechaDeNacimiento`, `nacionalidad`, `sexo`, `sangre`, `estadoCivil`, `ocupacion` FROM `usuarios` WHERE nombre='$_REQUEST[nombre]'") or die ("error en el select: " . mysqli_error($conexion));

if($reg = mysqli_fetch_array($registro)) {
    mysqli_query($conexion,"DELETE FROM `usuarios` WHERE nombre='$_REQUEST[nombre]'") or die("error en el delete: " . mysqli_error($conexion));

    ?>
         <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="row">
            <div class="col-5">
                <p>borrado exitosamente</p>
                <a href="Eliminar_jce.html" class="btn btn-outline-primary mx-2">
                Volver</a>
            </div>
        </div>
    </body>
    </html>
    <?php
}else{
    echo 'No existe ese usuario';
}

mysqli_close($conexion);
?>