<?php
// ============================================================
// Konfigurasi halaman
// ============================================================
$page_title   = "Struktur Organisasi - Satpol PP Kabupaten Kubu Raya";
$current_page = "struktur-organisasi";

require_once 'header.php';
?>

<!-- Hero Section -->
<section class="relative w-full h-[420px] overflow-hidden bg-primary">
    <div class="absolute inset-0 z-0">
        <div class="w-full h-full bg-cover bg-center opacity-40"
            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBSGy6hBHPVh312XyczwXYJvsUZmgFx6afUBQMpnGgfJcTQ_FHrVZfyjRp4OAoF2dvXn9uLqWLSjuybafJc2FLRMwBpqSEG1fyG8wBW-iUKAv39jxN-LRZHe8SeiT2YXOdhtMYZERhHVSjIRe796dlySNqp3oYeOfdMcZUJFp_YG32VCorC4QxGp3B5ZUzTHGhNd7VsvRej4Vx9q3Z4CdDXONEhBwUXgsiJoKYe64FZtfoolCiI2qINVw1e6gHGAfNvYhRF5qwHD0Dl');"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-primary/70 via-primary/60 to-primary"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col justify-center">
        <!-- Breadcrumb -->
        <nav class="flex items-center gap-2 text-slate-400 text-xs font-medium mb-6">
            <a href="beranda.php" class="hover:text-accent transition-colors">Beranda</a>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <span class="text-slate-300">Profil</span>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <span class="text-accent">Struktur Organisasi</span>
        </nav>
        <span class="inline-block px-4 py-1.5 mb-4 rounded-full bg-accent/20 text-accent font-bold text-xs uppercase tracking-widest border border-accent/30 w-fit">Profil Instansi</span>
        <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight">
            Struktur <span class="text-accent">Organisasi</span>
        </h1>
        <p class="text-slate-300 mt-4 max-w-2xl text-base md:text-lg leading-relaxed">
            Hierarki dan susunan organisasi Satuan Polisi Pamong Praja Kabupaten Kubu Raya.
        </p>
    </div>
</section>

