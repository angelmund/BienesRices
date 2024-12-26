<?php 
  require 'includes/funciones.php';
  incluirTemplate('header');
  
?>
<main class="contendor seccion">
  <h2>Conoce Sobre Nosotros</h2>
  <div class="contenido-nosotros">
    <div class="imagen">
      <picture>
        <source srcset="build/img/nosotros.webp" type="image/webp">
        <source srcset="build/img/nosotros.jpg" type="image/jpeg">
        <img
          src="build/img/nosotros.jpg"
          alt="Imagen sobre nosotros"
          loading="lazy" />
      </picture>
    </div>
    <div class="texto-nosotros">
      <blockquote>
        25 años de experiencia
      </blockquote>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit Beatae
        quod obcaecati tempora nostrum sunt maiores sapiente a reiciendis
        et laboriosam optio sint aspernatur cupiditate modi praesentium
        alias explicabo Voluptate iusto.
      </p>

    </div>
  </div>
</main>

<section class="contendor seccion">
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

</section>

<?php incluirTemplate('footer') ?>