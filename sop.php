<?php
$page_title   = "SOP Pelayanan - Satpol PP Kabupaten Kubu Raya";
$current_page = "sop";
require_once 'header.php';
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
            <span class="text-slate-300">Standar Pelayanan</span>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <span class="text-accent">SOP</span>
        </nav>
        <span class="inline-block px-4 py-1.5 mb-4 rounded-full bg-accent/20 text-accent font-bold text-xs uppercase tracking-widest border border-accent/30 w-fit">Standar Pelayanan</span>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight">
            Standar Operasional <span class="text-accent">Prosedur</span>
        </h1>
        <p class="text-slate-300 mt-4 max-w-2xl text-sm md:text-base leading-relaxed">
            Prosedur baku pelaksanaan tugas Satpol PP Kabupaten Kubu Raya sebagai acuan kerja yang terstandarisasi.
        </p>
    </div>
</section>

<main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="text-center mb-12">
        <h2 class="text-2xl font-extrabold text-primary dark:text-white">Daftar Dokumen SOP</h2>
        <p class="text-slate-500 dark:text-slate-400 text-sm mt-2 max-w-xl mx-auto">Dokumen SOP berikut dapat dilihat langsung maupun diunduh dalam format PDF.</p>
    </div>

    <?php
    $sop_list = [
        ['kode'=>'SOP-01','judul'=>'SOP Penertiban Pedagang Kaki Lima (PKL)','kategori'=>'Operasional Lapangan','tahun'=>'2024','ukuran'=>'1.4 MB','file'=>'#'],
        ['kode'=>'SOP-02','judul'=>'SOP Penanganan Pengaduan Masyarakat','kategori'=>'Pelayanan Publik','tahun'=>'2024','ukuran'=>'1.1 MB','file'=>'#'],
        ['kode'=>'SOP-03','judul'=>'SOP Patroli Wilayah','kategori'=>'Operasional Lapangan','tahun'=>'2024','ukuran'=>'900 KB','file'=>'#'],
        ['kode'=>'SOP-04','judul'=>'SOP Penegakan Peraturan Daerah','kategori'=>'Penegakan Hukum','tahun'=>'2024','ukuran'=>'1.3 MB','file'=>'#'],
        ['kode'=>'SOP-05','judul'=>'SOP Pengamanan Kegiatan','kategori'=>'Operasional Lapangan','tahun'=>'2024','ukuran'=>'1.0 MB','file'=>'#'],
        ['kode'=>'SOP-06','judul'=>'SOP Pengelolaan Administrasi Kepegawaian','kategori'=>'Administrasi','tahun'=>'2024','ukuran'=>'850 KB','file'=>'#'],
    ];
    $grouped = [];
    foreach ($sop_list as $s) { $grouped[$s['kategori']][] = $s; }
    ?>

    <div class="flex flex-wrap justify-center gap-2 mb-8">
        <button onclick="filterSOP('semua')" data-filter="semua" class="sop-btn active px-4 py-1.5 rounded-full text-xs font-bold border-2 border-primary bg-primary text-white transition-all">Semua (<?php echo count($sop_list); ?>)</button>
        <?php foreach(array_keys($grouped) as $kat): ?>
        <button onclick="filterSOP('<?php echo htmlspecialchars($kat); ?>')" data-filter="<?php echo htmlspecialchars($kat); ?>" class="sop-btn px-4 py-1.5 rounded-full text-xs font-bold border-2 border-slate-200 text-slate-600 hover:border-primary hover:text-primary transition-all"><?php echo htmlspecialchars($kat); ?> (<?php echo count($grouped[$kat]); ?>)</button>
        <?php endforeach; ?>
    </div>

    <div class="space-y-4" id="sop-list">
        <?php foreach ($sop_list as $item): ?>
        <div class="sop-card group bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-2xl p-6 hover:border-primary/30 hover:shadow-lg transition-all duration-200" data-kategori="<?php echo htmlspecialchars($item['kategori']); ?>">
            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-5">
                <div class="flex-shrink-0 w-16 h-16 bg-red-50 dark:bg-red-900/20 rounded-2xl flex items-center justify-center border border-red-100 dark:border-red-800/30">
                    <span class="material-symbols-outlined text-3xl text-red-500">picture_as_pdf</span>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="flex flex-wrap items-center gap-2 mb-1">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-accent bg-accent/10 px-2 py-0.5 rounded-full"><?php echo htmlspecialchars($item['kode']); ?></span>
                        <span class="text-[10px] font-bold uppercase text-primary/60 bg-primary/5 px-2 py-0.5 rounded-full"><?php echo htmlspecialchars($item['kategori']); ?></span>
                        <span class="text-[10px] text-slate-400">Tahun <?php echo htmlspecialchars($item['tahun']); ?> &bull; <?php echo htmlspecialchars($item['ukuran']); ?></span>
                    </div>
                    <h3 class="text-sm font-bold text-primary dark:text-white"><?php echo htmlspecialchars($item['judul']); ?></h3>
                </div>
                <div class="flex-shrink-0 flex items-center gap-2">
                    <button onclick="openDocModal('<?php echo htmlspecialchars($item['file']); ?>','<?php echo htmlspecialchars($item['judul']); ?>')" class="inline-flex items-center gap-1.5 border-2 border-primary text-primary px-4 py-2 rounded-xl font-bold text-xs hover:bg-primary hover:text-white transition-all whitespace-nowrap">
                        <span class="material-symbols-outlined text-sm">visibility</span>Lihat
                    </button>
                    <a href="<?php echo htmlspecialchars($item['file']); ?>" download class="inline-flex items-center gap-1.5 bg-primary text-white px-4 py-2 rounded-xl font-bold text-xs hover:-translate-y-0.5 transition-all shadow-md shadow-primary/20 whitespace-nowrap">
                        <span class="material-symbols-outlined text-sm">download</span>Unduh
                    </a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="mt-8 flex items-start gap-3 bg-blue-50 dark:bg-blue-900/20 border border-blue-100 dark:border-blue-800/30 rounded-xl p-4">
        <span class="material-symbols-outlined text-blue-500 text-base flex-shrink-0 mt-0.5">info</span>
        <p class="text-blue-700 dark:text-blue-300 text-xs leading-relaxed">Untuk informasi lebih lanjut mengenai SOP, silakan hubungi kantor Satpol PP Kabupaten Kubu Raya.</p>
    </div>
