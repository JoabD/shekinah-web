<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Instituto de formación y capacitación bíblica y ministerial. Formamos siervos comprometidos con la obra del Señor, fieles a la Palabra de Dios.">
    <link rel="icon" type="image/png" href="{{ asset('img/shekina_logo.png') }}">
    <title>Instituto Shekinah | Formación Bíblica y Ministerial</title>

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
            min-height: 88vh;
            padding: 60px 0;
            overflow: hidden;
            background: linear-gradient(120deg, rgba(16, 28, 54, 0.92), rgba(26, 39, 68, 0.82)), url('{{ asset('img/instituto1.jpg') }}');
            background-size: cover;
            background-position: center;
        }

        #hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 85% 20%, rgba(200, 162, 80, 0.25), transparent 45%);
            pointer-events: none;
        }

        .hero-contenido {
            position: relative;
            z-index: 2;
            max-width: 680px;
        }

        .hero-contenido .eyebrow {
            color: #e8d5a3;
        }

        .hero-contenido h1 {
            color: #ffffff;
            font-size: clamp(32px, 5vw, 52px);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .hero-contenido p {
            color: rgba(255, 255, 255, 0.85);
            font-size: 18px;
            line-height: 1.7;
            margin-bottom: 34px;
            max-width: 560px;
        }

        .hero-botones {
            display: flex;
            flex-wrap: wrap;
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

        /* ===== VALORES / FEATURES ===== */
        #valores {
            margin-top: -70px;
            position: relative;
            z-index: 5;
        }

        .valores-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 22px;
        }

        .valor-card {
            background: #ffffff;
            border-radius: 14px;
            padding: 30px 24px;
            box-shadow: 0 10px 30px rgba(16, 28, 54, 0.08);
            text-align: left;
            transition: all 0.3s ease;
        }

        .valor-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 45px rgba(16, 28, 54, 0.16);
        }

        .valor-icono {
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

        .valor-card h3 {
            font-size: 17px;
            margin-bottom: 8px;
        }

        .valor-card p {
            font-size: 14.5px;
            line-height: 1.6;
            margin: 0;
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

        /* ===== CONÓCENOS / OFRECEMOS (bloques con imagen) ===== */
        .bloque-imagen {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .bloque-imagen.invertido {
            direction: rtl;
        }

        .bloque-imagen.invertido > * {
            direction: ltr;
        }

        .bloque-imagen figure {
            margin: 0;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 20px 45px rgba(16, 28, 54, 0.16);
            position: relative;
        }

        .bloque-imagen figure::after {
            content: "";
            position: absolute;
            inset: 0;
            border: 6px solid rgba(255, 255, 255, 0.5);
            border-radius: 14px;
        }

        .bloque-imagen img {
            width: 100%;
            height: 420px;
            object-fit: cover;
        }

        .bloque-texto h2 {
            font-size: clamp(24px, 3.5vw, 32px);
            margin-bottom: 18px;
        }

        .bloque-texto p {
            font-size: 16px;
            line-height: 1.75;
            margin-bottom: 16px;
        }

        .lista-check {
            margin-top: 22px;
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .lista-check li {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            font-size: 15.5px;
            line-height: 1.6;
            color: #4a5568;
        }

        .lista-check i {
            color: #c8a250;
            background: rgba(200, 162, 80, 0.12);
            border-radius: 50%;
            width: 26px;
            height: 26px;
            min-width: 26px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            margin-top: 2px;
        }

        /* ===== MISIÓN ===== */
        #mision {
            position: relative;
            background: linear-gradient(120deg, #101c36, #1a2744);
            padding: 90px 0;
            text-align: center;
            overflow: hidden;
        }

        #mision::before {
            content: "\201C";
            position: absolute;
            top: -40px;
            left: 50%;
            transform: translateX(-50%);
            font-family: Georgia, serif;
            font-size: 220px;
            color: rgba(255, 255, 255, 0.05);
            line-height: 1;
        }

        #mision .contenedor {
            position: relative;
            z-index: 2;
            max-width: 760px;
        }

        #mision .eyebrow {
            color: #e8d5a3;
        }

        #mision h2 {
            color: #ffffff;
            font-size: clamp(26px, 4vw, 34px);
            margin-bottom: 18px;
        }

        #mision p {
            color: rgba(255, 255, 255, 0.85);
            font-size: 18px;
            line-height: 1.8;
        }

        /* ===== DIRIGIDO A ===== */
        .dirigido-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 22px;
        }

        .dirigido-card {
            background: #ffffff;
            border-radius: 14px;
            padding: 32px 22px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(16, 28, 54, 0.08);
            transition: all 0.3s ease;
            border-top: 3px solid transparent;
        }

        .dirigido-card:hover {
            transform: translateY(-6px);
            border-top-color: #c8a250;
            box-shadow: 0 20px 45px rgba(16, 28, 54, 0.16);
        }

        .dirigido-card i {
            font-size: 26px;
            color: #c8a250;
            margin-bottom: 14px;
            display: inline-block;
        }

        .dirigido-card p {
            font-size: 14.5px;
            line-height: 1.6;
            color: #4a5568;
            margin: 0;
        }

        /* ===== GALERÍA / CARRUSEL ===== */
        .carrusel {
            position: relative;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 20px 45px rgba(16, 28, 54, 0.16);
            aspect-ratio: 16 / 7;
            background: #1a2744;
        }

        .carrusel img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            transition: opacity 0.6s ease;
        }

        .carrusel img.activa {
            opacity: 1;
            position: relative;
        }

        .carrusel .flecha {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: #101c36;
            font-size: 18px;
            background: rgba(255, 255, 255, 0.85);
            width: 44px;
            height: 44px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            user-select: none;
            z-index: 3;
            transition: all 0.3s ease;
        }

        .carrusel .flecha:hover {
            background: #c8a250;
            color: #ffffff;
        }

        .flecha.izq { left: 16px; }
        .flecha.der { right: 16px; }

        .carrusel-puntos {
            position: absolute;
            bottom: 18px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
            z-index: 3;
        }

        .punto {
            width: 9px;
            height: 9px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.55);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .punto.activo {
            background: #c8a250;
            width: 24px;
            border-radius: 6px;
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
            .valores-grid,
            .dirigido-grid {
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

            .bloque-imagen,
            .bloque-imagen.invertido {
                grid-template-columns: 1fr;
                direction: ltr;
                gap: 30px;
            }

            .bloque-imagen img {
                height: 280px;
            }

            #valores {
                margin-top: 40px;
            }

            #hero {
                min-height: auto;
                padding: 130px 0 90px 0;
                text-align: left;
            }

            .cta-caja {
                padding: 40px 28px;
                text-align: center;
                justify-content: center;
            }
        }

        @media (max-width: 640px) {
            .valores-grid,
            .dirigido-grid {
                grid-template-columns: 1fr;
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
            <li><a href="/planes">Planes de Estudio</a></li>
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
            <span class="eyebrow">Instituto Shekinah</span>
            <h1>Formación bíblica sólida para siervos comprometidos con la obra de Dios</h1>
            <p>
                Capacitamos y formamos líderes fieles en el estudio de las Sagradas Escrituras,
                manteniendo una sana doctrina y un corazón dispuesto al servicio.
            </p>
            <div class="hero-botones">
                <a href="/inscripcion" class="btn btn-primario"><i class="bi bi-journal-check"></i> Inscríbete ahora</a>
                <a href="/planes" class="btn btn-secundario"><i class="bi bi-book"></i> Ver planes de estudio</a>
            </div>
        </div>
    </div>
</section>

<section id="valores">
    <div class="contenedor">
        <div class="valores-grid">
            <div class="valor-card">
                <div class="valor-icono"><i class="bi bi-book-half"></i></div>
                <h3>Formación estructurada</h3>
                <p>Programas teológicos organizados por niveles, fieles a la Palabra de Dios.</p>
            </div>
            <div class="valor-card">
                <div class="valor-icono"><i class="bi bi-people"></i></div>
                <h3>Desarrollo ministerial</h3>
                <p>Fortalecemos habilidades para el servicio y el liderazgo en la iglesia.</p>
            </div>
            <div class="valor-card">
                <div class="valor-icono"><i class="bi bi-hand-thumbs-up"></i></div>
                <h3>Preparación práctica</h3>
                <p>Formación orientada a la obra y el servicio real dentro de la congregación.</p>
            </div>
            <div class="valor-card">
                <div class="valor-icono"><i class="bi bi-heart"></i></div>
                <h3>Acompañamiento espiritual</h3>
                <p>Un seguimiento cercano y continuo durante todo el proceso formativo.</p>
            </div>
        </div>
    </div>
</section>

<section class="seccion seccion-alt" id="conocenos">
    <div class="contenedor">
        <div class="bloque-imagen">
            <figure>
                <img src="{{ asset('img/instituto1.jpg') }}" alt="Instalaciones del Instituto Shekina">
            </figure>
            <div class="bloque-texto">
                <span class="eyebrow">Conócenos</span>
                <h2>Un instituto comprometido con la sana doctrina</h2>
                <p>
                    Somos un instituto dedicado a la formación y capacitación bíblica y ministerial.
                    Creemos en la enseñanza sólida de la Palabra de Dios y en el desarrollo espiritual
                    de todo creyente.
                </p>
                <p>
                    Desde nuestra fundación, nuestro objetivo ha sido formar siervos comprometidos con
                    la obra del Señor y con un corazón dispuesto al servicio.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="mision">
    <div class="contenedor">
        <span class="eyebrow">Nuestra misión</span>
        <h2>Formar líderes fieles al servicio de Dios</h2>
        <p>
            Capacitar y formar líderes fieles siervos de Dios, en el estudio de las Sagradas Escrituras
            y mantener una sana doctrina.
        </p>
    </div>
</section>

<section class="seccion" id="ofrecemos">
    <div class="contenedor">
        <div class="bloque-imagen invertido">
            <figure>
                <img src="{{ asset('img/instituto2.jpg') }}" alt="Clases del Instituto Shekina">
            </figure>
            <div class="bloque-texto">
                <span class="eyebrow">Ofrecemos</span>
                <h2>Una formación sólida, bíblica y ministerial</h2>
                <p>
                    En nuestro instituto brindamos una formación sólida, basada en la Biblia y orientada
                    al crecimiento espiritual, doctrinal y ministerial.
                </p>
                <ul class="lista-check">
                    <li><i class="bi bi-check-lg"></i> Formación teológica estructurada.</li>
                    <li><i class="bi bi-check-lg"></i> Desarrollo de habilidades ministeriales.</li>
                    <li><i class="bi bi-check-lg"></i> Preparación para la obra y el servicio en la iglesia.</li>
                    <li><i class="bi bi-check-lg"></i> Acompañamiento espiritual continuo.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="seccion seccion-alt" id="dirigido-a">
    <div class="contenedor">
        <div class="seccion-cabecera">
            <span class="eyebrow">Dirigido a</span>
            <h2>¿Para quién es este instituto?</h2>
        </div>
        <div class="dirigido-grid">
            <div class="dirigido-card">
                <i class="bi bi-person-check"></i>
                <p>Siervos de Dios que aún no han cursado el Instituto.</p>
            </div>
            <div class="dirigido-card">
                <i class="bi bi-briefcase"></i>
                <p>Ministerios de oficio interesados en formación continua.</p>
            </div>
            <div class="dirigido-card">
                <i class="bi bi-people-fill"></i>
                <p>Ayudas, gobernaciones y la iglesia en general.</p>
            </div>
            <div class="dirigido-card">
                <i class="bi bi-geo-alt"></i>
                <p>Zonas donde no se imparte enseñanza presencial.</p>
            </div>
        </div>
    </div>
</section>

<section class="seccion" id="galeria">
    <div class="contenedor">
        <div class="seccion-cabecera">
            <span class="eyebrow">Galería</span>
            <h2>Un vistazo a nuestra comunidad</h2>
        </div>
        <div class="carrusel">
            <span class="flecha izq" onclick="cambiarImg(-1)" role="button" aria-label="Anterior">&#10094;</span>
            <span class="flecha der" onclick="cambiarImg(1)" role="button" aria-label="Siguiente">&#10095;</span>

            <img src="{{ asset('img/instituto5.jpg') }}" class="activa" alt="Galería Instituto Shekina 1">
            <img src="{{ asset('img/instituto6.jpg') }}" alt="Galería Instituto Shekina 2">
            <img src="{{ asset('img/instituto3.jpg') }}" alt="Galería Instituto Shekina 3">
            <img src="{{ asset('img/omstituto4.jpg') }}" alt="Galería Instituto Shekina 4">
            <img src="{{ asset('img/instituto7.jpg') }}" alt="Galería Instituto Shekina 5">
            <img src="{{ asset('img/instituto8.jpg') }}" alt="Galería Instituto Shekina 6">

            <div class="carrusel-puntos"></div>
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
                    <li><a href="#conocenos">Conócenos</a></li>
                    <li><a href="#ofrecemos">Ofrecemos</a></li>
                    <li><a href="#dirigido-a">Dirigido a</a></li>
                    <li><a href="#galeria">Galería</a></li>
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

    // Carrusel de galería con puntos de navegación
    let indice = 0;
    const imagenes = document.querySelectorAll(".carrusel img");
    const puntosContenedor = document.querySelector(".carrusel-puntos");

    imagenes.forEach((_, i) => {
        const punto = document.createElement('span');
        punto.classList.add('punto');
        if (i === 0) punto.classList.add('activo');
        punto.addEventListener('click', () => irAImagen(i));
        puntosContenedor.appendChild(punto);
    });
    const puntos = document.querySelectorAll('.punto');

    function actualizarCarrusel() {
        imagenes.forEach(img => img.classList.remove('activa'));
        puntos.forEach(p => p.classList.remove('activo'));
        imagenes[indice].classList.add('activa');
        puntos[indice].classList.add('activo');
    }

    function cambiarImg(dir) {
        indice = (indice + dir + imagenes.length) % imagenes.length;
        actualizarCarrusel();
    }

    function irAImagen(i) {
        indice = i;
        actualizarCarrusel();
    }

    // Autoplay suave del carrusel (se detiene si el usuario interactúa)
    let autoplay = setInterval(() => cambiarImg(1), 6000);
    document.querySelector('.carrusel').addEventListener('mouseenter', () => clearInterval(autoplay));
</script>
</body>
</html>
