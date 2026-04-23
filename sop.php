<?php
$page_title   = "SOP Pelayanan - Satpol PP Kabupaten Kubu Raya";
$current_page = "sop";
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
            <span class="text-accent">SOP</span>
        </nav>
        <span class="inline-block px-4 py-1.5 mb-4 rounded-full bg-accent/20 text-accent font-bold text-xs uppercase tracking-widest border border-accent/30 w-fit">Standar Pelayanan</span>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight">
            Standar Operasional <span class="text-accent">Prosedur</span>
        </h1>
        <p class="text-slate-300 mt-4 max-w-2xl text-sm md:text-base leading-relaxed">
            Prosedur baku pelaksanaan tugas Satpol PP Kabupaten Kubu Raya sebagai acuan kerja yang terstandarisasi.
        </p>
    </div>
</section>

<!-- Main Content -->
<main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-14">

    <!-- ===== SECTION PENGERTIAN ===== -->
    <section id="pengertian">
        <h2 class="text-2xl font-extrabold text-primary dark:text-white text-center mb-8">Pengertian SOP</h2>

        <div class="bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-2xl p-8 shadow-sm space-y-4">
            <!-- ============================================================ -->
            <!-- EDIT TEKS PENGERTIAN DI SINI                                 -->
            <!-- ============================================================ -->
            <p class="text-slate-700 dark:text-slate-300 text-sm leading-relaxed">
                Standar Operasional Prosedur (SOP) adalah <strong class="text-primary dark:text-white">serangkaian instruksi tertulis</strong> yang dibakukan mengenai berbagai proses penyelenggaraan administrasi pemerintahan, bagaimana dan kapan harus dilakukan, di mana dan oleh siapa dilakukan.
            </p>
            <div class="h-px bg-slate-100 dark:bg-slate-800"></div>
            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                SOP bertujuan agar pelaksanaan tugas Satpol PP berlangsung secara <strong class="text-primary dark:text-white">konsisten, efektif, dan akuntabel</strong>, serta memberikan kepastian layanan kepada masyarakat Kabupaten Kubu Raya.
            </p>
        </div>
    </section>

    <!-- ===== SECTION DAFTAR SOP ===== -->
    <section id="daftar-sop">
        <h2 class="text-2xl font-extrabold text-primary dark:text-white text-center mb-8">Daftar SOP</h2>

        <div class="bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-2xl p-8 shadow-sm space-y-5">
            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                Berikut adalah daftar Standar Operasional Prosedur yang berlaku di lingkungan Satpol PP Kabupaten Kubu Raya:
            </p>

            <!-- ============================================================ -->
            <!-- EDIT DAFTAR SOP DI SINI                                      -->
            <!-- Setiap item: 'kode', 'judul', 'kategori', 'file' (path PDF)  -->
            <!-- ============================================================ -->
            <?php
            $sop_list = [
                [
                    'kode'      => 'SOP-01',
                    'judul'     => 'SOP Penertiban Pedagang Kaki Lima (PKL)',
                    'kategori'  => 'Operasional Lapangan',
                    'file'      => '#',
                ],
                [
                    'kode'      => 'SOP-02',
                    'judul'     => 'SOP Penanganan Pengaduan Masyarakat',
                    'kategori'  => 'Pelayanan Publik',
                    'file'      => '#',
                ],
                [
                    'kode'      => 'SOP-03',
                    'judul'     => 'SOP Patroli Wilayah',
                    'kategori'  => 'Operasional Lapangan',
                    'file'      => '#',
                ],
                [
                    'kode'      => 'SOP-04',
                    'judul'     => 'SOP Penegakan Peraturan Daerah',
                    'kategori'  => 'Penegakan Hukum',
                    'file'      => '#',
                ],
                [
                    'kode'      => 'SOP-05',
                    'judul'     => 'SOP Pengamanan Kegiatan',
                    'kategori'  => 'Operasional Lapangan',
                    'file'      => '#',
                ],
                [
                    'kode'      => 'SOP-06',
                    'judul'     => 'SOP Pengelolaan Administrasi Kepegawaian',
                    'kategori'  => 'Administrasi',
                    'file'      => '#',
                ],
            ];
            ?>
            <div class="space-y-3">
                <?php foreach ($sop_list as $i => $item): ?>
                <div class="flex gap-4 items-center border border-slate-100 dark:border-slate-700 rounded-xl p-4 hover:border-primary/20 transition-colors">
                    <span class="flex-shrink-0 w-7 h-7 bg-primary text-white text-xs font-black rounded-lg flex items-center justify-center"><?php echo $i + 1; ?></span>
                    <div class="flex-1 min-w-0">
                        <p class="text-[10px] font-bold uppercase tracking-widest text-accent mb-0.5"><?php echo htmlspecialchars($item['kode']); ?> &middot; <?php echo htmlspecialchars($item['kategori']); ?></p>
                        <p class="text-sm font-bold text-primary dark:text-white leading-snug"><?php echo htmlspecialchars($item['judul']); ?></p>
                    </div>
                    <a href="<?php echo htmlspecialchars($item['file']); ?>"
                       class="flex-shrink-0 flex items-center gap-1.5 text-primary hover:text-accent font-bold text-xs transition-colors">
                        <span class="material-symbols-outlined text-sm">download</span>
                        Unduh
                    </a>
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
                Penyusunan SOP Satpol PP Kabupaten Kubu Raya berlandaskan pada peraturan perundang-undangan berikut:
            </p>

            <!-- ============================================================ -->
            <!-- EDIT DASAR HUKUM DI SINI                                     -->
            <!-- ============================================================ -->
            <?php
            $dasar_hukum = [
                'Undang-Undang Nomor 25 Tahun 2009 tentang Pelayanan Publik.',
                'Peraturan Pemerintah Nomor 16 Tahun 2018 tentang Satuan Polisi Pamong Praja.',
                'Peraturan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 35 Tahun 2012 tentang Pedoman Penyusunan SOP Administrasi Pemerintahan.',
                'Peraturan Daerah Kabupaten Kubu Raya tentang Tata Kelola Pelayanan Publik Daerah.',
            ];
            ?>
            <div class="space-y-3">
                <?php foreach ($dasar_hukum as $i => $item): ?>
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
