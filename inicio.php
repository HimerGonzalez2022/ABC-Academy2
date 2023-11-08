<?php
include("conexion.php");
session_start();
if(!isset($_SESSION['id_usuario'])){
    header("Location: index.php");
    exit();
}

$iduser = $_SESSION['id_usuario'];

$sql = "SELECT idusuarios, Nombre FROM usuarios WHERE idusuarios = '$iduser'";

$resultado = $conexion->query($sql);

if (!$resultado) {
    die('Error al ejecutar la consulta: ' . $conexion->error);
}

$row = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Bienvenido, explora un mundo nuevo de conocimiento, Macro y micro skills, Niveles en el idioma, Nivel Básico, Intermedio, Avanzado, ​​No pierdan la oportunidad de darlte una ventaja en la vida y cumplir tus sueños, ABC ACADEMY FOR KIDS">
    <meta name="description" content="">
    <title>Inicio</title>
    <link rel="stylesheet" href="style.css" media="screen">
<link rel="stylesheet" href="Inicio.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.21.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/nombrelogoazul.svg"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Inicio">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>

  <body data-path-to-root="./" data-include-products="false" class="u-body u-stick-footer u-xl-mode" data-lang="es" >

    <header class="u-box-shadow u-clearfix u-header u-sticky u-sticky-7676 u-white u-header" id="sec-8761">
      <div class="u-clearfix u-sheet u-sheet-1">
        <a href="Inicio.html" class="u-image u-logo u-image-1" data-image-width="250" data-image-height="169">
          <img src="images/nombrelogoazul.svg" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-offcanvas-shift u-menu-1" data-responsive-from="MD" data-submenu-level="with-reload">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-border-radius u-custom-borders u-custom-color u-custom-effect-duration u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-custom-color-1 u-text-hover-palette-2-base" href="#" style="padding: 8px 6px; font-size: calc(1em + 16px); background-image: none;">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-20 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-active-custom-color-1 u-border-2 u-border-active-custom-color-1 u-border-hover-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-radius-50 u-text-active-white u-text-custom-color-1 u-text-hover-white" href="Inicio.html" style="padding: 10px;">Inicio</a>
