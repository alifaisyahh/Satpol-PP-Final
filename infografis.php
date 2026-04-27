<?php
$page_title   = "Infografis - Satpol PP Kabupaten Kubu Raya";
$current_page = "infografis";
require_once 'header.php';

$infografis = [
    [
        'judul'     => 'Alur Penanganan Pengaduan Ketertiban Umum',
        'kategori'  => 'Pelayanan',
        'gambar'    => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBSGy6hBHPVh312XyczwXYJvsUZmgFx6afUBQMpnGgfJcTQ_FHrVZfyjRp4OAoF2dvXn9uLqWLSjuybafJc2FLRMwBpqSEG1fyG8wBW-iUKAv39jxN-LRZHe8SeiT2YXOdhtMYZERhHVSjIRe796dlySNqp3oYeOfdMcZUJFp_YG32VCorC4QxGp3B5ZUzTHGhNd7VsvRej4Vx9q3Z4CdDXONEhBwUXgsiJoKYe64FZtfoolCiI2qINVw1e6gHGAfNvYhRF5qwHD0Dl',
        'tanggal'   => '10 Mei 2026'
    ],
    [
        'judul'     => 'Struktur Organisasi Satpol PP',
        'kategori'  => 'Profil',
        'gambar'    => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDQeYk4Z_N4F2E2-o4B4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z4Z', // placeholder
        'tanggal'   => '05 Mei 2026'
    ],
    [
        'judul'     => 'Kawasan Bebas PKL di Sungai Raya',
        'kategori'  => 'Operasional',
        'gambar'    => 'https://lh3.googleusercontent.com/aida-public/AB6AXuC9u85JT-qUW_bkCCvz2QrNGAdDnRjP2154IVnfzDZbTj39zEjQgoPzAvVCkhnvD4MF0TJoSKXtCAISl_wp-98MGCncu41QWK_P2ouaJpmQC94Bqz2lYcgGPvCCGN8wTSWYmCKcFKGHXRT4Gm1LewIU7hVWqRf4E2FPKH4tty9oNUBw4HtaAz6tnnfR7ou2NjFoEo1brNQ_AbjLPCYR5iTxyDuf4ik2aqm2dZa7fLxz91avliWoovqHSSJxKoAXmgjV074WQsskKfcm',
        'tanggal'   => '25 April 2026'
    ],
    [
        'judul'     => 'Syarat Rekomendasi Izin Keramaian',
        'kategori'  => 'Pelayanan',
        'gambar'    => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBduJDsl5l4muB6I-wIUVgwmUyPYgbT5gJTd2CKPeKSktjkMDSJGkdMJAlCu90lO8F18KMfGTirgQcad2UEyxP1arlguAnKvBiY-UevEtPcpAPfJLz60x7IPLrr7v1Wz4FOUMysh8QesL_q967F2fyXOZ9VwwUO9HmaBDfP0OWTQQKU8xvEYvU5KpPb0Totznmq0kIA82ONDqQHGwV7hxhtyo5U1CokK8I2BCnZpUqfprMHw7kImAiVLScwN_c6_qTOMel-xYaQLGvH',
        'tanggal'   => '15 April 2026'
    ]
];
?>

<!-- Hero Section (Standar) -->
<section class="relative w-full h-[420px] overflow-hidden bg-primary">
    <div class="absolute inset-0 z-0">
        <div class="w-full h-full bg-cover bg-center opacity-40" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDeLFcmlZFAAz_hMeL_QUSPC8jKtQ92hHlpNJ6jNit6O75bieL7n-wp9UORrGQJJA4F5lQDrx834Y5SeICCBpluVl5deDrc37tnDSQsZKSAQNTgH_zJ_uwD7nJ7LfYwJUpZQa0HaTwHkaA2eUFV0rrgiFVFPEI4OhydFI5vnG62ZJcWjld_VDISdss5nfGwnxjNqlXuUuUITsUEd98qp8De-j545Wqw_lPBxfDRAdDYi26IGSWis0U8zEUg98nPbroyurk5oIJvnYY5');"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-primary/70 via-primary/60 to-primary"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col justify-center">
        <nav class="flex items-center gap-2 text-slate-400 text-xs font-medium mb-6">
            <a href="beranda.php" class="hover:text-accent transition-colors">Beranda</a>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <span class="text-slate-300">Media Informasi</span>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <span class="text-accent">Infografis</span>
        </nav>
        <span class="inline-block px-4 py-1.5 mb-4 rounded-full bg-accent/20 text-accent font-bold text-xs uppercase tracking-widest border border-accent/30 w-fit">Media Informasi</span>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight">
            Galeri <span class="text-accent">Infografis</span>
        </h1>
        <p class="text-slate-300 mt-4 max-w-2xl text-sm md:text-base leading-relaxed">
            Informasi ringkas dan visual mengenai pelayanan, prosedur, dan data terkait Satpol PP Kabupaten Kubu Raya.
        </p>
    </div>
