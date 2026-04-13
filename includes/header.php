<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?> | Jubilee Microfinance</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="<?= $description ?>">
    <meta name="keywords" content="<?= $keywords ?>">
    <meta name="author" content="Jubilee Microfinance">
    <meta name="robots" content="index, follow">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@600;700;800;900&display=swap" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/aos/aos.css">
    
    <!-- Main Design System -->
    <link rel="stylesheet" href="assets/css/main.css">
    
    <style>
        #preloader {
            position: fixed;
            inset: 0;
            z-index: 10000;
            background: #001a33;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.5s;
        }
        #preloader .spinner-border { color: #10b981 !important; }
    </style>
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner-border" style="width: 3rem; height: 3rem;" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>


