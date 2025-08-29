<?php
// Plantilla de contenido de obra
// Espera un array $obra con estructura:
// $obra = [
//   'hero' => ['image' => '', 'alt' => '', 'title' => '', 'subtitle' => ''],
//   'sections' => [
//       ['side' => 'left'|'right', 'title' => '', 'description' => '', 'cta' => ['text' => '', 'href' => '#'], 'image' => ['src' => '', 'alt' => '']],
//       ...
//   ],
//   'grid' => [ ['src' => '', 'alt' => ''], ... ]
// ];

$obra = $obra ?? [];
$hero = $obra['hero'] ?? [];
$sections = $obra['sections'] ?? [];
$grid = $obra['grid'] ?? [];

// Valores por defecto seguros
$heroImage = $hero['image'] ?? '';
$heroAlt = $hero['alt'] ?? '';
$heroTitle = $hero['title'] ?? '';
$heroSubtitle = $hero['subtitle'] ?? '';
?>
    <!-- Hero Section -->
    <section class="hero">
        <img 
            class="hero-image" 
            src="<?php echo htmlspecialchars($heroImage); ?>" 
            alt="<?php echo htmlspecialchars($heroAlt); ?>"
            onerror="this.src='https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/e232f3b7-3ad2-4710-a303-2b0edcb0ab52.png'"
        />
        <div class="hero-overlay">
            <div class="hero-content" id="heroContent">
                <h1 class="hero-title"><?php echo htmlspecialchars($heroTitle); ?></h1>
                <p class="hero-subtitle"><?php echo htmlspecialchars($heroSubtitle); ?></p>
            </div>
        </div>
    </section>
    
    <?php foreach ($sections as $index => $section): ?>
        <?php 
            $side = ($section['side'] ?? 'left') === 'right' ? 'section-right' : 'section-left';
            $title = $section['title'] ?? '';
            $description = $section['description'] ?? '';
            $ctaText = $section['cta']['text'] ?? '';
            $ctaHref = $section['cta']['href'] ?? '#';
            $imgSrc = $section['image']['src'] ?? '';
            $imgAlt = $section['image']['alt'] ?? '';
            $textId = 'textContent' . ($index + 1);
        ?>
        <section class="content-section <?php echo $side; ?>">
            <div class="section-content">
                <?php if ($side === 'section-right'): ?>
                    <div class="text-content" id="<?php echo $textId; ?>">
                        <h2 class="section-title"><?php echo htmlspecialchars($title); ?></h2>
                        <p class="section-description"><?php echo htmlspecialchars($description); ?></p>
                        <?php if ($ctaText !== ''): ?>
                        <a href="<?php echo htmlspecialchars($ctaHref); ?>" class="cta-button"><?php echo htmlspecialchars($ctaText); ?></a>
                        <?php endif; ?>
                    </div>
                    <div class="section-image">
                        <img class="content-image" src="<?php echo htmlspecialchars($imgSrc); ?>" alt="<?php echo htmlspecialchars($imgAlt); ?>" />
                        <div class="loading-overlay"></div>
                    </div>
                <?php else: ?>
                    <div class="section-image">
                        <img class="content-image" src="<?php echo htmlspecialchars($imgSrc); ?>" alt="<?php echo htmlspecialchars($imgAlt); ?>" />
                        <div class="loading-overlay"></div>
                    </div>
                    <div class="text-content" id="<?php echo $textId; ?>">
                        <h2 class="section-title"><?php echo htmlspecialchars($title); ?></h2>
                        <p class="section-description"><?php echo htmlspecialchars($description); ?></p>
                        <?php if ($ctaText !== ''): ?>
                        <a href="<?php echo htmlspecialchars($ctaHref); ?>" class="cta-button"><?php echo htmlspecialchars($ctaText); ?></a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endforeach; ?>

    <?php if (!empty($grid)): ?>
    <!-- Image Grid Section -->
    <section class="image-grid">
        <?php foreach ($grid as $item): ?>
        <div class="grid-image">
            <img src="<?php echo htmlspecialchars($item['src'] ?? ''); ?>" alt="<?php echo htmlspecialchars($item['alt'] ?? ''); ?>" />
        </div>
        <?php endforeach; ?>
    </section>
    <?php endif; ?>


