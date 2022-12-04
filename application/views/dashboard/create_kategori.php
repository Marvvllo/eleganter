<form action="<?php echo site_url('kategori/create/') ?>" method="POST">
  <div class="mx-8 my-8">
    <h1 class="font-bold text-3xl text-primary">
      Edit Kategori
    </h1>

    <!-- Form inputs -->
    <div class=" flex flex-col gap-4">

      <div class="border-b-2 border-secondary w-full flex flex-col">
        <label class="text-primary" for="kategori_id">ID Kategori</label>
        <input class="text-dark font-semibold text-xl" type="number" name="kategori_id" id="kategori_id" placeholder="ID Kategori">
        <?php echo form_error('id') ? 'is_invalid' : '' ?>
      </div>

      <div class="border-b-2 border-secondary w-full flex flex-col">
        <label class="text-primary" for="kategori">Nama Kategori</label>
        <input class="text-dark font-semibold text-xl" type="text" name="kategori" id="kategori" placeholder="Kategori">
        <?php echo form_error('nama') ? 'is_invalid' : '' ?>
      </div>

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
      <a class="btn-secondary" href="<?php echo base_url('dashboard/kategori') ?>">Kembali</a>
    </div>
  </div>
</form>