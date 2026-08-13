<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/shekina_logo.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Administración</title>
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
        .contenedor-botones{
            display:flex;
            justify-content:flex-end;
            gap:10px; 
            margin-bottom:15px;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
</head>
<body>
    @unless(session('logueado')) 
        <section id="contenido">
            <h2>Solicitudes de Pre-registro</h2>
        </section>
    @endunless
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
                @if(session('perfil') != 4)
                <li><a href="/materias">Materias</a></li>
                @endif
                
            </ul>

            <div id="menu-acceder">
                <a href="/logout" id="btn-acceder">Cerrar Sesion</a>
            </div>

        </nav>
    </header>
    @if(session('perfil') == 3 || session('perfil') == 4)
        <section id="contenido">
           @if(session('success'))
                <div style="background-color:#d4edda; color:#155724; padding:10px; border-radius:5px; margin-bottom:20px;">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('errores_detalle'))
                <div style="background-color:#f8d7da; color:#721c24; padding:15px; border-radius:5px; margin-bottom:20px;">
                    <strong>Se encontraron errores:</strong>
                    <ul style="margin-top:10px; padding-left:20px;">
                        @foreach(session('errores_detalle') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <h2>Administración de pagos</h2>

            
            <div class="form-informacion" >
                <div class="form-group">
                    <label >
                        Periodo de Pago:
                    </label>

                    <select name="periodo" id="periodo" class="form-control" style="margin-right: 10px;">
                        <option value="-1">
                                Todos
                        </option>
                        @foreach($periodosPago as $periodo)
                            <option value="{{ $periodo->periodo_mes }}">
                                {{ $periodo->periodo_mes }}
                            </option>
                        @endforeach
                    </select>
                    <br>
                    <br>
                    <div style="text-align: center;">
                        <button type="button" class="btn-buscar">
                            Buscar
                        </button>
                    </div>
                </div>
            </div>
            <br>
            <h4>INFORMACIÓN DE PAGOS</h4>
            <div class="tabla-wrapper">
                <table class="tabla-registros" id="tablaRegis">
                    <thead>
                        <tr>
                            <th>USUARIO</th>
                            <th>NOMBRE</th>

                            @php
                                $periodos = collect($periodosPago)->pluck('periodo_mes');
                            @endphp

                            @foreach($periodos as $periodo)
                                <th>{{ $periodo }}</th>
                            @endforeach
                            <th>ESTATUS</th>
                            <th>NOTIFICACIÓN</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php
                            $agrupados = $pagos->groupBy('USUARIO');
                        @endphp

                        @foreach($agrupados as $usuario => $registros)
                            <tr>
                                <td>{{ $usuario }}</td>
                                <td>{{ $registros->first()->NOMBRE_COMPLETO }}</td>

                                @foreach($periodos as $periodo)
                                    @php
                                        $pago = $registros->firstWhere('PERIODO', $periodo);
                                    @endphp

                                    <td style="text-align:center;">
                                        @if($pago && $pago->PAGO == 1)
                                            <span style="color:green; font-weight:600;">✔</span>
                                        @else
                                            <span style="color:red; font-weight:600;">✖</span>
                                        @endif
                                    </td>
                                @endforeach
                                @php
                                    $noti = $registros->first()->NOTIFICACION;
                                @endphp

                                <td>
                                    @if($noti == 0)
                                        {{-- no muestra nada --}}
                                    @elseif($noti >= 1 && $noti <= 3)
                                        {{ $noti }} NOTIFICACIÓN{{ $noti > 1 ? 'ES' : '' }}
                                    @else
                                        <span style="color:red;font-weight:bold;">
                                            USUARIO BLOQUEADO
                                        </span>
                                    @endif
                                </td>
                                <td style="text-align:center;">
                                    @php
                                        $debe = $registros->where('PAGO', 0)->count();
                                    @endphp

                                    @if($debe > 0)
                                        <button 
                                            class="btn-actualizar btn-notificar"
                                            data-usuario="{{ $usuario }}"
                                            data-pagos="{{ $noti }}">
                                            Notificar
                                        </button>
                                    @else
                                        <span style="color:green;">Al corriente</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div style="text-align:center; margin:20px 0;">
                    <button class="btn-noti" 
                        data-usuario="-1"
                        data-pagos="-1">
                        NOTIFICAR A TODOS
                    </button>
                </div>
            </div>
            <br>
            <form action="{{ route('pagos.importar') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-informacion" id="subidaArchivo">
                    <div class="form-group">
                        <label>Subir archivo de pagos:</label>
                        <input type="file" name="archivo" class="form-control" accept=".csv, .xlsx" required>
                    </div>

                    <br>

                    <div style="text-align: center;">
                        <button type="submit" class="btn-guardar">📤 Subir archivo</button>
                    </div>
                </div>
            </form>
        </section>
    @endif
    @unless(session('logueado')) 
        <section id="contenido">
            <h2>Administración</h2>
        </section>
    @endunless
    <footer id="foot">
        <img src="img/icap_logo.png" alt="Logo Icap" id="logoi-img">
        <p>ICAP A.R.</p>
    </footer>
    <script src="{{ asset('js/index.js') }}"></script>
    <script src="{{ asset('js/pagos.js') }}"></script>

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        const URL_FILTRAR = "{{ route('pagos.filtrar') }}";
        const URL_NOTIFICA = "{{ route('pagos.notificar') }}";
        $(document).ready(function () {
            $('#tablaRegis').DataTable({
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

    <div id="loaderGlobal" style="
        display:none;
        position:fixed;
        top:0;
        left:0;
        width:100%;
        height:100%;
        background:rgba(0,0,0,0.6);
        z-index:9999;
        align-items:center;
        justify-content:center;
        flex-direction:column;
    ">
        <div style="
            width:60px;
            height:60px;
            border:6px solid #fff;
            border-top:6px solid #2563eb;
            border-radius:50%;
            animation:spin 1s linear infinite;
            margin-bottom:20px;
        "></div>

        <span style="color:#fff; font-size:18px; font-weight:600;">
            Enviando notificaciones, por favor espera...
        </span>
    </div>

    <style id="loader_css">
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
    }
</style>
    
</body>
</html>