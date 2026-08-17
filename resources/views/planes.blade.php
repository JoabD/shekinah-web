<!DOCTYPE html>
<html lang="es" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/shekina_logo.png') }}">
    <title>Planes de Estudio - Shekinah</title>
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
                        <a class="nav-link fs-5 fw-semibold px-3" href="/inscripcion">Inscripción</a>
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
            <div class="text-center mb-5">
                <h1 class="fw-bold display-5" style="color: #1a2744;">Planes de Estudio</h1>
                <p class="text-muted fs-5">Conoce nuestro programa académico diseñado para la formación teológica y ministerial.</p>
            </div>

            <div class="row g-4 justify-content-center">

                <!-- Primer Cuatrimestre -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 bg-white overflow-hidden">
                        <div class="card-header border-0 text-white text-center py-3" style="background-color: #1a2744;">
                            <h4 class="mb-0 fw-bold">Primer Cuatrimestre</h4>
                        </div>
                        <div class="card-body p-4">
                            <ul class="list-group list-group-flush fs-6 text-muted">
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">📖 Bibliología</li>
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">🏫 Introducción a la Teología</li>
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">📜 Pentateuco</li>
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">⏳ Historia Eclesiástica</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Segundo Cuatrimestre -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 bg-white overflow-hidden">
                        <div class="card-header border-0 text-white text-center py-3" style="background-color: #1a2744;">
                            <h4 class="mb-0 fw-bold">Segundo Cuatrimestre</h4>
                        </div>
                        <div class="card-body p-4">
                            <ul class="list-group list-group-flush fs-6 text-muted">
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">🗣️ Homilética</li>
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">⛪ Teología Sistemática II</li>
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">🔍 Hermenéutica</li>
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">⛪ Evangelios Sinópticos</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Tercer Cuatrimestre -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 bg-white overflow-hidden">
                        <div class="card-header border-0 text-white text-center py-3" style="background-color: #1a2744;">
                            <h4 class="mb-0 fw-bold">Tercer Cuatrimestre</h4>
                        </div>
                        <div class="card-body p-4">
                            <ul class="list-group list-group-flush fs-6 text-muted">
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">⛪ Teología Sistemática</li>
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">🎤 Sermón Expositivo</li>
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">📜 Hechos de los Apóstoles</li>
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">👥 Liderazgo</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Cuarto Cuatrimestre -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 bg-white overflow-hidden">
                        <div class="card-header border-0 text-white text-center py-3" style="background-color: #1a2744;">
                            <h4 class="mb-0 fw-bold">Cuarto Cuatrimestre</h4>
                        </div>
                        <div class="card-body p-4">
                            <ul class="list-group list-group-flush fs-6 text-muted">
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">⛪ Teología Sistemática IV</li>
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">🌅 Escatología</li>
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">✉️ Epístolas Paulinas</li>
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">📚 Libros Sapienciales</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Quinto Cuatrimestre -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 bg-white overflow-hidden">
                        <div class="card-header border-0 text-white text-center py-3" style="background-color: #1a2744;">
                            <h4 class="mb-0 fw-bold">Quinto Cuatrimestre</h4>
                        </div>
                        <div class="card-body p-4">
                            <ul class="list-group list-group-flush fs-6 text-muted">
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">🛡️ Ejercicios ministeriales</li>
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">⛪ Teología Sistemática V</li>
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">📢 Evangelismo</li>
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">📜 Libros Históricos</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Sexto Cuatrimestre -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 bg-white overflow-hidden">
                        <div class="card-header border-0 text-white text-center py-3" style="background-color: #1a2744;">
                            <h4 class="mb-0 fw-bold">Sexto Cuatrimestre</h4>
                        </div>
                        <div class="card-body p-4">
                            <ul class="list-group list-group-flush fs-6 text-muted">
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">✝️ Evangelio de Juan</li>
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">🛡️ Apologética</li>
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">🤝 Consejería pastoral</li>
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">⚖️ Ética ministerial</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Diplomado (20 semanas) -->
                <div class="col-md-8 col-lg-6 mt-4">
                    <div class="card border-0 shadow-sm rounded-4 bg-white overflow-hidden">
                        <div class="card-header border-0 text-white text-center py-3" style="background-color: #d94f2b;">
                            <h4 class="mb-0 fw-bold">🎓 Diplomado (20 semanas)</h4>
                        </div>
                        <div class="card-body p-4">
                            <ul class="list-group list-group-flush fs-5 text-muted">
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">🏛️ Eclesiología</li>
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">🌅 Apocalipsis</li>
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">🕊️ Neumatología</li>
                                <li class="list-group-item bg-transparent border-0 px-0 py-2">💼 Administración pastoral</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <!-- Footer Bootstrap -->
    <footer class="footer mt-auto py-4 text-white shadow-lg" style="background-color: #1a2744;">
        <div class="container d-flex align-items-center justify-content-center gap-3">
            <img src="{{ asset('img/icap_logo.png') }}" alt="Logo Icap" height="60">
            <p class="mb-0 fw-semibold fs-5">ICAP A.R.</p>
        </div>
    </footer>

</body>
</html>
