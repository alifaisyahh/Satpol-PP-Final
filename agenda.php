<?php
$page_title   = "Agenda Kegiatan - Satpol PP Kabupaten Kubu Raya";
$current_page = "agenda";
require_once 'header.php';

$agenda_list = [
    [
        'id'        => 1,
        'judul'     => 'Rapat Koordinasi Penertiban PKL',
        'tanggal'   => '2026-05-10',
        'waktu'     => '09:00 - 12:00 WIB',
        'lokasi'    => 'Ruang Rapat Utama Satpol PP KKR',
        'kategori'  => 'Rapat',
        'deskripsi' => 'Rapat koordinasi bersama instansi terkait dalam rangka persiapan penertiban pedagang kaki lima di kawasan jalan protokol.',
        'status'    => 'Akan Datang',
    ],
    [
        'id'        => 2,
        'judul'     => 'Patroli Skala Besar Antisipasi Gangguan Kamtibmas',
        'tanggal'   => '2026-05-15',
        'waktu'     => '20:00 - Selesai',
        'lokasi'    => 'Wilayah Sungai Raya & Sekitarnya',
        'kategori'  => 'Operasional',
        'deskripsi' => 'Pelaksanaan patroli gabungan bersama TNI dan Polri untuk menjaga kondusifitas wilayah Kabupaten Kubu Raya.',
        'status'    => 'Akan Datang',
    ],
    [
        'id'        => 3,
        'judul'     => 'Sosialisasi Perda Ketertiban Umum di Kecamatan Rasau Jaya',
        'tanggal'   => '2026-05-20',
        'waktu'     => '08:30 - 15:00 WIB',
        'lokasi'    => 'Aula Kantor Camat Rasau Jaya',
        'kategori'  => 'Sosialisasi',
        'deskripsi' => 'Kegiatan edukasi dan sosialisasi kepada masyarakat serta perangkat desa terkait Peraturan Daerah tentang Ketertiban Umum.',
        'status'    => 'Akan Datang',
    ],
    [
        'id'        => 4,
        'judul'     => 'Pelatihan Peningkatan Kapasitas Anggota Linmas',
        'tanggal'   => '2026-06-05',
        'waktu'     => '08:00 - 16:00 WIB',
        'lokasi'    => 'Lapangan Upacara Kantor Bupati KKR',
        'kategori'  => 'Pelatihan',
        'deskripsi' => 'Pelatihan fisik dan teknis bagi anggota Linmas untuk meningkatkan kesiapsiagaan menghadapi potensi bencana dan gangguan keamanan.',
        'status'    => 'Akan Datang',
    ],
];

// Helper warna kategori
$kat_warna = [
    'Rapat'       => 'bg-blue-100 text-blue-700 dark:bg-blue-900/30 dark:text-blue-300',
    'Operasional' => 'bg-red-100 text-red-700 dark:bg-red-900/30 dark:text-red-300',
    'Sosialisasi' => 'bg-green-100 text-green-700 dark:bg-green-900/30 dark:text-green-300',
    'Pelatihan'   => 'bg-purple-100 text-purple-700 dark:bg-purple-900/30 dark:text-purple-300',
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
            <span class="text-accent">Agenda</span>
        </nav>
        <span class="inline-block px-4 py-1.5 mb-4 rounded-full bg-accent/20 text-accent font-bold text-xs uppercase tracking-widest border border-accent/30 w-fit">Media Informasi</span>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight">
            Agenda <span class="text-accent">Kegiatan</span>
        </h1>
        <p class="text-slate-300 mt-4 max-w-2xl text-sm md:text-base leading-relaxed">
            Jadwal kegiatan operasional, rapat koordinasi, dan agenda resmi Satpol PP Kabupaten Kubu Raya.
        </p>
    </div>
</section>

<!-- Main Content -->
<main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-16">

    <div class="text-center mb-12">
        <h2 class="text-2xl font-extrabold text-primary dark:text-white">Jadwal Agenda Ke Depan</h2>
    </div>

    <!-- Timeline Agenda -->
    <div class="relative border-l-2 border-primary/20 dark:border-slate-800 ml-4 md:ml-6 space-y-8 pb-8">
        <?php foreach ($agenda_list as $agenda): 
            $date = date_create($agenda['tanggal']);
            $hari = date_format($date, 'd');
            $bulan = date_format($date, 'M');
            $tahun = date_format($date, 'Y');
        ?>
        <div class="relative pl-8 md:pl-10 group">
            <!-- Timeline dot -->
            <div class="absolute -left-[11px] top-4 w-5 h-5 rounded-full border-4 border-white dark:border-slate-900 bg-primary group-hover:bg-accent transition-colors z-10"></div>
            
            <div class="bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-2xl p-6 shadow-sm hover:shadow-lg hover:border-primary/30 transition-all duration-300 flex flex-col md:flex-row gap-6">
                <!-- Kalender box -->
                <div class="flex-shrink-0 w-20 h-24 bg-slate-50 dark:bg-slate-800 rounded-xl flex flex-col items-center justify-center border border-slate-100 dark:border-slate-700">
                    <span class="text-xs font-bold text-primary dark:text-slate-300 uppercase tracking-widest"><?php echo $bulan; ?></span>
                    <span class="text-3xl font-black text-primary dark:text-white leading-none my-1"><?php echo $hari; ?></span>
                    <span class="text-[10px] text-slate-500 font-bold"><?php echo $tahun; ?></span>
                </div>
                
                <!-- Info Kegiatan -->
                <div class="flex-1 min-w-0">
                    <div class="flex flex-wrap items-center gap-2 mb-2">
                        <?php $bg_warna = $kat_warna[$agenda['kategori']] ?? 'bg-slate-100 text-slate-600'; ?>
                        <span class="text-[10px] font-bold uppercase tracking-widest px-2.5 py-0.5 rounded-full <?php echo $bg_warna; ?>">
                            <?php echo htmlspecialchars($agenda['kategori']); ?>
                        </span>
                        <span class="text-[10px] font-bold uppercase tracking-widest bg-accent/10 text-accent px-2.5 py-0.5 rounded-full">
                            <?php echo htmlspecialchars($agenda['status']); ?>
                        </span>
                    </div>
                    
                    <h3 class="text-lg font-extrabold text-primary dark:text-white leading-tight mb-2 group-hover:text-primary transition-colors">
                        <?php echo htmlspecialchars($agenda['judul']); ?>
                    </h3>
                    
                    <p class="text-sm text-slate-600 dark:text-slate-400 leading-relaxed mb-4">
                        <?php echo htmlspecialchars($agenda['deskripsi']); ?>
                    </p>
                    
                    <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-6 pt-4 border-t border-slate-100 dark:border-slate-800">
                        <div class="flex items-center gap-2 text-xs text-slate-500 font-medium">
                            <span class="material-symbols-outlined text-[16px] text-primary">schedule</span>
                            <?php echo htmlspecialchars($agenda['waktu']); ?>
                        </div>
                        <div class="flex items-center gap-2 text-xs text-slate-500 font-medium">
                            <span class="material-symbols-outlined text-[16px] text-accent">location_on</span>
                            <?php echo htmlspecialchars($agenda['lokasi']); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

</main>

<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 pb-8 flex justify-end">
    <p class="text-slate-400 text-xs italic">Terakhir Diperbarui: 27 April 2026</p>
</div>

<?php require_once 'footer.php'; ?>
