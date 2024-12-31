<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/build/css/app.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <header class="header <?php echo  $inicio  ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/"> <img src="/build/img/logo.svg" alt="Logo" /></a>

                <div class="movil-menu">
                    <img src="build/img/barras.svg" alt="Icono Menu" />
                </div>
                <div class="derecha">
                    <img class="dark-mode-boton" src="/build/img/dark-mode.svg" alt=" Modo Oscuro" />
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <script src="/build/js/bundle.min.js"></script>
</body>

</html>