<?php

require 'includes/config/database.php';
$db = conectarDB();

$errores = [];

$email = '';
$password = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";

    $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (!$email) {
        $errores[] = "El email es obligatorio o no es válido";
    }

    if (!$password) {
        $errores[] = "El password es obligatorio";
    }

    if (empty($errores)) {
        // Revisar si un usuario existe
        $query = "SELECT * FROM usuarios WHERE email = '${email}'";
        $resultado = mysqli_query($db, $query);

        if ($resultado->num_rows) { // comprueba si hay al menos una fila en el resultado
            // Revisar si el password es correcto
            $usuario = mysqli_fetch_assoc($resultado);

            $auth = password_verify($password, $usuario['password']);

            if ($auth) {
                // Autenticar el usuario
                session_start();
                //SESSION es un array asociativo que guarda información del usuario
                $_SESSION['usuario'] = $usuario['email'];
                $_SESSION['login'] = true;

                header('Location: /admin');
            } else {
                $errores[] = "Las credenciales no son correctas";
            }
        } else {
            $errores[] = "El usuario no existe";
        }
    }
}

// $nombre = "Administrador";
// $email = "admin@gmail.com";
// $password = "123456";

// $passwordHash = password_hash($password, PASSWORD_DEFAULT);

// $query = "INSERT INTO usuarios (nombre, email, password, created_at, updated_at) VALUES ('${nombre}', '${email}', '${passwordHash}', NOW(), NOW())";
// mysqli_query($db, $query);

?>