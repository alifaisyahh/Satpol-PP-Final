<?php
// ============================================================
// Konfigurasi halaman
// ============================================================
$page_title   = "Berita & Informasi - Satpol PP Kabupaten Kubu Raya";
$current_page = "berita";

// ============================================================
// Data Berita (bisa diganti dengan query database)
// ============================================================
$berita = [
    [
        'gambar'    => 'https://lh3.googleusercontent.com/aida-public/AB6AXuA1ohwvMbrtbwU11_0r_ItIm2WIf81E1uKbJ4pQ7ewB0xhpDuqcaRn8wmIH2j8-pgjK2rB5KyVy-1bbHihZSd-npCqTdWGYljSDXRYKWwvEhfPv9roD2WBiIB94zRKv-0N_TuhCYhf9kQB4hzlDBvo70A1dU92d6DKCKO-DsEHEunBpBt-P31nYRrPceo1H72SWZmjwfYjl4loZCtzg2C6dSjbS-wiqza7OitXeWrSrol5XJwFBgaguQdISSpRxk0OJBI5qg-da3Lm-',
        'kategori'  => 'Operasi Lapangan',
        'tanggal'   => '14 Okt 2024',
        'judul'     => 'Penertiban Pedagang Kaki Lima di Area Perkantoran Kubu Raya',
        'ringkasan' => 'Satuan Polisi Pamong Praja melakukan penertiban secara humanis terhadap sejumlah PKL yang melanggar aturan tata ruang kota...',
    ],
    [
        'gambar'    => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCs13oU1l_K_YLcVfGYBKagrUjM9UMU05gX8MMVS-ADEar3aro1eVjGgLBJNbUyweTTKL2UtKBTa-AZ1Mo3Fj1BP8sualWViDKxD_PK2o5tp724DXh9mbTYv2ExNdLJHkATVYTXu08lUxYxwrflpuYWfIoTW4RLQLU_SfjwblnQxgs1Glia8Uwx7_1GV-W1YJZ2CQVShhJ1N1MQ1TfJDEoQAziwyyVPwjiHsLZFaZq9QXamvCf_PZvBUolCki7UmdLQ38l2mrSs9fMa',
        'kategori'  => 'Rapat Koordinasi',
        'tanggal'   => '12 Okt 2024',
        'judul'     => 'Rapat Sinergitas Keamanan Wilayah Bersama Instansi Terkait',
        'ringkasan' => 'Kepala Satpol PP memimpin rapat koordinasi strategis guna meningkatkan stabilitas keamanan dan ketertiban masyarakat menjelang...',
    ],
    [
        'gambar'    => 'https://lh3.googleusercontent.com/aida-public/AB6AXuC0Bi4X70s6SctOoxbXAHofo6prqfUu0389FbOieQAnEX4UxvAC0saOsNZnZsKyA-jGyw1Wm1KRFl9I5I76O9KOxYsBItLCtML9WyBXzU5D1fI7FMEKA1_kGGU0PON7DQcpikUjnJ7kTDLpkVYtC25VuKrlOHA5bmFR7iA14u390Sk7lbM7IVPPiqYZzzls9WnWfr4OhvY0ukEuE3O969W-tacuwH96_vUcaCSpt4dBZrvEC0zmrhksa2DWwkFYRjJQFwcLp1QFI012',
        'kategori'  => 'Kegiatan',
        'tanggal'   => '10 Okt 2024',
        'judul'     => 'Satpol PP Goes to School: Sosialisasi Perda Sejak Dini',
        'ringkasan' => 'Program edukasi bagi pelajar tingkat menengah atas mengenai pentingnya mematuhi peraturan daerah dan norma sosial di lingkungan...',
    ],
    [
        'gambar'    => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBZcR0iBVcwDA6pBRh8-SUeQy_5lnbVuw7dk20Mdj-iJwm7mjj0MH2epYcQBT4JAZaEvHiCGllH0bN6dYEJrcfrFKRyn6JROkTiEiJAZtGRjmgD01VkDpWViWdC3D90wbwsK3DRCyoSVIwf4VQu3tSxhvJCtRrxygpB1ithwTPDHt_pKRB-c7pmFZVGvp9J1sinX-HoD5Xo6E6kAMB4SasYIJ9qpIhaCugrB-YBXVBaRLnY42xcIukyES3TASZhyzzgV5zWtkglUWSA',
        'kategori'  => 'Pengumuman',
        'tanggal'   => '08 Okt 2024',
        'judul'     => 'Rekrutmen Anggota Baru Satpol PP Kabupaten Kubu Raya 2024',
        'ringkasan' => 'Pemerintah Kabupaten Kubu Raya membuka kesempatan bagi putra-putri terbaik daerah untuk bergabung menjadi tenaga kontrak...',
    ],
    [
        'gambar'    => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCPr4yUWSvyEqzUwd1mA78qJrRIpaxLldNVASIODsshMN_l7DOLysIdYK14kFs7OTEpAzdPXB0sr15vYD5oTuEj5yxmD86wQ-E2hF45oYR0KAlASHgG1nGS_KIptK5m6w1-iwjx8JLMGQGlnjA9JteXDwzhyP5Gf-JB_4a7vWLpon3EB119XQBjdy3LvpnjI3IA4PKRlLSIrHi3HkbeSJ39mqGuiz6uHGg9oyPntKVddEB5KCiip_ZkVD9FJ18bJwRmKSBy3WdxF3SX',
        'kategori'  => 'Kegiatan',
        'tanggal'   => '05 Okt 2024',
        'judul'     => 'Pelatihan Peningkatan Kapasitas Personil Satpol PP',
        'ringkasan' => 'Dalam rangka meningkatkan profesionalisme, seluruh anggota Satpol PP mengikuti pelatihan fisik dan wawasan hukum yang...',
    ],
    [
        'gambar'    => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAd8dpClf1bLpByi65PXTPjGlWzLZL-SHIOv55KdP0_6yHW1jAWiBXNNBNNKBGBvxJ5doQeU-PJZRXg2-yTtLmHcEVFe21-bABSe0l4xBt88wGwGd4adsTuixxitvWh4vF_4QDF_qQ6DfJuasXDNJ5mxYkP1iymEAaYzNuldhcRNFhKOuchvk7t8pJCgalC34s9SXfeUhOo9X9QY8mCotX9wstos5_d41LgepTAhrqdFG1UVEdm7pp-lvM0VAROzEGkjh3JmjuMhNbE',
        'kategori'  => 'Operasi Lapangan',
        'tanggal'   => '01 Okt 2024',
        'judul'     => 'Patroli Malam Cipta Kondisi di Titik Rawan Kerumunan',
        'ringkasan' => 'Patroli rutin ditingkatkan pada jam-jam rawan untuk memastikan ketentraman warga dan mencegah potensi gangguan keamanan...',
    ],
];

