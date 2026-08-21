// Carrusel móvil (tarjetas de estadísticas y mapa curricular) — página de Planes de Estudio.

document.addEventListener('DOMContentLoaded', () => {
    function inicializarCarruselMovil(idGrid, idPuntos) {
        const grid = document.getElementById(idGrid);
        const puntosContenedor = document.getElementById(idPuntos);
        if (!grid || !puntosContenedor) return;

        const tarjetas = Array.from(grid.children);
        puntosContenedor.innerHTML = '';
        tarjetas.forEach((tarjeta, i) => {
            const punto = document.createElement('span');
            punto.classList.add('punto-mobil');
            if (i === 0) punto.classList.add('activo');
            punto.addEventListener('click', () => {
                grid.scrollTo({ left: tarjeta.offsetLeft, behavior: 'smooth' });
            });
            puntosContenedor.appendChild(punto);
        });
        const puntos = puntosContenedor.querySelectorAll('.punto-mobil');

        let ticking = false;
        grid.addEventListener('scroll', () => {
            if (ticking) return;
            ticking = true;
            requestAnimationFrame(() => {
                let indice = 0;
                let menorDistancia = Infinity;
                tarjetas.forEach((tarjeta, i) => {
                    const distancia = Math.abs(tarjeta.offsetLeft - grid.scrollLeft);
                    if (distancia < menorDistancia) {
                        menorDistancia = distancia;
                        indice = i;
                    }
                });
                puntos.forEach(p => p.classList.remove('activo'));
                if (puntos[indice]) puntos[indice].classList.add('activo');
                ticking = false;
            });
        });
    }

    inicializarCarruselMovil('statsGrid', 'statsPuntos');
    inicializarCarruselMovil('planesGrid', 'planesPuntos');
});
