<?php
// ============================================================
// Konfigurasi halaman
// ============================================================
$page_title   = "Tugas Pokok & Fungsi (Tupoksi) - Satpol PP Kabupaten Kubu Raya";
$current_page = "tupoksi";

require_once 'header.php';
?>

<!-- Hero Section -->
<section class="relative w-full h-[420px] overflow-hidden bg-primary">
    <div class="absolute inset-0 z-0">
        <div class="w-full h-full bg-cover bg-center opacity-40"
            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC_KkDUFdcqUkTUwrgTMQqTWm8Ab1VDm3EdUuvn6GNAjYEa2jkjlCqbKCFFgIivzQ0tbX_7GFit-YSSIH0uJTgD8ebtq3IDVTyH4_nd9ZgCOBTHVWP17IzUwDjbfuIe1R0DVuQWLp5V1VQVS8AazBJTiDyzWQff2PXE5srqrp3qVZJFSmJMnQGjCEUyKoDks6iwNLYgaSBoFYGLiKHJZCNG4Iuyk8faHqu-v45FbMOtOwukU_YhK-g0xyAbHq0u31tDx9gDCFqO1uxQ');"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-primary/70 via-primary/60 to-primary"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col justify-center">
        <!-- Breadcrumb -->
        <nav class="flex items-center gap-2 text-slate-400 text-xs font-medium mb-6">
            <a href="beranda.php" class="hover:text-accent transition-colors">Beranda</a>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <span class="text-slate-300">Profil</span>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <span class="text-accent">Tugas Pokok & Fungsi</span>
        </nav>
        <span class="inline-block px-4 py-1.5 mb-4 rounded-full bg-accent/20 text-accent font-bold text-xs uppercase tracking-widest border border-accent/30 w-fit">Profil Instansi</span>
        <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight">
            Tugas Pokok <br><span class="text-accent">& Fungsi</span>
        </h1>
        <p class="text-slate-300 mt-4 max-w-2xl text-base md:text-lg leading-relaxed">
            Landasan hukum dan kewenangan Satuan Polisi Pamong Praja Kabupaten Kubu Raya dalam menjalankan tugasnya.
        </p>
    </div>
</section>

