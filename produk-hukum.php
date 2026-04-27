<?php
$page_title   = "Produk Hukum - Satpol PP Kabupaten Kubu Raya";
$current_page = "produk-hukum";
require_once 'header.php';

$produk_hukum = [
    [
        'jenis'     => 'Peraturan Daerah',
        'nomor'     => 'No. 3 Tahun 2024',
        'tentang'   => 'Ketertiban Umum dan Ketentraman Masyarakat',
        'tahun'     => '2024',
        'ukuran'    => '2.1 MB',
        'file'      => '#',
    ],
    [
        'jenis'     => 'Peraturan Bupati',
        'nomor'     => 'No. 15 Tahun 2025',
        'tentang'   => 'Kedudukan, Susunan Organisasi, Tugas, Fungsi dan Tata Kerja Satpol PP',
        'tahun'     => '2025',
        'ukuran'    => '1.5 MB',
        'file'      => '#',
    ],
    [
        'jenis'     => 'Keputusan Bupati',
        'nomor'     => 'No. 45/KEP/2026',
        'tentang'   => 'Pembentukan Satuan Tugas Penertiban Terpadu',
        'tahun'     => '2026',
        'ukuran'    => '800 KB',
        'file'      => '#',
    ],
    [
        'jenis'     => 'Peraturan Daerah',
        'nomor'     => 'No. 7 Tahun 2020',
        'tentang'   => 'Retribusi Izin Mendirikan Bangunan dan Penertibannya',
        'tahun'     => '2020',
        'ukuran'    => '1.8 MB',
        'file'      => '#',
    ],
    [
        'jenis'     => 'Peraturan Bupati',
        'nomor'     => 'No. 22 Tahun 2023',
        'tentang'   => 'Petunjuk Teknis Pelaksanaan Penegakan Perda',
        'tahun'     => '2023',
        'ukuran'    => '1.2 MB',
        'file'      => '#',
    ],
];

