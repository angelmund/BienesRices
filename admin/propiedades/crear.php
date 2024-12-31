<?php
//base de datos
require '../../includes/config/database.php';
$db = conectarDB();

//array de errores
$errores = [];
$titulo = '';
$precio = '';
$descripcion = '';
$habitaciones = '';
$sanitarios = '';
$estacionamiento = '';
$vendedores_id = '';

//consultar para obtener los vendedores
$query = "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $query);

//valida que el formulario se haya enviado por POST y no esté vacío
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // echo "<pre>";
  // var_dump($_POST);
  // echo "</pre>";

  // echo "<pre>";
  // var_dump($_FILES);
  // echo "</pre>";

  // exit;
  // Asignar valores
  $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
  $precio = mysqli_real_escape_string($db, $_POST['precio']);
  $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
  $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
  $sanitarios = mysqli_real_escape_string($db, $_POST['sanitarios']);
  $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
  $vendedores_id = mysqli_real_escape_string($db, $_POST['vendedores_id']);


  if (!$titulo) {
    $errores[] = "Debes añadir un titulo";
  }

  // var_dump($errores);
  // echo "<pre>";
  // var_dump($errores);
  // echo "</pre>";
  // exit;

  //validar que no haya campos vacíos

  //valida la imagen
  $imagen = $_FILES['imagen'];



  if (!$precio) {
    $errores[] = "Debes añadir un precio";
  }

  if (!$imagen['name'] || $imagen['error']) {
    $errores[] = "Debes añadir una imagen";
  }

  //validar tamaño de la imagen
  $medida = 1000 * 1000; //convierte a bytes a kb
  if ($imagen['size'] > $medida) {
    $errores[] = "La imagen es muy pesada";
  }

  if (strlen($descripcion) < 20) {
    $errores[] = "Debes añadir una descripción y debe tener al menos 20 caracteres";
  }

  if (!$habitaciones) {
    $errores[] = "Debes añadir el número de habitaciones";
  }

  if (!$sanitarios) {
    $errores[] = "Debes añadir el número de sanitarios";
  }

  if (!$estacionamiento) {
    $errores[] = "Debes añadir el número de estacionamientos";
  }

  if (!$vendedores_id) {
    $errores[] = "Debes elegir un vendedor";
  }

  if (empty($errores)) {
    //subida de archivos
    //crear carpeta
    $carpetaImagenes = '../../imagenes/';

    if (!is_dir($carpetaImagenes)) {
      mkdir($carpetaImagenes);
    }

    //generar un nombre único
    $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

    //subir imagen
    move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen); //mueve la imagen a la carpeta, toma el nombre temporal y el nombre original
 
    //insertar en la base de datos
    $query = "INSERT INTO propiedades (titulo, precio,imagen ,descripcion, habitaciones, sanitario, estacionamiento, created_at, updated_at, vendedores_id) VALUES ('$titulo', '$precio','$nombreImagen' ,'$descripcion', '$habitaciones', '$sanitarios', '$estacionamiento', NOW(), NOW(), '$vendedores_id')";
    $resultado = mysqli_query($db, $query);

    if ($resultado) {
      echo "<script>
          document.addEventListener('DOMContentLoaded', function() {
           Swal.fire({
              icon: 'success',
              title: 'Propiedad creada correctamente'
            }).then(function() {
              window.location.href = '/admin/';
            });
          });
        </script>";
    } else {
      echo "<script>
          document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: 'Hubo un error al crear la propiedad'
            });
          });
        </script>";
    }
  }
}

require '../../includes/funciones.php';
incluirTemplate('header');

?>
<main class="contendor seccion">
  <h1>Crear</h1>

  <a type="button" class="boton-verde" href="/admin"><i class="fas fa-arrow-left"></i> Volver</a>

  <?php foreach ($errores as $error) : ?>
    <div class="alerta error">
      <?php echo $error; ?>
    </div>
  <?php endforeach; ?>
  <form action="/admin/propiedades/crear.php" class="formulario" method="POST" enctype="multipart/form-data">
    <fieldset>
      <legend>Información General</legend>

      <label for="titulo">Titulo:</label>
      <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo ?>">

      <label for="precio">Precio:</label>
      <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio ?>">

      <label for="imagen">Imagen:</label>
      <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">

      <label for="descripcion">Descripción:</label>
      <textarea id="descripcion" name="descripcion"> <?php echo $descripcion ?> </textarea>
    </fieldset>

    <fieldset>
      <legend>Información Propiedad</legend>

      <label for="habitaciones">Habitaciones:</label>
      <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej. 3" min="1" value="<?php echo $habitaciones ?>">

      <label for="sanitarios">Baños:</label>
      <input type="number" id="sanitarios" name="sanitarios" placeholder="Ej. 3" min="1" value="<?php echo $sanitarios ?>">

      <label for="estacionamiento">Estacionamiento:</label>
      <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej. 3" min="1" value="<?php echo $estacionamiento ?>">
    </fieldset>

    <fieldset>
      <legend>Vendedor</legend>

      <select name="vendedores_id">
        <option value="">-- Seleccione --</option>
        <?php
        while ($vendedor = mysqli_fetch_assoc($resultado)): ?>
          <option <?php echo $vendedores_id === $vendedor['id'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id'] ?>"><?php echo $vendedor['nombre'] . " " . $vendedor['apellidos']; ?></option>
        <?php endwhile; ?>
      </select>
    </fieldset>

    <input type="submit" value="Crear Propiedad" class="boton-verde">
  </form>
</main>

<?php incluirTemplate('footer') ?>