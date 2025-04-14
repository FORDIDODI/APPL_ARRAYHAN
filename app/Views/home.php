<?= $this->extend('layout/arrayhan'); ?>

<?= $this->section('konten'); ?>
<!-- ISI KONTEN -->
 <!-- Added margin for spacing between the two sections -->
 <div class="mt-12 md:mt-16"></div>
  <div class="flex flex-col md:flex-row items-center md:items-center mt-6 md:mt-10 mx-6 md:ml-10 space-y-4 md:space-y-0 md:space-x-8">
    <img src="<?= base_url('assets/img/tk-arrayhan.png'); ?>" alt="RA AR RAYHAN" class="w-40 h-40 md:w-60 md:h-60" />
    <div class="text-center md:text-left self-center">
      <h1 class="text-[#40531B] text-4xl md:text-6xl font-bold leading-tight">RAUDHATUL ATHFAL</h1>
      <h1 class="text-[#40531B] text-4xl md:text-6xl font-bold leading-tight">AR RAYHAN</h1>
    </div>
</div>

  <div class="bg-[#AFBC88] text-[#40531B] p-4 md:p-8 rounded-lg mt-6 max-w-7xl shadow-md mx-4 md:mx-auto">
    <p class="text-base md:text-lg font-medium">
      Lorem ipsum dolor sit amet. Aut debitis libero eum doloribus modi est
      delectus labore qui internos nemo ab nihil accusamus qui velit
      quibusdam?
    </p>
    <p class="text-base md:text-lg font-medium mt-2">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas soluta
      mollitia nisi, minus sint consequuntur eos quidem et, suscipit enim
      dignissimos ab nihil sit delectus debitis obcaecati quos excepturi
      doloribus?
    </p>
  </div>

  <!-- Added margin for spacing between the two sections -->
  <div class="mt-12 md:mt-16"></div>

  <!-- ISI KONTEN BERITA -->
  <div class="flex items-center justify-between my-6 px-4 md:px-0">
    <!-- Garis Kiri (Menyambung ke tepi) -->
    <div class="flex flex-col space-y-1 w-full">
      <div class="border-t-[2px] border-[#40531B] w-[85%]"></div>
      <div class="border-t-[2px] border-[#40531B] w-full"></div>
      <div class="border-t-[2px] border-[#40531B] w-[85%]"></div>
    </div>

    <!-- Teks di Tengah -->
    <h2 class="text-[#40531B] text-2xl md:text-4xl font-bold mx-3 md:mx-6 whitespace-nowrap">Seputar RA AR RAYHAN</h2>

    <!-- Garis Kanan (Tetap panjang) -->
    <div class="flex flex-col space-y-1 w-full">
      <div class="border-t-[2px] border-[#40531B] ml-[15%]"></div>
      <div class="border-t-[2px] border-[#40531B] ml-full"></div>
      <div class="border-t-[2px] border-[#40531B] ml-[15%]"></div>
    </div>
  </div>

  <!-- Added margin for spacing between the two sections -->
  <div class="mt-12 md:mt-16"></div>

  <!-- Berita -->
  <div class="max-w-7xl mx-auto mt-6 md:mt-10 px-4 md:px-0">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Berita Terbaru -->
      <div class="col-span-1 md:col-span-2 bg-gray-100 p-4 md:p-6 rounded-lg shadow-md">
        <h3 class="text-[#40531B] text-xl md:text-2xl font-bold mb-3 md:mb-4">
          Berita Terbaru!
        </h3>
        <div class="bg-gray-300 w-full h-48 md:h-64 rounded-md"></div>
        <h4 class="text-[#40531B] font-bold text-lg mt-3 md:mt-4">(Judul Berita)</h4>
        <p class="text-gray-600 text-xs md:text-sm">
          <i class="far fa-calendar-alt mr-1"></i>dd-mm-yyyy
          <i class="far fa-clock ml-4 mr-1"></i>hh:mm:ss
        </p>
        <p class="text-gray-700 text-sm md:text-base mt-2">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia
          quae amet similique est itaque quo reiciendis nemo mollitia. Lorem
          ipsum dolor sit, amet consectetur adipisicing elit. Corporis numquam
          recusandae aliquid quibusdam, laboriosam consectetur rerum.
          Praesentium, dicta ut. Consequuntur molestias doloremque iusto
          aspernatur deserunt reprehenderit delectus accusantium earum rem!
        </p>
      </div>

      <!-- Berita Lainnya -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-4">
        <div class="bg-gray-100 p-3 rounded-lg shadow-md">
          <div class="bg-gray-300 w-full h-32 rounded-md"></div>
          <p class="text-gray-600 text-xs md:text-sm mt-2 flex items-center justify-between">
            <span class="flex items-center">
              <i class="far fa-calendar-alt mr-1"></i> dd-mm-yyyy
            </span>
            <span class="flex items-center">
              <i class="far fa-clock mr-1"></i> hh:mm:ss
            </span>
          </p>
          <h4 class="text-[#40531B] font-bold text-sm md:text-base">(Judul Berita)</h4>
        </div>
        <div class="bg-gray-100 p-3 rounded-lg shadow-md">
          <div class="bg-gray-300 w-full h-32 rounded-md"></div>
          <p class="text-gray-600 text-xs md:text-sm mt-2 flex items-center">
            <i class="far fa-calendar-alt mr-1"></i>dd-mm-yyyy
            <span class="ml-auto flex items-center">
              <i class="far fa-clock mr-1"></i>hh:mm:ss
            </span>
          </p>
          <h4 class="text-[#40531B] font-bold text-sm md:text-base">(Judul Berita)</h4>
        </div>
        <div class="bg-gray-100 p-3 rounded-lg shadow-md">
          <div class="bg-gray-300 w-full h-32 rounded-md"></div>
          <p class="text-gray-600 text-xs md:text-sm mt-2 flex items-center">
            <i class="far fa-calendar-alt mr-1"></i>dd-mm-yyyy
            <span class="ml-auto flex items-center">
              <i class="far fa-clock mr-1"></i>hh:mm:ss
            </span>
          </p>
          <h4 class="text-[#40531B] font-bold text-sm md:text-base">(Judul Berita)</h4>
        </div>
        <div class="bg-gray-100 p-3 rounded-lg shadow-md">
          <div class="bg-gray-300 w-full h-32 rounded-md"></div>
          <p class="text-gray-600 text-xs md:text-sm mt-2 flex items-center">
            <i class="far fa-calendar-alt mr-1"></i>dd-mm-yyyy
            <span class="ml-auto flex items-center">
              <i class="far fa-clock mr-1"></i>hh:mm:ss
            </span>
          </p>
          <h4 class="text-[#40531B] font-bold text-sm md:text-base">(Judul Berita)</h4>
        </div>
      </div>
    </div>
    <div class="text-center md:text-right mt-6">
      <button class="bg-[#AFBC88] text-[#40531B] px-6 py-2 rounded-md font-bold shadow-md">
        Berita lainnya &gt;&gt;
      </button>
    </div>
  </div>
  <!-- PENUTUP KONTEN BERITA -->

  <!-- Added margin for spacing between the two sections -->
  <div class="mt-12 md:mt-16"></div>

  <?= $this->endSection() ?>