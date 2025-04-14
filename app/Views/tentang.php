<?= $this->extend('layout/arrayhan'); ?>
<?= $this->section('tentang'); ?>

<div class="mt-12 md:mt-16"></div>
<div class="flex flex-col items-center space-y-4 mx-6">
  <img src="<?= base_url('assets/img/tk-arrayhan.png'); ?>" alt="RA AR RAYHAN" class="w-40 h-40 md:w-60 md:h-60" />
  <div class="text-center self-center">
    <h1 class="text-[#40531B] text-4xl md:text-6xl font-bold leading-tight">RAUDHATUL ATHFAL</h1>
    <h1 class="text-[#40531B] text-4xl md:text-6xl font-bold leading-tight">AR RAYHAN</h1>
  </div>
</div>

<!-- Bagian Visi dan Misi -->
<div class="flex flex-col md:flex-row justify-center gap-6 mt-12 mx-6 md:mx-10">
  <div class="bg-[#AFBC88] text-[#40531B] p-6 rounded-lg shadow-md w-full md:w-1/2">
    <h2 class="text-2xl font-bold text-center">Visi</h2>
    <p class="text-base mt-2">
      Lorem ipsum dolor sit amet. Aut debitis libero eum doloribus modi est delectus labore qui internos nemo ab nihil accusamus qui velit quibusdam?
    </p>
  </div>
  <div class="bg-[#AFBC88] text-[#40531B] p-6 rounded-lg shadow-md w-full md:w-1/2">
    <h2 class="text-2xl font-bold text-center">Misi</h2>
    <ol class="list-decimal ml-6 mt-2 space-y-2">
      <li>Mewujudkan pendidikan berkualitas.</li>
      <li>Membentuk karakter peserta didik melalui pengajaran agama yang kuat.</li>
      <li>Menciptakan lingkungan belajar yang nyaman dan kondusif.</li>
      <li>Menanamkan nilai-nilai moral dan sosial kepada peserta didik.</li>
    </ol>
  </div>
</div>

<!-- Profil RAUDHATUL ATHFAL -->
<div class="mt-12 mx-6 md:mx-10">
  <h2 class="text-2xl font-bold text-[#40531B]">Profil Raudhatul Athfal AR RAYHAN</h2>
  <div class="flex flex-col md:flex-row gap-6 mt-4">
    <div class="bg-gray-100 p-4 rounded-lg shadow-md w-full md:w-1/2">
      <p class="text-[#40531B]"><b>Akreditasi</b>: A</p>
      <p class="text-[#40531B]"><b>NPSN</b>: xxxxxxxx</p>
      <p class="text-[#40531B]"><b>Status</b>: Swasta</p>
      <p class="text-[#40531B]"><b>Siswa</b>: 255</p>
      <p class="text-[#40531B]"><b>Guru</b>: x</p>
    </div>
    <div class="bg-gray-300 p-4 rounded-lg shadow-md w-full md:w-1/2 flex items-center justify-center">
      <p class="text-gray-600">Gambar Profil (Placeholder)</p>
    </div>
  </div>
</div>

<!-- Sejarah RAUDHATUL ATHFAL -->
<div class="mt-12 mx-6 md:mx-10">
  <h2 class="text-2xl font-bold text-[#40531B]">Sejarah Raudhatul Athfal AR RAYHAN</h2>
  <div class="flex flex-col md:flex-row gap-6 mt-4">
    <div class="bg-gray-300 p-4 rounded-lg shadow-md w-full md:w-1/2 flex items-center justify-center">
      <p class="text-gray-600">Gambar Sejarah (Placeholder)</p>
    </div>
    <div class="bg-gray-100 p-4 rounded-lg shadow-md w-full md:w-1/2">
      <p>
        Lorem ipsum dolor sit amet. Aut debitis libero eum doloribus modi est delectus labore qui internos nemo ab nihil accusamus qui velit quibusdam?
      </p>
      <p class="mt-2">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas soluta mollitia nisi, minus sint consequuntur eos quidem et, suscipit enim dignissimos ab nihil sit delectus debitis obcaecati quos excepturi doloribus?
      </p>
    </div>
  </div>
</div>

