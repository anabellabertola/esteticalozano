<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("To enter, you must log in");
                window.location = "indexen.php";
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
    <link rel="stylesheet" href="style_en.css" />
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
                        <li><a href="#quienessomos">About us</a></li>
                        <li><a href="#tratamientos">Treatments</a></li>
                        <li><a href="formulario.php">Contact</a></li>
                        <li><a href="cerrar_sesion.php">Sign off</a></li>
                    </ul>
                </div>
            </nav>

    <!-- LANGUAGE BUTTON -->

            <div class="boton-container">
                <a href="bienvenido.php">
                <img src="IMG/logoingles.png"alt="" /></a>
            </div>
        </div>

    <!--BANNER -->

        <div class="txt-banner">
            <h1>Dra Maria Luzano</h1>
            <h2>Medicine Center</h2>
            <h2>Esthetic</h2>
            <h4>We make the <strong>aesthetic medicine</strong> a comprehensive concept<br>and personalized so that you achieve your best version</h4>
                <button class="button" onmouseover="moverIcono(this)"  onmouseout="resetearIcono(this)">MAKE YOUR QUERY</button>
        </div>
        <div class="img-banner">
            <img src="IMG/banner1.jpg" alt="" />
        </div>
    </header>

    <!-- ABOUT US? -->

    <section class="quienessomos">
        <img src="IMG/medica.png" alt="">
        <div class="txt-img">
            <h3 id="quienessomos">About Us</h3>
            <h1>Dra Maria Luzano</h1>
            <p>We make aesthetic medicine a comprehensive and personalized concept so that you can achieve your best version. In the offices led by Dr. Erica Polonsky (MEDICA U.B.A) we take care of the health and beauty of your skin so that you look and feel full at any age.
                Because we know that no two people are the same, nor are there two similar skins.<br><br>We focus on your goals with safe and effective procedures designed to suit your physiognomy and needs, to achieve impeccable results always on the side of beauty. healthy AND NATURAL.
                We are leaders in facial and body aesthetic treatments that make you look and feel incredible.<br><br> We work with innovative therapies that combat various typical skin discomforts that are accentuated with the passage of time, genetics and the pace of life. , such as aging, lack of luminosity and sagging.</p>
    </section>

    <!-- LILA STRIP -->

    <div class="franja">
        <div class="item">
            <img class="logo-1" src="IMG/certificacion150.png" alt="">
            <p>30 years of experience</p>
        </div>
        <div class="item">
            <img class="logo-2" src="IMG/clientes2.png" alt="">
            <p>Latest generation equipment</p>
        </div>
        <div class="item">
            <img class="logo-3" src="IMG/medalla2.png" alt="">
            <p>Prestigious team of professionals</p>
        </div>
        <div class="item">
            <img class="logo-4" src="IMG/dedochico.png" alt="">
            <p>Real results</p>
        </div>
    </div>

    <!-- TREATMENTS -->

    <section class="categorias">
        <div class="titulo-categoria">
            <h1>Our services</h1>
            <h2 id="tratamientos">Treatments</h2>
        </div>
        <div class="categorias-trat">
            <div class="categoria-1">
                <img class="img-categoria" src="IMG/rubia.png" alt="">
                <h1>Facials</h1>
                <p>Our most requested techniques to prevent and recover smoothness,
                    LA LOSANIA, beauty and freshness of the face include
                    rejuvenations with botox, pdo tension threads,
                    or with plylactic acid plus hyaluronic acid, filled with acid
                    hyaluronic, Ultherapy®, rhinomodeling, biostimulation,
                    Long lasting, profilo. Endolifting.</p>
                    <button class="btn-1" onmouseover="moverIcono(this)"  onmouseout="resetearIcono(this)">SEE MORE</button>
            </div>
            <div class="categoria-2">
                <img class="img-categoria" src="IMG/pierna.png" alt="">
                <h1>Corporal</h1>
                <p>Body treatments highlight lumiia Sonbean 980 ® laser liposculpture,
                    youth chip (hormonal) for both sexes,
                    urinary incontinence (Lumiia gyna®), vaginal rejuvenation, M.E.L.A laser,
                    Soprano XL® laser hair removal and latest generation technology in appliances
                    esthetic.</p>
                    <button class="btn-1" onmouseover="moverIcono(this)"  onmouseout="resetearIcono(this)">SEE MORE</button>
            </div>
        </div>

    <!-- FINAL PHRASE -->

            <div class="txt-final">
                <h1>Naturalness, youth and vitality to your aesthetic well-being</h1>
                <a href="formulario.php">
                <button class="btn-3" onmouseover="moverIcono(this)"  onmouseout="resetearIcono(this)">BOOK YOUR TURN</button>
                </a>
            </div>
    </section>

    <!-- DOUTSTANDING -->

    <section>
        <div class="container-txt">
            <h1>Laser XS</h1>
            <h2>PERMANENT HAIR REMOVAL</h2>
            <button class="btn-depi" onmouseover="moverIcono(this)"  onmouseout="resetearIcono(this)">MAKE YOUR QUERY</button>
        </div>
    </section>

    <!-- SOCIAL NETWORKS 1 -->
    <div class="socials">
        <div class="titulo-social">
            <h1 id="redes">Our networks</h1>
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
    </div>

    <!-- FOOTER -->

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

    <!-- LOGO -->

        <div class="footer-2">
            <div class="footer-img">
                <img class="logofooter" src="IMG/ostragrande.png" alt="" />
            </div>

    <!-- SOCIAL NETWORKS 2 -->
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
        <script src="script.js"></script>
</body>
</html>