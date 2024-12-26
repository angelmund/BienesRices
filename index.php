<?php 
  require 'includes/funciones.php';
  incluirTemplate('header', $inicio = true);
  
?>

<main class="contendor seccion">
  <h1>Más Sobre nosotros</h1>

  <div class="iconos-nosotros">
    <div class="icono">
      <img
        src="build/img/icono1.svg"
        alt="Icono Seguridad"
        loading="lazy" />
      <h3>Seguridad</h3>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae
        quod obcaecati tempora nostrum sunt maiores sapiente a reiciendis et
        laboriosam optio sint, aspernatur cupiditate modi praesentium alias
        explicabo. Voluptate, iusto.
      </p>
    </div>

    <div class="icono">
      <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy" />
      <h3>Precio</h3>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae
        quod obcaecati tempora nostrum sunt maiores sapiente a reiciendis et
        laboriosam optio sint, aspernatur cupiditate modi praesentium alias
        explicabo. Voluptate, iusto.
      </p>
    </div>

    <div class="icono">
      <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy" />
      <h3>A tiempo</h3>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae
        quod obcaecati tempora nostrum sunt maiores sapiente a reiciendis et
        laboriosam optio sint, aspernatur cupiditate modi praesentium alias
        explicabo. Voluptate, iusto.
      </p>
    </div>
  </div>
</main>

<section class="seccion contenedor">
  <h2>Casas y Departamentos en Venta</h2>
  <!--- Anuncio 1----->
  <div class="contenedor-anuncios">
    <div class="anuncio">
      <picture>
        <source srcset="build/img/anuncio1.webp" type="image/webp" />
        <source srcset="build/img/anuncio1.jpg" type="image/jpeg" />
        <img
          loading="lazy"
          src="build/img/anuncio1.jpg"
          alt="Anuncio casa en el lago" />
      </picture>
      <div class="contenido-anuncio">
        <h3>Casa de Lujo en el Lago</h3>
        <p>
          Casa en el lago con excelente vista, acabados de lujo a un
          excelente precio
        </p>
        <p class="precio">$3,000,000</p>
        <ul class="iconos-caracteristicas">
          <li>
            <img class="icono"
              src="build/img/icono_wc.svg"
              alt="Icono WC"
              loading="lazy" />
            <p>3</p>
          </li>
          <li>
            <img class="icono"
              src="build/img/icono_estacionamiento.svg"
              alt="Icono Estacionamiento"
              loading="lazy" />
            <p>3</p>
          </li>
          <li>
            <img class="icono"
              src="build/img/icono_dormitorio.svg"
              alt="Icono Dormitorio"
              loading="lazy" />
            <p>4</p>
          </li>
        </ul>

        <a href="anuncios.php" class="boton boton-amarillo">
          Ver Propiedad
        </a>
      </div>
    </div>
    <!--- Anuncio 2----->
    <div class="anuncio">
      <picture>
        <source srcset="build/img/anuncio2.webp" type="image/webp" />
        <source srcset="build/img/anuncio2.jpg" type="image/jpeg" />
        <img class="icono"
          loading="lazy"
          src="build/img/anuncio2.jpg"
          alt="Anuncio casa en el lago" />
      </picture>
      <div class="contenido-anuncio">
        <h3>Casa terminados de lujo</h3>
        <p>
          Casa con diseño moderno, así como tecnología inteligente y
          amueblada
        </p>
        <p class="precio">$2,000,000</p>
        <ul class="iconos-caracteristicas">
          <li>
            <img class="icono"
              src="build/img/icono_wc.svg"
              alt="Icono WC"
              loading="lazy" />
            <p>3</p>
          </li>
          <li>
            <img class="icono"
              src="build/img/icono_estacionamiento.svg"
              alt="Icono Estacionamiento"
              loading="lazy" />
            <p>3</p>
          </li>
          <li>
            <img class="icono"
              src="build/img/icono_dormitorio.svg"
              alt="Icono Dormitorio"
              loading="lazy" />
            <p>4</p>
          </li>
        </ul>

        <a href="anuncios.php" class="boton boton-amarillo">
          Ver Propiedad
        </a>
      </div>
    </div>
    <!--- Anuncio 3----->
    <div class="anuncio">
      <picture>
        <source srcset="build/img/anuncio3.webp" type="image/webp" />
        <source srcset="build/img/anuncio3.jpg" type="image/jpeg" />
        <img class="icono"
          loading="lazy"
          src="build/img/anuncio3.jpg"
          alt="Anuncio casa en el lago" />
      </picture>
      <div class="contenido-anuncio">
        <h3>Casa con alberca</h3>
        <p>
          Casa con alberca y acabados de lujo en la ciudad, excelente
          oportunidad
        </p>
        <p class="precio">$3,000,000</p>
        <ul class="iconos-caracteristicas">
          <li>
            <img class="icono"
              src="build/img/icono_wc.svg"
              alt="Icono WC"
              loading="lazy" />
            <p>3</p>
          </li>
          <li>
            <img class="icono"
              src="build/img/icono_estacionamiento.svg"
              alt="Icono Estacionamiento"
              loading="lazy" />
            <p>3</p>
          </li>
          <li>
            <img class="icono"
              src="build/img/icono_dormitorio.svg"
              alt="Icono Dormitorio"
              loading="lazy" />
            <p>4</p>
          </li>
        </ul>

        <a href="anuncios.php" class="boton boton-amarillo">
          Ver Propiedad
        </a>
      </div>
    </div>
  </div>

  <div class="alinear-derecha">
    <a href="anuncios.php" class="boton-verde">Ver Todas</a>
  </div>
