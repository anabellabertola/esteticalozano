<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor, debes iniciar sesión");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro de estética</title>
    <link rel="icon" href="IMG/icon.ico">
    <link rel="stylesheet" href="style_bienvenido.css" />
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

    <!--BOTON IDIOMA -->

                <div class="boton-container">
                    <a href="bienvenidoen.php">
                    <img src="IMG/logoingles.png"alt="" /></a>
                </div>
        </div>
        
    <!--BANNER -->

                <div class="txt-banner">
                    <h1>Dra Maria Luzano</h1>
                    <h2>Centro de Medicina</h2>
                    <h2>Estética</h2>
                    <h4>Hacemos de la <strong>medicina estética</strong> un concepto integral<br> y personalizado para que logres tu mejor versión</h4>
                    <button class="button" onmouseover="moverIcono(this)"  onmouseout="resetearIcono(this)">HACÉ TU CONSULTA</button>
                </div>
                <div class="img-banner">
                    <img src="IMG/banner1.jpg" alt="" />
                </div>
    </header>

    <!-- ¿QUIENES SOMOS? -->

    <section class="quienessomos">
        <img src="IMG/medica.png" alt="">
        <div class="txt-img">
            <h3 id="quienessomos">Quienes somos</h3>
            <h1>Dra Maria Luzano</h1>
            <p>Hacemos de la medicina estética un concepto integral y personalizado para que logres tu mejor versión. En los consultorios liderados por la Dra. Erica Polonsky (MEDICA U.B.A) nos ocupamos del cuidado de la salud y belleza de tu piel para que te veas y sientas plena a cualquier edad.
                Porque sabemos que no hay dos personas iguales, tampoco existen dos pieles similares.<br><br>
                Nos enfocamos hacia tus objetivos con procedimientos seguros y eficaces diseñados a medida 
                de tu fisonomía y necesidades, para alcanzar resultados impecables siempre del lado de la 
                belleza sana Y NATURAL.
                Somos referentes en tratamientos de estética faciales y corporales que te hacen lucir y 
                sentir increíble.<br><br> Trabajamos terapias innovadoras que combaten diversas molestias 
                típicas de la piel que se acentúan con el paso del tiempo, la genética y el ritmo de vida, 
                como el envejecimiento, la falta de luminosidad y la flacidez.
            </p>
        </div>
    </section>

    <!-- FRANJA LILA -->

    <div class="franja">
        <div class="item">
            <img class="logo-1" src="IMG/certificacion150.png" alt="">
            <p>30 años de trayectoria</p>
        </div>
        <div class="item">
            <img class="logo-2" src="IMG/clientes2.png" alt="">
            <p>Equipamiento de última generación</p>
        </div>
        <div class="item">
            <img class="logo-3" src="IMG/medalla2.png" alt="">
            <p>Prestigioso equipo de profesionales</p>
        </div>
        <div class="item">
            <img class="logo-4" src="IMG/dedochico.png" alt="">
            <p>Resultados reales</p>
        </div>
    </div>

    <!-- TRATAMIENTOS -->
    <section class="categorias">
        <div class="titulo-categoria">
            <h1>Nuestros servicios</h1>
            <h2 id="tratamientos">Tratamientos</h2>
        </div>
        <div class="categorias-trat">
            <div class="categoria-1">
                <img class="img-categoria" src="IMG/rubia.png" alt="">
                    <h1>Faciales</h1>
                    <p>Nuestras técnicas más solicitadas para prevenir y recuperar la tersura, 
                        LA LOSANIA, belleza y frescura del rostro incluyen 
                        rejuvenecimientos con bótox, hilos tensores de pdo, 
                        o con acido plilactico mas acido hialuronico , rellenos con ácido
                        hialurónico, Ultherapy® , rinomodelación, bioestimulación, 
                        Long lasting, profhilo. Endolifting.</p>
                            <button class="btn-1" onmouseover="moverIcono(this)"  onmouseout="resetearIcono(this)">VER MÁS</button>
            </div>
            <div class="categoria-2">
                <img class="img-categoria" src="IMG/pierna.png" alt="">
                    <h1>Corporales</h1>
                    <p>Tratamientos corporales destacan la lipoescultura láser lumiia Sonbean 980 ®, 
                        chip de la juventud (hormonal) para ambos sexos, 
                        incontinencia urinaria (Lumiia gyna®), rejuvenecimiento vaginal, M.E.L.A láser, 
                        depilación láser soprano XL® y tecnología de ultima generación en aparatologia 
                        estética.</p>
                            <button class="btn-1" onmouseover="moverIcono(this)"  onmouseout="resetearIcono(this)">VER MÁS</button>
            </div>
        </div>

    <!-- FRASE FINAL -->

        <div class="txt-final">
            <h1>Naturalidad, juventud y vitalidad a tu bienestar estético</h1>
            <a href="formulario.php">
                <button class="btn-3" onmouseover="moverIcono(this)"  onmouseout="resetearIcono(this)">RESERVÁ TU TURNO</button>
            </a>
        </div>
    </section>

    <!-- DESTACADO -->

    <section>
        <div class="container-txt">
            <h1>Láser XS</h1>
            <h2>DEPILACIÓN DEFINITIVA</h2>
                <button class="btn-depi" onmouseover="moverIcono(this)"  onmouseout="resetearIcono(this)">REALIZÁ TU CONSULTA</button>
        </div>
    </section>

    <!-- REDES SOCIALES 1 -->

        <div class="socials">
            <div class="titulo-social">
                <h1 id="redes">Nuestras redes</h1>
        </div>
        <div class="imagen-social">
            <div class="img-social">
                <a href="#">
                    <img class="social-1" onmouseover="moverIcono(this)"  onmouseout="resetearIcono(this)" src="IMG/logowp150.png" alt="" />
                </a>
                <a href="#">
                    <img class="social-2" onmouseover="moverIcono(this)"  onmouseout="resetearIcono(this)" src="IMG/instchico.png" alt="" />
                </a>
                <a href="#">
                    <img class="social-3" onmouseover="moverIcono(this)"  onmouseout="resetearIcono(this)" src="IMG/telchico.png" alt="" />
                </a>
            </div>
        </div>
       
    <!-- FOOTER -->

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

    <!-- LOGO -->

        <div class="footer-2">
            <div class="footer-img">
                <img class="logofooter" src="IMG/ostragrande.png" alt="" />
            </div>
        
    <!-- REDES SOCIALES 2 -->

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
    <script src="script.js"></script>
</body>
</html>