// ============================================================
// Konfigurasi Pagination
// ============================================================
$total_halaman   = 3;   // ganti sesuai total halaman dari database
$halaman_aktif   = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_aktif   = max(1, min($halaman_aktif, $total_halaman));

// ============================================================
// Load Header
// ============================================================
require_once 'header.php';
?>

<!-- Hero Section -->
<section class="relative w-full h-[420px] overflow-hidden bg-primary">
    <div class="absolute inset-0 z-0">
        <div class="w-full h-full bg-cover bg-center opacity-40"
            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuA1ohwvMbrtbwU11_0r_ItIm2WIf81E1uKbJ4pQ7ewB0xhpDuqcaRn8wmIH2j8-pgjK2rB5KyVy-1bbHihZSd-npCqTdWGYljSDXRYKWwvEhfPv9roD2WBiIB94zRKv-0N_TuhCYhf9kQB4hzlDBvo70A1dU92d6DKCKO-DsEHEunBpBt-P31nYRrPceo1H72SWZmjwfYjl4loZCtzg2C6dSjbS-wiqza7OitXeWrSrol5XJwFBgaguQdISSpRxk0OJBI5qg-da3Lm-');"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-primary/70 via-primary/60 to-primary"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col justify-center">
        <!-- Breadcrumb -->
        <nav class="flex items-center gap-2 text-slate-400 text-xs font-medium mb-6">
            <a href="beranda.php" class="hover:text-accent transition-colors">Beranda</a>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <span class="text-accent">Berita &amp; Informasi</span>
        </nav>
        <span class="inline-block px-4 py-1.5 mb-4 rounded-full bg-accent/20 text-accent font-bold text-xs uppercase tracking-widest border border-accent/30 w-fit">Informasi Publik</span>
        <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-tight">
            Berita <span class="text-accent">&amp; Informasi</span>
        </h1>
        <p class="text-slate-300 mt-4 max-w-2xl text-base md:text-lg leading-relaxed">
            Pantau informasi terkini mengenai kegiatan, pengumuman, dan operasi lapangan Satpol PP Kabupaten Kubu Raya.
        </p>
    </div>
