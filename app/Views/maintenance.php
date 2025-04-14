<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Maintenance | RA AR RAYHAN</title>
  <link rel="shortcut icon" href="<?= base_url('assets/img/logo-tk.png'); ?>" type="image/x-icon">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Quicksand', sans-serif;
      background: linear-gradient(135deg, #AFBC88 0%, #F5F7ED 100%);
    }

    @keyframes shimmer {
      0% { background-position: -400px 0; }
      100% { background-position: 400px 0; }
    }

    .shine-text {
      background: linear-gradient(90deg, #fff, #dfe9c2, #fff);
      background-size: 400% 100%;
      animation: shimmer 2s infinite linear;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .spin-slow {
      animation: spin 5s linear infinite;
    }

    @keyframes bounceIn {
      0% {
        transform: scale(0.9);
        opacity: 0;
      }
      60% {
        transform: scale(1.05);
        opacity: 1;
      }
      100% {
        transform: scale(1);
      }
    }

    .animate-bounceIn {
      animation: bounceIn 1.2s ease-out both;
    }
  </style>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#40531B',
            secondary: '#AFBC88',
            light: '#F5F7ED'
          },
          animation: {
            'fade-in': 'fadeIn 1.2s ease-out both',
          },
          keyframes: {
            fadeIn: {
              '0%': { opacity: '0', transform: 'translateY(20px)' },
              '100%': { opacity: '1', transform: 'translateY(0)' }
            }
          }
        }
      }
    }
  </script>
</head>
<body class="min-h-screen flex items-center justify-center px-4 py-10 relative overflow-hidden">

  <!-- Background Soft Shapes -->
  <div class="absolute -top-20 -left-20 w-72 h-72 bg-secondary/30 rounded-full blur-3xl animate-pulse"></div>
  <div class="absolute -bottom-24 -right-24 w-80 h-80 bg-primary/20 rounded-full blur-3xl animate-pulse"></div>

  <div class="bg-white/90 backdrop-blur-2xl rounded-3xl shadow-2xl p-8 md:p-12 max-w-2xl w-full text-center animate-bounceIn border border-[#40531B]/20 z-10">

    <!-- Icon Gear Animation -->
    <div class="absolute top-4 right-4 text-[#40531B]/30">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 spin-slow" viewBox="0 0 24 24" fill="currentColor">
        <path d="M19.43 12.98c.04-.32.07-.66.07-1s-.03-.68-.07-1l2.11-1.65a.5.5 0 00.11-.65l-2-3.46a.5.5 0 00-.6-.22l-2.49 1a7.003 7.003 0 00-1.5-.87l-.38-2.65A.5.5 0 0014 2h-4a.5.5 0 00-.5.42l-.38 2.65a6.978 6.978 0 00-1.5.87l-2.49-1a.5.5 0 00-.6.22l-2 3.46a.5.5 0 00.11.65L4.57 10c-.04.32-.07.66-.07 1s.03.68.07 1l-2.11 1.65a.5.5 0 00-.11.65l2 3.46a.5.5 0 00.6.22l2.49-1c.47.36.97.67 1.5.87l.38 2.65a.5.5 0 00.5.42h4a.5.5 0 00.5-.42l.38-2.65c.53-.2 1.03-.5 1.5-.87l2.49 1a.5.5 0 00.6-.22l2-3.46a.5.5 0 00-.11-.65L19.43 12.98zM12 15.5A3.5 3.5 0 1115.5 12 3.504 3.504 0 0112 15.5z"/>
      </svg>
    </div>

    <!-- Logo -->
    <img src="<?= base_url('assets/img/logo-tk.png'); ?>" alt="Logo RA Ar-Rayhan"
         class="w-24 h-24 mx-auto rounded-full border-4 border-white shadow-xl mb-6 hover:scale-110 transition duration-300 ease-in-out">

    <!-- Judul -->
    <h1 class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-[#40531B] to-[#6F8A32] drop-shadow-md mb-4 shine-text">
      Website Sedang Maintenance
    </h1>

    <!-- Deskripsi -->
    <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-6">
      Hai Ayah & Bunda 👋<br>
      Kami sedang melakukan peningkatan agar website <strong class="text-[#40531B]">RA AR RAYHAN</strong> menjadi lebih baik lagi.
    </p>

    <!-- Tombol -->
    <div class="inline-block bg-[#40531B] text-white px-6 py-3 rounded-full font-semibold shadow-lg hover:scale-110 transform transition duration-300 text-sm md:text-base cursor-default">
      Silakan kunjungi kembali nanti 🙏
    </div>

    <!-- Footer -->
    <div class="mt-10 text-gray-500 text-xs md:text-sm">
      &copy; <?= date('Y'); ?> RA AR RAYHAN. All rights reserved.
    </div>
  </div>

</body>
</html>