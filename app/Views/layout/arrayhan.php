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

  <!-- Mobile Menu Button (visible only on small screens) -->
  <div class="md:hidden flex justify-between items-center py-3 px-6 bg-white shadow-md">
    <div class="flex items-center">
      <img src="<?= base_url('assets/img/tk-arrayhan.png'); ?>" alt="RA AR RAYHAN" class="w-10 h-10" />
      <h1 class="ml-2 text-[#40531B] font-bold">RAUDHATUL ATHFAL AR RAYHAN</h1>
    </div>
    <button id="mobileMenuBtn" class="text-[#40531B] text-xl">
      <i class="fas fa-bars"></i>
    </button>
  </div>

  <!-- Mobile Menu (hidden by default) -->
  <div id="mobileMenu" class="hidden md:hidden bg-white shadow-md px-6 py-4">
    <div class="mb-4 relative">
      <input type="text" id="mobileSearchInput"
        class="w-full pl-4 pr-10 py-2 rounded-md text-[#40531B] bg-[#AFBC88] focus:outline-none placeholder-[#40531B] placeholder:font-bold"
        placeholder="Cari" />
      <button id="mobileSearchBtn" class="absolute right-3 top-2 text-[#40531B]">
        <i class="fas fa-search"></i>
      </button>
      <!-- Mobile Search Results -->
      <div id="mobileSearchResults" class="hidden absolute z-10 top-full left-0 right-0 mt-1 bg-white rounded-md shadow-lg max-h-64 overflow-y-auto">
        <!-- Search results will be populated here -->
      </div>
    </div>

    <div class="space-y-4">
      <div>
        <button class="w-full text-left font-bold text-[#40531B] py-2 flex justify-between items-center"
          id="mobileTentangBtn">
          Tentang <i class="fas fa-chevron-down"></i>
        </button>
        <ul id="mobileTentangMenu" class="hidden bg-gray-100 rounded-md mt-1 py-2">
          <li><a href="<?= base_url('tentang') ?>" class="block px-4 py-2 hover:bg-[#AFBC88] rounded-md">Profil Yayasan</a></li>
          <li><a href="#" class="block px-4 py-2 hover:bg-[#AFBC88] rounded-md">Visi & Misi</a></li>
          <li><a href="#" class="block px-4 py-2 hover:bg-[#AFBC88] rounded-md">Sejarah</a></li>
          <li><a href="#" class="block px-4 py-2 hover:bg-[#AFBC88] rounded-md">Struktur Organisasi</a></li>
          <li><a href="#" class="block px-4 py-2 hover:bg-[#AFBC88] rounded-md">Penghargaan</a></li>
        </ul>
      </div>

      <div>
        <button class="w-full text-left font-bold text-[#40531B] py-2 flex justify-between items-center"
          id="mobileMediaBtn">
          Media & Informasi <i class="fas fa-chevron-down"></i>
        </button>
        <ul id="mobileMediaMenu" class="hidden bg-gray-100 rounded-md mt-1 py-2">
          <li><a href="#" class="block px-4 py-2 hover:bg-[#AFBC88] rounded-md"><i class="fas fa-newspaper mr-2"></i>
              Berita & Pengumuman</a></li>
          <li><a href="#" class="block px-4 py-2 hover:bg-[#AFBC88] rounded-md"><i class="fas fa-camera mr-2"></i>
              Dokumentasi Kegiatan</a></li>
          <li><a href="#" class="block px-4 py-2 hover:bg-[#AFBC88] rounded-md"><i class="fas fa-images mr-2"></i>
              Galeri</a></li>
        </ul>
      </div>

      <button onclick="window.open('https://api.whatsapp.com/send?phone=+6285297629760', '_blank')"
        class="w-full bg-[#AFBC88] text-[#40531B] px-4 py-2 rounded-md flex items-center justify-center font-bold">
        Kontak <i class="fas fa-phone-alt ml-2"></i>
      </button>


      <div class="flex justify-center">
        <button id="mobileDarkModeToggle"
          class="relative w-16 h-8 bg-[#AFBC88] rounded-full flex items-center transition-all duration-300">
          <div id="mobileToggleCircle"
            class="absolute left-1 w-6 h-6 bg-[#40531B] rounded-full flex items-center justify-center transition-all duration-300">
            <i id="mobileToggleIcon" class="fas fa-sun text-white"></i>
          </div>
        </button>
      </div>
    </div>
  </div>

  <!-- Desktop navbar (hidden on small screens) -->
  <nav id="navbar"
    class="hidden md:flex bg-white py-3 shadow-md items-center justify-between px-6 transition-all duration-300">
    <div class="relative flex items-center space-x-6">
      <div class="relative">
        <input type="text" id="searchInput"
          class="pl-4 pr-10 py-2 rounded-md text-[#40531B] bg-[#AFBC88] focus:outline-none placeholder-[#40531B] placeholder:font-bold"
          placeholder="Cari" />
        <button id="searchBtn" class="absolute right-3 top-2 text-[#40531B]">
          <i class="fas fa-search"></i>
        </button>
        <!-- Desktop Search Results -->
        <div id="searchResults" class="hidden absolute z-10 top-full left-0 right-0 mt-1 bg-white rounded-md shadow-lg max-h-64 overflow-y-auto w-full">
          <!-- Search results will be populated here -->
        </div>
      </div>
      <ul class="flex items-center space-x-6">
        <li class="relative">
          <button id="tentangButton" class="font-bold text-[#40531B] px-4 py-2 rounded-t-lg focus:outline-none">
            Tentang
          </button>
          <ul id="tentangDropdown"
            class="absolute hidden bg-[#40531B] text-white py-2 rounded-b-lg shadow-lg min-w-[200px] z-50 w-full">
            <li>
              <a href="<?= base_url('tentang') ?>" class="block px-4 py-2 hover:bg-[#AFBC88] rounded-md">Profil Yayasan</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-[#AFBC88] rounded-md">Visi & Misi</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-[#AFBC88] rounded-md">Sejarah</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-[#AFBC88] rounded-md">Struktur Organisasi</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-[#AFBC88] rounded-md">Penghargaan</a>
            </li>
          </ul>
        </li>
        <li class="relative">
          <button id="mediaButton" class="font-bold text-[#40531B] px-4 py-2 rounded-t-lg focus:outline-none">
            Media & Informasi
          </button>
          <ul id="mediaDropdown"
            class="absolute hidden bg-[#40531B] text-white py-2 rounded-b-lg shadow-lg min-w-[230px] z-50 w-full">
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-[#AFBC88] rounded-md"><i class="fas fa-newspaper mr-2"></i>
                Berita & Pengumuman</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-[#AFBC88] rounded-md"><i class="fas fa-camera mr-2"></i>
                Dokumentasi Kegiatan</a>
            </li>
            <li>
              <a href="#" class="block px-4 py-2 hover:bg-[#AFBC88] rounded-md"><i class="fas fa-images mr-2"></i>
                Galeri</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="flex space-x-3 items-center">
      <button onclick="window.open('https://api.whatsapp.com/send?phone=+6285297629760', '_blank')"
        class="bg-[#AFBC88] text-[#40531B] px-4 py-2 rounded-md flex items-center font-bold">
        Kontak <i class="fas fa-phone-alt ml-2"></i>
      </button>
      <button id="darkModeToggle"
        class="relative w-16 h-8 bg-[#AFBC88] rounded-full flex items-center transition-all duration-300">
        <div id="toggleCircle"
          class="absolute left-1 w-6 h-6 bg-[#40531B] rounded-full flex items-center justify-center transition-all duration-300">
          <i id="toggleIcon" class="fas fa-sun text-white"></i>
        </div>
      </button>
    </div>
  </nav>
  <!-- Penutup Navbar -->

  <!-- Ini ada di dalam layout arrayhan.php -->
  <!-- KONTEN UTAMA -->
  <?= $this->renderSection('konten'); ?>
  <?= $this->renderSection('tentang'); ?>
  <?= $this->renderSection('media-informasi'); ?>
  <?= $this->renderSection('berita'); ?>
  <?= $this->renderSection('galeri'); ?>
  <?= $this->renderSection('kontak'); ?>

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

  <script>
    // Sample search data - in a real implementation, this would come from your database
    const searchData = [
      { title: "Profil Yayasan", url: "<?= base_url('tentang') ?>", category: "Tentang" },
      { title: "Visi & Misi", url: "#", category: "Tentang" },
      { title: "Sejarah", url: "#", category: "Tentang" },
      { title: "Struktur Organisasi", url: "#", category: "Tentang" },
      { title: "Penghargaan", url: "#", category: "Tentang" },
      { title: "Berita Terbaru", url: "#", category: "Media" },
      { title: "Pengumuman PPDB 2025", url: "#", category: "Media" },
      { title: "Kegiatan Hari Kartini", url: "#", category: "Media" },
      { title: "Galeri Foto Wisuda", url: "#", category: "Media" },
      { title: "Jadwal Pembelajaran", url: "#", category: "Akademik" },
      { title: "Fasilitas Sekolah", url: "#", category: "Fasilitas" },
      { title: "Program Unggulan", url: "#", category: "Program" },
      { title: "Prestasi Siswa", url: "#", category: "Prestasi" },
      { title: "Kontak Kami", url: "#", category: "Kontak" }
    ];

    // Check localStorage for dark mode setting when the page loads
    document.addEventListener('DOMContentLoaded', function() {
      // Check if darkMode exists in localStorage
      if (localStorage.getItem('darkMode') === 'enabled') {
        applyDarkMode(true);
      } else {
        applyDarkMode(false);
      }
      
      // munculkan popup otomatis setelah 2 detik
      setTimeout(() => {
        const popup = document.getElementById('popupIklan');
        popup.classList.remove('hidden');
        popup.classList.add('opacity-100', 'scale-100');
      }, 2000);

      // Set up search functionality for desktop
      const searchInput = document.getElementById('searchInput');
      const searchResults = document.getElementById('searchResults');
      const searchBtn = document.getElementById('searchBtn');

      // Set up search functionality for mobile
      const mobileSearchInput = document.getElementById('mobileSearchInput');
      const mobileSearchResults = document.getElementById('mobileSearchResults');
      const mobileSearchBtn = document.getElementById('mobileSearchBtn');

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

      // Desktop search event listeners
      searchInput.addEventListener('focus', () => {
        if (searchInput.value.length >= 2) {
          performSearch(searchInput, searchResults);
        }
      });

      searchInput.addEventListener('input', () => {
        performSearch(searchInput, searchResults);
      });

      searchBtn.addEventListener('click', () => {
        performSearch(searchInput, searchResults);
      });

      // Mobile search event listeners
      if (mobileSearchInput) {
        mobileSearchInput.addEventListener('focus', () => {
          if (mobileSearchInput.value.length >= 2) {
            performSearch(mobileSearchInput, mobileSearchResults);
          }
        });

        mobileSearchInput.addEventListener('input', () => {
          performSearch(mobileSearchInput, mobileSearchResults);
        });

        mobileSearchBtn.addEventListener('click', () => {
          performSearch(mobileSearchInput, mobileSearchResults);
        });
      }

      // Close search results when clicking outside
      document.addEventListener('click', (event) => {
        if (!searchInput.contains(event.target) && !searchResults.contains(event.target)) {
          searchResults.classList.add('hidden');
        }
        
        if (mobileSearchInput && !mobileSearchInput.contains(event.target) && !mobileSearchResults.contains(event.target)) {
          mobileSearchResults.classList.add('hidden');
        }
      });

      // Handle Enter key press
      searchInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
          performSearch(searchInput, searchResults);
        }
      });

      if (mobileSearchInput) {
        mobileSearchInput.addEventListener('keypress', (e) => {
          if (e.key === 'Enter') {
            performSearch(mobileSearchInput, mobileSearchResults);
          }
        });
      }
    });

    // Tombol tutup
    document.getElementById('tutupPopup').addEventListener('click', () => {
      const popup = document.getElementById('popupIklan');
      popup.classList.add('hidden');
    });

    // Toggle Mobile Menu
    document.getElementById("mobileMenuBtn").addEventListener("click", function() {
      document.getElementById("mobileMenu").classList.toggle("hidden");
    });

    // Mobile Tentang Dropdown
    document.getElementById("mobileTentangBtn").addEventListener("click", function() {
      document.getElementById("mobileTentangMenu").classList.toggle("hidden");
    });

    // Mobile Media Dropdown
    document.getElementById("mobileMediaBtn").addEventListener("click", function() {
      document.getElementById("mobileMediaMenu").classList.toggle("hidden");
    });

    // Mobile Dark Mode Toggle
    document.getElementById("mobileDarkModeToggle").addEventListener("click", function() {
      toggleDarkMode();
    });

    // Desktop Tentang Dropdown
    document.getElementById("tentangButton").addEventListener("click", function(event) {
      event.preventDefault();
      let dropdown = document.getElementById("tentangDropdown");
      let button = document.getElementById("tentangButton");
      dropdown.classList.toggle("hidden");
      if (!dropdown.classList.contains("hidden")) {
        button.classList.add("bg-[#40531B]", "text-white");
        button.classList.remove("text-[#40531B]");
      } else {
        button.classList.remove("bg-[#40531B]", "text-white");
        button.classList.add("text-[#40531B]");
      }
    });

    // Desktop Media Dropdown
    document.getElementById("mediaButton").addEventListener("click", function(event) {
      event.preventDefault();
      let dropdown = document.getElementById("mediaDropdown");
      let button = document.getElementById("mediaButton");
      dropdown.classList.toggle("hidden");
      if (!dropdown.classList.contains("hidden")) {
        button.classList.add("bg-[#40531B]", "text-white");
        button.classList.remove("text-[#40531B]");
      } else {
        button.classList.remove("bg-[#40531B]", "text-white");
        button.classList.add("text-[#40531B]");
      }
    });

    // Desktop Dark Mode Toggle
    document.getElementById("darkModeToggle").addEventListener("click", function() {
      toggleDarkMode();
    });

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

    
    // Function to apply dark mode based on state
    function applyDarkMode(enable) {
      let body = document.body;
      let navbar = document.getElementById("navbar");
      let toggleCircle = document.getElementById("toggleCircle");
      let toggleIcon = document.getElementById("toggleIcon");
      let mobileToggleCircle = document.getElementById("mobileToggleCircle");
      let mobileToggleIcon = document.getElementById("mobileToggleIcon");
      
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
        
        if (toggleCircle) {
          toggleCircle.classList.add("translate-x-8");
          toggleIcon.classList.replace("fa-sun", "fa-moon");
        }
        if (mobileToggleCircle) {
          mobileToggleCircle.classList.add("translate-x-8");
          mobileToggleIcon.classList.replace("fa-sun", "fa-moon");
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
        
        if (toggleCircle) {
          toggleCircle.classList.remove("translate-x-8");
          toggleIcon.classList.replace("fa-moon", "fa-sun");
        }
        if (mobileToggleCircle) {
          mobileToggleCircle.classList.remove("translate-x-8");
          mobileToggleIcon.classList.replace("fa-moon", "fa-sun");
        }
      }
    }

    // Close dropdowns when clicking outside
    document.addEventListener('click', function(event) {
      const tentangButton = document.getElementById('tentangButton');
      const mediaButton = document.getElementById('mediaButton');
      const tentangDropdown = document.getElementById('tentangDropdown');
      const mediaDropdown = document.getElementById('mediaDropdown');

      if (tentangButton && !tentangButton.contains(event.target) && tentangDropdown && !tentangDropdown.contains(event.target)) {
        tentangDropdown.classList.add('hidden');
        tentangButton.classList.remove("bg-[#40531B]", "text-white");
        tentangButton.classList.add("text-[#40531B]");
      }

      if (mediaButton && !mediaButton.contains(event.target) && mediaDropdown && !mediaDropdown.contains(event.target)) {
        mediaDropdown.classList.add('hidden');
        mediaButton.classList.remove("bg-[#40531B]", "text-white");
        mediaButton.classList.add("text-[#40531B]");
      }
    });
  </script>
</body>
</html>