<!-- Main Content -->
<main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-16">

    <!-- Section Header -->
    <div class="text-center max-w-2xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-extrabold text-primary dark:text-white mb-4">
            Struktur Organisasi<br>Satpol PP Kabupaten Kubu Raya
        </h2>
        <p class="text-slate-500 dark:text-slate-400 leading-relaxed">
            Susunan organisasi ditetapkan berdasarkan Peraturan Bupati Kubu Raya yang mengatur tentang kedudukan, susunan organisasi, tugas, fungsi, dan tata kerja Satuan Polisi Pamong Praja.
        </p>
    </div>

    <!-- Bagan Struktur Organisasi -->
    <section id="bagan">
        <!-- Info bar -->
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-6">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 bg-primary rounded-lg flex items-center justify-center">
                    <span class="material-symbols-outlined text-white text-sm">image</span>
                </div>
                <div>
                    <p class="text-sm font-bold text-primary dark:text-white">Bagan Struktur Organisasi</p>
                    <p class="text-xs text-slate-400">Klik gambar atau tombol di bawah untuk melihat ukuran penuh</p>
                </div>
            </div>
            <!-- Aksi buttons -->
            <div class="flex items-center gap-3">
                <a href="assets/img/struktur-organisasi.png" 
                   download 
                   id="btn-download"
                   class="flex items-center gap-2 text-xs font-bold text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-accent bg-slate-100 dark:bg-slate-800 hover:bg-primary/10 px-4 py-2 rounded-xl transition-all">
                    <span class="material-symbols-outlined text-sm">download</span>
                    Unduh Gambar
                </a>
                <button id="btn-fullscreen"
                    onclick="openLightbox()"
                    class="flex items-center gap-2 text-xs font-bold text-white bg-primary hover:bg-primary/80 px-4 py-2 rounded-xl transition-all shadow-md shadow-primary/20">
                    <span class="material-symbols-outlined text-sm">zoom_in</span>
                    Lihat Full Size
                </button>
            </div>
        </div>

        <!-- Image Container -->
        <div class="bg-white dark:bg-slate-900 rounded-3xl shadow-xl shadow-slate-200/80 dark:shadow-slate-900/50 border border-slate-100 dark:border-slate-800 p-6 md:p-10">
            <!-- Placeholder instruction (ganti src di sini dengan path gambar asli) -->
            <div id="org-image-container"
                class="relative group cursor-zoom-in overflow-hidden rounded-2xl bg-slate-50 dark:bg-slate-800 border-2 border-dashed border-slate-200 dark:border-slate-700"
                onclick="openLightbox()">

                <!-- === GANTI src BERIKUT DENGAN PATH GAMBAR BAGAN ANDA === -->
                <!-- Contoh: src="assets/img/struktur-organisasi.png" -->
                <img id="org-chart-img"
                    src="assets/img/struktur-organisasi.png"
                    alt="Bagan Struktur Organisasi Satpol PP Kabupaten Kubu Raya"
                    class="w-full h-auto object-contain transition-transform duration-500 group-hover:scale-105"
                    onerror="this.parentElement.classList.add('fallback-mode'); this.style.display='none'; document.getElementById('org-placeholder').style.display='flex';" />

                <!-- Fallback jika gambar belum tersedia -->
                <div id="org-placeholder"
                    class="hidden w-full min-h-[400px] flex-col items-center justify-center gap-6 p-12 text-center">
                    <div class="w-20 h-20 bg-primary/10 rounded-2xl flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary text-4xl">account_tree</span>
                    </div>
                    <div>
                        <p class="text-primary dark:text-slate-200 font-bold text-lg mb-2">Bagan Belum Tersedia</p>
                        <p class="text-slate-400 text-sm max-w-sm leading-relaxed">
                            Silakan upload gambar bagan struktur organisasi ke folder
                            <code class="bg-slate-100 dark:bg-slate-700 px-2 py-0.5 rounded text-xs font-mono">assets/img/</code>
                            dengan nama <code class="bg-slate-100 dark:bg-slate-700 px-2 py-0.5 rounded text-xs font-mono">struktur-organisasi.png</code>
                        </p>
                    </div>
                    <!-- Placeholder bagan dummy -->
                    <div class="w-full max-w-2xl border border-dashed border-slate-200 dark:border-slate-700 rounded-2xl p-8">
                        <div class="flex flex-col items-center gap-4">
                            <!-- Top node -->
                            <div class="w-48 bg-primary text-white text-xs font-bold py-3 px-4 rounded-xl text-center shadow-lg">Kepala Satuan</div>
                            <div class="w-px h-6 bg-slate-300"></div>
                            <!-- Second row -->
                            <div class="flex flex-col md:flex-row items-center gap-4 w-full justify-center">
                                <div class="w-36 bg-slate-700 text-white text-xs font-bold py-2 px-3 rounded-xl text-center">Sekretariat</div>
                            </div>
                            <div class="w-px h-6 bg-slate-300"></div>
                            <!-- Bidang row -->
                            <div class="flex flex-wrap items-center gap-3 w-full justify-center">
                                <div class="bg-accent/80 text-white text-[10px] font-bold py-2 px-3 rounded-xl text-center">Bid. Ketertiban Umum</div>
                                <div class="bg-accent/80 text-white text-[10px] font-bold py-2 px-3 rounded-xl text-center">Bid. Penegakan Perda</div>
                                <div class="bg-accent/80 text-white text-[10px] font-bold py-2 px-3 rounded-xl text-center">Bid. PPNS</div>
                                <div class="bg-accent/80 text-white text-[10px] font-bold py-2 px-3 rounded-xl text-center">Bid. Linmas</div>
                            </div>
                        </div>
                        <p class="text-center text-[10px] text-slate-400 mt-6 italic">* Ilustrasi placeholder — ganti dengan gambar asli</p>
                    </div>
                </div>

                <!-- Hover Overlay -->
                <div class="absolute inset-0 bg-primary/0 group-hover:bg-primary/10 transition-all duration-300 flex items-center justify-center rounded-2xl">
                    <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-primary text-white px-4 py-2 rounded-xl flex items-center gap-2 shadow-xl text-sm font-bold">
                        <span class="material-symbols-outlined text-sm">zoom_in</span>
                        Klik untuk Perbesar
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Keterangan Section -->
    <section>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <?php
            $keterangan = [
                [
                    'icon'  => 'update',
                    'label' => 'Terakhir Diperbarui',
                    'value' => 'Tahun 2024',
                    'color' => 'text-primary',
                    'bg'    => 'bg-primary/10',
                ],
                [
                    'icon'  => 'groups',
                    'label' => 'Total Personel',
                    'value' => 'Lihat Data ASN',
                    'color' => 'text-emerald-700',
                    'bg'    => 'bg-emerald-50 dark:bg-emerald-950/30',
                ],
            ];
            foreach ($keterangan as $k): ?>
            <div class="bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-2xl p-5 shadow-sm flex items-center gap-4">
                <div class="<?php echo $k['bg']; ?> w-12 h-12 rounded-xl flex items-center justify-center flex-shrink-0">
                    <span class="material-symbols-outlined <?php echo $k['color']; ?>"><?php echo $k['icon']; ?></span>
                </div>
                <div>
                    <p class="text-xs text-slate-400 font-semibold uppercase tracking-widest"><?php echo $k['label']; ?></p>
                    <p class="text-sm font-bold <?php echo $k['color']; ?>"><?php echo $k['value']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Bottom Navigation -->
    <section class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <a href="tupoksi.php" class="group flex items-center gap-4 bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 hover:border-primary/30 rounded-2xl p-5 shadow-sm hover:shadow-md transition-all">
            <div class="w-10 h-10 bg-primary/10 group-hover:bg-primary rounded-xl flex items-center justify-center transition-all">
                <span class="material-symbols-outlined text-primary group-hover:text-white transition-colors">arrow_back</span>
            </div>
            <div>
                <p class="text-xs text-slate-400 font-medium">Sebelumnya</p>
                <p class="text-sm font-bold text-primary dark:text-white">Tugas Pokok & Fungsi</p>
            </div>
        </a>
        <a href="beranda.php" class="group flex items-center justify-end gap-4 bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 hover:border-accent/30 rounded-2xl p-5 shadow-sm hover:shadow-md transition-all">
            <div class="text-right">
                <p class="text-xs text-slate-400 font-medium">Kembali ke</p>
                <p class="text-sm font-bold text-primary dark:text-white">Beranda</p>
            </div>
            <div class="w-10 h-10 bg-accent/10 group-hover:bg-accent rounded-xl flex items-center justify-center transition-all">
                <span class="material-symbols-outlined text-accent group-hover:text-white transition-colors">home</span>
            </div>
        </a>
    </section>

