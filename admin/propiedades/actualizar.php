<?php
// echo "<pre>";  //sirve para obtener los datos y debuguear
// var_dump($_GET);
// echo "</pre>";

$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT); //valida que sea un entero

//valida que el id sea un entero y válido
if (!$id) {
  header('Location: /admin');
}

//base de datos
require '../../includes/config/database.php';
$db = conectarDB();

//obtener los datos de la propiedad
$query = "SELECT * FROM propiedades WHERE id = ${id}";
$resultado = mysqli_query($db, $query);
$propiedad = mysqli_fetch_assoc($resultado);
// echo "<pre>"; //debuguear que trae la propiedad
// var_dump($propiedad);
// echo "</pre>";


//array de errores
$errores = [];
$titulo = $propiedad['titulo'];
$precio = $propiedad['precio'];
$descripcion = $propiedad['descripcion'];
$habitaciones = $propiedad['habitaciones'];
$sanitarios = $propiedad['sanitario'];
$estacionamiento = $propiedad['estacionamiento'];
$vendedores_id = $propiedad['vendedores_id'];
$imagenPropiedad = $propiedad['imagen'];

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

  // if (!$imagen['name'] || $imagen['error']) {
  //   $errores[] = "Debes añadir una imagen";
  // }

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

    $nombreImagen = '';

    if ($imagen['name']) {
      unlink('../../imagenes/' . $propiedad['imagen']); //borra la imagen anterior

      //generar un nombre único
      $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

      //subir imagen
      move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen); //mueve la imagen a la carpeta, toma el nombre temporal y el nombre original
    }else{
      $nombreImagen = $propiedad['imagen'];
    }



    //insertar en la base de datos
    $query = "UPDATE propiedades SET titulo = '${titulo}', precio = '${precio}', imagen = '${nombreImagen}', descripcion = '${descripcion}', habitaciones = ${habitaciones}, sanitario = ${sanitarios}, estacionamiento = ${estacionamiento}, vendedores_id = ${vendedores_id} WHERE id = ${id}";
    $resultado = mysqli_query($db, $query);

    if ($resultado) {
      echo "<script>
          document.addEventListener('DOMContentLoaded', function() {
           Swal.fire({
              icon: 'success',
              title: 'Propiedad actualizada correctamente'
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
              text: 'Hubo un error al actualizar la propiedad'
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
  <h1>Actualizar</h1>

  <a type="button" class="boton-verde" href="/admin"><i class="fas fa-arrow-left"></i> Volver</a>

  <?php foreach ($errores as $error) : ?>
    <div class="alerta error">
      <?php echo $error; ?>
    </div>
  <?php endforeach; ?>
  <form class="formulario" method="POST" enctype="multipart/form-data">
    <fieldset>
      <legend>Información General</legend>

      <label for="titulo">Titulo:</label>
      <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo ?>">

      <label for="precio">Precio:</label>
      <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio ?>">

      <label for="imagen">Imagen:</label>
      <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">

      <img src="/imagenes/<?php echo $imagenPropiedad ?>" class="imagen-small">

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

    <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">
  </form>
</main>

<?php incluirTemplate('footer') ?>