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
  <main class="flex flex-row bg-gray-dark min-h-screen">

    <aside class="w-72 bg-primary flex flex-col py-2 px-4 text-white font-display">
      <a class="self-center" href="<?= base_url() ?>">
        <img class="max-h-11 text-center" src="<?= base_url('assets/images/logo.svg') ?>">
      </a>

      <nav class="flex flex-col my-8 gap-4">

        <a class="flex flex-row items-center gap-4" href="<?= base_url() ?>">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
          </svg>
          <p class="text-xl font-bold -mb-1">Dashboard</p>
        </a>

        <a class="flex flex-row" href="<?= base_url() ?>">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
          </svg>
          <p>Barang</p>
        </a>
      </nav>

    </aside>