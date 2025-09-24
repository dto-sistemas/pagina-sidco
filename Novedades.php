<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestro Newsletter</title>
    
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
  <!-- External Stylesheet -->
  <link rel="stylesheet" href="style.css">
  <!-- Overrides de tema (claro/oscuro) - debe ir al final -->
  <link href="views/css/theme.css" rel="stylesheet">


</head>
<body>
<!-- ===== COMPONENTES REUTILIZABLES ===== -->
<!-- Header/Navegación principal -->
<?php include 'views/header.php'; ?>

    <main class="container">

        <h1 class="section-title">Newsletter</h1>
        <p class="section-subtitle">Las noticias más relevantes sobre construccion de SIDCO</p>

        <section class="news-grid">
            <article class="featured-article" itemscope itemtype="https://schema.org/NewsArticle">
                <meta itemprop="headline" content="Nueva reforma educativa busca modernizar el sistema de enseñanza secundaria">
                <meta itemprop="datePublished" content="2025-09-18T10:00:00-03:00"> <!-- Example date/time -->
                <meta itemprop="dateModified" content="2025-09-18T10:00:00-03:00">
                <div class="featured-image">
                    <img src="views\Obras\images\moradas\DJI_0418.jpg" alt="Estudiantes en un aula moderna con tablets" itemprop="image">
                </div>
                <div class="article-content">
                    <span class="article-tag">Educación</span>
                    <h2 class="article-title" itemprop="name">Nueva reforma educativa busca modernizar el sistema de enseñanza secundaria</h2>
                    <p class="article-summary" itemprop="description">El Ministerio de Educación presenta un plan integral para actualizar los contenidos curriculares y metodologías de enseñanza en las escuelas secundarias de todo el país, con énfasis en tecnología y habilidades del siglo XXI.</p>
                    <div class="article-meta">
                        <span itemprop="author" itemscope itemtype="https://schema.org/Person"><span itemprop="name">Por María González</span></span>
                        <time datetime="PT2H">Hace 2 horas</time>
                    </div>
                </div>
            </article>

            <aside class="footer" aria-label="Secciones adicionales">
                <section class="sidebar-section">
                    <h3 class="sidebar-title">Más Leídas</h3>
                    <div class="trending-item">
                        <div class="trending-number">1</div>
                        <div class="trending-title">Aumentos salariales: qué sectores serán beneficiados</div>
                    </div>
                    <div class="trending-item">
                        <div class="trending-number">2</div>
                        <div class="trending-title">Cambios en el sistema de salud pública</div>
                    </div>
                    <div class="trending-item">
                        <div class="trending-number">3</div>
                        <div class="trending-title">Nueva ley de protección ambiental</div>
                    </div>
                    <div class="trending-item">
                        <div class="trending-number">4</div>
                        <div class="trending-title">Programas sociales: requisitos actualizados</div>
                    </div>
                </section>

                <section class="sidebar-section">
                    <h3 class="sidebar-title">Últimas Noticias</h3>
                    <div class="trending-item">
                        <div class="trending-title">Campaña de vacunación infantil alcanza el 85% de cobertura</div>
                    </div>
                    <div class="trending-item">
                        <div class="trending-title">Nuevo centro de salud mental en zona sur</div>
                    </div>
                    <div class="trending-item">
                        <div class="trending-title">Programa de becas universitarias amplía cupos</div>
                    </div>
                </section>
            </aside>
        </section>

        <section class="secondary-grid">
            <article class="secondary-article" itemscope itemtype="https://schema.org/NewsArticle">
                <meta itemprop="headline" content="Campaña nacional contra la violencia de género">
                <meta itemprop="datePublished" content="2025-09-18T09:00:00-03:00">
                <div class="secondary-image">
                    <img src="views\Obras\images\moradas\IMG_7843.jpg" alt="Manos entrelazadas simbolizando apoyo" itemprop="image">
                </div>
                <div class="secondary-content">
                    <h3 class="secondary-title" itemprop="name">Campaña nacional contra la violencia de género</h3>
                    <p class="secondary-summary" itemprop="description">Se lanza una nueva iniciativa gubernamental para prevenir y combatir la violencia de género, con recursos adicionales para refugios y programas de asistencia.</p>
                    <div class="article-meta">
                        <time datetime="PT3H">Hace 3 horas</time>
                    </div>
                </div>
            </article>

            <article class="secondary-article" itemscope itemtype="https://schema.org/NewsArticle">
                <meta itemprop="headline" content="Aumento en el presupuesto para obras sociales">
                <meta itemprop="datePublished" content="2025-09-18T08:00:00-03:00">
                <div class="secondary-image">
                    <img src="views\Obras\images\moradas\IMG_7851.jpg" alt="Símbolo de salud con un estetoscopio" itemprop="image">
                </div>
                <div class="secondary-content">
                    <h3 class="secondary-title" itemprop="name">Aumento en el presupuesto para obras sociales</h3>
                    <p class="secondary-summary" itemprop="description">El gobierno anuncia una inversión adicional en el sistema de obras sociales para mejorar la cobertura médica de los trabajadores.</p>
                    <div class="article-meta">
                        <time datetime="PT4H">Hace 4 horas</time>
                    </div>
                </div>
            </article>

            <article class="secondary-article" itemscope itemtype="https://schema.org/NewsArticle">
                <meta itemprop="headline" content="Programa de vivienda social beneficia a 10.000 familias">
                <meta itemprop="datePublished" content="2025-09-18T07:00:00-03:00">
                <div class="secondary-image">
                    <img src="views\Obras\images\moradas\IMG_7904.jpg" alt="Maqueta de casas modernas" itemprop="image">
                </div>
                <div class="secondary-content">
                    <h3 class="secondary-title" itemprop="name">Programa de vivienda social beneficia a 10.000 familias</h3>
                    <p class="secondary-summary" itemprop="description">Nueva etapa del plan de viviendas sociales contempla la construcción de complejos habitacionales en diferentes provincias del país.</p>
                    <div class="article-meta">
                        <time datetime="PT5H">Hace 5 horas</time>
                    </div>
                </div>
            </article>

            <article class="secondary-article" itemscope itemtype="https://schema.org/NewsArticle">
                <meta itemprop="headline" content="Iniciativas de reciclaje urbano muestran resultados positivos">
                <meta itemprop="datePublished" content="2025-09-18T06:00:00-03:00">
                <div class="secondary-image">
                    <img src="views\Obras\images\moradas\DJI_0418.jpg" alt="Contenedores de reciclaje de colores" itemprop="image">
                </div>
                <div class="secondary-content">
                    <h3 class="secondary-title" itemprop="name">Iniciativas de reciclaje urbano muestran resultados positivos</h3>
                    <p class="secondary-summary" itemprop="description">Los programas municipales de reciclaje y separación de residuos registran un aumento del 40% en la participación ciudadana.</p>
                    <div class="article-meta">
                        <time datetime="PT6H">Hace 6 horas</time>
                    </div>
                </div>
            </article>

            <article class="secondary-article" itemscope itemtype="https://schema.org/NewsArticle">
                <meta itemprop="headline" content="Tecnología en el aula: tablets para escuelas rurales">
                <meta itemprop="datePublished" content="2025-09-18T05:00:00-03:00">
                <div class="secondary-image">
                    <img src="views\Obras\images\moradas\IMG_7843.jpg" alt="Niños usando tablets en un entorno rural" itemprop="image">
                </div>
                <div class="secondary-content">
                    <h3 class="secondary-title" itemprop="name">Tecnología en el aula: tablets para escuelas rurales</h3>
                    <p class="secondary-summary" itemprop="description">Plan gubernamental distribuye dispositivos tecnológicos en instituciones educativas de zonas rurales para reducir la brecha digital.</p>
                    <div class="article-meta">
                        <time datetime="PT7H">Hace 7 horas</time>
                    </div>
                </div>
            </article>

            <article class="secondary-article" itemscope itemtype="https://schema.org/NewsArticle">
                <meta itemprop="headline" content="Centros de día para adultos mayores amplían servicios">
                <meta itemprop="datePublished" content="2025-09-18T04:00:00-03:00">
                <div class="secondary-image">
                    <img src="views\Obras\images\moradas\IMG_7851.jpg" alt="Grupo de adultos mayores realizando actividades" itemprop="image">
                </div>
                <div class="secondary-content">
                    <h3 class="secondary-title" itemprop="name">Centros de día para adultos mayores amplían servicios</h3>
                    <p class="secondary-summary" itemprop="description">Los centros de atención diurna para personas mayores incorporan nuevas actividades recreativas y de cuidado integral.</p>
                    <div class="article-meta">
                        <time datetime="PT8H">Hace 8 horas</time>
                    </div>
                </div>
            </article>
        </section>

        <div class="load-more">
            <button class="load-more-btn" onclick="loadMore()">
                Cargar Más Noticias
                <span class="loading-spinner" aria-hidden="true"></span>
            </button>
        </div>
    </main>

<!-- ===== FOOTER ===== -->
<!-- Pie de página con información de contacto y enlaces -->
<?php include 'views/footer.php'; ?>

<!-- ===== SCRIPTS JAVASCRIPT ===== -->
<!-- Bootstrap JS Framework -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Scripts personalizados -->
<script src="views/js/header.js"></script>          <!-- Funcionalidad del header/navegación -->
<script src="views/js/footer.js"></script>          <!-- Funcionalidad del footer -->

    <!-- External JavaScript with defer for performance -->
    <script src="script.js" defer></script>
</body>
</html>
