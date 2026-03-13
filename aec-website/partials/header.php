<?php
$currentPage = basename($_SERVER['PHP_SELF']);
$metaTitle = $metaTitle ?? 'AEC – Aral Engineering Co. | Precision Engineering for Quality Manufacturing';
$metaDescription = $metaDescription ?? 'AEC – Aral Engineering Co. in Panchkula, Haryana offers tool room machining, CNC machining services, industrial gauges, die manufacturing, molds and custom precision components.';
$metaKeywords = $metaKeywords ?? 'precision engineering,tool room machining,industrial gauges,CNC machining services,die manufacturing,precision components manufacturer';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($metaTitle); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($metaDescription); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($metaKeywords); ?>">
    <meta name="author" content="AEC – Aral Engineering Co.">
    <link rel="canonical" href="https://example.com/<?php echo htmlspecialchars($currentPage); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($metaTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($metaDescription); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://example.com/<?php echo htmlspecialchars($currentPage); ?>">
    <meta property="og:image" content="images/hero/hero-industrial.svg">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "AEC – Aral Engineering Co.",
      "image": "https://example.com/images/hero/hero-industrial.svg",
      "description": "Precision engineering company specializing in tool room machining, CNC turning, gauges, mold and die manufacturing, industrial fabrication, and custom machining solutions.",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Plot No. 177, HSIIDC Industrial Estate, Alipur, Barwala",
        "addressLocality": "Panchkula",
        "addressRegion": "Haryana",
        "addressCountry": "India"
      },
      "telephone": ["+91 76960 33307", "+91 98725 87399"],
      "areaServed": "India",
      "url": "https://example.com"
    }
    </script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">AEC <span>Aral Engineering Co.</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto">
                <?php
                $navItems = [
                    'index.php' => 'Home',
                    'about.php' => 'About Us',
                    'products.php' => 'Products',
                    'services.php' => 'Services',
                    'industries.php' => 'Industries Served',
                    'gallery.php' => 'Gallery',
                    'contact.php' => 'Contact Us'
                ];
                foreach ($navItems as $file => $label): ?>
                    <li class="nav-item"><a class="nav-link <?php echo $currentPage === $file ? 'active' : ''; ?>" href="<?php echo $file; ?>"><?php echo $label; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>
