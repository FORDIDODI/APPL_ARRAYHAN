<?= $this->extend('layout/admin-dashboard'); ?>

<?= $this->section('berita'); ?>

<div class="bg-white p-6 rounded-lg shadow-md">
  <h2 class="text-2xl font-bold text-gray-800 mb-4">Kelola Berita</h2>

  <?php if (session()->getFlashdata('success')) : ?>
    <div class="alert bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded relative mb-4 shadow-md transition-opacity duration-500 ease-in-out">
      <strong>Sukses!</strong> <?= session()->getFlashdata('success') ?>
    </div>
  <?php endif; ?>

  <?php if (session()->getFlashdata('error')) : ?>
    <div class="alert bg-red-100 border border-red-300 text-red-800 px-4 py-3 rounded relative mb-4 shadow-md transition-opacity duration-500 ease-in-out">
      <strong>Gagal!</strong> <?= session()->getFlashdata('error') ?>
    </div>
  <?php endif; ?>


  <!-- Tombol Tambah Berita & Pencarian -->
  <div class="flex justify-between items-center mb-4">
    <a href="<?= base_url('berita/tambah') ?>" class="bg-[#7AA095] text-white px-4 py-2 rounded-lg hover:bg-[#5a7a70]">
      <i class="fas fa-plus mr-2"></i> Tambah Berita
    </a>

    <form action="<?= base_url('kelola-berita') ?>" method="get">
      <input type="text" name="search" value="<?= esc($_GET['search'] ?? '') ?>" placeholder="Cari berita..." class="p-2 border rounded-lg w-64 focus:ring">
    </form>
  </div>

  <!-- Tabel Daftar Berita -->
  <div class="overflow-x-auto">
    <table class="w-full border-collapse [&>*>*>*]:border border border-gray-300 bg-gray-100">
      <thead class="bg-[#7AA095] text-white">
        <tr>
          <th class="p-3 text-left">No</th>
          <th class="p-3 text-left">Gambar</th>
          <th class="p-3 text-left">Judul</th>
          <th class="p-3 text-left">Isi Berita</th>
          <th class="p-3 text-left">Tanggal</th>
          <th class="p-3 text-center">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php if (empty($berita)) : ?>
          <tr>
            <td colspan="6" class="text-center text-gray-500 py-4">Belum ada berita.</td>
          </tr>
        <?php else : ?>
          <?php $no = 1;
          foreach ($berita as $b) : ?>
            <tr class="border-b">
              <td class="p-3 text-center"><?= $no++ ?></td>
              <td class="p-3"><img src="<?= base_url('uploads/' . $b['gambar']) ?>" alt="Gambar" class="w-16 h-16 rounded-lg"></td>
              <td class="p-3"><?= esc($b['judul']) ?></td>
              <td class="p-3 truncate max-w-xs"><?= esc(substr($b['isi'], 0, 50)) ?>...</td>
              <td class="p-3"><?= date('d-m-Y', strtotime($b['tanggal'])) ?></td>
              <td class="p-3 text-center">
                <div class="flex justify-center items-center space-x-2">
                  <a href="<?= base_url('berita/edit/' . $b['id']) ?>" class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600">
                    <i class="fas fa-edit"></i> Edit
                  </a>
                  <form action="<?= base_url('berita/hapus/' . $b['id']) ?>" method="post" onsubmit="return confirm('Hapus berita ini?')">
                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600">
                      <i class="fas fa-trash"></i> Hapus
                    </button>
                  </form>
                </div>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php endif; ?>
      </tbody>
    </table>
  </div>

  <!-- Pagination -->
  <div class="flex justify-between items-center mt-4">
    <p class="text-gray-700">Menampilkan <?= count($berita) ?> berita</p>
    <!-- Placeholder pagination -->
    <div class="flex space-x-2">
      <button class="bg-gray-300 px-3 py-1 rounded-lg hover:bg-gray-400">&laquo;</button>
      <button class="bg-[#7AA095] text-white px-3 py-1 rounded-lg hover:bg-[#5a7a70]">1</button>
      <button class="bg-gray-300 px-3 py-1 rounded-lg hover:bg-gray-400">2</button>
      <button class="bg-gray-300 px-3 py-1 rounded-lg hover:bg-gray-400">3</button>
      <button class="bg-gray-300 px-3 py-1 rounded-lg hover:bg-gray-400">&raquo;</button>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>