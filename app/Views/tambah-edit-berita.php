<?= $this->extend('layout/admin-dashboard'); ?>
<?= $this->section('berita'); ?>

<div class="bg-white p-6 md:p-8 rounded-2xl shadow-lg max-w-3xl mx-auto">
  <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">
    <?= isset($berita) ? 'Edit Berita' : 'Tambah Berita' ?>
  </h2>

  <form action="<?= isset($berita) ? base_url('berita/update/' . $berita['id']) : base_url('berita/simpan') ?>" method="post" enctype="multipart/form-data" class="space-y-6">

    <div>
      <label class="block text-sm font-semibold text-gray-700 mb-1">Judul Berita</label>
      <input type="text" name="judul" value="<?= esc($berita['judul'] ?? '') ?>" class="w-full p-3 border rounded-lg" required>
    </div>

    <div>
      <label class="block text-sm font-semibold text-gray-700 mb-1">Isi Berita</label>
      <textarea name="isi" rows="6" class="w-full p-3 border rounded-lg" required><?= esc($berita['isi'] ?? '') ?></textarea>
    </div>

    <div>
      <label class="block text-sm font-semibold text-gray-700 mb-1">Upload Gambar</label>
      <input type="file" name="gambar" class="w-full p-2 border rounded-lg">
      <?php if (isset($berita['gambar'])): ?>
        <p class="mt-2">Gambar Saat Ini:</p>
        <img src="<?= base_url('uploads/' . $berita['gambar']) ?>" class="w-32 mt-2 rounded-lg shadow">
      <?php endif; ?>
    </div>

    <div class="text-center">
      <button type="submit" class="bg-[#7AA095] text-white px-6 py-2 rounded-lg hover:bg-[#5a7a70]">
        <?= isset($berita) ? 'Update' : 'Simpan' ?>
      </button>
      <a href="<?= base_url('kelola-berita') ?>" class="ml-4 text-gray-600 hover:underline">Batal</a>
    </div>
  </form>
</div>

<?= $this->endSection(); ?>
