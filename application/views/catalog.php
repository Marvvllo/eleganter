<main class="">

  <!-- Top Image -->
  <div class="gradient-to-white flex justify-center">
    <img class="w-1/2" src="<?= base_url('assets/images/hero-couch.png') ?>" alt="">
  </div>

  <!-- Items -->
  <section class="">

    <?php foreach ($kategori as $k) : ?>
      <p><?= $k->nama ?></p>
    <?php endforeach; ?>

  </section>


</main>