<!-- Main Content -->
<main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-16">

    <!-- Dasar Hukum Info Banner -->
    <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4 bg-primary/5 dark:bg-primary/10 border border-primary/20 rounded-2xl px-6 py-5">
        <div class="w-10 h-10 bg-primary rounded-xl flex items-center justify-center flex-shrink-0">
            <span class="material-symbols-outlined text-white text-lg">article</span>
        </div>
        <div>
            <p class="text-xs text-slate-500 font-semibold uppercase tracking-widest mb-0.5">Dasar Hukum</p>
            <p class="text-sm text-primary dark:text-slate-200 font-bold leading-snug">
                Peraturan Pemerintah Nomor 16 Tahun 2018 tentang Satuan Polisi Pamong Praja &amp; Peraturan Daerah Kabupaten Kubu Raya yang berlaku.
            </p>
        </div>
    </div>

    <!-- ===== SECTION TUGAS POKOK ===== -->
    <section id="tugas-pokok">
        <!-- Section Label -->
        <div class="flex items-center gap-4 mb-8">
            <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center shadow-lg shadow-primary/20 flex-shrink-0">
                <span class="material-symbols-outlined text-white">task_alt</span>
            </div>
            <div>
                <p class="text-accent font-bold text-xs uppercase tracking-widest">Kewenangan Utama</p>
                <h2 class="text-3xl font-extrabold text-primary dark:text-white">Tugas Pokok</h2>
            </div>
            <div class="flex-1 h-px bg-gradient-to-r from-primary/20 to-transparent ml-4 hidden sm:block"></div>
        </div>

        <!-- Tugas Pokok Highlight Box -->
        <div class="relative bg-white dark:bg-slate-900 border-l-4 border-primary rounded-2xl p-8 shadow-md shadow-slate-100 dark:shadow-none overflow-hidden">
            <!-- Decorative -->
            <div class="absolute top-0 right-0 w-40 h-40 bg-primary/5 rounded-full translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute bottom-0 left-0 w-24 h-24 bg-accent/5 rounded-full -translate-x-1/2 translate-y-1/2"></div>
            <div class="relative z-10">
                <div class="flex items-start gap-4">
                    <div class="w-1 h-full bg-accent flex-shrink-0"></div>
                    <div>
                        <p class="text-sm font-bold text-accent uppercase tracking-widest mb-3">Pasal 5 PP No. 16 Tahun 2018</p>
                        <p class="text-slate-700 dark:text-slate-300 text-base md:text-lg leading-relaxed font-medium">
                            Satuan Polisi Pamong Praja mempunyai tugas membantu Kepala Daerah dalam
                            <strong class="text-primary dark:text-white">menegakkan Peraturan Daerah dan Peraturan Kepala Daerah</strong>,
                            menyelenggarakan <strong class="text-primary dark:text-white">ketertiban umum dan ketenteraman</strong>,
                            serta menyelenggarakan <strong class="text-primary dark:text-white">perlindungan masyarakat</strong>
                            di wilayah Kabupaten Kubu Raya.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sub tugas pokok cards -->
        <?php
        $sub_tugas = [
            [
                'icon'  => 'gavel',
                'label' => 'Penegakan Perda',
                'color' => 'bg-blue-50 dark:bg-blue-950/30 border-blue-200 dark:border-blue-800',
                'icon_bg' => 'bg-blue-600',
            ],
            [
                'icon'  => 'balance',
                'label' => 'Ketertiban Umum',
                'color' => 'bg-emerald-50 dark:bg-emerald-950/30 border-emerald-200 dark:border-emerald-800',
                'icon_bg' => 'bg-emerald-600',
            ],
            [
                'icon'  => 'security',
                'label' => 'Ketentraman',
                'color' => 'bg-violet-50 dark:bg-violet-950/30 border-violet-200 dark:border-violet-800',
                'icon_bg' => 'bg-violet-600',
            ],
            [
                'icon'  => 'shield_person',
                'label' => 'Perlindungan Masyarakat',
                'color' => 'bg-orange-50 dark:bg-orange-950/30 border-orange-200 dark:border-orange-800',
                'icon_bg' => 'bg-orange-500',
            ],
        ];
        ?>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-6">
            <?php foreach ($sub_tugas as $t): ?>
            <div class="<?php echo $t['color']; ?> border rounded-2xl p-5 flex flex-col items-center text-center gap-3 transition-transform hover:-translate-y-1 duration-300">
                <div class="<?php echo $t['icon_bg']; ?> w-12 h-12 rounded-xl flex items-center justify-center shadow-sm">
                    <span class="material-symbols-outlined text-white"><?php echo $t['icon']; ?></span>
                </div>
                <span class="text-xs font-bold text-slate-700 dark:text-slate-200"><?php echo $t['label']; ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Divider -->
    <div class="flex items-center gap-4">
        <div class="flex-1 h-px bg-slate-200 dark:bg-slate-700"></div>
        <span class="material-symbols-outlined text-slate-300 dark:text-slate-600">more_horiz</span>
        <div class="flex-1 h-px bg-slate-200 dark:bg-slate-700"></div>
    </div>

    <!-- ===== SECTION FUNGSI ===== -->
    <section id="fungsi">
        <!-- Section Label -->
        <div class="flex items-center gap-4 mb-8">
            <div class="w-12 h-12 bg-accent rounded-xl flex items-center justify-center shadow-lg shadow-accent/20 flex-shrink-0">
                <span class="material-symbols-outlined text-white">category</span>
            </div>
            <div>
                <p class="text-primary font-bold text-xs uppercase tracking-widest">Rincian Kewenangan</p>
                <h2 class="text-3xl font-extrabold text-primary dark:text-white">Fungsi</h2>
            </div>
            <div class="flex-1 h-px bg-gradient-to-r from-accent/20 to-transparent ml-4 hidden sm:block"></div>
        </div>

        <?php
        $fungsi_list = [
            [
                'no'    => '1',
                'icon'  => 'policy',
                'judul' => 'Penyusunan Program & Kebijakan',
                'desc'  => 'Penyusunan program dan pelaksanaan penegakan Peraturan Daerah dan Peraturan Kepala Daerah, penyelenggaraan ketertiban umum dan ketenteraman masyarakat serta perlindungan masyarakat.',
            ],
            [
                'no'    => '2',
                'icon'  => 'manage_search',
                'judul' => 'Pelaksanaan Kebijakan',
                'desc'  => 'Pelaksanaan kebijakan penegakan Peraturan Daerah dan Peraturan Kepala Daerah di wilayah Kabupaten Kubu Raya sesuai peraturan perundang-undangan yang berlaku.',
            ],
            [
                'no'    => '3',
                'icon'  => 'support_agent',
                'judul' => 'Koordinasi Penegakan Perda',
                'desc'  => 'Pelaksanaan koordinasi penegakan Peraturan Daerah dan Peraturan Kepala Daerah serta penyelenggaraan ketertiban umum dan ketenteraman masyarakat dengan Kepolisian Negara Republik Indonesia, Penyidik Pegawai Negeri Sipil Daerah, dan/atau aparatur lainnya.',
            ],
            [
                'no'    => '4',
                'icon'  => 'people_alt',
                'judul' => 'Pengawasan Terhadap Masyarakat',
                'desc'  => 'Pengawasan terhadap masyarakat, aparatur, atau badan hukum agar mematuhi dan mentaati Peraturan Daerah dan Peraturan Kepala Daerah.',
            ],
            [
                'no'    => '5',
                'icon'  => 'verified_user',
                'judul' => 'Penyelenggaraan Ketertiban',
                'desc'  => 'Penyelenggaraan ketertiban umum dan ketenteraman masyarakat serta perlindungan masyarakat di wilayah Kabupaten Kubu Raya.',
            ],
            [
                'no'    => '6',
                'icon'  => 'groups',
                'judul' => 'Pembinaan Satlinmas',
                'desc'  => 'Pembinaan dan pengembangan Satuan Perlindungan Masyarakat (Satlinmas) dalam membantu penanganan bencana daerah, kebakaran, dan ketentraman masyarakat.',
            ],
            [
                'no'    => '7',
                'icon'  => 'schema',
                'judul' => 'Pelaksanaan Tugas Tambahan',
                'desc'  => 'Pelaksanaan tugas lain yang diberikan oleh Bupati Kubu Raya terkait dengan tugas dan fungsi Satpol PP sesuai dengan ketentuan peraturan perundang-undangan.',
            ],
        ];
        ?>

        <div class="space-y-4">
            <?php foreach ($fungsi_list as $i => $item): ?>
            <div class="group bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-2xl p-5 shadow-sm hover:shadow-lg hover:border-primary/20 transition-all duration-300 flex gap-5 items-start">
                <!-- Step number -->
                <div class="flex-shrink-0 flex flex-col items-center">
                    <div class="w-10 h-10 bg-primary/10 group-hover:bg-primary rounded-xl flex items-center justify-center transition-all duration-300">
                        <span class="material-symbols-outlined text-primary group-hover:text-white transition-colors text-lg"><?php echo $item['icon']; ?></span>
                    </div>
                    <?php if ($i < count($fungsi_list) - 1): ?>
                    <div class="w-px h-4 bg-slate-200 dark:bg-slate-700 mt-2"></div>
                    <?php endif; ?>
                </div>
                <!-- Content -->
                <div class="flex-1 pt-1">
                    <div class="flex items-center gap-3 mb-1.5">
                        <span class="text-xs font-black text-accent"><?php echo str_pad($item['no'], 2, '0', STR_PAD_LEFT); ?></span>
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
        <a href="visi-misi.php" class="group flex items-center gap-4 bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 hover:border-primary/30 rounded-2xl p-5 shadow-sm hover:shadow-md transition-all">
            <div class="w-10 h-10 bg-primary/10 group-hover:bg-primary rounded-xl flex items-center justify-center transition-all">
                <span class="material-symbols-outlined text-primary group-hover:text-white transition-colors">arrow_back</span>
            </div>
            <div>
                <p class="text-xs text-slate-400 font-medium">Sebelumnya</p>
                <p class="text-sm font-bold text-primary dark:text-white">Visi & Misi</p>
            </div>
        </a>
        <a href="struktur-organisasi.php" class="group flex items-center justify-end gap-4 bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 hover:border-accent/30 rounded-2xl p-5 shadow-sm hover:shadow-md transition-all">
            <div class="text-right">
                <p class="text-xs text-slate-400 font-medium">Selanjutnya</p>
                <p class="text-sm font-bold text-primary dark:text-white">Struktur Organisasi</p>
            </div>
            <div class="w-10 h-10 bg-accent/10 group-hover:bg-accent rounded-xl flex items-center justify-center transition-all">
                <span class="material-symbols-outlined text-accent group-hover:text-white transition-colors">arrow_forward</span>
            </div>
        </a>
    </section>

</main>

<?php require_once 'footer.php'; ?>