</section>

<!-- Content Grid -->
<section class="max-w-7xl mx-auto px-8 py-16">
    <div class="w-full">

        <!-- News Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($berita as $item): ?>
                <article class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
                    <div class="aspect-video overflow-hidden relative">
                        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            src="<?php echo $item['gambar']; ?>"
                            alt="<?php echo htmlspecialchars($item['judul']); ?>" />
                        <span class="absolute top-4 left-4 bg-primary text-white text-[10px] font-extrabold uppercase px-3 py-1 rounded-full tracking-widest">
                            <?php echo htmlspecialchars($item['kategori']); ?>
                        </span>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2 text-slate-400 text-[11px] font-bold uppercase tracking-wider mb-3">
                            <span class="material-symbols-outlined text-[16px]">calendar_month</span>
                            <?php echo htmlspecialchars($item['tanggal']); ?>
                        </div>
                        <h2 class="text-xl font-extrabold text-primary leading-tight group-hover:text-secondary transition-colors mb-4">
                            <?php echo htmlspecialchars($item['judul']); ?>
                        </h2>
                        <p class="text-slate-600 text-sm leading-relaxed line-clamp-3 mb-6">
                            <?php echo htmlspecialchars($item['ringkasan']); ?>
                        </p>
                        <a class="inline-flex items-center gap-1 font-black text-xs uppercase tracking-widest text-primary group-hover:gap-3 transition-all" href="#">
                            Baca Selengkapnya <span class="material-symbols-outlined text-[16px]">arrow_right_alt</span>
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <!-- Pagination -->
        <div class="mt-16 flex justify-center gap-2">
            <!-- Tombol Sebelumnya -->
            <a href="?halaman=<?php echo max(1, $halaman_aktif - 1); ?>"
                class="w-12 h-12 rounded-xl flex items-center justify-center bg-white shadow-sm text-primary font-bold hover:bg-primary hover:text-white transition-all
                      <?php echo $halaman_aktif === 1 ? 'opacity-40 pointer-events-none' : ''; ?>">
                <span class="material-symbols-outlined">chevron_left</span>
            </a>

            <!-- Nomor Halaman -->
            <?php for ($i = 1; $i <= $total_halaman; $i++): ?>
                <a href="?halaman=<?php echo $i; ?>"
                    class="w-12 h-12 rounded-xl flex items-center justify-center font-bold shadow-sm transition-all
                      <?php echo $i === $halaman_aktif
                            ? 'bg-primary text-white shadow-lg'
                            : 'bg-white text-primary hover:bg-primary hover:text-white'; ?>">
                    <?php echo $i; ?>
                </a>
            <?php endfor; ?>

            <!-- Tombol Berikutnya -->
            <a href="?halaman=<?php echo min($total_halaman, $halaman_aktif + 1); ?>"
                class="w-12 h-12 rounded-xl flex items-center justify-center bg-white shadow-sm text-primary font-bold hover:bg-primary hover:text-white transition-all
                      <?php echo $halaman_aktif === $total_halaman ? 'opacity-40 pointer-events-none' : ''; ?>">
                <span class="material-symbols-outlined">chevron_right</span>
            </a>
        </div>

    </div>
</section>

<?php
// ============================================================
// Load Footer
// ============================================================
require_once 'footer.php';
?>