<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            transparent: 'transparent',
            current: 'currentColor',
            'white': '#ffffff',
            'background': '#202020',
            'b-var': '#393939',
            'primary': '#17408b',
            'secondary': '#c9082a',
          },
        }
      }
    }
  </script>
  <style>
    body {
      margin: 0px;
      padding: 0px;
    }

    /* bg-gradient-to-r from-primary to-secondary */
  </style>
  <title>Selamat Datang</title>
</head>

<body>
  <main class="bg-background min-h-screen">
    <nav class="flex sticky items-center top-0 inset-x-0 z-50 w-full justify-between px-8 bg-gradient-to-r from-primary to-secondary text-gray-100 text-xl py-2">
      <div class="flex space-x-8 text-center font-semibold">
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