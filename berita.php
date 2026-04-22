<?php
// ============================================================
// Konfigurasi halaman
// ============================================================
$page_title   = "Berita & Informasi - Satpol PP Kabupaten Kubu Raya";
$current_page = "berita";

// Load data berita
require_once 'includes/berita-data.php';

// ============================================================
// Konfigurasi Pagination
// ============================================================
$per_halaman    = 3;
$total_berita   = count($berita);
$total_halaman  = (int) ceil($total_berita / $per_halaman);
$halaman_aktif  = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_aktif  = max(1, min($halaman_aktif, $total_halaman));

$offset         = ($halaman_aktif - 1) * $per_halaman;
$berita_halaman = array_slice($berita, $offset, $per_halaman);

// ============================================================
// Load Header
// ============================================================
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
            <span class="text-accent">Berita &amp; Informasi</span>
        </nav>
        <span class="inline-block px-4 py-1.5 mb-4 rounded-full bg-accent/20 text-accent font-bold text-xs uppercase tracking-widest border border-accent/30 w-fit">Informasi Publik</span>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight">
            Berita <span class="text-accent">&amp; Informasi</span>
        </h1>
        <p class="text-slate-300 mt-4 max-w-2xl text-sm md:text-base leading-relaxed">
            Pantau informasi terkini mengenai kegiatan, pengumuman, dan operasi lapangan Satpol PP Kabupaten Kubu Raya.
        </p>
    </div>
</section>

<!-- Content Grid -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

    <!-- News Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($berita_halaman as $item): ?>
            <a href="berita-detail.php?id=<?php echo $item['id']; ?>"
               class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 block">
                <div class="aspect-video overflow-hidden relative">
                    <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                        src="<?php echo $item['gambar']; ?>"
                        alt="<?php echo htmlspecialchars($item['judul']); ?>" />
                    <span class="absolute top-4 left-4 bg-primary text-white text-[10px] font-extrabold uppercase px-3 py-1 rounded-full tracking-widest">
                        <?php echo htmlspecialchars($item['kategori']); ?>
                    </span>
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-2 text-slate-400 text-[11px] font-bold uppercase tracking-wider mb-3">
                        <span class="material-symbols-outlined text-[16px]">calendar_month</span>
                        <?php echo htmlspecialchars($item['tanggal']); ?>
                    </div>
                    <h2 class="text-base font-extrabold text-primary leading-tight group-hover:text-accent transition-colors mb-3">
                        <?php echo htmlspecialchars($item['judul']); ?>
                    </h2>
                    <p class="text-slate-600 text-sm leading-relaxed line-clamp-3 mb-5">
                        <?php echo htmlspecialchars($item['ringkasan']); ?>
                    </p>
                    <span class="inline-flex items-center gap-1 font-bold text-xs uppercase tracking-widest text-primary group-hover:gap-3 transition-all">
                        Baca Selengkapnya <span class="material-symbols-outlined text-[16px]">arrow_right_alt</span>
                    </span>
                </div>
            </a>
        <?php endforeach; ?>
    </div>

    <!-- Pagination -->
    <?php if ($total_halaman > 1): ?>
    <div class="mt-16 flex justify-center gap-2">
        <!-- Sebelumnya -->
        <a href="?halaman=<?php echo max(1, $halaman_aktif - 1); ?>"
            class="w-12 h-12 rounded-xl flex items-center justify-center bg-white shadow-sm text-primary font-bold hover:bg-primary hover:text-white transition-all <?php echo $halaman_aktif === 1 ? 'opacity-40 pointer-events-none' : ''; ?>">
            <span class="material-symbols-outlined">chevron_left</span>
        </a>

        <!-- Nomor Halaman -->
        <?php for ($i = 1; $i <= $total_halaman; $i++): ?>
            <a href="?halaman=<?php echo $i; ?>"
                class="w-12 h-12 rounded-xl flex items-center justify-center font-bold shadow-sm transition-all
                  <?php echo $i === $halaman_aktif
                        ? 'bg-primary text-white shadow-lg'
                        : 'bg-white text-primary hover:bg-primary hover:text-white'; ?>">
                <?php echo $i; ?>
            </a>
        <?php endfor; ?>

        <!-- Berikutnya -->
        <a href="?halaman=<?php echo min($total_halaman, $halaman_aktif + 1); ?>"
            class="w-12 h-12 rounded-xl flex items-center justify-center bg-white shadow-sm text-primary font-bold hover:bg-primary hover:text-white transition-all <?php echo $halaman_aktif === $total_halaman ? 'opacity-40 pointer-events-none' : ''; ?>">
            <span class="material-symbols-outlined">chevron_right</span>
        </a>
    </div>
    <?php endif; ?>

</section>

<?php require_once 'footer.php'; ?>