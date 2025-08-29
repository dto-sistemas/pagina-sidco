<?php
// Página de obra individual para "El Milord"
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El Milord - Proyecto Detallado</title>
    <link rel="stylesheet" href="../css/theme.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-dark obra-1">

<?php include __DIR__ . '/../header.php'; ?>

<main>
<?php
$obra = [
    'hero' => [
        'image' => 'https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/4b7b0a6d-0d0f-41e2-aa2a-9a5d3a2a4a0a.png',
        'alt' => 'El Milord - Vista aérea del proyecto',
        'title' => 'El Milord',
        'subtitle' => 'Pilará Country, Buenos Aires - Proyecto de Redes'
    ],
    'sections' => [
        [
            'side' => 'left',
            'title' => 'Descripción del Proyecto',
            'description' => 'El Milord es un proyecto integral de renovación y modernización de infraestructura de redes en Pilará Country. Incluye la actualización completa del sistema de gasoductos, mejorando la eficiencia y seguridad del suministro energético para toda la comunidad.',
            'cta' => ['text' => 'Ver Galería', 'href' => '../../portfolio.php'],
            'image' => [
                'src' => 'https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/1b6ed7e6-7a1d-4a3f-ab1f-4d1d1d3b1b3b.png',
                'alt' => 'Trabajos de instalación de gasoductos'
            ]
        ],
        [
            'side' => 'right',
            'title' => 'Especificaciones Técnicas',
            'description' => 'Instalación de gasoductos de alta presión con materiales de última generación. Sistema de válvulas de control automatizadas y monitoreo remoto para garantizar la seguridad y eficiencia operativa.',
            'cta' => ['text' => 'Contactar', 'href' => '../../Contacto.html'],
            'image' => [
                'src' => 'https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/f432e2cf-b60f-4e86-bb9d-851d3da78f3b.png',
                'alt' => 'Equipos técnicos y válvulas de control'
            ]
        ],
        [
            'side' => 'left',
            'title' => 'Impacto en la Comunidad',
            'description' => 'Este proyecto beneficia directamente a más de 500 familias en Pilará Country, proporcionando un suministro de gas más confiable y eficiente. La modernización reduce los riesgos de interrupciones y mejora la calidad de vida de los residentes.',
            'cta' => ['text' => 'Más Proyectos', 'href' => '../../portfolio.php'],
            'image' => [
                'src' => 'https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/7c3b2a1d-4e2f-4a3b-9b2a-1d2e3f4a5b6c.png',
                'alt' => 'Vista de la comunidad beneficiada'
            ]
        ],
    ],
    'grid' => [
        ['src' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=1200&auto=format&fit=crop', 'alt' => 'Trabajos de excavación'],
        ['src' => 'https://images.unsplash.com/photo-1469474968028-56623f02e42e?q=80&w=1200&auto=format&fit=crop', 'alt' => 'Instalación de tuberías'],
        ['src' => 'https://images.unsplash.com/photo-1494526585095-c41746248156?q=80&w=1200&auto=format&fit=crop', 'alt' => 'Pruebas del sistema'],
        ['src' => 'https://images.unsplash.com/photo-1501785888041-af3ef285b470?q=80&w=1200&auto=format&fit=crop', 'alt' => 'Proyecto finalizado']
    ]
];

include __DIR__ . '/content.php';
?>
</main>

<?php include __DIR__ . '/../footer.php'; ?>

<script src="../js/header.js"></script>
<script src="../js/footer.js"></script>
<script src="js/main.js"></script>
</body>
</html>

