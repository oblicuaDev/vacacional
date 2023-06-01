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
                <img src="images/cerros.jpeg" alt="homebanner" />
                <div class="content">
                  <h2 class="ms900 uppercase">
                    Es hora de volver a la naturaleza
                  </h2>
                  <p class="ms500">
                    La Bogotá Región te ofrece los mejores planes para recuperar
                    tu bienestar y recargarte de buena energía en espacios
                    naturales.
                  </p>
                  <a href="#">¡Quiero saber más!</a>
                </div>
              </li>
              <li class="splide__slide">
                <img src="images/mice.jpeg" alt="homebanner" />
                <div class="content">
                  <h2 class="ms900 uppercase">
                    Somos epicentro de grandes eventos
                  </h2>
                  <p class="ms500">
                    Te espera una ciudad auténtica, brillante, cosmópolita y
                    dinámica. Los mayores eventos del país ocurren aquí.
                  </p>
                  <a href="">Ver más</a>
                </div>
              </li>

              <li class="splide__slide">
                <img src="images/recorridos.jpeg" alt="homebanner" />
                <div class="content">
                  <h2 class="ms900 uppercase">Conoce la ciudad paso a paso</h2>
                  <p class="ms500">
                    Camina por Bogotá. Encontrarás la unión perfecta entre el
                    dinamismo de una gran metrópolil y la invitación de nuestros
                    cerros para disfrutar del senderismo.
                  </p>
                  <a href="">Conoce más </a>
                </div>
              </li>

              <li class="splide__slide">
                <img src="images/igualdad_banner.jpg" alt="homebanner" />
                <div class="content">
                  <h2 class="ms900 uppercase"></h2>
                  <p class="ms500">
                  </p>
                  <a href="eventos/festival-por-la-igualdad-149">Conoce más </a>
                </div>
              </li>
            </ul>
          </div>
          <div class="splide__arrows splide__arrows--ltr">
            <button class="splide__arrow splide__arrow--prev" type="button" aria-label="Previous slide"
              aria-controls="splide01-track">
              <img src="images/arrowleft.svg" alt="arrowleft" />
            </button>
            <button class="splide__arrow splide__arrow--next" type="button" aria-label="Next slide"
              aria-controls="splide01-track">
              <img src="images/arrowright.svg" alt="arrowright" />
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
        <h2 class="uppercase ms700">bogotá por zonas</h2>
        <div class="flex">
          <div class="map">
            <img src="images/mapa.svg" alt="mapa" />
          </div>
          <section class="splide splide2" aria-label="Splide Basic HTML Example">
            <div class="splide__arrows splide__arrows--ltr">
              <button class="splide__arrow splide__arrow--prev" type="button" aria-label="Previous slide"
                aria-controls="splide01-track">
                <img src="images/arrowleftgray.svg" alt="arrowleft" />
              </button>
              <button class="splide__arrow splide__arrow--next" type="button" aria-label="Next slide"
                aria-controls="splide01-track">
                <img src="images/arrowrightgray.svg" alt="arrowright" />
              </button>
            </div>
            <div class="splide__track">
              <ul class="splide__list">
                <li class="splide__slide">
                  <div class="zone-card">
                    <img src="images/zone.jpg" alt="zone" />
                    <div class="info">
                      <h3 class="uppercase ms900">Zona Centro</h3>
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing
                        elit, sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore magna aliquam erat volutpat. Ut wisi
                        enim ad minim veniam, quis
                      </p>
                      <a href="" class="uppercase ms900 btn">VISITAR</a>
                    </div>
                  </div>
                </li>
                <li class="splide__slide">
                  <div class="zone-card">
                    <img src="images/zone.jpg" alt="zone" />
                    <div class="info">
                      <h3 class="uppercase ms900">Zona Norte</h3>
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing
                        elit, sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore magna aliquam erat volutpat. Ut wisi
                        enim ad minim veniam, quis
                      </p>
                      <a href="" class="uppercase ms900 btn">VISITAR</a>
                    </div>
                  </div>
                </li>
                <li class="splide__slide">
                  <div class="zone-card">
                    <img src="images/zone.jpg" alt="zone" />
                    <div class="info">
                      <h3 class="uppercase ms900">Zona Sur</h3>
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing
                        elit, sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore magna aliquam erat volutpat. Ut wisi
                        enim ad minim veniam, quis
                      </p>
                      <a href="" class="uppercase ms900 btn">VISITAR</a>
                    </div>
                  </div>
                </li>
                <li class="splide__slide">
                  <div class="zone-card">
                    <img src="images/zone.jpg" alt="zone" />
                    <div class="info">
                      <h3 class="uppercase ms900">Zona Centro</h3>
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing
                        elit, sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore magna aliquam erat volutpat. Ut wisi
                        enim ad minim veniam, quis
                      </p>
                      <a href="" class="uppercase ms900 btn">VISITAR</a>
                    </div>
                  </div>
                </li>
                <li class="splide__slide">
                  <div class="zone-card">
                    <img src="images/zone.jpg" alt="zone" />
                    <div class="info">
                      <h3 class="uppercase ms900">Zona Norte</h3>
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing
                        elit, sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore magna aliquam erat volutpat. Ut wisi
                        enim ad minim veniam, quis
                      </p>
                      <a href="" class="uppercase ms900 btn">VISITAR</a>
                    </div>
                  </div>
                </li>
                <li class="splide__slide">
                  <div class="zone-card">
                    <img src="images/zone.jpg" alt="zone" />
                    <div class="info">
                      <h3 class="uppercase ms900">Zona Sur</h3>
                      <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing
                        elit, sed diam nonummy nibh euismod tincidunt ut
                        laoreet dolore magna aliquam erat volutpat. Ut wisi
                        enim ad minim veniam, quis
                      </p>
                      <a href="" class="uppercase ms900 btn">VISITAR</a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </section>
        </div>
      </div>
    </section>
    <section class="planes">
      <div class="pb">
        <div class="content">
          <h4 class="ms900">RESERVA LOS PLANES</h4>
          <h5 class="ms900">QUE NO TE PUEDES PERDER EN</h5>
          <img src="images/logopb.svg" alt="plan Bogota" />
          <a href="/plan-bogota" class="ms900 uppercase btn">RESERVA GRATIS AHORA</a>
        </div>
      </div>
      <div class="city">
        <h6 class="ms900 uppercase">
          o explora los atractivos turÍsticos de la ciudad
        </h6>
        <div class="cards">
          <a href="/hoteles/" class="city-card"><img src="images/dormir.jpg" alt="dormir" /><span class="uppercase ms700">Dónde
              dormir</span></a>
          <!-- <a class="city-card"><img src="images/comer.jpg" alt="comer" /><span class="uppercase ms700">Dónde
              comer</span></a> -->
          <a href="eventos/agenda-general-148" class="city-card"><img src="images/hacer.jpg" alt="hacer" /><span class="uppercase ms700">qué
              hacer</span></a>
        </div>
      </div>
    </section>
    <section class="mobile">
      <img src="images/mobile.jpg" alt="mobileBanner" />
      <div class="message">
        <img src="images/app_logo_1.png" alt="app logo" class="applogo" />
        <div class="text">
          <h2 class="uppercase ms900">DESCARGA EL APP OFICIAL DE BOGOTÁ</h2>
          <p class="ms700">
            ¡Es hora de descargar la APP de Bogotá DC Travel y tener a la
            ciudad en tus manos!
          </p>
          <!-- <a href="" class="btn uppercase ms900">DESCARGAR</a> -->
          <div class="apps">
            <a href="<?= $b->generalInfo->field_playstore ?>"><img src="images/google.png" alt="google" /></a>
            <a href="<?= $b->generalInfo->field_appstore ?>"><img src="images/apple.png" alt="apple" /></a>
          </div>
        </div>
      </div>
    </section>
    <section class="more container">
      <a href="/banco-imagenes/" class="more-card wait">
        <img src="images/devices.png" alt="devices" />
      </a>
      <a href="/<?=$lang?>/ruta-leyenda-el-dorado/inicio" class="more-card wait">
        <img src="/img/rld/logo-full.svg" alt="rld" />
      </a>
      <a href="" class="more-card">
        <button class="closeadd">X</button>
        <img src="images/add.jpg" alt="rld" />
      </a>
    </section>
    <section class="recent-blogs">
      <h2 class="uppercase ms700">ÚLTIMAS ENTRADAS DEL BLOG</h2>
      <div class="container grid-blogs"></div>
      <a href="" class="more uppercase">VER MÁS ARTÍCULOS</a>
    </section>
    <section class="add container">
      <button class="closeadd">X</button>
      <img src="images/largeadd.jpg" alt="add" />
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
    new Splide(".splide2", {
      type: "loop",
      perPage: 3,
      gap: 10,
      width: 640,
      focus: "center",
      pagination: false,
      classes: {
        arrows: "splide__arrows your-class-arrows",
        arrow: "splide__arrow your-class-arrow",
        prev: "splide__arrow--prev your-class-prev",
        next: "splide__arrow--next your-class-next",
      },
    }).mount();
    </script>
</body>

</html>