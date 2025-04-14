<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Halaman Tidak Ditemukan</title>
  <link rel="shortcut icon" href="<?= base_url('assets/img/logo-tk.png'); ?>" type="image/x-icon" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <style>
    body {
      animation: fadeIn 1.5s ease-in-out;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .error-code {
      display: inline-block;
      animation: shake 1.5s infinite alternate;
    }

    @keyframes shake {
      from {
        transform: rotate(-3deg);
      }

      to {
        transform: rotate(3deg);
      }
    }

    .btn:hover {
      transform: scale(1.1);
      transition: transform 0.3s;
    }
  </style>
</head>

<body class="bg-white flex items-center justify-center h-screen">
  <div class="text-center">
    <h1 class="text-9xl font-extrabold text-[#40531B] error-code">404</h1>
    <p class="text-2xl font-bold text-[#AFBC88] mt-4">Oops! Halaman Tidak Ditemukan</p>
    <p class="text-[#40531B] mt-2">Maaf, halaman yang Anda cari tidak tersedia atau telah dipindahkan.</p>
    <a href="<?= session()->get('last_url') ?? base_url('/') ?>"
      onclick="return goBack(event)"
      class="btn mt-6 inline-block px-6 py-3 bg-[#AFBC88] text-[#40531B] font-bold rounded-md hover:bg-[#99A574] transition-all">
      Kembali ke Halaman Sebelumnya
    </a>
  </div>

  <script>
    function goBack(event) {
      if (document.referrer) {
        event.preventDefault();
        window.history.back();
      }
    }
  </script>
</body>

</html>