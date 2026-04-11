<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?> | <?= $tagline ?></title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?= $description ?>">
    <meta name="keywords" content="<?= $keywords ?>">
    <meta name="author" content="Jubilee Microfinance">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Social Media -->
    <meta property="og:title" content="<?= $title ?>">
    <meta property="og:description" content="<?= $description ?>">
    <meta property="og:image" content="<?= $featured_image ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://jubileemicrofinance.com">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= $title ?>">
    <meta name="twitter:description" content="<?= $description ?>">
    <meta name="twitter:image" content="<?= $featured_image ?>">

    <!-- Favicons -->
    <link rel="icon" href="assets/images/favicon.png" type="image/png">
    <link rel="apple-touch-icon" href="assets/images/apple-icon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- CSS Vendor Files -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/aos/aos.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    
    <!-- Custom Main Design System -->
    <link rel="stylesheet" href="assets/css/main.css">
    
    <!-- Scripts -->
    <script src="assets/vendor/jquery/jquery-3.7.1.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    <style>
      /* Preloader Styles */
      #preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #ffffff;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        transition: opacity 0.5s ease-out, visibility 0.5s;
      }
      .loader-dots {
        display: flex;
        gap: 8px;
      }
      .loader-dots div {
        width: 12px;
        height: 12px;
        background-color: #003262;
        border-radius: 50%;
        animation: loader-dots 0.6s infinite alternate;
      }
      .loader-dots div:nth-child(2) { animation-delay: 0.2s; }
      .loader-dots div:nth-child(3) { animation-delay: 0.4s; }
      @keyframes loader-dots {
        from { transform: scale(1); opacity: 1; }
        to { transform: scale(0.6); opacity: 0.3; }
      }
    </style>
  </head>
  <body>
    <div id="preloader">
      <div class="loader-dots">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>