</main>

<!-- ===== LIGHTBOX MODAL ===== -->
<div id="lightbox-overlay"
    class="fixed inset-0 z-[9999] bg-black/90 backdrop-blur-sm items-center justify-center hidden"
    onclick="closeLightboxOnOverlay(event)">

    <!-- Close Button -->
    <button onclick="closeLightbox()"
        class="absolute top-4 right-4 w-10 h-10 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center text-white transition-all z-10">
        <span class="material-symbols-outlined">close</span>
    </button>

    <!-- Zoom Controls -->
    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex items-center gap-3 z-10">
        <button onclick="zoomOut()"
            class="w-10 h-10 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center text-white transition-all">
            <span class="material-symbols-outlined">zoom_out</span>
        </button>
        <span id="zoom-label" class="text-white text-sm font-bold w-14 text-center">100%</span>
        <button onclick="zoomIn()"
            class="w-10 h-10 bg-white/10 hover:bg-white/20 rounded-full flex items-center justify-center text-white transition-all">
            <span class="material-symbols-outlined">zoom_in</span>
        </button>
        <button onclick="resetZoom()"
            class="ml-2 text-xs text-white/60 hover:text-white font-bold uppercase tracking-widest transition-colors px-3 py-2 bg-white/10 hover:bg-white/20 rounded-xl">
            Reset
        </button>
    </div>

    <!-- Image Wrapper (scrollable) -->
    <div class="w-full h-full flex items-center justify-center overflow-auto p-8 pt-16 pb-24">
        <img id="lightbox-img"
            src="assets/img/struktur-organisasi.png"
            alt="Struktur Organisasi Satpol PP Kabupaten Kubu Raya - Full Size"
            class="max-w-none rounded-xl shadow-2xl transition-transform duration-200 origin-center"
            style="transform-origin: center center;"
            onerror="this.src=''; this.alt='Gambar belum tersedia';" />
    </div>

    <!-- Caption -->
    <div class="absolute top-4 left-4 text-white/70 text-xs font-semibold">
        Struktur Organisasi — Satpol PP Kab. Kubu Raya
    </div>
