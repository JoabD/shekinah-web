@php
    $enlacesNav = [
        ['url' => '/', 'ruta' => '/', 'label' => 'Inicio'],
        ['url' => '/inscripcion', 'ruta' => 'inscripcion', 'label' => 'Inscripción'],
        ['url' => '/planes', 'ruta' => 'planes', 'label' => 'Planes de Estudio'],
        ['url' => '/programas', 'ruta' => 'programas', 'label' => 'Catálogo de Materias'],
    ];
@endphp
<header id="header">
    <nav id="menu">
        <div id="menu-logo">
            <img src="{{ asset('img/shekina_logo.png') }}" alt="Logo Instituto Shekina" id="logo-img">
            <div class="marca">Instituto Teológico Shekinah<span>Formación Bíblica y Ministerial</span></div>
        </div>

        <ul id="menu-links">
            @foreach ($enlacesNav as $enlace)
                @php $activo = request()->is($enlace['ruta']); @endphp
                <li>
                    <a href="{{ $enlace['url'] }}"
                       class="{{ $activo ? 'activo' : '' }}"
                       @if ($activo) aria-current="page" @endif>
                        {{ $enlace['label'] }}
                    </a>
                </li>
            @endforeach
        </ul>

        <div id="menu-acceder">
            <a href="/registro" id="btn-acceder">Acceder</a>
        </div>

        <button id="menu-toggle" aria-label="Abrir menú" aria-expanded="false">
            <span class="icono-hamburguesa"></span>
        </button>
    </nav>
</header>
