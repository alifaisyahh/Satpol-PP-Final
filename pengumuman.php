<?php
$page_title   = "Pengumuman - Satpol PP Kabupaten Kubu Raya";
$current_page = "pengumuman";
require_once 'header.php';

$pengumuman_list = [
    [
        'id'        => 1,
        'judul'     => 'Pengumuman Penerimaan Tenaga Pendukung Satpol PP Tahun 2024',
        'tanggal'   => '25 April 2026',
        'kategori'  => 'Kepegawaian',
        'ringkasan' => 'Satpol PP Kabupaten Kubu Raya membuka penerimaan tenaga pendukung untuk beberapa posisi. Pendaftaran dibuka mulai 1 Mei hingga 15 Mei 2026.',
        'detail'    => 'Sebagai upaya mengoptimalkan pelayanan dan penegakan Peraturan Daerah, Satuan Polisi Pamong Praja (Satpol PP) Kabupaten Kubu Raya membuka kesempatan bagi putra-putri daerah untuk bergabung sebagai Tenaga Pendukung. Beberapa posisi yang dibutuhkan antara lain Petugas Ketertiban Umum, Petugas Administrasi, dan Petugas IT. Persyaratan lengkap dan formulir pendaftaran dapat diambil di kantor Satpol PP pada hari kerja. Pastikan untuk melengkapi seluruh dokumen pendukung sebelum batas waktu pendaftaran berakhir.',
        'penting'   => true,
    ],
    [
        'id'        => 2,
        'judul'     => 'Jadwal Operasi Penertiban PKL Kawasan Supadio',
        'tanggal'   => '20 April 2026',
        'kategori'  => 'Operasional',
        'ringkasan' => 'Satpol PP akan melaksanakan operasi penertiban PKL di kawasan Jl. Arteri Supadio pada tanggal 28 April 2026 mulai pukul 08.00 WIB.',
        'detail'    => 'Berdasarkan surat perintah tugas, Satuan Polisi Pamong Praja Kabupaten Kubu Raya bersama TNI dan Polri akan melaksanakan kegiatan Operasi Penertiban Pedagang Kaki Lima (PKL) yang berjualan di atas trotoar dan bahu jalan raya sepanjang kawasan Jalan Arteri Supadio. Kegiatan ini bertujuan untuk mengembalikan fungsi trotoar bagi pejalan kaki serta memperlancar arus lalu lintas di kawasan tersebut. Dihimbau kepada seluruh PKL agar mematuhi aturan dan segera memindahkan barang dagangannya sebelum waktu operasi dilaksanakan.',
        'penting'   => true,
    ],
    [
        'id'        => 3,
        'judul'     => 'Pengumuman Libur Pelayanan Hari Raya Idulfitri 1446 H',
        'tanggal'   => '15 April 2026',
        'kategori'  => 'Pelayanan',
        'ringkasan' => 'Dalam rangka perayaan Hari Raya Idulfitri 1446 H, pelayanan administrasi Satpol PP diliburkan sementara. Layanan darurat tetap beroperasi.',
        'detail'    => 'Sesuai dengan Surat Edaran Bupati Kubu Raya mengenai hari libur nasional dan cuti bersama dalam rangka perayaan Idulfitri 1446 H, kami menginformasikan bahwa pelayanan administrasi pada Kantor Satpol PP akan ditutup mulai tanggal 1 Syawal hingga tanggal yang ditentukan. Namun demikian, unit reaksi cepat dan layanan darurat tetap beroperasi selama 24 jam untuk menangani laporan keamanan dan ketertiban umum. Silakan hubungi nomor darurat kami jika Anda membutuhkan bantuan mendesak selama periode libur ini.',
        'penting'   => false,
    ],
    [
        'id'        => 4,
        'judul'     => 'Sosialisasi Perda Nomor 3 Tahun 2024 tentang Ketertiban Umum',
        'tanggal'   => '10 April 2026',
        'kategori'  => 'Regulasi',
        'ringkasan' => 'Satpol PP mengadakan sosialisasi Perda Nomor 3 Tahun 2024 kepada masyarakat dan pelaku usaha di seluruh kecamatan di Kabupaten Kubu Raya.',
        'detail'    => 'Guna meningkatkan pemahaman dan kesadaran masyarakat terhadap produk hukum daerah, Satuan Polisi Pamong Praja Kabupaten Kubu Raya menggelar sosialisasi intensif mengenai Perda Nomor 3 Tahun 2024 yang membahas tentang Ketertiban Umum dan Ketentraman Masyarakat. Sosialisasi ini menyasar perangkat desa, pengurus RT/RW, dan para pelaku usaha agar memahami kewajiban dan haknya dalam menjaga ketertiban lingkungan. Jadwal sosialisasi telah dibagikan melalui pemerintah kecamatan masing-masing.',
        'penting'   => false,
    ],
    [
        'id'        => 5,
        'judul'     => 'Himbauan Tertib Berlalu Lintas di Kawasan Perkotaan',
        'tanggal'   => '5 April 2026',
        'kategori'  => 'Himbauan',
        'ringkasan' => 'Satpol PP bersama instansi terkait menghimbau seluruh masyarakat untuk tertib berlalu lintas, khususnya di kawasan perkotaan dan pusat keramaian.',
        'detail'    => 'Menindaklanjuti banyaknya laporan mengenai kemacetan dan pelanggaran parkir liar yang sering terjadi di jalan-jalan protokol kawasan perkotaan Kabupaten Kubu Raya, Satpol PP KKR bersama Dinas Perhubungan dan Satlantas Polresta menghimbau seluruh pengguna kendaraan untuk mematuhi peraturan lalu lintas. Dilarang keras memarkirkan kendaraan di area yang terdapat rambu larangan parkir serta di trotoar. Pelanggaran terhadap himbauan ini akan dikenakan sanksi berupa penggembokan kendaraan atau penderekan paksa sesuai dengan Perda yang berlaku.',
        'penting'   => false,
    ],
];

