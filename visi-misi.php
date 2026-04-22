<?php
// ============================================================
// Konfigurasi halaman
// ============================================================
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
        <!-- Breadcrumb -->
        <nav class="flex items-center gap-2 text-slate-400 text-xs font-medium mb-6">
            <a href="beranda.php" class="hover:text-accent transition-colors">Beranda</a>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <span class="text-slate-300">Profil</span>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <span class="text-accent">Visi & Misi</span>
        </nav>
        <span class="inline-block px-4 py-1.5 mb-4 rounded-full bg-accent/20 text-accent font-bold text-xs uppercase tracking-widest border border-accent/30 w-fit">Profil Instansi</span>
        <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight">
            Visi <span class="text-accent">&</span> Misi
        </h1>
        <p class="text-slate-300 mt-4 max-w-2xl text-base md:text-lg leading-relaxed">
            Arah dan tujuan strategis Satuan Polisi Pamong Praja Kabupaten Kubu Raya dalam mengabdi kepada masyarakat.
        </p>
    </div>
</section>

<!-- Main Content -->
<main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-16">

    <!-- ===== SECTION VISI ===== -->
    <section id="visi">
        <!-- Section Label -->
        <div class="flex items-center gap-4 mb-10">
            <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center shadow-lg shadow-primary/20 flex-shrink-0">
                <span class="material-symbols-outlined text-white">visibility</span>
            </div>
            <div>
                <h2 class="text-3xl font-extrabold text-primary dark:text-white">Visi</h2>
            </div>
            <div class="flex-1 h-px bg-gradient-to-r from-primary/20 to-transparent ml-4"></div>
        </div>

        <!-- Visi Card -->
        <div class="relative bg-primary rounded-3xl overflow-hidden shadow-2xl shadow-primary/20">
            <!-- Accent top bar -->
            <div class="absolute top-0 left-0 right-0 h-1 bg-accent"></div>
            <!-- Background decoration -->
            <div class="absolute top-0 left-0 w-48 h-48 bg-white/5 rounded-full -translate-x-1/2 -translate-y-1/2 blur-xl"></div>
            <div class="absolute bottom-0 right-0 w-64 h-64 bg-accent/10 rounded-full translate-x-1/4 translate-y-1/4 blur-2xl"></div>

            <div class="relative z-10 p-10 md:p-14 text-center">
                <p class="text-xs font-black uppercase tracking-[0.25em] text-accent mb-6">Visi Kabupaten Kubu Raya</p>
                <h3 class="text-2xl md:text-3xl lg:text-4xl font-black text-white leading-snug mb-10">
                    "TERWUJUDNYA KUBU RAYA MELAJU"
                </h3>

                <!-- Makna MELAJU -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-left mt-2">
                    <!-- MELAYANI -->
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/15">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-8 h-8 bg-accent rounded-lg flex items-center justify-center flex-shrink-0">
                                <span class="material-symbols-outlined text-white text-sm">support_agent</span>
                            </div>
                            <span class="text-accent font-black text-sm uppercase tracking-widest">Melayani</span>
                        </div>
                        <p class="text-white/85 text-sm leading-relaxed">
                            Suatu komitmen dan upaya yang dilakukan untuk menyediakan, menyiapkan dan memberikan kualitas pelayanan publik yang prima dan pelayanan sosial dasar yang layak, merata, berkualitas, humanis dan religius, serta penerapan tata kelola pemerintahan yang bersih, terbuka, akuntabel dan digitalisasi.
                        </p>
                    </div>
                    <!-- MAJU -->
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 border border-white/15">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-8 h-8 bg-accent rounded-lg flex items-center justify-center flex-shrink-0">
                                <span class="material-symbols-outlined text-white text-sm">trending_up</span>
                            </div>
                            <span class="text-accent font-black text-sm uppercase tracking-widest">Maju</span>
                        </div>
                        <p class="text-white/85 text-sm leading-relaxed">
                            Suatu kondisi Kabupaten Kubu Raya yang lebih baik dari sebelumnya, bergerak ke depan dan telah mencapai tingkat pertumbuhan ekonomi yang tinggi dan inklusif, meningkatnya tingkat kesejahteraan dan kualitas hidup masyarakat serta meningkatnya pembangunan fisik, sosial ekonomi dan sosial budaya, serta pemberdayaan masyarakat yang unggul dan modern.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Simple Divider -->
    <div class="h-px bg-slate-200 dark:bg-slate-700"></div>

    <!-- ===== SECTION MISI ===== -->
    <section id="misi">
        <!-- Section Label -->
        <div class="flex items-center gap-4 mb-10">
            <div class="w-12 h-12 bg-accent rounded-xl flex items-center justify-center shadow-lg shadow-accent/20 flex-shrink-0">
                <span class="material-symbols-outlined text-white">flag</span>
            </div>
            <div>
                <h2 class="text-3xl font-extrabold text-primary dark:text-white">Misi</h2>
            </div>
            <div class="flex-1 h-px bg-gradient-to-r from-accent/20 to-transparent ml-4"></div>
        </div>

        <!-- Misi Intro -->
        <p class="text-slate-600 dark:text-slate-400 text-base leading-relaxed mb-8">
            Untuk dapat mewujudkan Visi <strong class="text-primary dark:text-white">"TERWUJUDNYA KUBU RAYA MELAJU"</strong>,
            maka perlu dijabarkan dalam 3 (tiga) Misi sebagai berikut:
        </p>

        <!-- Misi List -->
        <?php
        $misi_list = [
            [
                'nomor' => '01',
                'icon'  => 'account_balance',
                'judul' => 'Tata Kelola Pemerintahan',
                'desc'  => 'Meningkatkan penerapan tata kelola pemerintahan yang bersih, terbuka, efektif, efisien, akuntabel dan digitalisasi.',
            ],
            [
                'nomor' => '02',
                'icon'  => 'domain',
                'judul' => 'Infrastruktur & Wilayah',
                'desc'  => 'Meningkatkan pembangunan infrastruktur, sarana dan prasarana wilayah yang layak, merata dan berkualitas.',
            ],
            [
                'nomor' => '03',
                'icon'  => 'groups',
                'judul' => 'Kesejahteraan Masyarakat',
                'desc'  => 'Meningkatkan taraf hidup dan kesejahteraan masyarakat melalui pertumbuhan ekonomi yang tinggi dan inklusif serta pemberdayaan masyarakat madani, humanis dan religius.',
            ],
        ];
        ?>
        <div class="space-y-5">
            <?php foreach ($misi_list as $item): ?>
            <div class="group flex gap-5 bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-2xl p-6 shadow-sm hover:shadow-xl hover:border-primary/20 transition-all duration-300">
                <!-- Number + Icon -->
                <div class="flex-shrink-0 flex flex-col items-center gap-2">
                    <div class="w-12 h-12 bg-primary/10 group-hover:bg-primary rounded-xl flex items-center justify-center transition-all duration-300">
                        <span class="material-symbols-outlined text-primary group-hover:text-white transition-colors"><?php echo $item['icon']; ?></span>
                    </div>
                    <span class="text-xs font-black text-slate-300 dark:text-slate-600"><?php echo $item['nomor']; ?></span>
                </div>
                <!-- Content -->
                <div class="flex-1 pt-1">
                    <div class="flex items-center gap-2 mb-2">
                        <div class="w-2 h-2 bg-accent rounded-full flex-shrink-0"></div>
                        <h3 class="text-base font-bold text-primary dark:text-white"><?php echo htmlspecialchars($item['judul']); ?></h3>
                    </div>
                    <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed"><?php echo htmlspecialchars($item['desc']); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Bottom Navigation -->
    <section class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <a href="beranda.php" class="group flex items-center gap-4 bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 hover:border-primary/30 rounded-2xl p-5 shadow-sm hover:shadow-md transition-all">
            <div class="w-10 h-10 bg-primary/10 group-hover:bg-primary rounded-xl flex items-center justify-center transition-all">
                <span class="material-symbols-outlined text-primary group-hover:text-white transition-colors">home</span>
            </div>
            <div>
                <p class="text-xs text-slate-400 font-medium">Kembali ke</p>
                <p class="text-sm font-bold text-primary dark:text-white">Beranda</p>
            </div>
        </a>
        <a href="tupoksi.php" class="group flex items-center justify-end gap-4 bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 hover:border-accent/30 rounded-2xl p-5 shadow-sm hover:shadow-md transition-all">
            <div class="text-right">
                <p class="text-xs text-slate-400 font-medium">Selanjutnya</p>
                <p class="text-sm font-bold text-primary dark:text-white">Tugas Pokok & Fungsi</p>
            </div>
            <div class="w-10 h-10 bg-accent/10 group-hover:bg-accent rounded-xl flex items-center justify-center transition-all">
                <span class="material-symbols-outlined text-accent group-hover:text-white transition-colors">arrow_forward</span>
            </div>
        </a>
    </section>

</main>

<?php require_once 'footer.php'; ?>
