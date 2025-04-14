<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= esc($title ?? 'Dashboard Admin') ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="shortcut icon" href="<?= base_url('assets/img/logo-tk.png'); ?>" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body class="flex h-screen bg-gray-300">
  <!-- Sidebar -->
  <div class="w-64 bg-[#7AA095] p-6 flex flex-col items-center fixed h-full md:relative transition-transform transform md:translate-x-0 -translate-x-full md:w-1/5 z-50" id="sidebar">
    <button class="md:hidden self-end text-white mb-4" id="close-menu">
      <i class="fas fa-times"></i>
    </button>
    <img src="<?= base_url('assets/img/arrayhan.jpg'); ?>" alt="Logo" class="w-32 h-32 rounded-full mb-6 shadow-lg border-4 border-white">
    <h1 class="text-3xl font-bold text-black mb-10 mt-4">Halo, Admin!</h1>

    <nav class="w-full flex flex-col space-y-2">
      <a href="<?= base_url('dashboard') ?>" class="flex items-center text-black text-lg hover:font-semibold hover:bg-gray-200 p-3 rounded-lg w-full justify-start">
        <i class="fas fa-tachometer-alt mr-3"></i> Dashboard
      </a>
      <a href="<?= base_url('kelola-berita') ?>" class="flex items-center text-black text-lg hover:font-semibold hover:bg-gray-200 p-3 rounded-lg w-full justify-start">
        <i class="fas fa-newspaper mr-3"></i> Kelola Berita
      </a>
      <a href="<?= base_url('kelola-media') ?>" class="flex items-center text-black text-lg hover:font-semibold hover:bg-gray-200 p-3 rounded-lg w-full justify-start">
        <i class="fas fa-images mr-3"></i> Kelola Media
      </a>
    </nav>

    <div class="mt-auto w-full text-center">
      <a href="<?= base_url('logout'); ?>" class="text-black text-lg hover:font-semibold hover:bg-gray-200 p-3 rounded-lg w-full block">Logout</a>
    </div>
  </div>

  <!-- Main Content -->
  <div class="flex-1 p-4 md:p-6 overflow-y-auto transition-all duration-300" id="main-content">
    <button class="md:hidden bg-[#7AA095] text-white p-2 rounded-lg mb-4" id="menu-toggle">
      <i class="fas fa-bars"></i>
    </button>
    <?= $this->renderSection('content'); ?>
    <?= $this->renderSection('berita'); ?>
    <?= $this->renderSection('media'); ?>
  </div>

  <!-- JavaScript: Sidebar Toggle + Waktu Sekarang (dengan detik) -->
  <script>
    // Sidebar toggle (menu buka/tutup)
    const menuToggle = document.getElementById('menu-toggle');
    const closeMenu = document.getElementById('close-menu');
    const sidebar = document.getElementById('sidebar');

    if (menuToggle && closeMenu && sidebar) {
      menuToggle.addEventListener('click', function() {
        sidebar.classList.toggle('-translate-x-full');
      });

      closeMenu.addEventListener('click', function() {
        sidebar.classList.add('-translate-x-full');
      });
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
  </script>


</body>

</html>