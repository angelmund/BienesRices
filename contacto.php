<?php 
  require 'includes/funciones.php';
  incluirTemplate('header');
  
?>

<main class="contendor seccion">
  <h1>Contacto</h1>
  <picture>
    <source srcset="build/img/destacada3.webp" type="image/webp" />
    <source srcset="build/img/destacada3.jpg" type="image/jpeg" />
    <img loading="lazy" src="build/img/destacada3.jpg" alt="Contacto" />
  </picture>
  <h2>Llene el formulario de contacto</h2>
  <form action="" class="formulario">
    <fieldset>
      <legend>Información Personal</legend>

      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre" />

      <label for="email">E-mail:</label>
      <input type="email" id="email" name="email" placeholder="Tu Correo" />

      <label for="telefono">Teléfono:</label>
      <input type="tel" id="telefono" name="telefono" placeholder="Tu Teléfono" />

      <label for="mensaje">Mensaje:</label>
      <textarea id="mensaje" name="mensaje"></textarea>

    </fieldset>
    <fieldset>
      <legend>Información sobre la propiedad</legend>

      <label for="opciones">Vende o Compra:</label>
      <select id="opciones">
        <option value="" disabled selected>-- Seleccione --</option>
        <option value="Compra">Compra</option>
        <option value="Vende">Vende</option>
      </select>

      <label for="presupuesto">Precio o Presupuesto:</label>
      <input type="number" id="presupuesto" placeholder="Tu Precio o Presupuesto" />

    </fieldset>

    <fieldset>
      <legend>Información sobre la propiedad</legend>

      <p>Como desea ser contactado:</p>

      <div class="forma-contacto">
        <label for="contactar-telefono">Teléfono</label>
        <input type="radio" id="contactar-telefono" name="contacto" value="telefono" />

        <label for="contactar-email">E-mail</label>
        <input type="radio" id="contactar-email" name="contacto" value="email" />
      </div>

      <p>Si eligió teléfono, elija la fecha y la hora</p>
      <label for="fecha">Fecha:</label>
      <input type="date" id="fecha" />

      <label for="hora">Hora:</label>
      <input type="time" id="hora" min="09:00" max="18:00" />
    </fieldset>
    <button type="submit" class="boton-verde">Enviar</button>
  </form>
</main>

<?php incluirTemplate('footer') ?>