<!-- FORMULARIO INGLES -->
<!-- ENGLISH FORM -->


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
        <link rel="stylesheet" href="diseño_formularioen.css">
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
                        <li><a href="#quienessomos">About Us</a></li>
                        <li><a href="#tratamientos">Treatments</a></li>
                        <li><a href="formulario.php">Contact</a></li>
                        <li><a href="cerrar_sesion.php">Sign off</a></li>
                    </ul>
                </div>
            </nav>

        <!-- LANGUAGE BUTTON -->

            <div class="boton-container">
                <a href="bienvenidoen.php">
                <img src="IMG/esp.png"alt="" /></a>
            </div>
        </div>
        </header>

        <!-- FORM TITLE-->

        <div class="texto-form">
            <div class="txt-formulario">
                <h1>Form</h1>
            </div>
        </div>

        <!-- FORM -->

        <div class="formulario">
            <form method="POST" autocomplete="off">
                <h2>Shift Request</h2>
                <h4>Send us your information to communicate and coordinate an appointment</h4>

        <!-- FIELDS TO COMPLETE IN THE FORM -->

                <div class="input-grupo">
                    <div class="input-contenedor">
                        <input type="text" name="nombre" placeholder="Name">
                    </div>
                    <div class="input-contenedor">
                        <input type="text" name="apellido" placeholder="Lastname">
                    </div>
                    <div class="input-contenedor">
                        <input type="text" name="identidad" placeholder="Identification document">
                    </div>
                    <div class="input-contenedor">
                        <input type="text" name="domicilio" placeholder="Address">
                    </div>
                    <div class="input-contenedor">
                        <input type="text" name="localidad" placeholder="City">
                    </div>
                    <div class="input-contenedor">
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="input-contenedor">
                        <input type="tel" name="phone" placeholder="Phone">
                    </div>

        <!-- SEND BUTTON -->

                    <input type="submit" name="send" class="btn" value="Send">
                </div>
            </form>
        </div>

        <!-- MENU FOOTER -->        

        <footer class="footer-container">
            <div class="titulo-footer">
                <h4>Menu</h4>
                <div class="links">
                    <ul>
                        <li><a href="#quienessomos">About Us</a></li>
                        <li><a href="#tratamientos">Treatments</a></li>
                        <li><a href="formulario.php">Contact</a></li>
                    </ul>
                </div>
            </div>

        <!-- FOOTER LOGO -->            

            <div class="footer-2">
                <div class="footer-img">
                    <img class="logofooter" src="IMG/ostragrande.png" alt="" />
                </div>

        <!-- FOOTER SOCIAL NETWORKS -->

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
                <p>Maria Luzano &copy; 2023 - All rights reserved. By CODEPASS</p>
            </div>
        </footer>
        
        <script src="" async defer></script>
    </body>
</html>