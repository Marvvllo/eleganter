<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Fonts import -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">

  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="shortcut icon" href="<?= base_url('assets/images/logo_square.svg') ?>" type="image/x-icon">
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            transparent: 'transparent',
            current: 'currentColor',
            'white': '#EDE2D3',
            'primary': '#355DB7',
            'secondary': '#799AE3',
            'gray-dark': '#1D201F',
            'gray-light': '#393939',
          },
          fontFamily: {
            'display': ['"Raleway"', 'sans-serif'],
            'sans': ['"Open Sans"', 'sans-serif'],
          }
        }
      }
    }
  </script>
  <title>Selamat Datang</title>
</head>

<body>
  <main class="bg-gray-dark min-h-screen">

    <nav class="flex sticky items-center top-0 inset-x-0 z-50 w-full justify-between px-8 bg-gradient-to-r from-primary to-secondary text-white text-xl font-display py-2">
      <div class="flex space-x-8 text-center font-semibold">
        <img class="block max-h-10" src="<?= base_url('assets/images/logo.svg') ?>">
        <a class="block py-2 rounded-sm transition-all duration-100 border-solid border-white hover:border-b-2" href="<?= base_url() ?>">
          <h1>Home</h1>
        </a>
        <a class="block py-2 rounded-sm transition-all duration-100 border-solid border-white hover:border-b-2" href="<?= base_url('siswa') ?>">
          <h1>Siswa</h1>
        </a>
        <a class="block py-2 rounded-sm transition-all duration-100 border-solid border-white hover:border-b-2" href="<?= base_url('guru') ?>">
          <h1>Guru</h1>
        </a>
        <a class="block py-2 rounded-sm transition-all duration-100 border-solid border-white hover:border-b-2" href="<?= base_url('nilai') ?>">
          <h1>
            Nilai
          </h1>
        </a>
      </div>
      <div class="flex items-center rounded-md max-h-10 bg-primary transition-all duration-200 hover:bg-transparent ring-primary hover:ring-2 px-4 py-1 font-semibold">
        <a class="" href="<?= base_url('login') ?>">Login</a>
      </div>
    </nav>