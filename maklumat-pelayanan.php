<?php
$page_title   = "Maklumat Pelayanan - Satpol PP Kabupaten Kubu Raya";
$current_page = "maklumat-pelayanan";
require_once 'header.php';
?>

<!-- Hero Section (Standar) -->
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
            Dokumen resmi pernyataan kesanggupan Satpol PP Kabupaten Kubu Raya dalam memberikan pelayanan berkualitas kepada masyarakat.
        </p>
    </div>
</section>

<!-- Main Content -->
<main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

    <!-- Section Header -->
    <div class="text-center mb-12">
        <h2 class="text-2xl font-extrabold text-primary dark:text-white">Dokumen Maklumat Pelayanan</h2>
        <p class="text-slate-500 dark:text-slate-400 text-sm mt-2 max-w-xl mx-auto">
            Dokumen maklumat pelayanan di bawah ini dapat dilihat secara langsung dan juga dapat diunduh.
        </p>
    </div>

    <?php
    // ============================================================
    // EDIT FILE MAKLUMAT DI SINI
    // Ganti 'file_url' dengan path file PDF nyata, contoh:
    // $file_url = 'assets/docs/maklumat-pelayanan-2024.pdf';
    // ============================================================
    $file_url = '#'; 
    $file_title = 'Maklumat Pelayanan Satpol PP Kabupaten Kubu Raya';
    ?>

    <div class="bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-3xl overflow-hidden shadow-xl shadow-slate-200/80 dark:shadow-slate-900/50 flex flex-col">
        <!-- Header Dokumen -->
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between p-6 bg-slate-50 dark:bg-slate-800/50 border-b border-slate-100 dark:border-slate-800 gap-4">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 bg-red-50 dark:bg-red-900/20 rounded-xl flex items-center justify-center border border-red-100 dark:border-red-800/30">
                    <span class="material-symbols-outlined text-2xl text-red-500">picture_as_pdf</span>
                </div>
                <div>
                    <h3 class="text-base font-extrabold text-primary dark:text-white leading-snug">
                        <?php echo htmlspecialchars($file_title); ?>
                    </h3>
                    <p class="text-xs text-slate-500 font-medium mt-1">Dokumen Resmi (PDF)</p>
                </div>
            </div>
            <a href="<?php echo htmlspecialchars($file_url); ?>" download
               class="inline-flex items-center gap-2 bg-primary text-white px-6 py-3 rounded-xl font-bold text-sm hover:bg-primary/90 hover:-translate-y-0.5 active:translate-y-0 transition-all duration-150 shadow-md shadow-primary/20 whitespace-nowrap w-full sm:w-auto justify-center">
                <span class="material-symbols-outlined text-[18px]">download</span>
                Unduh Dokumen
            </a>
        </div>

        <!-- Viewer PDF -->
        <div class="w-full h-[600px] md:h-[800px] bg-slate-200 dark:bg-slate-900 relative">
            <?php if ($file_url !== '#'): ?>
                <iframe src="<?php echo htmlspecialchars($file_url); ?>" class="w-full h-full border-0"></iframe>
            <?php else: ?>
                <!-- Placeholder jika file_url belum diset -->
                <div class="absolute inset-0 flex flex-col items-center justify-center text-center p-8 bg-slate-100 dark:bg-slate-800">
                    <div class="w-24 h-24 bg-primary/10 rounded-3xl flex items-center justify-center mb-6">
                        <span class="material-symbols-outlined text-primary text-5xl">picture_as_pdf</span>
                    </div>
                    <p class="text-primary dark:text-white font-extrabold text-xl mb-3">File PDF Belum Tersedia</p>
                    <p class="text-slate-500 dark:text-slate-400 text-sm max-w-md leading-relaxed mb-6">
                        Dokumen belum diunggah. Silakan ganti nilai <code class="bg-white dark:bg-slate-700 px-2 py-1 rounded text-xs font-mono shadow-sm">$file_url</code> pada file <code class="bg-white dark:bg-slate-700 px-2 py-1 rounded text-xs font-mono shadow-sm">maklumat-pelayanan.php</code> dengan path file PDF yang sebenarnya.
                    </p>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <!-- Info Catatan -->
    <div class="mt-8 flex items-start gap-3 bg-blue-50 dark:bg-blue-900/20 border border-blue-100 dark:border-blue-800/30 rounded-xl p-5">
        <span class="material-symbols-outlined text-blue-500 text-lg flex-shrink-0 mt-0.5">info</span>
        <p class="text-blue-700 dark:text-blue-300 text-sm leading-relaxed">
            Apabila Anda mengalami kendala dalam melihat atau mengunduh dokumen maklumat pelayanan, Anda dapat menghubungi kami melalui kontak resmi yang tertera pada bagian bawah website ini.
        </p>
    </div>

</main>

<!-- Terakhir Diperbarui -->
<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 pb-8 flex justify-end">
    <p class="text-slate-400 text-xs italic">Terakhir Diperbarui: 27 April 2026</p>
</div>

<?php require_once 'footer.php'; ?>
