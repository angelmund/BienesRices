<?php 
  //base de datos
  require '../../includes/config/database.php';
  $db = conectarDB();

  require '../../includes/funciones.php';
  incluirTemplate('header');
  
?>
<main class="contendor seccion">
  <h1>Crear</h1>

  <a type="button" class="boton-verde" href="/bienesraices_inicio/admin"><i class="fas fa-arrow-left"></i> Volver</a>

  <form action="" class="formulario">
    <fieldset>
      <legend>Información General</legend>

      <label for="titulo">Titulo:</label>
      <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad">

      <label for="precio">Precio:</label>
      <input type="number" id="precio" name="precio" placeholder="Precio Propiedad">

      <label for="imagen">Imagen:</label>
      <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">

      <label for="descripcion">Descripción:</label>
      <textarea id="descripcion" name="descripcion"></textarea>
    </fieldset>

    <fieldset>
      <legend>Información Propiedad</legend>

      <label for="habitaciones">Habitaciones:</label>
      <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej. 3" min="1" >

      <label for="sanitarios">Baños:</label>
      <input type="number" id="sanitarios" name="sanitarios" placeholder="Ej. 3" min="1" >

      <label for="estacionamiento">Estacionamiento:</label>
      <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej. 3" min="1" >
    </fieldset>

    <fieldset>
      <legend>Vendedor</legend>

      <select name="vendedor">
        <option value="">-- Seleccione --</option>
      </select>
    </fieldset>

    <input type="submit" value="Crear Propiedad" class="boton-verde">
  </form>
</main>

<?php incluirTemplate('footer') ?>