<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= isset($title) ? $title : 'Default Title'; ?></title>
  <link rel="shortcut icon" href="<?= base_url('assets/img/logo-tk.png'); ?>" type="image/x-icon" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>" />
</head>

<body class="bg-white transition-all duration-300">
  <!-- Popup Iklan -->
  <div id="popupIklan"
    class="fixed inset-0 bg-black bg-opacity-60 flex items-center justify-center z-50 hidden transition-opacity duration-300">

    <div
      class="bg-white rounded-2xl overflow-hidden shadow-2xl relative w-[90%] md:w-[500px] transform scale-95 transition-all duration-300 ease-out border border-gray-200">

      <!-- Tombol Tutup -->
      <button id="tutupPopup" aria-label="Tutup"
        class="absolute top-3 right-3 text-red-500 hover:text-red-600 text-4xl font-bold transition duration-300 z-10 leading-none">
        &times;
      </button>

      <!-- Gambar Iklan -->
      <img src="<?= base_url('assets/img/pendaftaran/pendaftaran-2025.jpg'); ?>" alt="Iklan"
        class="w-full h-auto object-contain transition duration-300" />
    </div>
  </div>

  <!-- NAVBAR START -->
  <nav class="bg-white shadow-md w-full">
    <!-- Desktop Navbar - hidden on mobile screens -->
    <div class="hidden md:flex justify-between items-center py-3 px-6 container mx-auto">
      <!-- Logo & Brand Name -->
      <div class="flex items-center">
        <img src="<?= base_url('assets/img/logo-tk.png'); ?>" alt="RA AR RAYHAN" class="w-12 h-12">
        <div class="ml-3">
          <h1 class="text-[#40531B] font-bold text-lg">RAUDHATUL ATHFAL</h1>
          <h2 class="text-[#40531B] font-bold text-lg">AR-RAYHAN</h2>
        </div>
      </div>

      <!-- Navigation Links -->
      <div class="flex items-center space-x-8">
        <a href="<?= base_url(); ?>" class="text-[#40531B] font-medium hover:text-[#AFBC88] transition-colors">Beranda</a>

        <!-- Tentang Dropdown -->
        <div class="relative group">
          <button class="text-[#40531B] font-medium hover:text-[#AFBC88] transition-colors flex items-center">
            Tentang
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div class="absolute left-0 w-48 bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all z-50">
            <a href="<?= base_url('tentang'); ?>" class="block px-4 py-2 text-[#40531B] hover:bg-[#AFBC88] hover:text-white">
              <i class="fas fa-id-badge mr-2"></i> Profil Yayasan
            </a>
            <a href="#" class="block px-4 py-2 text-[#40531B] hover:bg-[#AFBC88] hover:text-white">
              <i class="fas fa-bullseye mr-2"></i> Visi & Misi
            </a>
            <a href="#" class="block px-4 py-2 text-[#40531B] hover:bg-[#AFBC88] hover:text-white">
              <i class="fas fa-history mr-2"></i> Sejarah
            </a>
            <a href="#" class="block px-4 py-2 text-[#40531B] hover:bg-[#AFBC88] hover:text-white whitespace-nowrap">
              <i class="fas fa-sitemap mr-2"></i> Struktur Organisasi
            </a>
            <a href="#" class="block px-4 py-2 text-[#40531B] hover:bg-[#AFBC88] hover:text-white">
              <i class="fas fa-award mr-2"></i> Penghargaan
            </a>

          </div>
        </div>

        <!-- Media & Informasi Dropdown -->
        <div class="relative group">
          <button class="text-[#40531B] font-medium hover:text-[#AFBC88] transition-colors flex items-center">
            Media & Informasi
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div class="absolute left-0 min-w-[220px] bg-white rounded-md shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all z-50">
            <a href="#" class="block px-4 py-2 text-[#40531B] hover:bg-[#AFBC88] hover:text-white rounded-t-md whitespace-nowrap">
              <i class="fas fa-newspaper mr-2"></i> Berita & Pengumuman
            </a>
            <a href="#" class="block px-4 py-2 text-[#40531B] hover:bg-[#AFBC88] hover:text-white whitespace-nowrap">
              <i class="fas fa-camera mr-2"></i> Dokumentasi Kegiatan
            </a>
            <a href="#" class="block px-4 py-2 text-[#40531B] hover:bg-[#AFBC88] hover:text-white rounded-b-md whitespace-nowrap">
              <i class="fas fa-images mr-2"></i> Galeri
            </a>
          </div>

        </div>
      </div>

      <!-- Search & Theme Toggle -->
      <div class="flex items-center space-x-4">
        <!-- Search Bar -->
        <div class="relative">
          <input type="text" placeholder="Cari" class="pl-4 pr-10 py-2 rounded-lg bg-[#C9D1A9] text-[#40531B] focus:outline-none placeholder-[#40531B]">
          <button class="absolute right-3 top-2.5 text-[#40531B]">
            <i class="fas fa-search"></i>
          </button>
        </div>

        <!-- Dark Mode Toggle -->
        <button id="darkModeToggle" class="relative w-12 h-6 rounded-full bg-[#C9D1A9] flex items-center transition-colors">
          <div id="themeCircle" class="absolute w-5 h-5 bg-[#40531B] rounded-full flex items-center justify-center transition-transform left-0.5">
            <i id="themeIcon" class="fas fa-sun text-white text-xs"></i>
          </div>
        </button>
      </div>
    </div>

    <!-- Mobile Navbar -->
    <div class="md:hidden flex justify-between items-center py-3 px-4">
      <!-- Logo & Brand Name -->
      <div class="flex items-center">
        <img src="<?= base_url('assets/img/logo-tk.png'); ?>" alt="RA AR RAYHAN" class="w-10 h-10">
        <div class="ml-2">
          <h1 class="text-[#40531B] font-bold text-sm">RAUDHATUL ATHFAL</h1>
          <h2 class="text-[#40531B] font-bold text-sm">AR-RAYHAN</h2>
        </div>
      </div>

      <!-- Menu Button -->
      <button id="mobileMenuBtn" class="text-[#40531B] text-xl">
        <i class="fas fa-bars"></i>
      </button>
    </div>

    <!-- Mobile Menu (hidden by default) -->
    <div id="mobileMenu" class="hidden md:hidden bg-white shadow-inner px-4 py-3">
      <!-- Search Bar -->
      <div class="mb-4 relative">
        <input type="text" placeholder="Cari" class="w-full pl-4 pr-10 py-2 rounded-lg bg-[#C9D1A9] text-[#40531B] focus:outline-none placeholder-[#40531B]">
        <button class="absolute right-3 top-2.5 text-[#40531B]">
          <i class="fas fa-search"></i>
        </button>
      </div>

      <!-- Navigation Links -->
      <ul class="space-y-2">
        <li>
          <a href="<?= base_url(); ?>" class="block py-2 text-[#40531B] font-medium">Beranda</a>
        </li>

        <!-- Tentang Dropdown -->
        <li>
          <div class="block">
            <button id="mobileTentangBtn" class="flex items-center justify-between w-full py-2 text-[#40531B] font-medium">
              Tentang
              <i class="fas fa-chevron-down text-sm transition-transform duration-300"></i>
            </button>
            <div id="mobileTentangMenu" class="hidden bg-gray-100 rounded-md mt-1 py-1">
              <a href="<?= base_url('tentang'); ?>" class="block px-4 py-2 text-[#40531B] hover:bg-[#AFBC88] hover:text-white">
                <i class="fas fa-id-badge mr-2"></i> Profil Yayasan
              </a>
              <a href="#" class="block px-4 py-2 text-[#40531B] hover:bg-[#AFBC88] hover:text-white">
                <i class="fas fa-bullseye mr-2"></i> Visi & Misi
              </a>
              <a href="#" class="block px-4 py-2 text-[#40531B] hover:bg-[#AFBC88] hover:text-white">
                <i class="fas fa-history mr-2"></i> Sejarah
              </a>
              <a href="#" class="block px-4 py-2 text-[#40531B] hover:bg-[#AFBC88] hover:text-white">
                <i class="fas fa-sitemap mr-2"></i> Struktur Organisasi
              </a>
              <a href="#" class="block px-4 py-2 text-[#40531B] hover:bg-[#AFBC88] hover:text-white">
                <i class="fas fa-award mr-2"></i> Penghargaan
              </a>

            </div>
          </div>
        </li>

        <!-- Media & Informasi Dropdown -->
        <li>
          <div class="block">
            <button id="mobileMediaBtn" class="flex items-center justify-between w-full py-2 text-[#40531B] font-medium">
              Media & Informasi
              <i class="fas fa-chevron-down text-sm transition-transform duration-300"></i>
            </button>
            <div id="mobileMediaMenu" class="hidden bg-gray-100 rounded-md mt-1 py-1">
              <a href="#" class="block px-4 py-2 text-[#40531B] hover:bg-[#AFBC88] hover:text-white">
                <i class="fas fa-newspaper mr-2"></i>Berita & Pengumuman
              </a>
              <a href="#" class="block px-4 py-2 text-[#40531B] hover:bg-[#AFBC88] hover:text-white">
                <i class="fas fa-camera mr-2"></i>Dokumentasi Kegiatan
              </a>
              <a href="#" class="block px-4 py-2 text-[#40531B] hover:bg-[#AFBC88] hover:text-white">
                <i class="fas fa-images mr-2"></i>Galeri
              </a>
            </div>
          </div>
        </li>
      </ul>

      <!-- Dark Mode Toggle -->
      <div class="mt-4 flex justify-center">
        <button id="mobileDarkModeToggle" class="relative w-12 h-6 rounded-full bg-[#C9D1A9] flex items-center transition-colors">
          <div id="mobileThemeCircle" class="absolute w-5 h-5 bg-[#40531B] rounded-full flex items-center justify-center transition-transform left-0.5">
            <i id="mobileThemeIcon" class="fas fa-sun text-white text-xs"></i>
          </div>
        </button>
      </div>
    </div>
  </nav>
  <!-- NAVBAR END -->

  <!-- KONTEN UTAMA -->
  <?= $this->renderSection('konten'); ?>
  <?= $this->renderSection('tentang'); ?>
  <?= $this->renderSection('media-informasi'); ?>
  <?= $this->renderSection('berita'); ?>
  <?= $this->renderSection('galeri'); ?>
  <?= $this->renderSection('kontak'); ?>

  <!-- Tombol WhatsApp Melayang -->
  <button onclick="window.open('https://api.whatsapp.com/send?phone=+6285297629760', '_blank')"
    class="fixed bottom-5 right-5 bg-[#AFBC88] text-[#40531B] px-4 py-2 rounded-full flex items-center font-bold shadow-lg hover:scale-105 transition-all z-50">
    Hubungi Kami <i class="fas fa-phone-alt ml-2"></i>
  </button>
  <!-- FOOTER -->
  <footer class="bg-[#AFBC88] py-8 mt-10">
    <div class="container mx-auto flex flex-col md:flex-row justify-between items-center px-6 md:px-10 gap-8">

      <!-- Logo & Media Sosial -->
      <div class="flex flex-col items-center text-[#40531B] w-full md:w-auto">
        <img src="<?= base_url('assets/img/arrayhan.jpg'); ?>" alt="Yayasan Ar-Rayhan" class="w-32 h-32 md:w-36 md:h-36 rounded-md mx-auto" />
        <h3 class="font-bold text-lg md:text-xl mt-2">RA AR RAYHAN</h3>
        <p class="text-sm md:text-md font-semibold mt-1">Akreditasi A</p>
        <p class="text-sm md:text-md">NPSN: 69730224</p>
        <div class="flex space-x-4 mt-3 text-lg">
          <a href="https://www.facebook.com/groups/1425422257763597/?ref=share&mibextid=KtfwRi" class="text-[#40531B]" title="RA AR RAYHAN MEDAN"><i class="fab fa-facebook"></i></a>
          <a href="https://www.instagram.com/raarrayhanmedan/" class="text-[#40531B]" title="RA AR RAYHAN MEDAN"><i class="fab fa-instagram"></i></a>
          <a href="https://www.youtube.com/@raarrayhanmedan8966" class="text-[#40531B]" title="RA AR RAYHAN MEDAN"><i class="fab fa-youtube"></i></a>
          <a href="https://www.tiktok.com/@raarrayhanmedan" class="text-[#40531B]" title="RA AR RAYHAN MEDAN"><i class="fab fa-tiktok"></i></a>
        </div>
      </div>

      <!-- Informasi Kontak -->
      <div class="text-[#40531B] w-full md:w-1/3 text-center md:text-left">
        <h3 class="font-bold text-lg">HUBUNGI KAMI</h3>
        <p class="text-sm mt-2"><span class="font-bold">Alamat:</span></p>
        <p class="text-sm">Jl. Denai No.190, Tegal Sari Mandala II, Kec. Medan Denai, Kota Medan, Sumatera Utara 20371</p>
        <p class="text-sm mt-2"><span class="font-bold">Facebook:</span> RA AR RAYHAN MEDAN</p>
        <p class="text-sm mt-2"><span class="font-bold">Instagram:</span> raarrayhanmedan</p>
        <p class="text-sm mt-2"><span class="font-bold">Tiktok:</span> raarrayhanmedan</p>
        <p class="text-sm mt-2"><span class="font-bold">WhatsApp:</span> +62-852-9762-9760</p>
        <p class="text-sm mt-2"><span class="font-bold">Jam Kerja:</span> Senin s.d Sabtu (07:00 - 11:00)</p>
      </div>

      <!-- Peta -->
      <div class="w-full md:w-80 h-60 overflow-hidden rounded-md shadow-md">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.02673007597!2d98.71671361044143!3d3.5813339963777824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031311dda44a97d%3A0x7657fa00baf15d42!2sRaudhatul%20Athfal%20(RA)%20Ar%20Rayhan!5e0!3m2!1sid!2sid!4v1743242815096!5m2!1sid!2sid"
          width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>

    </div>
  </footer>

  <!-- Copyright -->
  <div class="bg-[#99A574] text-center text-[#40531B] text-md font-bold py-4 w-full">
    Copyright © 2025 - RA AR RAYHAN
  </div>

  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script>
    // Sample search data - in a real implementation, this would come from your database
    const searchData = [{
        title: "Profil Yayasan",
        url: "<?= base_url('tentang') ?>",
        category: "Tentang"
      },
      {
        title: "Visi & Misi",
        url: "#",
        category: "Tentang"
      },
      {
        title: "Sejarah",
        url: "#",
        category: "Tentang"
      },
      {
        title: "Struktur Organisasi",
        url: "#",
        category: "Tentang"
      },
      {
        title: "Penghargaan",
        url: "#",
        category: "Tentang"
      },
      {
        title: "Berita Terbaru",
        url: "#",
        category: "Media"
      },
      {
        title: "Pengumuman PPDB 2025",
        url: "#",
        category: "Media"
      },
      {
        title: "Kegiatan Hari Kartini",
        url: "#",
        category: "Media"
      },
      {
        title: "Galeri Foto Wisuda",
        url: "#",
        category: "Media"
      },
      {
        title: "Jadwal Pembelajaran",
        url: "#",
        category: "Akademik"
      },
      {
        title: "Fasilitas Sekolah",
        url: "#",
        category: "Fasilitas"
      },
      {
        title: "Program Unggulan",
        url: "#",
        category: "Program"
      },
      {
        title: "Prestasi Siswa",
        url: "#",
        category: "Prestasi"
      },
      {
        title: "Kontak Kami",
        url: "#",
        category: "Kontak"
      }
    ];

    // Check localStorage for dark mode setting when the page loads
    document.addEventListener('DOMContentLoaded', function() {
      // Check if darkMode exists in localStorage
      if (localStorage.getItem('darkMode') === 'enabled') {
        applyDarkMode(true);
      } else {
        applyDarkMode(false);
      }

      // Show popup automatically after 2 seconds
      setTimeout(() => {
        const popup = document.getElementById('popupIklan');
        popup.classList.remove('hidden');
        popup.classList.add('opacity-100', 'scale-100');
      }, 2000);

      // Mobile menu toggle
      document.getElementById('mobileMenuBtn').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobileMenu');
        mobileMenu.classList.toggle('hidden');
      });

      // Mobile Tentang dropdown toggle
      document.getElementById('mobileTentangBtn').addEventListener('click', function() {
        const mobileTentangMenu = document.getElementById('mobileTentangMenu');
        mobileTentangMenu.classList.toggle('hidden');

        // Rotate arrow icon
        const arrow = this.querySelector('.fa-chevron-down');
        arrow.classList.toggle('rotate-180');
      });

      // Mobile Media & Informasi dropdown toggle
      document.getElementById('mobileMediaBtn').addEventListener('click', function() {
        const mobileMediaMenu = document.getElementById('mobileMediaMenu');
        mobileMediaMenu.classList.toggle('hidden');

        // Rotate arrow icon
        const arrow = this.querySelector('.fa-chevron-down');
        arrow.classList.toggle('rotate-180');
      });

      // Dark mode toggle functionality for desktop
      document.getElementById('darkModeToggle').addEventListener('click', function() {
        toggleDarkMode();
      });

      // Dark mode toggle functionality for mobile
      document.getElementById('mobileDarkModeToggle').addEventListener('click', function() {
        toggleDarkMode();
      });

      // Set up search functionality for desktop
      const searchInput = document.getElementById('searchInput');
      const searchResults = document.getElementById('searchResults');
      const searchBtn = document.getElementById('searchBtn');

      // Function to handle search
      function performSearch(input, resultsContainer) {
        const query = input.value.toLowerCase().trim();

        if (query.length < 2) {
          resultsContainer.classList.add('hidden');
          return;
        }

        // Filter search data based on query
        const filteredResults = searchData.filter(item =>
          item.title.toLowerCase().includes(query) ||
          item.category.toLowerCase().includes(query)
        );

        // Clear previous results
        resultsContainer.innerHTML = '';

        if (filteredResults.length === 0) {
          const noResultsItem = document.createElement('div');
          noResultsItem.className = 'px-4 py-3 text-gray-500 italic';
          noResultsItem.textContent = 'Tidak ada hasil yang ditemukan';
          resultsContainer.appendChild(noResultsItem);
        } else {
          // Group results by category
          const groupedResults = {};
          filteredResults.forEach(item => {
            if (!groupedResults[item.category]) {
              groupedResults[item.category] = [];
            }
            groupedResults[item.category].push(item);
          });

          // Display grouped results
          Object.keys(groupedResults).forEach(category => {
            const categoryHeader = document.createElement('div');
            categoryHeader.className = 'px-4 py-2 bg-gray-100 font-bold text-[#40531B]';
            categoryHeader.textContent = category;
            resultsContainer.appendChild(categoryHeader);

            groupedResults[category].forEach(item => {
              const resultItem = document.createElement('a');
              resultItem.href = item.url;
              resultItem.className = 'block px-4 py-2 hover:bg-[#AFBC88] transition-colors duration-200';

              // Highlight matching text
              const titleText = item.title;
              const highlightedTitle = titleText.replace(
                new RegExp(query, 'gi'),
                match => `<span class="bg-yellow-200">${match}</span>`
              );

              resultItem.innerHTML = highlightedTitle;
              resultsContainer.appendChild(resultItem);
            });
          });
        }

        // Show results container
        resultsContainer.classList.remove('hidden');
      }
    });

    // Tombol tutup popup
    document.getElementById('tutupPopup').addEventListener('click', () => {
      const popup = document.getElementById('popupIklan');
      popup.classList.add('hidden');
    });

    // Update tanggal dan waktu dengan detik
    function updateDateTime() {
      const dateTimeElement = document.getElementById('dateTime');
      if (!dateTimeElement) return;

      const now = new Date();
      const formatted = now.toLocaleString('id-ID', {
        dateStyle: 'full',
        timeStyle: 'medium' // tampilkan jam:menit:detik
      });
      dateTimeElement.textContent = formatted;
    }

    updateDateTime();
    setInterval(updateDateTime, 1000); // update setiap 1 detik

    // Common Dark Mode Function
    function toggleDarkMode() {
      // Check if darkMode is currently enabled
      const isDarkMode = localStorage.getItem('darkMode') === 'enabled';

      // Toggle the darkMode in localStorage
      if (isDarkMode) {
        localStorage.setItem('darkMode', 'disabled');
        applyDarkMode(false);
      } else {
        localStorage.setItem('darkMode', 'enabled');
        applyDarkMode(true);
      }
    }

    // Function to apply dark mode based on state
    function applyDarkMode(enable) {
      let body = document.body;
      let navbar = document.getElementById("navbar");
      let themeCircle = document.getElementById("themeCircle");
      let themeIcon = document.getElementById("themeIcon");
      let mobileThemeCircle = document.getElementById("mobileThemeCircle");
      let mobileThemeIcon = document.getElementById("mobileThemeIcon");

      if (enable) {
        // Enable dark mode
        body.classList.add("bg-gray-900");
        body.classList.remove("bg-white");

        // Also update search results appearance for dark mode
        const searchResults = document.getElementById('searchResults');
        const mobileSearchResults = document.getElementById('mobileSearchResults');

        if (searchResults) {
          searchResults.classList.add('bg-gray-800', 'text-white');
          searchResults.classList.remove('bg-white');
        }

        if (mobileSearchResults) {
          mobileSearchResults.classList.add('bg-gray-800', 'text-white');
          mobileSearchResults.classList.remove('bg-white');
        }

        if (themeCircle) {
          themeCircle.classList.add("translate-x-6");
          themeIcon.classList.replace("fa-sun", "fa-moon");
        }
        if (mobileThemeCircle) {
          mobileThemeCircle.classList.add("translate-x-6");
          mobileThemeIcon.classList.replace("fa-sun", "fa-moon");
        }
      } else {
        // Disable dark mode
        body.classList.remove("bg-gray-900");
        body.classList.add("bg-white");

        // Update search results appearance for light mode
        const searchResults = document.getElementById('searchResults');
        const mobileSearchResults = document.getElementById('mobileSearchResults');

        if (searchResults) {
          searchResults.classList.remove('bg-gray-800', 'text-white');
          searchResults.classList.add('bg-white');
        }

        if (mobileSearchResults) {
          mobileSearchResults.classList.remove('bg-gray-800', 'text-white');
          mobileSearchResults.classList.add('bg-white');
        }

        if (themeCircle) {
          themeCircle.classList.remove("translate-x-6");
          themeIcon.classList.replace("fa-moon", "fa-sun");
        }
        if (mobileThemeCircle) {
          mobileThemeCircle.classList.remove("translate-x-6");
          mobileThemeIcon.classList.replace("fa-moon", "fa-sun");
        }
      }
    }

    // Close dropdowns when clicking outside
    document.addEventListener('click', function(event) {
      // Close search results when clicking outside
      const searchInput = document.getElementById('searchInput');
      const searchResults = document.getElementById('searchResults');

      if (searchInput && searchResults && !searchInput.contains(event.target) && !searchResults.contains(event.target)) {
        searchResults.classList.add('hidden');
      }

      const mobileSearchInput = document.getElementById('mobileSearchInput');
      const mobileSearchResults = document.getElementById('mobileSearchResults');

      if (mobileSearchInput && mobileSearchResults && !mobileSearchInput.contains(event.target) && !mobileSearchResults.contains(event.target)) {
        mobileSearchResults.classList.add('hidden');
      }
    });
  </script>
</body>

</html>