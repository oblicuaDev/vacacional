function runOnScroll() {
  if (window.scrollY >= 80) {
    document.querySelector("header").classList.add("scroll");
  } else {
    document.querySelector("header").classList.remove("scroll");
  }
}
window.addEventListener("scroll", runOnScroll);

// Arreglos de imágenes
let imagenes1 = [
  "images/pauta/c_0.jpg",
  "images/pauta/c_1.jpg",
  "images/pauta/c_2.jpg",
];
let imagenes2 = [
  "images/pauta/h_0.jpg",
  "images/pauta/h_1.jpg",
  "images/pauta/h_2.jpg",
];

let imagenes3 = [
  "images/pauta/xl_0.jpg",
  "images/pauta/xl_1.jpg",
  "images/pauta/xl_2.jpg",
];
// Función para seleccionar una imagen al azar de un arreglo
async function seleccionarImagenAlAzar(imagenes, element) {
  if (element) {
    var indice = Math.floor(Math.random() * imagenes.length);
    var imagenSeleccionada = imagenes[indice];
    await getImageFromCacheOrFetch(imagenSeleccionada);
    element.src = imagenSeleccionada;
  }
}

// Llamar a la función para cada arreglo de imágenes
window.addEventListener("load", function () {
  if (this.document.querySelector(".home")) {
    seleccionarImagenAlAzar(
      imagenes1,
      document.querySelectorAll(".home .more-card img")[2]
    );
    seleccionarImagenAlAzar(
      imagenes2,
      document.querySelector(".home section.add.container img")
    );
    seleccionarImagenAlAzar(
      imagenes3,
      document.querySelector(".banner-add img")
    );
    getRecentBlogs();
    getZonesHome();
  }
});

async function getRecentBlogs() {
  let blogContainer = document.querySelector(".home .container.grid-blogs");
  blogContainer.innerHTML = "";

  const response = await fetch("/vacacional/g/lastBlogs/");
  const data = await response.json();

  const promises = data.map(async (blog) => {
    let urlImg = await getImageFromCacheOrFetch(blog.field_image);
    let template = `<a href="/${actualLang}/blog/all/${get_alias(
      blog.title
    )}-all-${blog.nid}" data-aos="flip-left blog_item" data-productid="88">
        <div class="img">
          <img loading="lazy" data-src="${urlImg}" alt="Diversidad, cultura y música en Colombia al Parque" class="zone_img lazyload" src="https://via.placeholder.com/400x400.jpg?text=Bogotadc.travel" />
        </div>
        <div class="desc">
          <h3 class="uppercase">${blog.field_prod_rel_1}</h3>
          <h2 class="uppercase">${shorter(blog.title, 35)}</h2>
          <p>${blog.body_1}</p>
          <div class="btn uppercase ms900">Seguir leyendo</div>
        </div>
      </a>`;
    blogContainer.innerHTML += template;
  });

  await Promise.all(promises);

  lazyImages();
}

async function getZonesHome() {
  let zones = await fetch("/g/zonas/")
    .then((res) => res.json())
    .then((data) => data);

  return zones;
}

function shorter(text, chars_limit = 35) {
  // Cambia al número de caracteres que deseas mostrar
  var chars_text = text.length;
  text = text + " ";
  text = text.substring(0, chars_limit);
  text = text.substring(0, text.lastIndexOf(" "));
  if (chars_text > chars_limit) {
    text = text + "...";
  }
  return text;
}
