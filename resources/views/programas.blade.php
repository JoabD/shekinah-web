@extends('layouts.app')

@section('title', 'Catálogo de Materias | Instituto Shekinah')
@section('meta_description', 'Descarga el programa de estudio en PDF de cada materia del Instituto Shekinah, organizado por cuatrimestre.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/pages/programas.css') }}">
@endpush

@section('content')

    <section id="hero">
        <div class="contenedor">
            <div class="hero-contenido">
                <span class="eyebrow">Catálogo de Materias</span>
                <h1>Programas de estudio por materia</h1>
                <p>
                    Consulta el contenido de cada materia de la reticula y descarga su programa de estudio
                    en PDF, organizado cuatrimestre por cuatrimestre.
                </p>
                <div class="hero-botones">
                    <a href="#materias" class="btn btn-primario"><i class="bi bi-collection"></i> Ver materias</a>
                    <a href="/planes" class="btn btn-secundario"><i class="bi bi-diagram-3"></i> Ver planes de estudio</a>
                </div>
            </div>
        </div>
    </section>

    <nav id="salto-rapido" aria-label="Navegación rápida por cuatrimestre">
        <div class="contenedor">
            <div class="salto-lista">
                @foreach ($cuatrimestres as $grupo)
                    <a href="#cuatrimestre-{{ $grupo['numero'] }}" class="chip-salto">{{ $grupo['titulo'] }}</a>
                @endforeach
                <a href="#diplomado" class="chip-salto">Diplomado</a>
            </div>
        </div>
    </nav>

    <section class="seccion" id="materias">
        <div class="contenedor">
            <div class="seccion-cabecera">
                <span class="eyebrow">Reticula completa</span>
                <h2>28 materias, organizadas por cuatrimestre</h2>
                <p>Cada materia incluye su programa de estudio descargable en PDF con los temas, objetivos y bibliografía del curso.</p>
            </div>

            <div class="nota-info">
                <i class="bi bi-info-circle"></i>
                <p>Estamos subiendo los programas de estudio en PDF de cada materia. Las materias marcadas como <strong>"Próximamente"</strong> estarán disponibles para descarga muy pronto.</p>
            </div>

            @foreach ($cuatrimestres as $grupo)
                <div class="grupo-materias" id="cuatrimestre-{{ $grupo['numero'] }}">
                    <div class="grupo-cabecera">
                        <div class="grupo-numero">{{ $grupo['numero'] }}</div>
                        <div class="grupo-titulo">
                            <h3>{{ $grupo['titulo'] }}</h3>
                            <span>{{ count($grupo['materias']) }} materias</span>
                        </div>
                    </div>
                    <div class="lista-materias">
                        @foreach ($grupo['materias'] as $materia)
                            <div class="materia-item">
                                <div class="materia-info">
                                    <i class="bi bi-file-earmark-text"></i>
                                    <span class="materia-nombre">{{ $materia['nombre'] }}</span>
                                </div>
                                @if (!empty($materia['pdf']))
                                    <a href="{{ $materia['pdf'] }}" class="materia-descarga" target="_blank" rel="noopener">
                                        <i class="bi bi-download"></i> PDF
                                    </a>
                                @else
                                    <span class="materia-descarga pendiente">
                                        <i class="bi bi-clock"></i> Próximamente
                                    </span>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach

            <div id="diplomado">
                <div class="grupo-cabecera">
                    <div class="grupo-numero"><i class="bi bi-mortarboard"></i></div>
                    <div class="grupo-titulo">
                        <h3>{{ $diplomado['titulo'] }}</h3>
                        <span>{{ $diplomado['duracion'] }} &middot; {{ count($diplomado['materias']) }} materias</span>
                    </div>
                </div>
                <div class="lista-materias">
                    @foreach ($diplomado['materias'] as $materia)
                        <div class="materia-item">
                            <div class="materia-info">
                                <i class="bi bi-file-earmark-text"></i>
                                <span class="materia-nombre">{{ $materia['nombre'] }}</span>
                            </div>
                            @if (!empty($materia['pdf']))
                                <a href="{{ $materia['pdf'] }}" class="materia-descarga" target="_blank" rel="noopener">
                                    <i class="bi bi-download"></i> PDF
                                </a>
                            @else
                                <span class="materia-descarga pendiente">
                                    <i class="bi bi-clock"></i> Próximamente
                                </span>
                            @endif
                        </div>
                    @endforeach
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
    <script src="{{ asset('js/pages/programas.js') }}"></script>
@endpush
