<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Catálogo de materias por cuatrimestre
    |--------------------------------------------------------------------------
    |
    | Cada materia acepta una clave "pdf" con la URL pública del PDF en
    | Google Drive (usa un enlace "Cualquiera con el enlace puede ver",
    | idealmente en formato https://drive.google.com/file/d/{ID}/view).
    | Mientras "pdf" sea null, la vista muestra un estado "Próximamente".
    |
    */

    'cuatrimestres' => [
        [
            'numero' => '01',
            'titulo' => 'Primer Cuatrimestre',
            'materias' => [
                ['nombre' => 'Bibliología', 'pdf' => null],
                ['nombre' => 'Introducción a la Teología', 'pdf' => null],
                ['nombre' => 'Pentateuco', 'pdf' => null],
                ['nombre' => 'Historia Eclesiástica', 'pdf' => null],
            ],
        ],
        [
            'numero' => '02',
            'titulo' => 'Segundo Cuatrimestre',
            'materias' => [
                ['nombre' => 'Homilética', 'pdf' => null],
                ['nombre' => 'Teología Sistemática II', 'pdf' => null],
                ['nombre' => 'Hermenéutica', 'pdf' => null],
                ['nombre' => 'Evangelios Sinópticos', 'pdf' => null],
            ],
        ],
        [
            'numero' => '03',
            'titulo' => 'Tercer Cuatrimestre',
            'materias' => [
                ['nombre' => 'Teología Sistemática', 'pdf' => null],
                ['nombre' => 'Sermón Expositivo', 'pdf' => null],
                ['nombre' => 'Hechos de los Apóstoles', 'pdf' => null],
                ['nombre' => 'Liderazgo', 'pdf' => null],
            ],
        ],
        [
            'numero' => '04',
            'titulo' => 'Cuarto Cuatrimestre',
            'materias' => [
                ['nombre' => 'Teología Sistemática IV', 'pdf' => null],
                ['nombre' => 'Escatología', 'pdf' => null],
                ['nombre' => 'Epístolas Paulinas', 'pdf' => null],
                ['nombre' => 'Libros Sapienciales', 'pdf' => null],
            ],
        ],
        [
            'numero' => '05',
            'titulo' => 'Quinto Cuatrimestre',
            'materias' => [
                ['nombre' => 'Ejercicios ministeriales', 'pdf' => null],
                ['nombre' => 'Teología Sistemática V', 'pdf' => null],
                ['nombre' => 'Evangelismo', 'pdf' => null],
                ['nombre' => 'Libros Históricos', 'pdf' => null],
            ],
        ],
        [
            'numero' => '06',
            'titulo' => 'Sexto Cuatrimestre',
            'materias' => [
                ['nombre' => 'Evangelio de Juan', 'pdf' => null],
                ['nombre' => 'Apologética', 'pdf' => null],
                ['nombre' => 'Consejería pastoral', 'pdf' => null],
                ['nombre' => 'Ética ministerial', 'pdf' => null],
            ],
        ],
    ],

    'diplomado' => [
        'titulo' => 'Diplomado en Formación Ministerial',
        'duracion' => '20 semanas',
        'materias' => [
            ['nombre' => 'Eclesiología', 'pdf' => null],
            ['nombre' => 'Apocalipsis', 'pdf' => null],
            ['nombre' => 'Neumatología', 'pdf' => null],
            ['nombre' => 'Administración pastoral', 'pdf' => null],
        ],
    ],

];
