<?php
$base = '/Pagina/'; // Ruta base del proyecto desde la raíz del servidor web
$logoSrc = $base . 'views/images/logosidco.png';
$homeHref = $base . 'index.php';
?>

<header class="u-header" id="header">
  <div class="u-sheet u-valign-middle" style="min-height: 118px; display: flex; align-items: center; justify-content: space-between;">
    
    <!-- Logo -->
    <a href="<?php echo $homeHref; ?>" class="u-logo" style="display: block; width: 266px; height: 58px;">
      <img src="<?php echo $logoSrc; ?>" alt="Principal" style="width: 100%; height: 100%;" >
    </a>

    <!-- Menú -->
    <nav class="u-menu" role="navigation" style="display:flex; align-items:center; gap:16px;">
      <div class="menu-collapse">
        <a class="u-hamburger-link" aria-label="Abrir menú" aria-controls="menu-mobile" href="#">
          <svg viewBox="0 0 16 16" width="24" height="24">
            <rect y="1" width="16" height="2"></rect>
            <rect y="7" width="16" height="2"></rect>
            <rect y="13" width="16" height="2"></rect>
          </svg>
        </a>
      </div>
      <ul class="u-nav">
        <li><a href=" <?php echo $base; ?>portfolio.php">Galería</a></li>
        <li><a href=" <?php echo $base; ?>Novedades.html">Novedades</a></li>
        <li><a href=" <?php echo $base; ?>Recursos-Humanos.php">Recursos Humanos</a></li>
        <li><a href=" <?php echo $base; ?>contacto.php">Contacto</a></li>
        <li><a href=" <?php echo $base; ?>Suscribirse.html">Suscribirse</a></li>
      </ul>

      <!-- Toggle tema (Uiverse) -->
      <label class="switch" title="Cambiar tema" style="margin-left: -8px;">
        <input id="themeCheckbox" class="input" type="checkbox" aria-label="Cambiar tema">
        <span class="slider">
          <span class="sun">
            <svg viewBox="0 0 24 24"><path d="M6.76 4.84l-1.8-1.79-1.41 1.41 1.79 1.8 1.42-1.42zm10.45 14.32l1.79 1.8 1.41-1.41-1.8-1.79-1.4 1.4zM12 4V1h-1v3h1zm0 19v-3h-1v3h1zm8-8h3v-1h-3v1zM4 12H1v-1h3v1zm12.24-7.16l1.42-1.42 1.79 1.8-1.41 1.41-1.8-1.79zM4.22 18.36l1.79-1.8 1.41 1.41-1.8 1.79-1.4-1.4zM12 6a6 6 0 100 12A6 6 0 0012 6z"/></svg>
          </span>
          <span class="moon">
            <svg viewBox="0 0 24 24"><path d="M21.64 13.65A9 9 0 1110.35 2.36 7 7 0 1021.64 13.65z"/></svg>
          </span>
        </span>
      </label>
    </nav>

  </div>
</header>
