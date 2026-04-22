<?php
$page_title = 'Program Kerja - Satpol PP Kabupaten Kubu Raya';
include 'header.php';
?>

<!-- Hero Section -->
<section class="relative w-full h-[420px] overflow-hidden bg-primary">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-cover bg-center opacity-40"
            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDsHusjtfUTUE6iwwaEiwmA6W77Nzy8TqW4n_CQkqB506YYyJu0HNPKq4c3YC5HWvHbtrRnl1J24y2rryWycb5UagPdRvGl7Po9VgrxjODAHoqiKemolqHVHEeXDMVAyHuReLbC2Gd_UFBaivTj3y9JMp4_LRY0Ixm06c9SrGmty2co_6rbPwng4d4GR77aek01u6eayZ8ahAQRVvMMZKvwdV5ZgHT_AXKivDc69rj3uTz6zyXt2yEn0osbYMz3pc-BNw3CaHs_87wg');"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-primary/70 via-primary/60 to-primary"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col justify-center">
        <!-- Breadcrumb -->
        <nav class="flex items-center gap-2 text-slate-400 text-xs font-medium mb-6">
            <a href="beranda.php" class="hover:text-accent transition-colors">Beranda</a>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <span class="text-accent">Program Kerja</span>
        </nav>
        <span class="inline-block px-4 py-1.5 mb-4 rounded-full bg-accent/20 text-accent font-bold text-xs uppercase tracking-widest border border-accent/30 w-fit">Transparansi &amp; Akuntabilitas</span>
        <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight">
            Dokumen Strategis <br><span class="text-accent">&amp; Program Kerja</span>
        </h1>
        <p class="text-slate-300 mt-4 max-w-2xl text-base md:text-lg leading-relaxed">
            Akses publik terhadap dokumen perencanaan dan laporan kinerja Satuan Polisi Pamong Praja Kabupaten Kubu Raya.
        </p>
    </div>
</section>

    <!-- Main Content: Strategic Documents List -->
    <section class="py-24 px-8 max-w-7xl mx-auto">
        <div class="mb-12">
            <h2 class="text-primary dark:text-white text-4xl font-extrabold tracking-tight">
                Daftar Dokumen Strategis
            </h2>
            <div class="h-1.5 w-24 bg-accent mt-4"></div>
        </div>

        <?php
        $documents = [
            [
                'category'    => 'Laporan Akuntabilitas',
                'icon'        => 'description',
                'title'       => 'LKJIP',
                'description' => 'Laporan Kinerja Instansi Pemerintah Tahun Anggaran 2023',
                'file_size'   => '2.4 MB',
                'file_url'    => '#',
            ],
            [
                'category'    => 'Rencana Tahunan',
                'icon'        => 'event_note',
                'title'       => 'RENJA',
                'description' => 'Rencana Kerja Satuan Polisi Pamong Praja Tahun 2024',
                'file_size'   => '1.8 MB',
                'file_url'    => '#',
            ],
            [
                'category'    => 'Rencana Lima Tahun',
                'icon'        => 'strategy',
                'title'       => 'RENSTRA',
                'description' => 'Rencana Strategis Satpol PP Kabupaten Kubu Raya 2021 - 2026',
                'file_size'   => '4.5 MB',
                'file_url'    => '#',
            ],
            [
                'category'    => 'Komitmen Layanan',
                'icon'        => 'draw',
                'title'       => 'Pakta Integritas',
                'description' => 'Dokumen Komitmen Anti Korupsi dan Pelayanan Prima Seluruh Personil',
                'file_size'   => '0.9 MB',
                'file_url'    => '#',
            ],
        ];
        ?>

        <div class="space-y-4">
            <?php foreach ($documents as $doc): ?>
                <div class="group bg-white dark:bg-slate-900 hover:bg-slate-50 dark:hover:bg-slate-800 transition-all duration-300 rounded-xl p-6 md:p-8 flex flex-col md:flex-row items-center justify-between shadow-sm hover:shadow-xl border border-slate-100 dark:border-slate-800">
                    <div class="flex items-center gap-6 w-full md:w-auto">
                        <div class="w-16 h-16 bg-primary/5 rounded-2xl flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors duration-300">
                            <span class="material-symbols-outlined text-3xl">
                                <?= htmlspecialchars($doc['icon']) ?>
                            </span>
                        </div>
                        <div>
                            <span class="text-[10px] font-bold uppercase tracking-widest text-primary/60 dark:text-accent/60">
                                <?= htmlspecialchars($doc['category']) ?>
                            </span>
                            <h3 class="text-xl md:text-2xl font-extrabold text-primary dark:text-white">
                                <?= htmlspecialchars($doc['title']) ?>
                            </h3>
                            <p class="text-slate-600 dark:text-slate-400 text-sm font-medium">
                                <?= htmlspecialchars($doc['description']) ?>
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center gap-8 mt-6 md:mt-0 w-full md:w-auto justify-between md:justify-end">
                        <div class="text-right hidden md:block">
                            <p class="text-[10px] font-bold uppercase text-slate-500">Ukuran File</p>
                            <p class="font-bold text-primary dark:text-white">
                                <?= htmlspecialchars($doc['file_size']) ?>
                            </p>
                        </div>
                        <a href="<?= htmlspecialchars($doc['file_url']) ?>"
                            class="bg-accent text-white px-8 py-4 rounded-xl font-bold flex items-center gap-3 shadow-lg shadow-accent/20 hover:shadow-accent/40 hover:-translate-y-1 transition-all active:scale-95">
                            <span class="material-symbols-outlined">download</span>
                            Unduh PDF
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="bg-primary py-24 relative overflow-hidden">
        <div class="asymmetric-pattern absolute inset-0"></div>
        <div class="relative z-10 px-8 max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div class="order-2 md:order-1">
                <img alt="Modern government office interior"
                    class="rounded-3xl shadow-2xl rotate-2 hover:rotate-0 transition-transform duration-500 aspect-video object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBXPctyZDy7y3HVEmKe3nY-oDI4AkdR4UAnIP3-QI4IpCEJIJWrJRAnXXMIQZ_pl6ci74Z7nJ6UATDXv7Yf9DfI0tylQRXsyCZI6vnhp6x4e8A6l_hzrusTvFvCjkiPca_3Z_2vONIIQhCtUyo5CJFit3TEanVdPX4ueJzC8vqShdv5ebBFj0iuooEveEo8qPuL1BEzQdYBmJz40DOp4tX8nyqOwx32zKz2FNCRFxUZvcjaSmxgJot8TQju-6t-wYr_hgt1Xgo2igxU" />
            </div>
            <div class="order-1 md:order-2">
                <span class="text-accent font-extrabold uppercase tracking-widest text-xs mb-4 block">
                    Misi Utama
                </span>
                <h2 class="text-white text-4xl md:text-5xl font-extrabold tracking-tighter leading-tight mb-8">
                    Mengawal Perda Demi Ketertiban Umum.
                </h2>

                <?php
                $missions = [
                    'Peningkatan kompetensi sumber daya manusia anggota Satuan Polisi Pamong Praja secara berkelanjutan.',
                    'Modernisasi sarana dan prasarana penunjang operasional penegakan peraturan daerah.',
                    'Penguatan kolaborasi antar instansi untuk menciptakan stabilitas keamanan wilayah.',
                ];
                ?>

                <div class="space-y-6">
                    <?php foreach ($missions as $mission): ?>
                        <div class="flex gap-4">
                            <div class="mt-1 h-2 w-2 rounded-full bg-accent shrink-0"></div>
                            <p class="text-white/80 font-medium">
                                <?= htmlspecialchars($mission) ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>