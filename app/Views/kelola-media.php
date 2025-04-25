<?= $this->extend('layout/admin-dashboard'); ?>

<?= $this->section('media'); ?>

<div class="bg-white p-6 rounded-lg shadow-md">
  <h2 class="text-2xl font-bold text-gray-800 mb-4">Kelola Media</h2>

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

  <div class="flex justify-between items-center mb-4">
    <!-- Tombol pindah ke halaman unggah media -->
    <a href="<?= base_url('media-unggah') ?>" class="bg-[#7AA095] text-white px-4 py-2 rounded-lg hover:bg-[#5a7a70]">
      + Unggah Media
    </a>

    <!-- Tanggal/Waktu di kanan -->
    <span id="dateTime" class="text-gray-700 font-semibold"></span>
  </div>


  <div class="overflow-x-auto">
    <table class="w-full border-collapse bg-gray-100">
      <thead class="bg-[#7AA095] text-white">
        <tr>
          <th class="border p-2">No</th>
          <th class="border p-2">Gambar</th>
          <th class="border p-2">Nama File</th>
          <th class="border p-2">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($media)) : ?>
          <?php $no = 1 + ($pager->getCurrentPage('media') - 1) * 10; ?>
          <?php foreach ($media as $item) : ?>
            <tr>
              <td class="border p-2 text-center"><?= $no++; ?></td>
              <td class="border p-2 text-center">
                <img src="<?= base_url($item['file_path']) ?>" alt="<?= esc($item['filename']) ?>" class="w-16 h-16 object-cover mx-auto">
              </td>
              <td class="border p-2"><?= esc($item['filename']); ?></td>
              <td class="border p-2 text-center">
                <a href="<?= base_url('media/hapus/' . $item['id']) ?>" class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600" onclick="return confirm('Yakin ingin menghapus media ini?')">
                  <i class="fas fa-trash"></i> Hapus
                </a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else : ?>
          <tr>
            <td colspan="4" class="text-center text-gray-500 py-4">Belum ada media diunggah.</td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>

    <!-- Pagination -->
    <div class="flex justify-between items-center mt-4 text-gray-700">
      <span>Menampilkan <?= count($media) ?> dari total <?= $pager->getTotal('media') ?> media</span>
      <div>
        <?= $pager->links('media', 'default_full') ?>
      </div>
      <div class="flex space-x-2">
        <button class="bg-gray-300 px-3 py-1 rounded-lg hover:bg-gray-400">&laquo;</button>
        <button class="bg-[#7AA095] text-white px-3 py-1 rounded-lg hover:bg-[#5a7a70]">1</button>
        <button class="bg-gray-300 px-3 py-1 rounded-lg hover:bg-gray-400">2</button>
        <button class="bg-gray-300 px-3 py-1 rounded-lg hover:bg-gray-400">3</button>
        <button class="bg-gray-300 px-3 py-1 rounded-lg hover:bg-gray-400">&raquo;</button>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>