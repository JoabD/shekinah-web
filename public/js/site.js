// Comportamiento compartido del layout (navbar, footer) en todas las páginas
// que usan resources/views/layouts/app.blade.php.

document.addEventListener('DOMContentLoaded', () => {
    // Año dinámico en el footer
    const anio = document.getElementById('anio');
    if (anio) {
        anio.textContent = new Date().getFullYear();
    }

    // Sombra del navbar al hacer scroll
    const header = document.getElementById('header');
    if (header) {
        window.addEventListener('scroll', () => {
            header.classList.toggle('con-sombra', window.scrollY > 10);
        });
    }

    // Menú móvil
    const menuToggle = document.getElementById('menu-toggle');
    const menuLinks = document.getElementById('menu-links');
    if (menuToggle && menuLinks) {
        menuToggle.addEventListener('click', () => {
            const abierto = menuLinks.classList.toggle('abierto');
            menuToggle.setAttribute('aria-expanded', abierto);
        });
        menuLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                menuLinks.classList.remove('abierto');
                menuToggle.setAttribute('aria-expanded', 'false');
            });
        });
    }
});
