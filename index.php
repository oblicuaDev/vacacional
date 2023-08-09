<?php 
$bodyClass = 'home';
include "includes/head.php";
$sliders = $vacacional->getSlidersHome();
?>

<main>
  <div class="flexbanner">
    <div class="home-banner">
      <section class="splide" aria-label="Splide Basic HTML Example">
        <ul class="splide__pagination splide__pagination--ltr" role="tablist" aria-label="Select a slide to show">
        </ul>
        <div class="splide__track">
          <ul class="splide__list">
            <?php for ($i=0; $i < count($sliders) ; $i++) {  $slider= $sliders[$i]; ?>
              <li class="splide__slide">
                <img loading="lazy" class="lazyload" src="https://via.placeholder.com/400x400.jpg?text=Bogotadc.travel" data-src="<?=$slider->field_desktop_img?>" alt="grandeseventos" />
                <div class="content">
                  <h1 class="ms900 uppercase">
                    <?=$slider->title?>
                  </h1>
                  <p class="ms500"><?=$slider->field_link?></p>
                  <a class="wait" href="<?=$slider->title?>"><?=$slider->field_texto_del_boton?></a>
                </div>
              </li>
            <?php }?>
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
        <div class="zones-container loading">
          <section class="splide splide2 " aria-label="Splide Basic HTML Example">
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
      </div>
    </div>
  </section>
  <section class="mobile">
    <img loading="lazy" class="lazyload" src="https://via.placeholder.com/400x400.jpg?text=Bogotadc.travel"
      data-src="images/mobile.jpg" alt="movil" />
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
              echo '<a href="' . $b->generalInfo->field_playstore . '"><img loading="lazy" class="lazyload" src="https://via.placeholder.com/400x400.jpg?text=Bogotadc.travel" data-src="images/google.png" alt="google" /></a>';
          } elseif (strpos($userAgent, 'iPhone') !== false || strpos($userAgent, 'iPad') !== false) {
              // Es un dispositivo iOS (iPhone o iPad), muestra contenido específico para iOS
              echo '<a href="' . $b->generalInfo->field_appstore . '"><img loading="lazy" class="lazyload" src="https://via.placeholder.com/400x400.jpg?text=Bogotadc.travel" data-src="images/apple.png" alt="apple" /></a>';
          } else {
              // No es un dispositivo Android ni iOS, muestra contenido genérico
              echo '<a href="' . $b->generalInfo->field_playstore . '"><img loading="lazy" class="lazyload" src="https://via.placeholder.com/400x400.jpg?text=Bogotadc.travel" data-src="images/google.png" alt="google" /></a><a href="' . $b->generalInfo->field_appstore . '"><img loading="lazy" class="lazyload" src="https://via.placeholder.com/400x400.jpg?text=Bogotadc.travel" data-src="images/apple.png" alt="apple" /></a>';
          }
          ?>

        </div>
      </div>
    </div>
  </section>
  <section class="more container">
    <a href="/<?=$lang?>/banco-imagenes/" class="more-card wait">
      <img loading="lazy" class="lazyload" src="https://via.placeholder.com/400x400.jpg?text=Bogotadc.travel"
        data-src="images/devices.png" alt="dispositivos" />
    </a>
    <a href="/<?=$lang?>/ruta-leyenda-el-dorado/inicio" class="more-card wait">
      <img loading="lazy" class="lazyload" src="https://via.placeholder.com/400x400.jpg?text=Bogotadc.travel"
        data-src="/img/rld/logo-full.svg" alt="ruta leyenda" />
    </a>
    <a href="" class="more-card">
      <button class="closeadd">X</button>
      <img loading="lazy" class="lazyload" src="https://via.placeholder.com/400x400.jpg?text=Bogotadc.travel"
        data-src="images/add.jpg" alt="ruta leyenda" />
    </a>
  </section>
  <section class="recent-blogs">
    <h2 class="uppercase ms700">ÚLTIMAS ENTRADAS DEL BLOG</h2>
    <div class="container grid-blogs"></div>
    <a href="/<?=$lang?>/blog" class="more uppercase">VER MÁS ARTÍCULOS</a>
  </section>
  <section class="add container">
    <button class="closeadd">X</button>
    <img loading="lazy" class="lazyload" src="https://via.placeholder.com/400x400.jpg?text=Bogotadc.travel"
      data-src="images/largeadd.jpg" alt="turistea por bogota" />
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