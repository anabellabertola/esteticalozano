<?php

include 'conexion_index.php';

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);

$query = "INSERT INTO usuario(nombre, correo, usuario, contrasena)
                VALUES('$nombre', '$correo', '$usuario', '$contrasena')";

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo='$correo'");

    if(mysqli_num_rows($verificar_correo) > 0) {
        echo '
            <script>
                alert("Este correo ya está registrado, intente con uno diferente");
                window.location = "indexen.php";
            </script>
        ';
        exit();
    }

    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario='$usuario'");

    if(mysqli_num_rows($verificar_usuario) > 0) {
        echo '
            <script>
                alert("Este usuario ya está registrado, intente con uno diferente");
                window.location = "indexen.php";
            </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar) {
        echo '
            <script>
                alert("User successfully stored");
                window.location = "indexen.php";
            </script>
        ';
    }
    else {
        echo '
            <script>
                alert("Error registering, try again");
                window.location = "indexen.php";
            </script>
        ';

    }

    mysqli_close($conexion);


?>