</main>

<!-- PDF Modal -->
<div id="doc-modal" class="fixed inset-0 z-[9999] bg-black/80 backdrop-blur-sm flex items-center justify-center hidden">
    <div class="relative bg-white dark:bg-slate-900 rounded-2xl shadow-2xl w-[95vw] max-w-5xl h-[90vh] flex flex-col overflow-hidden">
        <div class="flex items-center justify-between px-6 py-4 border-b border-slate-100 dark:border-slate-800">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 bg-red-50 rounded-xl flex items-center justify-center"><span class="material-symbols-outlined text-red-500 text-lg">picture_as_pdf</span></div>
                <div>
                    <p class="text-xs text-slate-400 font-medium uppercase tracking-widest">Dokumen SOP</p>
                    <h3 id="modal-title" class="text-sm font-extrabold text-primary dark:text-white max-w-md truncate"></h3>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <a id="modal-download-btn" href="#" download class="flex items-center gap-2 bg-primary text-white px-4 py-2 rounded-xl font-bold text-sm hover:-translate-y-0.5 transition-all shadow-md shadow-primary/20">
                    <span class="material-symbols-outlined text-[18px]">download</span>Unduh
                </a>
                <button onclick="closeDocModal()" class="w-9 h-9 bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 rounded-xl flex items-center justify-center transition-colors">
                    <span class="material-symbols-outlined text-slate-600 dark:text-slate-300">close</span>
                </button>
            </div>
        </div>
        <div class="flex-1 overflow-hidden bg-slate-100 dark:bg-slate-800">
            <iframe id="modal-iframe" src="" class="w-full h-full hidden border-0"></iframe>
            <div id="modal-placeholder" class="w-full h-full flex flex-col items-center justify-center gap-4 text-center p-8">
                <div class="w-20 h-20 bg-primary/10 rounded-2xl flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-4xl">picture_as_pdf</span>
                </div>
                <p class="text-primary dark:text-white font-bold text-lg">File PDF Belum Tersedia</p>
                <p class="text-slate-500 text-sm max-w-sm">Ganti nilai <code class="bg-slate-200 dark:bg-slate-700 px-1 rounded text-xs">'file'</code> pada <code class="bg-slate-200 dark:bg-slate-700 px-1 rounded text-xs">$sop_list</code> dengan path file PDF yang sebenarnya.</p>
            </div>
        </div>
    </div>
</div>

<script>
function openDocModal(url,title){
    document.getElementById('modal-title').textContent=title;
    document.getElementById('modal-download-btn').href=url;
    var iframe=document.getElementById('modal-iframe'),ph=document.getElementById('modal-placeholder');
    if(url&&url!=='#'){iframe.src=url;iframe.classList.remove('hidden');ph.classList.add('hidden');}
    else{iframe.src='';iframe.classList.add('hidden');ph.classList.remove('hidden');}
    document.getElementById('doc-modal').classList.remove('hidden');
    document.body.style.overflow='hidden';
}
function closeDocModal(){
    document.getElementById('doc-modal').classList.add('hidden');
    document.getElementById('modal-iframe').src='';
    document.body.style.overflow='';
}
document.getElementById('doc-modal').addEventListener('click',function(e){if(e.target===this)closeDocModal();});
document.addEventListener('keydown',function(e){if(e.key==='Escape')closeDocModal();});
function filterSOP(kat){
    document.querySelectorAll('.sop-btn').forEach(function(b){
        var a=b.dataset.filter===kat;
        b.classList.toggle('bg-primary',a);b.classList.toggle('text-white',a);b.classList.toggle('border-primary',a);
        b.classList.toggle('text-slate-600',!a);b.classList.toggle('border-slate-200',!a);
    });
    document.querySelectorAll('.sop-card').forEach(function(c){
        c.style.display=(kat==='semua'||c.dataset.kategori===kat)?'':'none';
    });
}
</script>
<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 pb-8 flex justify-end">
    <p class="text-slate-400 text-xs italic">Terakhir Diperbarui: 27 April 2026</p>
</div>
<?php require_once 'footer.php'; ?>