</li><li class="u-nav-item"><a class="u-active-custom-color-1 u-border-2 u-border-active-custom-color-1 u-border-hover-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-radius-50 u-text-active-white u-text-custom-color-1 u-text-hover-white" href="Casa.html"  style="padding: 10px;">Casa</a>
</li><li class="u-nav-item"><a class="u-active-custom-color-1 u-border-2 u-border-active-custom-color-1 u-border-hover-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-radius-50 u-text-active-white u-text-custom-color-1 u-text-hover-white" href="nosotros.html"  style="padding: 10px;">Sobre nosotros</a>
</li><li class="u-nav-item"><a class="u-active-custom-color-1 u-border-2 u-border-active-custom-color-1 u-border-hover-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-radius-50 u-text-active-white u-text-custom-color-1 u-text-hover-white"  style="padding: 10px;" href="salir.php">Salir</a>
</li><li class="u-nav-item"><a class="u-active-custom-color-1 u-border-2 u-border-active-custom-color-1 u-border-hover-custom-color-1 u-button-style u-hover-custom-color-1 u-nav-link u-radius-50 u-text-active-white u-text-custom-color-1 u-text-hover-white"  style="padding: 10px;"><?php echo utf8_decode($row['Nombre']); ?></a>
</ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-container-style u-custom-color-1 u-inner-container-layout u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-spacing-9 u-text-active-white u-text-hover-black u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Inicio.html" target="_blank">Inicio</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Casa.html" >Casa</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="nosotros.html" >Sobre nosotros</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="salir.php">Salir</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" ><?php echo utf8_decode($row['Nombre']); ?></a>
</ul>
              </div>
            </div>
            <div class="u-custom-color-1 u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div>
    </header>

    <section class="u-clearfix u-grey-5 u-section-1" id="sec-2c38">
      <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout" style="">
          <div class="u-layout-row" style="">
            <div data-aos="fade-right" class="u-container-style u-layout-cell u-left-cell u-size-30 u-size-xs-60 u-layout-cell-1" src="">
              <div class="u-container-layout u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-container-layout-1">
                <h2 class="u-align-center u-text u-text-custom-color-1 u-text-default u-text-1"><span class="span-section1">Bienvenido</span>, explora un mundo nuevo de <span class="span-section1">conocimiento</span></h2>
                <p class="u-align-center u-text u-text-2">Inicia esta hermosa experiencia con ABC Academy.</p>
                <a href="#" class="u-border-4 u-border-custom-color-1 u-border-hover-custom-color-1 u-btn u-btn-round u-button-style u-custom-color-1 u-hover-white u-radius-50 u-text-hover-custom-color-1 u-btn-1">learn more</a>
              </div>
            </div>
            <div data-aos="fade-left" class="u-align-center u-container-style u-image u-layout-cell u-right-cell u-size-30 u-size-xs-60 u-image-1" src="" data-image-width="500" data-image-height="500">
              <div class="u-container-layout u-container-layout-2" src=""></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section data-aos="data-aos="fade-right"" class="u-clearfix u-section-2" id="sec-2383">
      <div class="u-hidden-md u-hidden-sm u-hidden-xs u-shape u-shape-svg u-text-custom-color-1 u-shape-1">
        <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 160" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e867"></use></svg>
        <svg class="u-svg-content" viewBox="0 0 160 160" x="0px" y="0px" id="svg-e867"><path d="M157.4,45.5c11.3-39.1-16.3-50.2-43.8-43.8c-25.2,5.8-35.5,17.2-61,16.5C21.7,17.4,0,39.8,0,71.3
	c0,49.1,58.2,47.8,76.2,68.5c38.8,44.7,92.8,8.2,79.3-40.3C148.1,73.2,155.9,50.6,157.4,45.5z"></path></svg>
      </div>
      <img class="u-hidden-md u-hidden-sm u-hidden-xs u-image u-image-default u-image-1" src="images/pexels-anastasiya-gepp-1462630-removebg-preview.png" alt="" data-image-width="612" data-image-height="408">
      <img class="u-image u-image-contain u-image-default u-image-2" src="images/nombrelogoazul.svg" alt="" data-image-width="943" data-image-height="637">
      <p class="u-align-center-sm u-align-center-xs u-text u-text-1">Aprender un segundo idioma te abrirá nuevas oportunidades, por eso te invitamos a practicar y mejorar y aprender un segundo idioma; y que el inglés junto a nosotros.</p>
      <div class="u-align-center-sm u-align-center-xs u-layout-grid u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-container-style u-custom-item u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-1">
              <div class="u-container-style u-custom-item u-group u-radius-26 u-shape-round u-white u-group-1">
                <div class="u-container-layout u-container-layout-2"><span class="u-align-center u-custom-item u-file-icon u-icon u-text-custom-color-1 u-icon-1"><img src="images/826019-ab8a3ed3.png" alt=""></span>
                  <p class="u-align-center u-custom-item u-text u-text-custom-color-1 u-text-2">Facilita los viajes internacionales</p>
                </div>
              </div>
            </div>
          </div>
          <div class="u-container-align-center-xs u-container-style u-custom-item u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-3">
              <div class="u-container-style u-custom-color-1 u-custom-item u-group u-radius-26 u-shape-round u-group-2">
                <div class="u-container-layout u-container-layout-4"><span class="u-align-center u-custom-item u-file-icon u-icon u-text-white u-icon-2"><img src="images/901163-281fb6ce.png" alt=""></span>
                  <p class="u-align-center u-custom-item u-text u-text-white u-text-3">Mejora tus habilidades<br>de comunicación
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="u-container-align-center-xs u-container-style u-custom-item u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-5">
              <div class="u-container-style u-custom-color-1 u-custom-item u-group u-radius-26 u-shape-round u-group-3">
                <div class="u-container-layout u-container-layout-6"><span class="u-align-center u-custom-item u-file-icon u-icon u-text-white u-icon-3"><img src="images/2830604-2bf31e89.png" alt=""></span>
                  <p class="u-align-center u-custom-item u-text u-text-white u-text-4">Acceso a recursos<br>en linea
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="u-container-align-center-xs u-container-style u-custom-item u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-7">
              <div class="u-container-style u-custom-item u-group u-radius-26 u-shape-round u-white u-group-4">
                <div class="u-container-layout u-container-layout-8"><span class="u-align-center u-custom-item u-file-icon u-icon u-text-custom-color-1 u-icon-4"><img src="images/3068380-df54145f.png" alt=""></span>
                  <p class="u-align-center u-custom-item u-text u-text-custom-color-1 u-text-5">Estudiar en universidades de renombre</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <img class="u-expanded-width u-image u-image-default u-image-3" src="images/new2.svg" alt="" data-image-width="300" data-image-height="123">
      <div class="custom-expanded u-align-center-sm u-align-center-xs u-hidden-xs u-list u-list-2">
        <div  class="u-repeater u-repeater-2">
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-9">
              <div data-aos="fade-right" class="u-align-center u-container-style u-group u-radius-50 u-shape-round u-white u-group-5">
                <div class="u-container-layout u-container-layout-10"><span class="u-align-center u-file-icon u-hidden-xs u-icon u-icon-circle u-palette-1-base u-text-white u-icon-5"><img src="images/5830713-d03579a9.png" alt=""></span>
                  <p class="u-text u-text-custom-color-1 u-text-default u-text-6">Innovamos</p>
                </div>
              </div>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-11">
              <div data-aos="zoom-in-up" class="u-align-center u-container-style u-group u-radius-50 u-shape-round u-white u-group-6">
                <div class="u-container-layout u-container-layout-12"><span class="u-align-center u-file-icon u-hidden-xs u-icon u-icon-circle u-palette-1-base u-text-white u-icon-6"><img src="images/5541565-4bc03bd4.png" alt=""></span>
                  <p class="u-text u-text-custom-color-1 u-text-default u-text-7">Apoyamos</p>
                </div>
              </div>
            </div>
          </div>
          <div class="u-container-style u-list-item u-repeater-item">
            <div class="u-container-layout u-similar-container u-container-layout-13">
              <div data-aos="fade-left" class="u-align-center u-container-align-center-xs u-container-style u-group u-radius-50 u-shape-round u-white u-group-7">
                <div class="u-container-layout u-container-layout-14"><span class="u-align-center u-file-icon u-hidden-xs u-icon u-icon-circle u-palette-1-base u-text-white u-icon-7"><img src="images/4730534-839b4e1e.png" alt=""></span>
                  <p class="u-text u-text-custom-color-1 u-text-default u-text-8">Enseñamos</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="u-align-center u-clearfix u-custom-color-1 u-section-3" id="sec-5f60">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Macro y micro skills</h1>
        <p class="u-text u-text-2">Las macro y micro skills en inglés se utilizan para descomponer y analizar<br>las habilidades lingüisticas de manera más detallada, lo que es fundamental en el prendizaje y la enseñanza del idioma<br>
        </p>
      </div>
    </section>

    <section class="u-clearfix u-custom-color-1 u-valign-bottom-xs u-section-4" id="sec-c6c8">
      <div class="custom-expanded u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-container-style u-custom-item u-image u-image-round u-list-item u-radius-50 u-repeater-item u-image-1" data-image-width="5855" data-image-height="3992">
            <div class="u-container-layout u-similar-container u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
              <a href="no-disponible.html" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-white u-radius-50 u-text-hover-custom-color-1 u-btn-1">Listening</a>
            </div>
          </div>
          <div class="u-container-style u-custom-item u-image u-image-round u-list-item u-radius-50 u-repeater-item u-image-2" data-image-width="5751" data-image-height="3834">
            <div class="u-container-layout u-similar-container u-valign-middle-sm u-valign-middle-xs u-container-layout-2">
              <a href="no-disponible.html" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-white u-radius-50 u-text-hover-custom-color-1 u-btn-2">Speaking</a>
            </div>
          </div>
          <div class="u-container-style u-custom-item u-image u-image-round u-list-item u-radius-50 u-repeater-item u-image-3" data-image-width="3456" data-image-height="4874">
            <div class="u-container-layout u-similar-container u-valign-middle-sm u-valign-middle-xs u-container-layout-3">
              <a href="no-disponible.html" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-white u-radius-50 u-text-hover-custom-color-1 u-btn-3">Reading</a>
            </div>
          </div>
          <div class="u-container-style u-custom-item u-image u-image-round u-list-item u-radius-50 u-repeater-item u-image-4" data-image-width="5472" data-image-height="3648">
            <div class="u-container-layout u-similar-container u-valign-middle-sm u-valign-middle-xs u-container-layout-4">
              <a href="no-disponible.html" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-white u-radius-50 u-text-hover-custom-color-1 u-btn-4">Writing</a>
            </div>
          </div>
          <div class="u-container-style u-custom-item u-image u-image-round u-list-item u-radius-50 u-repeater-item u-image-5" data-image-width="6000" data-image-height="4000">
            <div class="u-container-layout u-similar-container u-valign-middle-sm u-valign-middle-xs u-container-layout-5">
              <a href="indexvoca.html" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-white u-radius-50 u-text-hover-custom-color-1 u-btn-5">Vocabulary</a>
            </div>
          </div>
          <div class="u-container-style u-custom-item u-image u-image-round u-list-item u-radius-50 u-repeater-item u-image-6" data-image-width="4000" data-image-height="6000">
            <div class="u-container-layout u-similar-container u-valign-middle-sm u-valign-middle-xs u-container-layout-6">
              <a href="no-disponible.html" class="u-border-none u-btn u-btn-round u-button-style u-custom-color-1 u-hover-white u-radius-50 u-text-hover-custom-color-1 u-btn-6">Grammar</a>
            </div>
          </div>
        </div>
      </div>
      <img class="u-expanded-width u-image u-image-default u-preserve-proportions u-image-7" src="images/new.svg" alt="" data-image-width="250" data-image-height="102">
    </section>

    <section class="u-align-center u-clearfix u-section-5" id="sec-3169">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-sheet-1">
        <h1 class="u-text u-text-custom-color-1 u-text-default-lg u-text-default-md u-text-default-xl u-text-1">Niveles en el idioma&nbsp;</h1>
        <p class="u-text u-text-2"> En el idioma inglés, los niveles se suelen clasificar en diferentes categorías para evaluar el dominio del idioma de una persona. Estas categorías varían según el sistema de clasificación utilizado, pero uno de los más comunes es el Marco Común Europeo de Referencia para las Lenguas (MCER). El MCER divide los niveles en</p>
      </div>
    </section>

    <section class="u-clearfix u-section-6" id="sec-6e79">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-size-28 u-layout-cell-1">
                <div class="u-container-layout">
                  <div class="u-align-left u-custom-color-1 u-shape u-shape-1"></div>
                  <img class="u-align-left u-image u-image-1" data-image-width="1200" data-image-height="800" src="images/huevodebuho.jfif">
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-32 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle-lg u-valign-middle-xl u-container-layout-2">
                  <h2 class="u-align-center u-text u-text-custom-color-1 u-text-default u-text-1">Nivel Básico</h2>
                  <p class="u-align-center u-text u-text-2">El nivel básico de inglés generalmente se refiere a los niveles A1 A2. El nivel básico es un punto de partida para aquellos que están aprendiendo inglés y desean adquirir las habilidades necesarias para comunicarse en situaciones cotidianas.</p>
                  <a href="no-disponible.html" class="u-align-center u-border-4 u-border-custom-color-1 u-border-hover-custom-color-1 u-btn u-btn-round u-button-style u-custom-color-1 u-hover-white u-radius-50 u-text-hover-custom-color-1 u-btn-1">learn more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="u-clearfix u-section-7" id="sec-e85c">
      <div class="u-clearfix u-sheet u-valign-middle-xl u-valign-middle-xs u-sheet-1">
        <img class="u-align-left u-image u-image-1" data-image-width="1440" data-image-height="900" src="images/buhpequeo.JFIF">
        <div class="u-container-style u-custom-color-1 u-group u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <h2 class="u-align-center u-text u-text-default u-text-1">Intermedio</h2>
            <p class="u-text u-text-2"> El nivel intermedio de inglés generalmente se refiere a los niveles B1 y B2.El nivel intermedio es un hito importante en el aprendizaje del inglés, ya que permite a los estudiantes comunicarse de manera efectiva en una variedad de situaciones y les brinda la capacidad de comprender textos y discursos más complejos</p>
            <a href="no-disponible.html" class="u-align-center u-border-4 u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-custom-color-1 u-radius-50 u-text-custom-color-1 u-text-hover-white u-white u-btn-1">learn more</a>
          </div>
        </div>
      </div>
    </section>

    <section class="u-clearfix u-section-8" id="sec-41c0">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-30 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-size-28 u-layout-cell-1">
                <div class="u-container-layout">
                  <div class="u-align-left u-custom-color-1 u-shape u-shape-1"></div>
                  <img class="u-align-left u-image u-image-1" data-image-width="960" data-image-height="960" src="images/buhogrande.JFIF">
                </div>
              </div>
              <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-32 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <h2 class="u-align-center u-text u-text-custom-color-1 u-text-default u-text-1">Avanzado</h2>
                  <p class="u-align-center u-text u-text-2"> El nivel avanzado en inglés es un logro significativo y permite a las personas participar en conversaciones y actividades muy avanzadas en inglés. Les brinda la capacidad de trabajar en entornos internacionales, acceder a una amplia gama de recursos en inglés y participar en discusiones y proyectos a nivel global.</p>
                  <a href="no-disponible.html" class="u-align-center u-border-4 u-border-custom-color-1 u-border-hover-custom-color-1 u-btn u-btn-round u-button-style u-custom-color-1 u-hover-white u-radius-50 u-text-hover-custom-color-1 u-btn-1">learn more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="u-align-center u-clearfix u-section-9" id="sec-1efb">
      <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout" style="">
          <div class="u-layout-row" style="">
            <div class="u-align-left u-container-style u-image u-layout-cell u-left-cell u-size-30 u-size-xs-60 u-image-1" src="" data-image-width="3500" data-image-height="2333">
              <div class="u-container-layout u-valign-middle u-container-layout-1" src=""></div>
            </div>
            <div class="u-align-left u-container-style u-custom-color-1 u-layout-cell u-right-cell u-size-30 u-size-xs-60 u-layout-cell-2">
              <div class="u-container-layout u-valign-middle u-container-layout-2">
                <h2 class="u-align-center u-text u-text-default u-text-1"> No pierdan la oportunidad de darlte una ventaja en la vida y cumplir tus sueños</h2>
                <p class="u-align-center u-text u-text-2"> La satisfacción de dominar un nuevo idioma es una recompensa que durará toda la vida. ¡Inscríbete y comienza tu viaje en inglés hoy mismo.</p>
                <a href="Casa.html" class="u-align-center u-border-4 u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-custom-color-1 u-radius-50 u-text-custom-color-1 u-text-hover-white u-white u-btn-1">learn more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="u-align-center u-clearfix u-image u-shading u-section-10" src="" data-image-width="6000" data-image-height="4000" id="sec-c3db">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-title u-text-1">
          <span class="u-text-custom-color-1">ABC ACADEMY</span> FOR <span class="u-text-palette-2-base">KIDS</span>
        </h1>
        <div class="u-palette-3-base u-preserve-proportions u-shape u-shape-circle u-shape-1"></div>
        <p class="u-large-text u-text u-text-default u-text-variant u-text-2"> Los niños tienen una capacidad asombrosa para aprender idiomas.<br>Inscribir y gratis a tu hijo en un curso de inglés es un regalo que le durará toda la vida. Les proporcionará oportunidades y ventajas invaluables.
        </p>
        <a href="English Kids/INDEX.html" class="u-border-4 u-border-custom-color-1 u-border-hover-custom-color-1 u-btn u-btn-round u-button-style u-custom-color-1 u-hover-white u-radius-50 u-text-hover-custom-color-1 u-btn-1">Read More</a>
        <div class="u-border-5 u-border-white u-preserve-proportions u-shape u-shape-circle u-shape-2"></div>
        <div class="u-palette-4-base u-preserve-proportions u-radius-50 u-shape u-shape-round u-shape-3"></div>
        <div class="u-custom-color-1 u-preserve-proportions u-shape u-shape-circle u-shape-4"></div>
        <div class="u-border-5 u-border-palette-2-base u-preserve-proportions u-shape u-shape-circle u-shape-5"></div>
      </div>
    </section>

    <section class="u-align-center u-clearfix u-custom-color-1 u-section-11" id="carousel_423e">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-body-alt-color u-text-1">Planes de pago e inscripción</h1>
        <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-16 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-align-center u-container-style u-layout-cell u-palette-1-base u-radius-15 u-size-20-lg u-size-20-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <div class="u-align-center u-container-style u-expanded-width u-group u-radius-15 u-shape-round u-white u-group-1">
                    <div class="u-container-layout u-container-layout-2">
                      <h5 class="u-text u-text-palette-1-base u-text-2">ABC Lite</h5>
                      <h2 class="u-custom-font u-font-arial u-text u-text-palette-1-base u-text-3">
                        <span style="font-weight: 400;">$</span>8.00
                      </h2>
                      <p class="u-text u-text-palette-1-base u-text-4">per mounth</p>
                    </div>
                  </div>
                  <p class="u-text u-text-palette-1-light-3 u-text-5">Free lessons<br>free excercises<br>free quizzes(limited accses)<br>video lessons(limited access)
                  </p>
                  <a href="pago.php" class="u-active-palette-1-light-2 u-border-4 u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-palette-1-base u-radius-50 u-text-custom-color-1 u-text-hover-white u-white u-btn-1">get plan</a>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-palette-2-base u-radius-15 u-size-20-lg u-size-20-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-2">
                <div class="u-container-layout u-container-layout-3">
                  <div class="u-align-center u-container-style u-expanded-width u-group u-radius-15 u-shape-round u-white u-group-2">
                    <div class="u-container-layout u-container-layout-4">
                      <h5 class="u-text u-text-palette-2-base u-text-6">ABC Pro</h5>
                      <h2 class="u-custom-font u-font-arial u-text u-text-palette-2-base u-text-7">
                        <span style="font-weight: 400;">$</span>12.00
                      </h2>
                      <p class="u-text u-text-palette-2-base u-text-8">per mounth</p>
                    </div>
                  </div>
                  <p class="u-text u-text-palette-1-light-3 u-text-9">Free lessons<br>free excercises<br>free quizzes(unlimited access)<br>video lessons(unlimited access)<br>tips section<br>special grammar lessons
                  </p>
                  <a href="pago.php" class="u-active-palette-2-light-2 u-border-4 u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-palette-2-base u-radius-50 u-text-hover-white u-text-palette-2-base u-white u-btn-2">get plan</a>
                </div>
              </div>
              <div class="u-align-center u-container-style u-layout-cell u-palette-3-base u-radius-15 u-size-20-lg u-size-20-xl u-size-60-md u-size-60-sm u-size-60-xs u-layout-cell-3">
                <div class="u-container-layout u-container-layout-5">
                  <div class="u-align-center u-container-style u-expanded-width u-group u-radius-15 u-shape-round u-white u-group-3">
                    <div class="u-container-layout u-container-layout-6">
                      <h5 class="u-align-center u-text u-text-palette-3-base u-text-10">ABC Ultimate</h5>
                      <h2 class="u-custom-font u-font-arial u-text u-text-palette-3-base u-text-11">
                        <span style="font-weight: 400;">$</span>20.00
                      </h2>
                      <p class="u-text u-text-palette-3-base u-text-12">per year</p>
                    </div>
                  </div>
                  <p class="u-text u-text-palette-1-light-3 u-text-13">Everything unlimited</p>
                  <a href="pago.php" class="u-active-palette-3-light-2 u-border-4 u-border-hover-white u-border-white u-btn u-btn-round u-button-style u-hover-palette-3-base u-radius-50 u-text-hover-white u-text-palette-3-base u-white u-btn-3">get plan</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>

      <div class="container__footer">
          <div class="box__footer">
              <div class="logo">
                  <img src="/images/logoazul.svg" alt="">
              </div>
            
          </div>
          <div class="box__footer">
              <h2>Equipo</h2>
              <a href="nosotros.html">Manuel Ayala</a>
              <a href="nosotros.css">Linette Gomez</a>
              <a href="nosotros.html">Himer Gonzales</a>
              <a href="nosotros.html">Charleen Cashpal</a>
              <a href="nosotros.html">Katherine Aguilar</a>
              <a href="nosotros.html">SAul Lemus</a>
          </div>

          <div class="box__footer">
              <h2>Compañia</h2>
              <a href="nosotros.html">Acerca de</a>
              <a href="nosotros.html">Trabajos</a>
                          
          </div>

          <div class="box__footer">
              <h2>Redes Sociales</h2>
              <a href="#"> <i class="fab fa-facebook-square"></i> Facebook</a>
              <a href="#"><i class="fab fa-youtube-square"></i> youtube</a>
              <a href="#"><i class="fab fa-instagram-square"></i> Instagram</a>
          </div>

      </div>

      <div class="box__copyright">
          <hr>
          <p>Todos los derechos reservados © 2021 <b>ABC ACADEMY</b></p>
      </div>
  </footer>

   

    <style class="u-overlap-style">.u-overlap:not(.u-sticky-scroll) .u-header {
background-color: #ffffff !important
}</style>
    
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    
  
  
</body></html>