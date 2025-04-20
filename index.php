<?php

$shortDescription = "Soluciones jurídicas confiables y estratégicas para tus necesidades.";
$description = "Abogada experta en Derecho Laboral, Comercial, Societario, Civil, Público y Privado. Especializada en recursos humanos, administración de nómina y asesoría integral para tu negocio. Además, cuenta con amplia experiencia como Oficial de Cumplimiento (Sarlaft, Sagrilaft, PTEE), así como en marcas, tratamiento de datos personales y derechos de autor. Soluciones jurídicas confiables y estratégicas para tus necesidades.";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="author" content="rdaphq">
    <meta name="publisher" content="rdaphq">
    <meta name="generator" content="rdaphq">
    <meta name="webmaster" content="rdaphq">
    <meta name="developer" content="rdaphq">
    <meta name="designer" content="rdaphq">

    <meta name="copyright" content="&copy; 2025 Selenia Parra">

    <meta name="language" content="es">
    <meta name="distribution" content="global">
    <meta name="revisit-after" content="1 days">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">

    <meta name="description" content="Abogada, especializada en recursos humanos y administración de nómina para tu negocio. Ubicada en Medellín.">
    <meta name="keywords" content="Palabras clave, separadas por comas">
    <meta name="subject" content="Descripción del contenido de la página">

    <link rel="stylesheet" href="styles/style.css">

    <link rel="icon" href="assets/favicon.png">
    <link rel="favicon" href="assets/favicon.png">
    <link rel="shortcut icon" href="assets/favicon.png">
    <link rel="apple-touch-icon" href="assets/favicon.png">
    <link rel="mask-icon" href="assets/favicon.png">

    <link rel="canonical" href="https://seleniaparra.com">
    <link rel="alternate" href="https://seleniaparra.com">
    
    <title>Selenia Parra: Abogada, especializada en recursos humanos y nómina</title>
</head>
<body oncontextmenu="return false">
    <div class="wrapper">
        <nav class="navbar">
            <div class="navbar-logo">
                <a href="/"><img src="assets/brand/selenia-iso.png" alt="Selenia Parra Logo"></a>
            </div>
            <div class="navbar-menu">
                <a class="navbar-menu-link" href="#servicios">Servicios</a>
                <a class="navbar-menu-link" href="#experiencia">Experiencia</a>
                <a class="navbar-menu-link" href="/whatsapp">Contactar</a>
                <a class="navbar-menu-link burger hide" onclick="toggleNav()"><i class="fi fi-br-menu-burger"></i></a>
            </div>
        </nav>

        <div class="menu-mobile">
            <div class="menu-mobile-top">
                <i class="fi fi-br-cross"></i>
            </div>
            <div class="menu-mobile-links">
                <a href="#servicios">Servicios</a>
                <a href="#experiencia">Experiencia</a>
                <a href="/whatsapp">Contactar</a>
            </div>
        </div>

        <div class="container hero">
            <div class="inner">
                <div class="hero-wrapper">
                    <div class="hero-textarea">
                        <img src="assets/brand/selenia-logo_black.png" alt="Selenia Parra Logo">
                        <p><?php echo $shortDescription ?></p>
                        <div class="hero-buttons">
                            <a class="hero-button" href="#servicios"><i class="fi fi-br-briefcase"></i> Servicios</a>
                            <a class="hero-button variant" href="/whatsapp"><i class="fi fi-br-phone-call"></i> Contactar</a>
                        </div>
                    </div>
                    <div class="hero-icon">
                        <img src="assets/icons/law.png" alt="Law Icon">
                    </div>
                </div>
            </div>
        </div>

        <div class="container icons">
            <div class="inner">
                <div class="icons-wrapper">
                    <div class="icons-box">
                        <div class="icon">
                            <i class="fi fi-br-social-network"></i>
                            <p>Recomendada por empresas y clientes.</p>
                        </div>
                        <div class="icon">
                            <i class="fi fi-br-list-check"></i>
                            <p>Ahorra tiempo y ten todo al día.</p>
                        </div>
                        <div class="icon">
                            <i class="fi fi-br-marker"></i>
                            <p>Ubicada en el Área Metropolitana.</p>
                        </div>
                        <div class="icon">
                            <i class="fi fi-br-graduation-cap"></i>
                            <p>Profesional con 6+ años de experiencia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="experiencia" class="container expertise ySpaced">
            <div class="inner">
                <h2>Experiencia</h2>
                <p><?php echo $description ?></p>
            </div>
        </div>

        <div id="servicios" class="container services ySpaced">
            <div class="inner">
                <h2>Servicios</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.</p>
            </div>
        </div>

        <div class="container testimonials"></div>

        <div class="container contact">
            <div class="inner">
                <h3>¿Deseas asesoría para empezar?</h3>
                <a href="/whatsapp">Contactar</a>
            </div>
        </div>

        <footer class="footer">
            <div class="inner">
                <div class="footer-info">
                    <!-- <div class="footer-map">
                        <div class="map"></div>
                    </div> -->
                    <div class="footer-lists">
                        <div class="footer-lists-list">
                            <p>Página</p>
                            <a href="/">Inicio</a>
                            <a href="#experiencia">Experiencia</a>
                            <a href="#servicios">Servicios</a>
                            <a href="#contacto">Contacto</a>
                        </div>
                        <div class="footer-lists-list">
                            <p>Redes Sociales</p>
                            <a href="/facebook">Facebook</a>
                            <a href="/instagram">Instagram</a>
                            <a href="/twitter">Twitter</a>
                        </div>
                    </div>
                </div>
                <div id="copy" class="footer-copyright"></div>
            </div>
        </footer>
    </div>

    <script>
        document.getElementById("copy").innerHTML = `&copy; ${new Date().getFullYear()} Selenia Parra<br>Diseñado y desarrollado por <a href="https://rdaphq.com" target="_blank">Rdap</a>`;  
    </script>
</body>
</html>