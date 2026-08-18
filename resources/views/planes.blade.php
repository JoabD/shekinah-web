<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Conoce la malla curricular del Instituto Shekina: seis cuatrimestres y un diplomado de formación bíblica y ministerial.">
    <link rel="icon" type="image/png" href="{{ asset('img/shekina_logo.png') }}">
    <title>Planes de Estudio | Instituto Shekinah</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">

    <style>
        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #f5f6f9;
            font-family: "Inter", "Segoe UI", Arial, sans-serif;
            color: #4a5568;
        }

        h1, h2, h3, h4 {
            font-family: "Poppins", "Segoe UI", Arial, sans-serif;
            color: #1a2744;
            margin: 0;
        }

        img {
            max-width: 100%;
            display: block;
        }

        a {
            text-decoration: none;
        }

        ul {
            padding-left: 0;
            list-style: none;
        }

        .contenedor {
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 24px;
        }

        .eyebrow {
            display: inline-block;
            font-family: "Poppins", sans-serif;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            color: #c8a250;
            margin-bottom: 12px;
        }

        /* ===== NAVBAR ===== */
        #header {
            position: sticky;
            top: 0;
            z-index: 1000;
            width: 100%;
            background: rgba(255, 255, 255, 0.97);
            backdrop-filter: blur(8px);
            border-bottom: 1px solid rgba(16, 28, 54, 0.06);
            transition: all 0.3s ease;
        }

        #header.con-sombra {
            box-shadow: 0 6px 20px rgba(16, 28, 54, 0.08);
        }

        #menu {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
            padding: 14px 24px;
        }

        #menu-logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        #logo-img {
            height: 46px;
            width: auto;
        }

        #menu-logo .marca {
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            font-size: 18px;
            color: #1a2744;
            line-height: 1.1;
        }

        #menu-logo .marca span {
            display: block;
            font-family: "Inter", sans-serif;
            font-weight: 500;
            font-size: 11px;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: #c8a250;
        }

        #menu-links {
            display: flex;
            align-items: center;
            gap: 36px;
            margin: 0;
        }

        #menu-links a {
            font-family: "Poppins", sans-serif;
            font-size: 15px;
            font-weight: 500;
            color: #1a2744;
            position: relative;
            padding: 6px 0;
            transition: all 0.3s ease;
        }

        #menu-links a::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 0%;
            height: 2px;
            background: #c8a250;
            transition: all 0.3s ease;
        }

        #menu-links a:hover {
            color: #c8a250;
        }

        #menu-links a:hover::after {
            width: 100%;
        }

        #menu-links a.activo {
            color: #c8a250;
        }

        #menu-links a.activo::after {
            width: 100%;
        }

        #menu-acceder {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        #btn-acceder {
            font-family: "Poppins", sans-serif;
            font-weight: 600;
            font-size: 14px;
            color: #ffffff;
            background: linear-gradient(135deg, #1a2744, #101c36);
            padding: 11px 26px;
            border-radius: 30px;
            box-shadow: 0 6px 16px rgba(26, 39, 68, 0.25);
            transition: all 0.3s ease;
        }

        #btn-acceder:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 22px rgba(26, 39, 68, 0.32);
        }

        #menu-toggle {
            display: none;
            background: none;
            border: none;
            padding: 8px;
            cursor: pointer;
            flex-shrink: 0;
        }

        .icono-hamburguesa {
            position: relative;
            display: block;
            width: 24px;
            height: 2px;
            background: #1a2744;
            transition: all 0.3s ease;
        }

        .icono-hamburguesa::before,
        .icono-hamburguesa::after {
            content: "";
            position: absolute;
            left: 0;
            width: 24px;
            height: 2px;
            background: #1a2744;
            transition: all 0.3s ease;
        }

        .icono-hamburguesa::before { top: -8px; }
        .icono-hamburguesa::after { top: 8px; }

        #menu-toggle[aria-expanded="true"] .icono-hamburguesa {
            background: transparent;
        }

        #menu-toggle[aria-expanded="true"] .icono-hamburguesa::before {
            top: 0;
            transform: rotate(45deg);
        }

        #menu-toggle[aria-expanded="true"] .icono-hamburguesa::after {
            top: 0;
            transform: rotate(-45deg);
        }

        /* ===== HERO ===== */
        #hero {
            position: relative;
            display: flex;
            align-items: center;
            min-height: 58vh;
            padding: 70px 0;
            overflow: hidden;
            background: linear-gradient(120deg, rgba(16, 28, 54, 0.92), rgba(26, 39, 68, 0.85)), url('{{ asset('img/instituto3.jpg') }}');
            background-size: cover;
            background-position: center;
            text-align: center;
        }

        #hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 15% 20%, rgba(200, 162, 80, 0.22), transparent 45%);
            pointer-events: none;
        }

        .hero-contenido {
            position: relative;
            z-index: 2;
            max-width: 720px;
            margin: 0 auto;
        }

        .hero-contenido .eyebrow {
            color: #e8d5a3;
        }

        .hero-contenido h1 {
            color: #ffffff;
            font-size: clamp(30px, 4.5vw, 46px);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .hero-contenido p {
            color: rgba(255, 255, 255, 0.85);
            font-size: 17px;
            line-height: 1.7;
            margin: 0 auto 34px auto;
            max-width: 560px;
        }

        .hero-botones {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 16px;
        }

        .btn {
            font-family: "Poppins", sans-serif;
            font-weight: 600;
            font-size: 15px;
            padding: 15px 32px;
            border-radius: 30px;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primario {
            background: #c8a250;
            color: #101c36;
            box-shadow: 0 10px 24px rgba(200, 162, 80, 0.35);
        }

        .btn-primario:hover {
            transform: translateY(-3px);
            box-shadow: 0 14px 28px rgba(200, 162, 80, 0.45);
        }

        .btn-secundario {
            background: transparent;
            color: #ffffff;
            border: 1.5px solid rgba(255, 255, 255, 0.6);
        }

        .btn-secundario:hover {
            background: rgba(255, 255, 255, 0.12);
            border-color: #ffffff;
        }

        /* ===== STATS (resumen del programa) ===== */
        #stats {
            margin-top: -60px;
            position: relative;
            z-index: 5;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 22px;
        }

        .stat-card {
            background: #ffffff;
            border-radius: 14px;
            padding: 28px 24px;
            box-shadow: 0 10px 30px rgba(16, 28, 54, 0.08);
            text-align: left;
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 45px rgba(16, 28, 54, 0.16);
        }

        .stat-icono {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            background: linear-gradient(135deg, #1a2744, #101c36);
            color: #e8d5a3;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            margin-bottom: 18px;
        }

        .stat-card h3 {
            font-size: 22px;
            margin-bottom: 6px;
        }

        .stat-card p {
            font-size: 14px;
            line-height: 1.6;
            margin: 0;
        }

        /* ===== CARRUSEL MÓVIL (tarjetas de estadísticas y malla) ===== */
        .carrusel-puntos-mobil {
            display: none;
            justify-content: center;
            gap: 8px;
            margin-top: 20px;
        }

        .punto-mobil {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: rgba(26, 39, 68, 0.18);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .punto-mobil.activo {
            background: #c8a250;
            width: 22px;
            border-radius: 6px;
        }

        /* ===== SECCIONES GENERALES ===== */
        .seccion {
            padding: 90px 0;
        }

        .seccion-alt {
            background: #ffffff;
        }

        .seccion-cabecera {
            max-width: 680px;
            margin: 0 auto 50px auto;
            text-align: center;
        }

        .seccion-cabecera h2 {
            font-size: clamp(26px, 4vw, 36px);
            font-weight: 700;
        }

        .seccion-cabecera p {
            margin-top: 14px;
            font-size: 16px;
            line-height: 1.7;
        }

        /* ===== MALLA CURRICULAR ===== */
        .planes-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .plan-card {
            background: #ffffff;
            border-radius: 14px;
            padding: 32px 28px;
            box-shadow: 0 10px 30px rgba(16, 28, 54, 0.08);
            border-top: 3px solid transparent;
            transition: all 0.3s ease;
        }

        .plan-card:hover {
            transform: translateY(-6px);
            border-top-color: #c8a250;
            box-shadow: 0 20px 45px rgba(16, 28, 54, 0.16);
        }

        .plan-numero {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: linear-gradient(135deg, #1a2744, #101c36);
            color: #e8d5a3;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            font-size: 14px;
            margin-bottom: 18px;
        }

        .plan-card h3 {
            font-size: 18px;
            margin-bottom: 18px;
        }

        .lista-check {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .lista-check li {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            font-size: 14.5px;
            line-height: 1.5;
            color: #4a5568;
        }

        .lista-check i {
            color: #c8a250;
            background: rgba(200, 162, 80, 0.12);
            border-radius: 50%;
            width: 24px;
            height: 24px;
            min-width: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            margin-top: 1px;
        }

        /* ===== DIPLOMADO (bloque destacado) ===== */
        #diplomado {
            position: relative;
            background: linear-gradient(120deg, #101c36, #1a2744);
            padding: 90px 0;
            overflow: hidden;
        }

        #diplomado::before {
            content: "";
            position: absolute;
            top: -120px;
            right: -120px;
            width: 360px;
            height: 360px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(200, 162, 80, 0.18), transparent 65%);
            pointer-events: none;
        }

        #diplomado .contenedor {
            position: relative;
            z-index: 2;
        }

        .diplomado-cabecera {
            max-width: 620px;
            margin: 0 auto 40px auto;
            text-align: center;
        }

        #diplomado .eyebrow {
            color: #e8d5a3;
        }

        #diplomado h2 {
            color: #ffffff;
            font-size: clamp(26px, 4vw, 34px);
            margin-bottom: 16px;
        }

        #diplomado .diplomado-cabecera p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 16px;
            line-height: 1.7;
        }

        .pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(200, 162, 80, 0.15);
            color: #e8d5a3;
            padding: 8px 18px;
            border-radius: 30px;
            font-family: "Poppins", sans-serif;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .diplomado-caja {
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 16px;
            padding: 36px;
        }

        .diplomado-lista {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 16px 32px;
            margin-bottom: 30px;
        }

        .diplomado-lista li {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            font-size: 15.5px;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.9);
        }

        .diplomado-lista i {
            color: #101c36;
            background: #c8a250;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            min-width: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            margin-top: 2px;
        }

        .diplomado-caja .btn-primario {
            margin: 0 auto;
        }

        .diplomado-caja-pie {
            display: flex;
            justify-content: center;
        }

        /* ===== CTA FINAL ===== */
        #cta-final {
            background: #f5f6f9;
            padding: 80px 0;
        }

        .cta-caja {
            background: linear-gradient(120deg, #1a2744, #101c36);
            border-radius: 20px;
            padding: 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 30px;
            flex-wrap: wrap;
            box-shadow: 0 20px 45px rgba(16, 28, 54, 0.16);
        }

        .cta-caja h2 {
            color: #ffffff;
            font-size: clamp(22px, 3vw, 30px);
            max-width: 480px;
        }

        .cta-caja p {
            color: rgba(255, 255, 255, 0.8);
            margin-top: 10px;
            font-size: 15.5px;
        }

        /* ===== FOOTER ===== */
        #foot {
            background: #101c36;
            color: rgba(255, 255, 255, 0.75);
            padding: 60px 0 26px 0;
        }

        .foot-grid {
            display: grid;
            grid-template-columns: 1.4fr 1fr 1fr;
            gap: 40px;
            padding-bottom: 40px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .foot-marca {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 14px;
        }

        #logoi-img {
            height: 42px;
            width: auto;
        }

        .foot-marca span {
            font-family: "Poppins", sans-serif;
            font-weight: 700;
            color: #ffffff;
            font-size: 16px;
        }

        #foot h4 {
            color: #ffffff;
            font-family: "Poppins", sans-serif;
            font-size: 15px;
            margin-bottom: 16px;
        }

        #foot ul li {
            margin-bottom: 10px;
        }

        #foot ul a {
            color: rgba(255, 255, 255, 0.7);
            font-size: 14.5px;
            transition: all 0.3s ease;
        }

        #foot ul a:hover {
            color: #c8a250;
        }

        .foot-legal {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
            padding-top: 22px;
            font-size: 13px;
            color: rgba(255, 255, 255, 0.5);
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 1024px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .planes-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .foot-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 860px) {
            #menu-toggle {
                display: block;
            }

            #logo-img {
                height: 36px;
            }

            #menu-logo .marca {
                font-size: 15px;
            }

            #menu-logo .marca span {
                display: none;
            }

            #menu-links {
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: #ffffff;
                flex-direction: column;
                align-items: flex-start;
                gap: 0;
                padding: 10px 24px;
                box-shadow: 0 12px 20px rgba(16, 28, 54, 0.08);
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.35s ease;
            }

            #menu-links.abierto {
                max-height: 320px;
                padding: 16px 24px 24px 24px;
            }

            #menu-links li {
                width: 100%;
                border-bottom: 1px solid rgba(16, 28, 54, 0.06);
            }

            #menu-links a {
                display: block;
                padding: 14px 0;
            }

            #menu-acceder #btn-acceder {
                padding: 9px 18px;
                font-size: 13px;
            }

            #stats {
                margin-top: 40px;
            }

            #hero {
                min-height: auto;
                padding: 130px 0 90px 0;
            }

            .diplomado-lista {
                grid-template-columns: 1fr;
            }

            .diplomado-caja {
                padding: 28px;
            }

            .cta-caja {
                padding: 40px 28px;
                text-align: center;
                justify-content: center;
            }
        }

        @media (max-width: 640px) {
            .stats-grid,
            .planes-grid {
                display: flex;
                grid-template-columns: none;
                overflow-x: auto;
                scroll-snap-type: x mandatory;
                -webkit-overflow-scrolling: touch;
                scrollbar-width: none;
                margin: 0 -24px;
                padding: 4px 24px;
            }

            .stats-grid::-webkit-scrollbar,
            .planes-grid::-webkit-scrollbar {
                display: none;
            }

            .stat-card,
            .plan-card {
                flex: 0 0 100%;
                scroll-snap-align: start;
            }

            .carrusel-puntos-mobil {
                display: flex;
            }

            .foot-grid {
                grid-template-columns: 1fr;
            }

            .seccion {
                padding: 60px 0;
            }

            .hero-botones {
                flex-direction: column;
                align-items: stretch;
            }

            .btn {
                justify-content: center;
            }
        }
    </style>
