<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Principal</title>
  
  <!-- ===== DEPENDENCIAS EXTERNAS ===== -->
  <!-- Bootstrap CSS Framework -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  
  <!-- ===== CSS PERSONALIZADO ===== -->
  <!-- Estilos principales de la página -->
  <link href="views/css/index.css" rel="stylesheet">
  <!-- Estilos del header/navegación -->
  <link href="views/css/header.css" rel="stylesheet">
  <!-- Estilos del footer -->
  <link rel="stylesheet" href="views/css/footer.css">
  <!-- Overrides de tema (claro/oscuro) - debe ir al final -->
  <link href="views/css/theme.css" rel="stylesheet">
  
</head>
<body class="bg-dark">

<!-- ===== COMPONENTES REUTILIZABLES ===== -->
<!-- Header/Navegación principal -->
<?php include 'views/header.php'; ?>

<!-- Carrusel principal con efecto typing -->
<?php include 'views/carrusel.php'; ?>

<!-- ===== SECCIÓN 1: BANNER INFORMATIVO ===== -->
<!-- Franja horizontal con mensaje destacado -->
<div class="home-banner">
  <div class="container">
    <div class="home-banner__text">La forma más eficiente de ver sus proyectos finalizados</div>
  </div>
</div>

<!-- ===== SECCIÓN 2: VIDEO DESTACADO ===== -->
<!-- Video promocional/institucional en formato 16:9 -->
<!--
  <section class="home-video" aria-label="Video destacado">
    <div class="container">
      <div class="video-wrapper">
        <iframe 
          class="video-frame"
          width="560"
          height="315"
          src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1&mute=1&rel=0&controls=0&showinfo=0&modestbranding=1"
          title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen>
        </iframe>
      </div>
    </div>
  </section>
-->
  
<!-- ===== SECCIÓN 3: SOBRE NOSOTROS ===== -->
<!-- Layout 40/60 con imagen semicircular y texto descriptivo -->
<section class="home-about" aria-label="Creemos en lo simple, lo claro y lo útil.">
  <div class="container-fluid">
    <div class="about-grid">
      <!-- Bloque de imagen (40% del ancho) -->
      <div class="about-image-block">
        <!-- Imagen semicircular con fondo de imagen -->
        <div class="about-image" role="img" aria-label="Imagen institucional"></div>
      </div>
      <!-- Bloque de texto (60% del ancho) -->
      <div class="about-text-block">
        <div class="about-text-inner">
          <h2 class="about-title">Creemos en lo simple, lo claro y lo útil.</h2>
          <p class="about-text">En SIDCO encontrará una empresa de ingeniería y construcciones formada por profesionales altamente comprometidos con su función, que brindan en todas las etapas de los proyectos un sistema integral de soluciones, abarcando todos los servicios necesarios para la materialización, puesta en marcha y mantenimiento de obras.
                                En todos nuestros servicios nos enfocamos a brindar soluciones constructivas y de ingeniería, desde hace más de 10 años, en obras civiles e industriales, de infraestructura urbana y regional.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== SECCIÓN 5: CARRUSEL DE PROYECTOS ===== -->
