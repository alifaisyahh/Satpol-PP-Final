<?php
$page_title   = "Biaya Layanan - Satpol PP Kabupaten Kubu Raya";
$current_page = "biaya-layanan";
require_once 'header.php';
?>

<!-- Hero Section -->
<section class="relative w-full h-[420px] overflow-hidden bg-primary">
    <div class="absolute inset-0 z-0">
        <div class="w-full h-full bg-cover bg-center opacity-40"
            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDeLFcmlZFAAz_hMeL_QUSPC8jKtQ92hHlpNJ6jNit6O75bieL7n-wp9UORrGQJJA4F5lQDrx834Y5SeICCBpluVl5deDrc37tnDSQsZKSAQNTgH_zJ_uwD7nJ7LfYwJUpZQa0HaTwHkaA2eUFV0rrgiFVFPEI4OhydFI5vnG62ZJcWjld_VDISdss5nfGwnxjNqlXuUuUITsUEd98qp8De-j545Wqw_lPBxfDRAdDYi26IGSWis0U8zEUg98nPbroyurk5oIJvnYY5');"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-primary/70 via-primary/60 to-primary"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col justify-center">
        <nav class="flex items-center gap-2 text-slate-400 text-xs font-medium mb-6">
            <a href="beranda.php" class="hover:text-accent transition-colors">Beranda</a>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <span class="text-slate-300">Standar Pelayanan</span>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <span class="text-accent">Biaya Layanan</span>
        </nav>
        <span class="inline-block px-4 py-1.5 mb-4 rounded-full bg-accent/20 text-accent font-bold text-xs uppercase tracking-widest border border-accent/30 w-fit">Standar Pelayanan</span>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight">
            Biaya <span class="text-accent">Layanan</span>
        </h1>
        <p class="text-slate-300 mt-4 max-w-2xl text-sm md:text-base leading-relaxed">
            Informasi transparansi biaya atas seluruh layanan Satpol PP Kabupaten Kubu Raya kepada masyarakat.
        </p>
    </div>
</section>

