<?php

$conexion = mysqli_connect("localhost","root","","jce") or die("error en conexion: " . mysqli_error($conexion));

$registro = mysqli_query($conexion,"SELECT `id`, `nombre`, `lugarDeNacimiento`, `fechaDeNacimiento`, `nacionalidad`, `sexo`, `sangre`, `estadoCivil`, `ocupacion` FROM `usuarios` WHERE nombre='$_REQUEST[nombre]'") or die ("error en el select: " . mysqli_error($conexion));

if($reg = mysqli_fetch_array($registro)){
    include 'Actualizar_usuario_jce.html';
}else{
    echo 'No existe este usuario';
}

mysqli_close($conexion);
?>