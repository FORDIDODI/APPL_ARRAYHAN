<?= $this->extend('layout/admin-dashboard'); ?>

<?= $this->section('media'); ?>

<div class="bg-white p-6 rounded-lg shadow-md">
  <h2 class="text-2xl font-bold mb-4">Unggah Media Baru</h2>

  <?php if (session()->getFlashdata('success')) : ?>
    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
      <?= session()->getFlashdata('success') ?>
    </div>
  <?php endif; ?>

  <?php if (session()->getFlashdata('error')) : ?>
    <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
      <?= session()->getFlashdata('error') ?>
    </div>
  <?php endif; ?>

  <form action="<?= base_url('media/unggah') ?>" method="post" enctype="multipart/form-data">
    <div class="mb-4">
      <label for="media" class="block text-gray-700 font-semibold mb-2">Pilih Gambar</label>
      <input type="file" name="media" id="media" required class="border border-gray-300 rounded px-3 py-2 w-full">
    </div>

    <div class="flex justify-end">
      <a href="<?= base_url('kelola-media') ?>" class="mr-4 text-gray-600 hover:none bg-[#7AA095] hover:bg-[#5a7a70] text-white px-5 py-2 rounded-lg">Kembali</a>
      <button type="submit" class="bg-[#7AA095] hover:none bg-[#7AA095] hover:bg-[#5a7a70] text-white px-5 py-2 rounded-lg">
        Unggah
      </button>
    </div>
  </form>
</div>

<?= $this->endSection(); ?>
