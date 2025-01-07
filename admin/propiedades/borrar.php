<?php
require '../../includes/funciones.php';
$auth = estaAutenticado();
if (!$auth) {
  header('Location: /login.php');
}
incluirTemplate('header');

?>
<main class="contendor seccion">
  <h1>Borrar</h1>
</main>

<?php incluirTemplate('footer') ?>