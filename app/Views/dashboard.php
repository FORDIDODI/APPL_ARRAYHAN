<?= $this->extend('layout/admin-dashboard'); ?>
<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="bg-white p-4 md:p-6 rounded-lg shadow-lg mb-6">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Dashboard</h2>
        <p id="dateTime" class="text-gray-700 font-semibold">Loading date and time...</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4 md:gap-6 mt-4">
        <!-- Total Berita -->
        <div class="bg-gradient-to-br from-[#7AA095] to-[#6b8e84] p-4 md:p-6 rounded-lg shadow-lg flex items-center text-white">
            <div class="bg-white bg-opacity-20 p-3 md:p-4 rounded-full">
                <i class="fas fa-newspaper text-white text-2xl md:text-4xl"></i>
            </div>
            <div class="ml-4">
                <p class="text-white text-opacity-80 text-sm md:text-lg">Total Berita</p>
                <h3 class="text-2xl md:text-3xl font-bold"><?= esc($totalBerita) ?></h3>
            </div>
        </div>

        <!-- Total Media -->
        <div class="bg-gradient-to-br from-[#7AA095] to-[#6b8e84] p-4 md:p-6 rounded-lg shadow-lg flex items-center text-white">
            <div class="bg-white bg-opacity-20 p-3 md:p-4 rounded-full">
                <i class="fas fa-images text-white text-2xl md:text-4xl"></i>
            </div>
            <div class="ml-4">
                <p class="text-white text-opacity-80 text-sm md:text-lg">Total Media</p>
                <h3 class="text-2xl md:text-3xl font-bold"><?= esc($totalMedia) ?></h3>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>