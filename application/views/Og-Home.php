<main class="">

  <!-- Hero section -->
  <section class="-mt-11">
    <div class="grid grid-cols-hero items-center px-8 bg-primary">

      <!-- Headings -->
      <div class="slide-right">
        <h1 class="font-display text-5xl font-bold leading-[1.15em] text-gradient">Find your modern elegance.</h1>
        <div class="py-2 text-white text-xl">
          <p class="">Bring out your youth and elegance with</p>
          <p class="">your home.</p>
        </div>
      </div>

      <!-- Hero Image -->
      <div class="slide-down translate-y-1/2">
        <img class="h-auto w-full" src="<?= base_url('assets/images/hero-couch.png') ?>" alt="">
      </div>
    </div>

    <!-- Action Buttons -->
    <div class="flex gap-4 mx-8 my-4 slide-down scroll-slide-up">
      <a class="btn-primary" href="<?= base_url() ?>">Learn More</a>
      <a class="btn-secondary" href="<?= base_url("catalog") ?>">Explore Tools</a>
    </div>
  </section>

  <!-- About -->
  <section class="about grid grid-cols-about items-center my-16 text-white">

    <!-- About Image -->
    <div class="scroll-slide-right">
      <img class="h-full w-auto" src="<?= base_url('assets/images/about_stool.png') ?>" alt="">
    </div>

    <!-- Texts -->
    <div class="flex flex-col justify-center self-end gap-2 pr-16 h-1/2 scroll-slide-down">
      <h2 class="font-display text-5xl font-bold leading-[1.15em] text-gradient">About us</h2>
      <p class="text-base">
        Eleganter is a diligent group of students aiming to ease and simplify the furnishing proccess of your home.
      </p>
      <p class="text-base">
        Made to complete said goals, Eleganter is the perfect place to find elegant and out-of-the-box designs aswell as beautiful combinations of colors.
      </p>
    </div>

  </section>

  <!-- Gallery Section -->
  <section class="my-32 px-8">

    <div class="flex flex-row justify-between items-start">
      <p class="font-display text-4xl font-bold leading-[1.15em] text-center text-primary mb-16">Our Gallery</p>
      <a class="btn-secondary text-base" href="#">See All</a>
    </div>

    <!-- Cards Container -->
    <div class="grid grid-cols-3 gap-8 shrink-0 gallery">

      <div class="about flex flex-row gap-4 items-center text-white">
        <!-- Gallery Image -->
        <div class="">
          <img class="h-auto w-48 object-scale-down " src="<?= base_url('assets/images/gallery/stool.png') ?>" alt="">
        </div>

        <!-- Texts -->
        <div class="flex flex-col justify-center self-end gap-2 h-1/2">
          <a href="#">
            <p class="font-bold">Modern Stool</p>
          </a>
        </div>
      </div>

      <div class="about flex flex-row gap-4 items-center text-white">

        <!-- Gallery Image -->
        <div class="">
          <img class="h-auto w-48 object-scale-down " src="<?= base_url('assets/images/gallery/sofa.png') ?>" alt="">
        </div>

        <!-- Texts -->
        <div class="flex flex-col justify-center self-end gap-2 h-1/2">
          <a href="#">
            <p class="font-bold">3-Wide Sofa</p>
          </a>
        </div>

      </div>

      <div class="about flex flex-row gap-4 items-center text-white">
        <!-- Gallery Image -->
        <div class="">
          <img class="h-auto w-48 object-scale-down" src="<?= base_url('assets/images/gallery/armchair.png') ?>" alt="">
        </div>

        <!-- Texts -->
        <div class="flex flex-col justify-center self-end gap-2 h-1/2">
          <a href="#">
            <p class="font-bold">Slipcover Armchair</p>
          </a>
        </div>
      </div>

    </div>

  </section>



</main>