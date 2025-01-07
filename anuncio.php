<?php

$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT); //valida que sea un entero

//valida que el id sea un entero y válido
if (!$id) {
  header('Location: /admin');
}

//base de datos

require './includes/config/database.php';
$db = conectarDB();

//obtener los datos de la propiedad
$query = "SELECT * FROM propiedades WHERE id = ${id}";
$resultado = mysqli_query($db, $query);
$propiedad = mysqli_fetch_assoc($resultado);


$titulo = $propiedad['titulo'];
$precio = $propiedad['precio'];
$descripcion = $propiedad['descripcion'];
$habitaciones = $propiedad['habitaciones'];
$sanitarios = $propiedad['sanitario'];
$estacionamiento = $propiedad['estacionamiento'];
$vendedores_id = $propiedad['vendedores_id'];
$imagenPropiedad = $propiedad['imagen'];


require 'includes/funciones.php';
incluirTemplate('header');

?>
<main class="contenedor seccion contenido-centrado">
  <h1><?php echo $titulo ?></h1>
  <picture>
    <!-- <source srcset="build/img/destacada.webp" type="image/webp" />
    <source srcset="build/img/destacada.jpg" type="image/jpeg" /> -->
    <img loading="lazy" src="/imagenes/<?php echo $imagenPropiedad ?>" alt="Anuncio" />
  </picture>

  <div class="resumen-propiedad">
    <p class="precio">$<?php echo $precio ?></p>
    <ul class="iconos-caracteristicas">
      <li>
        <img class="icono"
          src="build/img/icono_wc.svg"
          alt="Icono WC"
          loading="lazy" />
        <p><?php echo $sanitarios ?></p>
      </li>
      <li>
        <img class="icono"
          src="build/img/icono_estacionamiento.svg"
          alt="Icono Estacionamiento"
          loading="lazy" />
        <p><?php echo $estacionamiento ?></p>
      </li>
      <li>
        <img class="icono"
          src="build/img/icono_dormitorio.svg"
          alt="Icono Dormitorio"
          loading="lazy" />
        <p><?php echo $habitaciones ?></p>
      </li>
    </ul>
    <p>
    <?php echo $descripcion ?>
    </p>
  </div>
</main>

<?php incluirTemplate('footer') ?>