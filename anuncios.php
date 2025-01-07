<?php 
  require 'includes/funciones.php';
  incluirTemplate('header');
  
?>
<main class="contendor seccion">

  
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

          <a href="anuncio.php" class="boton boton-amarillo">
            Ver Propiedad
          </a>
        </div>
      </div>
      <!--- Anuncio 2----->
      <div class="anuncio">
        <picture>
          <source srcset="build/img/anuncio2.webp" type="image/webp" />
          <source srcset="build/img/anuncio2.jpg" type="image/jpeg" />
          <img
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

          <a href="anuncio.php" class="boton boton-amarillo">
            Ver Propiedad
          </a>
        </div>
      </div>
      <!--- Anuncio 3----->
      <div class="anuncio">
        <picture>
          <source srcset="build/img/anuncio3.webp" type="image/webp" />
          <source srcset="build/img/anuncio3.jpg" type="image/jpeg" />
          <img
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

          <a href="anuncio.php" class="boton boton-amarillo">
            Ver Propiedad
          </a>
        </div>
      </div>
    </div>

    <?php
      
      //escribir el query para solo traer 4 propiedades
        $query = "SELECT * FROM propiedades ";
      include 'includes/templates/anuncios.php';
    ?>
 
</main>

<?php incluirTemplate('footer') ?>