</section>

<section class="imagen-contacto">
  <h2>Encuentra la casa de tus sueños</h2>
  <p>
    LLena el formulario de contacto y un asesor se pondrá en contacto
    contigo a la brevedad
  </p>
  <a href="contacto.php" class="boton-amarillo">Contactános</a>
</section>

<div class="contenedor seccion seccion-inferior">
  <section class="blog">
    <h3>Nuestro Blog</h3>
    <article class="entrada-blog">
      <div class="imagen">
        <picture>
          <source srcset="build/img/blog1.webp" type="image/webp" />
          <source srcset="build/img/blog1.jpg" type="image/jpeg" />
          <img
            loading="lazy"
            src="build/img/blog1.jpg"
            alt="Texto Entrada Blog" />
        </picture>
      </div>
      <div class="texto-entrada">
        <a href="entrada.php">
          <h4>Terraza en el techo de tu casa</h4>
        </a>
        <p class="informacion-meta">
          Escrito el: <span>20/10/2025</span> por: <span>Admin</span>
        </p>
        <p>
          Consejos para construir una terraza en el techo de tu casa con los
          mejores materiales y ahorrando dinero
        </p>
      </div>
      <div class="imagen">
        <picture>
          <source srcset="build/img/blog1.webp" type="image/webp" />
          <source srcset="build/img/blog1.jpg" type="image/jpeg" />
          <img
            loading="lazy"
            src="build/img/blog1.jpg"
            alt="Texto Entrada Blog" />
        </picture>
      </div>
      <div class="texto-entrada">
        <a href="entrada.php">
          <h4>Guia para decoeaci&oacute;n de tu hogar</h4>
        </a>
        <p class="informacion-meta">
          Escrito el: <span>20/10/2025</span> por: <span>Admin</span>
        </p>
        <p>
          Maximiza el espacio en tu hogar con esta guía, aprende a combinar
          muebles y colores para darle vida a tu espacio
        </p>
      </div>
    </article>
  </section>

  <section class="testimoniales">
    <h3>Testimoniales</h3>
    <div class="testimonial">
      <blockquote>
        El personal se comportó de una excelente forma, muy buena atención y
        la casa que me ofrecieron cumple con todas mis expectativas.
      </blockquote>
      <p>- Juan De la torre</p>
    </div>
  </section>
</div>

<?php incluirTemplate('footer') ?>