<!DOCTYPE html>
<html lang="es">
<head>
    @vite('resources/js/app.js')
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/shekina_logo.png') }}">
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
                @endif
                @if(session('perfil') != 4)
                <li><a href="/materias">Materias</a></li>
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
    @if(session('perfil') == 3)
        <section id="contenido">
           @if(session('success'))
                <div style="background-color:#d4edda; color:#155724; padding:10px; border-radius:5px; margin-bottom:20px;">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div style="background-color:#f8d7da; color:#721c24; padding:10px; border-radius:5px; margin-bottom:20px;">
                    {{ session('error') }}
                </div>
            @endif
            <h2>Administración de usuarios</h2>

            <div class="contenedor-botones">
                <button type="button" class="btn-agregar">
                    Agregar
                </button>

                <button type="button" class="btn-visualizar">
                    Visualizar
                </button>
            </div>

            <div id="Agregar">
                <form method="POST" action="{{ route('admin.store') }}"
                class="form-informacion">
                @csrf
                
                    <div class="form-group">
                        <label>Nombre completo</label>
                        <input type="text" name="nombre_completo" class="form-control"  required>
                    </div>

                    <div class="form-group">
                        <label>Correo</label>
                        <input type="email" name="correo" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Fecha de nacimiento</label>
                        <input type="date" name="fecha_nacimiento" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Edad</label>
                        <input type="number" name="edad" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Estado civil</label>
                        <input type="text" name="estado_civil" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Teléfono</label>
                        <input type="text" name="telefono" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Domicilio</label>
                        <input type="text" name="domicilio" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Colonia</label>
                        <input type="text" name="colonia" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Localidad</label>
                        <input type="text" name="localidad" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Municipio</label>
                        <input type="text" name="municipio" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Estado</label>
                        <input type="text" name="estado" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Iglesia</label>
                        <input type="text" name="iglesia" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Domicilio Iglesia</label>
                        <input type="text" name="domicilio_iglesia" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Colonia Iglesia</label>
                        <input type="text" name="colonia_iglesia" class="form-control"  required>
                    </div>

                    <div class="form-group">
                        <label>Localidad Iglesia</label>
                        <input type="text" name="localidad_iglesia" class="form-control"  required>
                    </div>

                    <div class="form-group">
                        <label>Municipio Iglesia</label>
                        <input type="text" name="municipio_iglesia" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Tipo usuario:</label>
                        <select name="perfil" id="perfilSelect" class="form-control">
                            @foreach($perfil as $p)
                                <option value="{{ $p->ID_PERFIL }}">
                                    {{ $p->NOMBRE }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group" style="display: none;" id="seccReg">
                        <label>Región:</label>
                        <select name="region" class="form-control">
                            @foreach($regiones as $r)
                                <option value="{{ $r->ID_REGION }}">
                                    {{ $r->NOMBRE }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <button type="submit" class="btn-guardar">
                        Dar de alta
                    </button>
                </form>
            </div>
            <div id="Visualizar">
                <div class="tabla-wrapper">
                    <table id="tablaUsuarios" class="tabla-registros">
                        <thead>
                            <tr>
                                <th>Usuario</th>
                                <th>Nombre Completo</th>
                                <th>Fecha Nacimiento</th>
                                <th>Domicilio</th>
                                <th>Iglesia</th>
                                <th>Domicilio Iglesia</th>
                                <th>Nombre Cargo</th>
                                <th>Pastor</th>
                                <th>Correo</th>
                                <th>Perfil</th>
                                <th>Modalidad</th>
                                <th>Cuatrimestre</th>
                                <th>Modificar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($usuario as $u)
                            <tr>
                                <td>{{ $u->USUARIO }}</td>
                                <td>{{ $u->NOMBRE_COMPLETO }}</td>
                                <td>{{ $u->FECHA_NACIMIENTO }}</td>
                                <td>{{ $u->DOMICILIO }}</td>
                                <td>{{ $u->IGLESIA }}</td>
                                <td>{{ $u->DOMICILIO_IGLESIA }}</td>
                                <td>{{ $u->CARGO_NOMBRE }}</td>
                                <td>{{ $u->PASTOR }}</td>
                                <td>{{ $u->CORREO }}</td>
                                <td>{{ $u->PERFIL }}</td>
                                <td>{{ $u->MODALIDAD }}</td>
                                <td>{{ $u->CUATRIMESTRE }}</td>
                                <td style="text-align:center;">
                                    <button class="btn-actualizar" data-id="{{ $u->ID_ENCUESTA }}">✏️</button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="11" style="text-align:center;">No hay usuarios registrados</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    
                </div>
                
            </div>

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
    <script src="{{ asset('js/admin.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>

    <div id="modalActualizar"
     style="display:none; position:fixed; top:0; left:0; width:100%; height:100%;
            background:rgba(0,0,0,0.45); justify-content:center; align-items:center; z-index:9999;">

        <div style="background:white; padding:25px; width:420px; border-radius:10px; box-shadow:0 4px 10px rgba(0,0,0,0.3);">
            
            <h2 style="margin-top:0;">Actualización</h2>

            <h3 id="id_encuesta"></h3>
            <label>Tipo usuario:</label>
            <select name="perfil2" id="perfil2" class="form-control">
                @foreach($perfil2 as $p)
                    <option value="{{ $p->ID_PERFIL }}">
                        {{ $p->NOMBRE }}
                    </option>
                @endforeach
            </select>
            <div id="madalidad2" style="display:none;">
                <br><br>
                <label>Modalidad:</label>
                <select name="modali2" id="modali2" class="form-control">
                    <option value="1">
                        Presencial
                    </option>
                    <option value="2">
                        Diplomado
                    </option>
                    <option value="3">
                        Virtual
                    </option>
                </select>
            </div>
            <div id="divRegi2" style="display:none;">
                <br><br>
                <label>Region:</label>
                <select name="region2" id="region2" class="form-control">
                    @foreach($regiones as $r)
                        <option value="{{ $r->ID_REGION }}">
                            {{ $r->NOMBRE }}
                        </option>
                    @endforeach
                </select>
            </div>
            <br><br>
            <label>Estatus:</label>
            <select name="estatus2" id="estatus2" class="form-control">
                <option value="1">
                    Activo
                </option>
                <option value="3">
                    Baja temporal
                </option>
                <option value="2">
                    Baja definitiva
                </option>
            </select>
            
            <div id="cuatrimestre2" style="display:none;">
                <br><br>
                <label>Cuatrimestre:</label>
                <input id="cuatri2" name="cuatri" class="form-control">
            </div>
            <br><br>
            <label>Contraseña nueva:</label>
            <input id="password2" name="contraseña" class="form-control">
            <div style="margin-top:15px; display:flex; gap:10px;">
                <button id="cerrarActualizacion"
                        style="padding:8px 14px; background:#1a2744; 
                            color:white; border:none; border-radius:5px; cursor:pointer;">
                    Cerrar
                </button>

                <button id="btnConfirmarActualizar"
                        style="padding:8px 14px; background:#2563eb; 
                            color:white; border:none; border-radius:5px; cursor:pointer;">
                    Actualizar
                </button>
            </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#tablaUsuarios').DataTable({
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
</body>
</html>
