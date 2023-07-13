<?php 
$bodyClass = 'home';
include "includes/head.php";
$lastblogs = $vacacional->getLastBlogs();
?>

  <main>
    <div class="flexbanner">
      <div class="home-banner">
        <section class="splide" aria-label="Splide Basic HTML Example">
          <ul class="splide__pagination splide__pagination--ltr" role="tablist" aria-label="Select a slide to show">
          </ul>
          <div class="splide__track">
            <ul class="splide__list">
              
            <li class="splide__slide">
                <img src="images/igualdad_banner.jpg" alt="igualdad" />
                <div class="content">
                  <h1 class="ms900 uppercase"></h1>
                  <p class="ms500">
                  </p>
                  <a class="wait" href="/<?=$lang?>/eventos/festival-por-la-igualdad-149">Conoce más </a>
                </div>
              </li>
              <li class="splide__slide">
                <img src="images/cerros.jpeg" alt="cerros" />
                <div class="content">
                  <h1 class="ms900 uppercase">
                    Es hora de volver a la naturaleza
                  </h1>
                  <p class="ms500">
                    La Bogotá Región te ofrece los mejores planes para recuperar
                    tu bienestar y recargarte de buena energía en espacios
                    naturales.
                  </p>
                  <a class="wait" href="/<?=$lang?>/explora/cerros/2572">¡Quiero saber más!</a>
                </div>
              </li>
              <li class="splide__slide">
                <img src="images/mice.jpeg" alt="grandeseventos" />
                <div class="content">
                  <h1 class="ms900 uppercase">
                    Somos epicentro de grandes eventos
                  </h1>
                  <p class="ms500">
                    Te espera una ciudad auténtica, brillante, cosmópolita y
                    dinámica. Los mayores eventos del país ocurren aquí.
                  </p>
                  <a class="wait" href="/<?=$lang?>/mice">Ver más</a>
                </div>
              </li>

              <li class="splide__slide">
                <img src="images/recorridos.jpeg" alt="recorridos" />
                <div class="content">
                  <h1 class="ms900 uppercase">Conoce la ciudad paso a paso</h1>
                  <p class="ms500">
                    Camina por Bogotá. Encontrarás la unión perfecta entre el
                    dinamismo de una gran metrópolil y la invitación de nuestros
                    cerros para disfrutar del senderismo.
                  </p>
                  <a class="wait" href="/<?=$lang?>/explora/senderismo/64">Conoce más </a>
                </div>
              </li>

            </ul>
          </div>
          <div class="splide__arrows splide__arrows--ltr">
            <button class="splide__arrow splide__arrow--prev" type="button" aria-label="Previous slide"
              aria-controls="splide01-track">
              <img src="images/arrowleft.svg" alt="flechaizquierda" />
            </button>
            <button class="splide__arrow splide__arrow--next" type="button" aria-label="Next slide"
              aria-controls="splide01-track">
              <img src="images/arrowright.svg" alt="flechaderecha" />
            </button>
          </div>
        </section>
      </div>
      <!-- <div class="banner-add">
        <img src="" alt="bannerAdd">
      </div> -->
    </div>
    <section class="zones">
      <div class="container">
        <h1 class="uppercase ms700">bogotá por zonas</h1>
        <div class="flex">
          <div class="map">
            <?php include "templates/map.php"; ?>
          </div>
          <section class="splide splide2" aria-label="Splide Basic HTML Example">
            <div class="splide__arrows splide__arrows--ltr">
              <button class="splide__arrow splide__arrow--prev" type="button" aria-label="Previous slide"
                aria-controls="splide01-track">
                <img src="images/arrowleftgray.svg" alt="flechaizquierda" />
              </button>
              <button class="splide__arrow splide__arrow--next" type="button" aria-label="Next slide"
                aria-controls="splide01-track">
                <img src="images/arrowrightgray.svg" alt="flechaderecha" />
              </button>
            </div>
            <div class="splide__track">
              <ul class="splide__list">
               
              </ul>
            </div>
          </section>
        </div>
      </div>
    </section>
    <section class="planes">
      <div class="pb">
        <div class="content">
          <h2 class="ms900">RESERVA LOS PLANES</h2>
          <h3 class="ms900">QUE NO TE PUEDES PERDER EN</h3>
          <img src="images/logopb.svg" alt="plan Bogota" />
          <a href="/plan-bogota" class="ms900 uppercase btn">RESERVA GRATIS AHORA</a>
        </div>
      </div>
      <div class="city">
        <h4 class="ms900 uppercase">
          o explora los atractivos turÍsticos de la ciudad
        </h4>
        <div class="cards">
          <a href="/<?=$lang?>/hoteles" class="city-card"><img src="images/dormir.jpg" alt=" donde dormir" /><span class="uppercase ms700">Dónde
              dormir</span></a>
           <a href="/<?=$lang?>/restaurantes" class="city-card"><img src="images/comer.jpg" alt="donde comer" /><span class="uppercase ms700">Dónde
              comer</span></a>
          <a href="eventos/agenda-general-148" class="city-card"><img src="images/hacer.jpg" alt="que hacer" /><span class="uppercase ms700">qué
              hacer</span></a>
        </div>
      </div>
    </section>
    <section class="mobile">
      <img src="images/mobile.jpg" alt="movil" />
      <div class="message">
        <img src="images/app_logo_1.png" alt="aplicacion" class="applogo" />
        <div class="text">
          <h5 class="uppercase ms900">DESCARGA EL APP OFICIAL DE BOGOTÁ</h5>
          <p class="ms700">
            ¡Es hora de descargar la APP de Bogotá DC Travel y tener a la
            ciudad en tus manos!
          </p>
          <!-- <a href="" class="btn uppercase ms900">DESCARGAR</a> -->
          <div class="apps">
          <?php
          $userAgent = $_SERVER['HTTP_USER_AGENT'];

          if (strpos($userAgent, 'Android') !== false) {
              // Es un dispositivo Android, muestra contenido específico para Android
              echo '<a href="' . $b->generalInfo->field_playstore . '"><img src="images/google.png" alt="google" /></a>';
          } elseif (strpos($userAgent, 'iPhone') !== false || strpos($userAgent, 'iPad') !== false) {
              // Es un dispositivo iOS (iPhone o iPad), muestra contenido específico para iOS
              echo '<a href="' . $b->generalInfo->field_appstore . '"><img src="images/apple.png" alt="apple" /></a>';
          } else {
              // No es un dispositivo Android ni iOS, muestra contenido genérico
              echo '<a href="' . $b->generalInfo->field_playstore . '"><img src="images/google.png" alt="google" /></a><a href="' . $b->generalInfo->field_appstore . '"><img src="images/apple.png" alt="apple" /></a>';
          }
          ?>

          </div>
        </div>
      </div>
    </section>
    <section class="more container">
      <a href="/<?=$lang?>/banco-imagenes/" class="more-card wait">
        <img src="images/devices.png" alt="dispositivos" />
      </a>
      <a href="/<?=$lang?>/ruta-leyenda-el-dorado/inicio" class="more-card wait">
        <img src="/img/rld/logo-full.svg" alt="ruta leyenda" />
      </a>
      <a href="" class="more-card">
        <button class="closeadd">X</button>
        <img src="images/add.jpg" alt="ruta leyenda" />
      </a>
    </section>
    <section class="recent-blogs">
      <h6 class="uppercase ms700">ÚLTIMAS ENTRADAS DEL BLOG</h6>
      <div class="container grid-blogs"></div>
      <a href="" class="more uppercase">VER MÁS ARTÍCULOS</a>
    </section>
    <section class="add container">
      <button class="closeadd">X</button>
      <img src="images/largeadd.jpg" alt="turistea por bogota" />
    </section>
  </main>
 
  <? include 'includes/imports.php'?>
  <script>
    new Splide(".splide", {
      type: "loop",
      autoplay: true,
      interval: 8000,
      speed: 600,
      classes: {
        arrows: "splide__arrows your-class-arrows",
        arrow: "splide__arrow your-class-arrow",
        prev: "splide__arrow--prev your-class-prev",
        next: "splide__arrow--next your-class-next",
        pagination: "splide__pagination your-class-pagination",
        page: "splide__pagination__page your-class-page",
      },
    }).mount();
   
    </script>
</body>

</html>