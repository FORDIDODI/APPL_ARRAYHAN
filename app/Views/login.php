<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Admin</title>
  <link rel="shortcut icon" href="<?= base_url('assets/img/logo-tk.png'); ?>" type="image/x-icon">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body class="flex items-center justify-center min-h-screen bg-[#7AA095]">
  <div class="flex flex-col items-center w-96 p-8">
    <div class="mb-6">
      <img src="<?= base_url('assets/img/arrayhan.jpg') ?>" alt="Logo" class="w-42 h-42 rounded-full">
    </div>

    <?php if (session()->getFlashdata('error')): ?>
      <div class="alert bg-red-500 text-white p-3 rounded mb-4 w-full">
        <?= session()->getFlashdata('error'); ?>
      </div>
    <?php endif; ?>
    
    <form action="<?= base_url('login/process'); ?>" method="post" class="w-full">
      <div class="mb-4">
        <div class="flex items-center border border-black-600 rounded-md px-3 py-2">
          <i class="fas fa-user text-black-500 mr-2"></i>
          <input type="text" name="username" placeholder="USERNAME" class="w-full outline-none bg-transparent placeholder-black" required>
        </div>
      </div>
      <div class="mb-4">
        <div class="flex items-center border border-black-600 rounded-md px-3 py-2">
          <i class="fas fa-lock text-black-500 mr-2"></i>
          <input type="password" name="password" placeholder="PASSWORD" class="w-full outline-none bg-transparent placeholder-black" required>
        </div>
      </div>
      <button type="submit" class="w-full bg-black text-white py-2 rounded-md hover:bg-gray-800">LOGIN</button>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function() {
        $(this).remove();
      });
    }, 1500);
  </script>
</body>

</html>