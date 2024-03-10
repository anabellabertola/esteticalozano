<?php

include("conexion_f.php");


if(isset($_POST['send'])) {

    if(
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellido']) >= 1 &&
        strlen($_POST['identidad']) >= 1 &&
        strlen($_POST['domicilio']) >= 1 &&
        strlen($_POST['localidad']) > 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['phone']) >= 1

    ) {
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $identidad = trim($_POST['identidad']);
        $domicilio = trim($_POST['domicilio']);
        $localidad = trim($_POST['localidad']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $fecha = date("d/m/y");
        $consulta = "INSERT INTO form(nombre, apellido, identidad, domicilio, localidad, email, telefono, fecha)
                    VALUES ('$nombre', '$apellido', '$identidad', '$domicilio', '$localidad', '$email', '$phone', '$fecha')";
        $resultado = mysqli_query($conexion, $consulta);

        if($resultado) {
            ?>
               <h3 class="success">¡Your registration has been completed!</h3>
            <?php
        }
        else {
            ?>
            <h3 class="error">¡An error has occurred!</h3>
         <?php
        }
    }
    else {
        ?>
        <h3 class="error">¡Please complete all required fields!</h3>
     <?php
    
    }
}