</section>

<!-- Main Content -->
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="text-center mb-12">
        <h2 class="text-2xl font-extrabold text-primary dark:text-white">Kumpulan Infografis</h2>
    </div>

    <!-- Grid Infografis -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($infografis as $info): ?>
        <div class="group bg-white dark:bg-slate-900 rounded-3xl overflow-hidden shadow-sm hover:shadow-xl transition-all border border-slate-100 dark:border-slate-800 cursor-pointer flex flex-col" onclick="openLightbox('<?php echo htmlspecialchars($info['gambar']); ?>', '<?php echo htmlspecialchars($info['judul']); ?>')">
            <div class="relative aspect-[4/3] bg-slate-100 dark:bg-slate-800 overflow-hidden">
                <img src="<?php echo htmlspecialchars($info['gambar']); ?>" alt="<?php echo htmlspecialchars($info['judul']); ?>" onerror="this.src='https://placehold.co/800x600/f8fafc/94a3b8?text=Gambar+Tidak+Tersedia'" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0 bg-primary/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <span class="material-symbols-outlined text-white text-4xl drop-shadow-lg">zoom_in</span>
                </div>
                <span class="absolute top-4 left-4 bg-accent text-white text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full"><?php echo htmlspecialchars($info['kategori']); ?></span>
            </div>
            <div class="p-6">
                <h3 class="text-base font-extrabold text-primary dark:text-white mb-2 leading-snug group-hover:text-accent transition-colors"><?php echo htmlspecialchars($info['judul']); ?></h3>
                <p class="text-xs text-slate-500 font-medium"><span class="material-symbols-outlined text-[14px] align-middle mr-1">calendar_today</span> <?php echo htmlspecialchars($info['tanggal']); ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</main>

<!-- Lightbox Modal -->
<div id="lightbox-modal" class="fixed inset-0 z-[9999] bg-black/95 backdrop-blur-sm hidden items-center justify-center">
    <button onclick="closeLightbox()" class="absolute top-4 right-4 z-10 w-12 h-12 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center transition-colors text-white">
        <span class="material-symbols-outlined">close</span>
    </button>
    <div class="flex flex-col items-center justify-center w-full h-full p-4 md:p-12">
        <img id="lightbox-img" src="" alt="" class="max-w-full max-h-[85vh] object-contain rounded-lg shadow-2xl">
        <p id="lightbox-title" class="text-white font-bold mt-6 text-center text-lg md:text-xl"></p>
    </div>
</div>

<script>
function openLightbox(src, title) {
    document.getElementById('lightbox-img').src = src;
    document.getElementById('lightbox-title').textContent = title;
    var modal = document.getElementById('lightbox-modal');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    document.body.style.overflow = 'hidden';
}
function closeLightbox() {
    var modal = document.getElementById('lightbox-modal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');
    document.getElementById('lightbox-img').src = '';
    document.body.style.overflow = '';
}
document.getElementById('lightbox-modal').addEventListener('click', function(e) {
    if (e.target === this || e.target.closest('.flex-col')) closeLightbox();
});
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeLightbox();
});
</script>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-8 flex justify-end">
    <p class="text-slate-400 text-xs italic">Terakhir Diperbarui: 27 April 2026</p>
</div>
<?php require_once 'footer.php'; ?>