<!-- Carrusel con vista previa: 3 imágenes simultáneas con efecto de deslizamiento -->
<section class="home-features" aria-label="Nuestros Proyectos">
  <div class="container-fluid">
    <div class="features-horizontal-carousel">
      <!-- Título principal de la sección -->
      <h2 class="features-main-title">Lo que hacemos posible</h2>
      
      <!-- Contenedor principal del carrusel -->
      <div class="cycle-carousel-container">
        <div class="cycle-carousel-wrapper">
          <!-- Track del carrusel con 3 elementos visibles -->
          <div class="cycle-carousel-track" id="cycleCarousel">
            
            <!-- Imagen anterior (lado izquierdo) - 30% del espacio -->
            <div class="cycle-item cycle-item-prev" data-index="4">
              <div class="cycle-image" style="background-image: url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=400&h=300&fit=crop');" role="img" aria-label="Proyectos Industriales"></div>
              <div class="cycle-text">
                <h3>Proyectos Industriales</h3>
                <p>Construcción de plantas industriales, naves de producción y complejos manufactureros especializados.</p>
              </div>
            </div>
            
            <!-- Imagen actual (centro) - 30% del espacio + 10% más grande con scale(1.1) -->
            <div class="cycle-item cycle-item-active" data-index="0">
              <div class="cycle-image" style="background-image: url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=400&h=300&fit=crop');" role="img" aria-label="Obras Civiles"></div>
              <div class="cycle-text">
                <h3>Obras Civiles</h3>
                <p>Construcción de edificios residenciales, comerciales e institucionales con los más altos estándares de calidad.</p>
              </div>
            </div>
            
            <!-- Imagen siguiente (lado derecho) - 30% del espacio -->
            <div class="cycle-item cycle-item-next" data-index="1">
              <div class="cycle-image" style="background-image: url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=400&h=300&fit=crop');" role="img" aria-label="Infraestructura Vial"></div>
              <div class="cycle-text">
                <h3>Infraestructura Vial</h3>
                <p>Desarrollo de carreteras, puentes y sistemas de transporte que conectan comunidades y facilitan el desarrollo.</p>
              </div>
            </div>
          </div>
        </div>
        
        <!-- ===== DATOS DEL CARRUSEL ===== -->
        <!-- Contenedor oculto con todos los datos de las imágenes para el JavaScript -->
        <div class="cycle-data-container" style="display: none;">
          <div class="cycle-data-item" data-index="0" data-image="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=400&h=300&fit=crop" data-title="Obras Civiles" data-description="Construcción de edificios residenciales, comerciales e institucionales con los más altos estándares de calidad."></div>
          <div class="cycle-data-item" data-index="1" data-image="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=400&h=300&fit=crop" data-title="Infraestructura Vial" data-description="Desarrollo de carreteras, puentes y sistemas de transporte que conectan comunidades y facilitan el desarrollo."></div>
          <div class="cycle-data-item" data-index="2" data-image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=300&fit=crop" data-title="Redes de Gas" data-description="Instalación y mantenimiento de sistemas de distribución de gas natural para hogares y empresas."></div>
          <div class="cycle-data-item" data-index="3" data-image="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=400&h=300&fit=crop" data-title="Infraestructura Hidráulica" data-description="Sistemas de agua potable, alcantarillado y tratamiento de aguas residuales para el desarrollo urbano."></div>
          <div class="cycle-data-item" data-index="4" data-image="https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=400&h=300&fit=crop" data-title="Proyectos Industriales" data-description="Construcción de plantas industriales, naves de producción y complejos manufactureros especializados."></div>
        </div>
        
        <!-- ===== CONTROLES DEL CARRUSEL ===== -->
        <!-- Botones de navegación lateral -->
        <button class="cycle-carousel-btn cycle-carousel-btn-prev" id="cyclePrevBtn">
          <i class="fas fa-chevron-left"></i>
        </button>
        <button class="cycle-carousel-btn cycle-carousel-btn-next" id="cycleNextBtn">
          <i class="fas fa-chevron-right"></i>
        </button>
      </div>
      
      <!-- Indicadores de posición (puntos) -->
      <div class="horizontal-carousel-indicators">
        <span class="horizontal-indicator active" data-slide="0"></span>
        <span class="horizontal-indicator" data-slide="1"></span>
        <span class="horizontal-indicator" data-slide="2"></span>
        <span class="horizontal-indicator" data-slide="3"></span>
        <span class="horizontal-indicator" data-slide="4"></span>
      </div>
    </div>
  </div>
</section>

<!-- ===== SECCIÓN 6: PILARES FUNDAMENTALES ===== -->
<!-- Sección dividida en dos columnas con información sobre pilares -->
<section class="home-pillars" aria-label="Pilares fundamentales">
  <div class="container-fluid">
    <div class="pillars-grid">
      <!-- Columna izquierda -->
      <div class="pillars-left-block">
        <div class="pillars-left-inner">
          <h2 class="pillars-title-left">Titulo 1</h2>
          <p class="pillars-text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <!-- Columna derecha -->
      <div class="pillars-right-block">
        <div class="pillars-right-inner">
          <h2 class="pillars-title-right">La base de todo</h2>
          <p class="pillars-subtitle-right">son nuestros pilares</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== SECCIÓN 7: LÍNEA DE TIEMPO DE OBRAS ===== -->
