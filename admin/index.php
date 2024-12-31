<?php
//importar la conexión
require '../includes/config/database.php';
$db = conectarDB();

//escribir el query
$query = "SELECT * FROM propiedades";

//consultar la base de datos
$resultadoConsulta = mysqli_query($db, $query);


//muestra un mensaje condicional
$resultado = $_GET['resultado'] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = $_POST['id'];
  $id = filter_var($id, FILTER_VALIDATE_INT);

  if ($id) {
    //eliminar el archivo
    //primero obtenemos la propiedad
    $query = "SELECT imagen FROM propiedades WHERE id = ${id}";
    $resultado = mysqli_query($db, $query);
    $propiedad = mysqli_fetch_assoc($resultado);

    //eliminar el archivo
    unlink('../imagenes/' . $propiedad['imagen']);

    //eliminar la propiedad
    $query = "DELETE FROM propiedades WHERE id = ${id}";
    $resultado = mysqli_query($db, $query);

    if ($resultado) {
      echo "<script>
          document.addEventListener('DOMContentLoaded', function() {
              Swal.fire({
                  title: '¿Estás seguro?',
                  text: '¡No podrás revertir esto!',
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Sí, eliminarlo!'
              }).then((result) => {
                  if (result.isConfirmed) {
                      // Realizar la eliminación
                      Swal.fire({
                          title: 'Eliminado!',
                          text: 'El registro ha sido eliminado.',
                          icon: 'success'
                      }).then(() => {
                          window.location = '/admin';
                      });
                  }
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

require '../includes/funciones.php';
incluirTemplate('header');

?>
<main class="contendor seccion">
  <h1>Administrador de bienes Raices</h1>

  <a type="button" class="boton-verde" href="/admin/propiedades/crear.php"><i class="fas fa-plus"></i> Crear nueva propiedad</a>


  <table class="propiedades">
    <thead>
      <tr>
        <th>Titulo</th>
        <th>Precio</th>
        <th>Im&aacute;gen</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($propiedad = mysqli_fetch_assoc($resultadoConsulta)) : ?>
        <tr>
          <td><?php echo $propiedad['titulo']; ?></td>
          <td><?php echo $propiedad['precio']; ?></td>
          <td>
            <img src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="Imagen propiedad" class="imagen-tabla">
          </td>
          <td>
            <form method="POST" class="w-100">
              <input type="hidden" name="id" value="<?php echo $propiedad['id']; ?>">
              <input type="submit" class="boton-rojo" value="Eliminar">
            </form>
            <a href="/admin/propiedades/actualizar.php?id=<?php echo $propiedad['id']; ?>" class="boton-verde-block">
              <i class="fas fa-sync-alt"></i> Actualizar
            </a>
          </td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>


</main>

<?php

//cerrar la conexión
mysqli_close($db);

incluirTemplate('footer')
?>