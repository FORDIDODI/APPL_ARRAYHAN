<?= $this->extend('layout/arrayhan'); ?>

<?= $this->section('kontak'); ?>

<!-- HEADER UTAMA -->
<div class="mt-12 md:mt-16"></div>
<div class="flex flex-col md:flex-row items-center md:items-center mt-6 md:mt-10 mx-6 md:ml-10 space-y-4 md:space-y-0 md:space-x-8">
  <img src="<?= base_url('assets/img/tk-arrayhan.png'); ?>" alt="RA AR RAYHAN" class="w-40 h-40 md:w-60 md:h-60" />
  <div class="text-center md:text-left self-center">
    <h1 class="text-[#40531B] text-4xl md:text-6xl font-bold leading-tight">RAUDHATUL ATHFAL</h1>
    <h1 class="text-[#40531B] text-4xl md:text-6xl font-bold leading-tight">AR RAYHAN</h1>
  </div>
</div>

<!-- SECTION: LOKASI KAMI & HUBUNGI KAMI -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-10 px-6 md:px-20 mt-12 mb-12">

  <!-- KIRI: LOKASI KAMI -->
  <div>
    <h2 class="text-2xl font-bold text-[#40531B] mb-6">Lokasi Kami</h2>

    <!-- Map Placeholder -->
    <div class="bg-gray-300 h-52 flex items-center justify-center rounded-md mb-6">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.02673007597!2d98.71671361044143!3d3.5813339963777824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031311dda44a97d%3A0x7657fa00baf15d42!2sRaudhatul%20Athfal%20(RA)%20Ar%20Rayhan!5e0!3m2!1sid!2sid!4v1743242815096!5m2!1sid!2sid"
        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>

    <!-- Kontak Info -->
    <div class="space-y-6 text-sm">
      <!-- Alamat -->
      <div class="flex items-start space-x-4">
        <div class="min-w-[30px] min-h-[30px] bg-[#40531B] rounded-full flex items-center justify-center mt-1">
          <i class="fas fa-map-marker-alt text-white text-sm"></i> <!-- Ikon Alamat -->
        </div>
        <div>
          <h3 class="font-bold text-[#40531B]">Alamat</h3>
          <p class="text-gray-700 leading-relaxed">
            Jl. Denai No.190, Tegal Sari Mandala II, Kec. Medan Denai, Kota Medan, Sumatera Utara 20371
          </p>
        </div>
      </div>

      <!-- Email -->
      <div class="flex items-start space-x-4">
        <div class="min-w-[30px] min-h-[30px] bg-[#40531B] rounded-full flex items-center justify-center mt-1">
          <i class="fas fa-envelope text-white text-sm"></i> <!-- Ikon Email -->
        </div>
        <div>
          <h3 class="font-bold text-[#40531B]">E-Mail</h3>
          <p class="text-gray-700">xxxxxxxx@gmail.com</p>
        </div>
      </div>

      <!-- WhatsApp -->
      <div class="flex items-start space-x-4">
        <div class="min-w-[30px] min-h-[30px] bg-[#40531B] rounded-full flex items-center justify-center mt-1">
          <i class="fab fa-whatsapp text-white text-sm"></i> <!-- Ikon WhatsApp -->
        </div>
        <div>
          <h3 class="font-bold text-[#40531B]">WhatsApp</h3>
          <p class="text-gray-700">+62-852-9762-9760</p>
        </div>
      </div>
    </div>
  </div>

  <!-- KANAN: HUBUNGI KAMI -->
  <div class="bg-[#AFBE8F] rounded-xl shadow-md overflow-hidden w-full">
    <div class="bg-[#4C5B2A] px-6 py-3">
      <h2 class="text-[#AFBC88] font-bold text-lg">Hubungi Kami</h2>
    </div>
    <form class="p-6 space-y-5">
      <input
        type="text"
        placeholder="Nama"
        class="w-full px-4 py-2 rounded-md bg-gray-200 placeholder-[#40531B] text-[#40531B] font-medium focus:outline-none focus:ring-2 focus:ring-[#4C5B2A]"
        required />
      <input
        type="email"
        placeholder="Email"
        class="w-full px-4 py-2 rounded-md bg-gray-200 placeholder-[#40531B] text-[#40531B] font-medium focus:outline-none focus:ring-2 focus:ring-[#4C5B2A]"
        required />
      <textarea
        rows="6"
        placeholder="Masukkan pesan anda..."
        class="w-full px-4 py-2 rounded-md bg-gray-200 placeholder-[#40531B] text-[#40531B] font-medium focus:outline-none focus:ring-2 focus:ring-[#4C5B2A] resize-y"
        required></textarea>

      <div class="text-right">
        <button type="submit" class="bg-[#4C5B2A] hover:bg-[#40531B] text-white font-semibold px-6 py-2 rounded-md transition duration-200">
          Kirim
        </button>
      </div>
    </form>
  </div>

</div>

<?= $this->endSection(); ?>