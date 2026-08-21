@extends('layouts.app')

@section('title', 'Instituto Shekinah | Formación Bíblica y Ministerial')
@section('meta_description', 'Instituto de formación y capacitación bíblica y ministerial. Formamos siervos comprometidos con la obra del Señor, fieles a la Palabra de Dios.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
@endpush

@section('content')

    <section id="hero">
        <div class="contenedor">
            <div class="hero-contenido">
                <span class="eyebrow">Instituto Shekinah</span>
                <h1>Formación bíblica sólida para siervos comprometidos con la obra de Dios</h1>
                <p>
                    Capacitamos y formamos líderes fieles en el estudio de las Sagradas Escrituras,
                    manteniendo una sana doctrina y un corazón dispuesto al servicio.
                </p>
                <div class="hero-botones">
                    <a href="/inscripcion" class="btn btn-primario"><i class="bi bi-journal-check"></i> Inscríbete ahora</a>
                    <a href="/planes" class="btn btn-secundario"><i class="bi bi-book"></i> Ver planes de estudio</a>
                </div>
            </div>
        </div>
    </section>

    <section id="valores">
        <div class="contenedor">
            <div class="valores-grid">
                <div class="valor-card">
                    <div class="valor-icono"><i class="bi bi-book-half"></i></div>
                    <h3>Formación estructurada</h3>
                    <p>Programas teológicos organizados por niveles, fieles a la Palabra de Dios.</p>
                </div>
                <div class="valor-card">
                    <div class="valor-icono"><i class="bi bi-people"></i></div>
                    <h3>Desarrollo ministerial</h3>
                    <p>Fortalecemos habilidades para el servicio y el liderazgo en la iglesia.</p>
                </div>
                <div class="valor-card">
                    <div class="valor-icono"><i class="bi bi-hand-thumbs-up"></i></div>
                    <h3>Preparación práctica</h3>
                    <p>Formación orientada a la obra y el servicio real dentro de la congregación.</p>
                </div>
                <div class="valor-card">
                    <div class="valor-icono"><i class="bi bi-heart"></i></div>
                    <h3>Acompañamiento espiritual</h3>
                    <p>Un seguimiento cercano y continuo durante todo el proceso formativo.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="seccion seccion-alt" id="conocenos">
        <div class="contenedor">
            <div class="bloque-imagen">
                <figure>
                    <img src="{{ asset('img/instituto1.jpg') }}" alt="Instalaciones del Instituto Shekina">
                </figure>
                <div class="bloque-texto">
                    <span class="eyebrow">Conócenos</span>
                    <h2>Un instituto comprometido con la sana doctrina</h2>
                    <p>
                        Somos un instituto dedicado a la formación y capacitación bíblica y ministerial.
                        Creemos en la enseñanza sólida de la Palabra de Dios y en el desarrollo espiritual
                        de todo creyente.
                    </p>
                    <p>
                        Desde nuestra fundación, nuestro objetivo ha sido formar siervos comprometidos con
                        la obra del Señor y con un corazón dispuesto al servicio.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="mision">
        <div class="contenedor">
            <span class="eyebrow">Nuestra misión</span>
            <h2>Formar líderes fieles al servicio de Dios</h2>
            <p>
                Capacitar y formar líderes fieles siervos de Dios, en el estudio de las Sagradas Escrituras
                y mantener una sana doctrina.
            </p>
        </div>
    </section>

    <section class="seccion" id="ofrecemos">
        <div class="contenedor">
            <div class="bloque-imagen invertido">
                <figure>
                    <img src="{{ asset('img/instituto2.jpg') }}" alt="Clases del Instituto Shekina">
                </figure>
                <div class="bloque-texto">
                    <span class="eyebrow">Ofrecemos</span>
                    <h2>Una formación sólida, bíblica y ministerial</h2>
                    <p>
                        En nuestro instituto brindamos una formación sólida, basada en la Biblia y orientada
                        al crecimiento espiritual, doctrinal y ministerial.
                    </p>
                    <ul class="lista-check">
                        <li><i class="bi bi-check-lg"></i> Formación teológica estructurada.</li>
                        <li><i class="bi bi-check-lg"></i> Desarrollo de habilidades ministeriales.</li>
                        <li><i class="bi bi-check-lg"></i> Preparación para la obra y el servicio en la iglesia.</li>
                        <li><i class="bi bi-check-lg"></i> Acompañamiento espiritual continuo.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="seccion seccion-alt" id="dirigido-a">
        <div class="contenedor">
            <div class="seccion-cabecera">
                <span class="eyebrow">Dirigido a</span>
                <h2>¿Para quién es este instituto?</h2>
            </div>
            <div class="dirigido-grid">
                <div class="dirigido-card">
                    <i class="bi bi-person-check"></i>
                    <p>Siervos de Dios que aún no han cursado el Instituto.</p>
                </div>
                <div class="dirigido-card">
                    <i class="bi bi-briefcase"></i>
                    <p>Ministerios de oficio interesados en formación continua.</p>
                </div>
                <div class="dirigido-card">
                    <i class="bi bi-people-fill"></i>
                    <p>Ayudas, gobernaciones y la iglesia en general.</p>
                </div>
                <div class="dirigido-card">
                    <i class="bi bi-geo-alt"></i>
                    <p>Zonas donde no se imparte enseñanza presencial.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="seccion" id="galeria">
        <div class="contenedor">
            <div class="seccion-cabecera">
                <span class="eyebrow">Galería</span>
                <h2>Un vistazo a nuestra comunidad</h2>
            </div>
            <div class="carrusel">
                <span class="flecha izq" role="button" aria-label="Anterior">&#10094;</span>
                <span class="flecha der" role="button" aria-label="Siguiente">&#10095;</span>

                <img src="{{ asset('img/instituto5.jpg') }}" class="activa" alt="Galería Instituto Shekina 1">
                <img src="{{ asset('img/instituto6.jpg') }}" alt="Galería Instituto Shekina 2">
                <img src="{{ asset('img/instituto3.jpg') }}" alt="Galería Instituto Shekina 3">
                <img src="{{ asset('img/omstituto4.jpg') }}" alt="Galería Instituto Shekina 4">
                <img src="{{ asset('img/instituto7.jpg') }}" alt="Galería Instituto Shekina 5">
                <img src="{{ asset('img/instituto8.jpg') }}" alt="Galería Instituto Shekina 6">

                <div class="carrusel-puntos"></div>
            </div>
        </div>
    </section>

    <section id="cta-final">
        <div class="contenedor">
            <div class="cta-caja">
                <div>
                    <h2>¿Listo para comenzar tu formación bíblica?</h2>
                    <p>Inscríbete hoy y da el siguiente paso en tu preparación ministerial.</p>
                </div>
                <a href="/inscripcion" class="btn btn-primario"><i class="bi bi-journal-check"></i> Inscríbete ahora</a>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script src="{{ asset('js/pages/home.js') }}"></script>
@endpush
