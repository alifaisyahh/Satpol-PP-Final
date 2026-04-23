<?php
$page_title   = "Maklumat Pelayanan - Satpol PP Kabupaten Kubu Raya";
$current_page = "maklumat-pelayanan";
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
            <span class="text-accent">Maklumat Pelayanan</span>
        </nav>
        <span class="inline-block px-4 py-1.5 mb-4 rounded-full bg-accent/20 text-accent font-bold text-xs uppercase tracking-widest border border-accent/30 w-fit">Standar Pelayanan</span>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight">
            Maklumat <span class="text-accent">Pelayanan</span>
        </h1>
        <p class="text-slate-300 mt-4 max-w-2xl text-sm md:text-base leading-relaxed">
            Pernyataan kesanggupan Satpol PP Kabupaten Kubu Raya dalam memberikan pelayanan yang berkualitas kepada masyarakat.
        </p>
    </div>
</section>

<!-- Main Content -->
<main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-14">

    <!-- ===== SECTION PERNYATAAN ===== -->
    <section id="pernyataan">
        <h2 class="text-2xl font-extrabold text-primary dark:text-white text-center mb-8">Pernyataan Maklumat</h2>

        <div class="bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-2xl p-8 shadow-sm space-y-6">
            <!-- Kutipan Maklumat -->
            <div class="text-center">
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-primary dark:text-slate-300 mb-4">Maklumat Pelayanan Satpol PP Kabupaten Kubu Raya</p>
                <h3 class="text-lg md:text-xl font-black text-primary dark:text-white leading-snug italic">
                    "Dengan ini kami menyatakan sanggup menyelenggarakan pelayanan sesuai standar pelayanan yang telah ditetapkan, dan apabila tidak menepati janji ini kami siap menerima sanksi sesuai peraturan perundang-undangan yang berlaku."
                </h3>
            </div>

            <div class="h-px bg-slate-100 dark:bg-slate-800"></div>

            <!-- Penandatangan -->
            <div class="text-center">
                <p class="text-sm font-bold text-primary dark:text-slate-300 uppercase tracking-widest mb-2">Ditetapkan oleh</p>
                <p class="text-slate-700 dark:text-slate-300 text-sm leading-relaxed font-semibold">H. Sukiman, S.Sos., M.Si.</p>
                <p class="text-slate-500 dark:text-slate-400 text-sm">Kepala Satuan Polisi Pamong Praja Kabupaten Kubu Raya</p>
                <p class="text-slate-400 text-xs mt-1">Kubu Raya, 1 Januari 2024</p>
            </div>
        </div>
    </section>

    <!-- ===== SECTION KOMITMEN ===== -->
    <section id="komitmen">
        <h2 class="text-2xl font-extrabold text-primary dark:text-white text-center mb-8">Komitmen Layanan</h2>

        <div class="bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-2xl p-8 shadow-sm space-y-5">
            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                Dalam rangka mewujudkan pelayanan prima kepada masyarakat, Satpol PP Kabupaten Kubu Raya berkomitmen untuk:
            </p>

            <!-- ============================================================ -->
            <!-- EDIT ISI KOMITMEN DI SINI                                    -->
            <!-- ============================================================ -->
            <?php
            $komitmen_list = [
                [
                    'judul' => 'Tepat Waktu',
                    'desc'  => 'Memberikan pelayanan sesuai dengan waktu yang telah ditetapkan dalam standar pelayanan tanpa penundaan yang tidak beralasan.',
                ],
                [
                    'judul' => 'Tanpa Pungutan Liar',
                    'desc'  => 'Seluruh layanan tidak dipungut biaya apapun kecuali yang telah ditetapkan oleh peraturan perundang-undangan yang berlaku.',
                ],
                [
                    'judul' => 'Ramah dan Santun',
                    'desc'  => 'Bersikap ramah, santun, dan profesional dalam setiap interaksi dengan masyarakat yang membutuhkan layanan.',
                ],
                [
                    'judul' => 'Sesuai Prosedur',
                    'desc'  => 'Melaksanakan setiap pelayanan sesuai prosedur operasional standar (SOP) yang telah ditetapkan dan dipublikasikan kepada masyarakat.',
                ],
                [
                    'judul' => 'Responsif terhadap Pengaduan',
                    'desc'  => 'Merespons setiap pengaduan masyarakat dalam waktu 1×24 jam dan menindaklanjutinya dalam waktu 3 hari kerja.',
                ],
                [
                    'judul' => 'Transparan dan Akuntabel',
                    'desc'  => 'Seluruh proses pelayanan dapat dipantau oleh masyarakat dan dilaksanakan secara akuntabel sesuai ketentuan yang berlaku.',
                ],
            ];
            ?>
            <div class="space-y-3">
                <?php foreach ($komitmen_list as $i => $item): ?>
                <div class="flex gap-4 items-start border border-slate-100 dark:border-slate-700 rounded-xl p-4 hover:border-primary/20 transition-colors">
                    <span class="flex-shrink-0 w-7 h-7 bg-primary text-white text-xs font-black rounded-lg flex items-center justify-center mt-0.5"><?php echo $i + 1; ?></span>
                    <div>
                        <p class="text-sm font-bold text-primary dark:text-white mb-1"><?php echo htmlspecialchars($item['judul']); ?></p>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed"><?php echo htmlspecialchars($item['desc']); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ===== SECTION DOWNLOAD ===== -->
    <section id="download">
        <h2 class="text-2xl font-extrabold text-primary dark:text-white text-center mb-8">Dokumen Resmi</h2>

        <div class="bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-2xl p-8 shadow-sm">
            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-6">
                Dokumen maklumat pelayanan resmi dapat diunduh dalam format PDF melalui tautan berikut.
            </p>

            <!-- ============================================================ -->
            <!-- GANTI href="#" DENGAN PATH FILE PDF YANG SEBENARNYA          -->
            <!-- ============================================================ -->
            <a href="#" class="inline-flex items-center gap-3 bg-primary text-white px-6 py-3 rounded-xl font-bold text-sm hover:-translate-y-0.5 transition-all shadow-md shadow-primary/20">
                <span class="material-symbols-outlined text-sm">download</span>
                Unduh Maklumat Pelayanan (PDF)
            </a>
        </div>
    </section>

</main>

<!-- Terakhir Diperbarui -->
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pb-6 flex justify-end">
    <p class="text-slate-400 text-xs italic">Terakhir Diperbarui: 23 April 2026</p>
</div>

<?php require_once 'footer.php'; ?>
