<?php
$conn = new mysqli("localhost", "root", "", "basedatos");
if ($conn->connect_error) die("Error: " . $conn->connect_error);

$id = intval($_GET['id']);
$sql = "SELECT * FROM noticias WHERE id=$id";
$result = $conn->query($sql);
$noticia = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($noticia['titulo']); ?> - SIDCO Newsletter</title>

    <!-- ===== DEPENDENCIAS ===== -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- ===== ESTILOS PERSONALIZADOS ===== -->
    <link href="../css/index.css" rel="stylesheet">
    <link href="../css/header.css" rel="stylesheet">
    <link href="../css/footer.css" rel="stylesheet">
    <link href="../css/theme.css" rel="stylesheet">
    <link href="../css/noticia.css" rel="stylesheet">
</head>
<body>

<?php include __DIR__ . '/../header.php'; ?>

<main class="container mt-5">
    <article class="featured-article" itemscope itemtype="https://schema.org/NewsArticle">
        <meta itemprop="headline" content="<?php echo htmlspecialchars($noticia['titulo']); ?>">
        <meta itemprop="datePublished" content="<?php echo date("c", strtotime($noticia['fecha'])); ?>">
        <meta itemprop="dateModified" content="<?php echo date("c", strtotime($noticia['fecha'])); ?>">

        <!-- Imagen principal -->
        <div class="featured-image mb-4">
            <img src="<?php echo $noticia['imagen']; ?>" 
                 alt="<?php echo htmlspecialchars($noticia['titulo']); ?>" 
                 itemprop="image" 
                 class="img-fluid rounded">
        </div>

        <div class="article-content">
            <span class="article-tag">Noticia</span>
            <h1 class="article-title" itemprop="name"><?php echo htmlspecialchars($noticia['titulo']); ?></h1>
            
            <!-- Autor y fecha -->
            <div class="article-meta mb-3">
                <span itemprop="author" itemscope itemtype="https://schema.org/Person">
                    <span itemprop="name"><?php echo htmlspecialchars($noticia['autor']); ?></span>
                </span>
                - <time datetime="<?php echo date("c", strtotime($noticia['fecha'])); ?>">
                    <?php echo date("d/m/Y H:i", strtotime($noticia['fecha'])); ?>
                </time>
            </div>

            <!-- Contenido dividido en párrafos -->
            <div class="article-body" itemprop="articleBody">
                <?php
                // Dividir el contenido en párrafos usando doble salto de línea
                $parrafos = preg_split("/\n\s*\n/", trim($noticia['contenido']));

                // Mostrar el primer párrafo
                if (!empty($parrafos[0])) {
                    echo "<p>" . nl2br(htmlspecialchars($parrafos[0])) . "</p>";
                }

                // Imagen secundaria (si existe)
                if (!empty($noticia['imagen_secundaria'])) {
                    echo '<div class="secondary-image mb-4">
                            <img src="' . $noticia['imagen_secundaria'] . '" 
                                 alt="Imagen secundaria de ' . htmlspecialchars($noticia['titulo']) . '" 
                                 class="img-fluid rounded">
                          </div>';
                }

                // Mostrar los párrafos restantes
                for ($i = 1; $i < count($parrafos); $i++) {
                    if (!empty(trim($parrafos[$i]))) {
                        echo "<p>" . nl2br(htmlspecialchars($parrafos[$i])) . "</p>";
                    }
                }
                ?>
            </div>
        </div>

        <div class="mt-4">
            <a href="../../novedades.php" class="btn btn-secondary"> 
                <i class="fas fa-arrow-left"></i> Volver al listado
            </a>
        </div>
        <br>
    </article>
</main>

<?php include __DIR__ . '/../footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="../js/header.js"></script>
<script src="../js/footer.js"></script>
</body>
</html>

<?php $conn->close(); ?>