<!-- Timeline interactiva con carrusel automático de obras importantes -->
<section class="home-timeline" aria-label="Línea de tiempo de obras">
  <div class="container-fluid">
    <div class="timeline-container">
      <!-- Título principal de la sección -->
      <h2 class="timeline-main-title">Nuestras Obras Más Importantes</h2>
      
      <!-- Línea de tiempo con puntos clickeables -->
      <div class="timeline-wrapper">
        <div class="timeline-line"></div>
        <div class="timeline-points">
          <button class="timeline-point active" data-index="0" aria-label="Obra 2019">
            <span class="timeline-number">1</span>
            <span class="timeline-dot"></span>
          </button>
          <button class="timeline-point" data-index="1" aria-label="Obra 2020">
            <span class="timeline-number">2</span>
            <span class="timeline-dot"></span>
          </button>
          <button class="timeline-point" data-index="2" aria-label="Obra 2021">
            <span class="timeline-number">3</span>
            <span class="timeline-dot"></span>
          </button>
          <button class="timeline-point" data-index="3" aria-label="Obra 2022">
            <span class="timeline-number">4</span>
            <span class="timeline-dot"></span>
          </button>
          <button class="timeline-point" data-index="4" aria-label="Obra 2023">
            <span class="timeline-number">5</span>
            <span class="timeline-dot"></span>
          </button>
        </div>
      </div>
      
      <!-- Contenido de la obra actual -->
      <div class="timeline-content">
        <div class="timeline-slide active" data-index="0">
          <div class="timeline-slide-grid">
            <div class="timeline-image-block">
              <div class="timeline-image" style="background-image: url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=600&h=400&fit=crop');" role="img" aria-label="Obra 1"></div>
            </div>
            <div class="timeline-info-block">
              <h3 class="timeline-work-title">Centro Comercial Integral</h3>
              <p class="timeline-work-year">2019</p>
              <p class="timeline-work-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
              <div class="timeline-work-details">
                <span class="timeline-detail">Área: 8,000 m²</span>
                <span class="timeline-detail">Duración: 36 meses</span>
                <span class="timeline-detail">Ubicación: La Plata</span>
              </div>
            </div>
          </div>
        </div>
        
        <div class="timeline-slide" data-index="1">
          <div class="timeline-slide-grid">
            <div class="timeline-image-block">
              <div class="timeline-image" style="background-image: url('https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=600&h=400&fit=crop');" role="img" aria-label="Obra 2"></div>
            </div>
            <div class="timeline-info-block">
              <h3 class="timeline-work-title">Sistema Hidráulico Urbano</h3>
              <p class="timeline-work-year">2020</p>
              <p class="timeline-work-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
              <div class="timeline-work-details">
                <span class="timeline-detail">Capacidad: 50,000 m³</span>
                <span class="timeline-detail">Duración: 20 meses</span>
                <span class="timeline-detail">Ubicación: Mendoza</span>
              </div>
            </div>
          </div>
        </div>
        
        <div class="timeline-slide" data-index="2">
          <div class="timeline-slide-grid">
            <div class="timeline-image-block">
              <div class="timeline-image" style="background-image: url('https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&h=400&fit=crop');" role="img" aria-label="Obra 3"></div>
            </div>
            <div class="timeline-info-block">
              <h3 class="timeline-work-title">Infraestructura Vial Principal</h3>
              <p class="timeline-work-year">2021</p>
              <p class="timeline-work-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
              <div class="timeline-work-details">
                <span class="timeline-detail">Longitud: 15 km</span>
                <span class="timeline-detail">Duración: 30 meses</span>
                <span class="timeline-detail">Ubicación: Rosario</span>
              </div>
            </div>
          </div>
        </div>
        
        <div class="timeline-slide" data-index="3">
          <div class="timeline-slide-grid">
            <div class="timeline-image-block">
              <div class="timeline-image" style="background-image: url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?w=600&h=400&fit=crop');" role="img" aria-label="Obra 4"></div>
            </div>
            <div class="timeline-info-block">
              <h3 class="timeline-work-title">Complejo Industrial Moderno</h3>
              <p class="timeline-work-year">2022</p>
              <p class="timeline-work-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
              <div class="timeline-work-details">
                <span class="timeline-detail">Área: 5,200 m²</span>
                <span class="timeline-detail">Duración: 24 meses</span>
                <span class="timeline-detail">Ubicación: Córdoba</span>
              </div>
            </div>
          </div>
        </div>
        
        <div class="timeline-slide" data-index="4">
          <div class="timeline-slide-grid">
            <div class="timeline-image-block">
              <div class="timeline-image" style="background-image: url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=600&h=400&fit=crop');" role="img" aria-label="Obra 5"></div>
            </div>
            <div class="timeline-info-block">
              <h3 class="timeline-work-title">Obra Residencial Premium</h3>
              <p class="timeline-work-year">2023</p>
              <p class="timeline-work-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
              <div class="timeline-work-details">
                <span class="timeline-detail">Área: 2,500 m²</span>
                <span class="timeline-detail">Duración: 18 meses</span>
                <span class="timeline-detail">Ubicación: Buenos Aires</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== FOOTER ===== -->
<!-- Pie de página con información de contacto y enlaces -->
<?php include 'views/footer.php'; ?>

<!-- ===== SCRIPTS JAVASCRIPT ===== -->
<!-- Bootstrap JS Framework -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Scripts personalizados -->
<script src="views/js/header.js"></script>          <!-- Funcionalidad del header/navegación -->
<script src="views/js/carousel-typing.js"></script> <!-- Efecto de escritura automática -->
<script src="views/js/cycle-carousel.js"></script>  <!-- Carrusel de proyectos con vista previa -->
<script src="views/js/timeline.js"></script>        <!-- Línea de tiempo interactiva de obras -->
<script src="views/js/footer.js"></script>          <!-- Funcionalidad del footer -->

</body>
</html>