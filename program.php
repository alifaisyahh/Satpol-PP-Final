<?php
$page_title   = 'Program Kerja - Satpol PP Kabupaten Kubu Raya';
$current_page = 'program';
include 'header.php';
?>

<!-- Hero Section -->
<section class="relative w-full h-[420px] overflow-hidden bg-primary">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-cover bg-center opacity-40"
            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDeLFcmlZFAAz_hMeL_QUSPC8jKtQ92hHlpNJ6jNit6O75bieL7n-wp9UORrGQJJA4F5lQDrx834Y5SeICCBpluVl5deDrc37tnDSQsZKSAQNTgH_zJ_uwD7nJ7LfYwJUpZQa0HaTwHkaA2eUFV0rrgiFVFPEI4OhydFI5vnG62ZJcWjld_VDISdss5nfGwnxjNqlXuUuUITsUEd98qp8De-j545Wqw_lPBxfDRAdDYi26IGSWis0U8zEUg98nPbroyurk5oIJvnYY5');"></div>
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
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight">
            Dokumen Strategis <br><span class="text-accent">&amp; Program Kerja</span>
        </h1>
        <p class="text-slate-300 mt-4 max-w-2xl text-sm md:text-base leading-relaxed">
            Akses publik terhadap dokumen perencanaan dan laporan kinerja Satuan Polisi Pamong Praja Kabupaten Kubu Raya.
        </p>
    </div>
</section>

    <!-- Main Content: Strategic Documents List -->
    <section class="py-24 px-8 max-w-7xl mx-auto">
        <div class="mb-12">
            <h2 class="text-primary dark:text-white text-3xl font-extrabold tracking-tight">
                Daftar Dokumen Strategis
            </h2>
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
            <?php foreach ($documents as $index => $doc): ?>
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
                    <div class="flex items-center gap-4 mt-6 md:mt-0 w-full md:w-auto justify-between md:justify-end">
                        <div class="text-right hidden md:block">
                            <p class="text-[10px] font-bold uppercase text-slate-500">Ukuran File</p>
                            <p class="font-bold text-primary dark:text-white">
                                <?= htmlspecialchars($doc['file_size']) ?>
                            </p>
                        </div>
                        <div class="flex items-center gap-3">
                            <button
                                onclick="openDocModal('<?= htmlspecialchars($doc['file_url']) ?>', '<?= htmlspecialchars($doc['title']) ?>')"
                                class="bg-primary/10 text-primary hover:bg-primary hover:text-white px-5 py-3 rounded-xl font-bold text-sm flex items-center gap-2 transition-all border border-primary/20">
                                <span class="material-symbols-outlined text-[18px]">visibility</span>
                                Lihat
                            </button>
                            <a href="<?= htmlspecialchars($doc['file_url']) ?>"
                                download
                                class="bg-accent text-white px-5 py-3 rounded-xl font-bold text-sm flex items-center gap-2 shadow-md shadow-accent/20 hover:shadow-accent/40 hover:-translate-y-1 transition-all active:scale-95">
                                <span class="material-symbols-outlined text-[18px]">download</span>
                                Unduh PDF
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<!-- PDF Modal Viewer -->
<div id="doc-modal" class="fixed inset-0 z-[9999] bg-black/80 backdrop-blur-sm flex items-center justify-center hidden">
    <div class="relative bg-white dark:bg-slate-900 rounded-2xl shadow-2xl w-[95vw] max-w-5xl h-[90vh] flex flex-col overflow-hidden">
        <!-- Modal Header -->
        <div class="flex items-center justify-between px-6 py-4 border-b border-slate-100 dark:border-slate-800 bg-white dark:bg-slate-900">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 bg-primary/10 rounded-xl flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-lg">description</span>
                </div>
                <div>
                    <p class="text-xs text-slate-400 font-medium uppercase tracking-widest">Dokumen</p>
                    <h3 id="modal-title" class="text-base font-extrabold text-primary dark:text-white"></h3>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <a id="modal-download-btn" href="#" download
                    class="flex items-center gap-2 bg-accent text-white px-4 py-2 rounded-xl font-bold text-sm hover:-translate-y-0.5 transition-all shadow-md shadow-accent/20">
                    <span class="material-symbols-outlined text-[18px]">download</span>
                    Unduh PDF
                </a>
                <button onclick="closeDocModal()"
                    class="w-9 h-9 bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 rounded-xl flex items-center justify-center transition-colors">
                    <span class="material-symbols-outlined text-slate-600 dark:text-slate-300">close</span>
                </button>
            </div>
        </div>

        <!-- iframe / placeholder -->
        <div class="flex-1 overflow-hidden bg-slate-100 dark:bg-slate-800 relative">
            <iframe id="modal-iframe" src="" class="w-full h-full hidden border-0"></iframe>
            <!-- Placeholder saat file_url = '#' -->
            <div id="modal-placeholder" class="w-full h-full flex flex-col items-center justify-center gap-6 text-center p-8">
                <div class="w-20 h-20 bg-primary/10 rounded-2xl flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-4xl">picture_as_pdf</span>
                </div>
                <div>
                    <p class="text-primary dark:text-white font-bold text-lg mb-2">File PDF Belum Tersedia</p>
                    <p class="text-slate-500 text-sm max-w-sm leading-relaxed">
                        Dokumen belum diunggah. Silakan ganti nilai <code class="bg-slate-200 dark:bg-slate-700 px-2 py-0.5 rounded text-xs font-mono">file_url</code> pada array <code class="bg-slate-200 dark:bg-slate-700 px-2 py-0.5 rounded text-xs font-mono">$documents</code> di <code class="bg-slate-200 dark:bg-slate-700 px-2 py-0.5 rounded text-xs font-mono">program.php</code> dengan path file PDF yang sebenarnya.
                    </p>
                </div>
                <div class="flex items-center gap-2 bg-primary/5 border border-primary/20 rounded-xl px-5 py-3">
                    <span class="material-symbols-outlined text-primary text-sm">info</span>
                    <span class="text-xs text-slate-600 dark:text-slate-300 font-medium">Contoh: <code>'file_url' => 'assets/docs/lkjip-2023.pdf'</code></span>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function openDocModal(url, title) {
    document.getElementById('modal-title').textContent = title;
    document.getElementById('modal-download-btn').href = url;

    var iframe   = document.getElementById('modal-iframe');
    var ph       = document.getElementById('modal-placeholder');
    var modal    = document.getElementById('doc-modal');

    if (url && url !== '#') {
        iframe.src = url;
        iframe.classList.remove('hidden');
        ph.classList.add('hidden');
    } else {
        iframe.src = '';
        iframe.classList.add('hidden');
        ph.classList.remove('hidden');
    }

    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeDocModal() {
    var modal  = document.getElementById('doc-modal');
    var iframe = document.getElementById('modal-iframe');
    modal.classList.add('hidden');
    iframe.src = '';
    document.body.style.overflow = '';
}

// Tutup modal saat klik backdrop
document.getElementById('doc-modal').addEventListener('click', function(e) {
    if (e.target === this) closeDocModal();
});

// Tutup modal saat tekan Escape
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && !document.getElementById('doc-modal').classList.contains('hidden')) {
        closeDocModal();
    }
});
</script>

<?php include 'footer.php'; ?>