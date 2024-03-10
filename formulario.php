<!-- FORMULARIO ESPAÑOL -->
<!-- SPANISH FORM -->


<?php

    include "send.php";

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Solicitud de Turno</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="IMG/icon.ico">
        <link rel="stylesheet" href="diseño_formulario.css">
    </head>
    <body>
        <header>
        
        <!-- MENU -->
    
        <div class="menu container">
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="IMG/menu1.png" class="menu-icono" alt="" />
            </label>
            <nav class="navbar">
                <div class="menu-1">
                    <ul>
                        <li><a href="#quienessomos">Sobre nosotros</a></li>
                        <li><a href="#tratamientos">Tratamientos</a></li>
                        <li><a href="formulario.php">Contacto</a></li>
                        <li><a href="cerrar_sesion.php">Cerrar sesion</a></li>
                    </ul>
                </div>
            </nav>

        <!-- BOTON IDIOMA -->

            <div class="boton-container">
                <a href="bienvenidoen.php">
                    <img src="IMG/logoingles.png"alt="" />
                </a>
            </div>
        </div>
        </header>

        <!-- TITULO FORMULARIO -->

        <div class="texto-form">
            <div class="txt-formulario">
                <h1>Formulario</h1>
            </div>
        </div>

        <!-- FORMULARIO -->
        
        <div class="formulario">
            <form method="POST" autocomplete="off">
                <h2>Solicitud de Turno</h2>
                <h4>Envienos sus datos para poder comunicarnos y coordinar un turno</h4>
        
        <!-- CAMPOS A COMPLETAR DEL FORMULARIO -->

                <div class="input-grupo">
                    <div class="input-contenedor">
                        <input type="text" name="nombre" placeholder="Nombre">
                    </div>
                    <div class="input-contenedor">
                        <input type="text" name="apellido" placeholder="Apellido">
                    </div>
                    <div class="input-contenedor">
                        <input type="text" name="identidad" placeholder="Documento de identidad">
                    </div>
                    <div class="input-contenedor">
                        <input type="text" name="domicilio" placeholder="Domicilio">
                    </div>
                    <div class="input-contenedor">
                        <input type="text" name="localidad" placeholder="Localidad">
                    </div>
                    <div class="input-contenedor">
                        <input type="email" name="email" placeholder="Correo">
                    </div>
                    <div class="input-contenedor">
                        <input type="tel" name="phone" placeholder="Telefono">
                    </div>

        <!-- BOTON ENVIAR -->

                    <input type="submit" name="send" class="btn" value="Enviar">
                </div>
            </form>
        </div>

        <!-- MENU FOOTER -->

        <footer class="footer-container">
            <div class="titulo-footer">
                <h4>Menú</h4>
                <div class="links">
                   <ul>
                       <li><a href="#quienessomos">Quienes Somos</a></li>
                       <li><a href="#tratamientos">Tratamientos</a></li>
                       <li><a href="formulario.php">Contacto</a></li>
                    </ul>
                </div>
            </div>

        <!-- LOGO FOOTER -->

            <div class="footer-2">
                <div class="footer-img">
                    <img class="logofooter" src="IMG/ostragrande.png" alt="" />
                </div>

        <!-- REDES SOCIALES FOOTER -->

                <div class="link">
                    <div class="link-social"  id="social" >
                        <a href="#">
                            <img class="img-1" onmouseover="moverIcono(this)"  onmouseout="resetearIcono(this)" src="IMG/calendar.png">
                        </a>
                        <a href="#">
                            <img class="img-2" onmouseover="moverIcono(this)"  onmouseout="resetearIcono(this)" src="IMG/instagram-2.png">
                        </a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- COPYRIGHT -->

        <footer class="copy">
            <div class="copyright">
                <p>Maria Luzano &copy; 2023 - Todos los derechos reservados. By CODEPASS</p>
            </div>
        </footer>
        
        <script src="" async defer></script>
    </body>
</html>