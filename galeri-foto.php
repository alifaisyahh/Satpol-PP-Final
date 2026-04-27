<?php
$page_title   = "Galeri Foto - Satpol PP Kabupaten Kubu Raya";
$current_page = "galeri-foto";
require_once 'header.php';

$galeri_foto = [
    [
        'judul'    => 'Penertiban PKL di Kawasan Supadio',
        'kategori' => 'Operasi Lapangan',
        'gambar'   => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBduJDsl5l4muB6I-wIUVgwmUyPYgbT5gJTd2CKPeKSktjkMDSJGkdMJAlCu90lO8F18KMfGTirgQcad2UEyxP1arlguAnKvBiY-UevEtPcpAPfJLz60x7IPLrr7v1Wz4FOUMysh8QesL_q967F2fyXOZ9VwwUO9HmaBDfP0OWTQQKU8xvEYvU5KpPb0Totznmq0kIA82ONDqQHGwV7hxhtyo5U1CokK8I2BCnZpUqfprMHw7kImAiVLScwN_c6_qTOMel-xYaQLGvH',
        'tanggal'  => '15 April 2026',
        'col'      => 'md:col-span-2 md:row-span-2' // besar
    ],
    [
        'judul'    => 'Apel Gelar Pasukan Satpol PP',
        'kategori' => 'Kegiatan Internal',
        'gambar'   => 'https://lh3.googleusercontent.com/aida-public/AB6AXuC_KkDUFdcqUkTUwrgTMQqTWm8Ab1VDm3EdUuvn6GNAjYEa2jkjlCqbKCFFgIivzQ0tbX_7GFit-YSSIH0uJTgD8ebtq3IDVTyH4_nd9ZgCOBTHVWP17IzUwDjbfuIe1R0DVuQWLp5V1VQVS8AazBJTiDyzWQff2PXE5srqrp3qVZJFSmJMnQGjCEUyKoDks6iwNLYgaSBoFYGLiKHJZCNG4Iuyk8faHqu-v45FbMOtOwukU_YhK-g0xyAbHq0u31tDx9gDCFqO1uxQ',
        'tanggal'  => '10 April 2026',
        'col'      => 'md:col-span-1 md:row-span-1'
    ],
    [
        'judul'    => 'Edukasi Kesadaran Hukum Sekolah',
        'kategori' => 'Sosialisasi',
        'gambar'   => 'https://lh3.googleusercontent.com/aida-public/AB6AXuC9u85JT-qUW_bkCCvz2QrNGAdDnRjP2154IVnfzDZbTj39zEjQgoPzAvVCkhnvD4MF0TJoSKXtCAISl_wp-98MGCncu41QWK_P2ouaJpmQC94Bqz2lYcgGPvCCGN8wTSWYmCKcFKGHXRT4Gm1LewIU7hVWqRf4E2FPKH4tty9oNUBw4HtaAz6tnnfR7ou2NjFoEo1brNQ_AbjLPCYR5iTxyDuf4ik2aqm2dZa7fLxz91avliWoovqHSSJxKoAXmgjV074WQsskKfcm',
        'tanggal'  => '05 April 2026',
        'col'      => 'md:col-span-1 md:row-span-1'
    ],
    [
        'judul'    => 'Pengamanan Event Budaya Daerah',
        'kategori' => 'Pengamanan',
        'gambar'   => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCQFWoITaf21XaiV3DRMKYddyUiiRkp3JR1V_73h2iXsczEbl7d_QDu7c5TZ_05IXSEXPJmLlUCN-U8yEzljea8AIU_IssJ4dZRyXWh7cjJW1pRz5w6xm-djR0t5JIc3c-GMClcKNJz2CP0xBWV0z8PryuLbCPTl6jMD8_dmZ7XXDJ4aevNVdQ0-vD8qgkXIGiPJKgULmyonh5Za2oFiMpGsN-_wilUDNscw0MiYOoyCeZzEGJz54XyssrdRJz3Mml_gvb1sIzHP_uF',
        'tanggal'  => '01 April 2026',
        'col'      => 'md:col-span-1 md:row-span-1'
    ],
    [
        'judul'    => 'Kegiatan Pelatihan Tanggap Darurat',
        'kategori' => 'Pelatihan',
        'gambar'   => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCPr4yUWSvyEqzUwd1mA78qJrRIpaxLldNVASIODsshMN_l7DOLysIdYK14kFs7OTEpAzdPXB0sr15vYD5oTuEj5yxmD86wQ-E2hF45oYR0KAlASHgG1nGS_KIptK5m6w1-iwjx8JLMGQGlnjA9JteXDwzhyP5Gf-JB_4a7vWLpon3EB119XQBjdy3LvpnjI3IA4PKRlLSIrHi3HkbeSJ39mqGuiz6uHGg9oyPntKVddEB5KCiip_ZkVD9FJ18bJwRmKSBy3WdxF3SX',
        'tanggal'  => '28 Maret 2026',
        'col'      => 'md:col-span-1 md:row-span-1'
    ],
    [
        'judul'    => 'Armada Operasional Satpol PP',
        'kategori' => 'Fasilitas',
        'gambar'   => 'https://lh3.googleusercontent.com/aida-public/AB6AXuA-ks630M-tPvVapmS5nKdCzIHBTpUwFJuRuP7Dd-ylOf9pMp7-lonYsQn18x8V2gbFoiyluwcmwat2yV2BI2ANz_12aT_-G-jiJYOznYYjKAoo3JkZIuZW5TUH1VRuW2OyS0Fx8RX0G3m_n9dEnVZiRVccsp-yf2WCNehAGPx-epMHaKtJ2gAO4K1Poq0PWN1JzXyUNXT51g3BK9go12OHoN3ATeRJ_Ob70CGqoMdbm-DX_8M47h5boBZj_jFPCLsgtKYbPnAJimKk',
        'tanggal'  => '25 Maret 2026',
        'col'      => 'md:col-span-2 md:row-span-1' // lebar
    ],
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
            <span class="text-accent">Galeri Foto</span>
        </nav>
        <span class="inline-block px-4 py-1.5 mb-4 rounded-full bg-accent/20 text-accent font-bold text-xs uppercase tracking-widest border border-accent/30 w-fit">Media Informasi</span>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight">
            Galeri <span class="text-accent">Foto</span>
        </h1>
        <p class="text-slate-300 mt-4 max-w-2xl text-sm md:text-base leading-relaxed">
            Dokumentasi visual berbagai kegiatan, operasi lapangan, dan layanan dari Satpol PP Kabupaten Kubu Raya.
        </p>
    </div>
</section>

<!-- Main Content -->
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="text-center mb-12">
        <h2 class="text-2xl font-extrabold text-primary dark:text-white">Galeri Foto</h2>
    </div>

    <!-- Layout Masonry Columns -->
    <div class="columns-1 sm:columns-2 md:columns-3 lg:columns-4 gap-4 space-y-4">
        <?php foreach ($galeri_foto as $foto): ?>
        <div class="group relative rounded-3xl overflow-hidden cursor-pointer shadow-sm hover:shadow-xl transition-all duration-500 break-inside-avoid" onclick="openLightbox('<?php echo htmlspecialchars($foto['gambar']); ?>', '<?php echo htmlspecialchars($foto['judul']); ?>')">
            <img src="<?php echo htmlspecialchars($foto['gambar']); ?>" alt="<?php echo htmlspecialchars($foto['judul']); ?>" onerror="this.src='https://placehold.co/800x600/f8fafc/94a3b8?text=Gambar+Tidak+Tersedia'" class="w-full h-auto block object-cover transition-transform duration-700 group-hover:scale-110">
            <!-- Overlay Gradient -->
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-80 group-hover:opacity-100 transition-opacity"></div>
            <!-- Icon Center Hover -->
            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                <span class="material-symbols-outlined text-white text-5xl drop-shadow-xl">fullscreen</span>
            </div>
            <!-- Text Content (Bottom) -->
            <div class="absolute bottom-0 left-0 right-0 p-6 translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                <span class="inline-block px-3 py-1 bg-accent text-white text-[10px] font-bold uppercase tracking-widest rounded-full mb-3 opacity-0 group-hover:opacity-100 transition-opacity delay-100"><?php echo htmlspecialchars($foto['kategori']); ?></span>
                <h3 class="text-white font-extrabold text-lg leading-snug drop-shadow-md"><?php echo htmlspecialchars($foto['judul']); ?></h3>
                <p class="text-slate-300 text-xs mt-1 font-medium drop-shadow-md opacity-0 group-hover:opacity-100 transition-opacity delay-200"><?php echo htmlspecialchars($foto['tanggal']); ?></p>
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
