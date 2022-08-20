<h1 class="text-3xl font-bold text-white">Test Tailwind CSS</h1>
<?php foreach ($barang as $b) : ?>
  <p><?= $b->nama ?></p>
  <p><?= $b->kategori_id ?></p>
  <p><?= $b->spesifikasi ?></p>
<?php endforeach; ?>