</head>
<body>

<header id="header">
    <nav id="menu">
        <div id="menu-logo">
            <img src="{{ asset('img/shekina_logo.png') }}" alt="Logo Instituto Shekina" id="logo-img">
            <div class="marca">Instituto Teologico Shekinah<span>Formación Bíblica y Ministerial</span></div>
        </div>

        <ul id="menu-links">
            <li><a href="/">Inicio</a></li>
            <li><a href="/inscripcion">Inscripción</a></li>
            <li><a href="/planes" class="activo" aria-current="page">Planes de Estudio</a></li>
        </ul>

        <div id="menu-acceder">
            <a href="/registro" id="btn-acceder">Acceder</a>
        </div>

        <button id="menu-toggle" aria-label="Abrir menú" aria-expanded="false">
            <span class="icono-hamburguesa"></span>
        </button>
    </nav>
</header>

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

<footer id="foot">
    <div class="contenedor">
        <div class="foot-grid">
            <div>
                <div class="foot-marca">
                    <img src="{{ asset('img/icap_logo.png') }}" alt="Logo Icap" id="logoi-img">
                    <span>ICAP A.R.</span>
                </div>
                <p style="font-size: 14.5px; line-height: 1.7; max-width: 320px;">
                    Instituto dedicado a la formación y capacitación bíblica y ministerial,
                    comprometido con la sana doctrina y el servicio a la iglesia.
                </p>
            </div>
            <div>
                <h4>Enlaces</h4>
                <ul>
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/inscripcion">Inscripción</a></li>
                    <li><a href="/planes">Planes de Estudio</a></li>
                    <li><a href="/registro">Acceder</a></li>
                </ul>
            </div>
            <div>
                <h4>Instituto Shekinah</h4>
                <ul>
                    <li><a href="/#conocenos">Conócenos</a></li>
                    <li><a href="/#ofrecemos">Ofrecemos</a></li>
                    <li><a href="/#dirigido-a">Dirigido a</a></li>
                    <li><a href="/#galeria">Galería</a></li>
                </ul>
            </div>
        </div>
        <div class="foot-legal">
            <span>&copy; <span id="anio"></span> ICAP A.R. — Instituto Shekinah. Todos los derechos reservados.</span>
        </div>
    </div>
