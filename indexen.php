
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="IMG/icon.ico">
        <link rel="stylesheet" href="diseño-ien.css">
    </head>
    <body>

    <!-- LANGUAGE BUTTON -->

        <div class="boton-container">
            <a href="index.php">
            <img src="IMG/esp.png"alt="" /></a>
        </div>

    <!-- LOGIN AND REGISTER-->

        <main>
            <div class="contenedor__todo">
                <div class="caja__trasera">

    <!-- EXISTING ACCOUNT -->

                    <div class="caja__trasera-login">
                        <h3>Do you already have your account?</h3>
                        <p>Log in to enter the page</p>
                        <button id="btn__iniciar-sesion">Log in</button>
                    </div>

    <!-- NEW ACCOUNT -->

                    <div class="caja__trasera-register">
                        <h3>Do not you have an account yet?</h3>
                        <p>Register so you can log in</p>
                        <button id="btn__registrarse">Check in</button>
                    </div>
                </div>

    <!-- LOGIN AND REGISTER FORM FIELDS -->

                <div class="contenedor__login-register">

    <!-- ENTER EXISTING ACCOUNT -->

                    <form action="login_usuario.php" method="POST" class="formulario__login">

                        <h2>Log in</h2>
                        <input type="text" placeholder="Email" name="correo">
                        <input type="password" placeholder="Password" name="contrasena">
                        <button>Get in</button>
                    </form>

    <!-- REGISTER NEW ACCOUNT -->

                    <form action="registro_usuario.php" method="POST" class="formulario__register">
                        <h2>Check in</h2>
                        <input type="text" placeholder="Name" name="nombre">
                        <input type="text" placeholder="Email" name="correo">
                        <input type="text" placeholder="User" name="usuario">
                        <input type="password" placeholder="Password" name="contrasena">
                        <button>Check in</button>
                    </form>
                </div>
            </div>
        </main>
         
        <script src="script_index.js" async defer></script>
    </body>
</html>