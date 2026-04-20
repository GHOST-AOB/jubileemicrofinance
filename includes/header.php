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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-Xe+8c9hzPOgQmLc5R9Amh6y4DNFLCKt2dixuWWHv4znH8LKMGdOjNQZbuvpUYoM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" integrity="sha384-a9sR8+9e7t7IxGR+FvJf7R2AuE1nFpHTqWcYJxY0R4BEc6RLeF5+FGDjDTq5Z3K" crossorigin="anonymous">
    
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


