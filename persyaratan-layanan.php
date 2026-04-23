<?php
$page_title   = "Persyaratan Layanan - Satpol PP Kabupaten Kubu Raya";
$current_page = "persyaratan-layanan";
require_once 'header.php';
?>

<!-- Hero Section -->
<section class="relative w-full h-[420px] overflow-hidden bg-primary">
    <div class="absolute inset-0 z-0">
        <div class="w-full h-full bg-cover bg-center opacity-40"
            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDeLFcmlZFAAz_hMeL_QUSPC8jKtQ92hHlpNJ6jNit6O75bieL7n-wp9UORrGQJJA4F5lQDrx834Y5SeICCBpluVl5deDrc37tnDSQsZKSAQNTgH_zJ_uwD7nJ7LfYwJUpZQa0HaTwHkaA2eUFV0rrgiFVFPEI4OhydFI5vnG62ZJcWjld_VDISdss5nfGwnxjNqlXuUuUITsUEd98qp8De-j545Wqw_lPBxfDRAdDYi26IGSWis0U8zEUg98nPbroyurk5oIJvnYY5');"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-primary/70 via-primary/60 to-primary"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex flex-col justify-center">
        <nav class="flex items-center gap-2 text-slate-400 text-xs font-medium mb-6">
            <a href="beranda.php" class="hover:text-accent transition-colors">Beranda</a>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <span class="text-slate-300">Standar Pelayanan</span>
            <span class="material-symbols-outlined text-xs">chevron_right</span>
            <span class="text-accent">Persyaratan Layanan</span>
        </nav>
        <span class="inline-block px-4 py-1.5 mb-4 rounded-full bg-accent/20 text-accent font-bold text-xs uppercase tracking-widest border border-accent/30 w-fit">Standar Pelayanan</span>
        <h1 class="text-4xl md:text-5xl font-extrabold text-white leading-tight">
            Persyaratan <span class="text-accent">Layanan</span>
        </h1>
        <p class="text-slate-300 mt-4 max-w-2xl text-sm md:text-base leading-relaxed">
            Dokumen dan kelengkapan yang perlu disiapkan masyarakat untuk mengakses layanan Satpol PP Kabupaten Kubu Raya.
        </p>
    </div>
</section>

