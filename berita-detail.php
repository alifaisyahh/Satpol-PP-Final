<?php
// ============================================================
// Load data berita
// ============================================================
require_once 'includes/berita-data.php';

// Ambil ID artikel dari URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : -1;

// Validasi: pastikan id ada dalam array
if ($id < 0 || $id >= count($berita)) {
    header('Location: berita.php');
    exit;
}

$artikel       = $berita[$id];
$page_title    = htmlspecialchars($artikel['judul']) . " - Satpol PP Kabupaten Kubu Raya";
$current_page  = "berita";

// Artikel sebelumnya & berikutnya
$prev = ($id > 0) ? $berita[$id - 1] : null;
$next = ($id < count($berita) - 1) ? $berita[$id + 1] : null;

require_once 'header.php';
?>

<!-- Hero Section -->
<section class="relative w-full h-[420px] overflow-hidden bg-primary">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-cover bg-center opacity-30"
            style="background-image: url('<?php echo $artikel['gambar']; ?>');"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-primary/80 via-primary/70 to-primary"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col justify-center">
        <!-- Breadcrumb -->
        <nav class="flex items-center gap-2 text-slate-400 text-xs font-medium mb-6 flex-wrap">
            <a href="beranda.php" class="hover:text-accent transition-colors">Beranda</a>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <a href="berita.php" class="hover:text-accent transition-colors">Berita</a>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <span class="text-accent line-clamp-1 max-w-xs"><?php echo htmlspecialchars($artikel['judul']); ?></span>
        </nav>
        <span class="inline-block px-4 py-1.5 mb-4 rounded-full bg-accent/20 text-accent font-bold text-xs uppercase tracking-widest border border-accent/30 w-fit">
            <?php echo htmlspecialchars($artikel['kategori']); ?>
        </span>
        <h1 class="text-2xl md:text-4xl font-extrabold text-white leading-tight max-w-3xl">
            <?php echo htmlspecialchars($artikel['judul']); ?>
        </h1>
        <div class="flex items-center gap-2 text-slate-400 text-xs mt-4">
            <span class="material-symbols-outlined text-sm">calendar_month</span>
            <?php echo htmlspecialchars($artikel['tanggal']); ?>
        </div>
    </div>
</section>

<!-- Main Content -->
<main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-14">

    <!-- Gambar Utama -->
    <div class="rounded-2xl overflow-hidden shadow-lg mb-10">
        <img src="<?php echo $artikel['gambar']; ?>"
             alt="<?php echo htmlspecialchars($artikel['judul']); ?>"
             class="w-full h-72 md:h-96 object-cover" />
    </div>

    <!-- Konten Artikel -->
    <article class="bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-2xl p-8 md:p-10 shadow-sm">
        <div class="prose prose-slate max-w-none
                    prose-p:text-slate-600 prose-p:text-sm prose-p:leading-relaxed prose-p:mb-4
                    prose-strong:text-primary prose-strong:font-bold
                    prose-ul:pl-5 prose-ul:space-y-1 prose-li:text-slate-600 prose-li:text-sm prose-li:leading-relaxed">
            <?php echo $artikel['isi']; ?>
        </div>
    </article>

    <!-- Tombol Kembali -->
    <div class="mt-8">
        <a href="berita.php"
           class="inline-flex items-center gap-2 text-sm font-bold text-primary hover:text-accent transition-colors">
            <span class="material-symbols-outlined text-lg">arrow_back</span>
            Kembali ke Daftar Berita
        </a>
    </div>

    <!-- Navigasi Artikel -->
    <?php if ($prev || $next): ?>
    <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 gap-4">
        <?php if ($prev): ?>
        <a href="berita-detail.php?id=<?php echo $prev['id']; ?>"
           class="group flex items-start gap-4 bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 hover:border-primary/30 rounded-2xl p-5 shadow-sm hover:shadow-md transition-all">
            <div class="w-10 h-10 bg-primary/10 group-hover:bg-primary rounded-xl flex items-center justify-center transition-all flex-shrink-0 mt-0.5">
                <span class="material-symbols-outlined text-primary group-hover:text-white transition-colors text-lg">arrow_back</span>
            </div>
            <div class="min-w-0">
                <p class="text-xs text-slate-400 font-medium mb-1">Artikel Sebelumnya</p>
                <p class="text-sm font-bold text-primary dark:text-white line-clamp-2"><?php echo htmlspecialchars($prev['judul']); ?></p>
            </div>
        </a>
        <?php else: ?><div></div><?php endif; ?>

        <?php if ($next): ?>
        <a href="berita-detail.php?id=<?php echo $next['id']; ?>"
           class="group flex items-start justify-end gap-4 bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 hover:border-accent/30 rounded-2xl p-5 shadow-sm hover:shadow-md transition-all text-right">
            <div class="min-w-0">
                <p class="text-xs text-slate-400 font-medium mb-1">Artikel Berikutnya</p>
                <p class="text-sm font-bold text-primary dark:text-white line-clamp-2"><?php echo htmlspecialchars($next['judul']); ?></p>
            </div>
            <div class="w-10 h-10 bg-accent/10 group-hover:bg-accent rounded-xl flex items-center justify-center transition-all flex-shrink-0 mt-0.5">
                <span class="material-symbols-outlined text-accent group-hover:text-white transition-colors text-lg">arrow_forward</span>
            </div>
        </a>
        <?php endif; ?>
    </div>
    <?php endif; ?>

</main>

<style>
/* Prose styling */
.prose p { margin-bottom: 1rem; }
.prose ul { list-style-type: disc; padding-left: 1.25rem; margin-bottom: 1rem; }
.prose li { margin-bottom: 0.25rem; }
.prose strong { color: #002147; font-weight: 700; }
</style>

<?php require_once 'footer.php'; ?>
