<?= $this->extend('layout/arrayhan'); ?>

<?= $this->section('berita'); ?>

<div class="mt-12 md:mt-16"></div>
<div class="flex flex-col items-center space-y-4 mx-6 mb-16">
  <img src="<?= base_url('assets/img/tk-arrayhan.png'); ?>" alt="RA AR RAYHAN" class="w-40 h-40 md:w-60 md:h-60" />
  <div class="text-center self-center">
    <h1 class="text-[#40531B] text-4xl md:text-6xl font-bold leading-tight">RAUDHATUL ATHFAL</h1>
    <h1 class="text-[#40531B] text-4xl md:text-6xl font-bold leading-tight">AR RAYHAN</h1>
  </div>
</div>

<!-- ISI KONTEN BERITA -->
<div class="flex items-center justify-between my-6 px-4 md:px-0">
  <!-- Garis Kiri (Menyambung ke tepi) -->
  <div class="flex flex-col space-y-1 w-full">
    <div class="border-t-[2px] border-[#40531B] w-[85%]"></div>
    <div class="border-t-[2px] border-[#40531B] w-full"></div>
    <div class="border-t-[2px] border-[#40531B] w-[85%]"></div>
  </div>

  <!-- Teks di Tengah -->
  <h2 class="text-[#40531B] text-2xl md:text-4xl font-bold mx-3 md:mx-6 whitespace-nowrap">Galeri RA AR RAYHAN</h2>

  <!-- Garis Kanan (Tetap panjang) -->
  <div class="flex flex-col space-y-1 w-full">
    <div class="border-t-[2px] border-[#40531B] ml-[15%]"></div>
    <div class="border-t-[2px] border-[#40531B] ml-full"></div>
    <div class="border-t-[2px] border-[#40531B] ml-[15%]"></div>
  </div>
</div>

<!-- Kartu Galeri -->
<div class="grid grid-cols-2 md:grid-cols-3 gap-6 px-4 md:px-20">
  <?php for ($i = 0; $i < 6; $i++): ?>
    <div class="bg-gray-300 h-40 relative">
      <div class="absolute bottom-0 left-0 right-0 bg-[#A3B76D] text-center text-sm text-[#40531B] p-1">
        <div class="flex justify-between items-center px-2">
          <span>dd-mm-yyyy</span>
          <span><i class="fas fa-image"></i> =15</span>
          <span>+2</span>
        </div>
        <p class="font-semibold">(Judul Galeri)</p>
      </div>
    </div>
  <?php endfor; ?>
</div>

<!-- Tombol Navigasi Bawah -->
<div class="flex justify-end px-6 md:px-20 mt-6 mb-10">
  <button class="bg-[#40531B] text-white px-4 py-2 rounded font-bold">
    <i class="fas fa-angle-double-right"></i>
  </button>
</div>

<!-- Judul Berita -->
<div class="flex items-center justify-between my-6 px-4 md:px-0">
  <div class="flex flex-col space-y-1 w-full">
    <div class="border-t-[2px] border-[#40531B] w-[85%]"></div>
    <div class="border-t-[2px] border-[#40531B] w-full"></div>
    <div class="border-t-[2px] border-[#40531B] w-[85%]"></div>
  </div>

  <h2 class="text-[#40531B] text-2xl md:text-4xl font-bold mx-3 md:mx-6 whitespace-nowrap">
    Berita RA AR RAYHAN
  </h2>

  <div class="flex flex-col space-y-1 w-full">
    <div class="border-t-[2px] border-[#40531B] ml-[15%]"></div>
    <div class="border-t-[2px] border-[#40531B] ml-full"></div>
    <div class="border-t-[2px] border-[#40531B] ml-[15%]"></div>
  </div>
</div>

