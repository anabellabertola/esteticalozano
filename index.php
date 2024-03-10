
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="IMG/icon.ico">
        <link rel="stylesheet" href="diseño_index.css">
        <title>Estetica Lozano</title>
    </head>
    <body>

    <!-- BOTON IDIOMA -->

    <!-- LOGIN Y REGISTER -->

        <main>
            <div class="contenedor__todo">
                <div class="caja__trasera">

    <!-- CUENTA EXISTENTE -->
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inica sesión para entrar a la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
    <!-- CUENTA NUEVA -->
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Registrarse</button>
                    </div>
                </div>

    <!-- CAMPOS DE FORMULARIO LOGIN Y REGISTER -->

                <div class="contenedor__login-register">

    <!-- ENTRAR A CUENTA EXISTENTE -->

                    <form action="login_usuario.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" placeholder="Correo Eletrónico" name="correo">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Entrar</button>
                    </form>

    <!-- REGISTRAR NUEVA CUENTA -->
    
                    <form action="registro_usuario.php" method="POST" class="formulario__register">
                        <h2>Registrarse</h2>
                        <input type="text" placeholder="Nombre completo" name="nombre">
                        <input type="text" placeholder="Correo Electrónico" name="correo">
                        <input type="text" placeholder="Usuario" name="usuario">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Registrarse</button>
                    </form>
                </div>
            </div>
        </main>

        <script src="script_index.js" async defer></script>
    </body>
</html>