<?php
$page_title   = "Visi & Misi - Satpol PP Kabupaten Kubu Raya";
$current_page = "visi-misi";
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
            <span class="text-slate-300">Profil</span>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <span class="text-accent">Visi & Misi</span>
        </nav>
        <span class="inline-block px-4 py-1.5 mb-4 rounded-full bg-accent/20 text-accent font-bold text-xs uppercase tracking-widest border border-accent/30 w-fit">Profil Instansi</span>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight">
            Visi <span class="text-accent">&</span> Misi
        </h1>
        <p class="text-slate-300 mt-4 max-w-2xl text-sm md:text-base leading-relaxed">
            Arah dan tujuan strategis Satuan Polisi Pamong Praja Kabupaten Kubu Raya dalam mengabdi kepada masyarakat.
        </p>
    </div>
</section>

<!-- Main Content -->
<main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-14">

    <!-- ===== SECTION VISI ===== -->
    <section id="visi">
        <h2 class="text-2xl font-extrabold text-primary dark:text-white text-center mb-8">Visi</h2>

        <div class="bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-2xl p-8 shadow-sm space-y-6">
            <!-- Kutipan Visi -->
            <div class="text-center">
                <p class="text-xs font-bold uppercase tracking-[0.2em] text-primary dark:text-slate-300 mb-4">Visi Kabupaten Kubu Raya</p>
                <h3 class="text-xl md:text-2xl font-black text-primary dark:text-white leading-snug">
                    "TERWUJUDNYA KUBU RAYA MELAJU"
                </h3>
            </div>

            <div class="h-px bg-slate-100 dark:bg-slate-800"></div>

            <!-- Melayani -->
            <div>
                <p class="text-sm font-bold text-primary dark:text-slate-300 uppercase tracking-widest mb-2">Melayani</p>
                <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                    Suatu komitmen dan upaya yang dilakukan untuk menyediakan, menyiapkan dan memberikan kualitas pelayanan publik yang prima dan pelayanan sosial dasar yang layak, merata, berkualitas, humanis dan religius, serta penerapan tata kelola pemerintahan yang bersih, terbuka, akuntabel dan digitalisasi.
                </p>
            </div>

            <div class="h-px bg-slate-100 dark:bg-slate-800"></div>

            <!-- Maju -->
            <div>
                <p class="text-sm font-bold text-primary dark:text-slate-300 uppercase tracking-widest mb-2">Maju</p>
                <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                    Suatu kondisi Kabupaten Kubu Raya yang lebih baik dari sebelumnya, bergerak ke depan dan telah mencapai tingkat pertumbuhan ekonomi yang tinggi dan inklusif, meningkatnya tingkat kesejahteraan dan kualitas hidup masyarakat serta meningkatnya pembangunan fisik, sosial ekonomi dan sosial budaya, serta pemberdayaan masyarakat yang unggul dan modern.
                </p>
            </div>
        </div>
    </section>

    <!-- ===== SECTION MISI ===== -->
    <section id="misi">
        <h2 class="text-2xl font-extrabold text-primary dark:text-white text-center mb-8">Misi</h2>

        <div class="bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-2xl p-8 shadow-sm space-y-5">
            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                Untuk dapat mewujudkan Visi <strong class="text-primary dark:text-white">"TERWUJUDNYA KUBU RAYA MELAJU"</strong>,
                maka perlu dijabarkan dalam 3 (tiga) Misi sebagai berikut:
            </p>

            <!-- Misi List -->
            <?php
            $misi_list = [
                [
                    'nomor' => '01',
                    'judul' => 'Tata Kelola Pemerintahan',
                    'desc'  => 'Meningkatkan penerapan tata kelola pemerintahan yang bersih, terbuka, efektif, efisien, akuntabel dan digitalisasi.',
                ],
                [
                    'nomor' => '02',
                    'judul' => 'Infrastruktur & Wilayah',
                    'desc'  => 'Meningkatkan pembangunan infrastruktur, sarana dan prasarana wilayah yang layak, merata dan berkualitas.',
                ],
                [
                    'nomor' => '03',
                    'judul' => 'Kesejahteraan Masyarakat',
                    'desc'  => 'Meningkatkan taraf hidup dan kesejahteraan masyarakat melalui pertumbuhan ekonomi yang tinggi dan inklusif serta pemberdayaan masyarakat madani, humanis dan religius.',
                ],
            ];
            ?>
            <div class="space-y-3">
                <?php foreach ($misi_list as $item): ?>
                <div class="flex gap-4 items-start border border-slate-100 dark:border-slate-700 rounded-xl p-4 hover:border-primary/20 transition-colors">
                    <span class="flex-shrink-0 w-7 h-7 bg-primary text-white text-xs font-black rounded-lg flex items-center justify-center mt-0.5"><?php echo $item['nomor']; ?></span>
                    <div>
                        <p class="text-sm font-bold text-primary dark:text-white mb-1"><?php echo htmlspecialchars($item['judul']); ?></p>
                        <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed"><?php echo htmlspecialchars($item['desc']); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</main>

<!-- Terakhir Diperbarui -->
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pb-6 flex justify-end">
    <p class="text-slate-400 text-xs italic">Terakhir Diperbarui: 22 April 2026</p>
</div>

<?php require_once 'footer.php'; ?>
