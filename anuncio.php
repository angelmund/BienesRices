<?php 
  require 'includes/funciones.php';
  incluirTemplate('header');
  
?>
<main class="contenedor seccion contenido-centrado">
  <h1>Casa en Venta frente al Bosque</h1>
  <picture>
    <source srcset="build/img/destacada.webp" type="image/webp" />
    <source srcset="build/img/destacada.jpg" type="image/jpeg" />
    <img loading="lazy" src="build/img/destacada.jpg" alt="Anuncio" />
  </picture>

  <div class="resumen-propiedad">
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
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
      quod.
    </p>
  </div>
</main>

<?php incluirTemplate('footer') ?>