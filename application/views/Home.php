<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>

  </title>
  <meta name="description" content="Simple landind page" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />
  <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
  <!--Replace with your tailwind.css once created-->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
  <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
  <style>
    .gradient {
      background: linear-gradient(90deg, #355cb7 0%, #275b96 100%);
    }

    .gra {
      background: linear-gradient(90deg, #275b96 0%, #b0b3b6 100%);
    }
  </style>
</head>

<body class="leading-normal tracking-normal text-white " style="font-family: 'Source Sans Pro', sans-serif;">
  <!--Nav-->
  <nav id="header" class="fixed w-full z-30 top-0 text-white gradient">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
      <div class="pl-4 flex items-center">
        <a class="toggleColour no-underline hover:no-underline font-bold text-2xl lg:text-4xl bg-gradient-to-r from-blue-400 to-white text-transparent bg-clip-text" href="#">
          eleganter
        </a>
      </div>
      <div class="block lg:hidden pr-4">
        <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <title>Menu</title>
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
          </svg>
        </button>
      </div>
      <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
        <ul class="list-reset lg:flex justify-end flex-1 items-center">
          <li class="mr-3">
            <a class="inline-block py-2 px-4 text-white no-underline" href="<?= base_url() ?>">Home</a>
          </li>
          <li class="mr-3">
            <a class="inline-block text-white py-2 px-4" href="<?= base_url("/catalog") ?>">Catalog</a>
          </li>
          <li class="mr-3">
            <a class="inline-block text-white py-2 px-4" href="<?= base_url("/about") ?>">About</a>
          </li>
        </ul>
        <a href="<?= base_url("/contact") ?>" id="navAction" class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          Contact
        </a>
      </div>
    </div>
  </nav>
  <!--Hero-->
  <div class="pt-24 pb-12 gradient">
    <div class="container px-2 mx-auto flex flex-wrap flex-col md:flex-row items-center">
      <!--Left Col-->
      <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
        <h1 class="text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-white my-4">
          Find your modern elegance
        </h1>
        <p class=" text-white text-2xl ">
          Bring out your youth and elegance with <br>your home.
        </p>

      </div>
    </div>
  </div>
  <div class="container px-2 mx-auto flex flex-wrap flex-col md:flex-row items-center">
    <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
      <div class="grid gap-4 grid-cols-2">
        <button class="mx-auto lg:mx-0  gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          Learn More
        </button>
        <button class="mx-auto  lg:mx-0  text-blue-500 ring-2 ring-blue-500/50 rounded-full outline-1 my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
          Explore
        </button>
      </div>
    </div>
  </div>
  <div class="pt-12 pb-12 gradient">
    <div class="container px-2 mx-auto flex flex-wrap flex-col md:flex-row items-center">
      <div class="flex flex-col  md:w-2/5 justify-center items-start text-center md:text-left">
        <h1 class="text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-300 to-white my-4">
          About Us
        </h1>
        <p class=" text-white text-2xl ">
          Eleganter is a website designed and developed with the goal of removing the difficulty and long thought process that comes with interior design in mind.
        </p>
      </div>
    </div>
  </div>
  <section class="bg-white py-8">

    <div class="container mx-auto flex items-center flex-wrap pt-4 pb-12">

      <nav id="store" class="w-full justify-center">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
          <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
            <ul class="list-reset lg:flex  flex-1 items-center">
              <li class="mr-3">
                <a class="inline-block py-2 px-4 text-white no-underline" href="#">
                  <h1 class="text-5xl text-blue-500 ">
                    Our Gallery
                  </h1>
                </a>
            </ul>
            <ul class="list-reset lg:flex justify-end flex-1 items-center">
              <li class="mr-3">
                <a class="inline-block text-white " href="#"><button class="text-blue-500 ring-2 ring-blue-500/50 rounded-full outline-1 my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out ">
                    See All
                  </button></a>
              </li>
            </ul>
          </div>

      </nav>

      <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col rounded-lg bg-gradient-to-b from-blue-300 to-white ml-24 mr-24">
        <a href="#">
          <img class="hover:grow hover:shadow-lg" src="<?= base_url('assets/images/gallery/stool.png') ?>">
          <div class="pt-3 flex items-center text-black justify-between ">
            <p class="">Modern Stool</p>
            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
            </svg>
          </div>
          <p class="text-black">IKEA</p>
          <p class="pt-1 text-gray-900">Rp.230.000</p>
        </a>
      </div>

      <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col rounded-lg bg-gradient-to-b from-blue-300 mr-24">
        <a href="#">
          <img class="hover:grow hover:shadow-lg" src="<?= base_url('assets/images/hero-couch.png') ?>">
          <div class="pt-3 flex items-center text-black justify-between">
            <p class="">Sofa</p>
            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
            </svg>
          </div>
          <p class="text-black">IKEA</p>
          <p class="pt-1 text-gray-900">Rp.300.000</p>
        </a>
      </div>

      <div class="w-full md:w-1/3 xl:w-1/4 p-6 flex flex-col rounded-lg bg-gradient-to-b from-blue-300">
        <a href="#">
          <img class="hover:grow hover:shadow-lg" src="<?= base_url('assets/images/gallery/wood_armchair.png') ?>">
          <div class="pt-3 flex items-center justify-between text-black">
            <p class="">ArmChair</p>
            <svg class="h-6 w-6 fill-current text-gray-500 hover:text-black" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M12,4.595c-1.104-1.006-2.512-1.558-3.996-1.558c-1.578,0-3.072,0.623-4.213,1.758c-2.353,2.363-2.352,6.059,0.002,8.412 l7.332,7.332c0.17,0.299,0.498,0.492,0.875,0.492c0.322,0,0.609-0.163,0.792-0.409l7.415-7.415 c2.354-2.354,2.354-6.049-0.002-8.416c-1.137-1.131-2.631-1.754-4.209-1.754C14.513,3.037,13.104,3.589,12,4.595z M18.791,6.205 c1.563,1.571,1.564,4.025,0.002,5.588L12,18.586l-6.793-6.793C3.645,10.23,3.646,7.776,5.205,6.209 c0.76-0.756,1.754-1.172,2.799-1.172s2.035,0.416,2.789,1.17l0.5,0.5c0.391,0.391,1.023,0.391,1.414,0l0.5-0.5 C14.719,4.698,17.281,4.702,18.791,6.205z" />
            </svg>
          </div>
          <p class="text-black">IKEA</p>
          <p class="pt-1 text-gray-900">Rp.400.000</p>
        </a>
      </div>
  </section>
  <div class="pt-2 pb-2 gradient">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
      <div class="pl-4 flex items-center">
        <a class="toggleColour no-underline hover:no-underline font-bold text-2xl lg:text-4xl bg-gradient-to-r from-blue-400 to-white text-transparent bg-clip-text" href="#">
          eleganter
        </a>
      </div>
    </div>
  </div>
</body>

</html>