$kategori_warna = [
    'Kepegawaian' => 'bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-300',
    'Operasional' => 'bg-orange-100 text-orange-700 dark:bg-orange-900/30 dark:text-orange-300',
    'Pelayanan'   => 'bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-300',
    'Regulasi'    => 'bg-purple-100 text-purple-700 dark:bg-purple-900/30 dark:text-purple-300',
    'Himbauan'    => 'bg-yellow-100 text-yellow-700 dark:bg-yellow-900/30 dark:text-yellow-300',
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
            <span class="text-accent">Pengumuman</span>
        </nav>
        <span class="inline-block px-4 py-1.5 mb-4 rounded-full bg-accent/20 text-accent font-bold text-xs uppercase tracking-widest border border-accent/30 w-fit">Media Informasi</span>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight">
            Pengumuman <span class="text-accent">Resmi</span>
        </h1>
        <p class="text-slate-300 mt-4 max-w-2xl text-sm md:text-base leading-relaxed">
            Informasi dan pengumuman resmi dari Satuan Polisi Pamong Praja Kabupaten Kubu Raya untuk masyarakat.
        </p>
    </div>
</section>

<!-- Main Content -->
<main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

    <!-- Pengumuman Penting (pinned) -->
    <?php $penting = array_filter($pengumuman_list, fn($p) => $p['penting']); ?>
    <?php if (!empty($penting)): ?>
    <div class="mb-12">
        <div class="flex items-center gap-2 mb-6">
            <span class="material-symbols-outlined text-primary">push_pin</span>
            <h2 class="text-lg font-extrabold text-primary dark:text-white">Pengumuman Penting</h2>
        </div>
        <div class="space-y-4">
            <?php foreach ($penting as $item): ?>
            <div class="bg-gradient-to-r from-primary/10 to-transparent border-l-4 border-primary rounded-r-2xl p-5 flex flex-col sm:flex-row items-start sm:items-center gap-4 cursor-pointer hover:shadow-md transition-all" onclick="openModal(<?php echo $item['id']; ?>)">
                <div class="flex-1">
                    <div class="flex flex-wrap gap-2 mb-2">
                        <span class="text-[10px] font-bold uppercase tracking-widest text-primary">&#x1F4CC; Penting</span>
                        <span class="text-[10px] font-bold uppercase tracking-widest text-slate-400"><?php echo htmlspecialchars($item['tanggal']); ?></span>
                        <?php $warna = $kategori_warna[$item['kategori']] ?? 'bg-slate-100 text-slate-600'; ?>
                        <span class="text-[10px] font-bold uppercase px-2 py-0.5 rounded-full <?php echo $warna; ?>"><?php echo htmlspecialchars($item['kategori']); ?></span>
                    </div>
                    <h3 class="text-sm font-extrabold text-primary dark:text-white mb-1 hover:text-blue-600 transition-colors"><?php echo htmlspecialchars($item['judul']); ?></h3>
                    <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed"><?php echo htmlspecialchars($item['ringkasan']); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php endif; ?>

    <!-- Semua Pengumuman -->
    <div class="text-center mb-10">
        <h2 class="text-2xl font-extrabold text-primary dark:text-white">Semua Pengumuman</h2>
    </div>

    <div class="space-y-4">
        <?php foreach ($pengumuman_list as $item): ?>
        <div class="group bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-2xl p-6 hover:border-primary/20 hover:shadow-md transition-all duration-200 cursor-pointer" onclick="openModal(<?php echo $item['id']; ?>)">
            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
                <!-- Icon -->
                <div class="flex-shrink-0 w-12 h-12 bg-primary/5 dark:bg-primary/20 rounded-xl flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-all duration-200">
                    <span class="material-symbols-outlined text-xl text-primary group-hover:text-white transition-colors">campaign</span>
                </div>
                <!-- Info -->
                <div class="flex-1 min-w-0">
                    <div class="flex flex-wrap items-center gap-2 mb-1.5">
                        <?php $warna = $kategori_warna[$item['kategori']] ?? 'bg-slate-100 text-slate-600'; ?>
                        <span class="text-[10px] font-bold uppercase px-2 py-0.5 rounded-full <?php echo $warna; ?>"><?php echo htmlspecialchars($item['kategori']); ?></span>
                        <span class="flex items-center gap-1 text-[10px] text-slate-400">
                            <span class="material-symbols-outlined text-[12px]">calendar_month</span>
                            <?php echo htmlspecialchars($item['tanggal']); ?>
                        </span>
                        <?php if ($item['penting']): ?>
                        <span class="text-[10px] font-bold text-primary">&#x2605; Penting</span>
                        <?php endif; ?>
                    </div>
                    <h3 class="text-sm font-bold text-primary dark:text-white leading-snug mb-1 group-hover:text-blue-600 transition-colors"><?php echo htmlspecialchars($item['judul']); ?></h3>
                    <p class="text-xs text-slate-500 dark:text-slate-400 leading-relaxed line-clamp-2"><?php echo htmlspecialchars($item['ringkasan']); ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</main>

<!-- Detail Pengumuman Modal -->
<div id="pengumuman-modal" class="fixed inset-0 z-[9999] bg-black/70 backdrop-blur-sm flex items-center justify-center hidden p-4">
    <div class="relative bg-white dark:bg-slate-900 rounded-2xl shadow-2xl w-full max-w-2xl overflow-hidden flex flex-col max-h-[90vh]">
        <div class="flex justify-between items-center p-6 border-b border-slate-100 dark:border-slate-800">
            <h3 class="text-lg font-bold text-primary dark:text-white">Detail Pengumuman</h3>
            <button onclick="closeModal()" class="w-8 h-8 flex items-center justify-center rounded-lg bg-slate-100 hover:bg-slate-200 dark:bg-slate-800 dark:hover:bg-slate-700 transition-colors">
                <span class="material-symbols-outlined text-slate-600 dark:text-slate-300">close</span>
            </button>
        </div>
        <div class="p-6 overflow-y-auto">
            <div class="flex flex-wrap gap-2 mb-4" id="modal-tags">
                <!-- Tags diinject lewat JS -->
            </div>
            <h2 id="modal-judul" class="text-xl md:text-2xl font-extrabold text-primary dark:text-white mb-4 leading-snug"></h2>
            <div class="text-sm text-slate-600 dark:text-slate-300 leading-relaxed space-y-4" id="modal-detail">
                <!-- Detail diinject lewat JS -->
            </div>
        </div>
        <div class="p-6 bg-slate-50 dark:bg-slate-800/50 border-t border-slate-100 dark:border-slate-800 flex justify-end">
            <button onclick="closeModal()" class="px-6 py-2 bg-primary text-white rounded-xl font-bold hover:bg-primary/90 transition-colors shadow-md shadow-primary/20">Tutup</button>
        </div>
    </div>
</div>

<?php
$pengumuman_json = json_encode($pengumuman_list);
?>
<script>
const dataPengumuman = <?php echo $pengumuman_json; ?>;

function openModal(id) {
    const item = dataPengumuman.find(p => p.id === id);
    if (!item) return;

    document.getElementById('modal-judul').textContent = item.judul;
    document.getElementById('modal-detail').innerHTML = `<p>${item.detail}</p>`;
    
    let tagsHtml = `<span class="text-[10px] font-bold uppercase px-3 py-1 rounded-full bg-slate-100 text-slate-600 dark:bg-slate-800 dark:text-slate-300">${item.kategori}</span>`;
    tagsHtml += `<span class="text-[10px] font-bold uppercase px-3 py-1 rounded-full bg-slate-100 text-slate-600 dark:bg-slate-800 dark:text-slate-300"><span class="material-symbols-outlined text-[10px] mr-1 align-middle">calendar_month</span>${item.tanggal}</span>`;
    if (item.penting) {
        tagsHtml += `<span class="text-[10px] font-bold uppercase tracking-widest text-white bg-primary px-3 py-1 rounded-full">&#x1F4CC; Penting</span>`;
    }
    document.getElementById('modal-tags').innerHTML = tagsHtml;

    document.getElementById('pengumuman-modal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeModal() {
    document.getElementById('pengumuman-modal').classList.add('hidden');
    document.body.style.overflow = '';
}

document.getElementById('pengumuman-modal').addEventListener('click', function(e) {
    if (e.target === this) closeModal();
});
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') closeModal();
});
</script>

<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 pb-8 flex justify-end">
    <p class="text-slate-400 text-xs italic">Terakhir Diperbarui: 27 April 2026</p>
</div>
<?php require_once 'footer.php'; ?>
