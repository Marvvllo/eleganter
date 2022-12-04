  <div class="w-full flex flex-col items-center">
    <div class="w-full flex justify-between items-center px-16 my-4">
      <h1 class="font-bold text-3xl text-primary">Kategori</h1>
      <div class="btn-secondary text-base">
        <a class="" href="<?php echo base_url('kategori/create') ?>">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 inline">
            <path fill-rule="evenodd" d="M12 5.25a.75.75 0 01.75.75v5.25H18a.75.75 0 010 1.5h-5.25V18a.75.75 0 01-1.5 0v-5.25H6a.75.75 0 010-1.5h5.25V6a.75.75 0 01.75-.75z" clip-rule="evenodd" />
          </svg>

          Tambah Kategori
        </a>
      </div>
    </div>

    <div class="w-full px-16">
      <table id="table_data" class="hover border-b-4 min-w-full border-black border-solid border-collapse">
        <thead class="bg-dark text-secondary text-md text-left font-bold">
          <tr>
            <th class="">ID</th>
            <th class="">kategori</th>
            <th class="">Status</th>
            <th class="">Action</th>
          </tr>
        </thead>
        <tbody class="bg-white border-solid text-dark font-semibold text-left">
          <?php foreach ($kategori as $k) : ?>
            <tr class='border-dark border-b-2'>
              <td class='py-2 px-4 text-center'> <?php echo $k->kategori_id; ?> </td>
              <td class='py-2 pl-4 pr-8'> <?php echo $k->kategori; ?> </td>
              <td class='py-2 px-4'> <?php echo $k->status; ?> </td>
              <td class='py-2 px-4 flex gap-4'>
                <a class="btn-primary text-sm" href='<?php echo base_url('kategori/edit/') . $k->kategori_id ?>'>Ubah</a>
                <a class="btn-secondary text-sm" href='<?php echo base_url('kategori/delete/') . $k->kategori_id ?>'>Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>