<?php
$conexion = mysqli_connect("localhost","root","","mopc") or die("error en conexion: " . mysqli_error($conexion));

$registro = mysqli_query($conexion, "UPDATE `usuarios` SET `id`=NULL,`nombre`='$_REQUEST[nombre]',`lugarDeNacimiento`='$_REQUEST[lugarDeNacimiento]',`fechaDeNacimiento`='$_REQUEST[fechaDeNacimiento]',`nacionalidad`='$_REQUEST[Nacionalidad]',`sexo`='$_REQUEST[sexo]',`sangre`='$_REQUEST[sangre]',`estadoCivil`='$_REQUEST[estadoCivil]',`ocupacion`='$_REQUEST[ocupacion]',`tipoLicencia`='$_REQUEST[tipoLicencia]' WHERE nombre LIKE '$_REQUEST[nombre]'") or die("error en el update: " . mysqli_error($conexion));

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
                <p>Actualizado exitosamente</p>
                <a href="Actualizar_MOPC.html" class="btn btn-outline-primary mx-2">
                Volver</a>
            </div>
        </div>

        
    </body>
    </html>
<?php
?>