</div>

<!-- ===== JAVASCRIPT ===== -->
<script>
    // ---- Lightbox ----
    var currentZoom = 1;
    var zoomStep = 0.25;
    var minZoom = 0.5;
    var maxZoom = 4;

    function openLightbox() {
        var overlay = document.getElementById('lightbox-overlay');
        var img = document.getElementById('lightbox-img');
        // Sync src from the page image
        var pageImg = document.getElementById('org-chart-img');
        if (pageImg && pageImg.src && !pageImg.style.display) {
            img.src = pageImg.src;
        }
        overlay.classList.remove('hidden');
        overlay.classList.add('flex');
        document.body.style.overflow = 'hidden';
        currentZoom = 1;
        applyZoom();
    }

    function closeLightbox() {
        var overlay = document.getElementById('lightbox-overlay');
        overlay.classList.add('hidden');
        overlay.classList.remove('flex');
        document.body.style.overflow = '';
    }

    function closeLightboxOnOverlay(event) {
        if (event.target === document.getElementById('lightbox-overlay') ||
            event.target.closest('.overflow-auto')) {
            // Only close if clicking the backdrop, not the image
            if (event.target === document.getElementById('lightbox-overlay')) {
                closeLightbox();
            }
        }
    }

    function applyZoom() {
        var img = document.getElementById('lightbox-img');
        img.style.transform = 'scale(' + currentZoom + ')';
        document.getElementById('zoom-label').textContent = Math.round(currentZoom * 100) + '%';
    }

    function zoomIn() {
        if (currentZoom < maxZoom) {
            currentZoom = Math.min(currentZoom + zoomStep, maxZoom);
            applyZoom();
        }
    }

    function zoomOut() {
        if (currentZoom > minZoom) {
            currentZoom = Math.max(currentZoom - zoomStep, minZoom);
            applyZoom();
        }
    }

    function resetZoom() {
        currentZoom = 1;
        applyZoom();
    }

    // Keyboard support
    document.addEventListener('keydown', function (e) {
        var overlay = document.getElementById('lightbox-overlay');
        if (overlay.classList.contains('hidden')) return;
        if (e.key === 'Escape') closeLightbox();
        if (e.key === '+' || e.key === '=') zoomIn();
        if (e.key === '-') zoomOut();
        if (e.key === '0') resetZoom();
    });

    // Mouse wheel zoom in lightbox
    document.getElementById('lightbox-overlay').addEventListener('wheel', function (e) {
        if (document.getElementById('lightbox-overlay').classList.contains('hidden')) return;
        e.preventDefault();
        if (e.deltaY < 0) {
            zoomIn();
        } else {
            zoomOut();
        }
    }, { passive: false });
</script>

<?php require_once 'footer.php'; ?>
