<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/shekina_logo.png') }}">
    <title>Formulario Inscripción - Shekinah</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)),
                url('/img/shekina_logo.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
        }
    </style>
</head>
<body class="d-flex flex-column h-100">

    <!-- Navbar Bootstrap -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm py-3" style="background-color: #1a2744;">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('img/shekinah_logo.png') }}" alt="Logo Shekina" height="60" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item">
                        <a class="nav-link fs-5 fw-semibold px-3" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5 fw-semibold px-3" href="/planes">Planes de Estudio</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="/registro" class="btn btn-light fw-bold px-4 py-2 shadow-sm">Acceder</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenido Principal -->
    <main class="flex-shrink-0 my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">

                    <div class="card border-0 shadow-sm p-4 p-md-5 rounded-4 bg-white">
                        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4 pb-3 border-bottom">
                            <h2 class="fw-bold mb-0" style="color: #1a2744;">Solicitud de Pre-registro</h2>
                            <button id="btnExplicacion" class="btn btn-primary fw-bold px-4 py-2 mt-2 mt-sm-0" style="background-color: #1a2744; border-color: #1a2744;" data-bs-toggle="modal" data-bs-target="#bootstrapModalExplicacion">
                                ℹ Explicación
                            </button>
                        </div>

                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                                <strong>¡Éxito!</strong> {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger mb-4">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form id="form-preregistro" method="POST" action="{{ route('preregistro.store') }}" enctype="multipart/form-data">
                            @csrf

                            <!-- Seccion 1: Datos Personales -->
                            <h4 class="fw-bold mb-3 pb-2 border-bottom text-muted">Datos Personales</h4>
                            <div class="row g-3 mb-4">
                                <div class="col-md-8">
                                    <label class="form-label fw-bold text-dark">Nombre Completo:</label>
                                    <input type="text" name="nombre_completo" class="form-control" required placeholder="Escriba su nombre completo">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-bold text-dark">Fecha de Nacimiento:</label>
                                    <input type="date" name="fecha" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-bold text-dark">Edad:</label>
                                    <input type="number" name="edad" class="form-control" required placeholder="Edad">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-bold text-dark">Estado Civil:</label>
                                    <input type="text" name="estado_civil" class="form-control" required placeholder="Ej: Soltero, Casado">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-bold text-dark">Teléfono Celular:</label>
                                    <input type="text" name="telefono" class="form-control" required placeholder="Ej: 1234567890">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label fw-bold text-dark">Correo Electrónico:</label>
                                    <input type="email" name="correo" class="form-control" required placeholder="nombre@ejemplo.com">
                                </div>
                            </div>

                            <!-- Seccion 2: Domicilio -->
                            <h4 class="fw-bold mb-3 pb-2 border-bottom text-muted">Domicilio</h4>
                            <div class="row g-3 mb-4">
                                <div class="col-md-8">
                                    <label class="form-label fw-bold text-dark">Domicilio (Calle y Número):</label>
                                    <input type="text" name="domicilio" class="form-control" required placeholder="Calle y número">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-bold text-dark">Colonia:</label>
                                    <input type="text" name="colonia" class="form-control" required placeholder="Colonia">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-bold text-dark">Localidad:</label>
                                    <input type="text" name="localidad" class="form-control" required placeholder="Localidad">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-bold text-dark">Municipio:</label>
                                    <input type="text" name="municipio" class="form-control" required placeholder="Municipio">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-bold text-dark">Estado:</label>
                                    <input type="text" name="estado" class="form-control" required placeholder="Estado">
                                </div>
                            </div>

                            <!-- Seccion 3: Datos Eclesiásticos -->
                            <h4 class="fw-bold mb-3 pb-2 border-bottom text-muted">Datos Eclesiásticos</h4>
                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold text-dark">Nombre de la Iglesia:</label>
                                    <input type="text" name="iglesia" class="form-control" required placeholder="Nombre de su congregación">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold text-dark">Nombre del Pastor:</label>
                                    <input type="text" name="pastor" class="form-control" required placeholder="Nombre completo del pastor">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label fw-bold text-dark">Domicilio de la Iglesia:</label>
                                    <input type="text" name="domicilio_iglesia" class="form-control" required placeholder="Calle y número de la iglesia">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-bold text-dark">Colonia de la Iglesia:</label>
                                    <input type="text" name="colonia_iglesia" class="form-control" required placeholder="Colonia">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-bold text-dark">Localidad de la Iglesia:</label>
                                    <input type="text" name="localidad_iglesia" class="form-control" required placeholder="Localidad">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-bold text-dark">Municipio de la Iglesia:</label>
                                    <input type="text" name="municipio_iglesia" class="form-control" required placeholder="Municipio">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold text-dark">Tiempo de congregarse:</label>
                                    <input type="text" name="tiempo_congregarse" class="form-control" required placeholder="Ej: 5 años">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold text-dark d-block">¿Desempeña algún cargo?</label>
                                    <div class="form-check form-check-inline mt-2">
                                        <input class="form-check-input" type="radio" name="cargo" value="si" id="cargoSi" required>
                                        <label class="form-check-label" for="cargoSi">Sí</label>
                                    </div>
                                    <div class="form-check form-check-inline mt-2">
                                        <input class="form-check-input" type="radio" name="cargo" value="no" id="cargoNo">
                                        <label class="form-check-label" for="cargoNo">No</label>
                                    </div>
                                </div>
                                <div class="col-md-12" id="cargoDesem" style="display:none;">
                                    <label class="form-label fw-bold text-dark">¿Cuál cargo desempeña?</label>
                                    <input type="text" name="cargo_nombre" class="form-control" placeholder="Escriba el cargo">
                                </div>
                            </div>

                            <!-- Seccion 4: Formacion y Proposito -->
                            <h4 class="fw-bold mb-3 pb-2 border-bottom text-muted">Formación Académica y Propósito</h4>
                            <div class="row g-3 mb-4">
                                <div class="col-md-12">
                                    <label class="form-label fw-bold text-dark">Propósito de estudiar en el Instituto:</label>
                                    <textarea name="proposito" class="form-control" rows="3" required placeholder="Describa brevemente sus motivos"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label fw-bold text-dark">¿Tiene alguna otra formación teológica previa?</label>
                                    <input type="text" name="formacion_teologica" class="form-control" required placeholder="Describa o escriba 'Ninguna'">
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label fw-bold text-dark d-block">Escolaridad:</label>
                                    <div class="form-check form-check-inline mt-1">
                                        <input class="form-check-input" type="radio" name="escolaridad" value="primaria" id="escPrimaria">
                                        <label class="form-check-label" for="escPrimaria">Primaria</label>
                                    </div>
                                    <div class="form-check form-check-inline mt-1">
                                        <input class="form-check-input" type="radio" name="escolaridad" value="secundaria" id="escSecundaria">
                                        <label class="form-check-label" for="escSecundaria">Secundaria</label>
                                    </div>
                                    <div class="form-check form-check-inline mt-1">
                                        <input class="form-check-input" type="radio" name="escolaridad" value="bachillerato" id="escBachillerato">
                                        <label class="form-check-label" for="escBachillerato">Bachillerato</label>
                                    </div>
                                    <div class="form-check form-check-inline mt-1">
                                        <input class="form-check-input" type="radio" name="escolaridad" value="otra" id="escOtra">
                                        <label class="form-check-label" for="escOtra">Otra</label>
                                    </div>
                                </div>
                                <div class="col-md-12" id="otraEscolaridad" style="display:none;">
                                    <label class="form-label fw-bold text-dark">Especifique otra escolaridad:</label>
                                    <input type="text" name="otra_escolaridad" class="form-control" placeholder="Ej: Licenciatura, Maestría">
                                </div>
                            </div>

                            <!-- Seccion 5: Modalidad de Inscripcion -->
                            <h4 class="fw-bold mb-3 pb-2 border-bottom text-muted">Modalidad de Inscripción</h4>
                            <div class="row g-3 mb-4">
                                <div class="col-md-12">
                                    <label class="form-label fw-bold text-dark d-block">Sistema al que desea inscribirse:</label>
                                    <div class="form-check form-check-inline mt-1">
                                        <input class="form-check-input" type="checkbox" name="presencial" id="chkPresencial">
                                        <label class="form-check-label text-dark" for="chkPresencial">Presencial</label>
                                    </div>
                                    <div class="form-check form-check-inline mt-1">
                                        <input class="form-check-input" type="checkbox" name="virtual" id="chkVirtual">
                                        <label class="form-check-label text-dark" for="chkVirtual">Virtual</label>
                                    </div>
                                    <div class="form-check form-check-inline mt-1">
                                        <input class="form-check-input" type="checkbox" name="diplomado" id="chkDiplomado">
                                        <label class="form-check-label text-dark" for="chkDiplomado">Diplomado</label>
                                    </div>
                                </div>
                                <div class="col-md-12" id="motivoVirtual" style="display:none;">
                                    <label class="form-label fw-bold text-dark">Motivo para sistema virtual:</label>
                                    <textarea name="motivo_virtual" class="form-control" rows="3" placeholder="Escriba los motivos por los que requiere la modalidad virtual"></textarea>
                                </div>
                                <div class="col-md-6" id="RegionList" style="display:none;">
                                    <label class="form-label fw-bold text-dark">Región:</label>
                                    <select name="region" id="region" class="form-select">
                                        @foreach($regiones as $region)
                                            <option value="{{ $region->ID_REGION }}">
                                                {{ $region->NOMBRE }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="text-center mt-5">
                                <button type="submit" class="btn btn-lg btn-primary fw-bold px-5 py-3 shadow" style="background-color: #1a2744; border-color: #1a2744;">
                                    📨 Enviar Solicitud de Pre-registro
                                </button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <!-- Modal de Explicación Bootstrap -->
    <div class="modal fade" id="bootstrapModalExplicacion" tabindex="-1" aria-labelledby="modalExplicacionLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4 border-0 shadow">
                <div class="modal-header text-white" style="background-color: #1a2744; border-top-left-radius: 12px; border-top-right-radius: 12px;">
                    <h5 class="modal-title fw-bold" id="modalExplicacionLabel">Explicación del Registro</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4 text-muted fs-6 lh-lg">
                    <p class="fw-semibold text-dark">Dios le bendiga herman@.</p>
                    <p>
                        El presente formulario se utiliza con el fin de recaudar información necesaria para su inscripción, favor de llenar todos los campos que se presentan.
                    </p>
                    <p>
                        Al final de este formulario se solicitará un archivo pdf, en el cual deberán ir los siguientes archivos:
                    </p>
                    <ul class="list-group list-group-flush mb-3 text-dark bg-light rounded-3 p-2">
                        <li class="list-group-item bg-transparent border-0 py-1">✓ Copia del INE.</li>
                        <li class="list-group-item bg-transparent border-0 py-1">✓ Copia de credencial de I.C.A.P. (Ministerios de oficio).</li>
                        <li class="list-group-item bg-transparent border-0 py-1">✓ Copia de certificado de bautizo.</li>
                        <li class="list-group-item bg-transparent border-0 py-1">��� Copia del certificado de matrimonio (en caso de casados).</li>
                        <li class="list-group-item bg-transparent border-0 py-1">✓ Carta de recomendación del pastor de Área y local.</li>
                        <li class="list-group-item bg-transparent border-0 py-1">✓ Carta de exposición de motivos.</li>
                    </ul>
                    <p>
                        Es importante anexar todos los archivos solicitados, ya que se validarán.
                    </p>
                    <p class="fw-semibold text-dark mb-0">¡Bendiciones!</p>
                </div>
                <div class="modal-footer border-0 p-3">
                    <button type="button" class="btn btn-secondary fw-bold px-4" data-bs-dismiss="modal">Entendido</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bootstrap -->
    <footer class="footer mt-auto py-4 text-white shadow-lg" style="background-color: #1a2744;">
        <div class="container d-flex align-items-center justify-content-center gap-3">
            <img src="{{ asset('img/icap_logo.png') }}" alt="Logo Icap" height="60">
            <p class="mb-0 fw-semibold fs-5">ICAP A.R.</p>
        </div>
    </footer>

    <!-- Bootstrap logic script overrides -->
    <script src="{{ asset('js/inscripcion.js') }}"></script>
</body>
</html>
