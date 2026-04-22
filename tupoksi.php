<?php
$page_title   = "Tugas Pokok & Fungsi (Tupoksi) - Satpol PP Kabupaten Kubu Raya";
$current_page = "tupoksi";
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
            <span class="text-accent">Tugas Pokok & Fungsi</span>
        </nav>
        <span class="inline-block px-4 py-1.5 mb-4 rounded-full bg-accent/20 text-accent font-bold text-xs uppercase tracking-widest border border-accent/30 w-fit">Profil Instansi</span>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight">
            Tugas Pokok <br><span class="text-accent">& Fungsi</span>
        </h1>
        <p class="text-slate-300 mt-4 max-w-2xl text-sm md:text-base leading-relaxed">
            Landasan hukum dan kewenangan Satuan Polisi Pamong Praja Kabupaten Kubu Raya dalam menjalankan tugasnya.
        </p>
    </div>
</section>

<!-- Main Content -->
<main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-14">

    <!-- ===== SECTION TUGAS ===== -->
    <section id="tugas-pokok">
        <h2 class="text-2xl font-extrabold text-primary dark:text-white text-center mb-8">Tugas</h2>
        <div class="bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-2xl p-8 shadow-sm space-y-4">
            <p class="text-slate-700 dark:text-slate-300 text-sm leading-relaxed">
                Satuan Polisi Pamong Praja (Satpol PP) memiliki tugas utama dalam
                <strong class="text-primary dark:text-white">menegakkan Peraturan Daerah (Perda) dan Peraturan Kepala Daerah (Perkada)</strong>,
                menjaga <strong class="text-primary dark:text-white">ketertiban umum dan ketenteraman</strong>,
                serta memberikan <strong class="text-primary dark:text-white">perlindungan kepada masyarakat</strong>.
            </p>
            <div class="h-px bg-slate-100 dark:bg-slate-800"></div>
            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                Satpol PP berperan sebagai perangkat pemerintah daerah yang bertugas untuk memastikan kepatuhan terhadap regulasi yang berlaku, termasuk melakukan penertiban terhadap pelanggaran Perda dan menjaga keamanan lingkungan. Selain itu, mereka juga memiliki kewenangan dalam melakukan penyelidikan terhadap dugaan pelanggaran serta memberikan tindakan administratif sesuai dengan aturan yang berlaku.
            </p>
        </div>
    </section>

    <!-- ===== SECTION FUNGSI ===== -->
    <section id="fungsi">
        <h2 class="text-2xl font-extrabold text-primary dark:text-white text-center mb-8">Fungsi</h2>

        <div class="bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-2xl p-8 shadow-sm space-y-5">
            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                Satuan Polisi Pamong Praja (Satpol PP) memiliki beberapa fungsi utama dalam pemerintahan daerah, yaitu:
            </p>

            <!-- Fungsi List -->
            <?php
            $fungsi_list = [
                'Penyusunan program dan pelaksanaan penegakan Peraturan Daerah (Perda) dan Peraturan Kepala Daerah (Perkada).',
                'Pelaksanaan kebijakan terkait ketertiban umum, ketenteraman masyarakat, dan perlindungan masyarakat.',
                'Koordinasi dengan instansi terkait, seperti Kepolisian Negara Republik Indonesia dan Penyidik Pegawai Negeri Sipil Daerah, dalam penegakan Perda dan Perkada.',
                'Pengawasan terhadap masyarakat dan badan hukum agar mematuhi Perda dan Perkada.',
                'Pelaksanaan tugas lain yang diberikan oleh Kepala Daerah.',
            ];
            ?>
            <div class="space-y-3">
                <?php foreach ($fungsi_list as $i => $item): ?>
                <div class="flex gap-4 items-start border border-slate-100 dark:border-slate-700 rounded-xl p-4 hover:border-primary/20 transition-colors">
                    <span class="flex-shrink-0 w-7 h-7 bg-primary text-white text-xs font-black rounded-lg flex items-center justify-center mt-0.5"><?php echo $i + 1; ?></span>
                    <p class="text-slate-700 dark:text-slate-300 text-sm leading-relaxed"><?php echo htmlspecialchars($item); ?></p>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="h-px bg-slate-100 dark:bg-slate-800"></div>

            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                Satpol PP berperan penting dalam menjaga ketertiban dan keamanan di wilayahnya, serta memastikan kepatuhan terhadap regulasi yang berlaku.
            </p>
        </div>
    </section>

</main>

<!-- Terakhir Diperbarui -->
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pb-6 flex justify-end">
    <p class="text-slate-400 text-xs italic">Terakhir Diperbarui: 22 April 2026</p>
</div>

<?php require_once 'footer.php'; ?>
