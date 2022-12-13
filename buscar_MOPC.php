<?php
$conexion = mysqli_connect("localhost","root","","mopc") or die("erro en la conexion: " . mysqli_error($conexion));

$registro = mysqli_query($conexion,"SELECT `id`, `nombre`, `lugarDeNacimiento`, `fechaDeNacimiento`, `nacionalidad`, `sexo`, `sangre`, `estadoCivil`, `ocupacion`, `tipoLicencia` FROM `usuarios` WHERE nombre='$_REQUEST[nombre]'");

if($reg = mysqli_fetch_array($registro)) {
    echo 'Nombre: ' . $reg['nombre'] . '<br>';
    echo 'Lugar de nacimiento: ' . $reg['lugarDeNacimiento'] . '<br>';
    echo 'Fecha de nacimiento: ' . $reg['fechaDeNacimiento'] . '<br>';
    echo 'Nacionalidad : ';
    switch($reg['nacionalidad']) {
        case 'DOM':
            echo 'Dominicano';
            break;
        
        case 'PR':
            echo 'puertoriqueño';
            break;
        
        case 'USA':
            echo 'Estadounidence';
            break;
    }
    echo '<br>';

    echo 'Sexo: ';
    switch($reg['sexo']) {
        case 'M':
            echo 'M';
            break;
           
        case 'F':
            echo 'F';
            break;
        
        case 'NULO':
            echo 'nulo';
            break;
    }
    echo '<br>';

    echo 'Sangre: ';
    switch($reg['sangre']) {
        case 'A+':
            echo 'A+';
            break;

        case 'A-':
            echo 'A+';
            break;

        case "O+";
            echo'O+';
            break;

        case "O-";
            echo 'O-';
            break;
    }
    echo '<br>';

    echo 'Estado civil: ';
    switch($reg['estadoCivil']) {
        case 'casado':
            echo 'Casado/a';
            break;

        case 'soltero':
            echo 'Soltero/a';
            break;
    }
    echo '<br>';

    echo 'Ocupacion: ';
    switch($reg['ocupacion']) {
        case 'Estudiante':
            echo 'Estudiante';
            break;

        case  'Tecnologo':
            echo 'Tecnologo';
            break;

        case 'Licenciado':
            echo 'Licenciado';
            break;

        case 'Doctor':
            echo 'Doctor';
            break;

        case 'Tecnico':
            echo 'Tecnico';
            break;
    }
    echo '<br>';

    echo 'Licencia: ';
    switch($reg['tipoLicencia']) {
        case 'Catg.1':
            echo 'Catg.1';
            break;

        case 'Catg.2':
            echo 'Catg.2';
            break;

        case 'Catg.3':
            echo 'Catg.3';
            break;

        case 'Catg.4':
            echo 'Catg.4';
            break;
       
    }

}else{
    echo 'No existe dicho usuario';
}

mysqli_close($conexion);

?>