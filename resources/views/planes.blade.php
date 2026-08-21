@extends('layouts.app')

@section('title', 'Planes de Estudio | Instituto Shekinah')
@section('meta_description', 'Conoce la malla curricular del Instituto Shekina: seis cuatrimestres y un diplomado de formación bíblica y ministerial.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/planes.css') }}">
@endpush

@section('content')

    <section id="hero">
        <div class="contenedor">
            <div class="hero-contenido">
                <span class="eyebrow">Programa Académico</span>
                <h1>Planes de Estudio</h1>
                <p>
                    Un recorrido formativo de seis cuatrimestres y un diplomado final, diseñado para preparar
                    siervos fieles, capacitados y comprometidos con la obra del Señor.
                </p>
                <div class="hero-botones">
                    <a href="/inscripcion" class="btn btn-primario"><i class="bi bi-journal-check"></i> Inscríbete ahora</a>
                    <a href="#malla" class="btn btn-secundario"><i class="bi bi-diagram-3"></i> Ver mapa curricular</a>
                </div>
            </div>
        </div>
    </section>

    <section id="stats">
        <div class="contenedor">
            <div class="stats-grid" id="statsGrid">
                <div class="stat-card">
                    <div class="stat-icono"><i class="bi bi-calendar3"></i></div>
                    <h3>6 Cuatrimestres</h3>
                    <p>Formación teológica progresiva, organizada por niveles.</p>
                </div>
                <div class="stat-card">
                    <div class="stat-icono"><i class="bi bi-mortarboard"></i></div>
                    <h3>1 Diplomado</h3>
                    <p>Etapa final de especialización y práctica ministerial.</p>
                </div>
                <div class="stat-card">
                    <div class="stat-icono"><i class="bi bi-clock-history"></i></div>
                    <h3>20 Semanas</h3>
                    <p>Duración del diplomado que cierra el programa.</p>
                </div>
                <div class="stat-card">
                    <div class="stat-icono"><i class="bi bi-book"></i></div>
                    <h3>28 Materias</h3>
                    <p>Áreas de estudio bíblico, teológico y ministerial.</p>
                </div>
            </div>
            <div class="carrusel-puntos-mobil" id="statsPuntos"></div>
        </div>
    </section>

    <section class="seccion" id="malla">
        <div class="contenedor">
            <div class="seccion-cabecera">
                <span class="eyebrow">Mapa Curricular</span>
                <h2>Un camino formativo paso a paso</h2>
                <p>Cada cuatrimestre construye sobre el anterior, combinando fundamentos bíblicos, teología sistemática y preparación para el servicio.</p>
                <p style="margin-top: 22px;">
                    <a href="/programas" class="btn btn-secundario" style="color:#1a2744;border-color:rgba(26,39,68,0.25);display:inline-flex;">
                        <i class="bi bi-file-earmark-arrow-down"></i> Descargar programas por materia
                    </a>
                </p>
            </div>

            <div class="planes-grid" id="planesGrid">
                <div class="plan-card" id="Pcuatrimestre">
                    <div class="plan-numero">01</div>
                    <h3>Primer Cuatrimestre</h3>
                    <ul class="lista-check">
                        <li><i class="bi bi-check-lg"></i> Bibliología.</li>
                        <li><i class="bi bi-check-lg"></i> Introducción a la Teología.</li>
                        <li><i class="bi bi-check-lg"></i> Pentateuco.</li>
                        <li><i class="bi bi-check-lg"></i> Historia Eclesiástica.</li>
                    </ul>
                </div>

                <div class="plan-card" id="Scuatrimestre">
                    <div class="plan-numero">02</div>
                    <h3>Segundo Cuatrimestre</h3>
                    <ul class="lista-check">
                        <li><i class="bi bi-check-lg"></i> Homilética.</li>
                        <li><i class="bi bi-check-lg"></i> Teología Sistemática II.</li>
                        <li><i class="bi bi-check-lg"></i> Hermenéutica.</li>
                        <li><i class="bi bi-check-lg"></i> Evangelios Sinópticos.</li>
                    </ul>
                </div>

                <div class="plan-card" id="Tcuatrimestre">
                    <div class="plan-numero">03</div>
                    <h3>Tercer Cuatrimestre</h3>
                    <ul class="lista-check">
                        <li><i class="bi bi-check-lg"></i> Teología Sistemática.</li>
                        <li><i class="bi bi-check-lg"></i> Sermón Expositivo.</li>
                        <li><i class="bi bi-check-lg"></i> Hechos de los Apóstoles.</li>
                        <li><i class="bi bi-check-lg"></i> Liderazgo.</li>
                    </ul>
                </div>

                <div class="plan-card" id="Ccuatrimestre">
                    <div class="plan-numero">04</div>
                    <h3>Cuarto Cuatrimestre</h3>
                    <ul class="lista-check">
                        <li><i class="bi bi-check-lg"></i> Teología Sistemática IV.</li>
                        <li><i class="bi bi-check-lg"></i> Escatología.</li>
                        <li><i class="bi bi-check-lg"></i> Epístolas Paulinas.</li>
                        <li><i class="bi bi-check-lg"></i> Libros Sapienciales.</li>
                    </ul>
                </div>

                <div class="plan-card" id="Qcuatrimestre">
                    <div class="plan-numero">05</div>
                    <h3>Quinto Cuatrimestre</h3>
                    <ul class="lista-check">
                        <li><i class="bi bi-check-lg"></i> Ejercicios ministeriales.</li>
                        <li><i class="bi bi-check-lg"></i> Teología Sistemática V.</li>
                        <li><i class="bi bi-check-lg"></i> Evangelismo.</li>
                        <li><i class="bi bi-check-lg"></i> Libros Históricos.</li>
                    </ul>
                </div>

                <div class="plan-card" id="Secuatrimestre">
                    <div class="plan-numero">06</div>
                    <h3>Sexto Cuatrimestre</h3>
                    <ul class="lista-check">
                        <li><i class="bi bi-check-lg"></i> Evangelio de Juan.</li>
                        <li><i class="bi bi-check-lg"></i> Apologética.</li>
                        <li><i class="bi bi-check-lg"></i> Consejería pastoral.</li>
                        <li><i class="bi bi-check-lg"></i> Ética ministerial.</li>
                    </ul>
                </div>
            </div>
            <div class="carrusel-puntos-mobil" id="planesPuntos"></div>
        </div>
    </section>

    <section id="diplomado">
        <div class="contenedor">
            <div class="diplomado-cabecera">
                <span class="eyebrow">Etapa final</span>
                <h2>Diplomado en Formación Ministerial</h2>
                <p>La culminación del programa: veinte semanas de profundización teológica y práctica ministerial para consolidar el llamado al servicio.</p>
            </div>

            <div class="diplomado-caja" id="Diplomado">
                <div class="pill"><i class="bi bi-clock-history"></i> Duración: 20 semanas</div>
                <ul class="diplomado-lista">
                    <li><i class="bi bi-check-lg"></i> Eclesiología.</li>
                    <li><i class="bi bi-check-lg"></i> Apocalipsis.</li>
                    <li><i class="bi bi-check-lg"></i> Neumatología.</li>
                    <li><i class="bi bi-check-lg"></i> Administración pastoral.</li>
                </ul>
                <div class="diplomado-caja-pie">
                    <a href="/inscripcion" class="btn btn-primario"><i class="bi bi-journal-check"></i> Inscríbete al Diplomado</a>
                </div>
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
    <script src="{{ asset('js/pages/planes.js') }}"></script>
@endpush
