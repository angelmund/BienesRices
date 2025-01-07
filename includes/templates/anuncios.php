<?php

//importar la conexión
require './includes/config/database.php';
$db = conectarDB();

//limites de propiedades por pagina
$limite = 4;
//escribir el query para solo traer 4 propiedades
$query = "SELECT * FROM propiedades LIMIT ${limite}";

//consultar la base de datos
$propiedades = mysqli_query($db, $query);

//muestra un mensaje condicional
$resultado = $_GET['resultado'] ?? null;

?>

<div class="contenedor-anuncios">
    <?php while ($propiedad = mysqli_fetch_assoc($propiedades)) : ?>
        <div class="anuncio">
            <picture>
                <img src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="Imagen propiedad" loading="lazy" />
            </picture>
            <div class="contenido-anuncio">
                <h3><?php echo $propiedad['titulo']; ?></h3>
                <p><?php echo $propiedad['descripcion']; ?></p>
                <p class="precio">$<?php echo $propiedad['precio']; ?></p>
                <ul class="iconos-caracteristicas">
                    <li>
                        <img class="icono" src="build/img/icono_wc.svg" alt="Icono WC" loading="lazy" />
                        <p><?php echo $propiedad['sanitario']; ?></p>
                    </li>
                    <li>
                        <img class="icono" src="build/img/icono_estacionamiento.svg" alt="Icono Estacionamiento" loading="lazy" />
                        <p><?php echo $propiedad['estacionamiento']; ?></p>
                    </li>
                    <li>
                        <img class="icono" src="build/img/icono_dormitorio.svg" alt="Icono Dormitorio" loading="lazy" />
                        <p><?php echo $propiedad['habitaciones']; ?></p>
                    </li>
                </ul>
                <a href="anuncio.php?id=<?php echo $propiedad['id']; ?>" class="boton boton-amarillo">
                    <i class="fas fa-eye"></i> Ver Propiedad
                </a>
            </div>
        </div>
    <?php endwhile; ?>
</div>