// Helper warna jenis
$jenis_warna = [
    'Peraturan Daerah' => 'bg-red-100 text-red-700 dark:bg-red-900/30 dark:text-red-300 border-red-200',
    'Peraturan Bupati' => 'bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-300 border-blue-200',
    'Keputusan Bupati' => 'bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-300 border-green-200',
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
            <span class="text-accent">Produk Hukum</span>
        </nav>
        <span class="inline-block px-4 py-1.5 mb-4 rounded-full bg-accent/20 text-accent font-bold text-xs uppercase tracking-widest border border-accent/30 w-fit">Media Informasi</span>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight">
            Produk <span class="text-accent">Hukum</span>
        </h1>
        <p class="text-slate-300 mt-4 max-w-2xl text-sm md:text-base leading-relaxed">
            Kumpulan peraturan daerah, peraturan bupati, dan keputusan terkait tugas dan fungsi Satpol PP Kabupaten Kubu Raya.
        </p>
    </div>
</section>

<!-- Main Content -->
<main class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="text-center mb-12">
        <h2 class="text-2xl font-extrabold text-primary dark:text-white">Direktori Peraturan</h2>
    </div>

    <!-- Filter -->
    <div class="flex flex-wrap gap-3 mb-8 justify-center" id="filter-hukum">
        <button onclick="filterHukum('semua')" data-filter="semua" class="hukum-btn active px-5 py-2 rounded-xl text-sm font-bold border-2 border-primary bg-primary text-white transition-all shadow-md shadow-primary/20">Semua</button>
        <?php foreach (array_keys($jenis_warna) as $j): ?>
        <button onclick="filterHukum('<?php echo htmlspecialchars($j); ?>')" data-filter="<?php echo htmlspecialchars($j); ?>" class="hukum-btn px-5 py-2 rounded-xl text-sm font-bold border-2 border-slate-200 text-slate-600 hover:border-primary hover:text-primary transition-all bg-white dark:bg-slate-800 dark:border-slate-700"><?php echo htmlspecialchars($j); ?></button>
        <?php endforeach; ?>
    </div>

    <!-- List Produk Hukum -->
    <div class="space-y-4">
        <?php foreach ($produk_hukum as $ph): ?>
        <?php $warna = $jenis_warna[$ph['jenis']] ?? 'bg-slate-100 text-slate-700 border-slate-200'; ?>
        <div class="hukum-card group bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-2xl p-6 hover:shadow-lg transition-all flex flex-col md:flex-row md:items-center gap-6" data-jenis="<?php echo htmlspecialchars($ph['jenis']); ?>">
            <div class="flex-1 min-w-0">
                <div class="flex flex-wrap items-center gap-3 mb-2">
                    <span class="text-[10px] font-bold uppercase tracking-widest px-3 py-1 rounded-full border <?php echo $warna; ?>"><?php echo htmlspecialchars($ph['jenis']); ?></span>
                    <span class="text-sm font-black text-slate-800 dark:text-slate-200"><?php echo htmlspecialchars($ph['nomor']); ?></span>
                </div>
                <h3 class="text-base font-bold text-primary dark:text-white mb-2 leading-snug group-hover:text-accent transition-colors"><?php echo htmlspecialchars($ph['tentang']); ?></h3>
                <div class="flex items-center gap-4 text-xs text-slate-500 font-medium">
                    <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">calendar_today</span> Tahun <?php echo htmlspecialchars($ph['tahun']); ?></span>
                    <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[16px]">description</span> PDF • <?php echo htmlspecialchars($ph['ukuran']); ?></span>
                </div>
            </div>
            <div class="flex-shrink-0 flex items-center gap-3 w-full md:w-auto mt-4 md:mt-0">
                <button onclick="openHukumModal('<?php echo htmlspecialchars($ph['file']); ?>', '<?php echo htmlspecialchars($ph['jenis'] . ' ' . $ph['nomor']); ?>')" class="flex-1 md:flex-none justify-center inline-flex items-center gap-2 border-2 border-primary text-primary px-5 py-2.5 rounded-xl font-bold text-sm hover:bg-primary hover:text-white transition-all">
                    <span class="material-symbols-outlined text-[18px]">visibility</span> Lihat
                </button>
                <a href="<?php echo htmlspecialchars($ph['file']); ?>" download class="flex-1 md:flex-none justify-center inline-flex items-center gap-2 bg-primary text-white px-5 py-2.5 rounded-xl font-bold text-sm shadow-md shadow-primary/20 hover:-translate-y-0.5 transition-all">
                    <span class="material-symbols-outlined text-[18px]">download</span> Unduh
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</main>

<!-- PDF Modal Viewer -->
<div id="hukum-modal" class="fixed inset-0 z-[9999] bg-black/80 backdrop-blur-sm flex items-center justify-center hidden">
    <div class="relative bg-white dark:bg-slate-900 rounded-2xl shadow-2xl w-[95vw] max-w-5xl h-[90vh] flex flex-col overflow-hidden">
        <div class="flex items-center justify-between px-6 py-4 border-b border-slate-100 dark:border-slate-800">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 bg-red-50 rounded-xl flex items-center justify-center"><span class="material-symbols-outlined text-red-500 text-lg">gavel</span></div>
                <div>
                    <p class="text-xs text-slate-400 font-medium uppercase tracking-widest">Produk Hukum</p>
                    <h3 id="hukum-title" class="text-sm font-extrabold text-primary dark:text-white max-w-md truncate"></h3>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <button onclick="closeHukumModal()" class="w-9 h-9 bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 rounded-xl flex items-center justify-center transition-colors">
                    <span class="material-symbols-outlined text-slate-600 dark:text-slate-300">close</span>
                </button>
            </div>
        </div>
        <div class="flex-1 overflow-hidden bg-slate-100 dark:bg-slate-800 relative">
            <iframe id="hukum-iframe" src="" class="w-full h-full hidden border-0"></iframe>
            <div id="hukum-placeholder" class="w-full h-full flex flex-col items-center justify-center gap-4 text-center p-8">
                <div class="w-20 h-20 bg-primary/10 rounded-2xl flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-4xl">picture_as_pdf</span>
                </div>
                <p class="text-primary dark:text-white font-bold text-lg">File PDF Belum Tersedia</p>
            </div>
        </div>
    </div>
</div>

<script>
function openHukumModal(url, title){
    document.getElementById('hukum-title').textContent=title;
    var iframe=document.getElementById('hukum-iframe'),ph=document.getElementById('hukum-placeholder');
    if(url&&url!=='#'){iframe.src=url;iframe.classList.remove('hidden');ph.classList.add('hidden');}
    else{iframe.src='';iframe.classList.add('hidden');ph.classList.remove('hidden');}
    document.getElementById('hukum-modal').classList.remove('hidden');
    document.body.style.overflow='hidden';
}
function closeHukumModal(){
    document.getElementById('hukum-modal').classList.add('hidden');
    document.getElementById('hukum-iframe').src='';
    document.body.style.overflow='';
}
function filterHukum(jenis){
    document.querySelectorAll('.hukum-btn').forEach(function(b){
        var a=b.dataset.filter===jenis;
        if(a) {
            b.classList.add('bg-primary','text-white','border-primary','shadow-md','shadow-primary/20');
            b.classList.remove('bg-white','dark:bg-slate-800','text-slate-600','border-slate-200','dark:border-slate-700');
        } else {
            b.classList.remove('bg-primary','text-white','border-primary','shadow-md','shadow-primary/20');
            b.classList.add('bg-white','dark:bg-slate-800','text-slate-600','border-slate-200','dark:border-slate-700');
        }
    });
    document.querySelectorAll('.hukum-card').forEach(function(c){
        c.style.display=(jenis==='semua'||c.dataset.jenis===jenis)?'':'none';
    });
}
</script>

<div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 pb-8 flex justify-end">
    <p class="text-slate-400 text-xs italic">Terakhir Diperbarui: 27 April 2026</p>
</div>
<?php require_once 'footer.php'; ?>
