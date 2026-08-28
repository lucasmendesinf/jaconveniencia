<?php
$config = require __DIR__ . '/config.php';
require __DIR__ . '/includes/helpers.php';
require __DIR__ . '/includes/icons.php';
require __DIR__ . '/includes/logo-badge.php';

$hasSchemaData = trim($config['address']['street'] ?? '') !== '' && is_whatsapp_configured($config);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($config['seo']['title']) ?></title>
    <meta name="description" content="<?= e($config['seo']['description']) ?>">
    <link rel="canonical" href="/JaConveniencia/">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= e($config['seo']['title']) ?>">
    <meta property="og:description" content="<?= e($config['seo']['description']) ?>">
    <meta property="og:image" content="<?= e($config['seo']['og_image']) ?>">
    <meta property="og:locale" content="pt_BR">

    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preload" as="image" href="assets/img/hero-ja-conveniencia.jpg">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">

    <?php if ($hasSchemaData): ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "<?= e($config['business_name']) ?>",
        "description": "<?= e($config['seo']['description']) ?>",
        "telephone": "<?= e($config['whatsapp_number']) ?>",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "<?= e($config['address']['street']) ?>",
            "addressLocality": "<?= e($config['address']['city']) ?>",
            "addressRegion": "<?= e($config['address']['state']) ?>",
            "postalCode": "<?= e($config['address']['zip']) ?>",
            "addressCountry": "BR"
        }
    }
    </script>
    <?php endif; ?>
</head>
<body>
    <a class="skip-link" href="#conteudo">Pular para o conteúdo</a>

    <?php include __DIR__ . '/includes/header.php'; ?>

    <main id="conteudo">
        <?php include __DIR__ . '/includes/hero.php'; ?>
        <?php include __DIR__ . '/includes/about.php'; ?>
        <?php include __DIR__ . '/includes/services.php'; ?>
        <?php include __DIR__ . '/includes/beverages.php'; ?>
        <?php include __DIR__ . '/includes/food-delivery.php'; ?>
        <?php include __DIR__ . '/includes/events-preview.php'; ?>
        <?php include __DIR__ . '/includes/contact.php'; ?>
    </main>

    <?php include __DIR__ . '/includes/footer.php'; ?>
    <?php include __DIR__ . '/includes/whatsapp-button.php'; ?>

    <script src="assets/js/main.js" defer></script>
</body>
</html>