<!-- Main Content -->
<main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-14">

    <!-- ===== SECTION PERNYATAAN BIAYA ===== -->
    <section id="pernyataan">
        <h2 class="text-2xl font-extrabold text-primary dark:text-white text-center mb-8">Pernyataan Biaya</h2>

        <div class="bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-2xl p-8 shadow-sm space-y-6">
            <!-- ============================================================ -->
            <!-- EDIT PERNYATAAN BIAYA DI SINI                                -->
            <!-- ============================================================ -->
            <div class="text-center">
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-primary dark:text-slate-300 mb-4">Komitmen Transparansi Biaya</p>
                <h3 class="text-xl md:text-2xl font-black text-primary dark:text-white leading-snug">
                    TIDAK ADA PUNGUTAN BIAYA
                </h3>
            </div>

            <div class="h-px bg-slate-100 dark:bg-slate-800"></div>

            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                Berdasarkan <strong class="text-primary dark:text-white">Undang-Undang Nomor 25 Tahun 2009 tentang Pelayanan Publik</strong> dan <strong class="text-primary dark:text-white">Peraturan Pemerintah Nomor 16 Tahun 2018 tentang Satuan Polisi Pamong Praja</strong>, seluruh pelayanan yang diberikan oleh Satpol PP Kabupaten Kubu Raya kepada masyarakat <strong class="text-primary dark:text-white">tidak dipungut biaya apapun (GRATIS)</strong>.
            </p>

            <div class="h-px bg-slate-100 dark:bg-slate-800"></div>

            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                Apabila ada oknum yang meminta imbalan atau pungutan tidak resmi dalam proses pelayanan, masyarakat <strong class="text-primary dark:text-white">diharap segera melaporkan</strong> kepada pimpinan Satpol PP atau melalui saluran pengaduan resmi.
            </p>
        </div>
    </section>

    <!-- ===== SECTION RINCIAN BIAYA ===== -->
    <section id="rincian">
        <h2 class="text-2xl font-extrabold text-primary dark:text-white text-center mb-8">Rincian Biaya per Layanan</h2>

        <div class="bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-2xl p-8 shadow-sm space-y-5">
            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                Berikut adalah rincian biaya untuk setiap jenis layanan yang diberikan oleh Satpol PP Kabupaten Kubu Raya:
            </p>

            <!-- ============================================================ -->
            <!-- EDIT TABEL BIAYA DI SINI                                     -->
            <!-- Setiap item: 'layanan', 'dasar', 'biaya'                     -->
            <!-- ============================================================ -->
            <?php
            $biaya_list = [
                [
                    'layanan' => 'Penanganan Pengaduan Masyarakat',
                    'dasar'   => 'UU No. 25 Tahun 2009',
                    'biaya'   => 'Gratis',
                ],
                [
                    'layanan' => 'Patroli dan Pengamanan Wilayah',
                    'dasar'   => 'PP No. 16 Tahun 2018',
                    'biaya'   => 'Gratis',
                ],
                [
                    'layanan' => 'Penertiban Pelanggaran Perda',
                    'dasar'   => 'Perda Kab. Kubu Raya',
                    'biaya'   => 'Gratis',
                ],
                [
                    'layanan' => 'Permohonan Pengamanan Kegiatan',
                    'dasar'   => 'PP No. 16 Tahun 2018',
                    'biaya'   => 'Gratis',
                ],
                [
                    'layanan' => 'Rekomendasi Izin Usaha',
                    'dasar'   => 'Perda Kab. Kubu Raya',
                    'biaya'   => 'Gratis',
                ],
                [
                    'layanan' => 'Surat Keterangan Catatan Ketertiban',
                    'dasar'   => 'PP No. 16 Tahun 2018',
                    'biaya'   => 'Gratis',
                ],
                [
                    'layanan' => 'Pembinaan dan Pemberdayaan Linmas',
                    'dasar'   => 'PP No. 16 Tahun 2018',
                    'biaya'   => 'Gratis',
                ],
            ];
            ?>
            <div class="space-y-3">
                <?php foreach ($biaya_list as $i => $item): ?>
                <div class="flex gap-4 items-center border border-slate-100 dark:border-slate-700 rounded-xl p-4 hover:border-primary/20 transition-colors">
                    <span class="flex-shrink-0 w-7 h-7 bg-primary text-white text-xs font-black rounded-lg flex items-center justify-center"><?php echo $i + 1; ?></span>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-bold text-primary dark:text-white leading-snug"><?php echo htmlspecialchars($item['layanan']); ?></p>
                        <p class="text-xs text-slate-400 font-medium mt-0.5"><?php echo htmlspecialchars($item['dasar']); ?></p>
                    </div>
                    <span class="flex-shrink-0 text-xs font-extrabold text-green-700 bg-green-50 border border-green-200 px-3 py-1 rounded-full uppercase tracking-wider">
                        <?php echo htmlspecialchars($item['biaya']); ?>
                    </span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ===== SECTION DASAR HUKUM ===== -->
    <section id="dasar-hukum">
        <h2 class="text-2xl font-extrabold text-primary dark:text-white text-center mb-8">Dasar Hukum</h2>

        <div class="bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-2xl p-8 shadow-sm space-y-5">
            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                Ketentuan biaya layanan Satpol PP Kabupaten Kubu Raya berlandaskan pada peraturan perundang-undangan berikut:
            </p>

            <!-- ============================================================ -->
            <!-- EDIT DASAR HUKUM DI SINI                                     -->
            <!-- ============================================================ -->
            <?php
            $hukum_list = [
                'Undang-Undang Nomor 25 Tahun 2009 tentang Pelayanan Publik.',
                'Peraturan Pemerintah Nomor 16 Tahun 2018 tentang Satuan Polisi Pamong Praja.',
                'Undang-Undang Nomor 23 Tahun 2014 tentang Pemerintahan Daerah.',
                'Peraturan Daerah Kabupaten Kubu Raya tentang Tata Kelola Pelayanan Publik Daerah.',
            ];
            ?>
            <div class="space-y-3">
                <?php foreach ($hukum_list as $i => $item): ?>
                <div class="flex gap-4 items-start border border-slate-100 dark:border-slate-700 rounded-xl p-4 hover:border-primary/20 transition-colors">
                    <span class="flex-shrink-0 w-7 h-7 bg-primary text-white text-xs font-black rounded-lg flex items-center justify-center mt-0.5"><?php echo $i + 1; ?></span>
                    <p class="text-slate-700 dark:text-slate-300 text-sm leading-relaxed"><?php echo htmlspecialchars($item); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</main>

<!-- Terakhir Diperbarui -->
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pb-6 flex justify-end">
    <p class="text-slate-400 text-xs italic">Terakhir Diperbarui: 23 April 2026</p>
</div>

<?php require_once 'footer.php'; ?>