</footer>

<script>
    // Año dinámico en el footer
    document.getElementById('anio').textContent = new Date().getFullYear();

    // Sombra del navbar al hacer scroll
    const header = document.getElementById('header');
    window.addEventListener('scroll', () => {
        header.classList.toggle('con-sombra', window.scrollY > 10);
    });

    // Menú móvil
    const menuToggle = document.getElementById('menu-toggle');
    const menuLinks = document.getElementById('menu-links');
    menuToggle.addEventListener('click', () => {
        const abierto = menuLinks.classList.toggle('abierto');
        menuToggle.setAttribute('aria-expanded', abierto);
    });
    menuLinks.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            menuLinks.classList.remove('abierto');
            menuToggle.setAttribute('aria-expanded', 'false');
        });
    });

    // Carrusel móvil (tarjetas de estadísticas y malla curricular)
    function inicializarCarruselMovil(idGrid, idPuntos) {
        const grid = document.getElementById(idGrid);
        const puntosContenedor = document.getElementById(idPuntos);
        if (!grid || !puntosContenedor) return;

        const tarjetas = Array.from(grid.children);
        puntosContenedor.innerHTML = '';
        tarjetas.forEach((tarjeta, i) => {
            const punto = document.createElement('span');
            punto.classList.add('punto-mobil');
            if (i === 0) punto.classList.add('activo');
            punto.addEventListener('click', () => {
                grid.scrollTo({ left: tarjeta.offsetLeft, behavior: 'smooth' });
            });
            puntosContenedor.appendChild(punto);
        });
        const puntos = puntosContenedor.querySelectorAll('.punto-mobil');

        let ticking = false;
        grid.addEventListener('scroll', () => {
            if (ticking) return;
            ticking = true;
            requestAnimationFrame(() => {
                let indice = 0;
                let menorDistancia = Infinity;
                tarjetas.forEach((tarjeta, i) => {
                    const distancia = Math.abs(tarjeta.offsetLeft - grid.scrollLeft);
                    if (distancia < menorDistancia) {
                        menorDistancia = distancia;
                        indice = i;
                    }
                });
                puntos.forEach(p => p.classList.remove('activo'));
                if (puntos[indice]) puntos[indice].classList.add('activo');
                ticking = false;
            });
        });
    }

    inicializarCarruselMovil('statsGrid', 'statsPuntos');
    inicializarCarruselMovil('planesGrid', 'planesPuntos');
</script>
</body>
</html>