<!-- ISI KONTEN BERITA -->
<div class="px-4 md:px-20 mb-16">
  <div class="flex flex-col md:flex-row gap-6">
    <!-- Gambar Berita -->
    <div class="w-full md:w-1/2">
      <img src="<?= base_url('assets/img/contoh-berita.jpg'); ?>" alt="Gambar Berita" class="w-full h-full object-cover bg-gray-300" />
    </div>

    <!-- Konten Berita -->
    <div class="w-full md:w-1/2 flex flex-col justify-between">
      <div>
        <h3 class="text-xl md:text-2xl font-bold text-[#40531B]">(Judul Berita)</h3>
        <div class="flex justify-end items-center space-x-4 text-sm text-gray-500 mt-1">
          <span>dd-mm-yyyy</span>
          <span><i class="fas fa-clock"></i> hh:mm:ss</span>
        </div>

        <p class="text-justify text-sm md:text-base mt-4 text-gray-700 leading-relaxed">
          Lorem ipsum dolor sit amet. Aut debitis libero eum doloribus modi est delectus labore qui internos nemo ab nihil accusamus qui velit quibusdam?
          Eum amet magni ad enim quasi id voluptatibus recusandae sed exercitationem optio sed veniam exercitationem. Vel placeat esse est dignissimos sequi vel quasi totam vel cumque deserunt! Quo eaque cumque aut quam mollitia et vitae eligendi sit voluptatem quidem et sunt illum ad repellat temporibus.
        </p>
        <p class="text-justify text-sm md:text-base mt-2 text-gray-700 leading-relaxed">
          Lorem ipsum dolor sit amet. Aut debitis libero eum doloribus modi est delectus labore qui internos nemo ab nihil accusamus qui velit quibusdam?
          Eum amet magni ad enim quasi id voluptatibus recusandae sed exercitationem optio sed veniam exercitationem.
        </p>
      </div>
    </div>
  </div>

  <!-- Isi berita lanjutan -->
  <div class="mt-6 space-y-4 text-sm md:text-base text-gray-700 leading-relaxed">
    <p>Lorem ipsum dolor sit amet. Aut debitis libero eum doloribus modi est delectus labore qui internos nemo ab nihil accusamus qui velit quibusdam? Eum amet magni ad enim quasi id voluptatibus recusandae sed exercitationem optio sed veniam exercitationem. Vel placeat esse est dignissimos sequi vel quasi totam vel cumque deserunt! Quo eaque cumque aut quam mollitia et vitae eligendi sit voluptatem quidem et sunt illum ad repellat temporibus.</p>

    <p>Lorem ipsum dolor sit amet. Aut debitis libero eum doloribus modi est delectus labore qui internos nemo ab nihil accusamus qui velit quibusdam? Eum amet magni ad enim quasi id voluptatibus recusandae sed exercitationem optio sed veniam exercitationem. Vel placeat esse est dignissimos sequi vel quasi totam vel cumque deserunt! Quo eaque cumque aut quam mollitia et vitae eligendi sit voluptatem quidem et sunt illum ad repellat temporibus.</p>
  </div>
</div>
<!-- End -->

<div class="space-y-6 px-4 md:px-20 mb-10" id="newsContainer">
  <?php for ($i = 0; $i < 4; $i++): ?>
    <div class="bg-[#A3B76D] flex flex-col md:flex-row items-start rounded-md p-4 md:p-6 relative">

      <!-- Gambar Kiri -->
      <div class="w-full md:w-1/4 h-36 md:h-40 bg-gray-300 rounded-md mr-0 md:mr-6 mb-4 md:mb-0"></div>

      <!-- Konten Berita -->
      <div class="flex-1 relative w-full">

        <!-- Tanggal & Waktu (pojok kanan atas berdampingan) -->
        <div class="absolute top-0 right-0 flex items-center space-x-2 text-sm text-[#40531B]">
          <span>dd-mm-yyyy</span>
          <span>@hh:mm:ss</span>
        </div>

        <!-- Judul -->
        <h3 class="text-[#40531B] font-bold text-lg md:text-xl mb-2">(Judul Berita)</h3>

        <!-- Deskripsi Singkat -->
        <p class="text-[#40531B] text-sm leading-relaxed pr-20 md:pr-24">
          Lorem ipsum dolor sit amet. Aut debitis libero eum doloribus modi est delectus labore qui internos nemo ab nihil accusamus vel... Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores incidunt at optio nisi. Tempora dignissimos rerum dolores vero sequi obcaecati dicta, ea hic odio quisquam exercitationem a enim cumque eveniet! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda corrupti adipisci, animi quam accusamus, totam voluptas architecto, tempora pariatur libero error. Libero magni pariatur tempora repellendus rerum tempore excepturi assumenda!
        </p>

        <!-- Tombol Baca Selengkapnya -->
        <div class="absolute bottom-0 right-0">
          <a href="#" class="bg-[#40531B] text-white text-[11px] px-2 py-1 rounded hover:bg-[#2f3d15] transition">
            Baca Selengkapnya...
          </a>
        </div>
      </div>
    </div>
  <?php endfor; ?>
