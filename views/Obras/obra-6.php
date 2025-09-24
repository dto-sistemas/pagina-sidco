<?php
// Página de obra individual para "El Milord"
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barrio Las Moradas - Proyecto Detallado</title>
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
        'image' => 'images/las%20moradas/DJI_0418.jpg',
        'alt' => 'Barrio Las Moradas - Vista aérea del proyecto',
        'title' => 'Barrio Las Moradas',
        'subtitle' => 'Pilará Country, Buenos Aires - Proyecto de Redes'
    ],
    'sections' => [
        [
            'side' => 'left',
            'title' => 'Descripción del Proyecto',
            'description' => 'El Barrio Las Moradas es un proyecto integral de renovación y modernización de infraestructura de redes en Pilará Country. Incluye la actualización completa del sistema de gasoductos, mejorando la eficiencia y seguridad del suministro energético para toda la comunidad.',
            'cta' => ['text' => 'Ver Galería', 'href' => '../../portfolio.php'],
            'image' => [
                'src' => 'images/las%20moradas/IMG_7904.jpg',
                'alt' => 'Trabajos de instalación de gasoductos'
            ]
        ],
        [
            'side' => 'right',
            'title' => 'Especificaciones Técnicas',
            'description' => 'Instalación de gasoductos de alta presión con materiales de última generación. Sistema de válvulas de control automatizadas y monitoreo remoto para garantizar la seguridad y eficiencia operativa.',
            'cta' => ['text' => 'Contactar', 'href' => '../../Contacto.html'],
            'image' => [
                'src' => 'images/las%20moradas/IMG_7843.jpg',
                'alt' => 'Equipos técnicos y válvulas de control'
            ]
        ],
        [
            'side' => 'left',
            'title' => 'Impacto en la Comunidad',
            'description' => 'Este proyecto beneficia directamente a más de 500 familias en Pilará Country, proporcionando un suministro de gas más confiable y eficiente. La modernización reduce los riesgos de interrupciones y mejora la calidad de vida de los residentes.',
            'cta' => ['text' => 'Más Proyectos', 'href' => '../../portfolio.php'],
            'image' => [
                'src' => 'images/las%20moradas/IMG_7851.jpg',
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

