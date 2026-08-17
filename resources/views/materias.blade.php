<!DOCTYPE html>
<html lang="es">
<head>
    @vite('resources/js/app.js')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" href="{{ asset('img/shekina_logo.png') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <title>Materias</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: 
                linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)),
                url('/img/shekina_logo.png');
            background-size: contain;  
            background-repeat: no-repeat;
            background-position: center;
        }
        .spinner {
            width: 16px;
            height: 16px;
            border: 2px solid rgba(255,255,255,0.4);
            border-top-color: #fff;
            border-radius: 50%;
            animation: spin 0.7s linear infinite;
            display: inline-block;
            vertical-align: middle;
            margin-right: 6px;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    
    <header id="header">
        <nav id="menu">
            
            <div id="menu-logo">
                <img src="img/shekinah_logo.png" alt="Logo Shekina" id="logo-img">
            </div>

            <ul id="menu-links">
                <li><a href="/inicio">Inicio</a></li>
                <li><a href="/informacion">Información</a></li>
                @if(session('perfil') == 3)
                    <li><a href="/adminInscripcion">Inscripciones</a></li>
                    <li><a href="/periodo">Periodo</a></li>
                    <li><a href="/admin">Administración</a></li>
                @endif
                @if(session('perfil') == 4 || session('perfil') == 3)
                <li><a href="/pagos">Pagos</a></li>
                @endif
                
            </ul>

            <div id="menu-acceder">
                <a href="/logout" id="btn-acceder">Cerrar Sesion</a>
            </div>

        </nav>
    </header>

   <section id="contenido">
        @if(session('perfil') == 3)
            <h2>Asignación de profesores</h2>
                <table class="tabla-materias">
                    <thead>
                        <tr>
                            <th>Materia</th>
                            <th>Cuatrimestre</th>
                            <th>Periodo</th>
                            <th>Profesor</th>
                            <th>Región</th>
                            <th>Asignar</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($materias as $materia)
                            <tr>
                                {{-- Materia --}}
                                <td>
                                    {{ $materia->NOMBRE_MATERIA }}
                                </td>
                                <td class="text-center">
                                    {{ $materia->CUATRIMESTRE }}
                                </td>
                                {{-- Periodo (nombre directo) --}}
                                <td class="text-center">
                                    {{ $periodo[0]->PERIODO ?? 'N/A' }}
                                </td>

                                {{-- Profesor --}}
                                <td>
                                    <select class="select-profesor">
                                        <option value="">-- Selecciona --</option>
                                        @foreach($profesores as $profesor)
                                            <option value="{{ $profesor->USUARIO }}">
                                                {{ $profesor->NOMBRE_COMPLETO }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>

                                {{-- Región --}}
                                <td>
                                    <select class="select-region">
                                        <option value="">-- Selecciona --</option>
                                        @foreach($regiones as $region)
                                            <option value="{{ $region->ID_REGION }}">
                                                {{ $region->NOMBRE }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>

                                {{-- Asignar --}}
                                <td class="text-center">
                                    <button 
                                        class="btn-asignar"
                                        data-materia="{{ $materia->ID_MATERIA }}"
                                        data-periodo="{{ $periodo[0]->ID_PERIODO }}"
                                        disabled
                                    >
                                        Asignar
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            <br>
            <h2>Asignaciones realizadas</h2>
            @if(isset($asignaciones) && $asignaciones->count() > 0)
                <table class="tabla-materias" id="tablaMat">
                    <thead>
                        <tr>
                            <th>Materia</th>
                            <th>Periodo</th>
                            <th>Profesor</th>
                            <th>Región</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($asignaciones as $a)
                            <tr>
                                <td>{{ $a->materia }}</td>
                                <td class="text-center">{{ $a->PERIODO }}</td>
                                <td>{{ $a->profesor }}</td>
                                <td>{{ $a->region }}</td>
                                <td class="text-center">
                                    <form action="{{ route('materias.eliminar') }}" method="POST"
                                        onsubmit="return confirm('¿Seguro que deseas eliminar esta asignación?')">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $a->ID }}">
                                        <button type="submit" class="btn-eliminar">
                                            🗑 Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                <button type="button" class="btn-alumnos">
                    Asignar Alumnos
                </button>
            @else
                <p class="text-muted mt-2">No hay asignaciones registradas.</p>
            @endif
        @endif
        @if(session('perfil') == 2)
            <h2>Materias asignadas</h2>

            <div id="materias-profesor" class="materias-profesor">
                <select name="materia" id="materia" class="select-materia">
                    <option value="">-- Selecciona una materia --</option>
                    @foreach($materias as $materia)
                        <option 
                            value="{{ $materia->ID }}"
                            data-materia="{{ $materia->MATERIA }}"
                            data-profesor="{{ $materia->PROFESOR }}"
                            data-periodo="{{ $materia->PERIODO }}"
                            data-region="{{ $materia->ID_REGION }}"
                        >
                            {{ $materia->NOMBRE_MATERIA }} - {{ $materia->REGION }}
                        </option>
                    @endforeach
                </select>

                <button type="button" id="btn-materia" class="btn-materia">
                    Ver
                </button>
            </div>
            <br>
            <table class="tabla-materias">
                <thead>
                    <tr>
                        <th>Materia</th>
                        <th>Alumno</th>
                        <th>Cuatrimestre</th>
                        <th>Calificación</th>
                        <th>Guardar</th>
                    </tr>
                </thead>
                <tbody id="tbody-materias">
                </tbody>
            </table>
        @endif
        @if(session('perfil') == 1)
            @php
                $calificaciones = $materias->pluck('CALIFICACION')->filter();
                $promedio = $calificaciones->count() > 0
                    ? round($calificaciones->avg(), 2)
                    : '-';
            @endphp
            <h2>Calificaciones</h2>
            
            @if($materias->isNotEmpty())
                <div id="info-materias">
                    <div><strong>Alumno:</strong> {{ $materias->first()->alumno }}</div>
                    <div><strong>Periodo:</strong> {{ $materias->first()->PERIODO }}</div>
                    <div><strong>Región:</strong> {{ $materias->first()->region }}</div>
                </div>
            @else
                <p>No tienes materias asignadas.</p>
            @endif

            @if($materias->isNotEmpty())
                <table class="tabla-materias" >
                    <thead>
                        <tr>
                            <th>Materia</th>
                            <th>Profesor</th>
                            <th>Calificación</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($materias as $m)
                            <tr>
                                <td>{{ $m->materia }}</td>
                                <td>{{ $m->profesor }}</td>
                                <td>{{ $m->CALIFICACION ?? '-' }}</td>
                            </tr>
                        @endforeach
                        <tr style="font-weight: bold; background-color:#f4f6f9;">
                            <td></td>
                            <td style="text-align:right;">Promedio general</td>
                            <td>
                                {{ $promedio }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            @endif
        @endif
        <br>
       
    </section>

    <footer id="foot">
            <img src="img/icap_logo.png" alt="Logo Icap" id="logoi-img">
            <p>ICAP A.R.</p>
    </footer>
    <script src="{{ asset('js/materias.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        
        $(document).ready(function () {
            $('#tablaMat').DataTable({
                pageLength: 5,
                scrollX: true, 
                autoWidth: false,

                language: {
                    lengthMenu: "Mostrar _MENU_ registros",
                    zeroRecords: "No se encontraron resultados",
                    info: "Mostrando _START_ a _END_ de _TOTAL_ registros",
                    infoEmpty: "Mostrando 0 registros",
                    search: "Buscar:",
                    paginate: {
                        first: "Primero",
                        last: "Último",
                        next: "Siguiente",
                        previous: "Anterior"
                    }
                }
            });
        });
    </script>

</div>
</body>
</html>