<!-- Pengajar RA AR RAYHAN -->
<div class="mt-12 mx-6 md:mx-10">
  <h2 class="text-2xl font-bold text-[#40531B]">Pengajar RA Ar-Rayhan</h2>
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-4">
    <div class="bg-[#AFBC88] rounded-xl p-4 flex flex-col items-center text-center">
      <div class="w-32 h-32 rounded-full bg-gray-300 mb-2"></div>
      <p class="font-bold text-[#40531B]">PENGAJAR</p>
      <p class="text-sm text-[#40531B]">Lorem ipsum dolor sit S.Pd.</p>
    </div>
    <div class="bg-[#AFBC88] rounded-xl p-4 flex flex-col items-center text-center">
      <div class="w-32 h-32 rounded-full bg-gray-300 mb-2"></div>
      <p class="font-bold text-[#40531B]">KEPALA RA</p>
      <p class="text-sm text-[#40531B]">Lorem ipsum dolor sit S.Pd.</p>
    </div>
    <div class="bg-[#AFBC88] rounded-xl p-4 flex flex-col items-center text-center">
      <div class="w-32 h-32 rounded-full bg-gray-300 mb-2"></div>
      <p class="font-bold text-[#40531B]">PENGAJAR</p>
      <p class="text-sm text-[#40531B]">Lorem ipsum dolor sit S.Pd.</p>
    </div>
  </div>
</div>
<!-- End  -->

<!-- Prestasi RA AR RAYHAN -->
<div class="mt-12 mx-6 md:mx-10">
  <h2 class="text-2xl font-bold text-[#40531B] mb-4">Prestasi RA Ar-Rayhan</h2>
  <div class="relative">

    <!-- Tombol panah kiri -->
    <button id="scrollLeft" class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-[#A3B76D] text-white font-bold text-xl rounded-full shadow-lg w-10 h-10 flex items-center justify-center hover:bg-[#40531B] transition">
      <i class="fas fa-angle-left"></i>
    </button>

    <!-- Container Slider -->
    <div id="prestasiSlider" class="flex overflow-x-auto space-x-4 scroll-smooth px-12 no-scrollbar">
      <!-- Item Prestasi (ulangi sesuai kebutuhan) -->
      <div class="flex-shrink-0 w-64 bg-[#AFBC88] rounded-xl p-4 text-center">
        <div class="w-full h-24 bg-gray-300 rounded-md mb-2"></div>
        <p class="font-bold text-[#40531B]">JUARA I</p>
        <p class="text-sm text-[#40531B]">Lomba MTQ tingkat kabupaten pada event A di tempat B.</p>
      </div>
      <div class="flex-shrink-0 w-64 bg-[#AFBC88] rounded-xl p-4 text-center">
        <div class="w-full h-24 bg-gray-300 rounded-md mb-2"></div>
        <p class="font-bold text-[#40531B]">JUARA II</p>
        <p class="text-sm text-[#40531B]">Lomba Fashion Show anak Islami se-kecamatan.</p>
      </div>
      <div class="flex-shrink-0 w-64 bg-[#AFBC88] rounded-xl p-4 text-center">
        <div class="w-full h-24 bg-gray-300 rounded-md mb-2"></div>
        <p class="font-bold text-[#40531B]">JUARA HARAPAN</p>
        <p class="text-sm text-[#40531B]">Lomba Cerdas Cermat PAUD.</p>
      </div>
      <div class="flex-shrink-0 w-64 bg-[#AFBC88] rounded-xl p-4 text-center">
        <div class="w-full h-24 bg-gray-300 rounded-md mb-2"></div>
        <p class="font-bold text-[#40531B]">JUARA HARAPAN</p>
        <p class="text-sm text-[#40531B]">Lomba Cerdas Cermat PAUD.</p>
      </div>
      <div class="flex-shrink-0 w-64 bg-[#AFBC88] rounded-xl p-4 text-center">
        <div class="w-full h-24 bg-gray-300 rounded-md mb-2"></div>
        <p class="font-bold text-[#40531B]">JUARA HARAPAN</p>
        <p class="text-sm text-[#40531B]">Lomba Cerdas Cermat PAUD.</p>
      </div>
      <div class="flex-shrink-0 w-64 bg-[#AFBC88] rounded-xl p-4 text-center">
        <div class="w-full h-24 bg-gray-300 rounded-md mb-2"></div>
        <p class="font-bold text-[#40531B]">JUARA HARAPAN</p>
        <p class="text-sm text-[#40531B]">Lomba Cerdas Cermat PAUD.</p>
      </div>
      <!-- Tambah item lain -->
    </div>

    <!-- Tombol panah kanan -->
    <button id="scrollRight" class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-[#A3B76D] text-white font-bold text-xl rounded-full shadow-lg w-10 h-10 flex items-center justify-center hover:bg-[#40531B] transition">
      <i class="fas fa-angle-right"></i>
    </button>
  </div>
</div>

<!-- Script Scroll -->
<script>
  const slider = document.getElementById('prestasiSlider');
  const btnLeft = document.getElementById('scrollLeft');
  const btnRight = document.getElementById('scrollRight');

  btnLeft.addEventListener('click', () => {
    slider.scrollBy({
      left: -300,
      behavior: 'smooth'
    });
  });

  btnRight.addEventListener('click', () => {
    slider.scrollBy({
      left: 300,
      behavior: 'smooth'
    });
  });
</script>

<?= $this->endSection(); ?>