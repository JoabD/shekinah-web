<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Instituto de formación y capacitación bíblica y ministerial. Formamos siervos comprometidos con la obra del Señor, fieles a la Palabra de Dios.')">
    <link rel="icon" type="image/png" href="{{ asset('img/shekina_logo.png') }}">
    <title>@yield('title', 'Instituto Teológico Shekinah')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    @stack('styles')
</head>
<body>

@include('partials.header')

@yield('content')

@include('partials.footer')

<script src="{{ asset('js/site.js') }}"></script>
@stack('scripts')
</body>
</html>
