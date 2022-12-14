  <div class="w-full flex flex-col items-center">
    <div class="w-full flex justify-between items-center px-16 my-4">
      <h1 class="font-bold text-3xl text-primary">Barang</h1>
      <div class="btn-secondary text-base">
        <a class="" href="<?php echo base_url('barang/create') ?>">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 inline">
            <path fill-rule="evenodd" d="M12 5.25a.75.75 0 01.75.75v5.25H18a.75.75 0 010 1.5h-5.25V18a.75.75 0 01-1.5 0v-5.25H6a.75.75 0 010-1.5h5.25V6a.75.75 0 01.75-.75z" clip-rule="evenodd" />
          </svg>

          Tambah Barang
        </a>
      </div>
    </div>

    <div class="w-full px-16">
      <table id="table_data" class="hover border-b-4 min-w-full border-black border-solid border-collapse">
        <thead class="bg-dark text-secondary text-md text-left font-bold">
          <tr>
            <th class="">ID</th>
            <th class="">Nama</th>
            <th class="">Kategori</th>
            <!-- <th class="">Supplier</th> -->
            <!-- <th class="">Stok</th> -->
            <th class="">Harga</th>
            <th class="">Status</th>
            <th class="">Action</th>
          </tr>
        </thead>
        <tbody class="bg-white border-solid text-dark font-semibold text-left">
          <?php foreach ($barang as $b) : ?>
            <tr class='border-dark border-b-2 '>
              <td class='py-2 px-4 text-center'> <?php echo $b->id_barang; ?> </td>
              <td class='py-2 pl-4 pr-8'> <?php echo $b->nama_barang; ?> </td>
              <td class='py-2 pl-4 pr-8'> <?php echo $b->kategori; ?> </td>
              <td class='py-2 pl-4 pr-8'> <?php echo $b->harga; ?> </td>
              <td class='py-2 px-4'> <?php echo $b->status; ?> </td>
              <td class='py-2 px-4 flex flex-row gap-4 h-full'>
                <a class="btn-primary text-sm" href='<?php echo base_url('barang/edit/') . $b->id_barang ?>'>Ubah</a>
                <a class="btn-secondary text-sm" href='<?php echo base_url('barang/delete/') . $b->id_barang ?>'>Hapus</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>