</div>

<!-- Navigasi Panah Berita -->
<div class="flex justify-center items-center space-x-4 mt-4 mb-12">
  <!-- Panah Kiri -->
  <button id="prevNewsPage" class="bg-[#40531B] text-white px-4 py-2 rounded-full shadow hover:bg-[#2f3d15] transition">
    <i class="fas fa-chevron-left"></i>
  </button>

  <!-- Nomor Halaman (optional jika pakai pagination dinamis nanti) -->
  <span id="newsPageIndicator" class="text-[#40531B] font-semibold">1 / 3</span>

  <!-- Panah Kanan -->
  <button id="nextNewsPage" class="bg-[#40531B] text-white px-4 py-2 rounded-full shadow hover:bg-[#2f3d15] transition">
    <i class="fas fa-chevron-right"></i>
  </button>
</div>

<!-- Script Galeri Slider -->
<script>
  // News Navigation Script
  document.addEventListener('DOMContentLoaded', function() {
    // Get the navigation elements
    const prevButton = document.getElementById('prevNewsPage');
    const nextButton = document.getElementById('nextNewsPage');
    const pageIndicator = document.getElementById('newsPageIndicator');

    // Get the news container
    const newsContainer = document.getElementById('newsContainer');

    // Get all news items
    const newsItems = Array.from(newsContainer.querySelectorAll('.bg-\\[\\#A3B76D\\].flex'));

    // Number of items per page
    const itemsPerPage = 4;

    // total items and pages
    const totalItems = 12; // Ini adalah jumlah total berita asli
    const totalPages = Math.ceil(totalItems / itemsPerPage);

    // Ini untuk menyimpan halaman saat ini
    let currentPage = 1;

    // ini untuk menyimpan berita asli agar bisa digunakan kembali
    const originalNews = newsItems.map(item => item.cloneNode(true));

    // hasilkan berita tiruan untuk halaman saat ini
    function generateDummyNews(pageNum) {
      return originalNews.map((item, index) => {
        const clone = item.cloneNode(true);
        const title = clone.querySelector('h3');
        if (title) {
          title.textContent = `(Judul Berita Halaman ${pageNum} - Item ${index + 1})`;
        }
        return clone;
      });
    }

    // Function Perbarui Halaman
    function updatePage() {
      // Perbaruhi indikator halaman
      pageIndicator.textContent = `${currentPage} / ${totalPages}`;

      // Membersihkan konten berita yang ada
      while (newsContainer.firstChild) {
        newsContainer.removeChild(newsContainer.firstChild);
      }

      // Hasilkan berita baru berdasarkan halaman saat ini
      // Jika halaman pertama, tampilkan berita asli
      // Jika tidak, hasilkan berita tiruan untuk halaman saat ini
      let newsToShow;

      if (currentPage === 1) {
        newsToShow = originalNews;
      } else {
        newsToShow = generateDummyNews(currentPage);
      }

      // Tambahkan item berita ke wadah
      newsToShow.forEach(item => {
        newsContainer.appendChild(item);
      });
    }

    // Tambah klik event untuk tombol sebelumnya
    prevButton.addEventListener('click', function() {
      if (currentPage > 1) {
        currentPage--;
        updatePage();
      }
    });

    // Tambah klik event untuk tombol berikutnya
    nextButton.addEventListener('click', function() {
      if (currentPage < totalPages) {
        currentPage++;
        updatePage();
      }
    });

    // Inisialisasi halaman pertama
    updatePage();
  });
</script>

<?= $this->endSection(); ?>