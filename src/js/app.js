document.addEventListener('DOMContentLoaded', function() {
    // Función para la navegación responsive
    eventListeners();
    darkMode();
});


function eventListeners() {
    const mobileMenu = document.querySelector('.movil-menu');
    mobileMenu.addEventListener('click', navegacionResponsive);
}

function navegacionResponsive() {
    const navegacion = document.querySelector('.navegacion');
    navegacion.classList.toggle('mostrar');
}

function darkMode() {
    const prefier3DarkMode = window.matchMedia('(prefers-color-scheme: dark)');  // Detecta si el usuario tiene activado el modo oscuro en su sistema operativo

    if(prefier3DarkMode.matches) {
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }

    // Cambiar el tema manualmente en el sitio web
    prefier3DarkMode.addEventListener('change', () => {
        if(prefier3DarkMode.matches) {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    }
    );

    const btnDarkMode = document.querySelector('.dark-mode-boton');

    btnDarkMode.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
    });
}