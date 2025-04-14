<?= $this->extend('layout/admin-dashboard'); ?>

<?= $this->section('berita'); ?>
<div class="bg-white p-6 md:p-8 rounded-2xl shadow-lg max-w-3xl mx-auto">
  <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">
    <?= isset($berita) ? '<i class="fas fa-edit mr-2 text-yellow-600"></i> Edit Berita' : ' Tambah Berita' ?>
  </h2>

  <form action="<?= isset($berita) ? base_url('berita/update/' . $berita['id']) : base_url('berita/simpan') ?>"
    method="post"
    enctype="multipart/form-data"
    class="space-y-6">

    <!-- Judul -->
    <div>
      <label class="block text-sm font-semibold text-gray-700 mb-1">
        </i>Judul Berita
      </label>
      <input
        type="text"
        name="judul"
        class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#7AA095]"
        value="<?= esc($berita['judul'] ?? '') ?>"
        required>
    </div>

    <!-- Isi -->
    <div>
      <label class="block text-sm font-semibold text-gray-700 mb-1">
        <i class="fas fa-align-left mr-2 text-[#7AA095]"></i>Isi Berita
      </label>
      <textarea
        name="isi"
        rows="6"
        class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#7AA095]"
        required><?= esc($berita['isi'] ?? '') ?></textarea>
    </div>

    <!-- Gambar -->
    <div>
      <label class="block text-sm font-semibold text-gray-700 mb-1">
        <i class="fas fa-image mr-2 text-[#7AA095]"></i>Upload Gambar
      </label>
      <input
        type="file"
        name="gambar"
        class="w-full border border-gray-300 rounded-lg p-2 file:bg-[#7AA095] file:text-white file:rounded file:px-4 file:py-2 file:border-none hover:file:bg-[#5a7a70] transition">

      <?php if (isset($berita['gambar'])): ?>
        <img src="<?= base_url('uploads/' . $berita['gambar']) ?>"
          alt="Gambar"
          class="mt-4 w-40 rounded-lg border shadow-md">
      <?php endif; ?>
    </div>

    <!-- Tombol Submit -->
    <div class="text-center">
      <button
        type="submit"
        class="bg-[#7AA095] text-white font-semibold px-6 py-3 rounded-xl hover:bg-[#5a7a70] transition duration-200">
        <?= isset($berita) ? 'Perbarui' : 'Simpan' ?>
      </button>
    </div>
  </form>
</div>
<?= $this->endSection() ?>