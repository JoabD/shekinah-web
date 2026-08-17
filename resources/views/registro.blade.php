<!DOCTYPE html>
<html lang="es">
<head>
    @vite('resources/js/app.js')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('img/shekina_logo.png') }}">
    <title>Registro</title>
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

        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;

            background-image: 
                linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)),
                url('/img/shekina_logo.png');
            background-size: contain;  
            background-repeat: no-repeat;
            background-position: center;
        }

        #contenido {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .contenedor-login {
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .contenedor-login h2 {
            margin-bottom: 20px;
        }

        #form-registro {
            width: 100%;
        }

        #foot {
            text-align: center;
            padding: 20px;
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
                <li><a href="/">Inicio</a></li>
                <li><a href="/planes">Planes de Estudio</a></li>
                <li><a href="/inscripcion">Inscripción</a></li>
            </ul>

            <div id="menu-acceder">
                <a href="/registro" id="btn-acceder">Acceder</a>
            </div>

        </nav>
    </header>
   <section id="contenido">
    <div class="contenedor-login">
    <h2>Acceso al sistema</h2>
    
    @if(session('success'))
        <div style="background-color:#d4edda; color:#155724; padding:10px; border-radius:5px; margin-bottom:20px;">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div style="background-color:red; color:white; padding:10px; border-radius:5px; margin-bottom:20px;">
            
                @foreach ($errors->all() as $error)
                    {{ $error }}
                @endforeach
        </div>
    @endif
    
    <form id="form-registro" method="POST" action="{{ route('registro.store') }}">
    @csrf

        <div class="form-group">
            <label>Usuario:</label>
            <input type="text" name="usuario" required>
        </div>

        <div class="form-group">
            <label>Contraseña:</label>
            <input type="password" name="contra" required>
        </div>

        <button type="submit">Ingresar</button>

    </form>
</div>
</section>

   <footer id="foot">
        <img src="img/icap_logo.png" alt="Logo Icap" id="logoi-img">
        <p>ICAP A.R.</p>

   </footer>
   <script src="{{ asset('js/registro.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    

</div>
</body>
</html>