<!-- Main Content -->
<main class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16 space-y-14">

    <!-- ===== SECTION KETENTUAN UMUM ===== -->
    <section id="ketentuan">
        <h2 class="text-2xl font-extrabold text-primary dark:text-white text-center mb-8">Ketentuan Umum</h2>

        <div class="bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-2xl p-8 shadow-sm space-y-4">
            <!-- ============================================================ -->
            <!-- EDIT TEKS KETENTUAN UMUM DI SINI                             -->
            <!-- ============================================================ -->
            <p class="text-slate-700 dark:text-slate-300 text-sm leading-relaxed">
                Semua dokumen persyaratan harus merupakan <strong class="text-primary dark:text-white">dokumen asli atau fotokopi yang telah dilegalisir</strong> oleh pejabat yang berwenang. Apabila terdapat perubahan persyaratan, akan diumumkan melalui papan informasi kantor dan media sosial resmi Satpol PP Kabupaten Kubu Raya.
            </p>
            <div class="h-px bg-slate-100 dark:bg-slate-800"></div>
            <p class="text-slate-600 dark:text-slate-400 text-sm leading-relaxed">
                Jam penerimaan berkas: <strong class="text-primary dark:text-white">Senin–Kamis pukul 08.00–15.00 WIB</strong> dan <strong class="text-primary dark:text-white">Jumat pukul 08.00–11.00 WIB</strong>.
            </p>
        </div>
    </section>

    <!-- ===== SECTION PERSYARATAN PER LAYANAN ===== -->
    <section id="persyaratan">
        <h2 class="text-2xl font-extrabold text-primary dark:text-white text-center mb-8">Persyaratan per Jenis Layanan</h2>

        <div class="space-y-6">
            <!-- ============================================================ -->
            <!-- EDIT DAFTAR LAYANAN DAN SYARATNYA DI SINI                    -->
            <!-- Setiap item: 'judul', 'waktu', 'syarat' (array string)       -->
            <!-- ============================================================ -->
            <?php
            $layanan_list = [
                [
                    'judul'  => 'Pengaduan Pelanggaran Perda',
                    'waktu'  => '1–3 hari kerja',
                    'syarat' => [
                        'Formulir pengaduan yang telah diisi (tersedia di kantor)',
                        'Fotokopi KTP pelapor yang masih berlaku',
                        'Bukti atau dokumentasi pelanggaran (foto, video, dll.) jika ada',
                        'Surat kuasa apabila melapor melalui perwakilan',
                    ],
                ],
                [
                    'judul'  => 'Permohonan Pengamanan Kegiatan',
                    'waktu'  => '3–5 hari kerja',
                    'syarat' => [
                        'Surat permohonan resmi dari penyelenggara kegiatan',
                        'Fotokopi KTP atau identitas resmi pemohon',
                        'Surat izin kegiatan dari instansi berwenang',
                        'Informasi detail kegiatan (waktu, tempat, jumlah peserta)',
                        'Surat keterangan dari kepala desa/lurah setempat',
                    ],
                ],
                [
                    'judul'  => 'Permohonan Rekomendasi Izin Usaha',
                    'waktu'  => '5–7 hari kerja',
                    'syarat' => [
                        'Surat permohonan rekomendasi bermaterai',
                        'Fotokopi KTP dan NPWP pemohon',
                        'Denah lokasi usaha yang jelas',
                        'Surat persetujuan tetangga atau warga sekitar',
                        'Fotokopi sertifikat atau bukti hak atas tanah atau bukti sewa',
                    ],
                ],
                [
                    'judul'  => 'Surat Keterangan Catatan Ketertiban',
                    'waktu'  => '1–2 hari kerja',
                    'syarat' => [
                        'Formulir permohonan (tersedia di kantor)',
                        'Fotokopi KTP pemohon yang masih berlaku',
                        'Pas foto terbaru ukuran 3×4 sebanyak 2 lembar',
                        'Surat keterangan dari RT dan RW setempat',
                    ],
                ],
            ];
            ?>

            <?php foreach ($layanan_list as $layanan): ?>
            <div class="bg-white dark:bg-slate-900 border border-slate-100 dark:border-slate-800 rounded-2xl p-8 shadow-sm space-y-5">
                <div class="flex items-start justify-between gap-4 flex-wrap">
                    <h3 class="text-lg font-extrabold text-primary dark:text-white"><?php echo htmlspecialchars($layanan['judul']); ?></h3>
                    <span class="text-xs font-bold text-slate-500 dark:text-slate-400 whitespace-nowrap">
                        &#x23F1; Waktu: <span class="text-primary dark:text-white"><?php echo htmlspecialchars($layanan['waktu']); ?></span>
                    </span>
                </div>
                <div class="h-px bg-slate-100 dark:bg-slate-800"></div>
                <div class="space-y-3">
                    <?php foreach ($layanan['syarat'] as $i => $syarat): ?>
                    <div class="flex gap-4 items-start border border-slate-100 dark:border-slate-700 rounded-xl p-4 hover:border-primary/20 transition-colors">
                        <span class="flex-shrink-0 w-7 h-7 bg-primary text-white text-xs font-black rounded-lg flex items-center justify-center mt-0.5"><?php echo $i + 1; ?></span>
                        <p class="text-slate-700 dark:text-slate-300 text-sm leading-relaxed"><?php echo htmlspecialchars($syarat); ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

</main>

<!-- Terakhir Diperbarui -->
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 pb-6 flex justify-end">
    <p class="text-slate-400 text-xs italic">Terakhir Diperbarui: 23 April 2026</p>
</div>

<?php require_once 'footer.php'; ?>
