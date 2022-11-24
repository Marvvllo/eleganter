<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Fonts import -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollTrigger.min.js"></script>
  <script src="<?= base_url('assets/js/scrollAnimation.js') ?>" defer></script>

  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <link rel="shortcut icon" href="<?= base_url('assets/images/logo_square.svg') ?>" type="image/x-icon">
  <title>Eleganter</title>
</head>

<body>

  <header class="navbar text-accent sticky top-0 inset-x-0">
    <nav class="flex justify-between items-center px-8">

      <a href="<?= base_url() ?>" class="py-2">
        <img class="block max-h-8" src="<?= base_url('assets/images/logo.svg') ?>">
      </a>

      <ul class="flex uppercase gap-16 mr-8 font-display font-medium text-sm">
        <li><a href="<?= base_url() ?>" class="nav-link py-2">Home</a></li>
        <li><a href="<?= base_url("catalog") ?>" class="nav-link py-2">Catalog</a></li>
        <li><a href="<?= base_url("landing/login") ?>" class="nav-link py-2">Login</a></li>
      </ul>

    </nav>
  </header>