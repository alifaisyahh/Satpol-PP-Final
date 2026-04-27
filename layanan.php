<?php
$page_title   = "Layanan - Satpol PP Kabupaten Kubu Raya";
$current_page = "layanan";
require_once 'header.php';

$layanan_list = [
    [
        'icon'      => 'gavel',
        'judul'     => 'Penertiban Pelanggaran Perda',
        'deskripsi' => 'Pelayanan penertiban terhadap pelanggaran Peraturan Daerah di wilayah Kabupaten Kubu Raya secara profesional dan humanis.',
        'prosedur'  => ['Pengaduan/laporan masuk', 'Verifikasi dan investigasi', 'Penindakan sesuai prosedur', 'Pelaporan hasil penertiban'],
        'waktu'     => '1-3 Hari Kerja',
        'biaya'     => 'Gratis',
    ],
    [
        'icon'      => 'support_agent',
        'judul'     => 'Penanganan Pengaduan Masyarakat',
        'deskripsi' => 'Layanan penerimaan dan penindaklanjutan pengaduan masyarakat terkait ketertiban umum dan ketentraman lingkungan.',
        'prosedur'  => ['Penerimaan pengaduan', 'Klasifikasi jenis pengaduan', 'Koordinasi internal/eksternal', 'Tindak lanjut dan pelaporan'],
        'waktu'     => '1×24 Jam',
        'biaya'     => 'Gratis',
    ],
    [
        'icon'      => 'security',
        'judul'     => 'Pengamanan Kegiatan Pemerintahan',
        'deskripsi' => 'Layanan pengamanan kegiatan-kegiatan resmi pemerintah daerah dan acara-acara yang memerlukan pengamanan khusus.',
        'prosedur'  => ['Permohonan pengamanan', 'Analisa kebutuhan personil', 'Koordinasi dan persiapan', 'Pelaksanaan pengamanan'],
        'waktu'     => 'Sesuai Kebutuhan',
        'biaya'     => 'Gratis',
    ],
    [
        'icon'      => 'local_police',
        'judul'     => 'Patroli Ketertiban Umum',
        'deskripsi' => 'Pelaksanaan patroli rutin di seluruh wilayah Kabupaten Kubu Raya untuk menjaga ketertiban, ketentraman, dan keamanan masyarakat.',
        'prosedur'  => ['Perencanaan rute patroli', 'Pelaksanaan patroli rutin', 'Pencatatan temuan lapangan', 'Pelaporan hasil patroli'],
        'waktu'     => 'Rutin Harian',
        'biaya'     => 'Gratis',
    ],
    [
        'icon'      => 'article',
        'judul'     => 'Rekomendasi Izin Keramaian',
        'deskripsi' => 'Pemberian rekomendasi untuk kegiatan keramaian atau hiburan yang diselenggarakan oleh masyarakat atau badan usaha.',
        'prosedur'  => ['Pengajuan permohonan', 'Pemeriksaan dokumen', 'Survey lokasi kegiatan', 'Penerbitan rekomendasi'],
        'waktu'     => '3-5 Hari Kerja',
        'biaya'     => 'Gratis',
    ],
    [
        'icon'      => 'inventory_2',
        'judul'     => 'Penyidikan Pegawai Negeri Sipil (PPNS)',
        'deskripsi' => 'Layanan penyidikan oleh Penyidik PNS terhadap pelanggaran peraturan daerah yang bersifat pidana.',
        'prosedur'  => ['Laporan pelanggaran', 'Penyelidikan awal', 'Penyidikan formal', 'Pelimpahan berkas ke JPU'],
        'waktu'     => 'Sesuai Proses Hukum',
        'biaya'     => 'Gratis',
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
            <span class="text-accent">Layanan</span>
        </nav>
        <span class="inline-block px-4 py-1.5 mb-4 rounded-full bg-accent/20 text-accent font-bold text-xs uppercase tracking-widest border border-accent/30 w-fit">Media Informasi</span>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight">
            Layanan <span class="text-accent">Publik</span>
        </h1>
        <p class="text-slate-300 mt-4 max-w-2xl text-sm md:text-base leading-relaxed">
            Berbagai layanan yang tersedia di Satuan Polisi Pamong Praja Kabupaten Kubu Raya untuk masyarakat.
        </p>
    </div>
</section>

<!-- Main Content -->
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="text-center mb-12">
        <h2 class="text-2xl font-extrabold text-primary dark:text-white">Daftar Layanan</h2>
        <p class="text-slate-500 dark:text-slate-400 text-sm mt-2 max-w-xl mx-auto">Klik pada layanan untuk melihat informasi detail, prosedur, dan waktu penyelesaian.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php foreach ($layanan_list as $i => $lay): ?>
        <div class="group bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-2xl overflow-hidden hover:shadow-xl hover:border-primary/20 transition-all duration-300 cursor-pointer flex flex-col"
             onclick="openLayananModal(<?php echo $i; ?>)">
            <!-- Card Header -->
            <div class="bg-gradient-to-br from-primary to-primary/80 p-6 relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-white/5 rounded-full -translate-y-8 translate-x-8"></div>
                <div class="w-12 h-12 bg-white/15 rounded-xl flex items-center justify-center mb-4">
                    <span class="material-symbols-outlined text-2xl text-white"><?php echo $lay['icon']; ?></span>
                </div>
                <h3 class="text-white font-extrabold text-base leading-snug"><?php echo htmlspecialchars($lay['judul']); ?></h3>
            </div>
            <!-- Card Body -->
            <div class="p-6 flex-1 flex flex-col">
                <p class="text-slate-500 dark:text-slate-400 text-xs leading-relaxed flex-1 mb-5"><?php echo htmlspecialchars($lay['deskripsi']); ?></p>
                <div class="flex items-center justify-between pt-4 border-t border-slate-100 dark:border-slate-800">
                    <div class="flex items-center gap-1.5 text-xs text-slate-500">
                        <span class="material-symbols-outlined text-sm text-primary">schedule</span>
                        <span><?php echo htmlspecialchars($lay['waktu']); ?></span>
                    </div>
                </div>
            </div>
            <!-- Lihat Detail -->
            <div class="px-6 pb-6">
                <button class="w-full flex items-center justify-center gap-2 text-primary text-xs font-bold py-2.5 border-2 border-primary/20 rounded-xl hover:bg-primary hover:text-white hover:border-primary group-hover:border-primary transition-all">
                    <span class="material-symbols-outlined text-sm">info</span>
                    Lihat Detail Prosedur
                </button>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</main>

<!-- Modal Detail Layanan -->
<div id="layanan-modal" class="fixed inset-0 z-[9999] bg-black/70 backdrop-blur-sm flex items-center justify-center hidden p-4">
    <div class="relative bg-white dark:bg-slate-900 rounded-2xl shadow-2xl w-full max-w-lg overflow-hidden">
        <button onclick="closeLayananModal()" class="absolute top-4 right-4 z-10 w-9 h-9 bg-white/20 hover:bg-white/30 rounded-xl flex items-center justify-center transition-colors">
            <span class="material-symbols-outlined text-white">close</span>
        </button>
        <div id="modal-header" class="bg-gradient-to-br from-primary to-primary/80 p-8 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full -translate-y-12 translate-x-12"></div>
            <div id="modal-icon" class="w-14 h-14 bg-white/15 rounded-2xl flex items-center justify-center mb-4">
                <span class="material-symbols-outlined text-3xl text-white">gavel</span>
            </div>
            <h2 id="modal-judul" class="text-white font-extrabold text-xl leading-snug"></h2>
        </div>
        <div class="p-6 space-y-5 max-h-[60vh] overflow-y-auto">
            <p id="modal-deskripsi" class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed"></p>
            <div>
                <h4 class="text-xs font-bold uppercase tracking-widest text-primary dark:text-white mb-3">Alur Prosedur</h4>
                <div id="modal-prosedur" class="space-y-2"></div>
            </div>
            <div class="grid grid-cols-2 gap-3">
                <div class="bg-slate-50 dark:bg-slate-800 rounded-xl p-4">
                    <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Waktu Penyelesaian</p>
                    <p id="modal-waktu" class="text-sm font-bold text-primary dark:text-white"></p>
                </div>
                <div class="bg-accent/5 border border-accent/20 rounded-xl p-4">
                    <p class="text-[10px] font-bold uppercase tracking-widest text-slate-400 mb-1">Biaya</p>
                    <p id="modal-biaya" class="text-sm font-bold text-accent"></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$layanan_json = json_encode($layanan_list);
?>
<script>
var layananData = <?php echo $layanan_json; ?>;
function openLayananModal(i) {
    var d = layananData[i];
    document.getElementById('modal-judul').textContent = d.judul;
    document.getElementById('modal-deskripsi').textContent = d.deskripsi;
    document.getElementById('modal-waktu').textContent = d.waktu;
    document.getElementById('modal-biaya').textContent = d.biaya;
    document.querySelector('#modal-icon span').textContent = d.icon;
    var pros = document.getElementById('modal-prosedur');
    pros.innerHTML = '';
    d.prosedur.forEach(function(p, idx) {
        pros.innerHTML += '<div class="flex items-start gap-3"><span class="flex-shrink-0 w-6 h-6 bg-primary text-white text-xs font-black rounded-lg flex items-center justify-center mt-0.5">'+(idx+1)+'</span><p class="text-sm text-slate-600 dark:text-slate-400">'+p+'</p></div>';
    });
    document.getElementById('layanan-modal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}
function closeLayananModal() {
    document.getElementById('layanan-modal').classList.add('hidden');
    document.body.style.overflow = '';
}
document.getElementById('layanan-modal').addEventListener('click', function(e) { if(e.target===this)closeLayananModal(); });
document.addEventListener('keydown', function(e) { if(e.key==='Escape')closeLayananModal(); });
</script>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-8 flex justify-end">
    <p class="text-slate-400 text-xs italic">Terakhir Diperbarui: 27 April 2026</p>
</div>
<?php require_once 'footer.php'; ?>
