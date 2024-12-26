<?php 
  require 'includes/funciones.php';
  incluirTemplate('header');
  
?>

<main class="contenedor seccion contenido-centrado">
  <h1>Guía para la decoración de tu hogar</h1>
  <picture>
    <source srcset="build/img/destacada.webp" type="image/webp" />
    <source srcset="build/img/destacada.jpg" type="image/jpeg" />
    <img loading="lazy" src="build/img/destacada.jpg" alt="Anuncio" />
  </picture>
  <p class="informacion-meta">Escrito el: <span>02/01/2025</span> por: <span>Admin</span></p>

  <div class="resumen-propiedad">
    <p class="precio">$3,000,000</p>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
      quod.
    </p>
  </div>
</main>

<?php incluirTemplate('footer') ?>