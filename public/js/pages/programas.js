// Resalta el chip del cuatrimestre visible mientras se hace scroll — página de Catálogo de Materias.

document.addEventListener('DOMContentLoaded', () => {
    const chips = document.querySelectorAll('.chip-salto');
    const grupos = document.querySelectorAll('.grupo-materias, #diplomado');

    if (!('IntersectionObserver' in window) || !grupos.length) return;

    const observador = new IntersectionObserver((entradas) => {
        entradas.forEach(entrada => {
            if (!entrada.isIntersecting) return;
            chips.forEach(chip => chip.classList.remove('activo'));
            const chipActivo = document.querySelector(`.chip-salto[href="#${entrada.target.id}"]`);
            if (chipActivo) chipActivo.classList.add('activo');
        });
    }, { rootMargin: '-160px 0px -60% 0px', threshold: 0 });

    grupos.forEach(grupo => observador.observe(grupo));
});
