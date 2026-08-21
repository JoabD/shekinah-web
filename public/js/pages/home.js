// Carrusel de galería con puntos de navegación — página de Inicio.

document.addEventListener('DOMContentLoaded', () => {
    const carrusel = document.querySelector('.carrusel');
    const imagenes = document.querySelectorAll('.carrusel img');
    const puntosContenedor = document.querySelector('.carrusel-puntos');

    if (!carrusel || !imagenes.length || !puntosContenedor) return;

    let indice = 0;

    imagenes.forEach((_, i) => {
        const punto = document.createElement('span');
        punto.classList.add('punto');
        if (i === 0) punto.classList.add('activo');
        punto.addEventListener('click', () => irAImagen(i));
        puntosContenedor.appendChild(punto);
    });
    const puntos = document.querySelectorAll('.punto');

    function actualizarCarrusel() {
        imagenes.forEach(img => img.classList.remove('activa'));
        puntos.forEach(p => p.classList.remove('activo'));
        imagenes[indice].classList.add('activa');
        puntos[indice].classList.add('activo');
    }

    function cambiarImg(dir) {
        indice = (indice + dir + imagenes.length) % imagenes.length;
        actualizarCarrusel();
    }

    function irAImagen(i) {
        indice = i;
        actualizarCarrusel();
    }

    carrusel.querySelector('.flecha.izq')?.addEventListener('click', () => cambiarImg(-1));
    carrusel.querySelector('.flecha.der')?.addEventListener('click', () => cambiarImg(1));

    // Autoplay suave del carrusel (se detiene si el usuario interactúa)
    const autoplay = setInterval(() => cambiarImg(1), 6000);
    carrusel.addEventListener('mouseenter', () => clearInterval(autoplay));
});
