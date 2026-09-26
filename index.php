<?php
// index.php
$site_title = "Saurabh Sharma — The Adsurgeon";
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($site_title) ?></title>
    <!-- Google Fonts: Inter (Primary) & Roboto Condensed (Secondary) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Roboto+Condensed:ital,wght@0,400;0,500;0,600;0,700;0,800;1,700&display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/icons/favicon.png">
    <link rel="icon" href="favicon.ico" sizes="any">
    <link rel="apple-touch-icon" href="assets/icons/favicon.png">
    <!-- Compiled Tailwind CSS v4 -->
    <link rel="stylesheet" href="style/output.css">
    <style>
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
    </style>
</head>

<body class="bg-[#F7F4F2] text-neutral-900 min-h-screen flex flex-col justify-between antialiased">

    <!-- Header Component -->
    <?php include_once 'components/header.php'; ?>

    <!-- Main Content Area -->
    <main class="flex-1 max-w-7xl mx-auto px-5 sm:px-8 lg:px-12 py-16">
        <!-- Content will be developed here -->
    </main>

    <!-- Main JavaScript -->
    <script src="assets/js/main.js"></script>
</body>

</html>