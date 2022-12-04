<form action="<?php echo site_url('barang/create/') ?>" method="POST">
  <div class="mx-8 my-8">
    <h1 class="font-bold text-3xl text-primary">
      Tambah Barang
    </h1>

    <!-- Form inputs -->
    <div class=" flex flex-col gap-4">

      <!-- ID Barang -->
      <div class="border-b-2 border-secondary w-full flex flex-col">
        <label class="text-primary" for="id_barang">ID Barang</label>
        <input class="text-dark font-semibold text-xl" type="number" name="id_barang" id="id_barang" placeholder="ID Barang">
        <?php echo form_error('id') ? 'is_invalid' : '' ?>
      </div>

      <!-- Kategori -->
      <div class="border-b-2 border-secondary w-full flex flex-col">
        <label class="text-primary" for="id_kategori">Kategori</label>
        <select class="text-dark font-semibold text-xl" type="text" name="id_kategori" id="id_kategori">

          <?php foreach ($kategori as $k) : ?>
            <option value="<?= $k->kategori_id ?>"><?= $k->kategori ?></option>
          <?php endforeach; ?>

        </select>
        <?php echo form_error('id') ? 'is_invalid' : '' ?>
      </div>

      <!-- Nama Barang -->
      <div class="border-b-2 border-secondary w-full flex flex-col">
        <label class="text-primary" for="nama_barang">Nama Barang</label>
        <input class="text-dark font-semibold text-xl" type="text" name="nama_barang" id="nama_barang" placeholder="Nama Barang">
        <?php echo form_error('nama') ? 'is_invalid' : '' ?>
      </div>

      <!-- Harga Barang -->
      <div class="border-b-2 border-secondary w-full flex flex-col">
        <label class="text-primary" for="harga">Harga Barang</label>
        <input class="text-dark font-semibold text-xl" type="number" name="harga" id="harga" placeholder="Harga Barang">
        <?php echo form_error('nama') ? 'is_invalid' : '' ?>
      </div>

      <!-- Specs Barang -->
      <div class="border-b-2 border-secondary w-full flex flex-col">
        <label class="text-primary" for="spesifikasi">Spesifikasi Barang</label>
        <input class="text-dark font-semibold text-xl" type="text" name="spesifikasi" id="spesifikasi" placeholder="Spesifikasi Barang">
        <?php echo form_error('nama') ? 'is_invalid' : '' ?>
      </div>

      <!-- Gambar Barang -->
      <div class="border-b-2 border-secondary w-full flex flex-col">
        <label class="text-primary" for="gambar">Gambar Barang</label>
        <input class="text-dark font-semibold text-xl" type="text" name="gambar" id="gambar" placeholder="Gambar Barang">
        <?php echo form_error('nama') ? 'is_invalid' : '' ?>
      </div>

      <!-- Status Barang -->
      <div class="border-b-2 border-secondary w-full flex flex-col">
        <label class="text-primary" for="status">Status Kategori</label>
        <select class="text-dark font-semibold text-xl" type="text" name="status" id="status">
          <option value="on">On</option>
          <option value="off">Off</option>
        </select>
        <?php echo form_error('status') ? 'is_invalid' : '' ?>
      </div>

    </div>

    <div class="flex flex-row my-4 gap-4">
      <input class="btn-primary" type="submit" value="Simpan">
      <a class="btn-secondary" href="<?php echo base_url('dashboard/barang') ?>">Kembali</a>
    </div>
  </div>
</form>