<?php
// index.php
$site_title = "Saurabh Sharma — The Adsurgeon";
$theme_uri = function_exists('get_stylesheet_directory_uri') ? get_stylesheet_directory_uri() : '';
$asset_base = !empty($theme_uri) ? rtrim($theme_uri, '/') . '/' : '';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($site_title) ?></title>
    <!-- Google Fonts: Inter (Primary), Roboto Condensed (Secondary) & Playfair Display (Editorial Serif) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,600;1,700&family=Roboto+Condensed:ital,wght@0,400;0,500;0,600;0,700;0,800;1,700&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?= $asset_base ?>assets/icons/favicon.png">
    <link rel="icon" href="<?= $asset_base ?>favicon.ico" sizes="any">
    <link rel="apple-touch-icon" href="<?= $asset_base ?>assets/icons/favicon.png">
    <!-- Compiled Tailwind CSS v4 -->
    <link rel="stylesheet" href="<?= $asset_base ?>style/output.css">
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
    </style>
    <?php if (function_exists('wp_head')) wp_head(); ?>
</head>

<body class="bg-[#F7F4F2] text-neutral-900 min-h-screen flex flex-col justify-between antialiased">

    <!-- Header Component -->
    <?php include_once 'components/header.php'; ?>

    <!-- Main Content Area -->
    <main class="flex-1">
        <?php include_once 'components/hero.php'; ?>
    </main>

    <!-- Main JavaScript -->
    <script src="<?= $asset_base ?>assets/js/main.js"></script>
    <?php if (function_exists('wp_footer')) wp_footer(); ?>
</body>

</html>