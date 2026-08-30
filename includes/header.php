<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($pageTitle) ? $pageTitle . ' - ' . SITE_NAME : SITE_NAME ?></title>
    <meta name="description" content="Official website of Trusty Travel Sri Lanka With Sanjeewa. Tailor-made island round tours, Yala safaris, Kitulgala rafting, and private AC chauffeur transfers in Sri Lanka.">

    <!-- Official Brand Favicon & Social Meta Tags -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?= SITE_URL ?>/favicon.png?v=2.0.0">
    <link rel="shortcut icon" type="image/x-icon" href="<?= SITE_URL ?>/favicon.ico?v=2.0.0">
    <link rel="apple-touch-icon" href="<?= SITE_URL ?>/assets/Images/apple-touch-icon.png?v=2.0.0">
    
    <!-- Open Graph & Social Sharing Card -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= isset($pageTitle) ? $pageTitle . ' - ' . SITE_NAME : SITE_NAME ?>">
    <meta property="og:description" content="Official website of Trusty Travel Sri Lanka With Sanjeewa. Tailor-made island round tours, Yala safaris, and private transfers.">
    <meta property="og:image" content="<?= SITE_URL ?>/assets/Images/og-image.png?v=2.0.0">
    <meta property="og:url" content="<?= SITE_URL ?>/">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="<?= SITE_URL ?>/assets/Images/og-image.png?v=2.0.0">

    <!-- High Priority Preloads for Instant Hero & Brand Load -->
    <?php if (($currentPage ?? 'home') === 'home'): ?>
    <link rel="preload" as="image" href="<?= SITE_URL ?>/assets/Images/logo-hero.webp?v=9.1.0" type="image/webp" fetchpriority="high">
    <link rel="preload" as="image" href="<?= SITE_URL ?>/assets/Images/optimized/sigiriya_Ella.webp" fetchpriority="high">
    <link rel="preload" as="image" href="<?= SITE_URL ?>/assets/Images/optimized/yaala.webp">
    <link rel="preload" as="image" href="<?= SITE_URL ?>/assets/Images/optimized/goldentemple.webp">
    <link rel="preload" as="image" href="<?= SITE_URL ?>/assets/Images/optimized/goldensafari.webp">
    <?php endif; ?>
    <link rel="preload" as="image" href="<?= SITE_URL ?>/logo.webp?v=9.1.0" type="image/webp" fetchpriority="high">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&family=Outfit:wght@600;700;800&family=Playfair+Display:ital,wght@1,600;1,700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Syne:wght@700;800&display=swap" rel="stylesheet">

    <!-- FontAwesome 6 Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS Animation Library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= SITE_URL ?>/assets/css/style.css?v=9.0.0">
</head>
<body>

    <!-- Floating Glassmorphic Navbar with Rounded Edges -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-wrapper">
                <a href="<?= SITE_URL ?>/" class="brand-logo">
                    <picture>
                        <source srcset="<?= SITE_URL ?>/logo.webp?v=9.1.0" type="image/webp">
                        <img src="<?= SITE_URL ?>/logo.png?v=9.1.0" alt="<?= SITE_NAME ?>" class="brand-logo-img" width="240" height="50" fetchpriority="high">
                    </picture>
                </a>

                <div class="nav-links" id="navLinks">
                    <a href="<?= SITE_URL ?>/" class="<?= ($currentPage == 'home') ? 'active' : '' ?>">
                        <i class="fas fa-home nav-icon"></i> <span>Home</span>
                    </a>
                    <a href="<?= SITE_URL ?>/packages" class="<?= ($currentPage == 'packages') ? 'active' : '' ?>">
                        <i class="fas fa-route nav-icon"></i> <span>Round Tours</span>
                    </a>
                    <a href="<?= SITE_URL ?>/safari" class="<?= ($currentPage == 'safari') ? 'active' : '' ?>">
                        <i class="fas fa-paw nav-icon"></i> <span>Safari</span>
                    </a>
                    <a href="<?= SITE_URL ?>/day-tours" class="<?= ($currentPage == 'day-tours') ? 'active' : '' ?>">
                        <i class="fas fa-compass nav-icon"></i> <span>Day Excursions</span>
                    </a>
                    <a href="<?= SITE_URL ?>/gallery" class="<?= ($currentPage == 'gallery') ? 'active' : '' ?>">
                        <i class="fas fa-images nav-icon"></i> <span>Gallery</span>
                    </a>
                    <a href="<?= SITE_URL ?>/contact" class="<?= ($currentPage == 'contact') ? 'active' : '' ?>">
                        <i class="fas fa-envelope nav-icon"></i> <span>Contact</span>
                    </a>
                </div>

                <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </nav>
